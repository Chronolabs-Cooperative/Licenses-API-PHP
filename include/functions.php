<?php
/**
 * Chronolabs Torrent Tracker REST API
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       	Chronolabs Cooperative http://snails.email
 * @license         	General Public License version 3 (http://snails.email/briefs/legal/general-public-licence/13,3.html)
 * @package         	tracker
 * @since           	2.1.9
 * @author          	Simon Roberts <wishcraft@users.sourceforge.net>
 * @subpackage		api
 * @description		Torrent Tracker REST API
 * @link				http://sourceforge.net/projects/chronolabsapis
 * @link				http://cipher.snails.email
 */

define('_API_FATAL_MESSAGE', 'Error: %s');
define('_API_FATAL_BACKTRACE', 'Error: %s<br/><br/>%s');

require_once __DIR__.'/common.php';
require_once dirname(__DIR__).'/class/cache/apicache.php';
require_once dirname(__DIR__).'/class/xcp/xcp.class.php';

if (!function_exists("getURIData")) {
    
    /* function getURIData()
     *
     * 	Get a supporting domain system for the API
     * @author 		Simon Roberts (Chronolabs) simon@labs.coop
     *
     * @return 		float()
     */
    function getURIData($uri = '', $timeout = 25, $connectout = 25, $post = array(), $headers = array())
    {
        if (!function_exists("curl_init"))
        {
            die("Install PHP Curl Extension ie: $ sudo apt-get install php-curl -y");
        }
        $GLOBALS['php-curl'][md5($uri)] = array();
        if (!$btt = curl_init($uri)) {
            return false;
        }
        if (count($post)==0 || empty($post))
            curl_setopt($btt, CURLOPT_POST, false);
        else {
            $uploadfile = false;
            foreach($post as $field => $value)
                if (substr($value , 0, 1) == '@' && !file_exists(substr($value , 1, strlen($value) - 2)))
                    unset($post[$field]);
                else 
                    $uploadfile = true;
            curl_setopt($btt, CURLOPT_POST, true);
            curl_setopt($btt, CURLOPT_POSTFIELDS, http_build_query($post));
            
            if (!empty($headers))
                foreach($headers as $key => $value)
                    if ($uploadfile==true && substr($value, 0, strlen('Content-Type:')) == 'Content-Type:')
                        unset($headers[$key]);
            if ($uploadfile==true)
                $headers[]  = 'Content-Type: multipart/form-data';
        }
        if (count($headers)==0 || empty($headers))
            curl_setopt($btt, CURLOPT_HEADER, false);
        else {
            curl_setopt($btt, CURLOPT_HEADER, true);
            curl_setopt($btt, CURLOPT_HTTPHEADER, $headers);
        }
        curl_setopt($btt, CURLOPT_CONNECTTIMEOUT, $connectout);
        curl_setopt($btt, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($btt, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($btt, CURLOPT_VERBOSE, false);
        curl_setopt($btt, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($btt, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($btt);
        $GLOBALS['php-curl'][md5($uri)]['http']['posts'] = $post;
        $GLOBALS['php-curl'][md5($uri)]['http']['headers'] = $headers;
        $GLOBALS['php-curl'][md5($uri)]['http']['code'] = curl_getinfo($btt, CURLINFO_HTTP_CODE);
        $GLOBALS['php-curl'][md5($uri)]['header']['size'] = curl_getinfo($btt, CURLINFO_HEADER_SIZE);
        $GLOBALS['php-curl'][md5($uri)]['header']['value'] = curl_getinfo($btt, CURLINFO_HEADER_OUT);
        $GLOBALS['php-curl'][md5($uri)]['size']['download'] = curl_getinfo($btt, CURLINFO_SIZE_DOWNLOAD);
        $GLOBALS['php-curl'][md5($uri)]['size']['upload'] = curl_getinfo($btt, CURLINFO_SIZE_UPLOAD);
        $GLOBALS['php-curl'][md5($uri)]['content']['length']['download'] = curl_getinfo($btt, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
        $GLOBALS['php-curl'][md5($uri)]['content']['length']['upload'] = curl_getinfo($btt, CURLINFO_CONTENT_LENGTH_UPLOAD);
        $GLOBALS['php-curl'][md5($uri)]['content']['type'] = curl_getinfo($btt, CURLINFO_CONTENT_TYPE);
        curl_close($btt);
        return $data;
    }
}

if (!function_exists("yonkCountries")) {
    function yonkCountries()
    {
        static $_countries = array();
        if (count($_countries) < 10)
        if (count($_countries == APICache::read('countries')) < 10)
        {
            $countries = explode("\n", file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'countries.diz'));
            $json = array();
            while(count($countries)<10 && count($json)<10)
            {
                shuffle($countries);
                $json = json_decode(getURIData($countries[0], 35, 50), true);
                unset($countries[0]);
            }
            $GLOBALS['APIDB']->queryF('START TRANSACTION');
            if (!empty($json))
            {
                foreach($json as $id => $country)
                {
                    
                    $sql = "SELECT count(*) FROM `" . $GLOBALS["APIDB"]->prefix('licenses_countries') . '` WHERE `key` LIKE "' . $country['key'] . '"';
                    list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
                    if ($count == 0)
                    {
                        $sql = "INSERT INTO `" . $GLOBALS["APIDB"]->prefix('licenses_countries') . '` (`created`, `key`, `name`, `iso2`, `iso3`, `tld`, `currency`) VALUES(UNIX_TIMESTAMP(), "' . $country['key'] . '","' . $country['Country'] . '","' . $country['ISO2'] . '","' . $country['ISO3']. '","' . $country['TLD']. '","' . $country['CurrencyCode'] . '")';
                        if (!$GLOBALS['APIDB']->queryF($sql))
                            die("SQL Failed: $sql;");
                    }
                }
            }
            $GLOBALS['APIDB']->queryF('COMMIT');
            $sql = "SELECT * FROM `" . $GLOBALS["APIDB"]->prefix('licenses_countries') . '` ORDER BY `name` ASC';
            $result = $GLOBALS['APIDB']->queryF($sql);
            while($cuntry = $GLOBALS['APIDB']->fetchArray($result))
            {
                $_countries[$cuntry['key']] = $cuntry;
            }
        }
        if (empty($_countries))
            return false;
        else 
            APICache::write('countries', $_countries, 3600 * 128);
        return $_countries;
    }   
}

if (!function_exists("cleanWhitespaces")) {
    /**
     *
     * @param array $array
     */
    function cleanWhitespaces($array = array())
    {
        foreach($array as $key => $value)
        {
            if (is_array($value))
                $array[$key] = cleanWhitespaces($value);
            else {
                $array[$key] = trim(str_replace(array("\n", "\r", "\t"), "", $value));
            }
        }
        return $array;
    }
}

if (!function_exists("yonkStampingShellExec")) {
    /**
     * Get a bash shell execution command for stamping archives
     *
     * @return array
     */
    function yonkStampingShellExec()
    {
        $ret = array();
        foreach(cleanWhitespaces(file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'packs-stamping.diz')) as $values)
        {
            $parts = explode("||", $values);
            $ret[$parts[0]] = $parts[1];
        }
        return $ret;
    }
}

if (!function_exists("yonkArchivingShellExec")) {
    /**
     * Get a bash shell execution command for creating archives
     *
     * @return array
     */
    function yonkArchivingShellExec()
    {
        $ret = array();
        foreach(cleanWhitespaces(file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'packs-archiving.diz')) as $values)
        {
            $parts = explode("||", $values);
            $ret[$parts[0]] = $parts[1];
        }
        return $ret;
    }
}

if (!function_exists("yonkExtractionShellExec")) {
    /**
     * Get a bash shell execution command for extracting archives
     *
     * @return array
     */
    function yonkExtractionShellExec()
    {
        $ret = array();
        foreach(cleanWhitespaces(file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'packs-extracting.diz')) as $values)
        {
            $parts = explode("||", $values);
            $ret[$parts[0]] = $parts[1];
        }
        return $ret;
    }
}

if (!function_exists("yonkHTMLForms")) {
    function yonkHTMLForms($mode = '', $clause = '', $output = '')
    {
        error_reporting(E_ALL);
        ini_set('display_errors', true);
        ini_set('log_errors', true);
        ini_set('error_log', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'errors.txt');
        $ua = substr(sha1($_SERVER['HTTP_USER_AGENT']), mt_rand(0,32), 9);
        $form = array();
        switch ($mode)
        {
            case "license":
                $form[] = "<form name=\"" . $ua . "\" method=\"POST\" enctype=\"multipart/form-data\" action=\"" . API_URL . "/v1/post.api\">";
                $form[] = "\t<table class='license-creator' id='license-creator' style='vertical-align: top !important; min-width: 98%;'>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='title'>License Title:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='title' id='title' maxlen='128' size='41' />&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='versioning'>License Versioning:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<label for='major'>Major:&nbsp</label><input type='textbox' name='major' id='major' maxlen='4' size='4' value='1' />&nbsp;";
                $form[] = "\t\t\t\t<label for='minor'>Minor:&nbsp</label><input type='textbox' name='minor' id='minor' maxlen='4' size='4' value='0' /><br />";
                $form[] = "\t\t\t\t<label for='revision'>Revision:&nbsp</label><input type='textbox' name='revision' id='revision' maxlen='4' size='4' value='0' />&nbsp;";
                $form[] = "\t\t\t\t<label for='subrevision'>Sub-revision:&nbsp</label><input type='textbox' name='subrevision' id='subrevision' maxlen='4' size='4' value='0' />";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3'>";
                $form[] = "\t\t\t\t<label for='logo'>License Logo:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t\t<input type='file' name='logo' id='logo'><br/>";
                $form[] = "\t\t\t\t<div style='margin-left:42px; font-size: 71.99%; margin-top: 7px; padding: 11px;'>";
                $form[] = "\t\t\t\t\t ~~ <strong>Maximum Upload Size Is: <em style='color:rgb(255,100,123); font-weight: bold; font-size: 132.6502%;'>" . ini_get('upload_max_filesize') . "!!!</em></strong><br/>";
                $formats = file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'logo-supported.diz'); sort($formats);
                $form[] = "\t\t\t\t\t ~~ <strong>Image Formats Supported: <em style='color:rgb(15,70 43); font-weight: bold; font-size: 81.6502%;'>*." . str_replace("\n" , "", implode(" *.", array_unique($formats))) . "</em></strong>!<br/>";
                $form[] = "\t\t\t\t</div>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='subjective-title'>Licensing Subjective Title:&nbsp;</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='subjective-title' id='subjective-title' maxlen='128' size='41' /><br/>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3'>";
                $form[] = "\t\t\t\t<label for='logo'>License Subjective Logo:</label>";
                $form[] = "\t\t\t\t<input type='file' name='subjective-logo' id='subjective-logo'><br/>";
                $form[] = "\t\t\t\t<div style='margin-left:42px; font-size: 71.99%; margin-top: 7px; padding: 11px;'>";
                $form[] = "\t\t\t\t\t ~~ <strong>Maximum Upload Size Is: <em style='color:rgb(255,100,123); font-weight: bold; font-size: 132.6502%;'>" . ini_get('upload_max_filesize') . "!!!</em></strong><br/>";
                $formats = file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'logo-supported.diz'); sort($formats);
                $form[] = "\t\t\t\t\t ~~ <strong>Image Formats Supported: <em style='color:rgb(15,70 43); font-weight: bold; font-size: 81.6502%;'>*." . str_replace("\n" , "", implode(" *.", array_unique($formats))) . "</em></strong>!<br/>";
                $form[] = "\t\t\t\t</div>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='source-url'>Licensing Source URL:&nbsp;</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='source-url' id='source-url' maxlen='128' size='41' /><br/>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='contact-email'>Licensing Contact Email:&nbsp;</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='contact-email' id='contact-email' maxlen='128' size='41' /><br/>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='filename-txt'>Licensing Filename in Text Format:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='filename-txt' id='filename-txt' maxlen='128' size='41' value='LICENSE' /><br/>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";                
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='filename-html'>Licensing Filename in HTML Format:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='filename-html' id='filename-html' maxlen='128' size='41' value='license.html' /><br/>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='text'>License Text in text format:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<textarea name='text' id='text' cols='44' rows='11'></textarea>&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='html'>License Text in HTML format:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<textarea name='html' id='html' cols='44' rows='11'></textarea>&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='countries'>Licensing Supported in countries:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<select name='countries[]' id='countries' multiple size='16' >";
                foreach(yonkCountries() as $key => $country)
                   $form[] = "\t\t\t\t\t<option value='".$country['id']."' selected='selected'>".$country['name']."</option>";
                $form[] = "\t\t\t\t</select>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3' style='padding-left:64px;'>";
                $form[] = "\t\t\t\t<input type='hidden' name='op' value='license'>";
                $form[] = "\t\t\t\t<input type='submit' value='Create License' name='submit' style='padding:11px; font-size:122%;'>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3' style='padding-top: 8px; padding-bottom: 14px; padding-right:35px; text-align: right;'>";
                $form[] = "\t\t\t\t<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold;'>* </font><font  style='color: rgb(10,10,10); font-size: 99%; font-weight: bold'><em style='font-size: 76%'>~ Required Field for Form Submission</em></font>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t</table>";
                $form[] = "</form>";
                break;     
            case "sighting":
                $xcp = new xcp(microtime(), mt_rand(0,255), mt_rand(6,15));
                $key = $xcp->calc(microtime());
                $form[] = "<form name=\"" . $ua . "\" method=\"POST\" enctype=\"multipart/form-data\" action=\"" . API_URL . "/v1/post.api\">";
                $form[] = "\t<table class='sighting-creator' id='sighting-creator' style='vertical-align: top !important; min-width: 98%;'>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='key'>Distribution Identity Key:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='key' id='key' maxlen='44' size='41' value='".$key."' />&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='type'>Distribution Type:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<select name='type' id='type'>";
                $form[] = "\t\t\t\t\t<option value='core'>Core Framework/Operating Systems</option>";
                $form[] = "\t\t\t\t\t<option value='application'>Framework/Systems Application</option>";
                $form[] = "\t\t\t\t\t<option value='module'>Framework/Systems Module</option>";
                $form[] = "\t\t\t\t\t<option value='extension'>Framework/Systems Extension</option>";
                $form[] = "\t\t\t\t\t<option value='plugin'>Framework/Systems Plugin</option>";
                $form[] = "\t\t\t\t\t<option value='3rd party'>3rd Party Addon</option>";
                $form[] = "\t\t\t\t\t<option value='audio'>Audio Resource</option>";
                $form[] = "\t\t\t\t\t<option value='video'>Video Resource</option>";
                $form[] = "\t\t\t\t\t<option value='image'>Single Image Resource</option>";
                $form[] = "\t\t\t\t\t<option value='images'>Multiple Images Resource</option>";
                $form[] = "\t\t\t\t\t<option value='media'>Media Resource</option>";
                $form[] = "\t\t\t\t\t<option value='artwork'>Artwork(s)</option>";
                $form[] = "\t\t\t\t\t<option value='other' selected='selected'>Other Artifact</option>";
                $form[] = "\t\t\t\t</select>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='download-url'>Download URL:</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='download-url' id='download-url' maxlen='250' size='41' />&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='support-url'>Support URL:</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='support-url' id='support-url' maxlen='250' size='41' />&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='repo-url'>Repository URL:</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='repo-url' id='repo-url' maxlen='250' size='41' />&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='callback-url'>Callback URL:</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='callback-url' id='callback-url' maxlen='250' size='41' />&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='name'>Distribution name:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='name' id='name' maxlen='128' size='41' />&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='version'>Distribution version:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='version' id='version' maxlen='16' size='18' />&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='framework'>Operating framework:</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='framework' id='framework' maxlen='128' size='41' />&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td style='width: 320px;'>";
                $form[] = "\t\t\t\t<label for='framework-version'>Framework version:</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<input type='textbox' name='framework-version' id='framework-version' maxlen='16' size='18' />&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='description'>Distribution description:</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<textarea name='description' id='description' cols='44' rows='11'></textarea>&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='authors'>Authors JSON Document:</label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<textarea name='authors' id='authors' cols='44' rows='11'></textarea>&nbsp;&nbsp;";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3'>";
                $form[] = "\t\t\t\t<label for='logo'>Distribution logo:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t\t<input type='file' name='logo' id='logo'><br/>";
                $form[] = "\t\t\t\t<div style='margin-left:42px; font-size: 71.99%; margin-top: 7px; padding: 11px;'>";
                $form[] = "\t\t\t\t\t ~~ <strong>Maximum Upload Size Is: <em style='color:rgb(255,100,123); font-weight: bold; font-size: 132.6502%;'>" . ini_get('upload_max_filesize') . "!!!</em></strong><br/>";
                $formats = file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'logo-supported.diz'); sort($formats);
                $form[] = "\t\t\t\t\t ~~ <strong>Image Formats Supported: <em style='color:rgb(15,70 43); font-weight: bold; font-size: 81.6502%;'>*." . str_replace("\n" , "", implode(" *.", array_unique($formats))) . "</em></strong>!<br/>";
                $form[] = "\t\t\t\t</div>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='licenses'>Licensing Bundled with Distribution:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<select name='licenses[]' id='licenses' multiple size='16' >";
                foreach(yonkLicenses() as $key => $licence)
                    $form[] = "\t\t\t\t\t<option value='".$licence['id']."' >".$licence['title']." ( ". $licence['code'] . " )</option>";
                $form[] = "\t\t\t\t</select>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='type'>Licencing File(s) Format:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<select name='files' id='files'>";
                $form[] = "\t\t\t\t\t<option value='text' selected='selected'>Text Licensing File(s)</option>";
                $form[] = "\t\t\t\t\t<option value='html'>HTML Licensing File(s)</option>";
                $form[] = "\t\t\t\t</select>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td>";
                $form[] = "\t\t\t\t<label for='type'>Archiving Format:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t\t<td colspan='2'>";
                $form[] = "\t\t\t\t<select name='format' id='format'>";
                foreach(array_keys(yonkArchivingShellExec()) as $format)
                    $form[] = "\t\t\t\t\t<option value='".$format."'>License(s) - Distribution Name v1.0.1.1.".$format."</option>";
                $form[] = "\t\t\t\t</select>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3' style='padding-left:64px;'>";
                $form[] = "\t\t\t\t<input type='hidden' name='op' value='sighting'>";
                $form[] = "\t\t\t\t<input type='submit' value='Create Licensing Sighting' name='submit' style='padding:11px; font-size:122%;'>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3' style='padding-top: 8px; padding-bottom: 14px; padding-right:35px; text-align: right;'>";
                $form[] = "\t\t\t\t<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold;'>* </font><font  style='color: rgb(10,10,10); font-size: 99%; font-weight: bold'><em style='font-size: 76%'>~ Required Field for Form Submission</em></font>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t</table>";
                $form[] = "</form>";
                break;     
        }
        return implode("\n", $form);
    }
}

if (!function_exists('yonkSealSighting'))
{
    function yonkSealSighting($sightingid = 0)
    {
        $licensing = array();
        $sql = "SELECT `sighting-id`, `license-id`, `created` FROM `" . $GLOBALS['APIDB']->prefix('sightings_licenses') . "` WHERE `sighting-id` = '" . $sightingid . "' ORDER BY `license-id` DESC";
        $result = $GLOBALS['APIDB']->queryF($sql);
        while($license = $GLOBALS['APIDB']->fetchArray($result))
            foreach($license as $key => $value)
                $licensing[] = $value;
        $sql = "UPDATE `" . $GLOBALS['APIDB']->prefix('sightings') . "` SET `seal` = sha1(concat('".implode("', '", $licensing)."', `key`, `type`, `download-url`, `support-url`, `repo-url`, `callback-url`, `name`, `version`, `framework`, `framework-version`, `description`, `authors`, `logo`, `logo-mimetype`, `created`)) WHERE `id` = '" . $sightingid . "'";
        return $GLOBALS['APIDB']->queryF($sql);
    }
}

if (!function_exists('checkSealSighting'))
{
    function checkSealSighting($sightingid = 0)
    {
        $licensing = array();
        $sql = "SELECT `sighting-id`, `license-id`, `created` FROM `" . $GLOBALS['APIDB']->prefix('sightings_licenses') . "` WHERE `sighting-id` = '" . $sightingid . "' ORDER BY `license-id` DESC";
        $result = $GLOBALS['APIDB']->queryF($sql);
        while($license = $GLOBALS['APIDB']->fetchArray($result))
            foreach($license as $key => $value)
                $licensing[] = $value;
        $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('sightings') . "` WHERE `id` = '".$sightingid."' AND `seal` LIKE sha1(concat('".implode("', '", $licensing)."', `key`, `type`, `download-url`, `support-url`, `repo-url`, `callback-url`, `name`, `version`, `framework`, `framework-version`, `description`, `authors`, `logo`, `logo-mimetype`, `created`))";;
        list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
        return ($count==0?false:true);
    }
}

if (!function_exists('yonkLicensingArchive'))
{
    function yonkLicensingArchive($sightingid = 0, $type = 'text', $format = 'zip')
    {
        
        if (checkSealSighting($sightingid) == false)
        {
            redirect(API_URL, 9, "<h1>Sighting Security Seal Validation Failed</h1><p>Unfortunately you will not be able to generate the licensing archive/pack for this distribution as the security seal is failing validation!</p>");
            exit(0);
        }
        
        $filenames = $licenseids = array();
        $sql = "SELECT `license-id` FROM `" . $GLOBALS['APIDB']->prefix('sightings_licenses') . "` WHERE `sighting-id` = '" . $sightingid . "' ORDER BY `license-id` DESC";
        $result = $GLOBALS['APIDB']->queryF($sql);
        while($license = $GLOBALS['APIDB']->fetchArray($result))
            $licenseids[] = $license['license-id'];
        mkdir($workingdir = API_VAR_PATH . DIRECTORY_SEPARATOR . microtime(true), 0777, true);
        mkdir($resultsdir = API_VAR_PATH . DIRECTORY_SEPARATOR . parse_url(API_URL, PHP_URL_HOST), 0777, true);
        switch($type)
        {
            case "text":
                $filefield = 'filename-txt';
                break;
            case "html":
                $filefield = 'filename-html';
                break;
        }
        $sql = "SELECT count(*) as `count`, `$filefield` as `filename` FROM `" . $GLOBALS["APIDB"]->prefix('licenses') . "` WHERE `id` IN('".implode("', '", $licenseids)."') GROUP BY `$filefield`";
        $result = $GLOBALS["APIDB"]->queryF($sql);
        while($license = $GLOBALS["APIDB"]->fetchArray($result))
        {
            $filenames[$license['filename']] = $license['count'];
        }
        $sql = "SELECT `a`.`$filefield` as `filename`, `a`.`image-logo`, `a`.`source-url`, `a`.`contact-email`, `b`.`code`, , `c`.`major`, `c`.`minor`, `c`.`revision`, `c`.`subrevision`, `d`.`title`, `e`.`$type` as `license`, `e`.`words-$type` as `words`, `f`.`subjects`, `f`.`logo` as `subject-logo`, `f`.`logo-mimetype` as `subject-logo-mimetype` FROM `" . $GLOBALS["APIDB"]->prefix('licenses') . "` as `a` INNER JOIN  `" . $GLOBALS["APIDB"]->prefix('codes') . "` as `b` ON `a`.`code-id` = `b`.`id` INNER JOIN `" . $GLOBALS["APIDB"]->prefix('versions') . "` as `c` ON `a`.`version-id` = `c`.`id` INNER JOIN `" . $GLOBALS["APIDB"]->prefix('titles') . "` as `d` ON `a`.`title-id` = `d`.`id` INNER JOIN `" . $GLOBALS["APIDB"]->prefix('resources') . "` as `e` ON `a`.`resource-id` = `e`.`id` INNER JOIN `" . $GLOBALS["APIDB"]->prefix('subjectives') . "` as `f` ON `a`.`subjective-id` = `f`.`id` WHERE `a`.`id` IN('".implode("', '", $licenseids)."') ORDER BY `a`.`filename` ASC, `b`.`code` ASC";
        $result = $GLOBALS["APIDB"]->queryF($sql);
        $json = array();
        $json['totals']['licenses'] = $words = $bytes = 0;
        while($license = $GLOBALS["APIDB"]->fetchArray($result))
        {
            $json['totals']['licenses']++;
            if ($filenames[$license['filename']]>1)
            {
                $parts = explode('.', $license['filename']);
                $start = $parts[0];
                unset($parts[0]);
                if (substr($start, 1) == strtoupper(substr($start, 1)))
                    $upper = true;
                else 
                    $upper = false;
                $file = $start . '.' . ($upper==true?$licence['code']:strtolower($licence['code'])) . (count($parts)>0?".".implode('.', $parts):"");
            } else 
                $file = $license['filename'];
            writeRawFile($workingdir . DIRECTORY_SEPARATOR . $file, $license['license']);
            $json['licenses'][$licence['code']]['local']['title'] = $license['title'];
            $json['licenses'][$licence['code']]['local']['code'] = $license['code'];
            $json['licenses'][$licence['code']]['local']['filename'] = $file;
            $json['licenses'][$licence['code']]['local']['words'] = $license['words'];
            $json['licenses'][$licence['code']]['local']['md5'] = md5_file($workingdir . DIRECTORY_SEPARATOR . $file);
            $json['licenses'][$licence['code']]['local']['bytes'] = filesize($workingdir . DIRECTORY_SEPARATOR . $file);
            $json['licenses'][$licence['code']]['local']['mtime'] = filemtime($workingdir . DIRECTORY_SEPARATOR . $file);
            $bytes = $bytes + filesize($workingdir . DIRECTORY_SEPARATOR . $file);
            $words = $words + $license['words'];
            $json['licenses'][$licence['code']]['remote']['text'] = API_URL . "/v1/license/".$licence['code']."/text.api";
            $json['licenses'][$licence['code']]['remote']['html'] = API_URL . "/v1/license/".$licence['code']."/html.api";
            $json['licenses'][$licence['code']]['remote']['page'] = API_URL . "/v1/license/".$licence['code']."/page.api";
            $json['licenses'][$licence['code']]['remote']['logo'] = API_URL . $licence['image-logo'];
            if (!empty($licence['subjects'])) {
                $json['licenses'][$licence['code']]['subject']['title'] = $licence['subjects'];
                if (!empty($licence['subject-logo'])) {
                    $json['licenses'][$licence['code']]['subject']['logo'] = API_URL . "/v1/logos/subjective/".$licence['code']."/image.api";
                }
            }
            if (!empty($licence['source-url'])) 
                $json['licenses'][$licence['code']]['source']['url'] = $licence['source-url'];
            if (!empty($licence['contact-email']))
                $json['licenses'][$licence['code']]['source']['email'] = $licence['contact-email'];
            if ($license['subrevision']>0)
                $json['licenses'][$licence['code']]['version'] = $license['major'] . '.' . $license['minor'] . '.' . $license['revision'] . '.' . $license['subrevision'];
            elseif ($license['revision']>0)
                $json['licenses'][$licence['code']]['version'] = $license['major'] . '.' . $license['minor'] . '.' . $license['revision'];
            else
                $json['licenses'][$licence['code']]['version'] = $license['major'] . '.' . $license['minor'];
        }
        $json['totals']['bytes'] = $bytes;
        $json['totals']['words'] = $words;
        $sql = "SELECT * FROM `" . $GLOBALS['APIDB']->prefix('sightings') . "` WHERE `id` = '" . $sightingid . "'";
        $sighting = $GLOBALS['APIDB']->fetchArray($GLOBALS['APIDB']->queryF($sql));
        $json['distribution']['key'] = $sighting['key'];
        $json['distribution']['name'] = $sighting['name'];
        $json['distribution']['version'] = $sighting['version'];
        if (!empty($sighting['framework'])) {
            $json['distribution']['framework']['name'] = $sighting['framework'];
            if (!empty($sighting['framework-version']))
                $json['distribution']['framework']['version'] = $sighting['framework-version'];
        }
        if (!empty($sighting['logo']))
            $json['distribution']['logo'] = API_URL . "/v1/logos/distribution/".$sighting['key']."/image.api";
        if (!empty($sighting['description']))
            $json['distribution']['description'] = $sighting['description'];
        writeRawFile($workingdir . DIRECTORY_SEPARATOR . 'licensing.json', json_encode($json));
        rename($workingdir . DIRECTORY_SEPARATOR . 'licensing.json', $workingdir . DIRECTORY_SEPARATOR . 'licensing.'.md5_file($workingdir . DIRECTORY_SEPARATOR . 'licensing.json').'.json');
        chdir($workingdir);
        $packing = yonkArchivingShellExec();
        $cmd = (substr($packing[$format],0,1)!="#"?DIRECTORY_SEPARATOR . "usr" . DIRECTORY_SEPARATOR . "bin" . DIRECTORY_SEPARATOR:'') . str_replace("%folder", "./*", str_replace("%pack", $archive = $resultsdir . DIRECTORY_SEPARATOR . microtime(true) . ".$format", (substr($packing[$format],0,1)!="#"?$packing[$format]:substr($packing[$format],1))));
        $outt = shell_exec($cmd);
        $cmd = "rm -Rfv \"$workingdir\"";
        $outt = array(); exec($cmd, $outt);
        if (file_exists($archive))
            return $archive;
        return false;
    }
}


if (!function_exists("writeRawFile")) {
    /**
     *
     * @param string $file
     * @param string $data
     */
    function writeRawFile($file = '', $data = '')
    {
        $lineBreak = "\n";
        if (substr(PHP_OS, 0, 3) == 'WIN') {
            $lineBreak = "\r\n";
        }
        if (!is_dir(dirname($file)))
            mkdir(dirname($file), 0777, true);
        if (is_file($file))
            unlink($file);
        $data = str_replace("\n", $lineBreak, $data);
        $ff = fopen($file, 'w');
        fwrite($ff, $data, strlen($data));
        fclose($ff);
    }
}

if (!function_exists('yonkLicenses'))
{
    function yonkLicenses()
    {
        static $licences = array();
        if (empty($licences))
        {
            $sql = "SELECT `a`.`id`, `b`.`code`, `c`.`major`, `c`.`minor`, `c`.`revision`, `c`.`subrevision`, `d`.`title` FROM `" . $GLOBALS["APIDB"]->prefix('licenses') . "` as `a` INNER JOIN  `" . $GLOBALS["APIDB"]->prefix('codes') . "` as `b` ON `a`.`code-id` = `b`.`id` INNER JOIN  `" . $GLOBALS["APIDB"]->prefix('versions') . "` as `c` ON `a`.`version-id` = `c`.`id` INNER JOIN  `" . $GLOBALS["APIDB"]->prefix('titles') . "` as `d` ON `a`.`title-id` = `d`.`id` ORDER BY `d`.`title` ASC, `b`.`code` ASC";
            $result = $GLOBALS["APIDB"]->queryF($sql);
            while($license = $GLOBALS["APIDB"]->fetchArray($result))
            {
                $licences[$license['code']]['id'] = $license['id'];
                $licences[$license['code']]['title'] = $license['title'];
                $licences[$license['code']]['code'] = $license['code'];
                if ($license['subrevision']>0)
                    $licences[$license['code']]['version'] = $license['major'] . '.' . $license['minor'] . '.' . $license['revision'] . '.' . $license['subrevision'];
                elseif ($license['revision']>0)
                    $licences[$license['code']]['version'] = $license['major'] . '.' . $license['minor'] . '.' . $license['revision'];
                else 
                    $licences[$license['code']]['version'] = $license['major'] . '.' . $license['minor'];
            }
        }
        return $licences;
    }
}

if (!function_exists('yonkResourceMD5'))
{
    function yonkResourceMD5($resource = '', $wordlen = 4)
    {
        $resource = str_replace(array("\n","\r","\t",".",",","<",">","?","/",";",":","\"","'","[","]","{","}","=","+","-","_",")","(","*","&","^","%","$","#","@","!","~","`","1","2","3","4","5","6","7","8","9","0","|","\\"), " ", strip_tags($resource));
        while(strpos($resource, "  "))
            $resource = str_replace('  ', ' ', $resource);
        $parts = explode(" ", $resource);
        foreach($parts as $key => $value)
            if (strlen($value)<$wordlen)
                unset($parts[$key]);
        return md5(implode('', $parts));
    }
}

if (!function_exists('yonkWordCount'))
{
    function yonkWordCount($resource = '', $wordlen = 4)
    {
        $words = 0;
        $resource = str_replace(array("\n","\r","\t",".",",","<",">","?","/",";",":","\"","'","[","]","{","}","=","+","-","_",")","(","*","&","^","%","$","#","@","!","~","`","1","2","3","4","5","6","7","8","9","0","|","\\"), " ", strip_tags($resource));
        while(strpos($resource, "  "))
            $resource = str_replace('  ', ' ', $resource);
        $parts = explode(" ", $resource);
        foreach($parts as $key => $value)
            if (strlen($value)>=$wordlen)
                $words++;
        return $words;
    }
}

if (!function_exists('yonkLicensingCode'))
{
    function yonkLicensingCode($title = '', $major = 1, $minor = 0, $revision = 0, $subrevision = 0, $subject = '', $wordlen=4)
    {
        if ($subrevision>0)
            $version = "$major.$minor.$revision.$subrevision";
        elseif ($revision>0)
            $version = "$major.$minor.$revision";
        else 
            $version = "$major.$minor";
        $title = str_replace(array("\n","\r","\t",".",",","<",">","?","/",";",":","\"","'","[","]","{","}","=","+","-","_",")","(","*","&","^","%","$","#","@","!","~","`","1","2","3","4","5","6","7","8","9","0","|","\\"), " ", strip_tags($title));
        $subject = str_replace(array("\n","\r","\t",".",",","<",">","?","/",";",":","\"","'","[","]","{","}","=","+","-","_",")","(","*","&","^","%","$","#","@","!","~","`","1","2","3","4","5","6","7","8","9","0","|","\\"), " ", strip_tags($subject));
        while(strpos($title, "  "))
            $resource = str_replace('  ', ' ', $title);
        while(strpos($subject, "  "))
            $resource = str_replace('  ', ' ', $subject);
        $titleparts = explode(" ", $title);
        $prefix = '';
        foreach($titleparts as $key => $value)
            if (strlen($value)>=$wordlen)
                for($i=0;$i<strlen($value);$i++)
                    if (substr($value,$i,1)==strtoupper(substr($value,$i,1)))
                        $prefix .= substr($value,$i,1);
        $subjectparts = explode(" ", $subject);
        $postfix = '';
        foreach($subjectparts as $key => $value)
            if (strlen($value)>=$wordlen)
                for($i=0;$i<strlen($value);$i++)
                    if (substr($value,$i,1)==strtoupper(substr($value,$i,1)))
                        $postfix .= substr($value,$i,1);
        return strtoupper($prefix."-".$version.(strlen($postfix)>0?"-".$postfix:""));
}
}

if (!function_exists("redirect")) {
    /**
     * Redirect HTML Display
     *
     * @param string $uri
     * @param integer $seconds
     * @param string $message
     *
     */
    function redirect($uri = '', $seconds = 9, $message = '')
    {
        $GLOBALS['url'] = $uri;
        $GLOBALS['time'] = $seconds;
        $GLOBALS['message'] = $message;
        require_once API_ROOT_PATH . DIRECTORY_SEPARATOR . 'redirect.php';
        exit(-1000);
    }
}


if (!class_exists("XmlDomConstruct")) {
	/**
	 * class XmlDomConstruct
	 *
	 * 	Extends the DOMDocument to implement personal (utility) methods.
	 *
	 * @author 		Simon Roberts (Chronolabs) simon@snails.email
	 */
	class XmlDomConstruct extends DOMDocument {

		/**
		 * Constructs elements and texts from an array or string.
		 * The array can contain an element's name in the index part
		 * and an element's text in the value part.
		 *
		 * It can also creates an xml with the same element tagName on the same
		 * level.
		 *
		 * ex:
		 * <nodes>
		 *   <node>text</node>
		 *   <node>
		 *     <field>hello</field>
		 *     <field>world</field>
		 *   </node>
		 * </nodes>
		 *
		 * Array should then look like:
		 *
		 * Array (
		 *   "nodes" => Array (
		 *     "node" => Array (
		 *       0 => "text"
		 *       1 => Array (
		 *         "field" => Array (
		 *           0 => "hello"
		 *           1 => "world"
		 *         )
		 *       )
		 *     )
		 *   )
		 * )
		 *
		 * @param mixed $mixed An array or string.
		 *
		 * @param DOMElement[optional] $domElement Then element
		 * from where the array will be construct to.
		 *
		 * @author 		Simon Roberts (Chronolabs) simon@snails.email
		 *
		 */
		public function fromMixed($mixed, DOMElement $domElement = null) {

			$domElement = is_null($domElement) ? $this : $domElement;

			if (is_array($mixed)) {
				foreach( $mixed as $index => $mixedElement ) {

					if ( is_int($index) ) {
						if ( $index == 0 ) {
							$node = $domElement;
						} else {
							$node = $this->createElement($domElement->tagName);
							$domElement->parentNode->appendChild($node);
						}
					}

					else {
						$node = $this->createElement($index);
						$domElement->appendChild($node);
					}

					$this->fromMixed($mixedElement, $node);

				}
			} else {
				$domElement->appendChild($this->createTextNode($mixed));
			}

		}
			
	}
}

?>
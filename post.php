<?php
/**
 * Chronolabs Fonting Repository Services REST API API
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://labs.coop
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         fonts
 * @since           2.1.9
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @subpackage		api
 * @description		Fonting Repository Services REST API
 * @link			http://sourceforge.net/projects/chronolabsapis
 * @link			http://cipher.labs.coop
 */

	require_once __DIR__ . DIRECTORY_SEPARATOR . 'header.php';
    
	error_reporting(E_ALL);
	ini_set('display_errors', true);
	set_time_limit(3600*36*9*14*28);
	
	/**
	 * URI Path Finding of API URL Source Locality
	 * @var unknown_type
	 */
	$error = $odds = $inner = array();
	foreach($_GET as $key => $values) {
	    if (!isset($inner[$key])) {
	        $inner[$key] = $values;
	    } elseif (!in_array(!is_array($values) ? $values : md5(json_encode($values, true)), array_keys($odds[$key]))) {
	        if (is_array($values)) {
	            $odds[$key][md5(json_encode($inner[$key] = $values, true))] = $values;
	        } else {
	            $odds[$key][$inner[$key] = $values] = "$values--$key";
	        }
	    }
	}
	
	foreach($_POST as $key => $values) {
	    if (!isset($inner[$key])) {
	        $inner[$key] = $values;
	    } elseif (!in_array(!is_array($values) ? $values : md5(json_encode($values, true)), array_keys($odds[$key]))) {
	        if (is_array($values)) {
	            $odds[$key][md5(json_encode($inner[$key] = $values, true))] = $values;
	        } else {
	            $odds[$key][$inner[$key] = $values] = "$values--$key";
	        }
	    }
	}
	
	foreach(parse_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'], '?')?'&':'?').$_SERVER['QUERY_STRING'], PHP_URL_QUERY) as $key => $values) {
	    if (!isset($inner[$key])) {
	        $inner[$key] = $values;
	    } elseif (!in_array(!is_array($values) ? $values : md5(json_encode($values, true)), array_keys($odds[$key]))) {
	        if (is_array($values)) {
	            $odds[$key][md5(json_encode($inner[$key] = $values, true))] = $values;
	        } else {
	            $odds[$key][$inner[$key] = $values] = "$values--$key";
	        }
	    }
	}
	
    if (!in_array($inner['op'], array('license','sighting','signing','recovery','emailing')))
		$error[] = 'Field FORM["op"] does not match the required operator for this functional script!';

	switch($inner['op'])
	{
	    case "license":
	        
	        if (!isset($inner['title']) || empty($inner['title']))
	            $error[] = 'Field FORM["title"] does not contain any data this is a required field!';
	        if (!isset($inner['major']) || (empty($inner['major']) && $inner['major'] != '0'))
                $error[] = 'Field FORM["major"] does not contain any data this is a required field!';
            elseif (!is_numeric($inner['major']))
                $error[] = 'Field FORM["major"] does not contain any other than a single numerical data without recipricol remainder, just a single whole number is require here!';
            if (!isset($inner['minor']) || (empty($inner['minor']) && $inner['minor'] != '0'))
                $error[] = 'Field FORM["minor"] does not contain any data this is a required field!';
            elseif (!is_numeric($inner['minor']))
                $error[] = 'Field FORM["minor"] does not contain any other than a single numerical data without recipricol remainder, just a single whole number is require here!';
            if (!isset($inner['revision']) || (empty($inner['revision']) && $inner['revision'] != '0'))
                $error[] = 'Field FORM["revision"] does not contain any data this is a required field!';
            elseif (!is_numeric($inner['revision']))
                $error[] = 'Field FORM["revision"] does not contain any other than a single numerical data without recipricol remainder, just a single whole number is require here!';
            if (!isset($inner['subrevision']) || (empty($inner['subrevision']) && $inner['subrevision'] != '0'))
                $error[] = 'Field FORM["subrevision"] does not contain any data this is a required field!';
            elseif (!is_numeric($inner['subrevision']))
                $error[] = 'Field FORM["subrevision"] does not contain any other than a single numerical data without recipricol remainder, just a single whole number is require here!';
            if (!isset($_FILES['logo']['tmp_name']) || empty($_FILES['logo']['tmp_name']))  
                $error[] = 'The File Upload FILES["logo"] is required to be sent with the form, this is not attached to the submission and will need to be included as a file uploaded image!';
            else {
                $formats = explode("\n", file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'logo-supported.diz')); 
                sort($formats);
                $found = false; 
                foreach($formats as $format) {
                    if (in_array($format, explode('.', $_FILES['logo']['name'])))
                        $found = true;
                }
                if ($found == false)
                    $error[] = 'The File Upload FILES["logo"] is required to only be the file extension formats of: *.'.implode(', *.', $formats).'; you have specified the wrong file type extension!';
            }
            if (isset($_FILES['subjective-logo']['tmp_name']) && !empty($_FILES['subjective-logo']['tmp_name'])) {
                $formats = explode("\n", file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'logo-supported.diz'));
                sort($formats);
                $found = false;
                foreach($formats as $format)
                    if (in_array($format, explode('.', $_FILES['subjective-logo']['name'])))
                        $found = true;
                if ($found == false)
                    $error[] = 'The File Upload FILES["subjective-logo"] is required to only be the file extension formats of: *.'.implode(', *.', $formats).'; you have specified the wrong file type extension!';
            }
            if (!isset($inner['filename-txt']) || empty($inner['filename-txt']))
                $error[] = 'Field FORM["filename-txt"] does not contain any data this is a required field!';
            if (!isset($inner['filename-html']) || empty($inner['filename-html']))
                $error[] = 'Field FORM["filename-html"] does not contain any data this is a required field!';
            if (!isset($inner['text']) || empty($inner['text']))
                $error[] = 'Field FORM["text"] does not contain any data this is a required field!';
            if (!isset($inner['html']) || empty($inner['html']))
                $error[] = 'Field FORM["html"] does not contain any data this is a required field!';
            if (!isset($inner['countries']) || empty($inner['countries']) || count($inner['countries']) < 1)
                $error[] = 'Field FORM["countries"] does not contain any data this is a required field!';
     
	        break;
	        
	    case "sighting":
	        
	        if (!isset($inner['key']) || empty($inner['key']))
	            $error[] = 'Field FORM["key"] does not contain any data this is a required field!';
	        else {
	            $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('sightings') . "` WHERE `key` LIKE '" . $inner['key'] . "'";
	            list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
	            if ($count > 0)
	                $error[] = 'Field FORM["key"] is not unique to this distribution and owned by another one, this field must be unique per every distribution!';
	        }
	        if (!isset($inner['type']) || empty($inner['type']))
	            $error[] = 'Field FORM["type"] does not contain any data this is a required field!';
	        elseif (!in_array($inner['type'], array('core','application','module','extension','plugin','3rd party','audio','video','image','images','media','artwork','other'))) 
	            $error[] = 'Field FORM["type"] does not contain any valid data this is a enumerated field that only has defined like seen in the form values!';
            if (!isset($inner['name']) || empty($inner['name']))
                $error[] = 'Field FORM["name"] does not contain any data this is a required field!';
            if (!isset($inner['version']) || empty($inner['version']))
                $error[] = 'Field FORM["version"] does not contain any data this is a required field!';
            if (!isset($_FILES['logo']['tmp_name']) || empty($_FILES['logo']['tmp_name']))
                $error[] = 'The File Upload FILES["logo"] is required to be sent with the form, this is not attached to the submission and will need to be included as a file uploaded image!';
            else {
                $formats = explode("\n", file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'logo-supported.diz'));
                sort($formats);
                $found = false;
                foreach($formats as $format) {
                    if (in_array($format, explode('.', $_FILES['logo']['name'])))
                        $found = true;
                }
                if ($found == false)
                    $error[] = 'The File Upload FILES["logo"] is required to only be the file extension formats of: *.'.implode(', *.', $formats).'; you have specified the wrong file type extension!';
            }
            if (!isset($inner['licenses']) || empty($inner['licenses']) || count($inner['licenses']) == 0)
                $error[] = 'Field FORM["licenses"] does not contain any data this is a required field!';
            if (!isset($inner['files']) || empty($inner['files']))
                $error[] = 'Field FORM["files"] does not contain any data this is a required field!';
            elseif (!in_array($inner['files'], array('text','html')))
                $error[] = 'Field FORM["files"] does not contain any valid data this is a enumerated field that only has defined like seen in the form values!';
            if (!isset($inner['format']) || empty($inner['format']))
                $error[] = 'Field FORM["format"] does not contain any data this is a required field!';
            elseif (!in_array($inner['format'], array_keys(yonkArchivingShellExec())))
                $error[] = 'Field FORM["format"] does not contain any valid data this is a enumerated field that only has defined like seen in the form values!';
            if ($inner['name']==strtolower($inner['name']))
                $inner['name'] = ucwords($inner['name']);
            if ($inner['framework']==strtolower($inner['framework']))
                $inner['framework'] = ucwords($inner['framework']);
            $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('sightings') . "` WHERE `name` LIKE '" . $inner['name'] . "' AND `version` LIKE '" . $inner['version'] . "' AND `framework` LIKE '" . $inner['framework'] . "' AND `framework-version` LIKE '" . $inner['framework-version'] . "'";
            list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            if ($count > 0)
                $error[] = 'Distribution Version + Framework already is defined and cannot be duplicated!';
	}
	
	if (!empty($error))
	{
	    redirect(API_URL, 9, "<center><h1 style='color:rgb(198,0,0);'>Error Has Occured</h1><br/><p>" . implode("<br />", $error) . "</p></center>");
	    exit(0);
	}
	
	switch($inner['op'])
	{
	    case "license":
	        
	        $uploadpath = DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . date('Y') . DIRECTORY_SEPARATOR . date('m') . DIRECTORY_SEPARATOR . date('d') . DIRECTORY_SEPARATOR . date('H-i-s-W');
	        if (mkdir(constant("API_ROOT_PATH") . $uploadpath, 0777, true))
    	        if (!move_uploaded_file($_FILES['logo']['tmp_name'], constant("API_ROOT_PATH") . $logofile = ($uploadpath . DIRECTORY_SEPARATOR . $_FILES['logo']['name']))) {
    				redirect(API_URL, 9, "<center><h1 style='color:rgb(198,0,0);'>Uploading Error Has Occured</h1><br/><p>Licensing API was unable to recieve and store: <strong>".$_FILES['logo']['name']."</strong>!</p></center>");
    				exit(0);
    			}
	        if (isset($_FILES['subjective-logo']['tmp_name']) && !empty($_FILES['subjective-logo']['tmp_name'])) {
	            $uploadpath = DIRECTORY_SEPARATOR . microtime(true);
	            if (mkdir(constant("API_VAR_PATH") . $uploadpath, 0777, true))
	                if (!move_uploaded_file($_FILES['subjective-logo']['tmp_name'], $subjectivelogo = constant("API_VAR_PATH") . $uploadpath . DIRECTORY_SEPARATOR . $_FILES['subjective-logo']['name'])) {
	                    redirect(API_URL, 9, "<center><h1 style='color:rgb(198,0,0);'>Uploading Error Has Occured</h1><br/><p>Licensing API was unable to recieve and store: <strong>".$_FILES['logo']['name']."</strong>!</p></center>");
	                    exit(0);
	                }
	        } else 
	           $subjectivelogo = '';
	        
           if ($inner['title']==strtolower($inner['title']))
               $inner['title'] = ucwords($inner['title']);
           
            $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('titles') . "` WHERE `title` LIKE '" . $GLOBALS['APIDB']->escape($inner['title']) . "'";
            list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            if ($count == 0)
            {
               $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('titles') . "` (`title`, `created`) VALUES('" . $GLOBALS['APIDB']->escape($inner['title']) . "', UNIX_TIMESTAMP())";
               if (!$GLOBALS['APIDB']->queryF($sql))
                   die("SQL Failed: $sql;");
               $titleid = $GLOBALS['APIDB']->getInsertId();
            } else {
               $sql = "SELECT `id` FROM `" . $GLOBALS['APIDB']->prefix('titles') . "` WHERE `title` LIKE '" . $GLOBALS['APIDB']->escape($inner['title']) . "'";
               list($titleid) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            }
            
            $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('versions') . "` WHERE `major` = '" . $inner['major'] . "' AND `minor` = '" . $inner['minor'] . "' AND `revision` = '" . $inner['revision'] . "' AND `subrevision` = '" . $inner['subrevision'] . "'";
            list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            if ($count == 0)
            {
                $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('versions') . "` (`major`, `minor`, `revision`, `subrevision`, `created`) VALUES('" . $inner['major'] . "', '" . $inner['minor'] . "', '" . $inner['revision'] . "', '" . $inner['subrevision'] . "', UNIX_TIMESTAMP())";
                if (!$GLOBALS['APIDB']->queryF($sql))
                    die("SQL Failed: $sql;");
                $versionid = $GLOBALS['APIDB']->getInsertId();
            } else {
                $sql = "SELECT `id` FROM `" . $GLOBALS['APIDB']->prefix('versions') . "` WHERE `major` = '" . $inner['major'] . "' AND `minor` = '" . $inner['minor'] . "' AND `revision` = '" . $inner['revision'] . "' AND `subrevision` = '" . $inner['subrevision'] . "'";
                list($versionid) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            }
            
            $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('resources') . "` WHERE `fingerprint` LIKE '" . sha1(yonkResourceMD5($inner['text']).yonkResourceMD5($inner['html'])) . "'";
            list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            if ($count == 0)
            {
                $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('resources') . "` (`fingerprint`, `text`, `html`, `words-text`, `words-html`, `created`) VALUES(\"" . sha1(yonkResourceMD5($inner['text']).yonkResourceMD5($inner['html'])) . '","' . $GLOBALS['APIDB']->escape($inner['text'])  . '","' . $GLOBALS['APIDB']->escape($inner['html'])  . '","' . yonkWordCount($inner['text'])  . '","' . yonkWordCount($inner['html']) . "\", UNIX_TIMESTAMP())";
                if (!$GLOBALS['APIDB']->queryF($sql))
                    die("SQL Failed: $sql;");
                $resourceid = $GLOBALS['APIDB']->getInsertId();
            } else {
                $sql = "SELECT `id` FROM `" . $GLOBALS['APIDB']->prefix('resources') . "` WHERE `fingerprint` LIKE '" . sha1(yonkResourceMD5($inner['text']).yonkResourceMD5($inner['html'])) . "'";
                list($resourceid) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            }
            
            if ($inner['subjective-title']==strtolower($inner['subjective-title']))
                $inner['subjective-title'] = ucwords($inner['subjective-title']);
            
            if (!isset($inner['subjective-title']) || empty($inner['subjective-title']))
                $subjectiveid = 0;
            else {
                $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('subjectives') . "` (`subjects`, `logo`, `logo-mimetype`, `created`) VALUES('" . $GLOBALS['APIDB']->escape($inner['subjective-title']) . "', " .(file_exists($subjectivelogo)?"COMPRESS('".$GLOBALS['APIDB']->escape(file_get_contents($subjectivelogo))."'),'".$_FILES['subjective-logo']['type']."'":"'',''") . ", UNIX_TIMESTAMP())";
                if (!$GLOBALS['APIDB']->queryF($sql))
                    die("SQL Failed: $sql;");
                $subjectiveid = $GLOBALS['APIDB']->getInsertId();
            }
            
            $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('codes') . "` WHERE `code` LIKE '" . yonkLicensingCode($inner['title'], $inner['major'], $inner['minor'], $inner['revision'], $inner['subrevision'], $inner['subjective-title']) . "'";
            list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            if ($count == 0)
            {
                $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('codes') . "` (`code`, `created`) VALUES('" . $GLOBALS['APIDB']->escape(yonkLicensingCode($inner['title'], $inner['major'], $inner['minor'], $inner['revision'], $inner['subrevision'], $inner['subjective-title'])) . "', UNIX_TIMESTAMP())";
                if (!$GLOBALS['APIDB']->queryF($sql))
                    die("SQL Failed: $sql;");
                $codeid = $GLOBALS['APIDB']->getInsertId();
            } else {
                $sql = "SELECT `id` FROM `" . $GLOBALS['APIDB']->prefix('codes') . "` WHERE `code` LIKE '" . $GLOBALS['APIDB']->escape(yonkLicensingCode($inner['title'], $inner['major'], $inner['minor'], $inner['revision'], $inner['subrevision'], $inner['subjective-title'])) . "'";
                list($codeid) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            }
            
            $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('licenses') . "` WHERE `code-id` = '" . $codeid . "' AND `version-id` = '" . $versionid . "' AND `title-id` = '" . $titleid . "' AND `resource-id` = '" . $resourceid . "'  AND `subjective-id` = '" . $subjectiveid . "'";
            list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            if ($count == 0)
            {
                $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('licenses') . "` (`code-id`, `version-id`, `title-id`, `resource-id`, `subjective-id`, `image-logo`, `source-url`, `contact-email`, `filename-txt`, `filename-html`, `created`) VALUES('" . $codeid . "', '" . $versionid . "', '" . $titleid . "', '" . $resourceid  . "', '" . $subjectiveid  . "', '" . $logofile  . "', '" . $inner['source-url'] . "', '" . $inner['contact-email']  . "', '" . $inner['filename-txt']  . "', '" . $inner['filename-html'] . "', UNIX_TIMESTAMP())";
                if (!$GLOBALS['APIDB']->queryF($sql))
                    die("SQL Failed: $sql;");
                $licenseid = $GLOBALS['APIDB']->getInsertId();
            } else {
                $licenseids = array();
                $sql = "SELECT `id` FROM `" . $GLOBALS['APIDB']->prefix('licenses') . "` WHERE `code-id` = '" . $codeid . "' AND `version-id` = '" . $versionid . "' AND `title-id` = '" . $titleid . "' AND `resource-id` = '" . $resourceid . "'  AND `subjective-id` = '" . $subjectiveid . "'";
                $result = $GLOBALS['APIDB']->queryF($sql);
                while($license = $GLOBALS['APIDB']->fetchArray($result))
                    $licenseids[] = $license['id'];
                $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('licenses_countries_linking') . "` WHERE `license-id` IN (" . implode(', ', $licenseids) . ") AND `country-id` IN(" . implode(', ', $inner['countries']) . ")";
                list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
                if ($count>=count($inner['countries'])) 
                {
                    redirect(API_URL, 9, "<center><h1 style='color:rgb(198,0,0);'>Licensing Spawning Error Has Occured</h1><br/><p>Licensing API was unable to spawn this license as it already exists on file!</p></center>");
                    exit(0);
                } else {
                    $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('licenses') . "` (`code-id`, `version-id`, `title-id`, `resource-id`, `subjective-id`, `image-logo`, `source-url`, `contact-email`, `filename-txt`, `filename-html`, `created`) VALUES('" . $codeid . "', '" . $versionid . "', '" . $titleid . "', '" . $resourceid  . "', '" . $subjectiveid  . "', '" . $logofile  . "', '" . $inner['source-url'] . "', '" . $inner['contact-email']  . "', '" . $inner['filename-txt']  . "', '" . $inner['filename-html'] . "', UNIX_TIMESTAMP())";
                    if (!$GLOBALS['APIDB']->queryF($sql))
                        die("SQL Failed: $sql;");
                    $licenseid = $GLOBALS['APIDB']->getInsertId();
                }
            }
            
            $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('licenses') . "` WHERE `version-id` = '" . $versionid . "' AND `title-id` = '" . $titleid . "' AND `id` NOT IN('" . $licenseid . "') ORDER BY `created` ASC";
            list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            if ($count > 0)
            {
                $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('licenses') . "` WHERE `version-id` = '" . $versionid . "' AND `title-id` = '" . $titleid . "' AND `id` NOT IN('" . $licenseid . "') ORDER BY `created` ASC LIMIT 1";
                list($parentid) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
                $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('licenses_linking') . "` (`parent-id`, `child-id`, `created`) VALUES('" . $parentid . "', '" . $licenseid . "', UNIX_TIMESTAMP())";
                if (!$GLOBALS['APIDB']->queryF($sql))
                    die("SQL Failed: $sql;");
            }
            
            $sql = "SELECT count(*) FROM `" . $GLOBALS['APIDB']->prefix('versions_title') . "` WHERE `version-id` = '" . $versionid . "' AND `title-id` = '" . $titleid . "'";
            list($count) = $GLOBALS['APIDB']->fetchRow($GLOBALS['APIDB']->queryF($sql));
            if ($count == 0)
            {
                $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('versions_title') . "` (`version-id`, `title-id`, `created`) VALUES('" . $versionid . "', '" . $titleid . "', UNIX_TIMESTAMP())";
                if (!$GLOBALS['APIDB']->queryF($sql))
                    die("SQL Failed: $sql;");
            }
            
            foreach($inner['countries'] as $countryid)
            {
                $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('licenses_countries_linking') . "` (`license-id`, `country-id`, `created`) VALUES('" . $licenseid . "', '" . $countryid . "', UNIX_TIMESTAMP())";
                if (!$GLOBALS['APIDB']->queryF($sql))
                    die("SQL Failed: $sql;");
            }
            
            $sql = "UPDATE `" . $GLOBALS['APIDB']->prefix('codes') . "` SET `licenses` = `licenses` + 1 WHERE `id` = '" . $codeid . "'";
            if (!$GLOBALS['APIDB']->queryF($sql))
                die("SQL Failed: $sql;");
                
            $sql = "UPDATE `" . $GLOBALS['APIDB']->prefix('titles') . "` SET `licenses` = `licenses` + 1 WHERE `id` = '" . $titleid . "'";
            if (!$GLOBALS['APIDB']->queryF($sql))
                die("SQL Failed: $sql;");
                
            $sql = "UPDATE `" . $GLOBALS['APIDB']->prefix('versions') . "` SET `licenses` = `licenses` + 1 WHERE `id` = '" . $versionid . "'";
            if (!$GLOBALS['APIDB']->queryF($sql))
                die("SQL Failed: $sql;");
            
            redirect(API_URL, 18, "<center><h1 style='color:rgb(0,198,0);'>Licensing Spawning Completely Successful</h1><br/><div>The following license was successfully entered into the database: " . $inner['title'] . ' ( ' . yonkLicensingCode($inner['title'], $inner['major'], $inner['minor'], $inner['revision'], $inner['subrevision'], $inner['subjective-title']) . " )</div><br/><div style='clear: both; height: 11px; width: 100%'>&nbsp;</div><p>You can now submit children licenses to this licensing or build a sighting to the license profiled!</p></center>");
            exit(0);
            break;
            
	    case "sighting":
	        
	        if (isset($_FILES['logo']['tmp_name']) && !empty($_FILES['logo']['tmp_name'])) {
	            $uploadpath = DIRECTORY_SEPARATOR . microtime(true);
	            if (mkdir(constant("API_VAR_PATH") . $uploadpath, 0777, true))
	                if (!move_uploaded_file($_FILES['logo']['tmp_name'], $filelogo = constant("API_VAR_PATH") . $uploadpath . DIRECTORY_SEPARATOR . $_FILES['logo']['name'])) {
	                    redirect(API_URL, 9, "<center><h1 style='color:rgb(198,0,0);'>Uploading Error Has Occured</h1><br/><p>Licensing API was unable to recieve and store: <strong>".$_FILES['logo']['name']."</strong>!</p></center>");
	                    exit(0);
	                }
	        } else
	            $filelogo = '';
	        
            $inner['description'] = str_replace("<h1>", "\n<h1>", $inner['description']);
            $inner['description'] = str_replace("<h2>", "\n<h2>", $inner['description']);
            $inner['description'] = str_replace("<h3>", "\n<h3>", $inner['description']);
            $inner['description'] = str_replace("<h4>", "\n<h4>", $inner['description']);
            $inner['description'] = str_replace("<h5>", "\n<h5>", $inner['description']);
            $inner['description'] = str_replace("</h1>", "</h1>\n", $inner['description']);
            $inner['description'] = str_replace("</h2>", "</h2>\n", $inner['description']);
            $inner['description'] = str_replace("</h3>", "</h3>\n", $inner['description']);
            $inner['description'] = str_replace("</h4>", "</h4\n>", $inner['description']);
            $inner['description'] = str_replace("</h5>", "</h5>\n", $inner['description']);
            $inner['description'] = str_replace("</p>", "</p>\n\n", $inner['description']);
            $inner['description'] = str_replace("<br>", "<br>\n", $inner['description']);
            $inner['description'] = str_replace("<br/>", "<br/>\n", $inner['description']);
            $inner['description'] = str_replace("<br />", "<br />\n", $inner['description']);
            $inner['description'] = str_replace("\r", "\n", $inner['description']);
            $inner['description'] = str_replace("\t", "", $inner['description']);
            $inner['description'] = str_replace(array("<li>", "<ol>"), "\n\t * ", $inner['description']);
            $inner['description'] = str_replace(array("</li>", "</ol>"), "", $inner['description']);
            $inner['description'] = strip_tags($inner['description']);
            while(strpos($inner['description'], "\n\n\n"))
                $inner['description'] = str_replace("\n\n\n", "\n\n", $inner['description']);
            while(substr($inner['description'], 0, 1) = "\n")
                $inner['description'] = substr($inner['description'], 1, strlen($inner['description']) - 1);
            while(substr($inner['description'], strlen($inner['description']) - 1, 1) = "\n")
                $inner['description'] = substr($inner['description'], 0, strlen($inner['description']) - 2);
            $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('sightings') . "` (`key`, `type`, `download-url`, `support-url`, `repo-url`, `callback-url`, `name`, `version`, `framework`, `framework-version`, `description`, `authors`, `logo`, `logo-mimetype`, `created`) VALUES('" . $GLOBALS['APIDB']->escape($inner['key']) . "', '" . $inner['type'] . "',  '" . $inner['download-url'] . "',  '" . $inner['support-url'] . "',  '" . $inner['repo-url'] . "',  '" . $inner['callback-url'] . "', '" . $GLOBALS['APIDB']->escape($inner['name']) . "', '" . $GLOBALS['APIDB']->escape($inner['version']) . "', '" . $GLOBALS['APIDB']->escape($inner['framework']) . "',  '" . $GLOBALS['APIDB']->escape($inner['framework-version']) . "', '" . $GLOBALS['APIDB']->escape($inner['description']) . "', '" . $GLOBALS['APIDB']->escape($inner['authors']) . "',  COMPRESS('" . $GLOBALS['APIDB']->escape(file_get_contents($filelogo)) . "'), '" . $GLOBALS['APIDB']->escape($_FILE['logo']['type']) . "', UNIX_TIMESTAMP())";
            if (!$GLOBALS['APIDB']->queryF($sql))
                die("SQL Failed: $sql;");
            $sightingid = $GLOBALS['APIDB']->getInsertId();
            $licenses = $inner['licenses'];
            sort($licenses);
            foreach($licenses as $licenseid)
            {
                $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('sightings_licenses') . "` (`license-id`, `sighting-id`, `created`) VALUES('" . $licenseid . "', '" . $sightingid . "', UNIX_TIMESTAMP())";
                if (!$GLOBALS['APIDB']->queryF($sql))
                    die("SQL Failed: $sql;");
            }
            yonkSealSighting($sightingid);
            if ($archive = yonkLicensingArchive($sightingid, $inner['file'], $inner['format']))
            {
                $packfile = (count($licenses)>1?"Licenses ~ ":"License ~ ") . $inner['name'] . ' v' . $inner['major'] . '.' . $inner['minor'] . '.' . $inner['revision'] . '.' . $inner['subrevision'] . '.' . $inner['format'];
                if(ini_get('zlib.output_compression')) {
                    ini_set('zlib.output_compression', 'Off');
                }
                // Send Headers
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="$packfile"');
                header('Content-Transfer-Encoding: binary');
                header('Accept-Ranges: bytes');
                header('Cache-Control: private');
                header('Pragma: private');
                header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
                die(file_get_contents($archive));
            } else {
                redirect(API_URL, 9, "<h1>Failed Assembling Licensing Archive</h1><p>The licensing archive failed to generate you will have to retrieve the licensing data manuall!</p>");
                exit(0);
            }
            break;
	}

	
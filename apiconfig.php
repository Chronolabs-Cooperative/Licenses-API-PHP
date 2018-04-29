<?php
/**
 * Chronolabs Entitiesing Repository Services REST API API
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://labs.coop
 * @license         General Public License version 3 (http://labs.coop/briefs/legal/general-public-licence/13,3.html)
 * @package         entities
 * @since           2.1.9
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @subpackage		api
 * @description		Entitiesing Repository Services REST API
 * @link			http://sourceforge.net/projects/chronolabsapis
 * @link			http://cipher.labs.coop
 */


if (!is_file(__DIR__ . DIRECTORY_SEPARATOR . 'mainfile.php') || !is_file(__DIR__ . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'license.php'))
{
    if (strpos($_SERVER["REQUEST_URI"], 'install/')>0)
        return false;
        header('Location: ' . "./install");
        exit(0);
}
global $inner;

session_start();


/**
 * URI Path Finding of API URL Source Locality
 * @var unknown_type
 */
$odds = $inner = array();
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

require_once __DIR__ . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'apilists.php';

if(!empty($inner['lang'])) {
    if (in_array($inner['lang'], APILists::getDirListAsArray(__DIR__ . DIRECTORY_SEPARATOR . 'language')))
    {
        define('API_LANGUAGE', $_SESSION['language'] = $inner['lang']);
        setcookie('language', API_LANGUAGE, 3600 * 24 * 7 * mt_rand(2,13), '/', '.'.$_SERVER['HTTP_HOST']);
    }
} elseif(isset($_SESSION['language']) && !empty($_SESSION['language'])) {
    if (in_array($_SESSION['language'], APILists::getDirListAsArray(__DIR__ . DIRECTORY_SEPARATOR . 'language')))
    {
        define('API_LANGUAGE', $_SESSION['language']);
        setcookie('language', API_LANGUAGE, 3600 * 24 * 7 * mt_rand(2,13), '/', '.'.$_SERVER['HTTP_HOST']);
    }
} elseif(isset($_COOKIE['language']) && !empty($_COOKIE['language'])) {
    if (in_array($_COOKIE['language'], APILists::getDirListAsArray(__DIR__ . DIRECTORY_SEPARATOR . 'language')))
    {
        define('API_LANGUAGE', $_SESSION['language'] = $_COOKIE['language']);
        setcookie('language', API_LANGUAGE, 3600 * 24 * 7 * mt_rand(2,13), '/', '.'.$_SERVER['HTTP_HOST']);
    }
}

require_once __DIR__ . DIRECTORY_SEPARATOR . 'mainfile.php';

?>
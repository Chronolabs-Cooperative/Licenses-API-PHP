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
 * @copyright       	Chronolabs Cooperative http://labs.coop
 * @license         	General Public License version 3 (http://labs.coop/briefs/legal/general-public-licence/13,3.html)
 * @package         	tracker
 * @since           	2.1.9
 * @author          	Simon Roberts <wishcraft@users.sourceforge.net>
 * @subpackage		api
 * @description		Torrent Tracker REST API
 * @link				http://sourceforge.net/projects/chronolabsapis
 * @link				http://cipher.labs.coop
 */

if (!defined("API_DEBUG"))
    define('API_DEBUG', false);

include_once './apiconfig.php';
include_once './header.php';

$result = $GLOBALS['APIDB']->queryF('SELECT `code`, `title`, `image-logo`, `source-url`, `contact-email`, `text`, `html` FROM `licenses-localhost`.laws__licenses as a INNER JOIN `licenses-localhost`.laws__codes as b on a.`code-id` = b.`id` INNER JOIN `licenses-localhost`.laws__resources as c on c.`id` = a.`resource-id` INNER JOIN `licenses-localhost`.laws__titles as d on d.`id` = a.`title-id`;;');
$json = array();
while($row = $GLOBALS['APIDB']->fetchArray($result))
{
    $parts = explode('.',$row['image-logo']);
    $format = $parts[count($parts)-1];
    if (file_exists($image = __DIR__ . $row['image-logo']))
        $row['image-logo'] = array('mime-type'=>'image/'.$format, 'encoding' => 'base64', 'image' => base64_encode(file_get_contents($image)));
    else 
        unset($row['image-logo']);
    $json[md5(implode('|', $row))] = $row;
}
header('Context-Type: application/json');
// Send Headers
header('Content-Disposition: attachment; filename="licenses.json"');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: private');
header('Pragma: private');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
die(json_encode($json));
?>		
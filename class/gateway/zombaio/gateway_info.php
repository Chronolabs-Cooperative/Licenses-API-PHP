<?php
/**
 * Invoice Transaction Gateway with Modular Plugin set
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Co-Op http://www.chronolabs.coop/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         xpayment
 * @since           1.30.0
 * @author          Simon Roberts <simon@chronolabs.coop>
 * @translation     Erol Konik <aphex@aphexthemes.com>
 * @translation     Mariane <mariane_antoun@hotmail.com>
 * @translation     Voltan <voltan@xoops.ir>
 * @translation     Ezsky <ezskyyoung@gmail.com>
 * @translation     Richardo Costa <lusopoemas@gmail.com>
 * @translation     Kris_fr <kris@frxoops.org>
 */
	$gateway=array();
	
	api_loadLanguage('zombaio');;
	
	$gateway['name'] = '_XPY_GI_ZOMBAIO_NAME';
	$gateway['author'] = '_XPY_GI_ZOMBAIO_AUTHOR';
	$gateway['description'] = '_XPY_GI_ZOMBAIO_DESC';
	
	$gateway['testmode'] = -1;
	$gateway['class'] = basename(dirname(__FILE__));
	
	srand((((float)('0' . substr(microtime(), strpos(microtime(), ' ') + 1, strlen(microtime()) - strpos(microtime(), ' ') + 1))) * mt_rand(30, 99999)));
	srand((((float)('0' . substr(microtime(), strpos(microtime(), ' ') + 1, strlen(microtime()) - strpos(microtime(), ' ') + 1))) * mt_rand(30, 99999)));
	$gateway['salt'] = ((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'');
	
	$gateway['options']['siteid']['name'] = '_XPY_GI_ZOMBAIO_NAME_SITEID';
	$gateway['options']['siteid']['value'] = _XPY_GI_ZOMBAIO_VALUE_SITEID;
	
	$gateway['options']['pricingid']['name'] = '_XPY_GI_ZOMBAIO_NAME_PRINCINGID';
	$gateway['options']['pricingid']['value'] = _XPY_GI_ZOMBAIO_VALUE_PRICINGID;

	$gateway['options']['lang']['name'] = '_XPY_GI_ZOMBAIO_NAME_LANG';
	$gateway['options']['lang']['value'] = _XPY_GI_ZOMBAIO_VALUE_LANG;
	
	$gateway['options']['gwpass']['name'] = '_XPY_GI_ZOMBAIO_NAME_GWPASS';
	$gateway['options']['gwpass']['value'] = _XPY_GI_ZOMBAIO_VALUE_GWPASS;
	
	$gateway['options']['url']['name'] = '_XPY_GI_ZOMBAIO_NAME_URL';
	$gateway['options']['url']['value'] = _XPY_GI_ZOMBAIO_VALUE_URL;

	$gateway['options']['catalog']['name'] = '_XPY_GI_ZOMBAIO_NAME_CATELOGUE';
	$gateway['options']['catalog']['value'] = _XPY_GI_ZOMBAIO_VALUE_CATELOGUE;
	
	$gateway['options']['passfile']['name'] = '_XPY_GI_ZOMBAIO_NAME_PASSFILE';
	$gateway['options']['passfile']['value'] = _XPY_GI_ZOMBAIO_VALUE_PASSFILE;
	
	$gateway['options']['paywith']['name'] = '_XPY_GI_ZOMBAIO_NAME_PAYWITH';
	$gateway['options']['paywith']['value'] = _XPY_GI_ZOMBAIO_VALUE_PAYWITH;
	
	$gateway['options']['fee']['name'] = '_XPY_GI_ZOMBAIO_NAME_FEE';
	$gateway['options']['fee']['value'] = _XPY_GI_ZOMBAIO_VALUE_FEE;

	$gateway['options']['deposit']['name'] = '_XPY_GI_ZOMBAIO_NAME_DEPOSIT';
	$gateway['options']['deposit']['value'] = _XPY_GI_ZOMBAIO_VALUE_DEPOSIT;
	
	
?>
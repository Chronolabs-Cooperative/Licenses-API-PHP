<?php

	$gateway=array();
	
	api_loadGatewayLanguage('gateway', basename(__DIR__));
	
	$gateway['name'] = _API_GT_MYURLS_NAME;
	$gateway['author'] = _API_GT_MYURLS_AUTHOR;
	$gateway['description'] = _API_GT_MYURLS_DESC;
	
	$gateway['enabled'] = true;
	$gateway['dirname'] = basename(__DIR__);
	
	mt_srand(mt_rand(-time(), time()));
	mt_srand(mt_rand(-time(), time()));
	mt_srand(mt_rand(-time(), time()));
	mt_srand(mt_rand(-time(), time()));
	mt_srand(mt_rand(-time(), time()));
	mt_srand(mt_rand(-time(), time()));
	session_start();
	if (!isset($_COOKIE['gateway-'.$gateway['dirname'].'-salt']))
	{
	    if (!isset($_SESSION['gateway-'.$gateway['dirname'].'-salt']))
	    {
	        $_SESSION['gateway-'.$gateway['dirname'].'-salt'] = ((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'').((mt_rand(0,1)==true)?chr(mt_rand(33,122)):'');
	    }
	} elseif (!isset($_SESSION['gateway-'.$gateway['dirname'].'-salt'])) {
	    $_SESSION['gateway-'.$gateway['dirname'].'-salt'] = $_COOKIE['gateway-'.$gateway['dirname'].'-salt'];
	}
	$gateway['salt'] = $_SESSION['gateway-'.$gateway['dirname'].'-salt'];
	setcookie('gateway-'.$gateway['dirname'].'-salt', $gateway['salt'], 3600 * 24 * 7 * 12 * 4, '/', API_COOKIE_DOMAIN);
	
	$gateway['configs']['redirect']['name'] = _API_GT_MYURLS_REDIRECT_URL_NAME;
	$gateway['configs']['redirect']['default'] = _API_GT_MYURLS_REDIRECT_URL_DEFAULT;
	$gateway['configs']['redirect']['type'] = 'text';
	
	$gateway['configs']['scraped']['name'] = _API_GT_MYURLS_SCRAPED_URL_NAME;
	$gateway['configs']['scraped']['default'] = _API_GT_MYURLS_SCRAPED_URL_DEFAULT;
	$gateway['configs']['scraped']['type'] = 'text';
	
	$gateway['configs']['html']['name'] = _API_GT_MYURLS_HTML_NAME;
	$gateway['configs']['html']['default'] = _API_GT_MYURLS_HTML_DEFAULT;
	$gateway['configs']['html']['type'] = 'textarea';

	$gateway['configs']['action']['name'] = _API_GT_MYURLS_ACTION_NAME;
	$gateway['configs']['action']['default'] = _API_GT_MYURLS_ACTION_DEFAULT;
	$gateway['configs']['action']['type'] = 'select';
	$gateway['configs']['action']['options'] = array(  'redirect'  =>  _API_GT_MYURLS_REDIRECT_URL_NAME, 
	                                                   'scraped'   =>  _API_GT_MYURLS_SCRAPED_NAME, 
	                                                   'html'      =>  _API_GT_MYURLS_HTML_NAME);
	
	$gateway['configs']['amount']['name'] = _API_GT_MYURLS_AMOUNT_FIELD_NAME;
	$gateway['configs']['amount']['default'] = _API_GT_MYURLS_AMOUNT_FIELD_DEFAULT;
	$gateway['configs']['amount']['type'] = 'text';
	
	$gateway['configs']['currency']['name'] = _API_GT_MYURLS_CURRENCY_FIELD_NAME;
	$gateway['configs']['currency']['default'] = _API_GT_MYURLS_CURRENCY_FIELD_DEFAULT;
	$gateway['configs']['currency']['type'] = 'text';
	
	$gateway['configs']['identity']['name'] = _API_GT_MYURLS_IDENTITY_FIELD_NAME;
	$gateway['configs']['identity']['default'] = _API_GT_MYURLS_IDENTITY_FIELD_DEFAULT;
	$gateway['configs']['identity']['type'] = 'text';
	
	$gateway['configs']['revoked']['name'] = _API_GT_MYURLS_REVOKED_URL_FIELD_NAME;
	$gateway['configs']['revoked']['default'] = _API_GT_MYURLS_REVOKED_URL_FIELD_DEFAULT;
	$gateway['configs']['revoked']['type'] = 'text';
	
	$gateway['configs']['ipn']['name'] = _API_GT_MYURLS_IPN_URL_FIELD_NAME;
	$gateway['configs']['ipn']['default'] = _API_GT_MYURLS_IPN_URL_FIELD_DEFAULT;
	$gateway['configs']['ipn']['type'] = 'text';
	
	$gateway['configs']['version']['name'] = _API_GT_MYURLS_VERSION_FIELD_NAME;
	$gateway['configs']['version']['default'] = _API_GT_MYURLS_VERSION_FIELD_DEFAULT;
	$gateway['configs']['version']['type'] = 'text';
	
	$gateway['configs']['distribution']['name'] = _API_GT_MYURLS_DISTRIBUTION_FIELD_NAME;
	$gateway['configs']['distribution']['default'] = _API_GT_MYURLS_DISTRIBUTION_FIELD_DEFAULT;
	$gateway['configs']['distribution']['type'] = 'text';
	
	$gateway['configs']['package']['name'] = _API_GT_MYURLS_PACKAGE_FIELD_NAME;
	$gateway['configs']['package']['default'] = _API_GT_MYURLS_PACKAGE_FIELD_DEFAULT;
	$gateway['configs']['package']['type'] = 'text';
	
	$gateway['configs']['email']['name'] = _API_GT_MYURLS_EMAIL_FIELD_NAME;
	$gateway['configs']['email']['default'] = _API_GT_MYURLS_EMAIL_FIELD_DEFAULT;
	$gateway['configs']['email']['type'] = 'text';
	
	$gateway['configs']['name']['name'] = _API_GT_MYURLS_NAME_FIELD_NAME;
	$gateway['configs']['name']['default'] = _API_GT_MYURLS_NAME_FIELD_DEFAULT;
	$gateway['configs']['name']['type'] = 'text';
	
	$gateway['configs']['username']['name'] = _API_GT_MYURLS_USERNAME_FIELD_NAME;
	$gateway['configs']['username']['default'] = _API_GT_MYURLS_USERNAME_FIELD_DEFAULT;
	$gateway['configs']['username']['type'] = 'text';
	
	$gateway['configs']['password']['name'] = _API_GT_MYURLS_MD5PASSWORD_FIELD_NAME;
	$gateway['configs']['password']['default'] = _API_GT_MYURLS_MD5PASSWORD_FIELD_DEFAULT;
	$gateway['configs']['password']['type'] = 'text';
	
	$gateway['configs']['required']['name'] = _API_GT_MYURLS_REQUIRED_FIELD_NAME;
	$gateway['configs']['required']['default'] = _API_GT_MYURLS_REQUIRED_FIELD_DEFAULT;
	$gateway['configs']['required']['type'] = 'text';
	
	$gateway['configs']['donation']['name'] = _API_GT_MYURLS_DONATIONS_FIELD_NAME;
	$gateway['configs']['donation']['default'] = _API_GT_MYURLS_DONATIONS_FIELD_DEFAULT;
	$gateway['configs']['donation']['type'] = 'text';
	
?>
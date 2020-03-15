<?php
session_start();
ob_start();
// error_reporting(0);
// Credit to: Gaya & Valak & Spicky & PiouPiou
// Constantes :
define('root', __dir__);
define('pre','/');
define('siteurl','http://localhost/SpickyMvc');
define('sitename','SpickyWebSite');

$PageDisponible['home'] = root.pre.'controller'.pre.'home.php';
$PageDisponible['404'] = root.pre.'controller'.pre.'404.php';

// Insert Dependances here:

	require root.pre.'model'.pre.'metachanger.php';
	$meta=new Meta;

	require root.pre.'model'.pre.'database.php';
	$db1=new Database('localhost','root','','test');

// Class Mvc :
	require 'ClassMvc.php';
	$ClassMvc=new Systeme\mvc;
	
		
	if($ClassMvc->RequireController):
		require $ClassMvc->RequireController;
	else:
		require $ClassMvc->RequireController;
	endif;
		



$GetResultCode=ob_get_clean();
if(isset($WordToReplace)):
	if(is_array($WordToReplace)):
		foreach($WordToReplace as $Word => $To):
		
			$GetResultCode=str_replace($Word, $To, $GetResultCode);
			
		endforeach;
	endif;
endif;
echo $GetResultCode;

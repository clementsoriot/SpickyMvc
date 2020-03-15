<?php
session_start();
ob_start();
// error_reporting(0);
// Credit to: Gaya & Valak & Spicky & PiouPiou
// Constantes :

if(file_exists(root.pre.'model'.pre.'add_instructions.php')):
	require root.pre.'model'.pre.'add_instructions.php'; // Sera utile pour les plugins.
endif;


// Configurables options: //

	define('root', __dir__);
	define('pre','/');
	define('siteurl','http://localhost/SpickyMvc');
	define('sitename','SpickyWebSite');

// End Configuration //


$PageDisponible['home'] = root.pre.'controller'.pre.'home.php';
$PageDisponible['404'] = root.pre.'controller'.pre.'404.php';


// Insert your Dependances here
require root.pre.'model'.pre.'metachanger.php';
require root.pre.'model'.pre.'database.php';
require 'ClassMvc.php';

$meta=new Meta;
$db1=new Database('localhost','root','','test');

// Class Mvc 
$ClassMvc=new Systeme\mvc;	
require $ClassMvc->RequireController;

/*****************************************************/
/* Systeme de remplacement de mot :
/* @ $WordToReplace['mot'] = 'Nouveau text';
/* Dans une class:
/* @ $GLOBALS['WordToReplace']['mot'] = 'Nouveau text';
/*****************************************************/
$GetResultCode=ob_get_clean();
if(isset($WordToReplace)):
	if(is_array($WordToReplace)):
		foreach($WordToReplace as $Word => $To):
		
			$GetResultCode=str_replace($Word, $To, $GetResultCode);
			
		endforeach;
	endif;
endif;
echo $GetResultCode;

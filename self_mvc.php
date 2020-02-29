<?php
session_start();
ob_start();
// error_reporting(0);

// Constantes :
define('root', __dir__);
define('pre','/');

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
	
		require root.pre.'view/optimisation'.pre.'htmlstart.php';
		
	if($ClassMvc->RequireController):
		require $ClassMvc->RequireController;
	else:
		require $ClassMvc->RequireController;
	endif;
		
		require root.pre.'view/optimisation'.pre.'htmlend.php';
	// $ClassMvc->Get('age');


$GetResultCode=ob_get_clean();

if(isset($WordToReaplace)):
	if(is_array($WordToReaplace)):
		foreach($WordToReaplace as $Word => $To):
		
			$GetResultCode=str_replace($Word, $To, $GetResultCode);
			
		endforeach;
	endif;
endif;

echo $GetResultCode;









// $db1=new Dependances\Database('localhost','root','','test');
// $meta->ChangeTitle('ok');
// $WordToReaplace['::UsName::'] = 'Clément';
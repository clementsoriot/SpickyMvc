<?php
namespace Dependances;
class Meta{

	public function ChangeTitle($by){

		$GLOBALS['WordToReaplace']['<title></title>'] = '<title>'.$by.'</title>';
		
	}
	
	public function ChangeSrc($by){
		
		if(!isset($GLOBALS['WordToReaplace']['<!--[+Src+]!-->'])):
			$GLOBALS['WordToReaplace']['<!--[+Src+]!-->'] = $by;
		else:
			$GLOBALS['WordToReaplace']['<!--[+Src+]!-->'] .= $by;
		endif;
	
	}
	
	public function ChangeMeta($by){
		
		if(!isset($GLOBALS['WordToReaplace']['<!--[+Src+]!-->'])):
			$GLOBALS['WordToReaplace']['<!--[+Src+]!-->'] = $by;
		else:
			$GLOBALS['WordToReaplace']['<!--[+Src+]!-->'] .= $by;
		endif;
	
	}

}
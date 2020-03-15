<?php
class Meta{

	public function ChangeTitle($by){

		$GLOBALS['WordToReplace']['<title></title>'] = '<title>'.$by.'</title>';
		
	}
	
	public function ChangeSrc($by){
		
		if(!isset($GLOBALS['WordToReplace']['<!--[+Src+]!-->'])):
			$GLOBALS['WordToReplace']['<!--[+Src+]!-->'] = $by;
		else:
			$GLOBALS['WordToReplace']['<!--[+Src+]!-->'] .= $by;
		endif;
	
	}
	
	public function ChangeMeta($by){
		
		if(!isset($GLOBALS['WordToReplace']['<!--[+Src+]!-->'])):
			$GLOBALS['WordToReplace']['<!--[+Src+]!-->'] = $by;
		else:
			$GLOBALS['WordToReplace']['<!--[+Src+]!-->'] .= $by;
		endif;
	
	}

}
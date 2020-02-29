<?php
namespace Systeme;
class Mvc{
	public $RequireController;
	public $Get;

	function __construct(){
		$this->Explode();
	}

	public function Explode(){

		if(isset($_GET['page'])):

			$explode=explode('/',$_GET['page']);

			$int=0;

			foreach ($explode as $key => $value) {
				$int++;
				if($key == 0):
					if(!empty($value)):
						if(isset($GLOBALS['PageDisponible'][$value])):
							$this->RequireController=$GLOBALS['PageDisponible'][$value];
						else:
							$this->RequireController=$GLOBALS['PageDisponible']['404'];
						endif;
					else:
						$this->RequireController=$GLOBALS['PageDisponible']['home'];
					endif;
				else:
					if(!isset($explode[$int])
					OR empty($explode[$int])
					): return; endif;

					if($key%2):
						$this->Get[$value]=$explode[$int];
					endif;
				endif;
			}

		endif;

	}

	public function Get($a='0'){
		if($a==='0')
		:
			print_r($this->Get);
		else:
			if(isset($this->Get[$a])):
				return $this->Get[$a];
			else:
				return false;
			endif;
		endif;
	}
}
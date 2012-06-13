<?php

class Hermes {
	private $Ver = 0.01;
	private $ScrollDir;
	
	private $LoadedScrolls = array();
	function __Construct($ScrollDir) {
		$this -> ScrollDir = $ScrollDir;
		//Load Scrolls
		foreach (glob($ScrollDir."/*.php") as $filename) {
			include $filename;
			$ClassName = basename($filename,'.php');
			$this->LoadedScrolls[$ClassName] = new $ClassName();
			$this->LoadedScrolls[$ClassName]->initiate();
		}
	}
	public function call($NameSpace,$Function,$ParameterArray)
	{
		return $this->LoadedScrolls[$NameSpace]->call($Function,$ParameterArray);
	}

}



interface iScroll {
	public function initiate();
	public function call($FunctionName,$ParameterArray = false);
}
?>
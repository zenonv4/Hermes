<?php
//Just To Prove Hermes 

class DemoActions implements iScroll {
	private $vars = array();
	public function initiate()
	{
		// Do Nothing
	}
	public function call($FunctionName, $ParameterArray = false)
	{
		return call_user_func( array($this,$FunctionName),$ParameterArray);
	}
	
	//Method functions are private
	
	private function test($ParameterArray)
	{
		return 'this works darn it be!';
	}
	private function testparameter($ParameterArray)
	{
		return 'this works darn it be! here be yer text:'. $ParameterArray['Text'];
	}
}
?>
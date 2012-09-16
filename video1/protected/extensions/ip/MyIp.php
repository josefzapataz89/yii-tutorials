<?php
class MyIp extends CApplicationComponent
{
	public $noLocal=false;
	
	public function getIp()
	{
		if($this->noLocal)
			return "Local";	
		return $_SERVER['REMOTE_ADDR'];
	}
}
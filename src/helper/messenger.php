<?php
namespace calc\helper;

class messenger
{

	private $_name;

	public function __construct($name) 
	{
		$this->_name = $name;
	}

	public function hello()
	{
		return "Hello " . $this->_name; 
	}

	public function gm()
	{
		return "Goodmorning " . $this->_name;
	}

	public function bye()
	{
		return "Bye " . $this->_name;
	}
}
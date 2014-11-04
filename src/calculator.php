<?php namespace calc;

class calculator
{

	private $_x;
	private $_y;

	public function __construct($x, $y)
	{
		$this->_x = $x;
		$this->_y = $y;
	}

	public function add()
	{
		return $this->_x + $this->_y;
	}

	public function sub()
	{
		return $this->_x - $this->_y;
	}

	public function mul()
	{
		return $this->_x * $this->_y;
	}

	public function div()
	{
		return $this->_x / $this->_y;
	}

}
<?php
use Calculator\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
	public function testCanBeAdded()
	{
		$c = new Calculator(4,4);
		$this->assertEquals(8, $c->add());
	}

	public function testCanBeSubtracted()
	{
		$c = new Calculator(4,4);
		$this->assertEquals(0, $c->sub());
	}

	public function testCanBeMultiploed()
	{
		$c = new Calculator(4,4);
		$this->assertEquals(16, $c->mul());
	}

	public function testCanBeDivided()
	{
		$c = new Calculator(8, 4);
		$this->assertEquals(2, $c->div());
	}

}
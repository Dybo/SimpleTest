<?php
use calc\calculator;

class calculatorTest extends \PHPUnit_Framework_TestCase
{
	public function testCanBeAdded()
	{
		$c = new calculator(4,4);
		$this->assertEquals(8, $c->add());
	}

	public function testCanBeSubtracted()
	{
		$c = new calculator(4,4);
		$this->assertEquals(0, $c->sub());
	}

	public function testCanBeMultiploed()
	{
		$c = new calculator(4,4);
		$this->assertEquals(16, $c->mul());
	}

	public function testCanBeDivided()
	{
		$c = new calculator(8, 4);
		$this->assertEquals(2, $c->div());
	}

}
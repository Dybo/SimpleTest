<?php
use calculator\helper\messenger;

class messengerTest extends \PHPUnit_Framework_TestCase
{

	public function testCanBeHelloed()
	{
		$m = new messenger("Dylan");

		$expected = "Hello Dylan";

		$this->assertEquals($expected, $m->hello());
	}

	public function testCanBeGmed()
	{
		$m = new messenger("Dylan");

		$expected = "Goodmorning Dylan";

		$this->assertEquals($expected, $m->gm());
	}

	public function testCanBeByed()
	{
		$m = new Messenger("Dylan");

		$expected = "Bye Dylan";

		$this->assertEquals($expected, $m->bye());
	}

}
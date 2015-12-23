<?php

class XmlAttributeTest extends PHPUnit_Framework_TestCase
{
    protected $attribute;

    public function setUp()
    {
        $this->attribute = new \Dybo\Xml\XmlAttribute('version', '1.0');
    }

    public function testAttributeCanBeGetted()
    {
        $this->assertEquals('version', $this->attribute->getAttribute());
        $this->assertEquals('1.0', $this->attribute->getValue());
    }
}
<?php

class XmlElementTest extends PHPUnit_Framework_TestCase
{
    protected $element;

    public function setUp()
    {
        $this->element = new \Dybo\Xml\XmlElement("note", "test");
    }

    public function testElementCanBeGetted()
    {
        $this->assertEquals('note', $this->element->getTag());
        $this->assertEquals('test', $this->element->getData());
    }

    public function testElementAttributeCanBeAdded()
    {
        $return = $this->element->addAttribute(new \Dybo\Xml\XmlAttribute('version', '1.0'));
        $this->assertInstanceOf('\Dybo\Xml\XmlElement', $return);
    }

    public function testElementXmlCanBeCreated()
    {
        $exptected = "<note version=\"1.0\">test</note>";

        $element = new \Dybo\Xml\XmlElement('note', 'test', [
            new \Dybo\Xml\XmlAttribute('version', '1.0')
        ]);

        $this->assertEquals($exptected, $element->toXml());
    }
}
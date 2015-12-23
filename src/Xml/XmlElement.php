<?php

namespace Dybo\Xml;

class XmlElement
{
    private $tag;

    private $data;

    private $attributes;

    public function __construct(string $tag, string $data, array $attributes = [])
    {
        $this->tag = $tag;
        $this->data = $data;
        $this->attributes = $attributes;
    }

    public function getTag() : string
    {
        return $this->tag;
    }

    public function getData() : string
    {
        return $this->data;
    }

    public function addAttribute(XmlAttribute $attribute) : XmlElement
    {
        $this->attributes[$attribute->getAttribute()] = $attribute;
        return $this;
    }

    public function toXml() : string
    {
        $attributes = "";

        foreach($this->attributes as $attribute) {
            $attributes .= " " . $attribute->getAttribute() . "=" . "\"" . $attribute->getValue() . "\"";
        }

        return "<" . $this->tag . $attributes . ">" . $this->data . "</" . $this->tag . ">";
    }
}
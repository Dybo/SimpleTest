<?php

namespace Dybo\Xml;

class XmlAttribute
{
    /**
     * @var string|string
     */
    private $attribute;

    /**
     * @var string|string
     */
    private $value;

    /**
     * XmlAttribute constructor.
     *
     * @param string $attribute
     * @param string $value
     */
    public function __construct(string $attribute, string $value)
    {
        $this->attribute = $attribute;
        $this->value = $value;
    }

    /**
     * Get the attribute's name.
     *
     * @return string
     */
    public function getAttribute() : string
    {
        return $this->attribute;
    }

    /**
     * Get the value of the attribute.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
}
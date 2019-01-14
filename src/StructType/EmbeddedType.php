<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmbeddedType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type represents a reference to an embedded security token.
 * @subpackage Structs
 */
class EmbeddedType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The ValueType
     * @var string
     */
    public $ValueType;
    /**
     * Constructor method for EmbeddedType
     * @uses EmbeddedType::setAny()
     * @uses EmbeddedType::setValueType()
     * @param \DOMDocument $any
     * @param string $valueType
     */
    public function __construct(\DOMDocument $any = null, $valueType = null)
    {
        $this
            ->setAny($any)
            ->setValueType($valueType);
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Devlabs91\GenericOtaHotelApiService\StructType\EmbeddedType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmbeddedType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get ValueType value
     * @return string|null
     */
    public function getValueType()
    {
        return $this->ValueType;
    }
    /**
     * Set ValueType value
     * @param string $valueType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmbeddedType
     */
    public function setValueType($valueType = null)
    {
        // validation for constraint: string
        if (!is_null($valueType) && !is_string($valueType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valueType)), __LINE__);
        }
        $this->ValueType = $valueType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmbeddedType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}

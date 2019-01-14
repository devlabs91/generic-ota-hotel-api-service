<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimestampType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This complex type ties together the timestamp related elements into a composite type.
 * @subpackage Structs
 */
class TimestampType extends AbstractStructBase
{
    /**
     * The Created
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: wsu:Created
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime
     */
    public $Created;
    /**
     * The Expires
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: wsu:Expires
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime
     */
    public $Expires;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for TimestampType
     * @uses TimestampType::setCreated()
     * @uses TimestampType::setExpires()
     * @uses TimestampType::setAny()
     * @uses TimestampType::setId()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime $created
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime $expires
     * @param \DOMDocument $any
     * @param string $id
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime $created = null, \Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime $expires = null, \DOMDocument $any = null, $id = null)
    {
        $this
            ->setCreated($created)
            ->setExpires($expires)
            ->setAny($any)
            ->setId($id);
    }
    /**
     * Get Created value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime $created
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimestampType
     */
    public function setCreated(\Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime $created = null)
    {
        $this->Created = $created;
        return $this;
    }
    /**
     * Get Expires value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime|null
     */
    public function getExpires()
    {
        return $this->Expires;
    }
    /**
     * Set Expires value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime $expires
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimestampType
     */
    public function setExpires(\Devlabs91\GenericOtaHotelApiService\StructType\AttributedDateTime $expires = null)
    {
        $this->Expires = $expires;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Devlabs91\GenericOtaHotelApiService\StructType\TimestampType::setAny()
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimestampType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimestampType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimestampType
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

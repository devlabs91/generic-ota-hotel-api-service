<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PGPDataType StructType
 * @subpackage Structs
 */
class PGPDataType extends AbstractStructBase
{
    /**
     * The PGPKeyID
     * @var string
     */
    public $PGPKeyID;
    /**
     * The PGPKeyPacket
     * @var string
     */
    public $PGPKeyPacket;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PGPDataType
     * @uses PGPDataType::setPGPKeyID()
     * @uses PGPDataType::setPGPKeyPacket()
     * @uses PGPDataType::setAny()
     * @param string $pGPKeyID
     * @param string $pGPKeyPacket
     * @param \DOMDocument $any
     */
    public function __construct($pGPKeyID = null, $pGPKeyPacket = null, \DOMDocument $any = null)
    {
        $this
            ->setPGPKeyID($pGPKeyID)
            ->setPGPKeyPacket($pGPKeyPacket)
            ->setAny($any);
    }
    /**
     * Get PGPKeyID value
     * @return string|null
     */
    public function getPGPKeyID()
    {
        return $this->PGPKeyID;
    }
    /**
     * Set PGPKeyID value
     * @param string $pGPKeyID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PGPDataType
     */
    public function setPGPKeyID($pGPKeyID = null)
    {
        // validation for constraint: string
        if (!is_null($pGPKeyID) && !is_string($pGPKeyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pGPKeyID)), __LINE__);
        }
        $this->PGPKeyID = $pGPKeyID;
        return $this;
    }
    /**
     * Get PGPKeyPacket value
     * @return string|null
     */
    public function getPGPKeyPacket()
    {
        return $this->PGPKeyPacket;
    }
    /**
     * Set PGPKeyPacket value
     * @param string $pGPKeyPacket
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PGPDataType
     */
    public function setPGPKeyPacket($pGPKeyPacket = null)
    {
        // validation for constraint: string
        if (!is_null($pGPKeyPacket) && !is_string($pGPKeyPacket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pGPKeyPacket)), __LINE__);
        }
        $this->PGPKeyPacket = $pGPKeyPacket;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Devlabs91\GenericOtaHotelApiService\StructType\PGPDataType::setAny()
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PGPDataType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PGPDataType
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

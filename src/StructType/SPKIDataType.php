<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SPKIDataType StructType
 * @subpackage Structs
 */
class SPKIDataType extends AbstractStructBase
{
    /**
     * The SPKISexp
     * @var string
     */
    public $SPKISexp;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SPKIDataType
     * @uses SPKIDataType::setSPKISexp()
     * @uses SPKIDataType::setAny()
     * @param string $sPKISexp
     * @param \DOMDocument $any
     */
    public function __construct($sPKISexp = null, \DOMDocument $any = null)
    {
        $this
            ->setSPKISexp($sPKISexp)
            ->setAny($any);
    }
    /**
     * Get SPKISexp value
     * @return string|null
     */
    public function getSPKISexp()
    {
        return $this->SPKISexp;
    }
    /**
     * Set SPKISexp value
     * @param string $sPKISexp
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SPKIDataType
     */
    public function setSPKISexp($sPKISexp = null)
    {
        // validation for constraint: string
        if (!is_null($sPKISexp) && !is_string($sPKISexp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sPKISexp)), __LINE__);
        }
        $this->SPKISexp = $sPKISexp;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Devlabs91\GenericOtaHotelApiService\StructType\SPKIDataType::setAny()
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SPKIDataType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SPKIDataType
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

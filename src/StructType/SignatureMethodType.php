<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureMethodType StructType
 * @subpackage Structs
 */
class SignatureMethodType extends AbstractStructBase
{
    /**
     * The HMACOutputLength
     * @var HMACOutputLengthType
     */
    public $HMACOutputLength;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The Algorithm
     * @var string
     */
    public $Algorithm;
    /**
     * Constructor method for SignatureMethodType
     * @uses SignatureMethodType::setHMACOutputLength()
     * @uses SignatureMethodType::setAny()
     * @uses SignatureMethodType::setAlgorithm()
     * @param HMACOutputLengthType $hMACOutputLength
     * @param \DOMDocument $any
     * @param string $algorithm
     */
    public function __construct(HMACOutputLengthType $hMACOutputLength = null, \DOMDocument $any = null, $algorithm = null)
    {
        $this
            ->setHMACOutputLength($hMACOutputLength)
            ->setAny($any)
            ->setAlgorithm($algorithm);
    }
    /**
     * Get HMACOutputLength value
     * @return HMACOutputLengthType|null
     */
    public function getHMACOutputLength()
    {
        return $this->HMACOutputLength;
    }
    /**
     * Set HMACOutputLength value
     * @param HMACOutputLengthType $hMACOutputLength
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType
     */
    public function setHMACOutputLength(HMACOutputLengthType $hMACOutputLength = null)
    {
        $this->HMACOutputLength = $hMACOutputLength;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType::setAny()
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get Algorithm value
     * @return string|null
     */
    public function getAlgorithm()
    {
        return $this->Algorithm;
    }
    /**
     * Set Algorithm value
     * @param string $algorithm
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType
     */
    public function setAlgorithm($algorithm = null)
    {
        // validation for constraint: string
        if (!is_null($algorithm) && !is_string($algorithm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($algorithm)), __LINE__);
        }
        $this->Algorithm = $algorithm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType
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

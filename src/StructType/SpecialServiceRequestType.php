<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialServiceRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: SSR's for this booking request e.g.,. meals
 * @subpackage Structs
 */
class SpecialServiceRequestType extends AbstractStructBase
{
    /**
     * The SSRCode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SSRCode;
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - documentation: Specify airline to request availability for.
     * - minOccurs: 0
     * @var mixed
     */
    public $Airline;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Text associated with remark
     * - minOccurs: 0
     * @var mixed
     */
    public $Text;
    /**
     * Constructor method for SpecialServiceRequestType
     * @uses SpecialServiceRequestType::setSSRCode()
     * @uses SpecialServiceRequestType::setAirline()
     * @uses SpecialServiceRequestType::setText()
     * @param string $sSRCode
     * @param mixed $airline
     * @param mixed $text
     */
    public function __construct($sSRCode = null, $airline = null, $text = null)
    {
        $this
            ->setSSRCode($sSRCode)
            ->setAirline($airline)
            ->setText($text);
    }
    /**
     * Get SSRCode value
     * @return string
     */
    public function getSSRCode()
    {
        return $this->SSRCode;
    }
    /**
     * Set SSRCode value
     * @param string $sSRCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequestType
     */
    public function setSSRCode($sSRCode = null)
    {
        // validation for constraint: string
        if (!is_null($sSRCode) && !is_string($sSRCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sSRCode)), __LINE__);
        }
        $this->SSRCode = $sSRCode;
        return $this;
    }
    /**
     * Get Airline value
     * @return mixed|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @param mixed $airline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequestType
     */
    public function setAirline($airline = null)
    {
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get Text value
     * @return mixed|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param mixed $text
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequestType
     */
    public function setText($text = null)
    {
        $this->Text = $text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequestType
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

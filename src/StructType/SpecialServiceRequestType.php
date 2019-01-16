<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialServiceRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: SSR's for this booking request, for example meals.
 * @subpackage Structs
 */
class SpecialServiceRequestType extends AbstractStructBase
{
    /**
     * The SSRCode
     * Meta informations extracted from the WSDL
     * - documentation: The four alpha position industry code identifying a particular type of special service request.
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
     * - documentation: Text associated with remark.
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The ServiceQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the number of special services.
     * - use: optional
     * @var string
     */
    public $ServiceQuantity;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Code providing status information for this special service request. Refer to OpenTravel Code List Status (STS).
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: A number which identifies an SSR in a system.
     * - use: optional
     * @var string
     */
    public $Number;
    /**
     * Constructor method for SpecialServiceRequestType
     * @uses SpecialServiceRequestType::setSSRCode()
     * @uses SpecialServiceRequestType::setAirline()
     * @uses SpecialServiceRequestType::setText()
     * @uses SpecialServiceRequestType::setServiceQuantity()
     * @uses SpecialServiceRequestType::setStatus()
     * @uses SpecialServiceRequestType::setNumber()
     * @param string $sSRCode
     * @param mixed $airline
     * @param string $text
     * @param string $serviceQuantity
     * @param string $status
     * @param string $number
     */
    public function __construct($sSRCode = null, $airline = null, $text = null, $serviceQuantity = null, $status = null, $number = null)
    {
        $this
            ->setSSRCode($sSRCode)
            ->setAirline($airline)
            ->setText($text)
            ->setServiceQuantity($serviceQuantity)
            ->setStatus($status)
            ->setNumber($number);
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
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequestType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get ServiceQuantity value
     * @return string|null
     */
    public function getServiceQuantity()
    {
        return $this->ServiceQuantity;
    }
    /**
     * Set ServiceQuantity value
     * @param string $serviceQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequestType
     */
    public function setServiceQuantity($serviceQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($serviceQuantity) && !is_string($serviceQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceQuantity)), __LINE__);
        }
        $this->ServiceQuantity = $serviceQuantity;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequestType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequestType
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
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

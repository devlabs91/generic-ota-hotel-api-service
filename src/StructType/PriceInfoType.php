<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies price info. Contains information that qualifies the amount priced. | Provides amount and currency for the cruise item.
 * @subpackage Structs
 */
class PriceInfoType extends AbstractStructBase
{
    /**
     * The PriceDescription
     * Meta informations extracted from the WSDL
     * - documentation: Free text that describes the price.
     * - minOccurs: 0
     * @var mixed
     */
    public $PriceDescription;
    /**
     * The AgeQualifyingCode
     * Meta informations extracted from the WSDL
     * - documentation: Contains the occupancy pricing breakdown code. This code specifies the type of passenger such as adult, child or infant. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     * - use: optional
     * @var string
     */
    public $AgeQualifyingCode;
    /**
     * The BreakdownType
     * Meta informations extracted from the WSDL
     * - documentation: Contains the type of breakdown for the occupancy pricing (e.g., 1/2 = First and second guest price; 3GT = Third guest price; 4GT = Fourth guest price; MGT = Additional guest price; SGL = Single; DBL = Double; TPL = Triple; QUA =
     * Quad; QUI = Quin; and CAB = Cabin).
     * - use: optional
     * @var string
     */
    public $BreakdownType;
    /**
     * The ChargeTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the basis for the price. Refer to OpenTravel Code List Charge Type (CHG).
     * - use: optional
     * @var string
     */
    public $ChargeTypeCode;
    /**
     * Constructor method for PriceInfoType
     * @uses PriceInfoType::setPriceDescription()
     * @uses PriceInfoType::setAgeQualifyingCode()
     * @uses PriceInfoType::setBreakdownType()
     * @uses PriceInfoType::setChargeTypeCode()
     * @param mixed $priceDescription
     * @param string $ageQualifyingCode
     * @param string $breakdownType
     * @param string $chargeTypeCode
     */
    public function __construct($priceDescription = null, $ageQualifyingCode = null, $breakdownType = null, $chargeTypeCode = null)
    {
        $this
            ->setPriceDescription($priceDescription)
            ->setAgeQualifyingCode($ageQualifyingCode)
            ->setBreakdownType($breakdownType)
            ->setChargeTypeCode($chargeTypeCode);
    }
    /**
     * Get PriceDescription value
     * @return mixed|null
     */
    public function getPriceDescription()
    {
        return $this->PriceDescription;
    }
    /**
     * Set PriceDescription value
     * @param mixed $priceDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfoType
     */
    public function setPriceDescription($priceDescription = null)
    {
        $this->PriceDescription = $priceDescription;
        return $this;
    }
    /**
     * Get AgeQualifyingCode value
     * @return string|null
     */
    public function getAgeQualifyingCode()
    {
        return $this->AgeQualifyingCode;
    }
    /**
     * Set AgeQualifyingCode value
     * @param string $ageQualifyingCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfoType
     */
    public function setAgeQualifyingCode($ageQualifyingCode = null)
    {
        // validation for constraint: string
        if (!is_null($ageQualifyingCode) && !is_string($ageQualifyingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ageQualifyingCode)), __LINE__);
        }
        $this->AgeQualifyingCode = $ageQualifyingCode;
        return $this;
    }
    /**
     * Get BreakdownType value
     * @return string|null
     */
    public function getBreakdownType()
    {
        return $this->BreakdownType;
    }
    /**
     * Set BreakdownType value
     * @param string $breakdownType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfoType
     */
    public function setBreakdownType($breakdownType = null)
    {
        // validation for constraint: string
        if (!is_null($breakdownType) && !is_string($breakdownType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($breakdownType)), __LINE__);
        }
        $this->BreakdownType = $breakdownType;
        return $this;
    }
    /**
     * Get ChargeTypeCode value
     * @return string|null
     */
    public function getChargeTypeCode()
    {
        return $this->ChargeTypeCode;
    }
    /**
     * Set ChargeTypeCode value
     * @param string $chargeTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfoType
     */
    public function setChargeTypeCode($chargeTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($chargeTypeCode) && !is_string($chargeTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeTypeCode)), __LINE__);
        }
        $this->ChargeTypeCode = $chargeTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfoType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LengthsOfStay StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be added or removed. Some systems include this information directly with the Availability Status as opposed to the booking restriction.
 * @subpackage Structs
 */
class LengthsOfStay extends LengthsOfStayType
{
    /**
     * The ArrivalDateBased
     * Meta informations extracted from the WSDL
     * - documentation: True indicates that LOS is based on arrival date. False indicates that LOS is based on stay date.
     * - use: optional
     * @var bool
     */
    public $ArrivalDateBased;
    /**
     * The FixedPatternLength
     * Meta informations extracted from the WSDL
     * - documentation: The number of elements in a fixed pattern length of stay (FPLOS) array. | Used for Numeric values, from 1 to 999 inclusive.
     * - use: optional
     * - maxInclusive: 999
     * - minInclusive: 1
     * @var int
     */
    public $FixedPatternLength;
    /**
     * Constructor method for LengthsOfStay
     * @uses LengthsOfStay::setArrivalDateBased()
     * @uses LengthsOfStay::setFixedPatternLength()
     * @param bool $arrivalDateBased
     * @param int $fixedPatternLength
     */
    public function __construct($arrivalDateBased = null, $fixedPatternLength = null)
    {
        $this
            ->setArrivalDateBased($arrivalDateBased)
            ->setFixedPatternLength($fixedPatternLength);
    }
    /**
     * Get ArrivalDateBased value
     * @return bool|null
     */
    public function getArrivalDateBased()
    {
        return $this->ArrivalDateBased;
    }
    /**
     * Set ArrivalDateBased value
     * @param bool $arrivalDateBased
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStay
     */
    public function setArrivalDateBased($arrivalDateBased = null)
    {
        // validation for constraint: boolean
        if (!is_null($arrivalDateBased) && !is_bool($arrivalDateBased)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($arrivalDateBased)), __LINE__);
        }
        $this->ArrivalDateBased = $arrivalDateBased;
        return $this;
    }
    /**
     * Get FixedPatternLength value
     * @return int|null
     */
    public function getFixedPatternLength()
    {
        return $this->FixedPatternLength;
    }
    /**
     * Set FixedPatternLength value
     * @param int $fixedPatternLength
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStay
     */
    public function setFixedPatternLength($fixedPatternLength = null)
    {
        // validation for constraint: maxInclusive
        if ($fixedPatternLength > 999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 999, "%s" given', $fixedPatternLength), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($fixedPatternLength < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $fixedPatternLength), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($fixedPatternLength) && !is_numeric($fixedPatternLength)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fixedPatternLength)), __LINE__);
        }
        $this->FixedPatternLength = $fixedPatternLength;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStay
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LengthsOfStayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of LengthOfStay.
 * @subpackage Structs
 */
class LengthsOfStayType extends AbstractStructBase
{
    /**
     * The LengthOfStay
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay[]
     */
    public $LengthOfStay;
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
     * - documentation: The number of elements in a fixed pattern length of stay (FPLOS) array.
     * - use: optional
     * @var string
     */
    public $FixedPatternLength;
    /**
     * Constructor method for LengthsOfStayType
     * @uses LengthsOfStayType::setLengthOfStay()
     * @uses LengthsOfStayType::setArrivalDateBased()
     * @uses LengthsOfStayType::setFixedPatternLength()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay[] $lengthOfStay
     * @param bool $arrivalDateBased
     * @param string $fixedPatternLength
     */
    public function __construct(array $lengthOfStay = array(), $arrivalDateBased = null, $fixedPatternLength = null)
    {
        $this
            ->setLengthOfStay($lengthOfStay)
            ->setArrivalDateBased($arrivalDateBased)
            ->setFixedPatternLength($fixedPatternLength);
    }
    /**
     * Get LengthOfStay value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay[]|null
     */
    public function getLengthOfStay()
    {
        return $this->LengthOfStay;
    }
    /**
     * Set LengthOfStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay[] $lengthOfStay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStayType
     */
    public function setLengthOfStay(array $lengthOfStay = array())
    {
        foreach ($lengthOfStay as $lengthsOfStayTypeLengthOfStayItem) {
            // validation for constraint: itemType
            if (!$lengthsOfStayTypeLengthOfStayItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay) {
                throw new \InvalidArgumentException(sprintf('The LengthOfStay property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay, "%s" given', is_object($lengthsOfStayTypeLengthOfStayItem) ? get_class($lengthsOfStayTypeLengthOfStayItem) : gettype($lengthsOfStayTypeLengthOfStayItem)), __LINE__);
            }
        }
        $this->LengthOfStay = $lengthOfStay;
        return $this;
    }
    /**
     * Add item to LengthOfStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStayType
     */
    public function addToLengthOfStay(\Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay) {
            throw new \InvalidArgumentException(sprintf('The LengthOfStay property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LengthOfStay[] = $item;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStayType
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
     * @return string|null
     */
    public function getFixedPatternLength()
    {
        return $this->FixedPatternLength;
    }
    /**
     * Set FixedPatternLength value
     * @param string $fixedPatternLength
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStayType
     */
    public function setFixedPatternLength($fixedPatternLength = null)
    {
        // validation for constraint: string
        if (!is_null($fixedPatternLength) && !is_string($fixedPatternLength)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fixedPatternLength)), __LINE__);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStayType
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

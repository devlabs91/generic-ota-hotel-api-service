<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeadlineType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The absolute deadline or amount of offset time before a deadline for a payment of cancel goes into effect.
 * @subpackage Structs
 */
class DeadlineType extends AbstractStructBase
{
    /**
     * The AbsoluteDeadline
     * Meta informations extracted from the WSDL
     * - documentation: Defines the absolute deadline. Either this or the offset attributes may be used.
     * - use: optional
     * @var string
     */
    public $AbsoluteDeadline;
    /**
     * The OffsetTimeUnit
     * Meta informations extracted from the WSDL
     * - documentation: The units of time, e.g.: days, hours, etc., that apply to the deadline.
     * - use: optional
     * @var string
     */
    public $OffsetTimeUnit;
    /**
     * The OffsetUnitMultiplier
     * Meta informations extracted from the WSDL
     * - documentation: The number of units of DeadlineTimeUnit.
     * - use: optional
     * @var string
     */
    public $OffsetUnitMultiplier;
    /**
     * The OffsetDropTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $OffsetDropTime;
    /**
     * Constructor method for DeadlineType
     * @uses DeadlineType::setAbsoluteDeadline()
     * @uses DeadlineType::setOffsetTimeUnit()
     * @uses DeadlineType::setOffsetUnitMultiplier()
     * @uses DeadlineType::setOffsetDropTime()
     * @param string $absoluteDeadline
     * @param string $offsetTimeUnit
     * @param string $offsetUnitMultiplier
     * @param string $offsetDropTime
     */
    public function __construct($absoluteDeadline = null, $offsetTimeUnit = null, $offsetUnitMultiplier = null, $offsetDropTime = null)
    {
        $this
            ->setAbsoluteDeadline($absoluteDeadline)
            ->setOffsetTimeUnit($offsetTimeUnit)
            ->setOffsetUnitMultiplier($offsetUnitMultiplier)
            ->setOffsetDropTime($offsetDropTime);
    }
    /**
     * Get AbsoluteDeadline value
     * @return string|null
     */
    public function getAbsoluteDeadline()
    {
        return $this->AbsoluteDeadline;
    }
    /**
     * Set AbsoluteDeadline value
     * @param string $absoluteDeadline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeadlineType
     */
    public function setAbsoluteDeadline($absoluteDeadline = null)
    {
        // validation for constraint: string
        if (!is_null($absoluteDeadline) && !is_string($absoluteDeadline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($absoluteDeadline)), __LINE__);
        }
        $this->AbsoluteDeadline = $absoluteDeadline;
        return $this;
    }
    /**
     * Get OffsetTimeUnit value
     * @return string|null
     */
    public function getOffsetTimeUnit()
    {
        return $this->OffsetTimeUnit;
    }
    /**
     * Set OffsetTimeUnit value
     * @param string $offsetTimeUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeadlineType
     */
    public function setOffsetTimeUnit($offsetTimeUnit = null)
    {
        // validation for constraint: string
        if (!is_null($offsetTimeUnit) && !is_string($offsetTimeUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offsetTimeUnit)), __LINE__);
        }
        $this->OffsetTimeUnit = $offsetTimeUnit;
        return $this;
    }
    /**
     * Get OffsetUnitMultiplier value
     * @return string|null
     */
    public function getOffsetUnitMultiplier()
    {
        return $this->OffsetUnitMultiplier;
    }
    /**
     * Set OffsetUnitMultiplier value
     * @param string $offsetUnitMultiplier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeadlineType
     */
    public function setOffsetUnitMultiplier($offsetUnitMultiplier = null)
    {
        // validation for constraint: string
        if (!is_null($offsetUnitMultiplier) && !is_string($offsetUnitMultiplier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offsetUnitMultiplier)), __LINE__);
        }
        $this->OffsetUnitMultiplier = $offsetUnitMultiplier;
        return $this;
    }
    /**
     * Get OffsetDropTime value
     * @return string|null
     */
    public function getOffsetDropTime()
    {
        return $this->OffsetDropTime;
    }
    /**
     * Set OffsetDropTime value
     * @param string $offsetDropTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeadlineType
     */
    public function setOffsetDropTime($offsetDropTime = null)
    {
        // validation for constraint: string
        if (!is_null($offsetDropTime) && !is_string($offsetDropTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offsetDropTime)), __LINE__);
        }
        $this->OffsetDropTime = $offsetDropTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeadlineType
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

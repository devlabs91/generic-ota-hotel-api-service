<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRuleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the cancellation amount due according to the time before the booking date that the cancellation occurs. The amount may be either an amount or a percentage (e.g. 50% within 30 days or $100 outside 30 days). | Used for
 * Character Strings, length 0 to 32
 * - maxLength: 32
 * - minLength: 0
 * @subpackage Structs
 */
class CancelRuleType extends AbstractStructBase
{
    /**
     * The CancelByDate
     * @var string
     */
    public $CancelByDate;
    /**
     * The Percent
     * @var string
     */
    public $Percent;
    /**
     * Constructor method for CancelRuleType
     * @uses CancelRuleType::setCancelByDate()
     * @uses CancelRuleType::setPercent()
     * @param string $cancelByDate
     * @param string $percent
     */
    public function __construct($cancelByDate = null, $percent = null)
    {
        $this
            ->setCancelByDate($cancelByDate)
            ->setPercent($percent);
    }
    /**
     * Get CancelByDate value
     * @return string|null
     */
    public function getCancelByDate()
    {
        return $this->CancelByDate;
    }
    /**
     * Set CancelByDate value
     * @param string $cancelByDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRuleType
     */
    public function setCancelByDate($cancelByDate = null)
    {
        // validation for constraint: string
        if (!is_null($cancelByDate) && !is_string($cancelByDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelByDate)), __LINE__);
        }
        $this->CancelByDate = $cancelByDate;
        return $this;
    }
    /**
     * Get Percent value
     * @return string|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRuleType
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percent)), __LINE__);
        }
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRuleType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerRefNumber StructType
 * Meta informations extracted from the WSDL
 * - documentation: Direct reference of traveler assigned by requesting system. Used as a cross reference between data segments. | One or more travelers to whom this request applies | Contains the RPH reference to the traveler. | One or more travelers
 * to whom this request applies.
 * @subpackage Structs
 */
class TravelerRefNumber extends AbstractStructBase
{
    /**
     * The RangePosition
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RangePosition;
    /**
     * Constructor method for TravelerRefNumber
     * @uses TravelerRefNumber::setRangePosition()
     * @param string $rangePosition
     */
    public function __construct($rangePosition = null)
    {
        $this
            ->setRangePosition($rangePosition);
    }
    /**
     * Get RangePosition value
     * @return string|null
     */
    public function getRangePosition()
    {
        return $this->RangePosition;
    }
    /**
     * Set RangePosition value
     * @param string $rangePosition
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber
     */
    public function setRangePosition($rangePosition = null)
    {
        // validation for constraint: string
        if (!is_null($rangePosition) && !is_string($rangePosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rangePosition)), __LINE__);
        }
        $this->RangePosition = $rangePosition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber
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

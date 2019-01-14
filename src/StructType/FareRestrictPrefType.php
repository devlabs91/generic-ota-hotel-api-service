<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRestrictPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies preferences for airfare restrictions acceptable or not acceptable for a given travel situation.
 * @subpackage Structs
 */
class FareRestrictPrefType extends AbstractStructBase
{
    /**
     * The FareRestriction
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Fare Restriction (FAR).
     * - use: optional
     * @var string
     */
    public $FareRestriction;
    /**
     * Constructor method for FareRestrictPrefType
     * @uses FareRestrictPrefType::setFareRestriction()
     * @param string $fareRestriction
     */
    public function __construct($fareRestriction = null)
    {
        $this
            ->setFareRestriction($fareRestriction);
    }
    /**
     * Get FareRestriction value
     * @return string|null
     */
    public function getFareRestriction()
    {
        return $this->FareRestriction;
    }
    /**
     * Set FareRestriction value
     * @param string $fareRestriction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPrefType
     */
    public function setFareRestriction($fareRestriction = null)
    {
        // validation for constraint: string
        if (!is_null($fareRestriction) && !is_string($fareRestriction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareRestriction)), __LINE__);
        }
        $this->FareRestriction = $fareRestriction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPrefType
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

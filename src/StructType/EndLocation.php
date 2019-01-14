<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndLocation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Location or Locations associated with the reservation.
 * @subpackage Structs
 */
class EndLocation extends LocationType
{
    /**
     * The AssociatedDateTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AssociatedDateTime;
    /**
     * Constructor method for EndLocation
     * @uses EndLocation::setAssociatedDateTime()
     * @param string $associatedDateTime
     */
    public function __construct($associatedDateTime = null)
    {
        $this
            ->setAssociatedDateTime($associatedDateTime);
    }
    /**
     * Get AssociatedDateTime value
     * @return string|null
     */
    public function getAssociatedDateTime()
    {
        return $this->AssociatedDateTime;
    }
    /**
     * Set AssociatedDateTime value
     * @param string $associatedDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EndLocation
     */
    public function setAssociatedDateTime($associatedDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($associatedDateTime) && !is_string($associatedDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($associatedDateTime)), __LINE__);
        }
        $this->AssociatedDateTime = $associatedDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EndLocation
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

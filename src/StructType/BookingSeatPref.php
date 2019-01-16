<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingSeatPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: The booking class seat preferences.
 * @subpackage Structs
 */
class BookingSeatPref extends AbstractStructBase
{
    /**
     * The SeatsNeeded
     * Meta informations extracted from the WSDL
     * - documentation: The number of seats needed for the designated booking class.
     * - use: optional
     * @var int
     */
    public $SeatsNeeded;
    /**
     * Constructor method for BookingSeatPref
     * @uses BookingSeatPref::setSeatsNeeded()
     * @param int $seatsNeeded
     */
    public function __construct($seatsNeeded = null)
    {
        $this
            ->setSeatsNeeded($seatsNeeded);
    }
    /**
     * Get SeatsNeeded value
     * @return int|null
     */
    public function getSeatsNeeded()
    {
        return $this->SeatsNeeded;
    }
    /**
     * Set SeatsNeeded value
     * @param int $seatsNeeded
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingSeatPref
     */
    public function setSeatsNeeded($seatsNeeded = null)
    {
        // validation for constraint: int
        if (!is_null($seatsNeeded) && !is_numeric($seatsNeeded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seatsNeeded)), __LINE__);
        }
        $this->SeatsNeeded = $seatsNeeded;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingSeatPref
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

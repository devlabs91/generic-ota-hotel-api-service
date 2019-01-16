<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItinTotalFare StructType
 * Meta informations extracted from the WSDL
 * - documentation: Total price of the itinerary
 * @subpackage Structs
 */
class ItinTotalFare extends FareType
{
    /**
     * The Usage
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Usage;
    /**
     * Constructor method for ItinTotalFare
     * @uses ItinTotalFare::setUsage()
     * @param string $usage
     */
    public function __construct($usage = null)
    {
        $this
            ->setUsage($usage);
    }
    /**
     * Get Usage value
     * @return string|null
     */
    public function getUsage()
    {
        return $this->Usage;
    }
    /**
     * Set Usage value
     * @param string $usage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItinTotalFare
     */
    public function setUsage($usage = null)
    {
        // validation for constraint: string
        if (!is_null($usage) && !is_string($usage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usage)), __LINE__);
        }
        $this->Usage = $usage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItinTotalFare
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

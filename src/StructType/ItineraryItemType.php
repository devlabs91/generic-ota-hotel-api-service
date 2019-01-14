<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItineraryItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Any valid item of inventory.
 * @subpackage Structs
 */
class ItineraryItemType extends AbstractStructBase
{
    /**
     * The Accommodation
     * @var mixed
     */
    public $Accommodation;
    /**
     * The Travel
     * @var mixed
     */
    public $Travel;
    /**
     * Constructor method for ItineraryItemType
     * @uses ItineraryItemType::setAccommodation()
     * @uses ItineraryItemType::setTravel()
     * @param mixed $accommodation
     * @param mixed $travel
     */
    public function __construct($accommodation = null, $travel = null)
    {
        $this
            ->setAccommodation($accommodation)
            ->setTravel($travel);
    }
    /**
     * Get Accommodation value
     * @return mixed|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @param mixed $accommodation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItemType
     */
    public function setAccommodation($accommodation = null)
    {
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Get Travel value
     * @return mixed|null
     */
    public function getTravel()
    {
        return $this->Travel;
    }
    /**
     * Set Travel value
     * @param mixed $travel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItemType
     */
    public function setTravel($travel = null)
    {
        $this->Travel = $travel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItemType
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

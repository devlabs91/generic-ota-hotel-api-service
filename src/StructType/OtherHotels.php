<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherHotels StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of other area hotels.
 * @subpackage Structs
 */
class OtherHotels extends AbstractStructBase
{
    /**
     * The OtherHotel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel[]
     */
    public $OtherHotel;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when OtherHotels was last updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for OtherHotels
     * @uses OtherHotels::setOtherHotel()
     * @uses OtherHotels::setLastUpdated()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel[] $otherHotel
     * @param string $lastUpdated
     */
    public function __construct(array $otherHotel = array(), $lastUpdated = null)
    {
        $this
            ->setOtherHotel($otherHotel)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get OtherHotel value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel[]|null
     */
    public function getOtherHotel()
    {
        return $this->OtherHotel;
    }
    /**
     * Set OtherHotel value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel[] $otherHotel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotels
     */
    public function setOtherHotel(array $otherHotel = array())
    {
        foreach ($otherHotel as $otherHotelsOtherHotelItem) {
            // validation for constraint: itemType
            if (!$otherHotelsOtherHotelItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel) {
                throw new \InvalidArgumentException(sprintf('The OtherHotel property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel, "%s" given', is_object($otherHotelsOtherHotelItem) ? get_class($otherHotelsOtherHotelItem) : gettype($otherHotelsOtherHotelItem)), __LINE__);
            }
        }
        $this->OtherHotel = $otherHotel;
        return $this;
    }
    /**
     * Add item to OtherHotel value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotels
     */
    public function addToOtherHotel(\Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel) {
            throw new \InvalidArgumentException(sprintf('The OtherHotel property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OtherHotel[] = $item;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotels
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotels
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

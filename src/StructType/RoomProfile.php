<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomProfile StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the occupancy of a room or cabin.
 * @subpackage Structs
 */
class RoomProfile extends RoomProfileType
{
    /**
     * The Prices
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Prices[]
     */
    public $Prices;
    /**
     * Constructor method for RoomProfile
     * @uses RoomProfile::setPrices()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Prices[] $prices
     */
    public function __construct(array $prices = array())
    {
        $this
            ->setPrices($prices);
    }
    /**
     * Get Prices value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Prices[]|null
     */
    public function getPrices()
    {
        return $this->Prices;
    }
    /**
     * Set Prices value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Prices[] $prices
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfile
     */
    public function setPrices(array $prices = array())
    {
        foreach ($prices as $roomProfilePricesItem) {
            // validation for constraint: itemType
            if (!$roomProfilePricesItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Prices) {
                throw new \InvalidArgumentException(sprintf('The Prices property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Prices, "%s" given', is_object($roomProfilePricesItem) ? get_class($roomProfilePricesItem) : gettype($roomProfilePricesItem)), __LINE__);
            }
        }
        $this->Prices = $prices;
        return $this;
    }
    /**
     * Add item to Prices value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Prices $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfile
     */
    public function addToPrices(\Devlabs91\GenericOtaHotelApiService\StructType\Prices $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Prices) {
            throw new \InvalidArgumentException(sprintf('The Prices property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Prices, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Prices[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfile
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

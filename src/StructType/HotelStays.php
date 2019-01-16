<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelStays StructType
 * @subpackage Structs
 */
class HotelStays extends AbstractStructBase
{
    /**
     * The HotelStay
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelStay[]
     */
    public $HotelStay;
    /**
     * Constructor method for HotelStays
     * @uses HotelStays::setHotelStay()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelStay[] $hotelStay
     */
    public function __construct(array $hotelStay = array())
    {
        $this
            ->setHotelStay($hotelStay);
    }
    /**
     * Get HotelStay value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelStay[]|null
     */
    public function getHotelStay()
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelStay[] $hotelStay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelStays
     */
    public function setHotelStay(array $hotelStay = array())
    {
        foreach ($hotelStay as $hotelStaysHotelStayItem) {
            // validation for constraint: itemType
            if (!$hotelStaysHotelStayItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelStay) {
                throw new \InvalidArgumentException(sprintf('The HotelStay property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelStay, "%s" given', is_object($hotelStaysHotelStayItem) ? get_class($hotelStaysHotelStayItem) : gettype($hotelStaysHotelStayItem)), __LINE__);
            }
        }
        $this->HotelStay = $hotelStay;
        return $this;
    }
    /**
     * Add item to HotelStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelStay $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelStays
     */
    public function addToHotelStay(\Devlabs91\GenericOtaHotelApiService\StructType\HotelStay $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelStay) {
            throw new \InvalidArgumentException(sprintf('The HotelStay property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelStay, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelStay[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelStays
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

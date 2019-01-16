<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStays StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of RoomStay.
 * @subpackage Structs
 */
class RoomStays extends AbstractStructBase
{
    /**
     * The RoomStay
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay[]
     */
    public $RoomStay;
    /**
     * The MoreIndicator
     * Meta informations extracted from the WSDL
     * - documentation: A text field used to indicate that there are additional rates that cannot fit in the availability response. The text returned should be meaningful in identifying where to begin the next block of data and sent in the availability
     * request. | Used for Character Strings, length 1 to 128.
     * - use: optional
     * - maxLength: 128
     * - minLength: 1
     * @var string
     */
    public $MoreIndicator;
    /**
     * Constructor method for RoomStays
     * @uses RoomStays::setRoomStay()
     * @uses RoomStays::setMoreIndicator()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay[] $roomStay
     * @param string $moreIndicator
     */
    public function __construct(array $roomStay = array(), $moreIndicator = null)
    {
        $this
            ->setRoomStay($roomStay)
            ->setMoreIndicator($moreIndicator);
    }
    /**
     * Get RoomStay value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay[]|null
     */
    public function getRoomStay()
    {
        return $this->RoomStay;
    }
    /**
     * Set RoomStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay[] $roomStay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays
     */
    public function setRoomStay(array $roomStay = array())
    {
        foreach ($roomStay as $roomStaysRoomStayItem) {
            // validation for constraint: itemType
            if (!$roomStaysRoomStayItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay) {
                throw new \InvalidArgumentException(sprintf('The RoomStay property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay, "%s" given', is_object($roomStaysRoomStayItem) ? get_class($roomStaysRoomStayItem) : gettype($roomStaysRoomStayItem)), __LINE__);
            }
        }
        $this->RoomStay = $roomStay;
        return $this;
    }
    /**
     * Add item to RoomStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays
     */
    public function addToRoomStay(\Devlabs91\GenericOtaHotelApiService\StructType\RoomStay $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay) {
            throw new \InvalidArgumentException(sprintf('The RoomStay property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomStay[] = $item;
        return $this;
    }
    /**
     * Get MoreIndicator value
     * @return string|null
     */
    public function getMoreIndicator()
    {
        return $this->MoreIndicator;
    }
    /**
     * Set MoreIndicator value
     * @param string $moreIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays
     */
    public function setMoreIndicator($moreIndicator = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($moreIndicator) && strlen($moreIndicator) > 128) || (is_array($moreIndicator) && count($moreIndicator) > 128)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 128 element(s) or a scalar of 128 character(s) at most, "%d" length given', is_scalar($moreIndicator) ? strlen($moreIndicator) : count($moreIndicator)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($moreIndicator) && strlen($moreIndicator) < 1) || (is_array($moreIndicator) && count($moreIndicator) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($moreIndicator) && !is_string($moreIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moreIndicator)), __LINE__);
        }
        $this->MoreIndicator = $moreIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays
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

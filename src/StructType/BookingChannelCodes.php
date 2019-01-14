<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingChannelCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collections of strings that identify booking channels, such as GDSs or Internet sites, etc., associated with this viewership record.
 * @subpackage Structs
 */
class BookingChannelCodes extends AbstractStructBase
{
    /**
     * The BookingChannelCode
     * Meta informations extracted from the WSDL
     * - documentation: Specific code in relation to POS booking source (e.g. Expedia, hotels.com, etc.).
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $BookingChannelCode;
    /**
     * The ChannelCodesInclusive
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the collection of Channel Codes for booking channels is inclusive or exclusive. | Values: false=Exclusive, true=Inclusive.
     * - use: optional
     * @var bool
     */
    public $ChannelCodesInclusive;
    /**
     * Constructor method for BookingChannelCodes
     * @uses BookingChannelCodes::setBookingChannelCode()
     * @uses BookingChannelCodes::setChannelCodesInclusive()
     * @param string[] $bookingChannelCode
     * @param bool $channelCodesInclusive
     */
    public function __construct(array $bookingChannelCode = array(), $channelCodesInclusive = null)
    {
        $this
            ->setBookingChannelCode($bookingChannelCode)
            ->setChannelCodesInclusive($channelCodesInclusive);
    }
    /**
     * Get BookingChannelCode value
     * @return string[]|null
     */
    public function getBookingChannelCode()
    {
        return $this->BookingChannelCode;
    }
    /**
     * Set BookingChannelCode value
     * @throws \InvalidArgumentException
     * @param string[] $bookingChannelCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannelCodes
     */
    public function setBookingChannelCode(array $bookingChannelCode = array())
    {
        foreach ($bookingChannelCode as $bookingChannelCodesBookingChannelCodeItem) {
            // validation for constraint: itemType
            if (!is_string($bookingChannelCodesBookingChannelCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The BookingChannelCode property can only contain items of string, "%s" given', is_object($bookingChannelCodesBookingChannelCodeItem) ? get_class($bookingChannelCodesBookingChannelCodeItem) : gettype($bookingChannelCodesBookingChannelCodeItem)), __LINE__);
            }
        }
        $this->BookingChannelCode = $bookingChannelCode;
        return $this;
    }
    /**
     * Add item to BookingChannelCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannelCodes
     */
    public function addToBookingChannelCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The BookingChannelCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookingChannelCode[] = $item;
        return $this;
    }
    /**
     * Get ChannelCodesInclusive value
     * @return bool|null
     */
    public function getChannelCodesInclusive()
    {
        return $this->ChannelCodesInclusive;
    }
    /**
     * Set ChannelCodesInclusive value
     * @param bool $channelCodesInclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannelCodes
     */
    public function setChannelCodesInclusive($channelCodesInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($channelCodesInclusive) && !is_bool($channelCodesInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($channelCodesInclusive)), __LINE__);
        }
        $this->ChannelCodesInclusive = $channelCodesInclusive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannelCodes
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

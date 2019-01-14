<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatRequests StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Seat Request
 * @subpackage Structs
 */
class SeatRequests extends AbstractStructBase
{
    /**
     * The SeatRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequest[]
     */
    public $SeatRequest;
    /**
     * Constructor method for SeatRequests
     * @uses SeatRequests::setSeatRequest()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequest[] $seatRequest
     */
    public function __construct(array $seatRequest = array())
    {
        $this
            ->setSeatRequest($seatRequest);
    }
    /**
     * Get SeatRequest value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequest[]|null
     */
    public function getSeatRequest()
    {
        return $this->SeatRequest;
    }
    /**
     * Set SeatRequest value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequest[] $seatRequest
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequests
     */
    public function setSeatRequest(array $seatRequest = array())
    {
        foreach ($seatRequest as $seatRequestsSeatRequestItem) {
            // validation for constraint: itemType
            if (!$seatRequestsSeatRequestItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequest) {
                throw new \InvalidArgumentException(sprintf('The SeatRequest property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequest, "%s" given', is_object($seatRequestsSeatRequestItem) ? get_class($seatRequestsSeatRequestItem) : gettype($seatRequestsSeatRequestItem)), __LINE__);
            }
        }
        $this->SeatRequest = $seatRequest;
        return $this;
    }
    /**
     * Add item to SeatRequest value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequest $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequests
     */
    public function addToSeatRequest(\Devlabs91\GenericOtaHotelApiService\StructType\SeatRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequest) {
            throw new \InvalidArgumentException(sprintf('The SeatRequest property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequest, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatRequest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequests
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

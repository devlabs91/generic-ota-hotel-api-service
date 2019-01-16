<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalCharge StructType
 * Meta informations extracted from the WSDL
 * - documentation: Amenities or services to which a charge applies.
 * @subpackage Structs
 */
class AdditionalCharge extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: The amount charged for an amenity or service.
     * - minOccurs: 0
     * @var mixed
     */
    public $Amount;
    /**
     * The RoomAmenityCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifes the types of room amenities to which a charge applies. Refer to OpenTravel Code List Room Amenity Type (RMA).
     * - use: optional
     * @var string
     */
    public $RoomAmenityCode;
    /**
     * Constructor method for AdditionalCharge
     * @uses AdditionalCharge::setAmount()
     * @uses AdditionalCharge::setRoomAmenityCode()
     * @param mixed $amount
     * @param string $roomAmenityCode
     */
    public function __construct($amount = null, $roomAmenityCode = null)
    {
        $this
            ->setAmount($amount)
            ->setRoomAmenityCode($roomAmenityCode);
    }
    /**
     * Get Amount value
     * @return mixed|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param mixed $amount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get RoomAmenityCode value
     * @return string|null
     */
    public function getRoomAmenityCode()
    {
        return $this->RoomAmenityCode;
    }
    /**
     * Set RoomAmenityCode value
     * @param string $roomAmenityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge
     */
    public function setRoomAmenityCode($roomAmenityCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomAmenityCode) && !is_string($roomAmenityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomAmenityCode)), __LINE__);
        }
        $this->RoomAmenityCode = $roomAmenityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge
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

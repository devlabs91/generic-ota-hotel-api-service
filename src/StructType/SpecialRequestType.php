<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: SpecialRequests : SpecialRequestA collection of SpecialRequest objects. The collection of all special requests associated with any part of the reservation (the reservation in its entirety, one or more guests, or one or more room
 * stays). Which special requests belong to which part is determined by each object's SpecialRequestRPHs collection.
 * @subpackage Structs
 */
class SpecialRequestType extends AbstractStructBase
{
    /**
     * The SpecialRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest[]
     */
    public $SpecialRequest;
    /**
     * Constructor method for SpecialRequestType
     * @uses SpecialRequestType::setSpecialRequest()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest[] $specialRequest
     */
    public function __construct(array $specialRequest = array())
    {
        $this
            ->setSpecialRequest($specialRequest);
    }
    /**
     * Get SpecialRequest value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest[]|null
     */
    public function getSpecialRequest()
    {
        return $this->SpecialRequest;
    }
    /**
     * Set SpecialRequest value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest[] $specialRequest
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequestType
     */
    public function setSpecialRequest(array $specialRequest = array())
    {
        foreach ($specialRequest as $specialRequestTypeSpecialRequestItem) {
            // validation for constraint: itemType
            if (!$specialRequestTypeSpecialRequestItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest) {
                throw new \InvalidArgumentException(sprintf('The SpecialRequest property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest, "%s" given', is_object($specialRequestTypeSpecialRequestItem) ? get_class($specialRequestTypeSpecialRequestItem) : gettype($specialRequestTypeSpecialRequestItem)), __LINE__);
            }
        }
        $this->SpecialRequest = $specialRequest;
        return $this;
    }
    /**
     * Add item to SpecialRequest value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequestType
     */
    public function addToSpecialRequest(\Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest) {
            throw new \InvalidArgumentException(sprintf('The SpecialRequest property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialRequest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequestType
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

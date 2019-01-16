<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialServiceRequests StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Special Service Request.
 * @subpackage Structs
 */
class SpecialServiceRequests extends AbstractStructBase
{
    /**
     * The SpecialServiceRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest[]
     */
    public $SpecialServiceRequest;
    /**
     * Constructor method for SpecialServiceRequests
     * @uses SpecialServiceRequests::setSpecialServiceRequest()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest[] $specialServiceRequest
     */
    public function __construct(array $specialServiceRequest = array())
    {
        $this
            ->setSpecialServiceRequest($specialServiceRequest);
    }
    /**
     * Get SpecialServiceRequest value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest[]|null
     */
    public function getSpecialServiceRequest()
    {
        return $this->SpecialServiceRequest;
    }
    /**
     * Set SpecialServiceRequest value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest[] $specialServiceRequest
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequests
     */
    public function setSpecialServiceRequest(array $specialServiceRequest = array())
    {
        foreach ($specialServiceRequest as $specialServiceRequestsSpecialServiceRequestItem) {
            // validation for constraint: itemType
            if (!$specialServiceRequestsSpecialServiceRequestItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest) {
                throw new \InvalidArgumentException(sprintf('The SpecialServiceRequest property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest, "%s" given', is_object($specialServiceRequestsSpecialServiceRequestItem) ? get_class($specialServiceRequestsSpecialServiceRequestItem) : gettype($specialServiceRequestsSpecialServiceRequestItem)), __LINE__);
            }
        }
        $this->SpecialServiceRequest = $specialServiceRequest;
        return $this;
    }
    /**
     * Add item to SpecialServiceRequest value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequests
     */
    public function addToSpecialServiceRequest(\Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest) {
            throw new \InvalidArgumentException(sprintf('The SpecialServiceRequest property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialServiceRequest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequests
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

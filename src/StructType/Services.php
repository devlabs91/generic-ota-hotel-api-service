<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Services StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of hotel services and/or amenities available to the guest.
 * @subpackage Structs
 */
class Services extends AbstractStructBase
{
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Service[]
     */
    public $Service;
    /**
     * Constructor method for Services
     * @uses Services::setService()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Service[] $service
     */
    public function __construct(array $service = array())
    {
        $this
            ->setService($service);
    }
    /**
     * Get Service value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service[]|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Service[] $service
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Services
     */
    public function setService(array $service = array())
    {
        foreach ($service as $servicesServiceItem) {
            // validation for constraint: itemType
            if (!$servicesServiceItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Service) {
                throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Service, "%s" given', is_object($servicesServiceItem) ? get_class($servicesServiceItem) : gettype($servicesServiceItem)), __LINE__);
            }
        }
        $this->Service = $service;
        return $this;
    }
    /**
     * Add item to Service value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Service $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Services
     */
    public function addToService(\Devlabs91\GenericOtaHotelApiService\StructType\Service $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Service) {
            throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Service, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Service[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Services
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

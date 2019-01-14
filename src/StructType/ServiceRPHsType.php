<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceRPHsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of unsigned integers that reference the RPH (Reference Place holder) attribute in the Service object. The ServiceRPH attribute in the Service object is an indexing attribute that identifies the services attached to a
 * specific guest or to the reservation.
 * @subpackage Structs
 */
class ServiceRPHsType extends AbstractStructBase
{
    /**
     * The ServiceRPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH[]
     */
    public $ServiceRPH;
    /**
     * Constructor method for ServiceRPHsType
     * @uses ServiceRPHsType::setServiceRPH()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH[] $serviceRPH
     */
    public function __construct(array $serviceRPH = array())
    {
        $this
            ->setServiceRPH($serviceRPH);
    }
    /**
     * Get ServiceRPH value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH[]|null
     */
    public function getServiceRPH()
    {
        return $this->ServiceRPH;
    }
    /**
     * Set ServiceRPH value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH[] $serviceRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPHsType
     */
    public function setServiceRPH(array $serviceRPH = array())
    {
        foreach ($serviceRPH as $serviceRPHsTypeServiceRPHItem) {
            // validation for constraint: itemType
            if (!$serviceRPHsTypeServiceRPHItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH) {
                throw new \InvalidArgumentException(sprintf('The ServiceRPH property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH, "%s" given', is_object($serviceRPHsTypeServiceRPHItem) ? get_class($serviceRPHsTypeServiceRPHItem) : gettype($serviceRPHsTypeServiceRPHItem)), __LINE__);
            }
        }
        $this->ServiceRPH = $serviceRPH;
        return $this;
    }
    /**
     * Add item to ServiceRPH value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPHsType
     */
    public function addToServiceRPH(\Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH) {
            throw new \InvalidArgumentException(sprintf('The ServiceRPH property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServiceRPH[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPHsType
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

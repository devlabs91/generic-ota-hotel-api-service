<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistributorTypes StructType
 * Meta informations extracted from the WSDL
 * - documentation: A Collection of strings that identify the distibutors (ex Tour Operators, Agency Chains, etc) which are allowed viewership.
 * @subpackage Structs
 */
class DistributorTypes extends AbstractStructBase
{
    /**
     * The DistributorType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType[]
     */
    public $DistributorType;
    /**
     * Constructor method for DistributorTypes
     * @uses DistributorTypes::setDistributorType()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType[] $distributorType
     */
    public function __construct(array $distributorType = array())
    {
        $this
            ->setDistributorType($distributorType);
    }
    /**
     * Get DistributorType value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType[]|null
     */
    public function getDistributorType()
    {
        return $this->DistributorType;
    }
    /**
     * Set DistributorType value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType[] $distributorType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DistributorTypes
     */
    public function setDistributorType(array $distributorType = array())
    {
        foreach ($distributorType as $distributorTypesDistributorTypeItem) {
            // validation for constraint: itemType
            if (!$distributorTypesDistributorTypeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType) {
                throw new \InvalidArgumentException(sprintf('The DistributorType property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType, "%s" given', is_object($distributorTypesDistributorTypeItem) ? get_class($distributorTypesDistributorTypeItem) : gettype($distributorTypesDistributorTypeItem)), __LINE__);
            }
        }
        $this->DistributorType = $distributorType;
        return $this;
    }
    /**
     * Add item to DistributorType value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DistributorTypes
     */
    public function addToDistributorType(\Devlabs91\GenericOtaHotelApiService\StructType\DistributorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType) {
            throw new \InvalidArgumentException(sprintf('The DistributorType property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DistributorType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DistributorTypes
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

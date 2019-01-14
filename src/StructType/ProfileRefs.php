<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileRefs StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of profile references.
 * @subpackage Structs
 */
class ProfileRefs extends AbstractStructBase
{
    /**
     * The ProfileRef
     * Meta informations extracted from the WSDL
     * - documentation: The actual Unique ID of the profile associated with the viewship, i.e. this is the pointer to the profile on the trading partners system for the company, agency, etc that is allowed to view this information.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $ProfileRef;
    /**
     * Constructor method for ProfileRefs
     * @uses ProfileRefs::setProfileRef()
     * @param mixed[] $profileRef
     */
    public function __construct(array $profileRef = array())
    {
        $this
            ->setProfileRef($profileRef);
    }
    /**
     * Get ProfileRef value
     * @return mixed[]|null
     */
    public function getProfileRef()
    {
        return $this->ProfileRef;
    }
    /**
     * Set ProfileRef value
     * @throws \InvalidArgumentException
     * @param mixed[] $profileRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRefs
     */
    public function setProfileRef(array $profileRef = array())
    {
        foreach ($profileRef as $profileRefsProfileRefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ProfileRef property can only contain items of anyType, "%s" given', is_object($profileRefsProfileRefItem) ? get_class($profileRefsProfileRefItem) : gettype($profileRefsProfileRefItem)), __LINE__);
            }
        }
        $this->ProfileRef = $profileRef;
        return $this;
    }
    /**
     * Add item to ProfileRef value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRefs
     */
    public function addToProfileRef($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ProfileRef property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProfileRef[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRefs
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

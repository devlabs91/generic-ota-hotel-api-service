<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StayRequirements StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of stay requirements.
 * @subpackage Structs
 */
class StayRequirements extends AbstractStructBase
{
    /**
     * The StayRequirement
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement[]
     */
    public $StayRequirement;
    /**
     * Constructor method for StayRequirements
     * @uses StayRequirements::setStayRequirement()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement[] $stayRequirement
     */
    public function __construct(array $stayRequirement = array())
    {
        $this
            ->setStayRequirement($stayRequirement);
    }
    /**
     * Get StayRequirement value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement[]|null
     */
    public function getStayRequirement()
    {
        return $this->StayRequirement;
    }
    /**
     * Set StayRequirement value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement[] $stayRequirement
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirements
     */
    public function setStayRequirement(array $stayRequirement = array())
    {
        foreach ($stayRequirement as $stayRequirementsStayRequirementItem) {
            // validation for constraint: itemType
            if (!$stayRequirementsStayRequirementItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement) {
                throw new \InvalidArgumentException(sprintf('The StayRequirement property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement, "%s" given', is_object($stayRequirementsStayRequirementItem) ? get_class($stayRequirementsStayRequirementItem) : gettype($stayRequirementsStayRequirementItem)), __LINE__);
            }
        }
        $this->StayRequirement = $stayRequirement;
        return $this;
    }
    /**
     * Add item to StayRequirement value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirements
     */
    public function addToStayRequirement(\Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement) {
            throw new \InvalidArgumentException(sprintf('The StayRequirement property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StayRequirement[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirements
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

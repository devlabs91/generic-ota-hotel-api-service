<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvBlockCodesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of InvBlockCode.
 * @subpackage Structs
 */
class InvBlockCodesType extends AbstractStructBase
{
    /**
     * The InvBlockCode
     * Meta informations extracted from the WSDL
     * - documentation: The collection of inventory blocks (if any) that can be booked using this rate plan.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $InvBlockCode;
    /**
     * Constructor method for InvBlockCodesType
     * @uses InvBlockCodesType::setInvBlockCode()
     * @param mixed[] $invBlockCode
     */
    public function __construct(array $invBlockCode = array())
    {
        $this
            ->setInvBlockCode($invBlockCode);
    }
    /**
     * Get InvBlockCode value
     * @return mixed[]|null
     */
    public function getInvBlockCode()
    {
        return $this->InvBlockCode;
    }
    /**
     * Set InvBlockCode value
     * @throws \InvalidArgumentException
     * @param mixed[] $invBlockCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockCodesType
     */
    public function setInvBlockCode(array $invBlockCode = array())
    {
        foreach ($invBlockCode as $invBlockCodesTypeInvBlockCodeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The InvBlockCode property can only contain items of anyType, "%s" given', is_object($invBlockCodesTypeInvBlockCodeItem) ? get_class($invBlockCodesTypeInvBlockCodeItem) : gettype($invBlockCodesTypeInvBlockCodeItem)), __LINE__);
            }
        }
        $this->InvBlockCode = $invBlockCode;
        return $this;
    }
    /**
     * Add item to InvBlockCode value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockCodesType
     */
    public function addToInvBlockCode($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The InvBlockCode property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InvBlockCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockCodesType
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

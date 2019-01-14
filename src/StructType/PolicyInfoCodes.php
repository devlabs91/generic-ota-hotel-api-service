<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyInfoCodes StructType
 * @subpackage Structs
 */
class PolicyInfoCodes extends AbstractStructBase
{
    /**
     * The PolicyInfoCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCode[]
     */
    public $PolicyInfoCode;
    /**
     * Constructor method for PolicyInfoCodes
     * @uses PolicyInfoCodes::setPolicyInfoCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCode[] $policyInfoCode
     */
    public function __construct(array $policyInfoCode = array())
    {
        $this
            ->setPolicyInfoCode($policyInfoCode);
    }
    /**
     * Get PolicyInfoCode value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCode[]|null
     */
    public function getPolicyInfoCode()
    {
        return $this->PolicyInfoCode;
    }
    /**
     * Set PolicyInfoCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCode[] $policyInfoCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCodes
     */
    public function setPolicyInfoCode(array $policyInfoCode = array())
    {
        foreach ($policyInfoCode as $policyInfoCodesPolicyInfoCodeItem) {
            // validation for constraint: itemType
            if (!$policyInfoCodesPolicyInfoCodeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCode) {
                throw new \InvalidArgumentException(sprintf('The PolicyInfoCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCode, "%s" given', is_object($policyInfoCodesPolicyInfoCodeItem) ? get_class($policyInfoCodesPolicyInfoCodeItem) : gettype($policyInfoCodesPolicyInfoCodeItem)), __LINE__);
            }
        }
        $this->PolicyInfoCode = $policyInfoCode;
        return $this;
    }
    /**
     * Add item to PolicyInfoCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCode $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCodes
     */
    public function addToPolicyInfoCode(\Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCode) {
            throw new \InvalidArgumentException(sprintf('The PolicyInfoCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PolicyInfoCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCodes
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

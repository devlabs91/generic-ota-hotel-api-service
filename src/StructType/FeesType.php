<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of fees.
 * @subpackage Structs
 */
class FeesType extends AbstractStructBase
{
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - documentation: Fee Amount that is applied to the rate. Fees are used for non tax amounts like service charges.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $Fee;
    /**
     * Constructor method for FeesType
     * @uses FeesType::setFee()
     * @param mixed[] $fee
     */
    public function __construct(array $fee = array())
    {
        $this
            ->setFee($fee);
    }
    /**
     * Get Fee value
     * @return mixed[]|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @throws \InvalidArgumentException
     * @param mixed[] $fee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeesType
     */
    public function setFee(array $fee = array())
    {
        foreach ($fee as $feesTypeFeeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of anyType, "%s" given', is_object($feesTypeFeeItem) ? get_class($feesTypeFeeItem) : gettype($feesTypeFeeItem)), __LINE__);
            }
        }
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeesType
     */
    public function addToFee($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Fee[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeesType
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

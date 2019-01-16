<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPenaltiesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of CancelPenalty.
 * @subpackage Structs
 */
class CancelPenaltiesType extends AbstractStructBase
{
    /**
     * The CancelPenalty
     * Meta informations extracted from the WSDL
     * - documentation: Defines the cancellation penalty of the hotel facility.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CancelPenalty;
    /**
     * The CancelPolicyIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates a cancel policy exits. When false, no cancel policy exists. Typically this indicator is used when details are not being sent.
     * - use: optional
     * @var bool
     */
    public $CancelPolicyIndicator;
    /**
     * Constructor method for CancelPenaltiesType
     * @uses CancelPenaltiesType::setCancelPenalty()
     * @uses CancelPenaltiesType::setCancelPolicyIndicator()
     * @param mixed[] $cancelPenalty
     * @param bool $cancelPolicyIndicator
     */
    public function __construct(array $cancelPenalty = array(), $cancelPolicyIndicator = null)
    {
        $this
            ->setCancelPenalty($cancelPenalty)
            ->setCancelPolicyIndicator($cancelPolicyIndicator);
    }
    /**
     * Get CancelPenalty value
     * @return mixed[]|null
     */
    public function getCancelPenalty()
    {
        return $this->CancelPenalty;
    }
    /**
     * Set CancelPenalty value
     * @throws \InvalidArgumentException
     * @param mixed[] $cancelPenalty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltiesType
     */
    public function setCancelPenalty(array $cancelPenalty = array())
    {
        foreach ($cancelPenalty as $cancelPenaltiesTypeCancelPenaltyItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CancelPenalty property can only contain items of anyType, "%s" given', is_object($cancelPenaltiesTypeCancelPenaltyItem) ? get_class($cancelPenaltiesTypeCancelPenaltyItem) : gettype($cancelPenaltiesTypeCancelPenaltyItem)), __LINE__);
            }
        }
        $this->CancelPenalty = $cancelPenalty;
        return $this;
    }
    /**
     * Add item to CancelPenalty value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltiesType
     */
    public function addToCancelPenalty($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CancelPenalty property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelPenalty[] = $item;
        return $this;
    }
    /**
     * Get CancelPolicyIndicator value
     * @return bool|null
     */
    public function getCancelPolicyIndicator()
    {
        return $this->CancelPolicyIndicator;
    }
    /**
     * Set CancelPolicyIndicator value
     * @param bool $cancelPolicyIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltiesType
     */
    public function setCancelPolicyIndicator($cancelPolicyIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($cancelPolicyIndicator) && !is_bool($cancelPolicyIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cancelPolicyIndicator)), __LINE__);
        }
        $this->CancelPolicyIndicator = $cancelPolicyIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltiesType
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

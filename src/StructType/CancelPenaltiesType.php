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
     * - documentation: Defines the cancellation policy of the hotel facility.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $CancelPenalty;
    /**
     * Constructor method for CancelPenaltiesType
     * @uses CancelPenaltiesType::setCancelPenalty()
     * @param mixed[] $cancelPenalty
     */
    public function __construct(array $cancelPenalty = array())
    {
        $this
            ->setCancelPenalty($cancelPenalty);
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteesAccepted StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of accepted guarantees.
 * @subpackage Structs
 */
class GuaranteesAccepted extends AbstractStructBase
{
    /**
     * The GuaranteeAccepted
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted[]
     */
    public $GuaranteeAccepted;
    /**
     * Constructor method for GuaranteesAccepted
     * @uses GuaranteesAccepted::setGuaranteeAccepted()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted[] $guaranteeAccepted
     */
    public function __construct(array $guaranteeAccepted = array())
    {
        $this
            ->setGuaranteeAccepted($guaranteeAccepted);
    }
    /**
     * Get GuaranteeAccepted value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted[]|null
     */
    public function getGuaranteeAccepted()
    {
        return $this->GuaranteeAccepted;
    }
    /**
     * Set GuaranteeAccepted value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted[] $guaranteeAccepted
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteesAccepted
     */
    public function setGuaranteeAccepted(array $guaranteeAccepted = array())
    {
        foreach ($guaranteeAccepted as $guaranteesAcceptedGuaranteeAcceptedItem) {
            // validation for constraint: itemType
            if (!$guaranteesAcceptedGuaranteeAcceptedItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted) {
                throw new \InvalidArgumentException(sprintf('The GuaranteeAccepted property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted, "%s" given', is_object($guaranteesAcceptedGuaranteeAcceptedItem) ? get_class($guaranteesAcceptedGuaranteeAcceptedItem) : gettype($guaranteesAcceptedGuaranteeAcceptedItem)), __LINE__);
            }
        }
        $this->GuaranteeAccepted = $guaranteeAccepted;
        return $this;
    }
    /**
     * Add item to GuaranteeAccepted value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteesAccepted
     */
    public function addToGuaranteeAccepted(\Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted) {
            throw new \InvalidArgumentException(sprintf('The GuaranteeAccepted property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuaranteeAccepted[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteesAccepted
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

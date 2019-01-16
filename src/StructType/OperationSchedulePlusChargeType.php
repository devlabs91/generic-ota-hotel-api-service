<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationSchedulePlusChargeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This allows a charge to be associated with operating times (e.g. a golf tee time may be more expensive during peak hours v. off peak hours).
 * @subpackage Structs
 */
class OperationSchedulePlusChargeType extends OperationScheduleType
{
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - documentation: Cost associated with an amenity.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Charge;
    /**
     * Constructor method for OperationSchedulePlusChargeType
     * @uses OperationSchedulePlusChargeType::setCharge()
     * @param mixed[] $charge
     */
    public function __construct(array $charge = array())
    {
        $this
            ->setCharge($charge);
    }
    /**
     * Get Charge value
     * @return mixed[]|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @throws \InvalidArgumentException
     * @param mixed[] $charge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedulePlusChargeType
     */
    public function setCharge(array $charge = array())
    {
        foreach ($charge as $operationSchedulePlusChargeTypeChargeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Charge property can only contain items of anyType, "%s" given', is_object($operationSchedulePlusChargeTypeChargeItem) ? get_class($operationSchedulePlusChargeTypeChargeItem) : gettype($operationSchedulePlusChargeTypeChargeItem)), __LINE__);
            }
        }
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Add item to Charge value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedulePlusChargeType
     */
    public function addToCharge($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Charge property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Charge[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedulePlusChargeType
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

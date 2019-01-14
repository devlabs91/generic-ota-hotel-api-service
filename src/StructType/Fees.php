<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fees StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a collection of Fees | A collection of fees associated with this vehicle quotation. | A collection of fees associated with this vehicle reservation.
 * @subpackage Structs
 */
class Fees extends AbstractStructBase
{
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - documentation: Any additional fee incurred by the passenger but not shown on the ticket. | One specific fee associated with the vehicle reservation.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $Fee;
    /**
     * Constructor method for Fees
     * @uses Fees::setFee()
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fees
     */
    public function setFee(array $fee = array())
    {
        foreach ($fee as $feesFeeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of anyType, "%s" given', is_object($feesFeeItem) ? get_class($feesFeeItem) : gettype($feesFeeItem)), __LINE__);
            }
        }
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fees
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fees
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

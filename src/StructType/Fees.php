<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fees StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a collection of Fees | The fee total and the appropriate currency code. | A collection of fees associated with this vehicle quotation. | Information on additional fees that may apply to the rental. | A collection of fees
 * associated with this rental. | A collection of fees associated with this vehicle reservation. | A collection of fees associated with this vehicle reservation.
 * @subpackage Structs
 */
class Fees extends AbstractStructBase
{
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - documentation: Any additional fee incurred by the passenger but not shown on the ticket. | A fee associated with this rental (e.g., airport concession fee, vehicle license fee, facility usage fee). This is not intended for information regarding
     * rates, priced equipment or coverages. | One specific fee associated with this vehicle reservation. | One specific fee associated with the vehicle reservation.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Fee;
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - documentation: General information about the additional fees that may apply.
     * - minOccurs: 0
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for Fees
     * @uses Fees::setFee()
     * @uses Fees::setInfo()
     * @param mixed[] $fee
     * @param mixed $info
     */
    public function __construct(array $fee = array(), $info = null)
    {
        $this
            ->setFee($fee)
            ->setInfo($info);
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
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fees
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
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

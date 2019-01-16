<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketFeeDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: The ticket fee information for this passsenger type code. | The currency code for all of the ticketing fees.
 * @subpackage Structs
 */
class TicketFeeDetail extends AbstractStructBase
{
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Fee[]
     */
    public $Fee;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Total[]
     */
    public $Total;
    /**
     * Constructor method for TicketFeeDetail
     * @uses TicketFeeDetail::setFee()
     * @uses TicketFeeDetail::setTotal()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fee[] $fee
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Total[] $total
     */
    public function __construct(array $fee = array(), array $total = array())
    {
        $this
            ->setFee($fee)
            ->setTotal($total);
    }
    /**
     * Get Fee value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fee[]|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fee[] $fee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail
     */
    public function setFee(array $fee = array())
    {
        foreach ($fee as $ticketFeeDetailFeeItem) {
            // validation for constraint: itemType
            if (!$ticketFeeDetailFeeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Fee) {
                throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Fee, "%s" given', is_object($ticketFeeDetailFeeItem) ? get_class($ticketFeeDetailFeeItem) : gettype($ticketFeeDetailFeeItem)), __LINE__);
            }
        }
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fee $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail
     */
    public function addToFee(\Devlabs91\GenericOtaHotelApiService\StructType\Fee $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Fee) {
            throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Fee, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Fee[] = $item;
        return $this;
    }
    /**
     * Get Total value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Total[]|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Total[] $total
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail
     */
    public function setTotal(array $total = array())
    {
        foreach ($total as $ticketFeeDetailTotalItem) {
            // validation for constraint: itemType
            if (!$ticketFeeDetailTotalItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Total) {
                throw new \InvalidArgumentException(sprintf('The Total property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Total, "%s" given', is_object($ticketFeeDetailTotalItem) ? get_class($ticketFeeDetailTotalItem) : gettype($ticketFeeDetailTotalItem)), __LINE__);
            }
        }
        $this->Total = $total;
        return $this;
    }
    /**
     * Add item to Total value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Total $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail
     */
    public function addToTotal(\Devlabs91\GenericOtaHotelApiService\StructType\Total $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Total) {
            throw new \InvalidArgumentException(sprintf('The Total property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Total, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Total[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail
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

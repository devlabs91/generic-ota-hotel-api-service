<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MiscChargeOrder StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used for misc charge order (MCO).
 * @subpackage Structs
 */
class MiscChargeOrder extends AbstractStructBase
{
    /**
     * The TicketNumber
     * @var string
     */
    public $TicketNumber;
    /**
     * Constructor method for MiscChargeOrder
     * @uses MiscChargeOrder::setTicketNumber()
     * @param string $ticketNumber
     */
    public function __construct($ticketNumber = null)
    {
        $this
            ->setTicketNumber($ticketNumber);
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder
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

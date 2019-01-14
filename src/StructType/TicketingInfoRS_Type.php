<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingInfoRS_Type StructType
 * Meta informations extracted from the WSDL
 * - documentation: Extends TicketingInfoType to provide an eTicketNumber.
 * @subpackage Structs
 */
class TicketingInfoRS_Type extends TicketingInfoType
{
    /**
     * The eTicketNumber
     * Meta informations extracted from the WSDL
     * - documentation: If reservation is electronically ticketed at time of booking, this is the field for the eTicket number.
     * - use: optional
     * @var string
     */
    public $eTicketNumber;
    /**
     * Constructor method for TicketingInfoRS_Type
     * @uses TicketingInfoRS_Type::setETicketNumber()
     * @param string $eTicketNumber
     */
    public function __construct($eTicketNumber = null)
    {
        $this
            ->setETicketNumber($eTicketNumber);
    }
    /**
     * Get eTicketNumber value
     * @return string|null
     */
    public function getETicketNumber()
    {
        return $this->eTicketNumber;
    }
    /**
     * Set eTicketNumber value
     * @param string $eTicketNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoRS_Type
     */
    public function setETicketNumber($eTicketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eTicketNumber) && !is_string($eTicketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eTicketNumber)), __LINE__);
        }
        $this->eTicketNumber = $eTicketNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoRS_Type
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

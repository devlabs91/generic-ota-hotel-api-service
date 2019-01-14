<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketDistribPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type of ticket distribution to be used with this collection of preferences. | Used for Character Strings, length 0 to 64
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class TicketDistribPrefType extends AbstractStructBase
{
    /**
     * The DistribType
     * Meta informations extracted from the WSDL
     * - documentation: Ticket distribution method; such as Fax, Email, Courier, Mail, Airport_Pickup, City_Office, Hotel_Desk, WillCall, etc.
     * @var string
     */
    public $DistribType;
    /**
     * The TicketTime
     * Meta informations extracted from the WSDL
     * - documentation: Ticket turnaround time desired, amount of time requested to deliver tickets.
     * @var string
     */
    public $TicketTime;
    /**
     * Constructor method for TicketDistribPrefType
     * @uses TicketDistribPrefType::setDistribType()
     * @uses TicketDistribPrefType::setTicketTime()
     * @param string $distribType
     * @param string $ticketTime
     */
    public function __construct($distribType = null, $ticketTime = null)
    {
        $this
            ->setDistribType($distribType)
            ->setTicketTime($ticketTime);
    }
    /**
     * Get DistribType value
     * @return string|null
     */
    public function getDistribType()
    {
        return $this->DistribType;
    }
    /**
     * Set DistribType value
     * @param string $distribType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketDistribPrefType
     */
    public function setDistribType($distribType = null)
    {
        // validation for constraint: string
        if (!is_null($distribType) && !is_string($distribType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distribType)), __LINE__);
        }
        $this->DistribType = $distribType;
        return $this;
    }
    /**
     * Get TicketTime value
     * @return string|null
     */
    public function getTicketTime()
    {
        return $this->TicketTime;
    }
    /**
     * Set TicketTime value
     * @param string $ticketTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketDistribPrefType
     */
    public function setTicketTime($ticketTime = null)
    {
        // validation for constraint: string
        if (!is_null($ticketTime) && !is_string($ticketTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketTime)), __LINE__);
        }
        $this->TicketTime = $ticketTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketDistribPrefType
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

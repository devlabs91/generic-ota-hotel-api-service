<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Minimum information about ticketing required to complete the booking transaction.
 * @subpackage Structs
 */
class TicketingInfoType extends AbstractStructBase
{
    /**
     * The TicketType
     * Meta informations extracted from the WSDL
     * - documentation: TicketType - Indicates the type of ticket (Paper, eTicket)
     * - use: required
     * @var string
     */
    public $TicketType;
    /**
     * The TicketAdvisory
     * Meta informations extracted from the WSDL
     * - documentation: Open text field available for additional ticket information.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TicketAdvisory;
    /**
     * The TicketTimeLimit
     * Meta informations extracted from the WSDL
     * - documentation: TicketTimeLimit - Indicates the ticketing arrangement, and allows for the requirement that an itinerary must be ticketed by a certain date and time.
     * - use: optional
     * @var string
     */
    public $TicketTimeLimit;
    /**
     * Constructor method for TicketingInfoType
     * @uses TicketingInfoType::setTicketType()
     * @uses TicketingInfoType::setTicketAdvisory()
     * @uses TicketingInfoType::setTicketTimeLimit()
     * @param string $ticketType
     * @param mixed[] $ticketAdvisory
     * @param string $ticketTimeLimit
     */
    public function __construct($ticketType = null, array $ticketAdvisory = array(), $ticketTimeLimit = null)
    {
        $this
            ->setTicketType($ticketType)
            ->setTicketAdvisory($ticketAdvisory)
            ->setTicketTimeLimit($ticketTimeLimit);
    }
    /**
     * Get TicketType value
     * @return string
     */
    public function getTicketType()
    {
        return $this->TicketType;
    }
    /**
     * Set TicketType value
     * @param string $ticketType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTicketType($ticketType = null)
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketType)), __LINE__);
        }
        $this->TicketType = $ticketType;
        return $this;
    }
    /**
     * Get TicketAdvisory value
     * @return mixed[]|null
     */
    public function getTicketAdvisory()
    {
        return $this->TicketAdvisory;
    }
    /**
     * Set TicketAdvisory value
     * @throws \InvalidArgumentException
     * @param mixed[] $ticketAdvisory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTicketAdvisory(array $ticketAdvisory = array())
    {
        foreach ($ticketAdvisory as $ticketingInfoTypeTicketAdvisoryItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TicketAdvisory property can only contain items of anyType, "%s" given', is_object($ticketingInfoTypeTicketAdvisoryItem) ? get_class($ticketingInfoTypeTicketAdvisoryItem) : gettype($ticketingInfoTypeTicketAdvisoryItem)), __LINE__);
            }
        }
        $this->TicketAdvisory = $ticketAdvisory;
        return $this;
    }
    /**
     * Add item to TicketAdvisory value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function addToTicketAdvisory($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TicketAdvisory property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketAdvisory[] = $item;
        return $this;
    }
    /**
     * Get TicketTimeLimit value
     * @return string|null
     */
    public function getTicketTimeLimit()
    {
        return $this->TicketTimeLimit;
    }
    /**
     * Set TicketTimeLimit value
     * @param string $ticketTimeLimit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTicketTimeLimit($ticketTimeLimit = null)
    {
        // validation for constraint: string
        if (!is_null($ticketTimeLimit) && !is_string($ticketTimeLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketTimeLimit)), __LINE__);
        }
        $this->TicketTimeLimit = $ticketTimeLimit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
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

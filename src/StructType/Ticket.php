<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ticket StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a ticket to be exchanged.
 * @subpackage Structs
 */
class Ticket extends AbstractStructBase
{
    /**
     * The ConjunctionTicketNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr[]
     */
    public $ConjunctionTicketNbr;
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - documentation: The ticket number which is exchanged.
     * @var string
     */
    public $TicketNumber;
    /**
     * The ReroutingType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ReroutingType;
    /**
     * The ReasonForReroute
     * Meta informations extracted from the WSDL
     * - documentation: Gives more information about the rerouting.
     * - use: optional
     * @var string
     */
    public $ReasonForReroute;
    /**
     * Constructor method for Ticket
     * @uses Ticket::setConjunctionTicketNbr()
     * @uses Ticket::setTicketNumber()
     * @uses Ticket::setReroutingType()
     * @uses Ticket::setReasonForReroute()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr[] $conjunctionTicketNbr
     * @param string $ticketNumber
     * @param string $reroutingType
     * @param string $reasonForReroute
     */
    public function __construct(array $conjunctionTicketNbr = array(), $ticketNumber = null, $reroutingType = null, $reasonForReroute = null)
    {
        $this
            ->setConjunctionTicketNbr($conjunctionTicketNbr)
            ->setTicketNumber($ticketNumber)
            ->setReroutingType($reroutingType)
            ->setReasonForReroute($reasonForReroute);
    }
    /**
     * Get ConjunctionTicketNbr value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr[]|null
     */
    public function getConjunctionTicketNbr()
    {
        return $this->ConjunctionTicketNbr;
    }
    /**
     * Set ConjunctionTicketNbr value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr[] $conjunctionTicketNbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ticket
     */
    public function setConjunctionTicketNbr(array $conjunctionTicketNbr = array())
    {
        foreach ($conjunctionTicketNbr as $ticketConjunctionTicketNbrItem) {
            // validation for constraint: itemType
            if (!$ticketConjunctionTicketNbrItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr) {
                throw new \InvalidArgumentException(sprintf('The ConjunctionTicketNbr property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr, "%s" given', is_object($ticketConjunctionTicketNbrItem) ? get_class($ticketConjunctionTicketNbrItem) : gettype($ticketConjunctionTicketNbrItem)), __LINE__);
            }
        }
        $this->ConjunctionTicketNbr = $conjunctionTicketNbr;
        return $this;
    }
    /**
     * Add item to ConjunctionTicketNbr value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ticket
     */
    public function addToConjunctionTicketNbr(\Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr) {
            throw new \InvalidArgumentException(sprintf('The ConjunctionTicketNbr property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConjunctionTicketNbr[] = $item;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ticket
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
     * Get ReroutingType value
     * @return string|null
     */
    public function getReroutingType()
    {
        return $this->ReroutingType;
    }
    /**
     * Set ReroutingType value
     * @param string $reroutingType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ticket
     */
    public function setReroutingType($reroutingType = null)
    {
        // validation for constraint: string
        if (!is_null($reroutingType) && !is_string($reroutingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reroutingType)), __LINE__);
        }
        $this->ReroutingType = $reroutingType;
        return $this;
    }
    /**
     * Get ReasonForReroute value
     * @return string|null
     */
    public function getReasonForReroute()
    {
        return $this->ReasonForReroute;
    }
    /**
     * Set ReasonForReroute value
     * @param string $reasonForReroute
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ticket
     */
    public function setReasonForReroute($reasonForReroute = null)
    {
        // validation for constraint: string
        if (!is_null($reasonForReroute) && !is_string($reasonForReroute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reasonForReroute)), __LINE__);
        }
        $this->ReasonForReroute = $reasonForReroute;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ticket
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

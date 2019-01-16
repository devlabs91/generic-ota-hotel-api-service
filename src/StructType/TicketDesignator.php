<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketDesignator StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the discount code and a flight reference applicable to the fare.
 * @subpackage Structs
 */
class TicketDesignator extends AbstractStructBase
{
    /**
     * The FlightRefRPH
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the flight to which this ticket designator applies.
     * - use: optional
     * @var string
     */
    public $FlightRefRPH;
    /**
     * The TicketDesignatorCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a discount code applicable to the fare.
     * - use: optional
     * @var string
     */
    public $TicketDesignatorCode;
    /**
     * The TicketDesignatorExtension
     * Meta informations extracted from the WSDL
     * - documentation: Specifies an extension that a carrier may apply to a ticket designator.
     * - use: optional
     * @var string
     */
    public $TicketDesignatorExtension;
    /**
     * Constructor method for TicketDesignator
     * @uses TicketDesignator::setFlightRefRPH()
     * @uses TicketDesignator::setTicketDesignatorCode()
     * @uses TicketDesignator::setTicketDesignatorExtension()
     * @param string $flightRefRPH
     * @param string $ticketDesignatorCode
     * @param string $ticketDesignatorExtension
     */
    public function __construct($flightRefRPH = null, $ticketDesignatorCode = null, $ticketDesignatorExtension = null)
    {
        $this
            ->setFlightRefRPH($flightRefRPH)
            ->setTicketDesignatorCode($ticketDesignatorCode)
            ->setTicketDesignatorExtension($ticketDesignatorExtension);
    }
    /**
     * Get FlightRefRPH value
     * @return string|null
     */
    public function getFlightRefRPH()
    {
        return $this->FlightRefRPH;
    }
    /**
     * Set FlightRefRPH value
     * @param string $flightRefRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketDesignator
     */
    public function setFlightRefRPH($flightRefRPH = null)
    {
        // validation for constraint: string
        if (!is_null($flightRefRPH) && !is_string($flightRefRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightRefRPH)), __LINE__);
        }
        $this->FlightRefRPH = $flightRefRPH;
        return $this;
    }
    /**
     * Get TicketDesignatorCode value
     * @return string|null
     */
    public function getTicketDesignatorCode()
    {
        return $this->TicketDesignatorCode;
    }
    /**
     * Set TicketDesignatorCode value
     * @param string $ticketDesignatorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketDesignator
     */
    public function setTicketDesignatorCode($ticketDesignatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDesignatorCode) && !is_string($ticketDesignatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDesignatorCode)), __LINE__);
        }
        $this->TicketDesignatorCode = $ticketDesignatorCode;
        return $this;
    }
    /**
     * Get TicketDesignatorExtension value
     * @return string|null
     */
    public function getTicketDesignatorExtension()
    {
        return $this->TicketDesignatorExtension;
    }
    /**
     * Set TicketDesignatorExtension value
     * @param string $ticketDesignatorExtension
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketDesignator
     */
    public function setTicketDesignatorExtension($ticketDesignatorExtension = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDesignatorExtension) && !is_string($ticketDesignatorExtension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDesignatorExtension)), __LINE__);
        }
        $this->TicketDesignatorExtension = $ticketDesignatorExtension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketDesignator
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

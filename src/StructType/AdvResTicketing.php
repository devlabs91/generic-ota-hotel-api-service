<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdvResTicketing StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for holding rules regarding advance reservation or ticketing restrictions.
 * @subpackage Structs
 */
class AdvResTicketing extends AdvResTicketingType
{
    /**
     * The FirstTicketDate
     * Meta informations extracted from the WSDL
     * - documentation: The first date that a ticket may be issued for this fare.
     * - use: optional
     * @var string
     */
    public $FirstTicketDate;
    /**
     * The LastTicketDate
     * Meta informations extracted from the WSDL
     * - documentation: The last date that a ticket may be issued for this fare.
     * - use: optional
     * @var string
     */
    public $LastTicketDate;
    /**
     * Constructor method for AdvResTicketing
     * @uses AdvResTicketing::setFirstTicketDate()
     * @uses AdvResTicketing::setLastTicketDate()
     * @param string $firstTicketDate
     * @param string $lastTicketDate
     */
    public function __construct($firstTicketDate = null, $lastTicketDate = null)
    {
        $this
            ->setFirstTicketDate($firstTicketDate)
            ->setLastTicketDate($lastTicketDate);
    }
    /**
     * Get FirstTicketDate value
     * @return string|null
     */
    public function getFirstTicketDate()
    {
        return $this->FirstTicketDate;
    }
    /**
     * Set FirstTicketDate value
     * @param string $firstTicketDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvResTicketing
     */
    public function setFirstTicketDate($firstTicketDate = null)
    {
        // validation for constraint: string
        if (!is_null($firstTicketDate) && !is_string($firstTicketDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstTicketDate)), __LINE__);
        }
        $this->FirstTicketDate = $firstTicketDate;
        return $this;
    }
    /**
     * Get LastTicketDate value
     * @return string|null
     */
    public function getLastTicketDate()
    {
        return $this->LastTicketDate;
    }
    /**
     * Set LastTicketDate value
     * @param string $lastTicketDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvResTicketing
     */
    public function setLastTicketDate($lastTicketDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastTicketDate) && !is_string($lastTicketDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastTicketDate)), __LINE__);
        }
        $this->LastTicketDate = $lastTicketDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvResTicketing
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

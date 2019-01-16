<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketDistribPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines Distribution prefernces.
 * @subpackage Structs
 */
class TicketDistribPref extends TicketDistribPrefType
{
    /**
     * The LastTicketDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $LastTicketDate;
    /**
     * The FirstTicketDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $FirstTicketDate;
    /**
     * Constructor method for TicketDistribPref
     * @uses TicketDistribPref::setLastTicketDate()
     * @uses TicketDistribPref::setFirstTicketDate()
     * @param string $lastTicketDate
     * @param string $firstTicketDate
     */
    public function __construct($lastTicketDate = null, $firstTicketDate = null)
    {
        $this
            ->setLastTicketDate($lastTicketDate)
            ->setFirstTicketDate($firstTicketDate);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketDistribPref
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketDistribPref
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketDistribPref
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

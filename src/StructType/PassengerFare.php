<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerFare StructType
 * Meta informations extracted from the WSDL
 * - documentation: The total passenger fare with cost breakdown.
 * @subpackage Structs
 */
class PassengerFare extends FareType
{
    /**
     * The TicketFeeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail
     */
    public $TicketFeeDetail;
    /**
     * The Usage
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Usage;
    /**
     * Constructor method for PassengerFare
     * @uses PassengerFare::setTicketFeeDetail()
     * @uses PassengerFare::setUsage()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail $ticketFeeDetail
     * @param string $usage
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail $ticketFeeDetail = null, $usage = null)
    {
        $this
            ->setTicketFeeDetail($ticketFeeDetail)
            ->setUsage($usage);
    }
    /**
     * Get TicketFeeDetail value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail|null
     */
    public function getTicketFeeDetail()
    {
        return $this->TicketFeeDetail;
    }
    /**
     * Set TicketFeeDetail value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail $ticketFeeDetail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PassengerFare
     */
    public function setTicketFeeDetail(\Devlabs91\GenericOtaHotelApiService\StructType\TicketFeeDetail $ticketFeeDetail = null)
    {
        $this->TicketFeeDetail = $ticketFeeDetail;
        return $this;
    }
    /**
     * Get Usage value
     * @return string|null
     */
    public function getUsage()
    {
        return $this->Usage;
    }
    /**
     * Set Usage value
     * @param string $usage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PassengerFare
     */
    public function setUsage($usage = null)
    {
        // validation for constraint: string
        if (!is_null($usage) && !is_string($usage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usage)), __LINE__);
        }
        $this->Usage = $usage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PassengerFare
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

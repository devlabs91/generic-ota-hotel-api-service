<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingChannel StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the booking channel type and whether it is the primary means of connectivity of the source.
 * @subpackage Structs
 */
class BookingChannel extends BookingChannelType
{
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the company that is associated with the booking channel.
     * - minOccurs: 0
     * @var mixed
     */
    public $CompanyName;
    /**
     * Constructor method for BookingChannel
     * @uses BookingChannel::setCompanyName()
     * @param mixed $companyName
     */
    public function __construct($companyName = null)
    {
        $this
            ->setCompanyName($companyName);
    }
    /**
     * Get CompanyName value
     * @return mixed|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param mixed $companyName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannel
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannel
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

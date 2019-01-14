<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdvResTicketingType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container used to hold information regarding advance reservation and/or advance ticketing.
 * @subpackage Structs
 */
class AdvResTicketingType extends AbstractStructBase
{
    /**
     * The AdvReservation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AdvReservation
     */
    public $AdvReservation;
    /**
     * The AdvTicketing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing
     */
    public $AdvTicketing;
    /**
     * The AdvResInd
     * Meta informations extracted from the WSDL
     * - documentation: Indicator for identifying whether or not advance reservation restrictions are involved in the request or response.
     * @var bool
     */
    public $AdvResInd;
    /**
     * The AdvTicketingInd
     * Meta informations extracted from the WSDL
     * - documentation: Indicator for identifying whether or not advance ticketing restrictions are involved in the request or response.
     * @var bool
     */
    public $AdvTicketingInd;
    /**
     * Constructor method for AdvResTicketingType
     * @uses AdvResTicketingType::setAdvReservation()
     * @uses AdvResTicketingType::setAdvTicketing()
     * @uses AdvResTicketingType::setAdvResInd()
     * @uses AdvResTicketingType::setAdvTicketingInd()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdvReservation $advReservation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing $advTicketing
     * @param bool $advResInd
     * @param bool $advTicketingInd
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\AdvReservation $advReservation = null, \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing $advTicketing = null, $advResInd = null, $advTicketingInd = null)
    {
        $this
            ->setAdvReservation($advReservation)
            ->setAdvTicketing($advTicketing)
            ->setAdvResInd($advResInd)
            ->setAdvTicketingInd($advTicketingInd);
    }
    /**
     * Get AdvReservation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvReservation|null
     */
    public function getAdvReservation()
    {
        return $this->AdvReservation;
    }
    /**
     * Set AdvReservation value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdvReservation $advReservation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvResTicketingType
     */
    public function setAdvReservation(\Devlabs91\GenericOtaHotelApiService\StructType\AdvReservation $advReservation = null)
    {
        $this->AdvReservation = $advReservation;
        return $this;
    }
    /**
     * Get AdvTicketing value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing|null
     */
    public function getAdvTicketing()
    {
        return $this->AdvTicketing;
    }
    /**
     * Set AdvTicketing value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing $advTicketing
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvResTicketingType
     */
    public function setAdvTicketing(\Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing $advTicketing = null)
    {
        $this->AdvTicketing = $advTicketing;
        return $this;
    }
    /**
     * Get AdvResInd value
     * @return bool|null
     */
    public function getAdvResInd()
    {
        return $this->AdvResInd;
    }
    /**
     * Set AdvResInd value
     * @param bool $advResInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvResTicketingType
     */
    public function setAdvResInd($advResInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($advResInd) && !is_bool($advResInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($advResInd)), __LINE__);
        }
        $this->AdvResInd = $advResInd;
        return $this;
    }
    /**
     * Get AdvTicketingInd value
     * @return bool|null
     */
    public function getAdvTicketingInd()
    {
        return $this->AdvTicketingInd;
    }
    /**
     * Set AdvTicketingInd value
     * @param bool $advTicketingInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvResTicketingType
     */
    public function setAdvTicketingInd($advTicketingInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($advTicketingInd) && !is_bool($advTicketingInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($advTicketingInd)), __LINE__);
        }
        $this->AdvTicketingInd = $advTicketingInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvResTicketingType
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

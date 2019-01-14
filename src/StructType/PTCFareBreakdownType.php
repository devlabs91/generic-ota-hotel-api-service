<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PTCFareBreakdownType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Per passenger type code pricing for this itinerary. Set if fareBreakdown was requested.
 * @subpackage Structs
 */
class PTCFareBreakdownType extends AbstractStructBase
{
    /**
     * The PassengerTypeQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Number of individuals traveling under this PTC
     * @var mixed
     */
    public $PassengerTypeQuantity;
    /**
     * The FareBasisCodes
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodes
     */
    public $FareBasisCodes;
    /**
     * The PassengerFare
     * Meta informations extracted from the WSDL
     * - documentation: The total passenger fare with cost breakdown.
     * @var mixed
     */
    public $PassengerFare;
    /**
     * The PricingSource
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PricingSource;
    /**
     * Constructor method for PTCFareBreakdownType
     * @uses PTCFareBreakdownType::setPassengerTypeQuantity()
     * @uses PTCFareBreakdownType::setFareBasisCodes()
     * @uses PTCFareBreakdownType::setPassengerFare()
     * @uses PTCFareBreakdownType::setPricingSource()
     * @param mixed $passengerTypeQuantity
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodes $fareBasisCodes
     * @param mixed $passengerFare
     * @param string $pricingSource
     */
    public function __construct($passengerTypeQuantity = null, \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodes $fareBasisCodes = null, $passengerFare = null, $pricingSource = null)
    {
        $this
            ->setPassengerTypeQuantity($passengerTypeQuantity)
            ->setFareBasisCodes($fareBasisCodes)
            ->setPassengerFare($passengerFare)
            ->setPricingSource($pricingSource);
    }
    /**
     * Get PassengerTypeQuantity value
     * @return mixed|null
     */
    public function getPassengerTypeQuantity()
    {
        return $this->PassengerTypeQuantity;
    }
    /**
     * Set PassengerTypeQuantity value
     * @param mixed $passengerTypeQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTCFareBreakdownType
     */
    public function setPassengerTypeQuantity($passengerTypeQuantity = null)
    {
        $this->PassengerTypeQuantity = $passengerTypeQuantity;
        return $this;
    }
    /**
     * Get FareBasisCodes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodes|null
     */
    public function getFareBasisCodes()
    {
        return $this->FareBasisCodes;
    }
    /**
     * Set FareBasisCodes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodes $fareBasisCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTCFareBreakdownType
     */
    public function setFareBasisCodes(\Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodes $fareBasisCodes = null)
    {
        $this->FareBasisCodes = $fareBasisCodes;
        return $this;
    }
    /**
     * Get PassengerFare value
     * @return mixed|null
     */
    public function getPassengerFare()
    {
        return $this->PassengerFare;
    }
    /**
     * Set PassengerFare value
     * @param mixed $passengerFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTCFareBreakdownType
     */
    public function setPassengerFare($passengerFare = null)
    {
        $this->PassengerFare = $passengerFare;
        return $this;
    }
    /**
     * Get PricingSource value
     * @return string|null
     */
    public function getPricingSource()
    {
        return $this->PricingSource;
    }
    /**
     * Set PricingSource value
     * @param string $pricingSource
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTCFareBreakdownType
     */
    public function setPricingSource($pricingSource = null)
    {
        // validation for constraint: string
        if (!is_null($pricingSource) && !is_string($pricingSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pricingSource)), __LINE__);
        }
        $this->PricingSource = $pricingSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTCFareBreakdownType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItineraryItemRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Request data for any valid item of inventory.
 * @subpackage Structs
 */
class ItineraryItemRequestType extends AbstractStructBase
{
    /**
     * The Accommodation
     * Meta informations extracted from the WSDL
     * - documentation: Details of an accommodation item required in the package.
     * @var mixed
     */
    public $Accommodation;
    /**
     * The Flight
     * Meta informations extracted from the WSDL
     * - documentation: Details of a flight item required in the package
     * @var mixed
     */
    public $Flight;
    /**
     * The RentalCar
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RentalCar
     */
    public $RentalCar;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: (Reference Place Holder) - an index code to identify an instance in a collection of like items. For example, used to assign individual passengers or clients to particular itinerary items.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for ItineraryItemRequestType
     * @uses ItineraryItemRequestType::setAccommodation()
     * @uses ItineraryItemRequestType::setFlight()
     * @uses ItineraryItemRequestType::setRentalCar()
     * @uses ItineraryItemRequestType::setRPH()
     * @param mixed $accommodation
     * @param mixed $flight
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RentalCar $rentalCar
     * @param string $rPH
     */
    public function __construct($accommodation = null, $flight = null, \Devlabs91\GenericOtaHotelApiService\StructType\RentalCar $rentalCar = null, $rPH = null)
    {
        $this
            ->setAccommodation($accommodation)
            ->setFlight($flight)
            ->setRentalCar($rentalCar)
            ->setRPH($rPH);
    }
    /**
     * Get Accommodation value
     * @return mixed|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @param mixed $accommodation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItemRequestType
     */
    public function setAccommodation($accommodation = null)
    {
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Get Flight value
     * @return mixed|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * Set Flight value
     * @param mixed $flight
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItemRequestType
     */
    public function setFlight($flight = null)
    {
        $this->Flight = $flight;
        return $this;
    }
    /**
     * Get RentalCar value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalCar|null
     */
    public function getRentalCar()
    {
        return $this->RentalCar;
    }
    /**
     * Set RentalCar value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RentalCar $rentalCar
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItemRequestType
     */
    public function setRentalCar(\Devlabs91\GenericOtaHotelApiService\StructType\RentalCar $rentalCar = null)
    {
        $this->RentalCar = $rentalCar;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItemRequestType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItemRequestType
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

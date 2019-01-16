<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleArrivalDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleArrivalDetailsType complex type defines the information that describes an arriving mode of transportation which is associated with the rental of a vehicle. This is typically used to identify how the customer will be
 * arriving at the vehicle rental facility.
 * @subpackage Structs
 */
class VehicleArrivalDetailsType extends AbstractStructBase
{
    /**
     * The ArrivalLocation
     * Meta informations extracted from the WSDL
     * - documentation: Arrival point of the associated transportation.
     * - minOccurs: 0
     * @var mixed
     */
    public $ArrivalLocation;
    /**
     * The MarketingCompany
     * Meta informations extracted from the WSDL
     * - documentation: Identification of the company marketing the transportation
     * - minOccurs: 0
     * @var mixed
     */
    public $MarketingCompany;
    /**
     * The OperatingCompany
     * Meta informations extracted from the WSDL
     * - documentation: Identification of the company operating the transportation
     * - minOccurs: 0
     * @var mixed
     */
    public $OperatingCompany;
    /**
     * The TransportationCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Transportation Code (TRP).
     * - use: optional
     * @var string
     */
    public $TransportationCode;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: Often used in conjunction with TransportationCode to provide greater detail regarding the customer's arrival (e.g., an airline flight number).
     * - use: optional
     * @var string
     */
    public $Number;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * Constructor method for VehicleArrivalDetailsType
     * @uses VehicleArrivalDetailsType::setArrivalLocation()
     * @uses VehicleArrivalDetailsType::setMarketingCompany()
     * @uses VehicleArrivalDetailsType::setOperatingCompany()
     * @uses VehicleArrivalDetailsType::setTransportationCode()
     * @uses VehicleArrivalDetailsType::setNumber()
     * @uses VehicleArrivalDetailsType::setArrivalDateTime()
     * @param mixed $arrivalLocation
     * @param mixed $marketingCompany
     * @param mixed $operatingCompany
     * @param string $transportationCode
     * @param string $number
     * @param string $arrivalDateTime
     */
    public function __construct($arrivalLocation = null, $marketingCompany = null, $operatingCompany = null, $transportationCode = null, $number = null, $arrivalDateTime = null)
    {
        $this
            ->setArrivalLocation($arrivalLocation)
            ->setMarketingCompany($marketingCompany)
            ->setOperatingCompany($operatingCompany)
            ->setTransportationCode($transportationCode)
            ->setNumber($number)
            ->setArrivalDateTime($arrivalDateTime);
    }
    /**
     * Get ArrivalLocation value
     * @return mixed|null
     */
    public function getArrivalLocation()
    {
        return $this->ArrivalLocation;
    }
    /**
     * Set ArrivalLocation value
     * @param mixed $arrivalLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleArrivalDetailsType
     */
    public function setArrivalLocation($arrivalLocation = null)
    {
        $this->ArrivalLocation = $arrivalLocation;
        return $this;
    }
    /**
     * Get MarketingCompany value
     * @return mixed|null
     */
    public function getMarketingCompany()
    {
        return $this->MarketingCompany;
    }
    /**
     * Set MarketingCompany value
     * @param mixed $marketingCompany
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleArrivalDetailsType
     */
    public function setMarketingCompany($marketingCompany = null)
    {
        $this->MarketingCompany = $marketingCompany;
        return $this;
    }
    /**
     * Get OperatingCompany value
     * @return mixed|null
     */
    public function getOperatingCompany()
    {
        return $this->OperatingCompany;
    }
    /**
     * Set OperatingCompany value
     * @param mixed $operatingCompany
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleArrivalDetailsType
     */
    public function setOperatingCompany($operatingCompany = null)
    {
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    /**
     * Get TransportationCode value
     * @return string|null
     */
    public function getTransportationCode()
    {
        return $this->TransportationCode;
    }
    /**
     * Set TransportationCode value
     * @param string $transportationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleArrivalDetailsType
     */
    public function setTransportationCode($transportationCode = null)
    {
        // validation for constraint: string
        if (!is_null($transportationCode) && !is_string($transportationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transportationCode)), __LINE__);
        }
        $this->TransportationCode = $transportationCode;
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleArrivalDetailsType
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param string $arrivalDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleArrivalDetailsType
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDateTime) && !is_string($arrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDateTime)), __LINE__);
        }
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleArrivalDetailsType
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

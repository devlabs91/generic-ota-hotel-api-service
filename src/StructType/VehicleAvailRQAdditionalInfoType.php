<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailRQAdditionalInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleAvailRQAdditionalInfoType complex type identifies supplemental information that may be included in a request for vehicle availability and rates.
 * @subpackage Structs
 */
class VehicleAvailRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - documentation: Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     * - minOccurs: 0
     * @var mixed
     */
    public $Customer;
    /**
     * The SpecialReqPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the preference associated with special needs or requirements of the customer, described using free text
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SpecialReqPref;
    /**
     * The CoveragePrefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs
     */
    public $CoveragePrefs;
    /**
     * The OffLocService
     * Meta informations extracted from the WSDL
     * - documentation: Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var mixed[]
     */
    public $OffLocService;
    /**
     * The ArrivalDetails
     * Meta informations extracted from the WSDL
     * - documentation: Details of the arrival transportation, if applicable
     * - minOccurs: 0
     * @var mixed
     */
    public $ArrivalDetails;
    /**
     * The TourInfo
     * Meta informations extracted from the WSDL
     * - documentation: Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     * - minOccurs: 0
     * @var mixed
     */
    public $TourInfo;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The LuggageQty
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $LuggageQty;
    /**
     * The PassengerQty
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $PassengerQty;
    /**
     * The GasPrePay
     * Meta informations extracted from the WSDL
     * - documentation: The GasPrePay attribute defines a set of valid values for the choice of prepaying for gas at the time of the pick up of the rental vehicle. This information is useful in that it allows a customer's preference to be made known to the
     * vendor. It also allows the vendor to provide more detailed and accurate pricing up front. | false
     * - use: optional
     * @var bool
     */
    public $GasPrePay;
    /**
     * The SingleQuote
     * Meta informations extracted from the WSDL
     * - documentation: Allows the requestor to indicate if the response should contain a single rate for each product or multiple rates for each product. Multiple rates may be offered when different terms and conditions may apply, for example pre-paid
     * versus payment at time of rental. The use of multiple rates may vary from vendor to vendor and is by agreement of the trading partners.
     * - use: optional
     * @var bool
     */
    public $SingleQuote;
    /**
     * Constructor method for VehicleAvailRQAdditionalInfoType
     * @uses VehicleAvailRQAdditionalInfoType::setCustomer()
     * @uses VehicleAvailRQAdditionalInfoType::setSpecialReqPref()
     * @uses VehicleAvailRQAdditionalInfoType::setCoveragePrefs()
     * @uses VehicleAvailRQAdditionalInfoType::setOffLocService()
     * @uses VehicleAvailRQAdditionalInfoType::setArrivalDetails()
     * @uses VehicleAvailRQAdditionalInfoType::setTourInfo()
     * @uses VehicleAvailRQAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleAvailRQAdditionalInfoType::setLuggageQty()
     * @uses VehicleAvailRQAdditionalInfoType::setPassengerQty()
     * @uses VehicleAvailRQAdditionalInfoType::setGasPrePay()
     * @uses VehicleAvailRQAdditionalInfoType::setSingleQuote()
     * @param mixed $customer
     * @param mixed[] $specialReqPref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs $coveragePrefs
     * @param mixed[] $offLocService
     * @param mixed $arrivalDetails
     * @param mixed $tourInfo
     * @param mixed $tPA_Extensions
     * @param int $luggageQty
     * @param int $passengerQty
     * @param bool $gasPrePay
     * @param bool $singleQuote
     */
    public function __construct($customer = null, array $specialReqPref = array(), \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs $coveragePrefs = null, array $offLocService = array(), $arrivalDetails = null, $tourInfo = null, $tPA_Extensions = null, $luggageQty = null, $passengerQty = null, $gasPrePay = null, $singleQuote = null)
    {
        $this
            ->setCustomer($customer)
            ->setSpecialReqPref($specialReqPref)
            ->setCoveragePrefs($coveragePrefs)
            ->setOffLocService($offLocService)
            ->setArrivalDetails($arrivalDetails)
            ->setTourInfo($tourInfo)
            ->setTPA_Extensions($tPA_Extensions)
            ->setLuggageQty($luggageQty)
            ->setPassengerQty($passengerQty)
            ->setGasPrePay($gasPrePay)
            ->setSingleQuote($singleQuote);
    }
    /**
     * Get Customer value
     * @return mixed|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param mixed $customer
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setCustomer($customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get SpecialReqPref value
     * @return mixed[]|null
     */
    public function getSpecialReqPref()
    {
        return $this->SpecialReqPref;
    }
    /**
     * Set SpecialReqPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $specialReqPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setSpecialReqPref(array $specialReqPref = array())
    {
        foreach ($specialReqPref as $vehicleAvailRQAdditionalInfoTypeSpecialReqPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecialReqPref property can only contain items of anyType, "%s" given', is_object($vehicleAvailRQAdditionalInfoTypeSpecialReqPrefItem) ? get_class($vehicleAvailRQAdditionalInfoTypeSpecialReqPrefItem) : gettype($vehicleAvailRQAdditionalInfoTypeSpecialReqPrefItem)), __LINE__);
            }
        }
        $this->SpecialReqPref = $specialReqPref;
        return $this;
    }
    /**
     * Add item to SpecialReqPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function addToSpecialReqPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SpecialReqPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialReqPref[] = $item;
        return $this;
    }
    /**
     * Get CoveragePrefs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs|null
     */
    public function getCoveragePrefs()
    {
        return $this->CoveragePrefs;
    }
    /**
     * Set CoveragePrefs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs $coveragePrefs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setCoveragePrefs(\Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs $coveragePrefs = null)
    {
        $this->CoveragePrefs = $coveragePrefs;
        return $this;
    }
    /**
     * Get OffLocService value
     * @return mixed[]|null
     */
    public function getOffLocService()
    {
        return $this->OffLocService;
    }
    /**
     * Set OffLocService value
     * @throws \InvalidArgumentException
     * @param mixed[] $offLocService
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setOffLocService(array $offLocService = array())
    {
        foreach ($offLocService as $vehicleAvailRQAdditionalInfoTypeOffLocServiceItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The OffLocService property can only contain items of anyType, "%s" given', is_object($vehicleAvailRQAdditionalInfoTypeOffLocServiceItem) ? get_class($vehicleAvailRQAdditionalInfoTypeOffLocServiceItem) : gettype($vehicleAvailRQAdditionalInfoTypeOffLocServiceItem)), __LINE__);
            }
        }
        $this->OffLocService = $offLocService;
        return $this;
    }
    /**
     * Add item to OffLocService value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function addToOffLocService($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The OffLocService property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OffLocService[] = $item;
        return $this;
    }
    /**
     * Get ArrivalDetails value
     * @return mixed|null
     */
    public function getArrivalDetails()
    {
        return $this->ArrivalDetails;
    }
    /**
     * Set ArrivalDetails value
     * @param mixed $arrivalDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setArrivalDetails($arrivalDetails = null)
    {
        $this->ArrivalDetails = $arrivalDetails;
        return $this;
    }
    /**
     * Get TourInfo value
     * @return mixed|null
     */
    public function getTourInfo()
    {
        return $this->TourInfo;
    }
    /**
     * Set TourInfo value
     * @param mixed $tourInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setTourInfo($tourInfo = null)
    {
        $this->TourInfo = $tourInfo;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get LuggageQty value
     * @return int|null
     */
    public function getLuggageQty()
    {
        return $this->LuggageQty;
    }
    /**
     * Set LuggageQty value
     * @param int $luggageQty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setLuggageQty($luggageQty = null)
    {
        // validation for constraint: int
        if (!is_null($luggageQty) && !is_numeric($luggageQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($luggageQty)), __LINE__);
        }
        $this->LuggageQty = $luggageQty;
        return $this;
    }
    /**
     * Get PassengerQty value
     * @return int|null
     */
    public function getPassengerQty()
    {
        return $this->PassengerQty;
    }
    /**
     * Set PassengerQty value
     * @param int $passengerQty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setPassengerQty($passengerQty = null)
    {
        // validation for constraint: int
        if (!is_null($passengerQty) && !is_numeric($passengerQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($passengerQty)), __LINE__);
        }
        $this->PassengerQty = $passengerQty;
        return $this;
    }
    /**
     * Get GasPrePay value
     * @return bool|null
     */
    public function getGasPrePay()
    {
        return $this->GasPrePay;
    }
    /**
     * Set GasPrePay value
     * @param bool $gasPrePay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setGasPrePay($gasPrePay = null)
    {
        // validation for constraint: boolean
        if (!is_null($gasPrePay) && !is_bool($gasPrePay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gasPrePay)), __LINE__);
        }
        $this->GasPrePay = $gasPrePay;
        return $this;
    }
    /**
     * Get SingleQuote value
     * @return bool|null
     */
    public function getSingleQuote()
    {
        return $this->SingleQuote;
    }
    /**
     * Set SingleQuote value
     * @param bool $singleQuote
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setSingleQuote($singleQuote = null)
    {
        // validation for constraint: boolean
        if (!is_null($singleQuote) && !is_bool($singleQuote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($singleQuote)), __LINE__);
        }
        $this->SingleQuote = $singleQuote;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQAdditionalInfoType
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

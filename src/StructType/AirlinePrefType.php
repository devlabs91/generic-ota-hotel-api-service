<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirlinePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a collection of preferences for airline travel.
 * @subpackage Structs
 */
class AirlinePrefType extends AbstractStructBase
{
    /**
     * The LoyaltyPref
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the preferred loyalty program(s).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $LoyaltyPref;
    /**
     * The VendorPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref[]
     */
    public $VendorPref;
    /**
     * The PaymentFormPref
     * Meta informations extracted from the WSDL
     * - documentation: Preferred form(s) of payment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PaymentFormPref;
    /**
     * The AirportOriginPref
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the preferred origination airport for travel (using IATA airport codes).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AirportOriginPref;
    /**
     * The AirportDestinationPref
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the preferred destination airport for travel (using IATA airport codes).
     * - minOccurs: 0
     * @var mixed
     */
    public $AirportDestinationPref;
    /**
     * The AirportRoutePref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the preferred connection airport(s) (using IATA airport codes)..
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AirportRoutePref;
    /**
     * The FareRestrictPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref[]
     */
    public $FareRestrictPref;
    /**
     * The FarePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FarePref[]
     */
    public $FarePref;
    /**
     * The TourCodePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref[]
     */
    public $TourCodePref;
    /**
     * The FlightTypePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePref[]
     */
    public $FlightTypePref;
    /**
     * The EquipPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates preferred equipment type(s) to be used in a search.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $EquipPref;
    /**
     * The CabinPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref[]
     */
    public $CabinPref;
    /**
     * The SeatPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref[]
     */
    public $SeatPref;
    /**
     * The TicketDistribPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail, airport pickup)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TicketDistribPref;
    /**
     * The MealPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $MealPref;
    /**
     * The SpecRequestPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates preferred special request(s) to be used with this collection of preferences.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SpecRequestPref;
    /**
     * The SSR_Pref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref[]
     */
    public $SSR_Pref;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The MediaEntertainPref
     * Meta informations extracted from the WSDL
     * - documentation: Media and entertainment preferences.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $MediaEntertainPref;
    /**
     * The PetInfoPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates preferred information for pet accompanying traveler.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PetInfoPref;
    /**
     * The AccountInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation
     */
    public $AccountInformation;
    /**
     * The OSI_Pref
     * Meta informations extracted from the WSDL
     * - documentation: Other Service Information of the airline.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $OSI_Pref;
    /**
     * The KeywordPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref[]
     */
    public $KeywordPref;
    /**
     * The PassengerTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Category of airline passenger, using standard ATPCO codes.
     * - use: optional
     * @var string
     */
    public $PassengerTypeCode;
    /**
     * The AirTicketType
     * Meta informations extracted from the WSDL
     * - documentation: Type of airline ticket preferred for this collection.
     * - use: optional
     * @var string
     */
    public $AirTicketType;
    /**
     * Constructor method for AirlinePrefType
     * @uses AirlinePrefType::setLoyaltyPref()
     * @uses AirlinePrefType::setVendorPref()
     * @uses AirlinePrefType::setPaymentFormPref()
     * @uses AirlinePrefType::setAirportOriginPref()
     * @uses AirlinePrefType::setAirportDestinationPref()
     * @uses AirlinePrefType::setAirportRoutePref()
     * @uses AirlinePrefType::setFareRestrictPref()
     * @uses AirlinePrefType::setFarePref()
     * @uses AirlinePrefType::setTourCodePref()
     * @uses AirlinePrefType::setFlightTypePref()
     * @uses AirlinePrefType::setEquipPref()
     * @uses AirlinePrefType::setCabinPref()
     * @uses AirlinePrefType::setSeatPref()
     * @uses AirlinePrefType::setTicketDistribPref()
     * @uses AirlinePrefType::setMealPref()
     * @uses AirlinePrefType::setSpecRequestPref()
     * @uses AirlinePrefType::setSSR_Pref()
     * @uses AirlinePrefType::setTPA_Extensions()
     * @uses AirlinePrefType::setMediaEntertainPref()
     * @uses AirlinePrefType::setPetInfoPref()
     * @uses AirlinePrefType::setAccountInformation()
     * @uses AirlinePrefType::setOSI_Pref()
     * @uses AirlinePrefType::setKeywordPref()
     * @uses AirlinePrefType::setPassengerTypeCode()
     * @uses AirlinePrefType::setAirTicketType()
     * @param mixed[] $loyaltyPref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref[] $vendorPref
     * @param mixed[] $paymentFormPref
     * @param mixed[] $airportOriginPref
     * @param mixed $airportDestinationPref
     * @param mixed[] $airportRoutePref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref[] $fareRestrictPref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FarePref[] $farePref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref[] $tourCodePref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePref[] $flightTypePref
     * @param mixed[] $equipPref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref[] $cabinPref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref[] $seatPref
     * @param mixed[] $ticketDistribPref
     * @param mixed[] $mealPref
     * @param mixed[] $specRequestPref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref[] $sSR_Pref
     * @param mixed $tPA_Extensions
     * @param mixed[] $mediaEntertainPref
     * @param mixed[] $petInfoPref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation $accountInformation
     * @param mixed[] $oSI_Pref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref[] $keywordPref
     * @param string $passengerTypeCode
     * @param string $airTicketType
     */
    public function __construct(array $loyaltyPref = array(), array $vendorPref = array(), array $paymentFormPref = array(), array $airportOriginPref = array(), $airportDestinationPref = null, array $airportRoutePref = array(), array $fareRestrictPref = array(), array $farePref = array(), array $tourCodePref = array(), array $flightTypePref = array(), array $equipPref = array(), array $cabinPref = array(), array $seatPref = array(), array $ticketDistribPref = array(), array $mealPref = array(), array $specRequestPref = array(), array $sSR_Pref = array(), $tPA_Extensions = null, array $mediaEntertainPref = array(), array $petInfoPref = array(), \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation $accountInformation = null, array $oSI_Pref = array(), array $keywordPref = array(), $passengerTypeCode = null, $airTicketType = null)
    {
        $this
            ->setLoyaltyPref($loyaltyPref)
            ->setVendorPref($vendorPref)
            ->setPaymentFormPref($paymentFormPref)
            ->setAirportOriginPref($airportOriginPref)
            ->setAirportDestinationPref($airportDestinationPref)
            ->setAirportRoutePref($airportRoutePref)
            ->setFareRestrictPref($fareRestrictPref)
            ->setFarePref($farePref)
            ->setTourCodePref($tourCodePref)
            ->setFlightTypePref($flightTypePref)
            ->setEquipPref($equipPref)
            ->setCabinPref($cabinPref)
            ->setSeatPref($seatPref)
            ->setTicketDistribPref($ticketDistribPref)
            ->setMealPref($mealPref)
            ->setSpecRequestPref($specRequestPref)
            ->setSSR_Pref($sSR_Pref)
            ->setTPA_Extensions($tPA_Extensions)
            ->setMediaEntertainPref($mediaEntertainPref)
            ->setPetInfoPref($petInfoPref)
            ->setAccountInformation($accountInformation)
            ->setOSI_Pref($oSI_Pref)
            ->setKeywordPref($keywordPref)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setAirTicketType($airTicketType);
    }
    /**
     * Get LoyaltyPref value
     * @return mixed[]|null
     */
    public function getLoyaltyPref()
    {
        return $this->LoyaltyPref;
    }
    /**
     * Set LoyaltyPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $loyaltyPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setLoyaltyPref(array $loyaltyPref = array())
    {
        foreach ($loyaltyPref as $airlinePrefTypeLoyaltyPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The LoyaltyPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeLoyaltyPrefItem) ? get_class($airlinePrefTypeLoyaltyPrefItem) : gettype($airlinePrefTypeLoyaltyPrefItem)), __LINE__);
            }
        }
        $this->LoyaltyPref = $loyaltyPref;
        return $this;
    }
    /**
     * Add item to LoyaltyPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToLoyaltyPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The LoyaltyPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LoyaltyPref[] = $item;
        return $this;
    }
    /**
     * Get VendorPref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref[]|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref[] $vendorPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setVendorPref(array $vendorPref = array())
    {
        foreach ($vendorPref as $airlinePrefTypeVendorPrefItem) {
            // validation for constraint: itemType
            if (!$airlinePrefTypeVendorPrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref) {
                throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref, "%s" given', is_object($airlinePrefTypeVendorPrefItem) ? get_class($airlinePrefTypeVendorPrefItem) : gettype($airlinePrefTypeVendorPrefItem)), __LINE__);
            }
        }
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Add item to VendorPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToVendorPref(\Devlabs91\GenericOtaHotelApiService\StructType\VendorPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref) {
            throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VendorPref[] = $item;
        return $this;
    }
    /**
     * Get PaymentFormPref value
     * @return mixed[]|null
     */
    public function getPaymentFormPref()
    {
        return $this->PaymentFormPref;
    }
    /**
     * Set PaymentFormPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $paymentFormPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setPaymentFormPref(array $paymentFormPref = array())
    {
        foreach ($paymentFormPref as $airlinePrefTypePaymentFormPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PaymentFormPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypePaymentFormPrefItem) ? get_class($airlinePrefTypePaymentFormPrefItem) : gettype($airlinePrefTypePaymentFormPrefItem)), __LINE__);
            }
        }
        $this->PaymentFormPref = $paymentFormPref;
        return $this;
    }
    /**
     * Add item to PaymentFormPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToPaymentFormPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PaymentFormPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentFormPref[] = $item;
        return $this;
    }
    /**
     * Get AirportOriginPref value
     * @return mixed[]|null
     */
    public function getAirportOriginPref()
    {
        return $this->AirportOriginPref;
    }
    /**
     * Set AirportOriginPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $airportOriginPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setAirportOriginPref(array $airportOriginPref = array())
    {
        foreach ($airportOriginPref as $airlinePrefTypeAirportOriginPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AirportOriginPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeAirportOriginPrefItem) ? get_class($airlinePrefTypeAirportOriginPrefItem) : gettype($airlinePrefTypeAirportOriginPrefItem)), __LINE__);
            }
        }
        $this->AirportOriginPref = $airportOriginPref;
        return $this;
    }
    /**
     * Add item to AirportOriginPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToAirportOriginPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AirportOriginPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirportOriginPref[] = $item;
        return $this;
    }
    /**
     * Get AirportDestinationPref value
     * @return mixed|null
     */
    public function getAirportDestinationPref()
    {
        return $this->AirportDestinationPref;
    }
    /**
     * Set AirportDestinationPref value
     * @param mixed $airportDestinationPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setAirportDestinationPref($airportDestinationPref = null)
    {
        $this->AirportDestinationPref = $airportDestinationPref;
        return $this;
    }
    /**
     * Get AirportRoutePref value
     * @return mixed[]|null
     */
    public function getAirportRoutePref()
    {
        return $this->AirportRoutePref;
    }
    /**
     * Set AirportRoutePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $airportRoutePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setAirportRoutePref(array $airportRoutePref = array())
    {
        foreach ($airportRoutePref as $airlinePrefTypeAirportRoutePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AirportRoutePref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeAirportRoutePrefItem) ? get_class($airlinePrefTypeAirportRoutePrefItem) : gettype($airlinePrefTypeAirportRoutePrefItem)), __LINE__);
            }
        }
        $this->AirportRoutePref = $airportRoutePref;
        return $this;
    }
    /**
     * Add item to AirportRoutePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToAirportRoutePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AirportRoutePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirportRoutePref[] = $item;
        return $this;
    }
    /**
     * Get FareRestrictPref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref[]|null
     */
    public function getFareRestrictPref()
    {
        return $this->FareRestrictPref;
    }
    /**
     * Set FareRestrictPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref[] $fareRestrictPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setFareRestrictPref(array $fareRestrictPref = array())
    {
        foreach ($fareRestrictPref as $airlinePrefTypeFareRestrictPrefItem) {
            // validation for constraint: itemType
            if (!$airlinePrefTypeFareRestrictPrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref) {
                throw new \InvalidArgumentException(sprintf('The FareRestrictPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref, "%s" given', is_object($airlinePrefTypeFareRestrictPrefItem) ? get_class($airlinePrefTypeFareRestrictPrefItem) : gettype($airlinePrefTypeFareRestrictPrefItem)), __LINE__);
            }
        }
        $this->FareRestrictPref = $fareRestrictPref;
        return $this;
    }
    /**
     * Add item to FareRestrictPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToFareRestrictPref(\Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref) {
            throw new \InvalidArgumentException(sprintf('The FareRestrictPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareRestrictPref[] = $item;
        return $this;
    }
    /**
     * Get FarePref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FarePref[]|null
     */
    public function getFarePref()
    {
        return $this->FarePref;
    }
    /**
     * Set FarePref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FarePref[] $farePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setFarePref(array $farePref = array())
    {
        foreach ($farePref as $airlinePrefTypeFarePrefItem) {
            // validation for constraint: itemType
            if (!$airlinePrefTypeFarePrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FarePref) {
                throw new \InvalidArgumentException(sprintf('The FarePref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FarePref, "%s" given', is_object($airlinePrefTypeFarePrefItem) ? get_class($airlinePrefTypeFarePrefItem) : gettype($airlinePrefTypeFarePrefItem)), __LINE__);
            }
        }
        $this->FarePref = $farePref;
        return $this;
    }
    /**
     * Add item to FarePref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FarePref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToFarePref(\Devlabs91\GenericOtaHotelApiService\StructType\FarePref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FarePref) {
            throw new \InvalidArgumentException(sprintf('The FarePref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FarePref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FarePref[] = $item;
        return $this;
    }
    /**
     * Get TourCodePref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref[]|null
     */
    public function getTourCodePref()
    {
        return $this->TourCodePref;
    }
    /**
     * Set TourCodePref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref[] $tourCodePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setTourCodePref(array $tourCodePref = array())
    {
        foreach ($tourCodePref as $airlinePrefTypeTourCodePrefItem) {
            // validation for constraint: itemType
            if (!$airlinePrefTypeTourCodePrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref) {
                throw new \InvalidArgumentException(sprintf('The TourCodePref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref, "%s" given', is_object($airlinePrefTypeTourCodePrefItem) ? get_class($airlinePrefTypeTourCodePrefItem) : gettype($airlinePrefTypeTourCodePrefItem)), __LINE__);
            }
        }
        $this->TourCodePref = $tourCodePref;
        return $this;
    }
    /**
     * Add item to TourCodePref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToTourCodePref(\Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref) {
            throw new \InvalidArgumentException(sprintf('The TourCodePref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TourCodePref[] = $item;
        return $this;
    }
    /**
     * Get FlightTypePref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePref[]|null
     */
    public function getFlightTypePref()
    {
        return $this->FlightTypePref;
    }
    /**
     * Set FlightTypePref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePref[] $flightTypePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setFlightTypePref(array $flightTypePref = array())
    {
        foreach ($flightTypePref as $airlinePrefTypeFlightTypePrefItem) {
            // validation for constraint: itemType
            if (!$airlinePrefTypeFlightTypePrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePref) {
                throw new \InvalidArgumentException(sprintf('The FlightTypePref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePref, "%s" given', is_object($airlinePrefTypeFlightTypePrefItem) ? get_class($airlinePrefTypeFlightTypePrefItem) : gettype($airlinePrefTypeFlightTypePrefItem)), __LINE__);
            }
        }
        $this->FlightTypePref = $flightTypePref;
        return $this;
    }
    /**
     * Add item to FlightTypePref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToFlightTypePref(\Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePref) {
            throw new \InvalidArgumentException(sprintf('The FlightTypePref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightTypePref[] = $item;
        return $this;
    }
    /**
     * Get EquipPref value
     * @return mixed[]|null
     */
    public function getEquipPref()
    {
        return $this->EquipPref;
    }
    /**
     * Set EquipPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $equipPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setEquipPref(array $equipPref = array())
    {
        foreach ($equipPref as $airlinePrefTypeEquipPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The EquipPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeEquipPrefItem) ? get_class($airlinePrefTypeEquipPrefItem) : gettype($airlinePrefTypeEquipPrefItem)), __LINE__);
            }
        }
        $this->EquipPref = $equipPref;
        return $this;
    }
    /**
     * Add item to EquipPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToEquipPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The EquipPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EquipPref[] = $item;
        return $this;
    }
    /**
     * Get CabinPref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref[]|null
     */
    public function getCabinPref()
    {
        return $this->CabinPref;
    }
    /**
     * Set CabinPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref[] $cabinPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setCabinPref(array $cabinPref = array())
    {
        foreach ($cabinPref as $airlinePrefTypeCabinPrefItem) {
            // validation for constraint: itemType
            if (!$airlinePrefTypeCabinPrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref) {
                throw new \InvalidArgumentException(sprintf('The CabinPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref, "%s" given', is_object($airlinePrefTypeCabinPrefItem) ? get_class($airlinePrefTypeCabinPrefItem) : gettype($airlinePrefTypeCabinPrefItem)), __LINE__);
            }
        }
        $this->CabinPref = $cabinPref;
        return $this;
    }
    /**
     * Add item to CabinPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToCabinPref(\Devlabs91\GenericOtaHotelApiService\StructType\CabinPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref) {
            throw new \InvalidArgumentException(sprintf('The CabinPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CabinPref[] = $item;
        return $this;
    }
    /**
     * Get SeatPref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref[]|null
     */
    public function getSeatPref()
    {
        return $this->SeatPref;
    }
    /**
     * Set SeatPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref[] $seatPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setSeatPref(array $seatPref = array())
    {
        foreach ($seatPref as $airlinePrefTypeSeatPrefItem) {
            // validation for constraint: itemType
            if (!$airlinePrefTypeSeatPrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref) {
                throw new \InvalidArgumentException(sprintf('The SeatPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref, "%s" given', is_object($airlinePrefTypeSeatPrefItem) ? get_class($airlinePrefTypeSeatPrefItem) : gettype($airlinePrefTypeSeatPrefItem)), __LINE__);
            }
        }
        $this->SeatPref = $seatPref;
        return $this;
    }
    /**
     * Add item to SeatPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToSeatPref(\Devlabs91\GenericOtaHotelApiService\StructType\SeatPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref) {
            throw new \InvalidArgumentException(sprintf('The SeatPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatPref[] = $item;
        return $this;
    }
    /**
     * Get TicketDistribPref value
     * @return mixed[]|null
     */
    public function getTicketDistribPref()
    {
        return $this->TicketDistribPref;
    }
    /**
     * Set TicketDistribPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $ticketDistribPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setTicketDistribPref(array $ticketDistribPref = array())
    {
        foreach ($ticketDistribPref as $airlinePrefTypeTicketDistribPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TicketDistribPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeTicketDistribPrefItem) ? get_class($airlinePrefTypeTicketDistribPrefItem) : gettype($airlinePrefTypeTicketDistribPrefItem)), __LINE__);
            }
        }
        $this->TicketDistribPref = $ticketDistribPref;
        return $this;
    }
    /**
     * Add item to TicketDistribPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToTicketDistribPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TicketDistribPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketDistribPref[] = $item;
        return $this;
    }
    /**
     * Get MealPref value
     * @return mixed[]|null
     */
    public function getMealPref()
    {
        return $this->MealPref;
    }
    /**
     * Set MealPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $mealPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setMealPref(array $mealPref = array())
    {
        foreach ($mealPref as $airlinePrefTypeMealPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MealPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeMealPrefItem) ? get_class($airlinePrefTypeMealPrefItem) : gettype($airlinePrefTypeMealPrefItem)), __LINE__);
            }
        }
        $this->MealPref = $mealPref;
        return $this;
    }
    /**
     * Add item to MealPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToMealPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The MealPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MealPref[] = $item;
        return $this;
    }
    /**
     * Get SpecRequestPref value
     * @return mixed[]|null
     */
    public function getSpecRequestPref()
    {
        return $this->SpecRequestPref;
    }
    /**
     * Set SpecRequestPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $specRequestPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setSpecRequestPref(array $specRequestPref = array())
    {
        foreach ($specRequestPref as $airlinePrefTypeSpecRequestPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecRequestPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeSpecRequestPrefItem) ? get_class($airlinePrefTypeSpecRequestPrefItem) : gettype($airlinePrefTypeSpecRequestPrefItem)), __LINE__);
            }
        }
        $this->SpecRequestPref = $specRequestPref;
        return $this;
    }
    /**
     * Add item to SpecRequestPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToSpecRequestPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SpecRequestPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecRequestPref[] = $item;
        return $this;
    }
    /**
     * Get SSR_Pref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref[]|null
     */
    public function getSSR_Pref()
    {
        return $this->SSR_Pref;
    }
    /**
     * Set SSR_Pref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref[] $sSR_Pref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setSSR_Pref(array $sSR_Pref = array())
    {
        foreach ($sSR_Pref as $airlinePrefTypeSSR_PrefItem) {
            // validation for constraint: itemType
            if (!$airlinePrefTypeSSR_PrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref) {
                throw new \InvalidArgumentException(sprintf('The SSR_Pref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref, "%s" given', is_object($airlinePrefTypeSSR_PrefItem) ? get_class($airlinePrefTypeSSR_PrefItem) : gettype($airlinePrefTypeSSR_PrefItem)), __LINE__);
            }
        }
        $this->SSR_Pref = $sSR_Pref;
        return $this;
    }
    /**
     * Add item to SSR_Pref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToSSR_Pref(\Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref) {
            throw new \InvalidArgumentException(sprintf('The SSR_Pref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SSR_Pref[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get MediaEntertainPref value
     * @return mixed[]|null
     */
    public function getMediaEntertainPref()
    {
        return $this->MediaEntertainPref;
    }
    /**
     * Set MediaEntertainPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $mediaEntertainPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setMediaEntertainPref(array $mediaEntertainPref = array())
    {
        foreach ($mediaEntertainPref as $airlinePrefTypeMediaEntertainPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MediaEntertainPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeMediaEntertainPrefItem) ? get_class($airlinePrefTypeMediaEntertainPrefItem) : gettype($airlinePrefTypeMediaEntertainPrefItem)), __LINE__);
            }
        }
        $this->MediaEntertainPref = $mediaEntertainPref;
        return $this;
    }
    /**
     * Add item to MediaEntertainPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToMediaEntertainPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The MediaEntertainPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MediaEntertainPref[] = $item;
        return $this;
    }
    /**
     * Get PetInfoPref value
     * @return mixed[]|null
     */
    public function getPetInfoPref()
    {
        return $this->PetInfoPref;
    }
    /**
     * Set PetInfoPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $petInfoPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setPetInfoPref(array $petInfoPref = array())
    {
        foreach ($petInfoPref as $airlinePrefTypePetInfoPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PetInfoPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypePetInfoPrefItem) ? get_class($airlinePrefTypePetInfoPrefItem) : gettype($airlinePrefTypePetInfoPrefItem)), __LINE__);
            }
        }
        $this->PetInfoPref = $petInfoPref;
        return $this;
    }
    /**
     * Add item to PetInfoPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToPetInfoPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PetInfoPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PetInfoPref[] = $item;
        return $this;
    }
    /**
     * Get AccountInformation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation|null
     */
    public function getAccountInformation()
    {
        return $this->AccountInformation;
    }
    /**
     * Set AccountInformation value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation $accountInformation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setAccountInformation(\Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation $accountInformation = null)
    {
        $this->AccountInformation = $accountInformation;
        return $this;
    }
    /**
     * Get OSI_Pref value
     * @return mixed[]|null
     */
    public function getOSI_Pref()
    {
        return $this->OSI_Pref;
    }
    /**
     * Set OSI_Pref value
     * @throws \InvalidArgumentException
     * @param mixed[] $oSI_Pref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setOSI_Pref(array $oSI_Pref = array())
    {
        foreach ($oSI_Pref as $airlinePrefTypeOSI_PrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The OSI_Pref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeOSI_PrefItem) ? get_class($airlinePrefTypeOSI_PrefItem) : gettype($airlinePrefTypeOSI_PrefItem)), __LINE__);
            }
        }
        $this->OSI_Pref = $oSI_Pref;
        return $this;
    }
    /**
     * Add item to OSI_Pref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToOSI_Pref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The OSI_Pref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OSI_Pref[] = $item;
        return $this;
    }
    /**
     * Get KeywordPref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref[]|null
     */
    public function getKeywordPref()
    {
        return $this->KeywordPref;
    }
    /**
     * Set KeywordPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref[] $keywordPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setKeywordPref(array $keywordPref = array())
    {
        foreach ($keywordPref as $airlinePrefTypeKeywordPrefItem) {
            // validation for constraint: itemType
            if (!$airlinePrefTypeKeywordPrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref) {
                throw new \InvalidArgumentException(sprintf('The KeywordPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref, "%s" given', is_object($airlinePrefTypeKeywordPrefItem) ? get_class($airlinePrefTypeKeywordPrefItem) : gettype($airlinePrefTypeKeywordPrefItem)), __LINE__);
            }
        }
        $this->KeywordPref = $keywordPref;
        return $this;
    }
    /**
     * Add item to KeywordPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToKeywordPref(\Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref) {
            throw new \InvalidArgumentException(sprintf('The KeywordPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->KeywordPref[] = $item;
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode()
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setPassengerTypeCode($passengerTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerTypeCode)), __LINE__);
        }
        $this->PassengerTypeCode = $passengerTypeCode;
        return $this;
    }
    /**
     * Get AirTicketType value
     * @return string|null
     */
    public function getAirTicketType()
    {
        return $this->AirTicketType;
    }
    /**
     * Set AirTicketType value
     * @param string $airTicketType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setAirTicketType($airTicketType = null)
    {
        // validation for constraint: string
        if (!is_null($airTicketType) && !is_string($airTicketType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airTicketType)), __LINE__);
        }
        $this->AirTicketType = $airTicketType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
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

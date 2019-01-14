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
     * @var mixed[]
     */
    public $VendorPref;
    /**
     * The PaymentFormPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PaymentFormPref;
    /**
     * The AirportOriginPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AirportOriginPref;
    /**
     * The AirportRoutePref
     * Meta informations extracted from the WSDL
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
     * @var mixed[]
     */
    public $FareRestrictPref;
    /**
     * The FlightTypePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $FlightTypePref;
    /**
     * The EquipPref
     * Meta informations extracted from the WSDL
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
     * @var mixed[]
     */
    public $CabinPref;
    /**
     * The SeatPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SeatPref;
    /**
     * The TicketDistribPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TicketDistribPref;
    /**
     * The MealPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $MealPref;
    /**
     * The SpecRequestPref
     * Meta informations extracted from the WSDL
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
     * @var mixed[]
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $MediaEntertainPref;
    /**
     * The PetInfoPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PetInfoPref;
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
     * @uses AirlinePrefType::setAirportRoutePref()
     * @uses AirlinePrefType::setFareRestrictPref()
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
     * @uses AirlinePrefType::setPassengerTypeCode()
     * @uses AirlinePrefType::setAirTicketType()
     * @param mixed[] $loyaltyPref
     * @param mixed[] $vendorPref
     * @param mixed[] $paymentFormPref
     * @param mixed[] $airportOriginPref
     * @param mixed[] $airportRoutePref
     * @param mixed[] $fareRestrictPref
     * @param mixed[] $flightTypePref
     * @param mixed[] $equipPref
     * @param mixed[] $cabinPref
     * @param mixed[] $seatPref
     * @param mixed[] $ticketDistribPref
     * @param mixed[] $mealPref
     * @param mixed[] $specRequestPref
     * @param mixed[] $sSR_Pref
     * @param mixed $tPA_Extensions
     * @param mixed[] $mediaEntertainPref
     * @param mixed[] $petInfoPref
     * @param string $passengerTypeCode
     * @param string $airTicketType
     */
    public function __construct(array $loyaltyPref = array(), array $vendorPref = array(), array $paymentFormPref = array(), array $airportOriginPref = array(), array $airportRoutePref = array(), array $fareRestrictPref = array(), array $flightTypePref = array(), array $equipPref = array(), array $cabinPref = array(), array $seatPref = array(), array $ticketDistribPref = array(), array $mealPref = array(), array $specRequestPref = array(), array $sSR_Pref = array(), $tPA_Extensions = null, array $mediaEntertainPref = array(), array $petInfoPref = array(), $passengerTypeCode = null, $airTicketType = null)
    {
        $this
            ->setLoyaltyPref($loyaltyPref)
            ->setVendorPref($vendorPref)
            ->setPaymentFormPref($paymentFormPref)
            ->setAirportOriginPref($airportOriginPref)
            ->setAirportRoutePref($airportRoutePref)
            ->setFareRestrictPref($fareRestrictPref)
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
     * @return mixed[]|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $vendorPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setVendorPref(array $vendorPref = array())
    {
        foreach ($vendorPref as $airlinePrefTypeVendorPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeVendorPrefItem) ? get_class($airlinePrefTypeVendorPrefItem) : gettype($airlinePrefTypeVendorPrefItem)), __LINE__);
            }
        }
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Add item to VendorPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToVendorPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return mixed[]|null
     */
    public function getFareRestrictPref()
    {
        return $this->FareRestrictPref;
    }
    /**
     * Set FareRestrictPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $fareRestrictPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setFareRestrictPref(array $fareRestrictPref = array())
    {
        foreach ($fareRestrictPref as $airlinePrefTypeFareRestrictPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The FareRestrictPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeFareRestrictPrefItem) ? get_class($airlinePrefTypeFareRestrictPrefItem) : gettype($airlinePrefTypeFareRestrictPrefItem)), __LINE__);
            }
        }
        $this->FareRestrictPref = $fareRestrictPref;
        return $this;
    }
    /**
     * Add item to FareRestrictPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToFareRestrictPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The FareRestrictPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareRestrictPref[] = $item;
        return $this;
    }
    /**
     * Get FlightTypePref value
     * @return mixed[]|null
     */
    public function getFlightTypePref()
    {
        return $this->FlightTypePref;
    }
    /**
     * Set FlightTypePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $flightTypePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setFlightTypePref(array $flightTypePref = array())
    {
        foreach ($flightTypePref as $airlinePrefTypeFlightTypePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The FlightTypePref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeFlightTypePrefItem) ? get_class($airlinePrefTypeFlightTypePrefItem) : gettype($airlinePrefTypeFlightTypePrefItem)), __LINE__);
            }
        }
        $this->FlightTypePref = $flightTypePref;
        return $this;
    }
    /**
     * Add item to FlightTypePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToFlightTypePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The FlightTypePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return mixed[]|null
     */
    public function getCabinPref()
    {
        return $this->CabinPref;
    }
    /**
     * Set CabinPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $cabinPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setCabinPref(array $cabinPref = array())
    {
        foreach ($cabinPref as $airlinePrefTypeCabinPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CabinPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeCabinPrefItem) ? get_class($airlinePrefTypeCabinPrefItem) : gettype($airlinePrefTypeCabinPrefItem)), __LINE__);
            }
        }
        $this->CabinPref = $cabinPref;
        return $this;
    }
    /**
     * Add item to CabinPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToCabinPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CabinPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CabinPref[] = $item;
        return $this;
    }
    /**
     * Get SeatPref value
     * @return mixed[]|null
     */
    public function getSeatPref()
    {
        return $this->SeatPref;
    }
    /**
     * Set SeatPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $seatPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setSeatPref(array $seatPref = array())
    {
        foreach ($seatPref as $airlinePrefTypeSeatPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SeatPref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeSeatPrefItem) ? get_class($airlinePrefTypeSeatPrefItem) : gettype($airlinePrefTypeSeatPrefItem)), __LINE__);
            }
        }
        $this->SeatPref = $seatPref;
        return $this;
    }
    /**
     * Add item to SeatPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToSeatPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SeatPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return mixed[]|null
     */
    public function getSSR_Pref()
    {
        return $this->SSR_Pref;
    }
    /**
     * Set SSR_Pref value
     * @throws \InvalidArgumentException
     * @param mixed[] $sSR_Pref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function setSSR_Pref(array $sSR_Pref = array())
    {
        foreach ($sSR_Pref as $airlinePrefTypeSSR_PrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SSR_Pref property can only contain items of anyType, "%s" given', is_object($airlinePrefTypeSSR_PrefItem) ? get_class($airlinePrefTypeSSR_PrefItem) : gettype($airlinePrefTypeSSR_PrefItem)), __LINE__);
            }
        }
        $this->SSR_Pref = $sSR_Pref;
        return $this;
    }
    /**
     * Add item to SSR_Pref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirlinePrefType
     */
    public function addToSSR_Pref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SSR_Pref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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

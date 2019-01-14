<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: These are the hotel preference elements used on an instance of a profile.
 * @subpackage Structs
 */
class HotelPrefType extends AbstractStructBase
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
     * The PaymentFormPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PaymentFormPref;
    /**
     * The HotelChainPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $HotelChainPref;
    /**
     * The PropertyNamePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PropertyNamePref;
    /**
     * The PropertyLocationPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PropertyLocationPref;
    /**
     * The PropertyTypePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PropertyTypePref;
    /**
     * The PropertyClassPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PropertyClassPref;
    /**
     * The PropertyAmenityPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PropertyAmenityPref;
    /**
     * The RoomAmenityPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RoomAmenityPref;
    /**
     * The RoomLocationPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RoomLocationPref;
    /**
     * The BedTypePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $BedTypePref;
    /**
     * The FoodSrvcPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $FoodSrvcPref;
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
     * The MealPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $MealPref;
    /**
     * The RecreationSrvcPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RecreationSrvcPref;
    /**
     * The BusinessSrvcPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $BusinessSrvcPref;
    /**
     * The PersonalSrvcPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PersonalSrvcPref;
    /**
     * The SecurityFeaturePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SecurityFeaturePref;
    /**
     * The PhysChallFeaturePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PhysChallFeaturePref;
    /**
     * The SpecRequestPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SpecRequestPref;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The RatePlanCode
     * Meta informations extracted from the WSDL
     * - documentation: Code identifying preferred hotel rate plan for this travel situation
     * @var string
     */
    public $RatePlanCode;
    /**
     * The HotelGuestType
     * Meta informations extracted from the WSDL
     * - documentation: Category of hotel guest. Refer to OTA Code List Hotel Guest Type (GUE).
     * @var string
     */
    public $HotelGuestType;
    /**
     * Constructor method for HotelPrefType
     * @uses HotelPrefType::setLoyaltyPref()
     * @uses HotelPrefType::setPaymentFormPref()
     * @uses HotelPrefType::setHotelChainPref()
     * @uses HotelPrefType::setPropertyNamePref()
     * @uses HotelPrefType::setPropertyLocationPref()
     * @uses HotelPrefType::setPropertyTypePref()
     * @uses HotelPrefType::setPropertyClassPref()
     * @uses HotelPrefType::setPropertyAmenityPref()
     * @uses HotelPrefType::setRoomAmenityPref()
     * @uses HotelPrefType::setRoomLocationPref()
     * @uses HotelPrefType::setBedTypePref()
     * @uses HotelPrefType::setFoodSrvcPref()
     * @uses HotelPrefType::setMediaEntertainPref()
     * @uses HotelPrefType::setPetInfoPref()
     * @uses HotelPrefType::setMealPref()
     * @uses HotelPrefType::setRecreationSrvcPref()
     * @uses HotelPrefType::setBusinessSrvcPref()
     * @uses HotelPrefType::setPersonalSrvcPref()
     * @uses HotelPrefType::setSecurityFeaturePref()
     * @uses HotelPrefType::setPhysChallFeaturePref()
     * @uses HotelPrefType::setSpecRequestPref()
     * @uses HotelPrefType::setTPA_Extensions()
     * @uses HotelPrefType::setRatePlanCode()
     * @uses HotelPrefType::setHotelGuestType()
     * @param mixed[] $loyaltyPref
     * @param mixed[] $paymentFormPref
     * @param mixed[] $hotelChainPref
     * @param mixed[] $propertyNamePref
     * @param mixed[] $propertyLocationPref
     * @param mixed[] $propertyTypePref
     * @param mixed[] $propertyClassPref
     * @param mixed[] $propertyAmenityPref
     * @param mixed[] $roomAmenityPref
     * @param mixed[] $roomLocationPref
     * @param mixed[] $bedTypePref
     * @param mixed[] $foodSrvcPref
     * @param mixed[] $mediaEntertainPref
     * @param mixed[] $petInfoPref
     * @param mixed[] $mealPref
     * @param mixed[] $recreationSrvcPref
     * @param mixed[] $businessSrvcPref
     * @param mixed[] $personalSrvcPref
     * @param mixed[] $securityFeaturePref
     * @param mixed[] $physChallFeaturePref
     * @param mixed[] $specRequestPref
     * @param mixed $tPA_Extensions
     * @param string $ratePlanCode
     * @param string $hotelGuestType
     */
    public function __construct(array $loyaltyPref = array(), array $paymentFormPref = array(), array $hotelChainPref = array(), array $propertyNamePref = array(), array $propertyLocationPref = array(), array $propertyTypePref = array(), array $propertyClassPref = array(), array $propertyAmenityPref = array(), array $roomAmenityPref = array(), array $roomLocationPref = array(), array $bedTypePref = array(), array $foodSrvcPref = array(), array $mediaEntertainPref = array(), array $petInfoPref = array(), array $mealPref = array(), array $recreationSrvcPref = array(), array $businessSrvcPref = array(), array $personalSrvcPref = array(), array $securityFeaturePref = array(), array $physChallFeaturePref = array(), array $specRequestPref = array(), $tPA_Extensions = null, $ratePlanCode = null, $hotelGuestType = null)
    {
        $this
            ->setLoyaltyPref($loyaltyPref)
            ->setPaymentFormPref($paymentFormPref)
            ->setHotelChainPref($hotelChainPref)
            ->setPropertyNamePref($propertyNamePref)
            ->setPropertyLocationPref($propertyLocationPref)
            ->setPropertyTypePref($propertyTypePref)
            ->setPropertyClassPref($propertyClassPref)
            ->setPropertyAmenityPref($propertyAmenityPref)
            ->setRoomAmenityPref($roomAmenityPref)
            ->setRoomLocationPref($roomLocationPref)
            ->setBedTypePref($bedTypePref)
            ->setFoodSrvcPref($foodSrvcPref)
            ->setMediaEntertainPref($mediaEntertainPref)
            ->setPetInfoPref($petInfoPref)
            ->setMealPref($mealPref)
            ->setRecreationSrvcPref($recreationSrvcPref)
            ->setBusinessSrvcPref($businessSrvcPref)
            ->setPersonalSrvcPref($personalSrvcPref)
            ->setSecurityFeaturePref($securityFeaturePref)
            ->setPhysChallFeaturePref($physChallFeaturePref)
            ->setSpecRequestPref($specRequestPref)
            ->setTPA_Extensions($tPA_Extensions)
            ->setRatePlanCode($ratePlanCode)
            ->setHotelGuestType($hotelGuestType);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setLoyaltyPref(array $loyaltyPref = array())
    {
        foreach ($loyaltyPref as $hotelPrefTypeLoyaltyPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The LoyaltyPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeLoyaltyPrefItem) ? get_class($hotelPrefTypeLoyaltyPrefItem) : gettype($hotelPrefTypeLoyaltyPrefItem)), __LINE__);
            }
        }
        $this->LoyaltyPref = $loyaltyPref;
        return $this;
    }
    /**
     * Add item to LoyaltyPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setPaymentFormPref(array $paymentFormPref = array())
    {
        foreach ($paymentFormPref as $hotelPrefTypePaymentFormPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PaymentFormPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypePaymentFormPrefItem) ? get_class($hotelPrefTypePaymentFormPrefItem) : gettype($hotelPrefTypePaymentFormPrefItem)), __LINE__);
            }
        }
        $this->PaymentFormPref = $paymentFormPref;
        return $this;
    }
    /**
     * Add item to PaymentFormPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
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
     * Get HotelChainPref value
     * @return mixed[]|null
     */
    public function getHotelChainPref()
    {
        return $this->HotelChainPref;
    }
    /**
     * Set HotelChainPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $hotelChainPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setHotelChainPref(array $hotelChainPref = array())
    {
        foreach ($hotelChainPref as $hotelPrefTypeHotelChainPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The HotelChainPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeHotelChainPrefItem) ? get_class($hotelPrefTypeHotelChainPrefItem) : gettype($hotelPrefTypeHotelChainPrefItem)), __LINE__);
            }
        }
        $this->HotelChainPref = $hotelChainPref;
        return $this;
    }
    /**
     * Add item to HotelChainPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToHotelChainPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The HotelChainPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelChainPref[] = $item;
        return $this;
    }
    /**
     * Get PropertyNamePref value
     * @return mixed[]|null
     */
    public function getPropertyNamePref()
    {
        return $this->PropertyNamePref;
    }
    /**
     * Set PropertyNamePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $propertyNamePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setPropertyNamePref(array $propertyNamePref = array())
    {
        foreach ($propertyNamePref as $hotelPrefTypePropertyNamePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PropertyNamePref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypePropertyNamePrefItem) ? get_class($hotelPrefTypePropertyNamePrefItem) : gettype($hotelPrefTypePropertyNamePrefItem)), __LINE__);
            }
        }
        $this->PropertyNamePref = $propertyNamePref;
        return $this;
    }
    /**
     * Add item to PropertyNamePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToPropertyNamePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PropertyNamePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PropertyNamePref[] = $item;
        return $this;
    }
    /**
     * Get PropertyLocationPref value
     * @return mixed[]|null
     */
    public function getPropertyLocationPref()
    {
        return $this->PropertyLocationPref;
    }
    /**
     * Set PropertyLocationPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $propertyLocationPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setPropertyLocationPref(array $propertyLocationPref = array())
    {
        foreach ($propertyLocationPref as $hotelPrefTypePropertyLocationPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PropertyLocationPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypePropertyLocationPrefItem) ? get_class($hotelPrefTypePropertyLocationPrefItem) : gettype($hotelPrefTypePropertyLocationPrefItem)), __LINE__);
            }
        }
        $this->PropertyLocationPref = $propertyLocationPref;
        return $this;
    }
    /**
     * Add item to PropertyLocationPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToPropertyLocationPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PropertyLocationPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PropertyLocationPref[] = $item;
        return $this;
    }
    /**
     * Get PropertyTypePref value
     * @return mixed[]|null
     */
    public function getPropertyTypePref()
    {
        return $this->PropertyTypePref;
    }
    /**
     * Set PropertyTypePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $propertyTypePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setPropertyTypePref(array $propertyTypePref = array())
    {
        foreach ($propertyTypePref as $hotelPrefTypePropertyTypePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PropertyTypePref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypePropertyTypePrefItem) ? get_class($hotelPrefTypePropertyTypePrefItem) : gettype($hotelPrefTypePropertyTypePrefItem)), __LINE__);
            }
        }
        $this->PropertyTypePref = $propertyTypePref;
        return $this;
    }
    /**
     * Add item to PropertyTypePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToPropertyTypePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PropertyTypePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PropertyTypePref[] = $item;
        return $this;
    }
    /**
     * Get PropertyClassPref value
     * @return mixed[]|null
     */
    public function getPropertyClassPref()
    {
        return $this->PropertyClassPref;
    }
    /**
     * Set PropertyClassPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $propertyClassPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setPropertyClassPref(array $propertyClassPref = array())
    {
        foreach ($propertyClassPref as $hotelPrefTypePropertyClassPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PropertyClassPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypePropertyClassPrefItem) ? get_class($hotelPrefTypePropertyClassPrefItem) : gettype($hotelPrefTypePropertyClassPrefItem)), __LINE__);
            }
        }
        $this->PropertyClassPref = $propertyClassPref;
        return $this;
    }
    /**
     * Add item to PropertyClassPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToPropertyClassPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PropertyClassPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PropertyClassPref[] = $item;
        return $this;
    }
    /**
     * Get PropertyAmenityPref value
     * @return mixed[]|null
     */
    public function getPropertyAmenityPref()
    {
        return $this->PropertyAmenityPref;
    }
    /**
     * Set PropertyAmenityPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $propertyAmenityPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setPropertyAmenityPref(array $propertyAmenityPref = array())
    {
        foreach ($propertyAmenityPref as $hotelPrefTypePropertyAmenityPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PropertyAmenityPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypePropertyAmenityPrefItem) ? get_class($hotelPrefTypePropertyAmenityPrefItem) : gettype($hotelPrefTypePropertyAmenityPrefItem)), __LINE__);
            }
        }
        $this->PropertyAmenityPref = $propertyAmenityPref;
        return $this;
    }
    /**
     * Add item to PropertyAmenityPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToPropertyAmenityPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PropertyAmenityPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PropertyAmenityPref[] = $item;
        return $this;
    }
    /**
     * Get RoomAmenityPref value
     * @return mixed[]|null
     */
    public function getRoomAmenityPref()
    {
        return $this->RoomAmenityPref;
    }
    /**
     * Set RoomAmenityPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomAmenityPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setRoomAmenityPref(array $roomAmenityPref = array())
    {
        foreach ($roomAmenityPref as $hotelPrefTypeRoomAmenityPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomAmenityPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeRoomAmenityPrefItem) ? get_class($hotelPrefTypeRoomAmenityPrefItem) : gettype($hotelPrefTypeRoomAmenityPrefItem)), __LINE__);
            }
        }
        $this->RoomAmenityPref = $roomAmenityPref;
        return $this;
    }
    /**
     * Add item to RoomAmenityPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToRoomAmenityPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomAmenityPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomAmenityPref[] = $item;
        return $this;
    }
    /**
     * Get RoomLocationPref value
     * @return mixed[]|null
     */
    public function getRoomLocationPref()
    {
        return $this->RoomLocationPref;
    }
    /**
     * Set RoomLocationPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomLocationPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setRoomLocationPref(array $roomLocationPref = array())
    {
        foreach ($roomLocationPref as $hotelPrefTypeRoomLocationPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomLocationPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeRoomLocationPrefItem) ? get_class($hotelPrefTypeRoomLocationPrefItem) : gettype($hotelPrefTypeRoomLocationPrefItem)), __LINE__);
            }
        }
        $this->RoomLocationPref = $roomLocationPref;
        return $this;
    }
    /**
     * Add item to RoomLocationPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToRoomLocationPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomLocationPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomLocationPref[] = $item;
        return $this;
    }
    /**
     * Get BedTypePref value
     * @return mixed[]|null
     */
    public function getBedTypePref()
    {
        return $this->BedTypePref;
    }
    /**
     * Set BedTypePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $bedTypePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setBedTypePref(array $bedTypePref = array())
    {
        foreach ($bedTypePref as $hotelPrefTypeBedTypePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The BedTypePref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeBedTypePrefItem) ? get_class($hotelPrefTypeBedTypePrefItem) : gettype($hotelPrefTypeBedTypePrefItem)), __LINE__);
            }
        }
        $this->BedTypePref = $bedTypePref;
        return $this;
    }
    /**
     * Add item to BedTypePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToBedTypePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The BedTypePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BedTypePref[] = $item;
        return $this;
    }
    /**
     * Get FoodSrvcPref value
     * @return mixed[]|null
     */
    public function getFoodSrvcPref()
    {
        return $this->FoodSrvcPref;
    }
    /**
     * Set FoodSrvcPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $foodSrvcPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setFoodSrvcPref(array $foodSrvcPref = array())
    {
        foreach ($foodSrvcPref as $hotelPrefTypeFoodSrvcPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The FoodSrvcPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeFoodSrvcPrefItem) ? get_class($hotelPrefTypeFoodSrvcPrefItem) : gettype($hotelPrefTypeFoodSrvcPrefItem)), __LINE__);
            }
        }
        $this->FoodSrvcPref = $foodSrvcPref;
        return $this;
    }
    /**
     * Add item to FoodSrvcPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToFoodSrvcPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The FoodSrvcPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FoodSrvcPref[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setMediaEntertainPref(array $mediaEntertainPref = array())
    {
        foreach ($mediaEntertainPref as $hotelPrefTypeMediaEntertainPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MediaEntertainPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeMediaEntertainPrefItem) ? get_class($hotelPrefTypeMediaEntertainPrefItem) : gettype($hotelPrefTypeMediaEntertainPrefItem)), __LINE__);
            }
        }
        $this->MediaEntertainPref = $mediaEntertainPref;
        return $this;
    }
    /**
     * Add item to MediaEntertainPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setPetInfoPref(array $petInfoPref = array())
    {
        foreach ($petInfoPref as $hotelPrefTypePetInfoPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PetInfoPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypePetInfoPrefItem) ? get_class($hotelPrefTypePetInfoPrefItem) : gettype($hotelPrefTypePetInfoPrefItem)), __LINE__);
            }
        }
        $this->PetInfoPref = $petInfoPref;
        return $this;
    }
    /**
     * Add item to PetInfoPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setMealPref(array $mealPref = array())
    {
        foreach ($mealPref as $hotelPrefTypeMealPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MealPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeMealPrefItem) ? get_class($hotelPrefTypeMealPrefItem) : gettype($hotelPrefTypeMealPrefItem)), __LINE__);
            }
        }
        $this->MealPref = $mealPref;
        return $this;
    }
    /**
     * Add item to MealPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
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
     * Get RecreationSrvcPref value
     * @return mixed[]|null
     */
    public function getRecreationSrvcPref()
    {
        return $this->RecreationSrvcPref;
    }
    /**
     * Set RecreationSrvcPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $recreationSrvcPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setRecreationSrvcPref(array $recreationSrvcPref = array())
    {
        foreach ($recreationSrvcPref as $hotelPrefTypeRecreationSrvcPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RecreationSrvcPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeRecreationSrvcPrefItem) ? get_class($hotelPrefTypeRecreationSrvcPrefItem) : gettype($hotelPrefTypeRecreationSrvcPrefItem)), __LINE__);
            }
        }
        $this->RecreationSrvcPref = $recreationSrvcPref;
        return $this;
    }
    /**
     * Add item to RecreationSrvcPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToRecreationSrvcPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RecreationSrvcPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RecreationSrvcPref[] = $item;
        return $this;
    }
    /**
     * Get BusinessSrvcPref value
     * @return mixed[]|null
     */
    public function getBusinessSrvcPref()
    {
        return $this->BusinessSrvcPref;
    }
    /**
     * Set BusinessSrvcPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $businessSrvcPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setBusinessSrvcPref(array $businessSrvcPref = array())
    {
        foreach ($businessSrvcPref as $hotelPrefTypeBusinessSrvcPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The BusinessSrvcPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeBusinessSrvcPrefItem) ? get_class($hotelPrefTypeBusinessSrvcPrefItem) : gettype($hotelPrefTypeBusinessSrvcPrefItem)), __LINE__);
            }
        }
        $this->BusinessSrvcPref = $businessSrvcPref;
        return $this;
    }
    /**
     * Add item to BusinessSrvcPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToBusinessSrvcPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The BusinessSrvcPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BusinessSrvcPref[] = $item;
        return $this;
    }
    /**
     * Get PersonalSrvcPref value
     * @return mixed[]|null
     */
    public function getPersonalSrvcPref()
    {
        return $this->PersonalSrvcPref;
    }
    /**
     * Set PersonalSrvcPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $personalSrvcPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setPersonalSrvcPref(array $personalSrvcPref = array())
    {
        foreach ($personalSrvcPref as $hotelPrefTypePersonalSrvcPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PersonalSrvcPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypePersonalSrvcPrefItem) ? get_class($hotelPrefTypePersonalSrvcPrefItem) : gettype($hotelPrefTypePersonalSrvcPrefItem)), __LINE__);
            }
        }
        $this->PersonalSrvcPref = $personalSrvcPref;
        return $this;
    }
    /**
     * Add item to PersonalSrvcPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToPersonalSrvcPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PersonalSrvcPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PersonalSrvcPref[] = $item;
        return $this;
    }
    /**
     * Get SecurityFeaturePref value
     * @return mixed[]|null
     */
    public function getSecurityFeaturePref()
    {
        return $this->SecurityFeaturePref;
    }
    /**
     * Set SecurityFeaturePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $securityFeaturePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setSecurityFeaturePref(array $securityFeaturePref = array())
    {
        foreach ($securityFeaturePref as $hotelPrefTypeSecurityFeaturePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SecurityFeaturePref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeSecurityFeaturePrefItem) ? get_class($hotelPrefTypeSecurityFeaturePrefItem) : gettype($hotelPrefTypeSecurityFeaturePrefItem)), __LINE__);
            }
        }
        $this->SecurityFeaturePref = $securityFeaturePref;
        return $this;
    }
    /**
     * Add item to SecurityFeaturePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToSecurityFeaturePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SecurityFeaturePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SecurityFeaturePref[] = $item;
        return $this;
    }
    /**
     * Get PhysChallFeaturePref value
     * @return mixed[]|null
     */
    public function getPhysChallFeaturePref()
    {
        return $this->PhysChallFeaturePref;
    }
    /**
     * Set PhysChallFeaturePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $physChallFeaturePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setPhysChallFeaturePref(array $physChallFeaturePref = array())
    {
        foreach ($physChallFeaturePref as $hotelPrefTypePhysChallFeaturePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PhysChallFeaturePref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypePhysChallFeaturePrefItem) ? get_class($hotelPrefTypePhysChallFeaturePrefItem) : gettype($hotelPrefTypePhysChallFeaturePrefItem)), __LINE__);
            }
        }
        $this->PhysChallFeaturePref = $physChallFeaturePref;
        return $this;
    }
    /**
     * Add item to PhysChallFeaturePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function addToPhysChallFeaturePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PhysChallFeaturePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PhysChallFeaturePref[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setSpecRequestPref(array $specRequestPref = array())
    {
        foreach ($specRequestPref as $hotelPrefTypeSpecRequestPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecRequestPref property can only contain items of anyType, "%s" given', is_object($hotelPrefTypeSpecRequestPrefItem) ? get_class($hotelPrefTypeSpecRequestPrefItem) : gettype($hotelPrefTypeSpecRequestPrefItem)), __LINE__);
            }
        }
        $this->SpecRequestPref = $specRequestPref;
        return $this;
    }
    /**
     * Add item to SpecRequestPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get HotelGuestType value
     * @return string|null
     */
    public function getHotelGuestType()
    {
        return $this->HotelGuestType;
    }
    /**
     * Set HotelGuestType value
     * @param string $hotelGuestType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
     */
    public function setHotelGuestType($hotelGuestType = null)
    {
        // validation for constraint: string
        if (!is_null($hotelGuestType) && !is_string($hotelGuestType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelGuestType)), __LINE__);
        }
        $this->HotelGuestType = $hotelGuestType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelPrefType
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

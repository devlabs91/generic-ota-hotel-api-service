<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommonPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Travel needs associated with a collection but independent of specific travel services.
 * @subpackage Structs
 */
class CommonPrefType extends AbstractStructBase
{
    /**
     * The NamePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $NamePref;
    /**
     * The PhonePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PhonePref;
    /**
     * The AddressPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AddressPref;
    /**
     * The PaymentFormPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PaymentFormPref;
    /**
     * The InterestPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $InterestPref;
    /**
     * The InsurancePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $InsurancePref;
    /**
     * The SeatingPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SeatingPref;
    /**
     * The TicketDistribPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TicketDistribPref;
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
     * The LoyaltyPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $LoyaltyPref;
    /**
     * The SpecRequestPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SpecRequestPref;
    /**
     * The RelatedTravelerPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RelatedTravelerPref;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for CommonPrefType
     * @uses CommonPrefType::setNamePref()
     * @uses CommonPrefType::setPhonePref()
     * @uses CommonPrefType::setAddressPref()
     * @uses CommonPrefType::setPaymentFormPref()
     * @uses CommonPrefType::setInterestPref()
     * @uses CommonPrefType::setInsurancePref()
     * @uses CommonPrefType::setSeatingPref()
     * @uses CommonPrefType::setTicketDistribPref()
     * @uses CommonPrefType::setMediaEntertainPref()
     * @uses CommonPrefType::setPetInfoPref()
     * @uses CommonPrefType::setMealPref()
     * @uses CommonPrefType::setLoyaltyPref()
     * @uses CommonPrefType::setSpecRequestPref()
     * @uses CommonPrefType::setRelatedTravelerPref()
     * @uses CommonPrefType::setTPA_Extensions()
     * @param mixed[] $namePref
     * @param mixed[] $phonePref
     * @param mixed[] $addressPref
     * @param mixed[] $paymentFormPref
     * @param mixed[] $interestPref
     * @param mixed[] $insurancePref
     * @param mixed[] $seatingPref
     * @param mixed[] $ticketDistribPref
     * @param mixed[] $mediaEntertainPref
     * @param mixed[] $petInfoPref
     * @param mixed[] $mealPref
     * @param mixed[] $loyaltyPref
     * @param mixed[] $specRequestPref
     * @param mixed[] $relatedTravelerPref
     * @param mixed $tPA_Extensions
     */
    public function __construct(array $namePref = array(), array $phonePref = array(), array $addressPref = array(), array $paymentFormPref = array(), array $interestPref = array(), array $insurancePref = array(), array $seatingPref = array(), array $ticketDistribPref = array(), array $mediaEntertainPref = array(), array $petInfoPref = array(), array $mealPref = array(), array $loyaltyPref = array(), array $specRequestPref = array(), array $relatedTravelerPref = array(), $tPA_Extensions = null)
    {
        $this
            ->setNamePref($namePref)
            ->setPhonePref($phonePref)
            ->setAddressPref($addressPref)
            ->setPaymentFormPref($paymentFormPref)
            ->setInterestPref($interestPref)
            ->setInsurancePref($insurancePref)
            ->setSeatingPref($seatingPref)
            ->setTicketDistribPref($ticketDistribPref)
            ->setMediaEntertainPref($mediaEntertainPref)
            ->setPetInfoPref($petInfoPref)
            ->setMealPref($mealPref)
            ->setLoyaltyPref($loyaltyPref)
            ->setSpecRequestPref($specRequestPref)
            ->setRelatedTravelerPref($relatedTravelerPref)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get NamePref value
     * @return mixed[]|null
     */
    public function getNamePref()
    {
        return $this->NamePref;
    }
    /**
     * Set NamePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $namePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setNamePref(array $namePref = array())
    {
        foreach ($namePref as $commonPrefTypeNamePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The NamePref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeNamePrefItem) ? get_class($commonPrefTypeNamePrefItem) : gettype($commonPrefTypeNamePrefItem)), __LINE__);
            }
        }
        $this->NamePref = $namePref;
        return $this;
    }
    /**
     * Add item to NamePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function addToNamePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The NamePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NamePref[] = $item;
        return $this;
    }
    /**
     * Get PhonePref value
     * @return mixed[]|null
     */
    public function getPhonePref()
    {
        return $this->PhonePref;
    }
    /**
     * Set PhonePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $phonePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setPhonePref(array $phonePref = array())
    {
        foreach ($phonePref as $commonPrefTypePhonePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PhonePref property can only contain items of anyType, "%s" given', is_object($commonPrefTypePhonePrefItem) ? get_class($commonPrefTypePhonePrefItem) : gettype($commonPrefTypePhonePrefItem)), __LINE__);
            }
        }
        $this->PhonePref = $phonePref;
        return $this;
    }
    /**
     * Add item to PhonePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function addToPhonePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PhonePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PhonePref[] = $item;
        return $this;
    }
    /**
     * Get AddressPref value
     * @return mixed[]|null
     */
    public function getAddressPref()
    {
        return $this->AddressPref;
    }
    /**
     * Set AddressPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $addressPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setAddressPref(array $addressPref = array())
    {
        foreach ($addressPref as $commonPrefTypeAddressPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AddressPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeAddressPrefItem) ? get_class($commonPrefTypeAddressPrefItem) : gettype($commonPrefTypeAddressPrefItem)), __LINE__);
            }
        }
        $this->AddressPref = $addressPref;
        return $this;
    }
    /**
     * Add item to AddressPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function addToAddressPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AddressPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressPref[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setPaymentFormPref(array $paymentFormPref = array())
    {
        foreach ($paymentFormPref as $commonPrefTypePaymentFormPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PaymentFormPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypePaymentFormPrefItem) ? get_class($commonPrefTypePaymentFormPrefItem) : gettype($commonPrefTypePaymentFormPrefItem)), __LINE__);
            }
        }
        $this->PaymentFormPref = $paymentFormPref;
        return $this;
    }
    /**
     * Add item to PaymentFormPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
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
     * Get InterestPref value
     * @return mixed[]|null
     */
    public function getInterestPref()
    {
        return $this->InterestPref;
    }
    /**
     * Set InterestPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $interestPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setInterestPref(array $interestPref = array())
    {
        foreach ($interestPref as $commonPrefTypeInterestPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The InterestPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeInterestPrefItem) ? get_class($commonPrefTypeInterestPrefItem) : gettype($commonPrefTypeInterestPrefItem)), __LINE__);
            }
        }
        $this->InterestPref = $interestPref;
        return $this;
    }
    /**
     * Add item to InterestPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function addToInterestPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The InterestPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InterestPref[] = $item;
        return $this;
    }
    /**
     * Get InsurancePref value
     * @return mixed[]|null
     */
    public function getInsurancePref()
    {
        return $this->InsurancePref;
    }
    /**
     * Set InsurancePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $insurancePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setInsurancePref(array $insurancePref = array())
    {
        foreach ($insurancePref as $commonPrefTypeInsurancePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The InsurancePref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeInsurancePrefItem) ? get_class($commonPrefTypeInsurancePrefItem) : gettype($commonPrefTypeInsurancePrefItem)), __LINE__);
            }
        }
        $this->InsurancePref = $insurancePref;
        return $this;
    }
    /**
     * Add item to InsurancePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function addToInsurancePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The InsurancePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InsurancePref[] = $item;
        return $this;
    }
    /**
     * Get SeatingPref value
     * @return mixed[]|null
     */
    public function getSeatingPref()
    {
        return $this->SeatingPref;
    }
    /**
     * Set SeatingPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $seatingPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setSeatingPref(array $seatingPref = array())
    {
        foreach ($seatingPref as $commonPrefTypeSeatingPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SeatingPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeSeatingPrefItem) ? get_class($commonPrefTypeSeatingPrefItem) : gettype($commonPrefTypeSeatingPrefItem)), __LINE__);
            }
        }
        $this->SeatingPref = $seatingPref;
        return $this;
    }
    /**
     * Add item to SeatingPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function addToSeatingPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SeatingPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatingPref[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setTicketDistribPref(array $ticketDistribPref = array())
    {
        foreach ($ticketDistribPref as $commonPrefTypeTicketDistribPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TicketDistribPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeTicketDistribPrefItem) ? get_class($commonPrefTypeTicketDistribPrefItem) : gettype($commonPrefTypeTicketDistribPrefItem)), __LINE__);
            }
        }
        $this->TicketDistribPref = $ticketDistribPref;
        return $this;
    }
    /**
     * Add item to TicketDistribPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setMediaEntertainPref(array $mediaEntertainPref = array())
    {
        foreach ($mediaEntertainPref as $commonPrefTypeMediaEntertainPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MediaEntertainPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeMediaEntertainPrefItem) ? get_class($commonPrefTypeMediaEntertainPrefItem) : gettype($commonPrefTypeMediaEntertainPrefItem)), __LINE__);
            }
        }
        $this->MediaEntertainPref = $mediaEntertainPref;
        return $this;
    }
    /**
     * Add item to MediaEntertainPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setPetInfoPref(array $petInfoPref = array())
    {
        foreach ($petInfoPref as $commonPrefTypePetInfoPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PetInfoPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypePetInfoPrefItem) ? get_class($commonPrefTypePetInfoPrefItem) : gettype($commonPrefTypePetInfoPrefItem)), __LINE__);
            }
        }
        $this->PetInfoPref = $petInfoPref;
        return $this;
    }
    /**
     * Add item to PetInfoPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setMealPref(array $mealPref = array())
    {
        foreach ($mealPref as $commonPrefTypeMealPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MealPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeMealPrefItem) ? get_class($commonPrefTypeMealPrefItem) : gettype($commonPrefTypeMealPrefItem)), __LINE__);
            }
        }
        $this->MealPref = $mealPref;
        return $this;
    }
    /**
     * Add item to MealPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setLoyaltyPref(array $loyaltyPref = array())
    {
        foreach ($loyaltyPref as $commonPrefTypeLoyaltyPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The LoyaltyPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeLoyaltyPrefItem) ? get_class($commonPrefTypeLoyaltyPrefItem) : gettype($commonPrefTypeLoyaltyPrefItem)), __LINE__);
            }
        }
        $this->LoyaltyPref = $loyaltyPref;
        return $this;
    }
    /**
     * Add item to LoyaltyPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setSpecRequestPref(array $specRequestPref = array())
    {
        foreach ($specRequestPref as $commonPrefTypeSpecRequestPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecRequestPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeSpecRequestPrefItem) ? get_class($commonPrefTypeSpecRequestPrefItem) : gettype($commonPrefTypeSpecRequestPrefItem)), __LINE__);
            }
        }
        $this->SpecRequestPref = $specRequestPref;
        return $this;
    }
    /**
     * Add item to SpecRequestPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
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
     * Get RelatedTravelerPref value
     * @return mixed[]|null
     */
    public function getRelatedTravelerPref()
    {
        return $this->RelatedTravelerPref;
    }
    /**
     * Set RelatedTravelerPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $relatedTravelerPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setRelatedTravelerPref(array $relatedTravelerPref = array())
    {
        foreach ($relatedTravelerPref as $commonPrefTypeRelatedTravelerPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RelatedTravelerPref property can only contain items of anyType, "%s" given', is_object($commonPrefTypeRelatedTravelerPrefItem) ? get_class($commonPrefTypeRelatedTravelerPrefItem) : gettype($commonPrefTypeRelatedTravelerPrefItem)), __LINE__);
            }
        }
        $this->RelatedTravelerPref = $relatedTravelerPref;
        return $this;
    }
    /**
     * Add item to RelatedTravelerPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function addToRelatedTravelerPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RelatedTravelerPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RelatedTravelerPref[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommonPrefType
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

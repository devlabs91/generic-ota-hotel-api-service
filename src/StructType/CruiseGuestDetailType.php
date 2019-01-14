<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseGuestDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the detail data associated with the guest for a particular sailing.
 * @subpackage Structs
 */
class CruiseGuestDetailType extends AbstractStructBase
{
    /**
     * The SelectedFareCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SelectedFareCode[]
     */
    public $SelectedFareCode;
    /**
     * The ContactInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfo[]
     */
    public $ContactInfo;
    /**
     * The GuestTransportation
     * Meta informations extracted from the WSDL
     * - documentation: Guest's mode of transportation.
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $GuestTransportation;
    /**
     * The LoyaltyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyInfo[]
     */
    public $LoyaltyInfo;
    /**
     * The LinkedTraveler
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LinkedTraveler[]
     */
    public $LinkedTraveler;
    /**
     * The TravelDocument
     * Meta informations extracted from the WSDL
     * - documentation: Used for passport, visa, other travel type documents.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TravelDocument;
    /**
     * The SelectedDining
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SelectedDining[]
     */
    public $SelectedDining;
    /**
     * The SelectedInsurance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SelectedInsurance[]
     */
    public $SelectedInsurance;
    /**
     * The SelectedOptions
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a gift, amenity, or other options (e.g., include gratuity).
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SelectedOptions;
    /**
     * The SelectedPackages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackages
     */
    public $SelectedPackages;
    /**
     * The SelectedSpecialServices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSpecialServices
     */
    public $SelectedSpecialServices;
    /**
     * The AirAccommodations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AirAccommodations
     */
    public $AirAccommodations;
    /**
     * The CruiseDocument
     * Meta informations extracted from the WSDL
     * - documentation: Provides information on requested documents, the type of document, method of distribution, and associated costs.
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CruiseDocument;
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Profile informations at the guest level.
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Profiles;
    /**
     * The GuestExistsIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, guest already exists for this booking. When false, the guest is being added for this booking.
     * - use: optional
     * @var bool
     */
    public $GuestExistsIndicator;
    /**
     * The RepeatGuestIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, the customer is a repeat guest. When false, the customer is not a repeat guest.
     * - use: optional
     * @var bool
     */
    public $RepeatGuestIndicator;
    /**
     * Constructor method for CruiseGuestDetailType
     * @uses CruiseGuestDetailType::setSelectedFareCode()
     * @uses CruiseGuestDetailType::setContactInfo()
     * @uses CruiseGuestDetailType::setGuestTransportation()
     * @uses CruiseGuestDetailType::setLoyaltyInfo()
     * @uses CruiseGuestDetailType::setLinkedTraveler()
     * @uses CruiseGuestDetailType::setTravelDocument()
     * @uses CruiseGuestDetailType::setSelectedDining()
     * @uses CruiseGuestDetailType::setSelectedInsurance()
     * @uses CruiseGuestDetailType::setSelectedOptions()
     * @uses CruiseGuestDetailType::setSelectedPackages()
     * @uses CruiseGuestDetailType::setSelectedSpecialServices()
     * @uses CruiseGuestDetailType::setAirAccommodations()
     * @uses CruiseGuestDetailType::setCruiseDocument()
     * @uses CruiseGuestDetailType::setProfiles()
     * @uses CruiseGuestDetailType::setGuestExistsIndicator()
     * @uses CruiseGuestDetailType::setRepeatGuestIndicator()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedFareCode[] $selectedFareCode
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfo[] $contactInfo
     * @param mixed[] $guestTransportation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyInfo[] $loyaltyInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LinkedTraveler[] $linkedTraveler
     * @param mixed[] $travelDocument
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedDining[] $selectedDining
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedInsurance[] $selectedInsurance
     * @param mixed[] $selectedOptions
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackages $selectedPackages
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSpecialServices $selectedSpecialServices
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirAccommodations $airAccommodations
     * @param mixed[] $cruiseDocument
     * @param mixed[] $profiles
     * @param bool $guestExistsIndicator
     * @param bool $repeatGuestIndicator
     */
    public function __construct(array $selectedFareCode = array(), array $contactInfo = array(), array $guestTransportation = array(), array $loyaltyInfo = array(), array $linkedTraveler = array(), array $travelDocument = array(), array $selectedDining = array(), array $selectedInsurance = array(), array $selectedOptions = array(), \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackages $selectedPackages = null, \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSpecialServices $selectedSpecialServices = null, \Devlabs91\GenericOtaHotelApiService\StructType\AirAccommodations $airAccommodations = null, array $cruiseDocument = array(), array $profiles = array(), $guestExistsIndicator = null, $repeatGuestIndicator = null)
    {
        $this
            ->setSelectedFareCode($selectedFareCode)
            ->setContactInfo($contactInfo)
            ->setGuestTransportation($guestTransportation)
            ->setLoyaltyInfo($loyaltyInfo)
            ->setLinkedTraveler($linkedTraveler)
            ->setTravelDocument($travelDocument)
            ->setSelectedDining($selectedDining)
            ->setSelectedInsurance($selectedInsurance)
            ->setSelectedOptions($selectedOptions)
            ->setSelectedPackages($selectedPackages)
            ->setSelectedSpecialServices($selectedSpecialServices)
            ->setAirAccommodations($airAccommodations)
            ->setCruiseDocument($cruiseDocument)
            ->setProfiles($profiles)
            ->setGuestExistsIndicator($guestExistsIndicator)
            ->setRepeatGuestIndicator($repeatGuestIndicator);
    }
    /**
     * Get SelectedFareCode value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedFareCode[]|null
     */
    public function getSelectedFareCode()
    {
        return $this->SelectedFareCode;
    }
    /**
     * Set SelectedFareCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedFareCode[] $selectedFareCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setSelectedFareCode(array $selectedFareCode = array())
    {
        foreach ($selectedFareCode as $cruiseGuestDetailTypeSelectedFareCodeItem) {
            // validation for constraint: itemType
            if (!$cruiseGuestDetailTypeSelectedFareCodeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedFareCode) {
                throw new \InvalidArgumentException(sprintf('The SelectedFareCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedFareCode, "%s" given', is_object($cruiseGuestDetailTypeSelectedFareCodeItem) ? get_class($cruiseGuestDetailTypeSelectedFareCodeItem) : gettype($cruiseGuestDetailTypeSelectedFareCodeItem)), __LINE__);
            }
        }
        $this->SelectedFareCode = $selectedFareCode;
        return $this;
    }
    /**
     * Add item to SelectedFareCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedFareCode $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToSelectedFareCode(\Devlabs91\GenericOtaHotelApiService\StructType\SelectedFareCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedFareCode) {
            throw new \InvalidArgumentException(sprintf('The SelectedFareCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedFareCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectedFareCode[] = $item;
        return $this;
    }
    /**
     * Get ContactInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfo[]|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }
    /**
     * Set ContactInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfo[] $contactInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setContactInfo(array $contactInfo = array())
    {
        foreach ($contactInfo as $cruiseGuestDetailTypeContactInfoItem) {
            // validation for constraint: itemType
            if (!$cruiseGuestDetailTypeContactInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfo) {
                throw new \InvalidArgumentException(sprintf('The ContactInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfo, "%s" given', is_object($cruiseGuestDetailTypeContactInfoItem) ? get_class($cruiseGuestDetailTypeContactInfoItem) : gettype($cruiseGuestDetailTypeContactInfoItem)), __LINE__);
            }
        }
        $this->ContactInfo = $contactInfo;
        return $this;
    }
    /**
     * Add item to ContactInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToContactInfo(\Devlabs91\GenericOtaHotelApiService\StructType\ContactInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfo) {
            throw new \InvalidArgumentException(sprintf('The ContactInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContactInfo[] = $item;
        return $this;
    }
    /**
     * Get GuestTransportation value
     * @return mixed[]|null
     */
    public function getGuestTransportation()
    {
        return $this->GuestTransportation;
    }
    /**
     * Set GuestTransportation value
     * @throws \InvalidArgumentException
     * @param mixed[] $guestTransportation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setGuestTransportation(array $guestTransportation = array())
    {
        foreach ($guestTransportation as $cruiseGuestDetailTypeGuestTransportationItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The GuestTransportation property can only contain items of anyType, "%s" given', is_object($cruiseGuestDetailTypeGuestTransportationItem) ? get_class($cruiseGuestDetailTypeGuestTransportationItem) : gettype($cruiseGuestDetailTypeGuestTransportationItem)), __LINE__);
            }
        }
        $this->GuestTransportation = $guestTransportation;
        return $this;
    }
    /**
     * Add item to GuestTransportation value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToGuestTransportation($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The GuestTransportation property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestTransportation[] = $item;
        return $this;
    }
    /**
     * Get LoyaltyInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyInfo[]|null
     */
    public function getLoyaltyInfo()
    {
        return $this->LoyaltyInfo;
    }
    /**
     * Set LoyaltyInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyInfo[] $loyaltyInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setLoyaltyInfo(array $loyaltyInfo = array())
    {
        foreach ($loyaltyInfo as $cruiseGuestDetailTypeLoyaltyInfoItem) {
            // validation for constraint: itemType
            if (!$cruiseGuestDetailTypeLoyaltyInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyInfo) {
                throw new \InvalidArgumentException(sprintf('The LoyaltyInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyInfo, "%s" given', is_object($cruiseGuestDetailTypeLoyaltyInfoItem) ? get_class($cruiseGuestDetailTypeLoyaltyInfoItem) : gettype($cruiseGuestDetailTypeLoyaltyInfoItem)), __LINE__);
            }
        }
        $this->LoyaltyInfo = $loyaltyInfo;
        return $this;
    }
    /**
     * Add item to LoyaltyInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToLoyaltyInfo(\Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyInfo) {
            throw new \InvalidArgumentException(sprintf('The LoyaltyInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LoyaltyInfo[] = $item;
        return $this;
    }
    /**
     * Get LinkedTraveler value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LinkedTraveler[]|null
     */
    public function getLinkedTraveler()
    {
        return $this->LinkedTraveler;
    }
    /**
     * Set LinkedTraveler value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LinkedTraveler[] $linkedTraveler
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setLinkedTraveler(array $linkedTraveler = array())
    {
        foreach ($linkedTraveler as $cruiseGuestDetailTypeLinkedTravelerItem) {
            // validation for constraint: itemType
            if (!$cruiseGuestDetailTypeLinkedTravelerItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LinkedTraveler) {
                throw new \InvalidArgumentException(sprintf('The LinkedTraveler property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LinkedTraveler, "%s" given', is_object($cruiseGuestDetailTypeLinkedTravelerItem) ? get_class($cruiseGuestDetailTypeLinkedTravelerItem) : gettype($cruiseGuestDetailTypeLinkedTravelerItem)), __LINE__);
            }
        }
        $this->LinkedTraveler = $linkedTraveler;
        return $this;
    }
    /**
     * Add item to LinkedTraveler value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LinkedTraveler $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToLinkedTraveler(\Devlabs91\GenericOtaHotelApiService\StructType\LinkedTraveler $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LinkedTraveler) {
            throw new \InvalidArgumentException(sprintf('The LinkedTraveler property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LinkedTraveler, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LinkedTraveler[] = $item;
        return $this;
    }
    /**
     * Get TravelDocument value
     * @return mixed[]|null
     */
    public function getTravelDocument()
    {
        return $this->TravelDocument;
    }
    /**
     * Set TravelDocument value
     * @throws \InvalidArgumentException
     * @param mixed[] $travelDocument
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setTravelDocument(array $travelDocument = array())
    {
        foreach ($travelDocument as $cruiseGuestDetailTypeTravelDocumentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TravelDocument property can only contain items of anyType, "%s" given', is_object($cruiseGuestDetailTypeTravelDocumentItem) ? get_class($cruiseGuestDetailTypeTravelDocumentItem) : gettype($cruiseGuestDetailTypeTravelDocumentItem)), __LINE__);
            }
        }
        $this->TravelDocument = $travelDocument;
        return $this;
    }
    /**
     * Add item to TravelDocument value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToTravelDocument($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TravelDocument property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelDocument[] = $item;
        return $this;
    }
    /**
     * Get SelectedDining value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedDining[]|null
     */
    public function getSelectedDining()
    {
        return $this->SelectedDining;
    }
    /**
     * Set SelectedDining value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedDining[] $selectedDining
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setSelectedDining(array $selectedDining = array())
    {
        foreach ($selectedDining as $cruiseGuestDetailTypeSelectedDiningItem) {
            // validation for constraint: itemType
            if (!$cruiseGuestDetailTypeSelectedDiningItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedDining) {
                throw new \InvalidArgumentException(sprintf('The SelectedDining property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedDining, "%s" given', is_object($cruiseGuestDetailTypeSelectedDiningItem) ? get_class($cruiseGuestDetailTypeSelectedDiningItem) : gettype($cruiseGuestDetailTypeSelectedDiningItem)), __LINE__);
            }
        }
        $this->SelectedDining = $selectedDining;
        return $this;
    }
    /**
     * Add item to SelectedDining value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedDining $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToSelectedDining(\Devlabs91\GenericOtaHotelApiService\StructType\SelectedDining $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedDining) {
            throw new \InvalidArgumentException(sprintf('The SelectedDining property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedDining, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectedDining[] = $item;
        return $this;
    }
    /**
     * Get SelectedInsurance value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedInsurance[]|null
     */
    public function getSelectedInsurance()
    {
        return $this->SelectedInsurance;
    }
    /**
     * Set SelectedInsurance value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedInsurance[] $selectedInsurance
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setSelectedInsurance(array $selectedInsurance = array())
    {
        foreach ($selectedInsurance as $cruiseGuestDetailTypeSelectedInsuranceItem) {
            // validation for constraint: itemType
            if (!$cruiseGuestDetailTypeSelectedInsuranceItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedInsurance) {
                throw new \InvalidArgumentException(sprintf('The SelectedInsurance property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedInsurance, "%s" given', is_object($cruiseGuestDetailTypeSelectedInsuranceItem) ? get_class($cruiseGuestDetailTypeSelectedInsuranceItem) : gettype($cruiseGuestDetailTypeSelectedInsuranceItem)), __LINE__);
            }
        }
        $this->SelectedInsurance = $selectedInsurance;
        return $this;
    }
    /**
     * Add item to SelectedInsurance value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedInsurance $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToSelectedInsurance(\Devlabs91\GenericOtaHotelApiService\StructType\SelectedInsurance $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedInsurance) {
            throw new \InvalidArgumentException(sprintf('The SelectedInsurance property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedInsurance, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectedInsurance[] = $item;
        return $this;
    }
    /**
     * Get SelectedOptions value
     * @return mixed[]|null
     */
    public function getSelectedOptions()
    {
        return $this->SelectedOptions;
    }
    /**
     * Set SelectedOptions value
     * @throws \InvalidArgumentException
     * @param mixed[] $selectedOptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setSelectedOptions(array $selectedOptions = array())
    {
        foreach ($selectedOptions as $cruiseGuestDetailTypeSelectedOptionsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SelectedOptions property can only contain items of anyType, "%s" given', is_object($cruiseGuestDetailTypeSelectedOptionsItem) ? get_class($cruiseGuestDetailTypeSelectedOptionsItem) : gettype($cruiseGuestDetailTypeSelectedOptionsItem)), __LINE__);
            }
        }
        $this->SelectedOptions = $selectedOptions;
        return $this;
    }
    /**
     * Add item to SelectedOptions value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToSelectedOptions($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SelectedOptions property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectedOptions[] = $item;
        return $this;
    }
    /**
     * Get SelectedPackages value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackages|null
     */
    public function getSelectedPackages()
    {
        return $this->SelectedPackages;
    }
    /**
     * Set SelectedPackages value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackages $selectedPackages
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setSelectedPackages(\Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackages $selectedPackages = null)
    {
        $this->SelectedPackages = $selectedPackages;
        return $this;
    }
    /**
     * Get SelectedSpecialServices value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSpecialServices|null
     */
    public function getSelectedSpecialServices()
    {
        return $this->SelectedSpecialServices;
    }
    /**
     * Set SelectedSpecialServices value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSpecialServices $selectedSpecialServices
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setSelectedSpecialServices(\Devlabs91\GenericOtaHotelApiService\StructType\SelectedSpecialServices $selectedSpecialServices = null)
    {
        $this->SelectedSpecialServices = $selectedSpecialServices;
        return $this;
    }
    /**
     * Get AirAccommodations value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirAccommodations|null
     */
    public function getAirAccommodations()
    {
        return $this->AirAccommodations;
    }
    /**
     * Set AirAccommodations value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirAccommodations $airAccommodations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setAirAccommodations(\Devlabs91\GenericOtaHotelApiService\StructType\AirAccommodations $airAccommodations = null)
    {
        $this->AirAccommodations = $airAccommodations;
        return $this;
    }
    /**
     * Get CruiseDocument value
     * @return mixed[]|null
     */
    public function getCruiseDocument()
    {
        return $this->CruiseDocument;
    }
    /**
     * Set CruiseDocument value
     * @throws \InvalidArgumentException
     * @param mixed[] $cruiseDocument
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setCruiseDocument(array $cruiseDocument = array())
    {
        foreach ($cruiseDocument as $cruiseGuestDetailTypeCruiseDocumentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CruiseDocument property can only contain items of anyType, "%s" given', is_object($cruiseGuestDetailTypeCruiseDocumentItem) ? get_class($cruiseGuestDetailTypeCruiseDocumentItem) : gettype($cruiseGuestDetailTypeCruiseDocumentItem)), __LINE__);
            }
        }
        $this->CruiseDocument = $cruiseDocument;
        return $this;
    }
    /**
     * Add item to CruiseDocument value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToCruiseDocument($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CruiseDocument property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CruiseDocument[] = $item;
        return $this;
    }
    /**
     * Get Profiles value
     * @return mixed[]|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @throws \InvalidArgumentException
     * @param mixed[] $profiles
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setProfiles(array $profiles = array())
    {
        foreach ($profiles as $cruiseGuestDetailTypeProfilesItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Profiles property can only contain items of anyType, "%s" given', is_object($cruiseGuestDetailTypeProfilesItem) ? get_class($cruiseGuestDetailTypeProfilesItem) : gettype($cruiseGuestDetailTypeProfilesItem)), __LINE__);
            }
        }
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Add item to Profiles value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function addToProfiles($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Profiles property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Profiles[] = $item;
        return $this;
    }
    /**
     * Get GuestExistsIndicator value
     * @return bool|null
     */
    public function getGuestExistsIndicator()
    {
        return $this->GuestExistsIndicator;
    }
    /**
     * Set GuestExistsIndicator value
     * @param bool $guestExistsIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setGuestExistsIndicator($guestExistsIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($guestExistsIndicator) && !is_bool($guestExistsIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guestExistsIndicator)), __LINE__);
        }
        $this->GuestExistsIndicator = $guestExistsIndicator;
        return $this;
    }
    /**
     * Get RepeatGuestIndicator value
     * @return bool|null
     */
    public function getRepeatGuestIndicator()
    {
        return $this->RepeatGuestIndicator;
    }
    /**
     * Set RepeatGuestIndicator value
     * @param bool $repeatGuestIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
     */
    public function setRepeatGuestIndicator($repeatGuestIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($repeatGuestIndicator) && !is_bool($repeatGuestIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($repeatGuestIndicator)), __LINE__);
        }
        $this->RepeatGuestIndicator = $repeatGuestIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestDetailType
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

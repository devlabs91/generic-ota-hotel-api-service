<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccommodationDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides accommodation location, dates and classifications
 * @subpackage Structs
 */
class AccommodationDetailType extends AbstractStructBase
{
    /**
     * The Property
     * @var mixed
     */
    public $Property;
    /**
     * The Resort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Resort;
    /**
     * The AccommodationClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AccommodationClass;
    /**
     * The FacilityChoices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $FacilityChoices;
    /**
     * The SourceIdentification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $SourceIdentification;
    /**
     * The ContentInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $ContentInfo;
    /**
     * The PackageID
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PackageID;
    /**
     * The MinChildAge
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MinChildAge;
    /**
     * The MaxChildAge
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MaxChildAge;
    /**
     * The BaseMealPlan
     * Meta informations extracted from the WSDL
     * - documentation: This is the meal plan that is included in the package price.
     * - use: optional
     * @var string
     */
    public $BaseMealPlan;
    /**
     * The BedQuantity
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $BedQuantity;
    /**
     * The TravelOKFlag
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate whether or not the travel associated with the package is available with this accommodation.
     * - use: optional
     * @var bool
     */
    public $TravelOKFlag;
    /**
     * Constructor method for AccommodationDetailType
     * @uses AccommodationDetailType::setProperty()
     * @uses AccommodationDetailType::setResort()
     * @uses AccommodationDetailType::setAccommodationClass()
     * @uses AccommodationDetailType::setFacilityChoices()
     * @uses AccommodationDetailType::setSourceIdentification()
     * @uses AccommodationDetailType::setContentInfo()
     * @uses AccommodationDetailType::setPackageID()
     * @uses AccommodationDetailType::setMinChildAge()
     * @uses AccommodationDetailType::setMaxChildAge()
     * @uses AccommodationDetailType::setBaseMealPlan()
     * @uses AccommodationDetailType::setBedQuantity()
     * @uses AccommodationDetailType::setTravelOKFlag()
     * @param mixed $property
     * @param mixed $resort
     * @param mixed $accommodationClass
     * @param mixed $facilityChoices
     * @param mixed $sourceIdentification
     * @param mixed $contentInfo
     * @param string $packageID
     * @param string $minChildAge
     * @param string $maxChildAge
     * @param string $baseMealPlan
     * @param string $bedQuantity
     * @param bool $travelOKFlag
     */
    public function __construct($property = null, $resort = null, $accommodationClass = null, $facilityChoices = null, $sourceIdentification = null, $contentInfo = null, $packageID = null, $minChildAge = null, $maxChildAge = null, $baseMealPlan = null, $bedQuantity = null, $travelOKFlag = null)
    {
        $this
            ->setProperty($property)
            ->setResort($resort)
            ->setAccommodationClass($accommodationClass)
            ->setFacilityChoices($facilityChoices)
            ->setSourceIdentification($sourceIdentification)
            ->setContentInfo($contentInfo)
            ->setPackageID($packageID)
            ->setMinChildAge($minChildAge)
            ->setMaxChildAge($maxChildAge)
            ->setBaseMealPlan($baseMealPlan)
            ->setBedQuantity($bedQuantity)
            ->setTravelOKFlag($travelOKFlag);
    }
    /**
     * Get Property value
     * @return mixed|null
     */
    public function getProperty()
    {
        return $this->Property;
    }
    /**
     * Set Property value
     * @param mixed $property
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setProperty($property = null)
    {
        $this->Property = $property;
        return $this;
    }
    /**
     * Get Resort value
     * @return mixed|null
     */
    public function getResort()
    {
        return $this->Resort;
    }
    /**
     * Set Resort value
     * @param mixed $resort
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setResort($resort = null)
    {
        $this->Resort = $resort;
        return $this;
    }
    /**
     * Get AccommodationClass value
     * @return mixed|null
     */
    public function getAccommodationClass()
    {
        return $this->AccommodationClass;
    }
    /**
     * Set AccommodationClass value
     * @param mixed $accommodationClass
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setAccommodationClass($accommodationClass = null)
    {
        $this->AccommodationClass = $accommodationClass;
        return $this;
    }
    /**
     * Get FacilityChoices value
     * @return mixed|null
     */
    public function getFacilityChoices()
    {
        return $this->FacilityChoices;
    }
    /**
     * Set FacilityChoices value
     * @param mixed $facilityChoices
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setFacilityChoices($facilityChoices = null)
    {
        $this->FacilityChoices = $facilityChoices;
        return $this;
    }
    /**
     * Get SourceIdentification value
     * @return mixed|null
     */
    public function getSourceIdentification()
    {
        return $this->SourceIdentification;
    }
    /**
     * Set SourceIdentification value
     * @param mixed $sourceIdentification
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setSourceIdentification($sourceIdentification = null)
    {
        $this->SourceIdentification = $sourceIdentification;
        return $this;
    }
    /**
     * Get ContentInfo value
     * @return mixed|null
     */
    public function getContentInfo()
    {
        return $this->ContentInfo;
    }
    /**
     * Set ContentInfo value
     * @param mixed $contentInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setContentInfo($contentInfo = null)
    {
        $this->ContentInfo = $contentInfo;
        return $this;
    }
    /**
     * Get PackageID value
     * @return string|null
     */
    public function getPackageID()
    {
        return $this->PackageID;
    }
    /**
     * Set PackageID value
     * @param string $packageID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setPackageID($packageID = null)
    {
        // validation for constraint: string
        if (!is_null($packageID) && !is_string($packageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageID)), __LINE__);
        }
        $this->PackageID = $packageID;
        return $this;
    }
    /**
     * Get MinChildAge value
     * @return string|null
     */
    public function getMinChildAge()
    {
        return $this->MinChildAge;
    }
    /**
     * Set MinChildAge value
     * @param string $minChildAge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setMinChildAge($minChildAge = null)
    {
        // validation for constraint: string
        if (!is_null($minChildAge) && !is_string($minChildAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minChildAge)), __LINE__);
        }
        $this->MinChildAge = $minChildAge;
        return $this;
    }
    /**
     * Get MaxChildAge value
     * @return string|null
     */
    public function getMaxChildAge()
    {
        return $this->MaxChildAge;
    }
    /**
     * Set MaxChildAge value
     * @param string $maxChildAge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setMaxChildAge($maxChildAge = null)
    {
        // validation for constraint: string
        if (!is_null($maxChildAge) && !is_string($maxChildAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxChildAge)), __LINE__);
        }
        $this->MaxChildAge = $maxChildAge;
        return $this;
    }
    /**
     * Get BaseMealPlan value
     * @return string|null
     */
    public function getBaseMealPlan()
    {
        return $this->BaseMealPlan;
    }
    /**
     * Set BaseMealPlan value
     * @param string $baseMealPlan
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setBaseMealPlan($baseMealPlan = null)
    {
        // validation for constraint: string
        if (!is_null($baseMealPlan) && !is_string($baseMealPlan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baseMealPlan)), __LINE__);
        }
        $this->BaseMealPlan = $baseMealPlan;
        return $this;
    }
    /**
     * Get BedQuantity value
     * @return string|null
     */
    public function getBedQuantity()
    {
        return $this->BedQuantity;
    }
    /**
     * Set BedQuantity value
     * @param string $bedQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setBedQuantity($bedQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($bedQuantity) && !is_string($bedQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bedQuantity)), __LINE__);
        }
        $this->BedQuantity = $bedQuantity;
        return $this;
    }
    /**
     * Get TravelOKFlag value
     * @return bool|null
     */
    public function getTravelOKFlag()
    {
        return $this->TravelOKFlag;
    }
    /**
     * Set TravelOKFlag value
     * @param bool $travelOKFlag
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setTravelOKFlag($travelOKFlag = null)
    {
        // validation for constraint: boolean
        if (!is_null($travelOKFlag) && !is_bool($travelOKFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($travelOKFlag)), __LINE__);
        }
        $this->TravelOKFlag = $travelOKFlag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
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

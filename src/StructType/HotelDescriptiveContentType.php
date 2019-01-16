<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelDescriptiveContentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The HotelDescriptiveContent element contains the descriptive information about a hotel property. | UnitOfMeasureGroup should not have been used here. The only attribute needed is UnitOfMeasure. Our intent is to remove
 * UnitOfMeasureQuantity in a future release. | Used to define the lifespan of the hotel content.
 * @subpackage Structs
 */
class HotelDescriptiveContentType extends AbstractStructBase
{
    /**
     * The DestinationSystemsCode
     * Meta informations extracted from the WSDL
     * - documentation: A collection of destination systems codes.
     * - minOccurs: 0
     * @var mixed
     */
    public $DestinationSystemsCode;
    /**
     * The HotelInfo
     * Meta informations extracted from the WSDL
     * - documentation: Contains descriptive information about a hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $HotelInfo;
    /**
     * The FacilityInfo
     * Meta informations extracted from the WSDL
     * - documentation: Provides information pertaining to the hotel facitilty itself.
     * - minOccurs: 0
     * @var mixed
     */
    public $FacilityInfo;
    /**
     * The Policies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Policies
     */
    public $Policies;
    /**
     * The AreaInfo
     * Meta informations extracted from the WSDL
     * - documentation: Provides information on area attractions, recreations and reference points.
     * - minOccurs: 0
     * @var mixed
     */
    public $AreaInfo;
    /**
     * The AffiliationInfo
     * Meta informations extracted from the WSDL
     * - documentation: Provides information regarding affiliations, loyalty programs and award ratings.
     * - minOccurs: 0
     * @var mixed
     */
    public $AffiliationInfo;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Multimedia information about a collection of multimedia objects.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The ContactInfos
     * Meta informations extracted from the WSDL
     * - documentation: Provides contact information.
     * - minOccurs: 0
     * @var mixed
     */
    public $ContactInfos;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The GDS_Info
     * Meta informations extracted from the WSDL
     * - documentation: This allows for information for GDS's to be specified.
     * - minOccurs: 0
     * @var mixed
     */
    public $GDS_Info;
    /**
     * The Viewerships
     * Meta informations extracted from the WSDL
     * - documentation: Collection for viewerships.
     * - minOccurs: 0
     * @var mixed
     */
    public $Viewerships;
    /**
     * The EffectivePeriods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\EffectivePeriods
     */
    public $EffectivePeriods;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - documentation: Identification of the requested language to be used for the hotel descriptive information. ISO standard for human-readable languages.
     * - use: optional
     * @var string
     */
    public $LanguageCode;
    /**
     * The TimeZone
     * Meta informations extracted from the WSDL
     * - documentation: Describes the local time zone in which the hotel is located. This could include additional information regarding time zones (e.g., Daylight Saving Time observed), a proprietary code, the difference between the local time and GMT.
     * - use: optional
     * @var string
     */
    public $TimeZone;
    /**
     * The DistanceUnitOfMeasureCode
     * Meta informations extracted from the WSDL
     * - documentation: Provides the unit of measure in which distance is provided in this message. Refer to OpenTravel Code List Unit of Measure (UOM).
     * - use: optional
     * @var string
     */
    public $DistanceUnitOfMeasureCode;
    /**
     * The AreaUnitOfMeasureCode
     * Meta informations extracted from the WSDL
     * - documentation: Provides the unit of measure in which area is provided in this message. Refer to OpenTravel Code List Unit of Measure (UOM).
     * - use: optional
     * @var string
     */
    public $AreaUnitOfMeasureCode;
    /**
     * The WeightUnitOfMeasureCode
     * Meta informations extracted from the WSDL
     * - documentation: Provides the unit of measure in which weight is provided in this message. Refer to OpenTravel Code List Unit of Measure (UOM).
     * - use: optional
     * @var string
     */
    public $WeightUnitOfMeasureCode;
    /**
     * Constructor method for HotelDescriptiveContentType
     * @uses HotelDescriptiveContentType::setDestinationSystemsCode()
     * @uses HotelDescriptiveContentType::setHotelInfo()
     * @uses HotelDescriptiveContentType::setFacilityInfo()
     * @uses HotelDescriptiveContentType::setPolicies()
     * @uses HotelDescriptiveContentType::setAreaInfo()
     * @uses HotelDescriptiveContentType::setAffiliationInfo()
     * @uses HotelDescriptiveContentType::setMultimediaDescriptions()
     * @uses HotelDescriptiveContentType::setContactInfos()
     * @uses HotelDescriptiveContentType::setTPA_Extensions()
     * @uses HotelDescriptiveContentType::setGDS_Info()
     * @uses HotelDescriptiveContentType::setViewerships()
     * @uses HotelDescriptiveContentType::setEffectivePeriods()
     * @uses HotelDescriptiveContentType::setLanguageCode()
     * @uses HotelDescriptiveContentType::setTimeZone()
     * @uses HotelDescriptiveContentType::setDistanceUnitOfMeasureCode()
     * @uses HotelDescriptiveContentType::setAreaUnitOfMeasureCode()
     * @uses HotelDescriptiveContentType::setWeightUnitOfMeasureCode()
     * @param mixed $destinationSystemsCode
     * @param mixed $hotelInfo
     * @param mixed $facilityInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Policies $policies
     * @param mixed $areaInfo
     * @param mixed $affiliationInfo
     * @param mixed $multimediaDescriptions
     * @param mixed $contactInfos
     * @param mixed $tPA_Extensions
     * @param mixed $gDS_Info
     * @param mixed $viewerships
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\EffectivePeriods $effectivePeriods
     * @param string $languageCode
     * @param string $timeZone
     * @param string $distanceUnitOfMeasureCode
     * @param string $areaUnitOfMeasureCode
     * @param string $weightUnitOfMeasureCode
     */
    public function __construct($destinationSystemsCode = null, $hotelInfo = null, $facilityInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\Policies $policies = null, $areaInfo = null, $affiliationInfo = null, $multimediaDescriptions = null, $contactInfos = null, $tPA_Extensions = null, $gDS_Info = null, $viewerships = null, \Devlabs91\GenericOtaHotelApiService\StructType\EffectivePeriods $effectivePeriods = null, $languageCode = null, $timeZone = null, $distanceUnitOfMeasureCode = null, $areaUnitOfMeasureCode = null, $weightUnitOfMeasureCode = null)
    {
        $this
            ->setDestinationSystemsCode($destinationSystemsCode)
            ->setHotelInfo($hotelInfo)
            ->setFacilityInfo($facilityInfo)
            ->setPolicies($policies)
            ->setAreaInfo($areaInfo)
            ->setAffiliationInfo($affiliationInfo)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setContactInfos($contactInfos)
            ->setTPA_Extensions($tPA_Extensions)
            ->setGDS_Info($gDS_Info)
            ->setViewerships($viewerships)
            ->setEffectivePeriods($effectivePeriods)
            ->setLanguageCode($languageCode)
            ->setTimeZone($timeZone)
            ->setDistanceUnitOfMeasureCode($distanceUnitOfMeasureCode)
            ->setAreaUnitOfMeasureCode($areaUnitOfMeasureCode)
            ->setWeightUnitOfMeasureCode($weightUnitOfMeasureCode);
    }
    /**
     * Get DestinationSystemsCode value
     * @return mixed|null
     */
    public function getDestinationSystemsCode()
    {
        return $this->DestinationSystemsCode;
    }
    /**
     * Set DestinationSystemsCode value
     * @param mixed $destinationSystemsCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setDestinationSystemsCode($destinationSystemsCode = null)
    {
        $this->DestinationSystemsCode = $destinationSystemsCode;
        return $this;
    }
    /**
     * Get HotelInfo value
     * @return mixed|null
     */
    public function getHotelInfo()
    {
        return $this->HotelInfo;
    }
    /**
     * Set HotelInfo value
     * @param mixed $hotelInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setHotelInfo($hotelInfo = null)
    {
        $this->HotelInfo = $hotelInfo;
        return $this;
    }
    /**
     * Get FacilityInfo value
     * @return mixed|null
     */
    public function getFacilityInfo()
    {
        return $this->FacilityInfo;
    }
    /**
     * Set FacilityInfo value
     * @param mixed $facilityInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setFacilityInfo($facilityInfo = null)
    {
        $this->FacilityInfo = $facilityInfo;
        return $this;
    }
    /**
     * Get Policies value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policies|null
     */
    public function getPolicies()
    {
        return $this->Policies;
    }
    /**
     * Set Policies value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Policies $policies
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setPolicies(\Devlabs91\GenericOtaHotelApiService\StructType\Policies $policies = null)
    {
        $this->Policies = $policies;
        return $this;
    }
    /**
     * Get AreaInfo value
     * @return mixed|null
     */
    public function getAreaInfo()
    {
        return $this->AreaInfo;
    }
    /**
     * Set AreaInfo value
     * @param mixed $areaInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setAreaInfo($areaInfo = null)
    {
        $this->AreaInfo = $areaInfo;
        return $this;
    }
    /**
     * Get AffiliationInfo value
     * @return mixed|null
     */
    public function getAffiliationInfo()
    {
        return $this->AffiliationInfo;
    }
    /**
     * Set AffiliationInfo value
     * @param mixed $affiliationInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setAffiliationInfo($affiliationInfo = null)
    {
        $this->AffiliationInfo = $affiliationInfo;
        return $this;
    }
    /**
     * Get MultimediaDescriptions value
     * @return mixed|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param mixed $multimediaDescriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get ContactInfos value
     * @return mixed|null
     */
    public function getContactInfos()
    {
        return $this->ContactInfos;
    }
    /**
     * Set ContactInfos value
     * @param mixed $contactInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setContactInfos($contactInfos = null)
    {
        $this->ContactInfos = $contactInfos;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get GDS_Info value
     * @return mixed|null
     */
    public function getGDS_Info()
    {
        return $this->GDS_Info;
    }
    /**
     * Set GDS_Info value
     * @param mixed $gDS_Info
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setGDS_Info($gDS_Info = null)
    {
        $this->GDS_Info = $gDS_Info;
        return $this;
    }
    /**
     * Get Viewerships value
     * @return mixed|null
     */
    public function getViewerships()
    {
        return $this->Viewerships;
    }
    /**
     * Set Viewerships value
     * @param mixed $viewerships
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setViewerships($viewerships = null)
    {
        $this->Viewerships = $viewerships;
        return $this;
    }
    /**
     * Get EffectivePeriods value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EffectivePeriods|null
     */
    public function getEffectivePeriods()
    {
        return $this->EffectivePeriods;
    }
    /**
     * Set EffectivePeriods value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\EffectivePeriods $effectivePeriods
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setEffectivePeriods(\Devlabs91\GenericOtaHotelApiService\StructType\EffectivePeriods $effectivePeriods = null)
    {
        $this->EffectivePeriods = $effectivePeriods;
        return $this;
    }
    /**
     * Get LanguageCode value
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        return $this;
    }
    /**
     * Get TimeZone value
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param string $timeZone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setTimeZone($timeZone = null)
    {
        // validation for constraint: string
        if (!is_null($timeZone) && !is_string($timeZone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeZone)), __LINE__);
        }
        $this->TimeZone = $timeZone;
        return $this;
    }
    /**
     * Get DistanceUnitOfMeasureCode value
     * @return string|null
     */
    public function getDistanceUnitOfMeasureCode()
    {
        return $this->DistanceUnitOfMeasureCode;
    }
    /**
     * Set DistanceUnitOfMeasureCode value
     * @param string $distanceUnitOfMeasureCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setDistanceUnitOfMeasureCode($distanceUnitOfMeasureCode = null)
    {
        // validation for constraint: string
        if (!is_null($distanceUnitOfMeasureCode) && !is_string($distanceUnitOfMeasureCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distanceUnitOfMeasureCode)), __LINE__);
        }
        $this->DistanceUnitOfMeasureCode = $distanceUnitOfMeasureCode;
        return $this;
    }
    /**
     * Get AreaUnitOfMeasureCode value
     * @return string|null
     */
    public function getAreaUnitOfMeasureCode()
    {
        return $this->AreaUnitOfMeasureCode;
    }
    /**
     * Set AreaUnitOfMeasureCode value
     * @param string $areaUnitOfMeasureCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setAreaUnitOfMeasureCode($areaUnitOfMeasureCode = null)
    {
        // validation for constraint: string
        if (!is_null($areaUnitOfMeasureCode) && !is_string($areaUnitOfMeasureCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($areaUnitOfMeasureCode)), __LINE__);
        }
        $this->AreaUnitOfMeasureCode = $areaUnitOfMeasureCode;
        return $this;
    }
    /**
     * Get WeightUnitOfMeasureCode value
     * @return string|null
     */
    public function getWeightUnitOfMeasureCode()
    {
        return $this->WeightUnitOfMeasureCode;
    }
    /**
     * Set WeightUnitOfMeasureCode value
     * @param string $weightUnitOfMeasureCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setWeightUnitOfMeasureCode($weightUnitOfMeasureCode = null)
    {
        // validation for constraint: string
        if (!is_null($weightUnitOfMeasureCode) && !is_string($weightUnitOfMeasureCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($weightUnitOfMeasureCode)), __LINE__);
        }
        $this->WeightUnitOfMeasureCode = $weightUnitOfMeasureCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
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

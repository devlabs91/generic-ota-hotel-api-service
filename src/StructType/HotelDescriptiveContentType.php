<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelDescriptiveContentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The HotelDescriptiveContent element contains the descriptive information about a hotel property. | UnitOfMeasureGroup should not have been used here. The only attribute needed is UnitOfMeasure. Our intent is to remove
 * UnitOfMeasureQuantity in a future release.
 * @subpackage Structs
 */
class HotelDescriptiveContentType extends AbstractStructBase
{
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - documentation: Identification of the requested language to be used for the hotel descriptive information. ISO standard for human-readable languages.
     * - use: required
     * @var string
     */
    public $LanguageCode;
    /**
     * The DestinationSystemsCode
     * Meta informations extracted from the WSDL
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
     * - minOccurs: 0
     * @var mixed
     */
    public $FacilityInfo;
    /**
     * The Policies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Policies;
    /**
     * The AreaInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AreaInfo;
    /**
     * The AffiliationInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AffiliationInfo;
    /**
     * The MultimediaObjects
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaObjects;
    /**
     * The ContactInfos
     * Meta informations extracted from the WSDL
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
     * The TimeZone
     * Meta informations extracted from the WSDL
     * - documentation: Describes the local time zone in which the hotel is located. This could include additional information regarding time zones (e.g. daylight savings observed), a proprietary code, the difference between the local time and GMT, etc.
     * - use: optional
     * @var string
     */
    public $TimeZone;
    /**
     * Constructor method for HotelDescriptiveContentType
     * @uses HotelDescriptiveContentType::setLanguageCode()
     * @uses HotelDescriptiveContentType::setDestinationSystemsCode()
     * @uses HotelDescriptiveContentType::setHotelInfo()
     * @uses HotelDescriptiveContentType::setFacilityInfo()
     * @uses HotelDescriptiveContentType::setPolicies()
     * @uses HotelDescriptiveContentType::setAreaInfo()
     * @uses HotelDescriptiveContentType::setAffiliationInfo()
     * @uses HotelDescriptiveContentType::setMultimediaObjects()
     * @uses HotelDescriptiveContentType::setContactInfos()
     * @uses HotelDescriptiveContentType::setTPA_Extensions()
     * @uses HotelDescriptiveContentType::setTimeZone()
     * @param string $languageCode
     * @param mixed $destinationSystemsCode
     * @param mixed $hotelInfo
     * @param mixed $facilityInfo
     * @param mixed $policies
     * @param mixed $areaInfo
     * @param mixed $affiliationInfo
     * @param mixed $multimediaObjects
     * @param mixed $contactInfos
     * @param mixed $tPA_Extensions
     * @param string $timeZone
     */
    public function __construct($languageCode = null, $destinationSystemsCode = null, $hotelInfo = null, $facilityInfo = null, $policies = null, $areaInfo = null, $affiliationInfo = null, $multimediaObjects = null, $contactInfos = null, $tPA_Extensions = null, $timeZone = null)
    {
        $this
            ->setLanguageCode($languageCode)
            ->setDestinationSystemsCode($destinationSystemsCode)
            ->setHotelInfo($hotelInfo)
            ->setFacilityInfo($facilityInfo)
            ->setPolicies($policies)
            ->setAreaInfo($areaInfo)
            ->setAffiliationInfo($affiliationInfo)
            ->setMultimediaObjects($multimediaObjects)
            ->setContactInfos($contactInfos)
            ->setTPA_Extensions($tPA_Extensions)
            ->setTimeZone($timeZone);
    }
    /**
     * Get LanguageCode value
     * @return string
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
     * @return mixed|null
     */
    public function getPolicies()
    {
        return $this->Policies;
    }
    /**
     * Set Policies value
     * @param mixed $policies
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setPolicies($policies = null)
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
     * Get MultimediaObjects value
     * @return mixed|null
     */
    public function getMultimediaObjects()
    {
        return $this->MultimediaObjects;
    }
    /**
     * Set MultimediaObjects value
     * @param mixed $multimediaObjects
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelDescriptiveContentType
     */
    public function setMultimediaObjects($multimediaObjects = null)
    {
        $this->MultimediaObjects = $multimediaObjects;
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

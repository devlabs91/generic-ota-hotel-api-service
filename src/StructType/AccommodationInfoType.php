<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccommodationInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides accommodation location, dates and classifications
 * @subpackage Structs
 */
class AccommodationInfoType extends AbstractStructBase
{
    /**
     * The Property
     * Meta informations extracted from the WSDL
     * - documentation: Full name or description plus codes for a property.
     * @var mixed
     */
    public $Property;
    /**
     * The Resort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Resort
     */
    public $Resort;
    /**
     * The AccommodationClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass
     */
    public $AccommodationClass;
    /**
     * The SourceIdentification
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the current source for information on the property.
     * - minOccurs: 0
     * @var mixed
     */
    public $SourceIdentification;
    /**
     * The ContentInfo
     * Meta informations extracted from the WSDL
     * - documentation: Provides a URL source for content information on the property.
     * - minOccurs: 0
     * @var mixed
     */
    public $ContentInfo;
    /**
     * The PackageID
     * Meta informations extracted from the WSDL
     * - documentation: A code identifying a complete package arrangement, in place of individual travel and accommodation codes.
     * - use: optional
     * @var string
     */
    public $PackageID;
    /**
     * The MinChildAge
     * Meta informations extracted from the WSDL
     * - documentation: The minimum age for a child price.
     * - use: optional
     * @var string
     */
    public $MinChildAge;
    /**
     * The MaxChildAge
     * Meta informations extracted from the WSDL
     * - documentation: The maximum age for a child price.
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
     * Constructor method for AccommodationInfoType
     * @uses AccommodationInfoType::setProperty()
     * @uses AccommodationInfoType::setResort()
     * @uses AccommodationInfoType::setAccommodationClass()
     * @uses AccommodationInfoType::setSourceIdentification()
     * @uses AccommodationInfoType::setContentInfo()
     * @uses AccommodationInfoType::setPackageID()
     * @uses AccommodationInfoType::setMinChildAge()
     * @uses AccommodationInfoType::setMaxChildAge()
     * @uses AccommodationInfoType::setBaseMealPlan()
     * @param mixed $property
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Resort $resort
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass $accommodationClass
     * @param mixed $sourceIdentification
     * @param mixed $contentInfo
     * @param string $packageID
     * @param string $minChildAge
     * @param string $maxChildAge
     * @param string $baseMealPlan
     */
    public function __construct($property = null, \Devlabs91\GenericOtaHotelApiService\StructType\Resort $resort = null, \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass $accommodationClass = null, $sourceIdentification = null, $contentInfo = null, $packageID = null, $minChildAge = null, $maxChildAge = null, $baseMealPlan = null)
    {
        $this
            ->setProperty($property)
            ->setResort($resort)
            ->setAccommodationClass($accommodationClass)
            ->setSourceIdentification($sourceIdentification)
            ->setContentInfo($contentInfo)
            ->setPackageID($packageID)
            ->setMinChildAge($minChildAge)
            ->setMaxChildAge($maxChildAge)
            ->setBaseMealPlan($baseMealPlan);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationInfoType
     */
    public function setProperty($property = null)
    {
        $this->Property = $property;
        return $this;
    }
    /**
     * Get Resort value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Resort|null
     */
    public function getResort()
    {
        return $this->Resort;
    }
    /**
     * Set Resort value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Resort $resort
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationInfoType
     */
    public function setResort(\Devlabs91\GenericOtaHotelApiService\StructType\Resort $resort = null)
    {
        $this->Resort = $resort;
        return $this;
    }
    /**
     * Get AccommodationClass value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass|null
     */
    public function getAccommodationClass()
    {
        return $this->AccommodationClass;
    }
    /**
     * Set AccommodationClass value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass $accommodationClass
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationInfoType
     */
    public function setAccommodationClass(\Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass $accommodationClass = null)
    {
        $this->AccommodationClass = $accommodationClass;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationInfoType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationInfoType
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

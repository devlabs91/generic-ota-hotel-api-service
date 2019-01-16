<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefPoint StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Reference Point element allows for a search by proximity to a designated reference point by name. | Used to specify a reference point by a code. | Provides information on the location of an area attraction. | May be used to give
 * further detail on the code or to remove an obsolete item. | Used to specify a reference point by a code. | A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or
 * in a particular implementation.
 * @subpackage Structs
 */
class RefPoint extends RelativePositionType
{
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - documentation: The state or province in which the reference point is located. | The state or province in which the reference point is located.
     * - use: optional
     * @var string
     */
    public $StateProv;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - documentation: The country in which the reference point is located. | The country in which the reference point is located.
     * - use: optional
     * @var string
     */
    public $CountryCode;
    /**
     * The RefPointType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of location being referenced (e.g., Airport, Hotel). Refer to the OpenTravel Code table Index Point Code (IPC).
     * - use: optional
     * @var string
     */
    public $RefPointType;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: The name of the reference point.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the city associated with this reference point.
     * - use: optional
     * @var string
     */
    public $CityName;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Multimedia information about the reference point.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive text that describes the reference point.
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
    /**
     * The RefPointCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: The code for the type of reference point in the proximity of the hotel facility. Refer to OpenTravel Code List Reference Point Category Code (REF).
     * - use: optional
     * @var string
     */
    public $RefPointCategoryCode;
    /**
     * The Proximity
     * Meta informations extracted from the WSDL
     * - documentation: This may be used to indicate the proximity (e.g., closest, second closest) between the reference point and the hotel. This may be used in conjunction with RefPointCategoryCode.
     * - use: optional
     * @var string
     */
    public $Proximity;
    /**
     * The CityCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CityCode;
    /**
     * The RefPointName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the reference point.
     * - use: optional
     * @var string
     */
    public $RefPointName;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether the reference point applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with RefPointCategoryCode.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * Constructor method for RefPoint
     * @uses RefPoint::setStateProv()
     * @uses RefPoint::setCountryCode()
     * @uses RefPoint::setRefPointType()
     * @uses RefPoint::setName()
     * @uses RefPoint::setCityName()
     * @uses RefPoint::setMultimediaDescriptions()
     * @uses RefPoint::setDescriptiveText()
     * @uses RefPoint::setRefPointCategoryCode()
     * @uses RefPoint::setProximity()
     * @uses RefPoint::setCityCode()
     * @uses RefPoint::setRefPointName()
     * @uses RefPoint::setExistsCode()
     * @param string $stateProv
     * @param string $countryCode
     * @param string $refPointType
     * @param string $name
     * @param string $cityName
     * @param mixed $multimediaDescriptions
     * @param string $descriptiveText
     * @param string $refPointCategoryCode
     * @param string $proximity
     * @param string $cityCode
     * @param string $refPointName
     * @param string $existsCode
     */
    public function __construct($stateProv = null, $countryCode = null, $refPointType = null, $name = null, $cityName = null, $multimediaDescriptions = null, $descriptiveText = null, $refPointCategoryCode = null, $proximity = null, $cityCode = null, $refPointName = null, $existsCode = null)
    {
        $this
            ->setStateProv($stateProv)
            ->setCountryCode($countryCode)
            ->setRefPointType($refPointType)
            ->setName($name)
            ->setCityName($cityName)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setDescriptiveText($descriptiveText)
            ->setRefPointCategoryCode($refPointCategoryCode)
            ->setProximity($proximity)
            ->setCityCode($cityCode)
            ->setRefPointName($refPointName)
            ->setExistsCode($existsCode);
    }
    /**
     * Get StateProv value
     * @return string|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param string $stateProv
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setStateProv($stateProv = null)
    {
        // validation for constraint: string
        if (!is_null($stateProv) && !is_string($stateProv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateProv)), __LINE__);
        }
        $this->StateProv = $stateProv;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get RefPointType value
     * @return string|null
     */
    public function getRefPointType()
    {
        return $this->RefPointType;
    }
    /**
     * Set RefPointType value
     * @param string $refPointType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setRefPointType($refPointType = null)
    {
        // validation for constraint: string
        if (!is_null($refPointType) && !is_string($refPointType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refPointType)), __LINE__);
        }
        $this->RefPointType = $refPointType;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get CityName value
     * @return string|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param string $cityName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get DescriptiveText value
     * @return string|null
     */
    public function getDescriptiveText()
    {
        return $this->DescriptiveText;
    }
    /**
     * Set DescriptiveText value
     * @param string $descriptiveText
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setDescriptiveText($descriptiveText = null)
    {
        // validation for constraint: string
        if (!is_null($descriptiveText) && !is_string($descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptiveText)), __LINE__);
        }
        $this->DescriptiveText = $descriptiveText;
        return $this;
    }
    /**
     * Get RefPointCategoryCode value
     * @return string|null
     */
    public function getRefPointCategoryCode()
    {
        return $this->RefPointCategoryCode;
    }
    /**
     * Set RefPointCategoryCode value
     * @param string $refPointCategoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setRefPointCategoryCode($refPointCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($refPointCategoryCode) && !is_string($refPointCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refPointCategoryCode)), __LINE__);
        }
        $this->RefPointCategoryCode = $refPointCategoryCode;
        return $this;
    }
    /**
     * Get Proximity value
     * @return string|null
     */
    public function getProximity()
    {
        return $this->Proximity;
    }
    /**
     * Set Proximity value
     * @param string $proximity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setProximity($proximity = null)
    {
        // validation for constraint: string
        if (!is_null($proximity) && !is_string($proximity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proximity)), __LINE__);
        }
        $this->Proximity = $proximity;
        return $this;
    }
    /**
     * Get CityCode value
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }
    /**
     * Set CityCode value
     * @param string $cityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setCityCode($cityCode = null)
    {
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityCode)), __LINE__);
        }
        $this->CityCode = $cityCode;
        return $this;
    }
    /**
     * Get RefPointName value
     * @return string|null
     */
    public function getRefPointName()
    {
        return $this->RefPointName;
    }
    /**
     * Set RefPointName value
     * @param string $refPointName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setRefPointName($refPointName = null)
    {
        // validation for constraint: string
        if (!is_null($refPointName) && !is_string($refPointName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refPointName)), __LINE__);
        }
        $this->RefPointName = $refPointName;
        return $this;
    }
    /**
     * Get ExistsCode value
     * @return string|null
     */
    public function getExistsCode()
    {
        return $this->ExistsCode;
    }
    /**
     * Set ExistsCode value
     * @param string $existsCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setExistsCode($existsCode = null)
    {
        // validation for constraint: string
        if (!is_null($existsCode) && !is_string($existsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($existsCode)), __LINE__);
        }
        $this->ExistsCode = $existsCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The HotelInfo class that describes general information about the hotel. | Used to provide the opening and closing dates for the hotel. The date that the hotel opened or is going to open is provided in the start attribute. The end
 * attribute may be used to provide a closing date in the event that the hotel has closed or is going to close.
 * @subpackage Structs
 */
class HotelInfoType extends AbstractStructBase
{
    /**
     * The HotelName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelName
     */
    public $HotelName;
    /**
     * The ClosedSeasons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ClosedSeasons
     */
    public $ClosedSeasons;
    /**
     * The RelativePositions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositions
     */
    public $RelativePositions;
    /**
     * The CategoryCodes
     * Meta informations extracted from the WSDL
     * - documentation: Collection of descriptive details about a hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $CategoryCodes;
    /**
     * The Descriptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
     */
    public $Descriptions;
    /**
     * The HotelInfoCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCodes
     */
    public $HotelInfoCodes;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Position
     */
    public $Position;
    /**
     * The Services
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Services
     */
    public $Services;
    /**
     * The WeatherInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\WeatherInfos
     */
    public $WeatherInfos;
    /**
     * The OwnershipManagementInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfos
     */
    public $OwnershipManagementInfos;
    /**
     * The Languages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Languages
     */
    public $Languages;
    /**
     * The WhenBuilt
     * Meta informations extracted from the WSDL
     * - documentation: The date that the hotel facility was built, usually just the year. If a full date is used, it is recommended that the W3C date format be followed.
     * - use: optional
     * @var string
     */
    public $WhenBuilt;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: Indication as to the last time any element supported within this message was updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * The AreaWeather
     * Meta informations extracted from the WSDL
     * - documentation: Description of the weather typical to the hotel facility's area.
     * - use: optional
     * @var string
     */
    public $AreaWeather;
    /**
     * The InterfaceCompliance
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the interface being used by this hotel.
     * - use: optional
     * @var string
     */
    public $InterfaceCompliance;
    /**
     * The PMSSystem
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the Property Management System being used by this hotel.
     * - use: optional
     * @var string
     */
    public $PMSSystem;
    /**
     * The HotelStatus
     * Meta informations extracted from the WSDL
     * - documentation: This is a description of the operating status of the Hotel. This information may support the code in HotelStatusCode.
     * - use: optional
     * @var string
     */
    public $HotelStatus;
    /**
     * The HotelStatusCode
     * Meta informations extracted from the WSDL
     * - documentation: This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening) of the hotels to be returned in the response. Refer to OpenTravel Code List HotelStatusCode.
     * - use: optional
     * @var string
     */
    public $HotelStatusCode;
    /**
     * The TaxID
     * Meta informations extracted from the WSDL
     * - documentation: The tax ID code for the property.
     * - use: optional
     * @var string
     */
    public $TaxID;
    /**
     * The DaylightSavingIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When false, indicates the location does not observe Daylight Saving Time.
     * - use: optional
     * @var bool
     */
    public $DaylightSavingIndicator;
    /**
     * The ISO9000CertifiedInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the hotel indicates they are ISO 9000 certified.
     * - use: optional
     * @var bool
     */
    public $ISO9000CertifiedInd;
    /**
     * Constructor method for HotelInfoType
     * @uses HotelInfoType::setHotelName()
     * @uses HotelInfoType::setClosedSeasons()
     * @uses HotelInfoType::setRelativePositions()
     * @uses HotelInfoType::setCategoryCodes()
     * @uses HotelInfoType::setDescriptions()
     * @uses HotelInfoType::setHotelInfoCodes()
     * @uses HotelInfoType::setPosition()
     * @uses HotelInfoType::setServices()
     * @uses HotelInfoType::setWeatherInfos()
     * @uses HotelInfoType::setOwnershipManagementInfos()
     * @uses HotelInfoType::setLanguages()
     * @uses HotelInfoType::setWhenBuilt()
     * @uses HotelInfoType::setLastUpdated()
     * @uses HotelInfoType::setAreaWeather()
     * @uses HotelInfoType::setInterfaceCompliance()
     * @uses HotelInfoType::setPMSSystem()
     * @uses HotelInfoType::setHotelStatus()
     * @uses HotelInfoType::setHotelStatusCode()
     * @uses HotelInfoType::setTaxID()
     * @uses HotelInfoType::setDaylightSavingIndicator()
     * @uses HotelInfoType::setISO9000CertifiedInd()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelName $hotelName
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ClosedSeasons $closedSeasons
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositions $relativePositions
     * @param mixed $categoryCodes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions $descriptions
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCodes $hotelInfoCodes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Position $position
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Services $services
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\WeatherInfos $weatherInfos
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfos $ownershipManagementInfos
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Languages $languages
     * @param string $whenBuilt
     * @param string $lastUpdated
     * @param string $areaWeather
     * @param string $interfaceCompliance
     * @param string $pMSSystem
     * @param string $hotelStatus
     * @param string $hotelStatusCode
     * @param string $taxID
     * @param bool $daylightSavingIndicator
     * @param bool $iSO9000CertifiedInd
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\HotelName $hotelName = null, \Devlabs91\GenericOtaHotelApiService\StructType\ClosedSeasons $closedSeasons = null, \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositions $relativePositions = null, $categoryCodes = null, \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions $descriptions = null, \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCodes $hotelInfoCodes = null, \Devlabs91\GenericOtaHotelApiService\StructType\Position $position = null, \Devlabs91\GenericOtaHotelApiService\StructType\Services $services = null, \Devlabs91\GenericOtaHotelApiService\StructType\WeatherInfos $weatherInfos = null, \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfos $ownershipManagementInfos = null, \Devlabs91\GenericOtaHotelApiService\StructType\Languages $languages = null, $whenBuilt = null, $lastUpdated = null, $areaWeather = null, $interfaceCompliance = null, $pMSSystem = null, $hotelStatus = null, $hotelStatusCode = null, $taxID = null, $daylightSavingIndicator = null, $iSO9000CertifiedInd = null)
    {
        $this
            ->setHotelName($hotelName)
            ->setClosedSeasons($closedSeasons)
            ->setRelativePositions($relativePositions)
            ->setCategoryCodes($categoryCodes)
            ->setDescriptions($descriptions)
            ->setHotelInfoCodes($hotelInfoCodes)
            ->setPosition($position)
            ->setServices($services)
            ->setWeatherInfos($weatherInfos)
            ->setOwnershipManagementInfos($ownershipManagementInfos)
            ->setLanguages($languages)
            ->setWhenBuilt($whenBuilt)
            ->setLastUpdated($lastUpdated)
            ->setAreaWeather($areaWeather)
            ->setInterfaceCompliance($interfaceCompliance)
            ->setPMSSystem($pMSSystem)
            ->setHotelStatus($hotelStatus)
            ->setHotelStatusCode($hotelStatusCode)
            ->setTaxID($taxID)
            ->setDaylightSavingIndicator($daylightSavingIndicator)
            ->setISO9000CertifiedInd($iSO9000CertifiedInd);
    }
    /**
     * Get HotelName value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelName|null
     */
    public function getHotelName()
    {
        return $this->HotelName;
    }
    /**
     * Set HotelName value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelName $hotelName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setHotelName(\Devlabs91\GenericOtaHotelApiService\StructType\HotelName $hotelName = null)
    {
        $this->HotelName = $hotelName;
        return $this;
    }
    /**
     * Get ClosedSeasons value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ClosedSeasons|null
     */
    public function getClosedSeasons()
    {
        return $this->ClosedSeasons;
    }
    /**
     * Set ClosedSeasons value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ClosedSeasons $closedSeasons
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setClosedSeasons(\Devlabs91\GenericOtaHotelApiService\StructType\ClosedSeasons $closedSeasons = null)
    {
        $this->ClosedSeasons = $closedSeasons;
        return $this;
    }
    /**
     * Get RelativePositions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositions|null
     */
    public function getRelativePositions()
    {
        return $this->RelativePositions;
    }
    /**
     * Set RelativePositions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositions $relativePositions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setRelativePositions(\Devlabs91\GenericOtaHotelApiService\StructType\RelativePositions $relativePositions = null)
    {
        $this->RelativePositions = $relativePositions;
        return $this;
    }
    /**
     * Get CategoryCodes value
     * @return mixed|null
     */
    public function getCategoryCodes()
    {
        return $this->CategoryCodes;
    }
    /**
     * Set CategoryCodes value
     * @param mixed $categoryCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setCategoryCodes($categoryCodes = null)
    {
        $this->CategoryCodes = $categoryCodes;
        return $this;
    }
    /**
     * Get Descriptions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions|null
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }
    /**
     * Set Descriptions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions $descriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setDescriptions(\Devlabs91\GenericOtaHotelApiService\StructType\Descriptions $descriptions = null)
    {
        $this->Descriptions = $descriptions;
        return $this;
    }
    /**
     * Get HotelInfoCodes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCodes|null
     */
    public function getHotelInfoCodes()
    {
        return $this->HotelInfoCodes;
    }
    /**
     * Set HotelInfoCodes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCodes $hotelInfoCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setHotelInfoCodes(\Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCodes $hotelInfoCodes = null)
    {
        $this->HotelInfoCodes = $hotelInfoCodes;
        return $this;
    }
    /**
     * Get Position value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Position|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Position $position
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setPosition(\Devlabs91\GenericOtaHotelApiService\StructType\Position $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Services value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Services|null
     */
    public function getServices()
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Services $services
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setServices(\Devlabs91\GenericOtaHotelApiService\StructType\Services $services = null)
    {
        $this->Services = $services;
        return $this;
    }
    /**
     * Get WeatherInfos value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WeatherInfos|null
     */
    public function getWeatherInfos()
    {
        return $this->WeatherInfos;
    }
    /**
     * Set WeatherInfos value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\WeatherInfos $weatherInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setWeatherInfos(\Devlabs91\GenericOtaHotelApiService\StructType\WeatherInfos $weatherInfos = null)
    {
        $this->WeatherInfos = $weatherInfos;
        return $this;
    }
    /**
     * Get OwnershipManagementInfos value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfos|null
     */
    public function getOwnershipManagementInfos()
    {
        return $this->OwnershipManagementInfos;
    }
    /**
     * Set OwnershipManagementInfos value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfos $ownershipManagementInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setOwnershipManagementInfos(\Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfos $ownershipManagementInfos = null)
    {
        $this->OwnershipManagementInfos = $ownershipManagementInfos;
        return $this;
    }
    /**
     * Get Languages value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Languages|null
     */
    public function getLanguages()
    {
        return $this->Languages;
    }
    /**
     * Set Languages value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Languages $languages
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setLanguages(\Devlabs91\GenericOtaHotelApiService\StructType\Languages $languages = null)
    {
        $this->Languages = $languages;
        return $this;
    }
    /**
     * Get WhenBuilt value
     * @return string|null
     */
    public function getWhenBuilt()
    {
        return $this->WhenBuilt;
    }
    /**
     * Set WhenBuilt value
     * @param string $whenBuilt
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setWhenBuilt($whenBuilt = null)
    {
        // validation for constraint: string
        if (!is_null($whenBuilt) && !is_string($whenBuilt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($whenBuilt)), __LINE__);
        }
        $this->WhenBuilt = $whenBuilt;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Get AreaWeather value
     * @return string|null
     */
    public function getAreaWeather()
    {
        return $this->AreaWeather;
    }
    /**
     * Set AreaWeather value
     * @param string $areaWeather
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setAreaWeather($areaWeather = null)
    {
        // validation for constraint: string
        if (!is_null($areaWeather) && !is_string($areaWeather)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($areaWeather)), __LINE__);
        }
        $this->AreaWeather = $areaWeather;
        return $this;
    }
    /**
     * Get InterfaceCompliance value
     * @return string|null
     */
    public function getInterfaceCompliance()
    {
        return $this->InterfaceCompliance;
    }
    /**
     * Set InterfaceCompliance value
     * @param string $interfaceCompliance
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setInterfaceCompliance($interfaceCompliance = null)
    {
        // validation for constraint: string
        if (!is_null($interfaceCompliance) && !is_string($interfaceCompliance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interfaceCompliance)), __LINE__);
        }
        $this->InterfaceCompliance = $interfaceCompliance;
        return $this;
    }
    /**
     * Get PMSSystem value
     * @return string|null
     */
    public function getPMSSystem()
    {
        return $this->PMSSystem;
    }
    /**
     * Set PMSSystem value
     * @param string $pMSSystem
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setPMSSystem($pMSSystem = null)
    {
        // validation for constraint: string
        if (!is_null($pMSSystem) && !is_string($pMSSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pMSSystem)), __LINE__);
        }
        $this->PMSSystem = $pMSSystem;
        return $this;
    }
    /**
     * Get HotelStatus value
     * @return string|null
     */
    public function getHotelStatus()
    {
        return $this->HotelStatus;
    }
    /**
     * Set HotelStatus value
     * @param string $hotelStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setHotelStatus($hotelStatus = null)
    {
        // validation for constraint: string
        if (!is_null($hotelStatus) && !is_string($hotelStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelStatus)), __LINE__);
        }
        $this->HotelStatus = $hotelStatus;
        return $this;
    }
    /**
     * Get HotelStatusCode value
     * @return string|null
     */
    public function getHotelStatusCode()
    {
        return $this->HotelStatusCode;
    }
    /**
     * Set HotelStatusCode value
     * @param string $hotelStatusCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setHotelStatusCode($hotelStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelStatusCode) && !is_string($hotelStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelStatusCode)), __LINE__);
        }
        $this->HotelStatusCode = $hotelStatusCode;
        return $this;
    }
    /**
     * Get TaxID value
     * @return string|null
     */
    public function getTaxID()
    {
        return $this->TaxID;
    }
    /**
     * Set TaxID value
     * @param string $taxID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setTaxID($taxID = null)
    {
        // validation for constraint: string
        if (!is_null($taxID) && !is_string($taxID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxID)), __LINE__);
        }
        $this->TaxID = $taxID;
        return $this;
    }
    /**
     * Get DaylightSavingIndicator value
     * @return bool|null
     */
    public function getDaylightSavingIndicator()
    {
        return $this->DaylightSavingIndicator;
    }
    /**
     * Set DaylightSavingIndicator value
     * @param bool $daylightSavingIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setDaylightSavingIndicator($daylightSavingIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($daylightSavingIndicator) && !is_bool($daylightSavingIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($daylightSavingIndicator)), __LINE__);
        }
        $this->DaylightSavingIndicator = $daylightSavingIndicator;
        return $this;
    }
    /**
     * Get ISO9000CertifiedInd value
     * @return bool|null
     */
    public function getISO9000CertifiedInd()
    {
        return $this->ISO9000CertifiedInd;
    }
    /**
     * Set ISO9000CertifiedInd value
     * @param bool $iSO9000CertifiedInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
     */
    public function setISO9000CertifiedInd($iSO9000CertifiedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($iSO9000CertifiedInd) && !is_bool($iSO9000CertifiedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($iSO9000CertifiedInd)), __LINE__);
        }
        $this->ISO9000CertifiedInd = $iSO9000CertifiedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoType
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

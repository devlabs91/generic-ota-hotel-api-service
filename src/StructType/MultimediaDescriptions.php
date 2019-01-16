<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaDescriptions StructType
 * Meta informations extracted from the WSDL
 * - documentation: Multimedia information about the restaurant. | Multimedia information about the recreation facility. | Multimedia information about the hotel.
 * @subpackage Structs
 */
class MultimediaDescriptions extends MultimediaDescriptionsType
{
    /**
     * The Attire
     * Meta informations extracted from the WSDL
     * - documentation: Used to pass restaurant attire information.
     * - use: optional
     * @var string
     */
    public $Attire;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: An indicator for whether this is a location description. | false
     * - use: optional
     * @var bool
     */
    public $Location;
    /**
     * The RefDirectionTo
     * Meta informations extracted from the WSDL
     * - documentation: An indicator for whether this is a description TO the location (TRUE is TO the location, else FROM). | true
     * - use: optional
     * @var bool
     */
    public $RefDirectionTo;
    /**
     * The InfoCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to designate a particular type of description such as marketing. Refer to OpenTravel Code List Information Type (INF).
     * - use: optional
     * @var string
     */
    public $InfoCode;
    /**
     * The AdditionalDetailCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to designate a particular type of additional information. Refer to OpenTravel Code List Additional Detail Type (ADT).
     * - use: optional
     * @var string
     */
    public $AdditionalDetailCode;
    /**
     * Constructor method for MultimediaDescriptions
     * @uses MultimediaDescriptions::setAttire()
     * @uses MultimediaDescriptions::setLocation()
     * @uses MultimediaDescriptions::setRefDirectionTo()
     * @uses MultimediaDescriptions::setInfoCode()
     * @uses MultimediaDescriptions::setAdditionalDetailCode()
     * @param string $attire
     * @param bool $location
     * @param bool $refDirectionTo
     * @param string $infoCode
     * @param string $additionalDetailCode
     */
    public function __construct($attire = null, $location = null, $refDirectionTo = null, $infoCode = null, $additionalDetailCode = null)
    {
        $this
            ->setAttire($attire)
            ->setLocation($location)
            ->setRefDirectionTo($refDirectionTo)
            ->setInfoCode($infoCode)
            ->setAdditionalDetailCode($additionalDetailCode);
    }
    /**
     * Get Attire value
     * @return string|null
     */
    public function getAttire()
    {
        return $this->Attire;
    }
    /**
     * Set Attire value
     * @param string $attire
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions
     */
    public function setAttire($attire = null)
    {
        // validation for constraint: string
        if (!is_null($attire) && !is_string($attire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attire)), __LINE__);
        }
        $this->Attire = $attire;
        return $this;
    }
    /**
     * Get Location value
     * @return bool|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param bool $location
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions
     */
    public function setLocation($location = null)
    {
        // validation for constraint: boolean
        if (!is_null($location) && !is_bool($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get RefDirectionTo value
     * @return bool|null
     */
    public function getRefDirectionTo()
    {
        return $this->RefDirectionTo;
    }
    /**
     * Set RefDirectionTo value
     * @param bool $refDirectionTo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions
     */
    public function setRefDirectionTo($refDirectionTo = null)
    {
        // validation for constraint: boolean
        if (!is_null($refDirectionTo) && !is_bool($refDirectionTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($refDirectionTo)), __LINE__);
        }
        $this->RefDirectionTo = $refDirectionTo;
        return $this;
    }
    /**
     * Get InfoCode value
     * @return string|null
     */
    public function getInfoCode()
    {
        return $this->InfoCode;
    }
    /**
     * Set InfoCode value
     * @param string $infoCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions
     */
    public function setInfoCode($infoCode = null)
    {
        // validation for constraint: string
        if (!is_null($infoCode) && !is_string($infoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infoCode)), __LINE__);
        }
        $this->InfoCode = $infoCode;
        return $this;
    }
    /**
     * Get AdditionalDetailCode value
     * @return string|null
     */
    public function getAdditionalDetailCode()
    {
        return $this->AdditionalDetailCode;
    }
    /**
     * Set AdditionalDetailCode value
     * @param string $additionalDetailCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions
     */
    public function setAdditionalDetailCode($additionalDetailCode = null)
    {
        // validation for constraint: string
        if (!is_null($additionalDetailCode) && !is_string($additionalDetailCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalDetailCode)), __LINE__);
        }
        $this->AdditionalDetailCode = $additionalDetailCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions
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

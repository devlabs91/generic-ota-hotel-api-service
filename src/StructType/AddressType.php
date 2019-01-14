<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The StreetNmbr
     * Meta informations extracted from the WSDL
     * - documentation: Street Name and Number within the address
     * - minOccurs: 0
     * @var mixed
     */
    public $StreetNmbr;
    /**
     * The BldgRoom
     * Meta informations extracted from the WSDL
     * - documentation: Building name, room, apartment, or suite number.
     * - minOccurs: 0
     * @var mixed
     */
    public $BldgRoom;
    /**
     * The AddressLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AddressLine;
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - documentation: City name eg. Dublin
     * - minOccurs: 0
     * @var mixed
     */
    public $CityName;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Post Office Code number.
     * - minOccurs: 0
     * @var mixed
     */
    public $PostalCode;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - documentation: County Name eg. Fairfax
     * - minOccurs: 0
     * @var mixed
     */
    public $County;
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - documentation: State name eg. Texas
     * - minOccurs: 0
     * @var mixed
     */
    public $StateProv;
    /**
     * The CountryName
     * Meta informations extracted from the WSDL
     * - documentation: Country name eg. Ireland
     * - minOccurs: 0
     * @var mixed
     */
    public $CountryName;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Defines the type of address (e.g. home, business, other). Refer to OTA Code List Communication Location Type (CLT).
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setStreetNmbr()
     * @uses AddressType::setBldgRoom()
     * @uses AddressType::setAddressLine()
     * @uses AddressType::setCityName()
     * @uses AddressType::setPostalCode()
     * @uses AddressType::setCounty()
     * @uses AddressType::setStateProv()
     * @uses AddressType::setCountryName()
     * @uses AddressType::setType()
     * @param mixed $streetNmbr
     * @param mixed $bldgRoom
     * @param mixed[] $addressLine
     * @param mixed $cityName
     * @param mixed $postalCode
     * @param mixed $county
     * @param mixed $stateProv
     * @param mixed $countryName
     * @param string $type
     */
    public function __construct($streetNmbr = null, $bldgRoom = null, array $addressLine = array(), $cityName = null, $postalCode = null, $county = null, $stateProv = null, $countryName = null, $type = null)
    {
        $this
            ->setStreetNmbr($streetNmbr)
            ->setBldgRoom($bldgRoom)
            ->setAddressLine($addressLine)
            ->setCityName($cityName)
            ->setPostalCode($postalCode)
            ->setCounty($county)
            ->setStateProv($stateProv)
            ->setCountryName($countryName)
            ->setType($type);
    }
    /**
     * Get StreetNmbr value
     * @return mixed|null
     */
    public function getStreetNmbr()
    {
        return $this->StreetNmbr;
    }
    /**
     * Set StreetNmbr value
     * @param mixed $streetNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
     */
    public function setStreetNmbr($streetNmbr = null)
    {
        $this->StreetNmbr = $streetNmbr;
        return $this;
    }
    /**
     * Get BldgRoom value
     * @return mixed|null
     */
    public function getBldgRoom()
    {
        return $this->BldgRoom;
    }
    /**
     * Set BldgRoom value
     * @param mixed $bldgRoom
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
     */
    public function setBldgRoom($bldgRoom = null)
    {
        $this->BldgRoom = $bldgRoom;
        return $this;
    }
    /**
     * Get AddressLine value
     * @return mixed[]|null
     */
    public function getAddressLine()
    {
        return $this->AddressLine;
    }
    /**
     * Set AddressLine value
     * @throws \InvalidArgumentException
     * @param mixed[] $addressLine
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
     */
    public function setAddressLine(array $addressLine = array())
    {
        foreach ($addressLine as $addressTypeAddressLineItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AddressLine property can only contain items of anyType, "%s" given', is_object($addressTypeAddressLineItem) ? get_class($addressTypeAddressLineItem) : gettype($addressTypeAddressLineItem)), __LINE__);
            }
        }
        $this->AddressLine = $addressLine;
        return $this;
    }
    /**
     * Add item to AddressLine value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
     */
    public function addToAddressLine($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AddressLine property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressLine[] = $item;
        return $this;
    }
    /**
     * Get CityName value
     * @return mixed|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param mixed $cityName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
     */
    public function setCityName($cityName = null)
    {
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return mixed|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param mixed $postalCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
     */
    public function setPostalCode($postalCode = null)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get County value
     * @return mixed|null
     */
    public function getCounty()
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param mixed $county
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
     */
    public function setCounty($county = null)
    {
        $this->County = $county;
        return $this;
    }
    /**
     * Get StateProv value
     * @return mixed|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param mixed $stateProv
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
     */
    public function setStateProv($stateProv = null)
    {
        $this->StateProv = $stateProv;
        return $this;
    }
    /**
     * Get CountryName value
     * @return mixed|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param mixed $countryName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
     */
    public function setCountryName($countryName = null)
    {
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressType
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

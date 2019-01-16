<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleLocationDetailsType complex type defines the core information that describes a vehicle rental facility. Such information may include the code of the facility, the name assigned to that facility, the address and telephone
 * number of the facility.
 * @subpackage Structs
 */
class VehicleLocationDetailsType extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Information about the physical address of the location
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Address;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[]
     */
    public $Telephone;
    /**
     * The AdditionalInfo
     * Meta informations extracted from the WSDL
     * - documentation: Supplemental information about the rental facility.
     * - minOccurs: 0
     * @var mixed
     */
    public $AdditionalInfo;
    /**
     * The AtAirport
     * Meta informations extracted from the WSDL
     * - documentation: The AtAirport attribute identifies if the associated rental location serves an airport.
     * - use: optional
     * @var bool
     */
    public $AtAirport;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Code used to identify the car rental location.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Name used to refer to the car rental location.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - documentation: Used to define which list the location code comes from (e.g. IATA, OAG, internal company code).
     * - use: optional
     * @var string
     */
    public $CodeContext;
    /**
     * The ExtendedLocationCode
     * Meta informations extracted from the WSDL
     * - documentation: Used for extended OAG code in conjunction with the OAG code which is sent in Code.
     * - use: optional
     * @var string
     */
    public $ExtendedLocationCode;
    /**
     * The AssocAirportLocList
     * Meta informations extracted from the WSDL
     * - documentation: Additional airport location codes associated with the primary airport.
     * - use: optional
     * @var string
     */
    public $AssocAirportLocList;
    /**
     * Constructor method for VehicleLocationDetailsType
     * @uses VehicleLocationDetailsType::setAddress()
     * @uses VehicleLocationDetailsType::setTelephone()
     * @uses VehicleLocationDetailsType::setAdditionalInfo()
     * @uses VehicleLocationDetailsType::setAtAirport()
     * @uses VehicleLocationDetailsType::setCode()
     * @uses VehicleLocationDetailsType::setName()
     * @uses VehicleLocationDetailsType::setCodeContext()
     * @uses VehicleLocationDetailsType::setExtendedLocationCode()
     * @uses VehicleLocationDetailsType::setAssocAirportLocList()
     * @param mixed[] $address
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[] $telephone
     * @param mixed $additionalInfo
     * @param bool $atAirport
     * @param string $code
     * @param string $name
     * @param string $codeContext
     * @param string $extendedLocationCode
     * @param string $assocAirportLocList
     */
    public function __construct(array $address = array(), array $telephone = array(), $additionalInfo = null, $atAirport = null, $code = null, $name = null, $codeContext = null, $extendedLocationCode = null, $assocAirportLocList = null)
    {
        $this
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setAdditionalInfo($additionalInfo)
            ->setAtAirport($atAirport)
            ->setCode($code)
            ->setName($name)
            ->setCodeContext($codeContext)
            ->setExtendedLocationCode($extendedLocationCode)
            ->setAssocAirportLocList($assocAirportLocList);
    }
    /**
     * Get Address value
     * @return mixed[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param mixed[] $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $vehicleLocationDetailsTypeAddressItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of anyType, "%s" given', is_object($vehicleLocationDetailsTypeAddressItem) ? get_class($vehicleLocationDetailsTypeAddressItem) : gettype($vehicleLocationDetailsTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function addToAddress($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[]|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[] $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $vehicleLocationDetailsTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!$vehicleLocationDetailsTypeTelephoneItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Telephone) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Telephone, "%s" given', is_object($vehicleLocationDetailsTypeTelephoneItem) ? get_class($vehicleLocationDetailsTypeTelephoneItem) : gettype($vehicleLocationDetailsTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function addToTelephone(\Devlabs91\GenericOtaHotelApiService\StructType\Telephone $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Telephone) {
            throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Telephone, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Telephone[] = $item;
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return mixed|null
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param mixed $additionalInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function setAdditionalInfo($additionalInfo = null)
    {
        $this->AdditionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * Get AtAirport value
     * @return bool|null
     */
    public function getAtAirport()
    {
        return $this->AtAirport;
    }
    /**
     * Set AtAirport value
     * @param bool $atAirport
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function setAtAirport($atAirport = null)
    {
        // validation for constraint: boolean
        if (!is_null($atAirport) && !is_bool($atAirport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($atAirport)), __LINE__);
        }
        $this->AtAirport = $atAirport;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
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
     * Get CodeContext value
     * @return string|null
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }
    /**
     * Set CodeContext value
     * @param string $codeContext
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function setCodeContext($codeContext = null)
    {
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->CodeContext = $codeContext;
        return $this;
    }
    /**
     * Get ExtendedLocationCode value
     * @return string|null
     */
    public function getExtendedLocationCode()
    {
        return $this->ExtendedLocationCode;
    }
    /**
     * Set ExtendedLocationCode value
     * @param string $extendedLocationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function setExtendedLocationCode($extendedLocationCode = null)
    {
        // validation for constraint: string
        if (!is_null($extendedLocationCode) && !is_string($extendedLocationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedLocationCode)), __LINE__);
        }
        $this->ExtendedLocationCode = $extendedLocationCode;
        return $this;
    }
    /**
     * Get AssocAirportLocList value
     * @return string|null
     */
    public function getAssocAirportLocList()
    {
        return $this->AssocAirportLocList;
    }
    /**
     * Set AssocAirportLocList value
     * @param string $assocAirportLocList
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function setAssocAirportLocList($assocAirportLocList = null)
    {
        // validation for constraint: string
        if (!is_null($assocAirportLocList) && !is_string($assocAirportLocList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($assocAirportLocList)), __LINE__);
        }
        $this->AssocAirportLocList = $assocAirportLocList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
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

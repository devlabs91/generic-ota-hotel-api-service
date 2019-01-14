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
     * The AtAirport
     * Meta informations extracted from the WSDL
     * - documentation: The AtAirport attribute identifies if the associated rental location serves an airport.
     * - use: required
     * @var bool
     */
    public $AtAirport;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Code;
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
     * - documentation: Information about the telephone numbers for thislocation.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
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
     * The Name
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CodeContext;
    /**
     * Constructor method for VehicleLocationDetailsType
     * @uses VehicleLocationDetailsType::setAtAirport()
     * @uses VehicleLocationDetailsType::setCode()
     * @uses VehicleLocationDetailsType::setAddress()
     * @uses VehicleLocationDetailsType::setTelephone()
     * @uses VehicleLocationDetailsType::setAdditionalInfo()
     * @uses VehicleLocationDetailsType::setName()
     * @uses VehicleLocationDetailsType::setCodeContext()
     * @param bool $atAirport
     * @param string $code
     * @param mixed[] $address
     * @param mixed[] $telephone
     * @param mixed $additionalInfo
     * @param string $name
     * @param string $codeContext
     */
    public function __construct($atAirport = null, $code = null, array $address = array(), array $telephone = array(), $additionalInfo = null, $name = null, $codeContext = null)
    {
        $this
            ->setAtAirport($atAirport)
            ->setCode($code)
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setAdditionalInfo($additionalInfo)
            ->setName($name)
            ->setCodeContext($codeContext);
    }
    /**
     * Get AtAirport value
     * @return bool
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
     * @return string
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
     * @return mixed[]|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @throws \InvalidArgumentException
     * @param mixed[] $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $vehicleLocationDetailsTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of anyType, "%s" given', is_object($vehicleLocationDetailsTypeTelephoneItem) ? get_class($vehicleLocationDetailsTypeTelephoneItem) : gettype($vehicleLocationDetailsTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationDetailsType
     */
    public function addToTelephone($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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

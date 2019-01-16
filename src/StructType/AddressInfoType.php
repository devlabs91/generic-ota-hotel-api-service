<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about an address that identifies a location for a specific purposes. | Indicates whether or not this is the default address.
 * @subpackage Structs
 */
class AddressInfoType extends AddressType
{
    /**
     * The UseType
     * Meta informations extracted from the WSDL
     * - documentation: Describes the use of the address (e.g. mailing, delivery, billing, etc.). Refer to OpenTravel Code List Address Use Type (AUT).
     * - use: optional
     * @var string
     */
    public $UseType;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: Used elsewhere in the message to reference this specific address.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for AddressInfoType
     * @uses AddressInfoType::setUseType()
     * @uses AddressInfoType::setRPH()
     * @param string $useType
     * @param string $rPH
     */
    public function __construct($useType = null, $rPH = null)
    {
        $this
            ->setUseType($useType)
            ->setRPH($rPH);
    }
    /**
     * Get UseType value
     * @return string|null
     */
    public function getUseType()
    {
        return $this->UseType;
    }
    /**
     * Set UseType value
     * @param string $useType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressInfoType
     */
    public function setUseType($useType = null)
    {
        // validation for constraint: string
        if (!is_null($useType) && !is_string($useType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($useType)), __LINE__);
        }
        $this->UseType = $useType;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressInfoType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddressInfoType
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

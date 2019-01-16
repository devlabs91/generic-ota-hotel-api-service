<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocationServiceCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The OffLocationServiceCoreType complex type defines the core data that is used to describe an off-location service.
 * @subpackage Structs
 */
class OffLocationServiceCoreType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public $Address;
    /**
     * Constructor method for OffLocationServiceCoreType
     * @uses OffLocationServiceCoreType::setType()
     * @uses OffLocationServiceCoreType::setAddress()
     * @param string $type
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address $address
     */
    public function __construct($type = null, \Devlabs91\GenericOtaHotelApiService\StructType\Address $address = null)
    {
        $this
            ->setType($type)
            ->setAddress($address);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServiceCoreType
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
     * Get Address value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServiceCoreType
     */
    public function setAddress(\Devlabs91\GenericOtaHotelApiService\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServiceCoreType
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

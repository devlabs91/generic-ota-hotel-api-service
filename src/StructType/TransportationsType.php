<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to define the types of transportation offered.
 * @subpackage Structs
 */
class TransportationsType extends AbstractStructBase
{
    /**
     * The Transportations
     * Meta informations extracted from the WSDL
     * - documentation: Collection of directions to/from a specific location via various modes of transportation.
     * - minOccurs: 0
     * @var mixed
     */
    public $Transportations;
    /**
     * Constructor method for TransportationsType
     * @uses TransportationsType::setTransportations()
     * @param mixed $transportations
     */
    public function __construct($transportations = null)
    {
        $this
            ->setTransportations($transportations);
    }
    /**
     * Get Transportations value
     * @return mixed|null
     */
    public function getTransportations()
    {
        return $this->Transportations;
    }
    /**
     * Set Transportations value
     * @param mixed $transportations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportationsType
     */
    public function setTransportations($transportations = null)
    {
        $this->Transportations = $transportations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportationsType
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

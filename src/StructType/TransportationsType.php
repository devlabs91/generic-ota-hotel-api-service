<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to define the types of transportaion offered.
 * @subpackage Structs
 */
class TransportationsType extends AbstractStructBase
{
    /**
     * The Transportations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Transportations
     */
    public $Transportations;
    /**
     * Constructor method for TransportationsType
     * @uses TransportationsType::setTransportations()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Transportations $transportations
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Transportations $transportations = null)
    {
        $this
            ->setTransportations($transportations);
    }
    /**
     * Get Transportations value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportations|null
     */
    public function getTransportations()
    {
        return $this->Transportations;
    }
    /**
     * Set Transportations value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Transportations $transportations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportationsType
     */
    public function setTransportations(\Devlabs91\GenericOtaHotelApiService\StructType\Transportations $transportations = null)
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SailingSearchQualifierType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Search qualifiers that can be used to identify a cruise.
 * @subpackage Structs
 */
class SailingSearchQualifierType extends SearchQualifierType
{
    /**
     * The Port
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Port
     */
    public $Port;
    /**
     * Constructor method for SailingSearchQualifierType
     * @uses SailingSearchQualifierType::setPort()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Port $port
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Port $port = null)
    {
        $this
            ->setPort($port);
    }
    /**
     * Get Port value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Port|null
     */
    public function getPort()
    {
        return $this->Port;
    }
    /**
     * Set Port value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Port $port
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingSearchQualifierType
     */
    public function setPort(\Devlabs91\GenericOtaHotelApiService\StructType\Port $port = null)
    {
        $this->Port = $port;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingSearchQualifierType
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

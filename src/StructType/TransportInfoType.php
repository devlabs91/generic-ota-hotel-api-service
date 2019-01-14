<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A TransportInfo object is used to indicate transportation information for a guest.
 * @subpackage Structs
 */
class TransportInfoType extends AbstractStructBase
{
    /**
     * The TransportInfo
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo
     */
    public $TransportInfo;
    /**
     * Constructor method for TransportInfoType
     * @uses TransportInfoType::setTransportInfo()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo $transportInfo
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo $transportInfo = null)
    {
        $this
            ->setTransportInfo($transportInfo);
    }
    /**
     * Get TransportInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo|null
     */
    public function getTransportInfo()
    {
        return $this->TransportInfo;
    }
    /**
     * Set TransportInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo $transportInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfoType
     */
    public function setTransportInfo(\Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo $transportInfo = null)
    {
        $this->TransportInfo = $transportInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfoType
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

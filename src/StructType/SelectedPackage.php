<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectedPackage StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the package information such as Pre/Post/Shorex/Bus/Transfer.
 * @subpackage Structs
 */
class SelectedPackage extends CruisePackageType
{
    /**
     * The AirInfo
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the air travel information for the transfer.
     * - minOccurs: 0
     * @var mixed
     */
    public $AirInfo;
    /**
     * Constructor method for SelectedPackage
     * @uses SelectedPackage::setAirInfo()
     * @param mixed $airInfo
     */
    public function __construct($airInfo = null)
    {
        $this
            ->setAirInfo($airInfo);
    }
    /**
     * Get AirInfo value
     * @return mixed|null
     */
    public function getAirInfo()
    {
        return $this->AirInfo;
    }
    /**
     * Set AirInfo value
     * @param mixed $airInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage
     */
    public function setAirInfo($airInfo = null)
    {
        $this->AirInfo = $airInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage
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

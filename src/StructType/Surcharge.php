<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Surcharge StructType
 * Meta informations extracted from the WSDL
 * - documentation: This element is used to describe one specific surcharge that may apply.
 * @subpackage Structs
 */
class Surcharge extends VehicleChargeType
{
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - documentation: Information on this one specific surcharge, including a description, etc.
     * - minOccurs: 0
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for Surcharge
     * @uses Surcharge::setInfo()
     * @param mixed $info
     */
    public function __construct($info = null)
    {
        $this
            ->setInfo($info);
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Surcharge
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Surcharge
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

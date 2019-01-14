<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhonePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Telephone number(s) to be used with this collection of preferences.
 * @subpackage Structs
 */
class PhonePrefType extends AbstractStructBase
{
    /**
     * The Telephone
     * @var mixed
     */
    public $Telephone;
    /**
     * Constructor method for PhonePrefType
     * @uses PhonePrefType::setTelephone()
     * @param mixed $telephone
     */
    public function __construct($telephone = null)
    {
        $this
            ->setTelephone($telephone);
    }
    /**
     * Get Telephone value
     * @return mixed|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param mixed $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PhonePrefType
     */
    public function setTelephone($telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PhonePrefType
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

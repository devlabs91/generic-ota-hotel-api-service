<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhonePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a telephone number preference.
 * @subpackage Structs
 */
class PhonePrefType extends AbstractStructBase
{
    /**
     * The Telephone
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Telephone
     */
    public $Telephone;
    /**
     * Constructor method for PhonePrefType
     * @uses PhonePrefType::setTelephone()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone = null)
    {
        $this
            ->setTelephone($telephone);
    }
    /**
     * Get Telephone value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PhonePrefType
     */
    public function setTelephone(\Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone = null)
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

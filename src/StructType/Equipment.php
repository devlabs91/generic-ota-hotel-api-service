<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Equipment StructType
 * @subpackage Structs
 */
class Equipment extends VehicleEquipmentType
{
    /**
     * The CheckOutCheckInCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CheckOutCheckInCode;
    /**
     * Constructor method for Equipment
     * @uses Equipment::setCheckOutCheckInCode()
     * @param string $checkOutCheckInCode
     */
    public function __construct($checkOutCheckInCode = null)
    {
        $this
            ->setCheckOutCheckInCode($checkOutCheckInCode);
    }
    /**
     * Get CheckOutCheckInCode value
     * @return string|null
     */
    public function getCheckOutCheckInCode()
    {
        return $this->CheckOutCheckInCode;
    }
    /**
     * Set CheckOutCheckInCode value
     * @param string $checkOutCheckInCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Equipment
     */
    public function setCheckOutCheckInCode($checkOutCheckInCode = null)
    {
        // validation for constraint: string
        if (!is_null($checkOutCheckInCode) && !is_string($checkOutCheckInCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkOutCheckInCode)), __LINE__);
        }
        $this->CheckOutCheckInCode = $checkOutCheckInCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Equipment
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgeSurcharge StructType
 * Meta informations extracted from the WSDL
 * - documentation: Surcharge information that may be applied based upon age of the renter.
 * @subpackage Structs
 */
class AgeSurcharge extends AbstractStructBase
{
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - documentation: Used to describe the age category of the driver for which an additional surcharge will apply. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     * @var string
     */
    public $Age;
    /**
     * The ChargeType
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify weekly, daily, or per rental. Refer to OpenTravel Code List Charge Type (CHG).
     * - use: optional
     * @var string
     */
    public $ChargeType;
    /**
     * Constructor method for AgeSurcharge
     * @uses AgeSurcharge::setAge()
     * @uses AgeSurcharge::setChargeType()
     * @param string $age
     * @param string $chargeType
     */
    public function __construct($age = null, $chargeType = null)
    {
        $this
            ->setAge($age)
            ->setChargeType($chargeType);
    }
    /**
     * Get Age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param string $age
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge
     */
    public function setAge($age = null)
    {
        // validation for constraint: string
        if (!is_null($age) && !is_string($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Get ChargeType value
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @param string $chargeType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge
     */
    public function setChargeType($chargeType = null)
    {
        // validation for constraint: string
        if (!is_null($chargeType) && !is_string($chargeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeType)), __LINE__);
        }
        $this->ChargeType = $chargeType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge
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

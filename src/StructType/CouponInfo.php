<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CouponInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Optional information on coupon numbers being exchanged.
 * @subpackage Structs
 */
class CouponInfo extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: The applicable coupon number.
     * - use: optional
     * @var string
     */
    public $Number;
    /**
     * Constructor method for CouponInfo
     * @uses CouponInfo::setNumber()
     * @param string $number
     */
    public function __construct($number = null)
    {
        $this
            ->setNumber($number);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo
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

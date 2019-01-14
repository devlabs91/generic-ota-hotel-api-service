<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Brands StructType
 * @subpackage Structs
 */
class Brands extends AbstractStructBase
{
    /**
     * The Brand
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Brand
     */
    public $Brand;
    /**
     * Constructor method for Brands
     * @uses Brands::setBrand()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Brand $brand
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Brand $brand = null)
    {
        $this
            ->setBrand($brand);
    }
    /**
     * Get Brand value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brand|null
     */
    public function getBrand()
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Brand $brand
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brands
     */
    public function setBrand(\Devlabs91\GenericOtaHotelApiService\StructType\Brand $brand = null)
    {
        $this->Brand = $brand;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brands
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

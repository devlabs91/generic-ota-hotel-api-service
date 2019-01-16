<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Brands StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of Brands.
 * @subpackage Structs
 */
class Brands extends AbstractStructBase
{
    /**
     * The Brand
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Brand[]
     */
    public $Brand;
    /**
     * Constructor method for Brands
     * @uses Brands::setBrand()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Brand[] $brand
     */
    public function __construct(array $brand = array())
    {
        $this
            ->setBrand($brand);
    }
    /**
     * Get Brand value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brand[]|null
     */
    public function getBrand()
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Brand[] $brand
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brands
     */
    public function setBrand(array $brand = array())
    {
        foreach ($brand as $brandsBrandItem) {
            // validation for constraint: itemType
            if (!$brandsBrandItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Brand) {
                throw new \InvalidArgumentException(sprintf('The Brand property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Brand, "%s" given', is_object($brandsBrandItem) ? get_class($brandsBrandItem) : gettype($brandsBrandItem)), __LINE__);
            }
        }
        $this->Brand = $brand;
        return $this;
    }
    /**
     * Add item to Brand value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Brand $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brands
     */
    public function addToBrand(\Devlabs91\GenericOtaHotelApiService\StructType\Brand $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Brand) {
            throw new \InvalidArgumentException(sprintf('The Brand property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Brand, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Brand[] = $item;
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

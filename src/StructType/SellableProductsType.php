<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellableProductsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The SellableProduct class defines the inventoriable item for this rate plan.
 * @subpackage Structs
 */
class SellableProductsType extends AbstractStructBase
{
    /**
     * The SellableProduct
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct[]
     */
    public $SellableProduct;
    /**
     * Constructor method for SellableProductsType
     * @uses SellableProductsType::setSellableProduct()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct[] $sellableProduct
     */
    public function __construct(array $sellableProduct = array())
    {
        $this
            ->setSellableProduct($sellableProduct);
    }
    /**
     * Get SellableProduct value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct[]|null
     */
    public function getSellableProduct()
    {
        return $this->SellableProduct;
    }
    /**
     * Set SellableProduct value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct[] $sellableProduct
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProductsType
     */
    public function setSellableProduct(array $sellableProduct = array())
    {
        foreach ($sellableProduct as $sellableProductsTypeSellableProductItem) {
            // validation for constraint: itemType
            if (!$sellableProductsTypeSellableProductItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct) {
                throw new \InvalidArgumentException(sprintf('The SellableProduct property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct, "%s" given', is_object($sellableProductsTypeSellableProductItem) ? get_class($sellableProductsTypeSellableProductItem) : gettype($sellableProductsTypeSellableProductItem)), __LINE__);
            }
        }
        $this->SellableProduct = $sellableProduct;
        return $this;
    }
    /**
     * Add item to SellableProduct value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProductsType
     */
    public function addToSellableProduct(\Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct) {
            throw new \InvalidArgumentException(sprintf('The SellableProduct property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SellableProduct[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProductsType
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

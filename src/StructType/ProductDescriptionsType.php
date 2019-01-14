<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductDescriptionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of ProductDescription.
 * @subpackage Structs
 */
class ProductDescriptionsType extends AbstractStructBase
{
    /**
     * The ProductDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription[]
     */
    public $ProductDescription;
    /**
     * Constructor method for ProductDescriptionsType
     * @uses ProductDescriptionsType::setProductDescription()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription[] $productDescription
     */
    public function __construct(array $productDescription = array())
    {
        $this
            ->setProductDescription($productDescription);
    }
    /**
     * Get ProductDescription value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription[]|null
     */
    public function getProductDescription()
    {
        return $this->ProductDescription;
    }
    /**
     * Set ProductDescription value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription[] $productDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescriptionsType
     */
    public function setProductDescription(array $productDescription = array())
    {
        foreach ($productDescription as $productDescriptionsTypeProductDescriptionItem) {
            // validation for constraint: itemType
            if (!$productDescriptionsTypeProductDescriptionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription) {
                throw new \InvalidArgumentException(sprintf('The ProductDescription property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription, "%s" given', is_object($productDescriptionsTypeProductDescriptionItem) ? get_class($productDescriptionsTypeProductDescriptionItem) : gettype($productDescriptionsTypeProductDescriptionItem)), __LINE__);
            }
        }
        $this->ProductDescription = $productDescription;
        return $this;
    }
    /**
     * Add item to ProductDescription value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescriptionsType
     */
    public function addToProductDescription(\Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription) {
            throw new \InvalidArgumentException(sprintf('The ProductDescription property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProductDescription[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescriptionsType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductDescription StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides a description of the product.
 * @subpackage Structs
 */
class ProductDescription extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A brief description of the product at this lodging facility generally used by central reservations offices or travel agents.
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * The ProductDescriptionRPH
     * Meta informations extracted from the WSDL
     * - documentation: This is a reference placeholder, used as an index for this object.
     * @var string
     */
    public $ProductDescriptionRPH;
    /**
     * Constructor method for ProductDescription
     * @uses ProductDescription::setDescription()
     * @uses ProductDescription::setProductDescriptionRPH()
     * @param mixed $description
     * @param string $productDescriptionRPH
     */
    public function __construct($description = null, $productDescriptionRPH = null)
    {
        $this
            ->setDescription($description)
            ->setProductDescriptionRPH($productDescriptionRPH);
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ProductDescriptionRPH value
     * @return string|null
     */
    public function getProductDescriptionRPH()
    {
        return $this->ProductDescriptionRPH;
    }
    /**
     * Set ProductDescriptionRPH value
     * @param string $productDescriptionRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription
     */
    public function setProductDescriptionRPH($productDescriptionRPH = null)
    {
        // validation for constraint: string
        if (!is_null($productDescriptionRPH) && !is_string($productDescriptionRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productDescriptionRPH)), __LINE__);
        }
        $this->ProductDescriptionRPH = $productDescriptionRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProductDescription
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

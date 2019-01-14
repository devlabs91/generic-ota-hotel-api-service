<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CostingItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of an invoice item
 * @subpackage Structs
 */
class CostingItemType extends AbstractStructBase
{
    /**
     * The UnitPrice
     * Meta informations extracted from the WSDL
     * - documentation: Unit cost in a given monetary unit.
     * @var mixed
     */
    public $UnitPrice;
    /**
     * The ExtendedPrice
     * Meta informations extracted from the WSDL
     * - documentation: Unit cost multiplied by Unit Quantity
     * - minOccurs: 0
     * @var mixed
     */
    public $ExtendedPrice;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A description of an invoice item.
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * Constructor method for CostingItemType
     * @uses CostingItemType::setUnitPrice()
     * @uses CostingItemType::setExtendedPrice()
     * @uses CostingItemType::setDescription()
     * @param mixed $unitPrice
     * @param mixed $extendedPrice
     * @param string $description
     */
    public function __construct($unitPrice = null, $extendedPrice = null, $description = null)
    {
        $this
            ->setUnitPrice($unitPrice)
            ->setExtendedPrice($extendedPrice)
            ->setDescription($description);
    }
    /**
     * Get UnitPrice value
     * @return mixed|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param mixed $unitPrice
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItemType
     */
    public function setUnitPrice($unitPrice = null)
    {
        $this->UnitPrice = $unitPrice;
        return $this;
    }
    /**
     * Get ExtendedPrice value
     * @return mixed|null
     */
    public function getExtendedPrice()
    {
        return $this->ExtendedPrice;
    }
    /**
     * Set ExtendedPrice value
     * @param mixed $extendedPrice
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItemType
     */
    public function setExtendedPrice($extendedPrice = null)
    {
        $this->ExtendedPrice = $extendedPrice;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItemType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItemType
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

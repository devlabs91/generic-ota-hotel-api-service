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
     * The UnitCost
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\UnitCost
     */
    public $UnitCost;
    /**
     * The ExtendedCost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ExtendedCost
     */
    public $ExtendedCost;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Commission
     */
    public $Commission;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A description of an invoice item.
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The InventoryItemRPH
     * Meta informations extracted from the WSDL
     * - documentation: Used to associate a cost with a specific inventory item, e.g. a supplement for a flight leg.
     * - use: optional
     * @var string
     */
    public $InventoryItemRPH;
    /**
     * The PassengerRPH
     * Meta informations extracted from the WSDL
     * - documentation: Used to associate a cost with a specific passenger, e.g. a vegetarian meal supplement.
     * - use: optional
     * @var string
     */
    public $PassengerRPH;
    /**
     * The CostBasis
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate what the cost is based on e.g., per Passenger, per Room, per Booking. Refer to OpenTravel Code List Charge Type (CHG).
     * - use: optional
     * @var string
     */
    public $CostBasis;
    /**
     * Constructor method for CostingItemType
     * @uses CostingItemType::setUnitCost()
     * @uses CostingItemType::setExtendedCost()
     * @uses CostingItemType::setCommission()
     * @uses CostingItemType::setDescription()
     * @uses CostingItemType::setInventoryItemRPH()
     * @uses CostingItemType::setPassengerRPH()
     * @uses CostingItemType::setCostBasis()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UnitCost $unitCost
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ExtendedCost $extendedCost
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Commission $commission
     * @param string $description
     * @param string $inventoryItemRPH
     * @param string $passengerRPH
     * @param string $costBasis
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\UnitCost $unitCost = null, \Devlabs91\GenericOtaHotelApiService\StructType\ExtendedCost $extendedCost = null, \Devlabs91\GenericOtaHotelApiService\StructType\Commission $commission = null, $description = null, $inventoryItemRPH = null, $passengerRPH = null, $costBasis = null)
    {
        $this
            ->setUnitCost($unitCost)
            ->setExtendedCost($extendedCost)
            ->setCommission($commission)
            ->setDescription($description)
            ->setInventoryItemRPH($inventoryItemRPH)
            ->setPassengerRPH($passengerRPH)
            ->setCostBasis($costBasis);
    }
    /**
     * Get UnitCost value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UnitCost|null
     */
    public function getUnitCost()
    {
        return $this->UnitCost;
    }
    /**
     * Set UnitCost value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UnitCost $unitCost
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItemType
     */
    public function setUnitCost(\Devlabs91\GenericOtaHotelApiService\StructType\UnitCost $unitCost = null)
    {
        $this->UnitCost = $unitCost;
        return $this;
    }
    /**
     * Get ExtendedCost value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtendedCost|null
     */
    public function getExtendedCost()
    {
        return $this->ExtendedCost;
    }
    /**
     * Set ExtendedCost value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ExtendedCost $extendedCost
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItemType
     */
    public function setExtendedCost(\Devlabs91\GenericOtaHotelApiService\StructType\ExtendedCost $extendedCost = null)
    {
        $this->ExtendedCost = $extendedCost;
        return $this;
    }
    /**
     * Get Commission value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Commission|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Commission $commission
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItemType
     */
    public function setCommission(\Devlabs91\GenericOtaHotelApiService\StructType\Commission $commission = null)
    {
        $this->Commission = $commission;
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
     * Get InventoryItemRPH value
     * @return string|null
     */
    public function getInventoryItemRPH()
    {
        return $this->InventoryItemRPH;
    }
    /**
     * Set InventoryItemRPH value
     * @param string $inventoryItemRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItemType
     */
    public function setInventoryItemRPH($inventoryItemRPH = null)
    {
        // validation for constraint: string
        if (!is_null($inventoryItemRPH) && !is_string($inventoryItemRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventoryItemRPH)), __LINE__);
        }
        $this->InventoryItemRPH = $inventoryItemRPH;
        return $this;
    }
    /**
     * Get PassengerRPH value
     * @return string|null
     */
    public function getPassengerRPH()
    {
        return $this->PassengerRPH;
    }
    /**
     * Set PassengerRPH value
     * @param string $passengerRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItemType
     */
    public function setPassengerRPH($passengerRPH = null)
    {
        // validation for constraint: string
        if (!is_null($passengerRPH) && !is_string($passengerRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerRPH)), __LINE__);
        }
        $this->PassengerRPH = $passengerRPH;
        return $this;
    }
    /**
     * Get CostBasis value
     * @return string|null
     */
    public function getCostBasis()
    {
        return $this->CostBasis;
    }
    /**
     * Set CostBasis value
     * @param string $costBasis
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItemType
     */
    public function setCostBasis($costBasis = null)
    {
        // validation for constraint: string
        if (!is_null($costBasis) && !is_string($costBasis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($costBasis)), __LINE__);
        }
        $this->CostBasis = $costBasis;
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

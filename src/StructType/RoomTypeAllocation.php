<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomTypeAllocation StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the number of rooms blocked for a specific room type for specific dates. | This is the date range to which rooms are allocated for availability by room type.
 * @subpackage Structs
 */
class RoomTypeAllocation extends AbstractStructBase
{
    /**
     * The NumberOfUnits
     * Meta informations extracted from the WSDL
     * - documentation: The number of rooms allocated as available for the dates specified in the DateTimeSpanGroup.
     * - use: optional
     * @var int
     */
    public $NumberOfUnits;
    /**
     * The CompRoomQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of complimentary rooms allocated as part of the inventory block. This may be a flat number of rooms or it may be used in conjunction with CompRoomFactor.
     * - use: optional
     * @var string
     */
    public $CompRoomQuantity;
    /**
     * The CompRoomFactor
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate how many rooms need to be sold before a complimentary room is granted (e.g. CompRoomQuantity="1" and CompRoomFactor="100" means 1 complimentary room is granted per 100 rooms sold).
     * - use: optional
     * @var string
     */
    public $CompRoomFactor;
    /**
     * The EndDateIndicator
     * Meta informations extracted from the WSDL
     * - documentation: If true, this indicator designates that the room allocation is applied through to the End date in the RoomType DateTimeSpanGroup if it exists or to the End date in the InvBlock DateTimeSpanGroup. This would be used in place of
     * RoomTypeAllocation/Duration and RoomTypeAllocation/End.
     * - use: optional
     * @var bool
     */
    public $EndDateIndicator;
    /**
     * The SellLimit
     * Meta informations extracted from the WSDL
     * - documentation: The contracted quantity or ceiling of inventory, which may differ from the NumberOfUnits allocated.
     * - use: optional
     * @var int
     */
    public $SellLimit;
    /**
     * The ProcureBlockCode
     * Meta informations extracted from the WSDL
     * - documentation: The block from which to take inventory when NumberOfUnits is depleted. This is used in conjunction with the SellLimit attribute. If this attribute is not present, inventory is taken from general inventory.
     * - use: optional
     * @var string
     */
    public $ProcureBlockCode;
    /**
     * The AllocationID
     * Meta informations extracted from the WSDL
     * - documentation: Used to refer to a specific allocation already in the receiving system.
     * - use: optional
     * @var string
     */
    public $AllocationID;
    /**
     * Constructor method for RoomTypeAllocation
     * @uses RoomTypeAllocation::setNumberOfUnits()
     * @uses RoomTypeAllocation::setCompRoomQuantity()
     * @uses RoomTypeAllocation::setCompRoomFactor()
     * @uses RoomTypeAllocation::setEndDateIndicator()
     * @uses RoomTypeAllocation::setSellLimit()
     * @uses RoomTypeAllocation::setProcureBlockCode()
     * @uses RoomTypeAllocation::setAllocationID()
     * @param int $numberOfUnits
     * @param string $compRoomQuantity
     * @param string $compRoomFactor
     * @param bool $endDateIndicator
     * @param int $sellLimit
     * @param string $procureBlockCode
     * @param string $allocationID
     */
    public function __construct($numberOfUnits = null, $compRoomQuantity = null, $compRoomFactor = null, $endDateIndicator = null, $sellLimit = null, $procureBlockCode = null, $allocationID = null)
    {
        $this
            ->setNumberOfUnits($numberOfUnits)
            ->setCompRoomQuantity($compRoomQuantity)
            ->setCompRoomFactor($compRoomFactor)
            ->setEndDateIndicator($endDateIndicator)
            ->setSellLimit($sellLimit)
            ->setProcureBlockCode($procureBlockCode)
            ->setAllocationID($allocationID);
    }
    /**
     * Get NumberOfUnits value
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnits) && !is_numeric($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
        return $this;
    }
    /**
     * Get CompRoomQuantity value
     * @return string|null
     */
    public function getCompRoomQuantity()
    {
        return $this->CompRoomQuantity;
    }
    /**
     * Set CompRoomQuantity value
     * @param string $compRoomQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation
     */
    public function setCompRoomQuantity($compRoomQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($compRoomQuantity) && !is_string($compRoomQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compRoomQuantity)), __LINE__);
        }
        $this->CompRoomQuantity = $compRoomQuantity;
        return $this;
    }
    /**
     * Get CompRoomFactor value
     * @return string|null
     */
    public function getCompRoomFactor()
    {
        return $this->CompRoomFactor;
    }
    /**
     * Set CompRoomFactor value
     * @param string $compRoomFactor
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation
     */
    public function setCompRoomFactor($compRoomFactor = null)
    {
        // validation for constraint: string
        if (!is_null($compRoomFactor) && !is_string($compRoomFactor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compRoomFactor)), __LINE__);
        }
        $this->CompRoomFactor = $compRoomFactor;
        return $this;
    }
    /**
     * Get EndDateIndicator value
     * @return bool|null
     */
    public function getEndDateIndicator()
    {
        return $this->EndDateIndicator;
    }
    /**
     * Set EndDateIndicator value
     * @param bool $endDateIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation
     */
    public function setEndDateIndicator($endDateIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($endDateIndicator) && !is_bool($endDateIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($endDateIndicator)), __LINE__);
        }
        $this->EndDateIndicator = $endDateIndicator;
        return $this;
    }
    /**
     * Get SellLimit value
     * @return int|null
     */
    public function getSellLimit()
    {
        return $this->SellLimit;
    }
    /**
     * Set SellLimit value
     * @param int $sellLimit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation
     */
    public function setSellLimit($sellLimit = null)
    {
        // validation for constraint: int
        if (!is_null($sellLimit) && !is_numeric($sellLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sellLimit)), __LINE__);
        }
        $this->SellLimit = $sellLimit;
        return $this;
    }
    /**
     * Get ProcureBlockCode value
     * @return string|null
     */
    public function getProcureBlockCode()
    {
        return $this->ProcureBlockCode;
    }
    /**
     * Set ProcureBlockCode value
     * @param string $procureBlockCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation
     */
    public function setProcureBlockCode($procureBlockCode = null)
    {
        // validation for constraint: string
        if (!is_null($procureBlockCode) && !is_string($procureBlockCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($procureBlockCode)), __LINE__);
        }
        $this->ProcureBlockCode = $procureBlockCode;
        return $this;
    }
    /**
     * Get AllocationID value
     * @return string|null
     */
    public function getAllocationID()
    {
        return $this->AllocationID;
    }
    /**
     * Set AllocationID value
     * @param string $allocationID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation
     */
    public function setAllocationID($allocationID = null)
    {
        // validation for constraint: string
        if (!is_null($allocationID) && !is_string($allocationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($allocationID)), __LINE__);
        }
        $this->AllocationID = $allocationID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation
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

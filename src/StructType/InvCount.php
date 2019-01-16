<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvCount StructType
 * Meta informations extracted from the WSDL
 * - documentation: Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
 * @subpackage Structs
 */
class InvCount extends AbstractStructBase
{
    /**
     * The InvBlockCutoff
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockCutoff
     */
    public $InvBlockCutoff;
    /**
     * The CountType
     * Meta informations extracted from the WSDL
     * - documentation: This identifies the type of inventory count being reported. Refer to OpenTravel Code List Inventory Count Type (INV).
     * - use: optional
     * @var string
     */
    public $CountType;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $Count;
    /**
     * The AdjustReason
     * Meta informations extracted from the WSDL
     * - documentation: Additional information as to the nature of the inventory adjustment; eg. GUEST EXTENDED STAY, or ROOM CHANGE, etc.
     * - use: optional
     * @var string
     */
    public $AdjustReason;
    /**
     * The ActionType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ActionType;
    /**
     * Constructor method for InvCount
     * @uses InvCount::setInvBlockCutoff()
     * @uses InvCount::setCountType()
     * @uses InvCount::setCount()
     * @uses InvCount::setAdjustReason()
     * @uses InvCount::setActionType()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockCutoff $invBlockCutoff
     * @param string $countType
     * @param int $count
     * @param string $adjustReason
     * @param string $actionType
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\InvBlockCutoff $invBlockCutoff = null, $countType = null, $count = null, $adjustReason = null, $actionType = null)
    {
        $this
            ->setInvBlockCutoff($invBlockCutoff)
            ->setCountType($countType)
            ->setCount($count)
            ->setAdjustReason($adjustReason)
            ->setActionType($actionType);
    }
    /**
     * Get InvBlockCutoff value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockCutoff|null
     */
    public function getInvBlockCutoff()
    {
        return $this->InvBlockCutoff;
    }
    /**
     * Set InvBlockCutoff value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockCutoff $invBlockCutoff
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCount
     */
    public function setInvBlockCutoff(\Devlabs91\GenericOtaHotelApiService\StructType\InvBlockCutoff $invBlockCutoff = null)
    {
        $this->InvBlockCutoff = $invBlockCutoff;
        return $this;
    }
    /**
     * Get CountType value
     * @return string|null
     */
    public function getCountType()
    {
        return $this->CountType;
    }
    /**
     * Set CountType value
     * @param string $countType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCount
     */
    public function setCountType($countType = null)
    {
        // validation for constraint: string
        if (!is_null($countType) && !is_string($countType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countType)), __LINE__);
        }
        $this->CountType = $countType;
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCount
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get AdjustReason value
     * @return string|null
     */
    public function getAdjustReason()
    {
        return $this->AdjustReason;
    }
    /**
     * Set AdjustReason value
     * @param string $adjustReason
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCount
     */
    public function setAdjustReason($adjustReason = null)
    {
        // validation for constraint: string
        if (!is_null($adjustReason) && !is_string($adjustReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adjustReason)), __LINE__);
        }
        $this->AdjustReason = $adjustReason;
        return $this;
    }
    /**
     * Get ActionType value
     * @return string|null
     */
    public function getActionType()
    {
        return $this->ActionType;
    }
    /**
     * Set ActionType value
     * @param string $actionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCount
     */
    public function setActionType($actionType = null)
    {
        // validation for constraint: string
        if (!is_null($actionType) && !is_string($actionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionType)), __LINE__);
        }
        $this->ActionType = $actionType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCount
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

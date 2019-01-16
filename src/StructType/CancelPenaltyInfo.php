<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPenaltyInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information regarding the cancellation or modification policy for this vehicle type.
 * @subpackage Structs
 */
class CancelPenaltyInfo extends AbstractStructBase
{
    /**
     * The Deadline
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Deadline[]
     */
    public $Deadline;
    /**
     * The PenaltyFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PenaltyFee
     */
    public $PenaltyFee;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional information about the cancel penalty.
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * The GuaranteeRequiredInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, a guarantee is required.
     * - use: optional
     * @var bool
     */
    public $GuaranteeRequiredInd;
    /**
     * The ModifyPenaltyInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, this indicates the penalty information is for a modification rather than a cancellation.
     * - use: optional
     * @var bool
     */
    public $ModifyPenaltyInd;
    /**
     * Constructor method for CancelPenaltyInfo
     * @uses CancelPenaltyInfo::setDeadline()
     * @uses CancelPenaltyInfo::setPenaltyFee()
     * @uses CancelPenaltyInfo::setDescription()
     * @uses CancelPenaltyInfo::setGuaranteeRequiredInd()
     * @uses CancelPenaltyInfo::setModifyPenaltyInd()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Deadline[] $deadline
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PenaltyFee $penaltyFee
     * @param mixed $description
     * @param bool $guaranteeRequiredInd
     * @param bool $modifyPenaltyInd
     */
    public function __construct(array $deadline = array(), \Devlabs91\GenericOtaHotelApiService\StructType\PenaltyFee $penaltyFee = null, $description = null, $guaranteeRequiredInd = null, $modifyPenaltyInd = null)
    {
        $this
            ->setDeadline($deadline)
            ->setPenaltyFee($penaltyFee)
            ->setDescription($description)
            ->setGuaranteeRequiredInd($guaranteeRequiredInd)
            ->setModifyPenaltyInd($modifyPenaltyInd);
    }
    /**
     * Get Deadline value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Deadline[]|null
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }
    /**
     * Set Deadline value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Deadline[] $deadline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyInfo
     */
    public function setDeadline(array $deadline = array())
    {
        foreach ($deadline as $cancelPenaltyInfoDeadlineItem) {
            // validation for constraint: itemType
            if (!$cancelPenaltyInfoDeadlineItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Deadline) {
                throw new \InvalidArgumentException(sprintf('The Deadline property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Deadline, "%s" given', is_object($cancelPenaltyInfoDeadlineItem) ? get_class($cancelPenaltyInfoDeadlineItem) : gettype($cancelPenaltyInfoDeadlineItem)), __LINE__);
            }
        }
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Add item to Deadline value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Deadline $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyInfo
     */
    public function addToDeadline(\Devlabs91\GenericOtaHotelApiService\StructType\Deadline $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Deadline) {
            throw new \InvalidArgumentException(sprintf('The Deadline property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Deadline, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Deadline[] = $item;
        return $this;
    }
    /**
     * Get PenaltyFee value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PenaltyFee|null
     */
    public function getPenaltyFee()
    {
        return $this->PenaltyFee;
    }
    /**
     * Set PenaltyFee value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PenaltyFee $penaltyFee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyInfo
     */
    public function setPenaltyFee(\Devlabs91\GenericOtaHotelApiService\StructType\PenaltyFee $penaltyFee = null)
    {
        $this->PenaltyFee = $penaltyFee;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyInfo
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get GuaranteeRequiredInd value
     * @return bool|null
     */
    public function getGuaranteeRequiredInd()
    {
        return $this->GuaranteeRequiredInd;
    }
    /**
     * Set GuaranteeRequiredInd value
     * @param bool $guaranteeRequiredInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyInfo
     */
    public function setGuaranteeRequiredInd($guaranteeRequiredInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteeRequiredInd) && !is_bool($guaranteeRequiredInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteeRequiredInd)), __LINE__);
        }
        $this->GuaranteeRequiredInd = $guaranteeRequiredInd;
        return $this;
    }
    /**
     * Get ModifyPenaltyInd value
     * @return bool|null
     */
    public function getModifyPenaltyInd()
    {
        return $this->ModifyPenaltyInd;
    }
    /**
     * Set ModifyPenaltyInd value
     * @param bool $modifyPenaltyInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyInfo
     */
    public function setModifyPenaltyInd($modifyPenaltyInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($modifyPenaltyInd) && !is_bool($modifyPenaltyInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($modifyPenaltyInd)), __LINE__);
        }
        $this->ModifyPenaltyInd = $modifyPenaltyInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyInfo
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

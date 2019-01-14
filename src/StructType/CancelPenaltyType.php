<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPenaltyType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The CancelPenalty class defines the cancellation policy of the hotel facility.
 * @subpackage Structs
 */
class CancelPenaltyType extends AbstractStructBase
{
    /**
     * The Deadline
     * Meta informations extracted from the WSDL
     * - documentation: Cancellation deadline, absolute or relative.
     * - minOccurs: 0
     * @var mixed
     */
    public $Deadline;
    /**
     * The AmountPercent
     * Meta informations extracted from the WSDL
     * - documentation: Cancellation fee expressed as a fixed amount, or percentage of/or room nights.
     * - minOccurs: 0
     * @var mixed
     */
    public $AmountPercent;
    /**
     * The PenaltyDescription
     * Meta informations extracted from the WSDL
     * - documentation: Text description of the Penalty in a given language.
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PenaltyDescription;
    /**
     * The ConfirmClassCode
     * Meta informations extracted from the WSDL
     * - documentation: Confirm Class.
     * - use: optional
     * @var string
     */
    public $ConfirmClassCode;
    /**
     * The PolicyCode
     * Meta informations extracted from the WSDL
     * - documentation: Policy Class.
     * - use: optional
     * @var string
     */
    public $PolicyCode;
    /**
     * The NonRefundable
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that reservation is non refundable, therefore a 100% penalty is applied, irrespective of deadline.
     * - use: optional
     * @var bool
     */
    public $NonRefundable;
    /**
     * Constructor method for CancelPenaltyType
     * @uses CancelPenaltyType::setDeadline()
     * @uses CancelPenaltyType::setAmountPercent()
     * @uses CancelPenaltyType::setPenaltyDescription()
     * @uses CancelPenaltyType::setConfirmClassCode()
     * @uses CancelPenaltyType::setPolicyCode()
     * @uses CancelPenaltyType::setNonRefundable()
     * @param mixed $deadline
     * @param mixed $amountPercent
     * @param mixed[] $penaltyDescription
     * @param string $confirmClassCode
     * @param string $policyCode
     * @param bool $nonRefundable
     */
    public function __construct($deadline = null, $amountPercent = null, array $penaltyDescription = array(), $confirmClassCode = null, $policyCode = null, $nonRefundable = null)
    {
        $this
            ->setDeadline($deadline)
            ->setAmountPercent($amountPercent)
            ->setPenaltyDescription($penaltyDescription)
            ->setConfirmClassCode($confirmClassCode)
            ->setPolicyCode($policyCode)
            ->setNonRefundable($nonRefundable);
    }
    /**
     * Get Deadline value
     * @return mixed|null
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }
    /**
     * Set Deadline value
     * @param mixed $deadline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyType
     */
    public function setDeadline($deadline = null)
    {
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Get AmountPercent value
     * @return mixed|null
     */
    public function getAmountPercent()
    {
        return $this->AmountPercent;
    }
    /**
     * Set AmountPercent value
     * @param mixed $amountPercent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyType
     */
    public function setAmountPercent($amountPercent = null)
    {
        $this->AmountPercent = $amountPercent;
        return $this;
    }
    /**
     * Get PenaltyDescription value
     * @return mixed[]|null
     */
    public function getPenaltyDescription()
    {
        return $this->PenaltyDescription;
    }
    /**
     * Set PenaltyDescription value
     * @throws \InvalidArgumentException
     * @param mixed[] $penaltyDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyType
     */
    public function setPenaltyDescription(array $penaltyDescription = array())
    {
        foreach ($penaltyDescription as $cancelPenaltyTypePenaltyDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PenaltyDescription property can only contain items of anyType, "%s" given', is_object($cancelPenaltyTypePenaltyDescriptionItem) ? get_class($cancelPenaltyTypePenaltyDescriptionItem) : gettype($cancelPenaltyTypePenaltyDescriptionItem)), __LINE__);
            }
        }
        $this->PenaltyDescription = $penaltyDescription;
        return $this;
    }
    /**
     * Add item to PenaltyDescription value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyType
     */
    public function addToPenaltyDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PenaltyDescription property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PenaltyDescription[] = $item;
        return $this;
    }
    /**
     * Get ConfirmClassCode value
     * @return string|null
     */
    public function getConfirmClassCode()
    {
        return $this->ConfirmClassCode;
    }
    /**
     * Set ConfirmClassCode value
     * @param string $confirmClassCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyType
     */
    public function setConfirmClassCode($confirmClassCode = null)
    {
        // validation for constraint: string
        if (!is_null($confirmClassCode) && !is_string($confirmClassCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmClassCode)), __LINE__);
        }
        $this->ConfirmClassCode = $confirmClassCode;
        return $this;
    }
    /**
     * Get PolicyCode value
     * @return string|null
     */
    public function getPolicyCode()
    {
        return $this->PolicyCode;
    }
    /**
     * Set PolicyCode value
     * @param string $policyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyType
     */
    public function setPolicyCode($policyCode = null)
    {
        // validation for constraint: string
        if (!is_null($policyCode) && !is_string($policyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyCode)), __LINE__);
        }
        $this->PolicyCode = $policyCode;
        return $this;
    }
    /**
     * Get NonRefundable value
     * @return bool|null
     */
    public function getNonRefundable()
    {
        return $this->NonRefundable;
    }
    /**
     * Set NonRefundable value
     * @param bool $nonRefundable
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyType
     */
    public function setNonRefundable($nonRefundable = null)
    {
        // validation for constraint: boolean
        if (!is_null($nonRefundable) && !is_bool($nonRefundable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nonRefundable)), __LINE__);
        }
        $this->NonRefundable = $nonRefundable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelPenaltyType
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

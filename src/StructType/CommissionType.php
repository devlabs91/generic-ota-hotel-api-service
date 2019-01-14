<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Commission element contains the data required for determining the commission amount to be paid to an agent. The Commission Amount is calculated by applying a Percent to the CommissionableAmount and adding any flat amount that may
 * apply.
 * @subpackage Structs
 */
class CommissionType extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the recipient of the commission.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The CommissionableAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $CommissionableAmount;
    /**
     * The PrepaidAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $PrepaidAmount;
    /**
     * The FlatCommission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $FlatCommission;
    /**
     * The CommissionPayableAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $CommissionPayableAmount;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Comment;
    /**
     * The StatusType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $StatusType;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Percent;
    /**
     * The ReasonCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the reason why a commission is not paid or not paid in full.
     * - use: optional
     * @var string
     */
    public $ReasonCode;
    /**
     * The BillToID
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $BillToID;
    /**
     * Constructor method for CommissionType
     * @uses CommissionType::setUniqueID()
     * @uses CommissionType::setCommissionableAmount()
     * @uses CommissionType::setPrepaidAmount()
     * @uses CommissionType::setFlatCommission()
     * @uses CommissionType::setCommissionPayableAmount()
     * @uses CommissionType::setComment()
     * @uses CommissionType::setStatusType()
     * @uses CommissionType::setPercent()
     * @uses CommissionType::setReasonCode()
     * @uses CommissionType::setBillToID()
     * @param mixed $uniqueID
     * @param mixed $commissionableAmount
     * @param mixed $prepaidAmount
     * @param mixed $flatCommission
     * @param mixed $commissionPayableAmount
     * @param mixed $comment
     * @param string $statusType
     * @param string $percent
     * @param string $reasonCode
     * @param string $billToID
     */
    public function __construct($uniqueID = null, $commissionableAmount = null, $prepaidAmount = null, $flatCommission = null, $commissionPayableAmount = null, $comment = null, $statusType = null, $percent = null, $reasonCode = null, $billToID = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setCommissionableAmount($commissionableAmount)
            ->setPrepaidAmount($prepaidAmount)
            ->setFlatCommission($flatCommission)
            ->setCommissionPayableAmount($commissionPayableAmount)
            ->setComment($comment)
            ->setStatusType($statusType)
            ->setPercent($percent)
            ->setReasonCode($reasonCode)
            ->setBillToID($billToID);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get CommissionableAmount value
     * @return mixed|null
     */
    public function getCommissionableAmount()
    {
        return $this->CommissionableAmount;
    }
    /**
     * Set CommissionableAmount value
     * @param mixed $commissionableAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
     */
    public function setCommissionableAmount($commissionableAmount = null)
    {
        $this->CommissionableAmount = $commissionableAmount;
        return $this;
    }
    /**
     * Get PrepaidAmount value
     * @return mixed|null
     */
    public function getPrepaidAmount()
    {
        return $this->PrepaidAmount;
    }
    /**
     * Set PrepaidAmount value
     * @param mixed $prepaidAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
     */
    public function setPrepaidAmount($prepaidAmount = null)
    {
        $this->PrepaidAmount = $prepaidAmount;
        return $this;
    }
    /**
     * Get FlatCommission value
     * @return mixed|null
     */
    public function getFlatCommission()
    {
        return $this->FlatCommission;
    }
    /**
     * Set FlatCommission value
     * @param mixed $flatCommission
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
     */
    public function setFlatCommission($flatCommission = null)
    {
        $this->FlatCommission = $flatCommission;
        return $this;
    }
    /**
     * Get CommissionPayableAmount value
     * @return mixed|null
     */
    public function getCommissionPayableAmount()
    {
        return $this->CommissionPayableAmount;
    }
    /**
     * Set CommissionPayableAmount value
     * @param mixed $commissionPayableAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
     */
    public function setCommissionPayableAmount($commissionPayableAmount = null)
    {
        $this->CommissionPayableAmount = $commissionPayableAmount;
        return $this;
    }
    /**
     * Get Comment value
     * @return mixed|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param mixed $comment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
     */
    public function setComment($comment = null)
    {
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get StatusType value
     * @return string|null
     */
    public function getStatusType()
    {
        return $this->StatusType;
    }
    /**
     * Set StatusType value
     * @param string $statusType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
     */
    public function setStatusType($statusType = null)
    {
        // validation for constraint: string
        if (!is_null($statusType) && !is_string($statusType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusType)), __LINE__);
        }
        $this->StatusType = $statusType;
        return $this;
    }
    /**
     * Get Percent value
     * @return string|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percent)), __LINE__);
        }
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get ReasonCode value
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param string $reasonCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
     */
    public function setReasonCode($reasonCode = null)
    {
        // validation for constraint: string
        if (!is_null($reasonCode) && !is_string($reasonCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reasonCode)), __LINE__);
        }
        $this->ReasonCode = $reasonCode;
        return $this;
    }
    /**
     * Get BillToID value
     * @return string|null
     */
    public function getBillToID()
    {
        return $this->BillToID;
    }
    /**
     * Set BillToID value
     * @param string $billToID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
     */
    public function setBillToID($billToID = null)
    {
        // validation for constraint: string
        if (!is_null($billToID) && !is_string($billToID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billToID)), __LINE__);
        }
        $this->BillToID = $billToID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionType
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

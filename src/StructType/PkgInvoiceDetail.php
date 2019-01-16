<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgInvoiceDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: A list of all the items making up a costed booking
 * @subpackage Structs
 */
class PkgInvoiceDetail extends AbstractStructBase
{
    /**
     * The CostingItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CostingItems
     */
    public $CostingItems;
    /**
     * The GrossAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GrossAmount
     */
    public $GrossAmount;
    /**
     * The DepositAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DepositAmount
     */
    public $DepositAmount;
    /**
     * The AgentCommission
     * Meta informations extracted from the WSDL
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AgentCommission[]
     */
    public $AgentCommission;
    /**
     * The NetAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\NetAmount
     */
    public $NetAmount;
    /**
     * The TaxItems
     * Meta informations extracted from the WSDL
     * - documentation: A collection of tax item lines.
     * - minOccurs: 0
     * @var mixed
     */
    public $TaxItems;
    /**
     * The BalanceDueAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BalanceDueAmount
     */
    public $BalanceDueAmount;
    /**
     * The AmountReceived
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AmountReceived
     */
    public $AmountReceived;
    /**
     * Constructor method for PkgInvoiceDetail
     * @uses PkgInvoiceDetail::setCostingItems()
     * @uses PkgInvoiceDetail::setGrossAmount()
     * @uses PkgInvoiceDetail::setDepositAmount()
     * @uses PkgInvoiceDetail::setAgentCommission()
     * @uses PkgInvoiceDetail::setNetAmount()
     * @uses PkgInvoiceDetail::setTaxItems()
     * @uses PkgInvoiceDetail::setBalanceDueAmount()
     * @uses PkgInvoiceDetail::setAmountReceived()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CostingItems $costingItems
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GrossAmount $grossAmount
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DepositAmount $depositAmount
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AgentCommission[] $agentCommission
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\NetAmount $netAmount
     * @param mixed $taxItems
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BalanceDueAmount $balanceDueAmount
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AmountReceived $amountReceived
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\CostingItems $costingItems = null, \Devlabs91\GenericOtaHotelApiService\StructType\GrossAmount $grossAmount = null, \Devlabs91\GenericOtaHotelApiService\StructType\DepositAmount $depositAmount = null, array $agentCommission = array(), \Devlabs91\GenericOtaHotelApiService\StructType\NetAmount $netAmount = null, $taxItems = null, \Devlabs91\GenericOtaHotelApiService\StructType\BalanceDueAmount $balanceDueAmount = null, \Devlabs91\GenericOtaHotelApiService\StructType\AmountReceived $amountReceived = null)
    {
        $this
            ->setCostingItems($costingItems)
            ->setGrossAmount($grossAmount)
            ->setDepositAmount($depositAmount)
            ->setAgentCommission($agentCommission)
            ->setNetAmount($netAmount)
            ->setTaxItems($taxItems)
            ->setBalanceDueAmount($balanceDueAmount)
            ->setAmountReceived($amountReceived);
    }
    /**
     * Get CostingItems value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItems|null
     */
    public function getCostingItems()
    {
        return $this->CostingItems;
    }
    /**
     * Set CostingItems value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CostingItems $costingItems
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setCostingItems(\Devlabs91\GenericOtaHotelApiService\StructType\CostingItems $costingItems = null)
    {
        $this->CostingItems = $costingItems;
        return $this;
    }
    /**
     * Get GrossAmount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GrossAmount|null
     */
    public function getGrossAmount()
    {
        return $this->GrossAmount;
    }
    /**
     * Set GrossAmount value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GrossAmount $grossAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setGrossAmount(\Devlabs91\GenericOtaHotelApiService\StructType\GrossAmount $grossAmount = null)
    {
        $this->GrossAmount = $grossAmount;
        return $this;
    }
    /**
     * Get DepositAmount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DepositAmount|null
     */
    public function getDepositAmount()
    {
        return $this->DepositAmount;
    }
    /**
     * Set DepositAmount value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DepositAmount $depositAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setDepositAmount(\Devlabs91\GenericOtaHotelApiService\StructType\DepositAmount $depositAmount = null)
    {
        $this->DepositAmount = $depositAmount;
        return $this;
    }
    /**
     * Get AgentCommission value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgentCommission[]|null
     */
    public function getAgentCommission()
    {
        return $this->AgentCommission;
    }
    /**
     * Set AgentCommission value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AgentCommission[] $agentCommission
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setAgentCommission(array $agentCommission = array())
    {
        foreach ($agentCommission as $pkgInvoiceDetailAgentCommissionItem) {
            // validation for constraint: itemType
            if (!$pkgInvoiceDetailAgentCommissionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AgentCommission) {
                throw new \InvalidArgumentException(sprintf('The AgentCommission property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AgentCommission, "%s" given', is_object($pkgInvoiceDetailAgentCommissionItem) ? get_class($pkgInvoiceDetailAgentCommissionItem) : gettype($pkgInvoiceDetailAgentCommissionItem)), __LINE__);
            }
        }
        $this->AgentCommission = $agentCommission;
        return $this;
    }
    /**
     * Add item to AgentCommission value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AgentCommission $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function addToAgentCommission(\Devlabs91\GenericOtaHotelApiService\StructType\AgentCommission $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AgentCommission) {
            throw new \InvalidArgumentException(sprintf('The AgentCommission property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AgentCommission, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AgentCommission[] = $item;
        return $this;
    }
    /**
     * Get NetAmount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\NetAmount|null
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }
    /**
     * Set NetAmount value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\NetAmount $netAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setNetAmount(\Devlabs91\GenericOtaHotelApiService\StructType\NetAmount $netAmount = null)
    {
        $this->NetAmount = $netAmount;
        return $this;
    }
    /**
     * Get TaxItems value
     * @return mixed|null
     */
    public function getTaxItems()
    {
        return $this->TaxItems;
    }
    /**
     * Set TaxItems value
     * @param mixed $taxItems
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setTaxItems($taxItems = null)
    {
        $this->TaxItems = $taxItems;
        return $this;
    }
    /**
     * Get BalanceDueAmount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BalanceDueAmount|null
     */
    public function getBalanceDueAmount()
    {
        return $this->BalanceDueAmount;
    }
    /**
     * Set BalanceDueAmount value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BalanceDueAmount $balanceDueAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setBalanceDueAmount(\Devlabs91\GenericOtaHotelApiService\StructType\BalanceDueAmount $balanceDueAmount = null)
    {
        $this->BalanceDueAmount = $balanceDueAmount;
        return $this;
    }
    /**
     * Get AmountReceived value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountReceived|null
     */
    public function getAmountReceived()
    {
        return $this->AmountReceived;
    }
    /**
     * Set AmountReceived value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AmountReceived $amountReceived
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setAmountReceived(\Devlabs91\GenericOtaHotelApiService\StructType\AmountReceived $amountReceived = null)
    {
        $this->AmountReceived = $amountReceived;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
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

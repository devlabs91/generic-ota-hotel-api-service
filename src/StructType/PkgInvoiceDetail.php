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
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CostingItems
     */
    public $CostingItems;
    /**
     * The GrossAmount
     * Meta informations extracted from the WSDL
     * - documentation: Total amount in the declared unit of currency; may be repeated for multiple currencies e.g. GBP and Euros.
     * - maxOccurs: 2
     * @var mixed[]
     */
    public $GrossAmount;
    /**
     * The DepositAmount
     * Meta informations extracted from the WSDL
     * - documentation: Defines the amount payable at the time of booking to secure the booking; may be repeated for multiple currencies e.g. GBP and Euros.
     * - maxOccurs: 2
     * @var mixed[]
     */
    public $DepositAmount;
    /**
     * The DiscountCommission
     * Meta informations extracted from the WSDL
     * - documentation: Defines the fee earned by the agent for the booking or an amount of discount given on a direct booking.
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var mixed[]
     */
    public $DiscountCommission;
    /**
     * The NetAmount
     * Meta informations extracted from the WSDL
     * - documentation: The amount payable by the agent, i.e. GrossAmount less Discount/Commission; may be repeated for multiple currencies e.g. GBP and Euros.
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
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
     * - documentation: The amount remaining to be paid by the customer i.e. GrossAmount less DepositAmount; may be repeated for multiple currencies e.g. GBP and Euros.
     * - maxOccurs: 2
     * @var mixed[]
     */
    public $BalanceDueAmount;
    /**
     * The BalanceDueDate
     * Meta informations extracted from the WSDL
     * - documentation: Date on which payment must be received
     * - use: optional
     * @var string
     */
    public $BalanceDueDate;
    /**
     * Constructor method for PkgInvoiceDetail
     * @uses PkgInvoiceDetail::setCostingItems()
     * @uses PkgInvoiceDetail::setGrossAmount()
     * @uses PkgInvoiceDetail::setDepositAmount()
     * @uses PkgInvoiceDetail::setDiscountCommission()
     * @uses PkgInvoiceDetail::setNetAmount()
     * @uses PkgInvoiceDetail::setTaxItems()
     * @uses PkgInvoiceDetail::setBalanceDueAmount()
     * @uses PkgInvoiceDetail::setBalanceDueDate()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CostingItems $costingItems
     * @param mixed[] $grossAmount
     * @param mixed[] $depositAmount
     * @param mixed[] $discountCommission
     * @param mixed[] $netAmount
     * @param mixed $taxItems
     * @param mixed[] $balanceDueAmount
     * @param string $balanceDueDate
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\CostingItems $costingItems = null, array $grossAmount = array(), array $depositAmount = array(), array $discountCommission = array(), array $netAmount = array(), $taxItems = null, array $balanceDueAmount = array(), $balanceDueDate = null)
    {
        $this
            ->setCostingItems($costingItems)
            ->setGrossAmount($grossAmount)
            ->setDepositAmount($depositAmount)
            ->setDiscountCommission($discountCommission)
            ->setNetAmount($netAmount)
            ->setTaxItems($taxItems)
            ->setBalanceDueAmount($balanceDueAmount)
            ->setBalanceDueDate($balanceDueDate);
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
     * @return mixed[]|null
     */
    public function getGrossAmount()
    {
        return $this->GrossAmount;
    }
    /**
     * Set GrossAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $grossAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setGrossAmount(array $grossAmount = array())
    {
        foreach ($grossAmount as $pkgInvoiceDetailGrossAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The GrossAmount property can only contain items of anyType, "%s" given', is_object($pkgInvoiceDetailGrossAmountItem) ? get_class($pkgInvoiceDetailGrossAmountItem) : gettype($pkgInvoiceDetailGrossAmountItem)), __LINE__);
            }
        }
        $this->GrossAmount = $grossAmount;
        return $this;
    }
    /**
     * Add item to GrossAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function addToGrossAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The GrossAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GrossAmount[] = $item;
        return $this;
    }
    /**
     * Get DepositAmount value
     * @return mixed[]|null
     */
    public function getDepositAmount()
    {
        return $this->DepositAmount;
    }
    /**
     * Set DepositAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $depositAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setDepositAmount(array $depositAmount = array())
    {
        foreach ($depositAmount as $pkgInvoiceDetailDepositAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The DepositAmount property can only contain items of anyType, "%s" given', is_object($pkgInvoiceDetailDepositAmountItem) ? get_class($pkgInvoiceDetailDepositAmountItem) : gettype($pkgInvoiceDetailDepositAmountItem)), __LINE__);
            }
        }
        $this->DepositAmount = $depositAmount;
        return $this;
    }
    /**
     * Add item to DepositAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function addToDepositAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The DepositAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DepositAmount[] = $item;
        return $this;
    }
    /**
     * Get DiscountCommission value
     * @return mixed[]|null
     */
    public function getDiscountCommission()
    {
        return $this->DiscountCommission;
    }
    /**
     * Set DiscountCommission value
     * @throws \InvalidArgumentException
     * @param mixed[] $discountCommission
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setDiscountCommission(array $discountCommission = array())
    {
        foreach ($discountCommission as $pkgInvoiceDetailDiscountCommissionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The DiscountCommission property can only contain items of anyType, "%s" given', is_object($pkgInvoiceDetailDiscountCommissionItem) ? get_class($pkgInvoiceDetailDiscountCommissionItem) : gettype($pkgInvoiceDetailDiscountCommissionItem)), __LINE__);
            }
        }
        $this->DiscountCommission = $discountCommission;
        return $this;
    }
    /**
     * Add item to DiscountCommission value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function addToDiscountCommission($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The DiscountCommission property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DiscountCommission[] = $item;
        return $this;
    }
    /**
     * Get NetAmount value
     * @return mixed[]|null
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }
    /**
     * Set NetAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $netAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setNetAmount(array $netAmount = array())
    {
        foreach ($netAmount as $pkgInvoiceDetailNetAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The NetAmount property can only contain items of anyType, "%s" given', is_object($pkgInvoiceDetailNetAmountItem) ? get_class($pkgInvoiceDetailNetAmountItem) : gettype($pkgInvoiceDetailNetAmountItem)), __LINE__);
            }
        }
        $this->NetAmount = $netAmount;
        return $this;
    }
    /**
     * Add item to NetAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function addToNetAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The NetAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NetAmount[] = $item;
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
     * @return mixed[]|null
     */
    public function getBalanceDueAmount()
    {
        return $this->BalanceDueAmount;
    }
    /**
     * Set BalanceDueAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $balanceDueAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setBalanceDueAmount(array $balanceDueAmount = array())
    {
        foreach ($balanceDueAmount as $pkgInvoiceDetailBalanceDueAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The BalanceDueAmount property can only contain items of anyType, "%s" given', is_object($pkgInvoiceDetailBalanceDueAmountItem) ? get_class($pkgInvoiceDetailBalanceDueAmountItem) : gettype($pkgInvoiceDetailBalanceDueAmountItem)), __LINE__);
            }
        }
        $this->BalanceDueAmount = $balanceDueAmount;
        return $this;
    }
    /**
     * Add item to BalanceDueAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function addToBalanceDueAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The BalanceDueAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BalanceDueAmount[] = $item;
        return $this;
    }
    /**
     * Get BalanceDueDate value
     * @return string|null
     */
    public function getBalanceDueDate()
    {
        return $this->BalanceDueDate;
    }
    /**
     * Set BalanceDueDate value
     * @param string $balanceDueDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgInvoiceDetail
     */
    public function setBalanceDueDate($balanceDueDate = null)
    {
        // validation for constraint: string
        if (!is_null($balanceDueDate) && !is_string($balanceDueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($balanceDueDate)), __LINE__);
        }
        $this->BalanceDueDate = $balanceDueDate;
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

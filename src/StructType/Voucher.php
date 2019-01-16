<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Voucher StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a paper or electronic document indicating prepayment. | The effective date, expiry date and series code of the voucher.
 * @subpackage Structs
 */
class Voucher extends AbstractStructBase
{
    /**
     * The BillingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Reference of the billing account which handles the payment transaction.
     * - use: optional
     * @var string
     */
    public $BillingNumber;
    /**
     * The SupplierIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the electronic voucher, created by the supplier.
     * - use: optional
     * @var string
     */
    public $SupplierIdentifier;
    /**
     * The Identifier
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the electronic voucher.
     * - use: optional
     * @var string
     */
    public $Identifier;
    /**
     * The ValueType
     * Meta informations extracted from the WSDL
     * - documentation: Defines the type of voucher (e.g., full credit or partial credit).
     * - use: optional
     * @var string
     */
    public $ValueType;
    /**
     * The ElectronicIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates the voucher is electronic. An E-voucher is a value document issued by the Travel Agent for the customer. The e-voucher can be used as a proof of reservation, but more normally, as a full-payment or partial
     * payment.
     * - use: optional
     * @var bool
     */
    public $ElectronicIndicator;
    /**
     * Constructor method for Voucher
     * @uses Voucher::setBillingNumber()
     * @uses Voucher::setSupplierIdentifier()
     * @uses Voucher::setIdentifier()
     * @uses Voucher::setValueType()
     * @uses Voucher::setElectronicIndicator()
     * @param string $billingNumber
     * @param string $supplierIdentifier
     * @param string $identifier
     * @param string $valueType
     * @param bool $electronicIndicator
     */
    public function __construct($billingNumber = null, $supplierIdentifier = null, $identifier = null, $valueType = null, $electronicIndicator = null)
    {
        $this
            ->setBillingNumber($billingNumber)
            ->setSupplierIdentifier($supplierIdentifier)
            ->setIdentifier($identifier)
            ->setValueType($valueType)
            ->setElectronicIndicator($electronicIndicator);
    }
    /**
     * Get BillingNumber value
     * @return string|null
     */
    public function getBillingNumber()
    {
        return $this->BillingNumber;
    }
    /**
     * Set BillingNumber value
     * @param string $billingNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Voucher
     */
    public function setBillingNumber($billingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($billingNumber) && !is_string($billingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingNumber)), __LINE__);
        }
        $this->BillingNumber = $billingNumber;
        return $this;
    }
    /**
     * Get SupplierIdentifier value
     * @return string|null
     */
    public function getSupplierIdentifier()
    {
        return $this->SupplierIdentifier;
    }
    /**
     * Set SupplierIdentifier value
     * @param string $supplierIdentifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Voucher
     */
    public function setSupplierIdentifier($supplierIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($supplierIdentifier) && !is_string($supplierIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierIdentifier)), __LINE__);
        }
        $this->SupplierIdentifier = $supplierIdentifier;
        return $this;
    }
    /**
     * Get Identifier value
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->Identifier;
    }
    /**
     * Set Identifier value
     * @param string $identifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Voucher
     */
    public function setIdentifier($identifier = null)
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identifier)), __LINE__);
        }
        $this->Identifier = $identifier;
        return $this;
    }
    /**
     * Get ValueType value
     * @return string|null
     */
    public function getValueType()
    {
        return $this->ValueType;
    }
    /**
     * Set ValueType value
     * @param string $valueType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Voucher
     */
    public function setValueType($valueType = null)
    {
        // validation for constraint: string
        if (!is_null($valueType) && !is_string($valueType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valueType)), __LINE__);
        }
        $this->ValueType = $valueType;
        return $this;
    }
    /**
     * Get ElectronicIndicator value
     * @return bool|null
     */
    public function getElectronicIndicator()
    {
        return $this->ElectronicIndicator;
    }
    /**
     * Set ElectronicIndicator value
     * @param bool $electronicIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Voucher
     */
    public function setElectronicIndicator($electronicIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($electronicIndicator) && !is_bool($electronicIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($electronicIndicator)), __LINE__);
        }
        $this->ElectronicIndicator = $electronicIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Voucher
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

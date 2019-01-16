<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentForm StructType
 * Meta informations extracted from the WSDL
 * - documentation: Methods of providing funds and guarantees for travel by the customer. | Method of providing funds for travel by the company.
 * @subpackage Structs
 */
class PaymentForm extends PaymentFormType
{
    /**
     * The AssociatedSupplier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedSupplier
     */
    public $AssociatedSupplier;
    /**
     * The TransferAction
     * Meta informations extracted from the WSDL
     * - documentation: Indicates under what conditions the element will be transfered to the booking. | Indicates under what conditions the element will be transfered to the booking.
     * - use: optional
     * @var string
     */
    public $TransferAction;
    /**
     * The DefaultInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates the preferred form of payment.
     * - use: optional
     * @var bool
     */
    public $DefaultInd;
    /**
     * The ParentCompanyRef
     * Meta informations extracted from the WSDL
     * - documentation: A reference to the company from which this element has been inherited.
     * - use: optional
     * @var string
     */
    public $ParentCompanyRef;
    /**
     * Constructor method for PaymentForm
     * @uses PaymentForm::setAssociatedSupplier()
     * @uses PaymentForm::setTransferAction()
     * @uses PaymentForm::setDefaultInd()
     * @uses PaymentForm::setParentCompanyRef()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedSupplier $associatedSupplier
     * @param string $transferAction
     * @param bool $defaultInd
     * @param string $parentCompanyRef
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\AssociatedSupplier $associatedSupplier = null, $transferAction = null, $defaultInd = null, $parentCompanyRef = null)
    {
        $this
            ->setAssociatedSupplier($associatedSupplier)
            ->setTransferAction($transferAction)
            ->setDefaultInd($defaultInd)
            ->setParentCompanyRef($parentCompanyRef);
    }
    /**
     * Get AssociatedSupplier value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedSupplier|null
     */
    public function getAssociatedSupplier()
    {
        return $this->AssociatedSupplier;
    }
    /**
     * Set AssociatedSupplier value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedSupplier $associatedSupplier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm
     */
    public function setAssociatedSupplier(\Devlabs91\GenericOtaHotelApiService\StructType\AssociatedSupplier $associatedSupplier = null)
    {
        $this->AssociatedSupplier = $associatedSupplier;
        return $this;
    }
    /**
     * Get TransferAction value
     * @return string|null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param string $transferAction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm
     */
    public function setTransferAction($transferAction = null)
    {
        // validation for constraint: string
        if (!is_null($transferAction) && !is_string($transferAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferAction)), __LINE__);
        }
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Get DefaultInd value
     * @return bool|null
     */
    public function getDefaultInd()
    {
        return $this->DefaultInd;
    }
    /**
     * Set DefaultInd value
     * @param bool $defaultInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm
     */
    public function setDefaultInd($defaultInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaultInd) && !is_bool($defaultInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($defaultInd)), __LINE__);
        }
        $this->DefaultInd = $defaultInd;
        return $this;
    }
    /**
     * Get ParentCompanyRef value
     * @return string|null
     */
    public function getParentCompanyRef()
    {
        return $this->ParentCompanyRef;
    }
    /**
     * Set ParentCompanyRef value
     * @param string $parentCompanyRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm
     */
    public function setParentCompanyRef($parentCompanyRef = null)
    {
        // validation for constraint: string
        if (!is_null($parentCompanyRef) && !is_string($parentCompanyRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentCompanyRef)), __LINE__);
        }
        $this->ParentCompanyRef = $parentCompanyRef;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm
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

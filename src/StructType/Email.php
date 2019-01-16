<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Email StructType
 * Meta informations extracted from the WSDL
 * - documentation: Email address of the person traveling. | Information on an email address for the customer. | Used to pass detailed email information. | The ID attribute in this group is a unique identifying value assigned by the creating system and
 * may be used to reference a primary-key value within a database or in a particular implementation. | Information on an email address for the company.
 * @subpackage Structs
 */
class Email extends EmailType
{
    /**
     * The TransferAction
     * Meta informations extracted from the WSDL
     * - documentation: Indicates under what conditions the element will be transfered to the booking. | Indicates under what conditions the element will be transfered to the booking.
     * - use: optional
     * @var string
     */
    public $TransferAction;
    /**
     * The ParentCompanyRef
     * Meta informations extracted from the WSDL
     * - documentation: A reference to the company from which this element has been inherited.
     * - use: optional
     * @var string
     */
    public $ParentCompanyRef;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * Constructor method for Email
     * @uses Email::setTransferAction()
     * @uses Email::setParentCompanyRef()
     * @uses Email::setOperation()
     * @param string $transferAction
     * @param string $parentCompanyRef
     * @param string $operation
     */
    public function __construct($transferAction = null, $parentCompanyRef = null, $operation = null)
    {
        $this
            ->setTransferAction($transferAction)
            ->setParentCompanyRef($parentCompanyRef)
            ->setOperation($operation);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Email
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Email
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
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Email
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Email
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

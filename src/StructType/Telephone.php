<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Telephone StructType
 * Meta informations extracted from the WSDL
 * - documentation: Telephone number for the person traveling. | Identifies a telephone number. | Information about a telephone number, including the actual number and its usage. | Information about a telephone number, including the actual number and
 * its usage. | Information about a contact's telephone number, including the actual number and its usage. | Information on a telephone number for the customer. | The first and last dates between which this telephone number is in effect. | Information
 * about a telephone number, including the actual number and its usage. | Telephone number associated with company to whom remittance is being directed. | Information about a telephone number, including the actual number and its usage. | Telephone
 * number(s) used in the search. | Detailed telephone information for the search. | Card holder's telephone number used for additional authorization checks. | Used to provide phone numbers for a card holder. | Phone number for the contact person for the
 * off location service. | Information about the telephone numbers for thislocation. | A telephone number associated with the reservation.
 * @subpackage Structs
 */
class Telephone extends AbstractStructBase
{
    /**
     * The TransferAction
     * Meta informations extracted from the WSDL
     * - documentation: Indicates under what conditions the element will be transfered to the booking.
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
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - documentation: A 3 character ATA/ IATA city code of telephone location.
     * - use: optional
     * @var string
     */
    public $LocationCode;
    /**
     * Constructor method for Telephone
     * @uses Telephone::setTransferAction()
     * @uses Telephone::setParentCompanyRef()
     * @uses Telephone::setOperation()
     * @uses Telephone::setLocationCode()
     * @param string $transferAction
     * @param string $parentCompanyRef
     * @param string $operation
     * @param string $locationCode
     */
    public function __construct($transferAction = null, $parentCompanyRef = null, $operation = null, $locationCode = null)
    {
        $this
            ->setTransferAction($transferAction)
            ->setParentCompanyRef($parentCompanyRef)
            ->setOperation($operation)
            ->setLocationCode($locationCode);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone
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
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone
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

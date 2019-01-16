<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirectBillType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Company name and location for sending invoice for remittances for travel services. | Allows for control of the sharing of direct bill data between parties.
 * @subpackage Structs
 */
class DirectBillType extends AbstractStructBase
{
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CompanyName
     */
    public $CompanyName;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Address where remittance should be directed.
     * - minOccurs: 0
     * @var mixed
     */
    public $Address;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: Email address to which remittance should be directed.
     * - minOccurs: 0
     * @var mixed
     */
    public $Email;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Telephone
     */
    public $Telephone;
    /**
     * The DirectBill_ID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for the organization to be billed directly for travel services.
     * - use: optional
     * @var string
     */
    public $DirectBill_ID;
    /**
     * The BillingNumber
     * Meta informations extracted from the WSDL
     * - documentation: The number assigned by the subscriber for billing reconciliation of a corporate account.
     * - use: optional
     * @var string
     */
    public $BillingNumber;
    /**
     * Constructor method for DirectBillType
     * @uses DirectBillType::setCompanyName()
     * @uses DirectBillType::setAddress()
     * @uses DirectBillType::setEmail()
     * @uses DirectBillType::setTelephone()
     * @uses DirectBillType::setDirectBill_ID()
     * @uses DirectBillType::setBillingNumber()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CompanyName $companyName
     * @param mixed $address
     * @param mixed $email
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone
     * @param string $directBill_ID
     * @param string $billingNumber
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\CompanyName $companyName = null, $address = null, $email = null, \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone = null, $directBill_ID = null, $billingNumber = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setAddress($address)
            ->setEmail($email)
            ->setTelephone($telephone)
            ->setDirectBill_ID($directBill_ID)
            ->setBillingNumber($billingNumber);
    }
    /**
     * Get CompanyName value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyName|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CompanyName $companyName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DirectBillType
     */
    public function setCompanyName(\Devlabs91\GenericOtaHotelApiService\StructType\CompanyName $companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get Address value
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param mixed $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DirectBillType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Email value
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param mixed $email
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DirectBillType
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DirectBillType
     */
    public function setTelephone(\Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get DirectBill_ID value
     * @return string|null
     */
    public function getDirectBill_ID()
    {
        return $this->DirectBill_ID;
    }
    /**
     * Set DirectBill_ID value
     * @param string $directBill_ID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DirectBillType
     */
    public function setDirectBill_ID($directBill_ID = null)
    {
        // validation for constraint: string
        if (!is_null($directBill_ID) && !is_string($directBill_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($directBill_ID)), __LINE__);
        }
        $this->DirectBill_ID = $directBill_ID;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DirectBillType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DirectBillType
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

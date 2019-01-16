<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about the account.
 * @subpackage Structs
 */
class AccountInfo extends AbstractStructBase
{
    /**
     * The AccountName
     * Meta informations extracted from the WSDL
     * - documentation: The name on the account.
     * - use: optional
     * @var string
     */
    public $AccountName;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: Describes the name of the company to which the account is attached.
     * - use: optional
     * @var string
     */
    public $CompanyName;
    /**
     * The AccountID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for the account assigned by the merchant.
     * - use: optional
     * @var string
     */
    public $AccountID;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - documentation: Password attached to the account.
     * - use: optional
     * @var string
     */
    public $Password;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Describes the type of the account. Refer to OpenTravel Code List Payment Type (PMT).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for AccountInfo
     * @uses AccountInfo::setAccountName()
     * @uses AccountInfo::setCompanyName()
     * @uses AccountInfo::setAccountID()
     * @uses AccountInfo::setPassword()
     * @uses AccountInfo::setCode()
     * @param string $accountName
     * @param string $companyName
     * @param string $accountID
     * @param string $password
     * @param string $code
     */
    public function __construct($accountName = null, $companyName = null, $accountID = null, $password = null, $code = null)
    {
        $this
            ->setAccountName($accountName)
            ->setCompanyName($companyName)
            ->setAccountID($accountID)
            ->setPassword($password)
            ->setCode($code);
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo
     */
    public function setAccountName($accountName = null)
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get AccountID value
     * @return string|null
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }
    /**
     * Set AccountID value
     * @param string $accountID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo
     */
    public function setAccountID($accountID = null)
    {
        // validation for constraint: string
        if (!is_null($accountID) && !is_string($accountID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountID)), __LINE__);
        }
        $this->AccountID = $accountID;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo
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

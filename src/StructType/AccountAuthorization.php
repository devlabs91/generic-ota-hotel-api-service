<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountAuthorization StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies account information about the customer seeking authorization.
 * @subpackage Structs
 */
class AccountAuthorization extends AbstractStructBase
{
    /**
     * The AccountInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo
     */
    public $AccountInfo;
    /**
     * The NonISO_CurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifying the currency used in the authorization, when it isn't a ISO 4217, three alpha code (e.g., points, miles).
     * - use: optional
     * @var string
     */
    public $NonISO_CurrencyCode;
    /**
     * Constructor method for AccountAuthorization
     * @uses AccountAuthorization::setAccountInfo()
     * @uses AccountAuthorization::setNonISO_CurrencyCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo $accountInfo
     * @param string $nonISO_CurrencyCode
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo $accountInfo = null, $nonISO_CurrencyCode = null)
    {
        $this
            ->setAccountInfo($accountInfo)
            ->setNonISO_CurrencyCode($nonISO_CurrencyCode);
    }
    /**
     * Get AccountInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo|null
     */
    public function getAccountInfo()
    {
        return $this->AccountInfo;
    }
    /**
     * Set AccountInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo $accountInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountAuthorization
     */
    public function setAccountInfo(\Devlabs91\GenericOtaHotelApiService\StructType\AccountInfo $accountInfo = null)
    {
        $this->AccountInfo = $accountInfo;
        return $this;
    }
    /**
     * Get NonISO_CurrencyCode value
     * @return string|null
     */
    public function getNonISO_CurrencyCode()
    {
        return $this->NonISO_CurrencyCode;
    }
    /**
     * Set NonISO_CurrencyCode value
     * @param string $nonISO_CurrencyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountAuthorization
     */
    public function setNonISO_CurrencyCode($nonISO_CurrencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($nonISO_CurrencyCode) && !is_string($nonISO_CurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nonISO_CurrencyCode)), __LINE__);
        }
        $this->NonISO_CurrencyCode = $nonISO_CurrencyCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountAuthorization
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

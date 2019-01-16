<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankAcctType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Customer bank accounts for payments, either for paper checks or electronic funds transfer. | Allows for control of the sharing of bank account information between parties.
 * @subpackage Structs
 */
class BankAcctType extends AbstractStructBase
{
    /**
     * The BankAcctName
     * Meta informations extracted from the WSDL
     * - documentation: The name the account is held under.
     * - minOccurs: 0
     * @var mixed
     */
    public $BankAcctName;
    /**
     * The BankID
     * Meta informations extracted from the WSDL
     * - documentation: Code assigned by authorities to financial institutions; sometimes called bank routing number.
     * - use: optional
     * @var string
     */
    public $BankID;
    /**
     * The AcctType
     * Meta informations extracted from the WSDL
     * - documentation: Describes the bank account used for financing travel (e.g., checking, savings, investment).
     * - use: optional
     * @var string
     */
    public $AcctType;
    /**
     * The BankAcctNumber
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for the account assigned by the bank.
     * - use: optional
     * @var string
     */
    public $BankAcctNumber;
    /**
     * The ChecksAcceptedInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, checks are accepted. If false, checks are not accepted.
     * - use: optional
     * @var bool
     */
    public $ChecksAcceptedInd;
    /**
     * Constructor method for BankAcctType
     * @uses BankAcctType::setBankAcctName()
     * @uses BankAcctType::setBankID()
     * @uses BankAcctType::setAcctType()
     * @uses BankAcctType::setBankAcctNumber()
     * @uses BankAcctType::setChecksAcceptedInd()
     * @param mixed $bankAcctName
     * @param string $bankID
     * @param string $acctType
     * @param string $bankAcctNumber
     * @param bool $checksAcceptedInd
     */
    public function __construct($bankAcctName = null, $bankID = null, $acctType = null, $bankAcctNumber = null, $checksAcceptedInd = null)
    {
        $this
            ->setBankAcctName($bankAcctName)
            ->setBankID($bankID)
            ->setAcctType($acctType)
            ->setBankAcctNumber($bankAcctNumber)
            ->setChecksAcceptedInd($checksAcceptedInd);
    }
    /**
     * Get BankAcctName value
     * @return mixed|null
     */
    public function getBankAcctName()
    {
        return $this->BankAcctName;
    }
    /**
     * Set BankAcctName value
     * @param mixed $bankAcctName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BankAcctType
     */
    public function setBankAcctName($bankAcctName = null)
    {
        $this->BankAcctName = $bankAcctName;
        return $this;
    }
    /**
     * Get BankID value
     * @return string|null
     */
    public function getBankID()
    {
        return $this->BankID;
    }
    /**
     * Set BankID value
     * @param string $bankID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BankAcctType
     */
    public function setBankID($bankID = null)
    {
        // validation for constraint: string
        if (!is_null($bankID) && !is_string($bankID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankID)), __LINE__);
        }
        $this->BankID = $bankID;
        return $this;
    }
    /**
     * Get AcctType value
     * @return string|null
     */
    public function getAcctType()
    {
        return $this->AcctType;
    }
    /**
     * Set AcctType value
     * @param string $acctType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BankAcctType
     */
    public function setAcctType($acctType = null)
    {
        // validation for constraint: string
        if (!is_null($acctType) && !is_string($acctType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acctType)), __LINE__);
        }
        $this->AcctType = $acctType;
        return $this;
    }
    /**
     * Get BankAcctNumber value
     * @return string|null
     */
    public function getBankAcctNumber()
    {
        return $this->BankAcctNumber;
    }
    /**
     * Set BankAcctNumber value
     * @param string $bankAcctNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BankAcctType
     */
    public function setBankAcctNumber($bankAcctNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bankAcctNumber) && !is_string($bankAcctNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAcctNumber)), __LINE__);
        }
        $this->BankAcctNumber = $bankAcctNumber;
        return $this;
    }
    /**
     * Get ChecksAcceptedInd value
     * @return bool|null
     */
    public function getChecksAcceptedInd()
    {
        return $this->ChecksAcceptedInd;
    }
    /**
     * Set ChecksAcceptedInd value
     * @param bool $checksAcceptedInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BankAcctType
     */
    public function setChecksAcceptedInd($checksAcceptedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($checksAcceptedInd) && !is_bool($checksAcceptedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($checksAcceptedInd)), __LINE__);
        }
        $this->ChecksAcceptedInd = $checksAcceptedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BankAcctType
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

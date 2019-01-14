<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IssuerNameType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Name of bank or organization issuing the card (e.g., alumni association, bank, fraternal organization, etc.).
 * @subpackage Structs
 */
class IssuerNameType extends AbstractStructBase
{
    /**
     * The BankID
     * Meta informations extracted from the WSDL
     * - documentation: Code of bank issuing the card.
     * @var string
     */
    public $BankID;
    /**
     * Constructor method for IssuerNameType
     * @uses IssuerNameType::setBankID()
     * @param string $bankID
     */
    public function __construct($bankID = null)
    {
        $this
            ->setBankID($bankID);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\IssuerNameType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\IssuerNameType
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

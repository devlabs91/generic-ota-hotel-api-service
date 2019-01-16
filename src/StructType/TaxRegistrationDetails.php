<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxRegistrationDetails StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ticketing Goods and Services Tax (GST) details (typically the Australian market).
 * @subpackage Structs
 */
class TaxRegistrationDetails extends AbstractStructBase
{
    /**
     * The TaxID
     * Meta informations extracted from the WSDL
     * - documentation: The tax registration identifier e.g., Australian Business Number (ABN).
     * - use: optional
     * @var string
     */
    public $TaxID;
    /**
     * The RecipientName
     * Meta informations extracted from the WSDL
     * - documentation: The recipient's name.
     * - use: optional
     * @var string
     */
    public $RecipientName;
    /**
     * The RecipientAddress
     * Meta informations extracted from the WSDL
     * - documentation: Free text for the recipient's address.
     * - use: optional
     * @var string
     */
    public $RecipientAddress;
    /**
     * Constructor method for TaxRegistrationDetails
     * @uses TaxRegistrationDetails::setTaxID()
     * @uses TaxRegistrationDetails::setRecipientName()
     * @uses TaxRegistrationDetails::setRecipientAddress()
     * @param string $taxID
     * @param string $recipientName
     * @param string $recipientAddress
     */
    public function __construct($taxID = null, $recipientName = null, $recipientAddress = null)
    {
        $this
            ->setTaxID($taxID)
            ->setRecipientName($recipientName)
            ->setRecipientAddress($recipientAddress);
    }
    /**
     * Get TaxID value
     * @return string|null
     */
    public function getTaxID()
    {
        return $this->TaxID;
    }
    /**
     * Set TaxID value
     * @param string $taxID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxRegistrationDetails
     */
    public function setTaxID($taxID = null)
    {
        // validation for constraint: string
        if (!is_null($taxID) && !is_string($taxID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxID)), __LINE__);
        }
        $this->TaxID = $taxID;
        return $this;
    }
    /**
     * Get RecipientName value
     * @return string|null
     */
    public function getRecipientName()
    {
        return $this->RecipientName;
    }
    /**
     * Set RecipientName value
     * @param string $recipientName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxRegistrationDetails
     */
    public function setRecipientName($recipientName = null)
    {
        // validation for constraint: string
        if (!is_null($recipientName) && !is_string($recipientName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientName)), __LINE__);
        }
        $this->RecipientName = $recipientName;
        return $this;
    }
    /**
     * Get RecipientAddress value
     * @return string|null
     */
    public function getRecipientAddress()
    {
        return $this->RecipientAddress;
    }
    /**
     * Set RecipientAddress value
     * @param string $recipientAddress
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxRegistrationDetails
     */
    public function setRecipientAddress($recipientAddress = null)
    {
        // validation for constraint: string
        if (!is_null($recipientAddress) && !is_string($recipientAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientAddress)), __LINE__);
        }
        $this->RecipientAddress = $recipientAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxRegistrationDetails
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

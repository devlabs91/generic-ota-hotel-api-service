<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentCardType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identification about a specific credit card | Date the card becomes valid for use (optional) and the date the card expires (required) in ISO 8601 prescribed format.
 * @subpackage Structs
 */
class PaymentCardType extends AbstractStructBase
{
    /**
     * The CardHolderName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $CardHolderName;
    /**
     * The CardIssuerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $CardIssuerName;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Address;
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of magnetic striped card. Refer to OTA Code ListCard Type (CDT).
     * - use: optional
     * @var string
     */
    public $CardType;
    /**
     * The CardCode
     * Meta informations extracted from the WSDL
     * - documentation: Code indicating the type of credit card. Refer to OTA Code List Card Type(CDT).
     * - use: optional
     * @var string
     */
    public $CardCode;
    /**
     * The CardNumber
     * Meta informations extracted from the WSDL
     * - documentation: Credit card number embossed on the card.
     * - use: optional
     * @var string
     */
    public $CardNumber;
    /**
     * The SeriesCode
     * Meta informations extracted from the WSDL
     * - documentation: Verification digits printed on the card following the embossed number. This may also accommodate the customer identification/batch number (CID), card verification value (CVV2 ), card validation code number (CVC2) on credit card.
     * - use: optional
     * @var string
     */
    public $SeriesCode;
    /**
     * Constructor method for PaymentCardType
     * @uses PaymentCardType::setCardHolderName()
     * @uses PaymentCardType::setCardIssuerName()
     * @uses PaymentCardType::setAddress()
     * @uses PaymentCardType::setCardType()
     * @uses PaymentCardType::setCardCode()
     * @uses PaymentCardType::setCardNumber()
     * @uses PaymentCardType::setSeriesCode()
     * @param mixed $cardHolderName
     * @param mixed $cardIssuerName
     * @param mixed $address
     * @param string $cardType
     * @param string $cardCode
     * @param string $cardNumber
     * @param string $seriesCode
     */
    public function __construct($cardHolderName = null, $cardIssuerName = null, $address = null, $cardType = null, $cardCode = null, $cardNumber = null, $seriesCode = null)
    {
        $this
            ->setCardHolderName($cardHolderName)
            ->setCardIssuerName($cardIssuerName)
            ->setAddress($address)
            ->setCardType($cardType)
            ->setCardCode($cardCode)
            ->setCardNumber($cardNumber)
            ->setSeriesCode($seriesCode);
    }
    /**
     * Get CardHolderName value
     * @return mixed|null
     */
    public function getCardHolderName()
    {
        return $this->CardHolderName;
    }
    /**
     * Set CardHolderName value
     * @param mixed $cardHolderName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCardType
     */
    public function setCardHolderName($cardHolderName = null)
    {
        $this->CardHolderName = $cardHolderName;
        return $this;
    }
    /**
     * Get CardIssuerName value
     * @return mixed|null
     */
    public function getCardIssuerName()
    {
        return $this->CardIssuerName;
    }
    /**
     * Set CardIssuerName value
     * @param mixed $cardIssuerName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCardType
     */
    public function setCardIssuerName($cardIssuerName = null)
    {
        $this->CardIssuerName = $cardIssuerName;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCardType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get CardType value
     * @return string|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @param string $cardType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCardType
     */
    public function setCardType($cardType = null)
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardType)), __LINE__);
        }
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Get CardCode value
     * @return string|null
     */
    public function getCardCode()
    {
        return $this->CardCode;
    }
    /**
     * Set CardCode value
     * @param string $cardCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCardType
     */
    public function setCardCode($cardCode = null)
    {
        // validation for constraint: string
        if (!is_null($cardCode) && !is_string($cardCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardCode)), __LINE__);
        }
        $this->CardCode = $cardCode;
        return $this;
    }
    /**
     * Get CardNumber value
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param string $cardNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCardType
     */
    public function setCardNumber($cardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardNumber)), __LINE__);
        }
        $this->CardNumber = $cardNumber;
        return $this;
    }
    /**
     * Get SeriesCode value
     * @return string|null
     */
    public function getSeriesCode()
    {
        return $this->SeriesCode;
    }
    /**
     * Set SeriesCode value
     * @param string $seriesCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCardType
     */
    public function setSeriesCode($seriesCode = null)
    {
        // validation for constraint: string
        if (!is_null($seriesCode) && !is_string($seriesCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seriesCode)), __LINE__);
        }
        $this->SeriesCode = $seriesCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCardType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardAuthorization StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies credit card information about the customer seeking authorization. | Specifies the amount of money for which the the requester is seeking authorization.
 * @subpackage Structs
 */
class CreditCardAuthorization extends AbstractStructBase
{
    /**
     * The CreditCard
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the credit card information for which authorization is required.
     * @var mixed
     */
    public $CreditCard;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: Identification of an authorization party (e.g., merchant, acquirer).
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $ID;
    /**
     * The SourceType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SourceType;
    /**
     * The ExtendedPaymentInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, the requester would like to apply extended payment conditions to this authorization.
     * - use: optional
     * @var bool
     */
    public $ExtendedPaymentInd;
    /**
     * The ExtendedPaymentQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of equal amount, partial payments for the extended payment.
     * - use: optional
     * @var string
     */
    public $ExtendedPaymentQuantity;
    /**
     * The ExtendedPaymentFrequency
     * Meta informations extracted from the WSDL
     * - documentation: The frequency of extended payment installments.
     * - use: optional
     * @var string
     */
    public $ExtendedPaymentFrequency;
    /**
     * The AuthorizationCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AuthorizationCode;
    /**
     * The ReversalIndicator
     * Meta informations extracted from the WSDL
     * - documentation: If true, indicates a request to reverse a credit authorization.
     * - use: optional
     * @var bool
     */
    public $ReversalIndicator;
    /**
     * The CardPresentInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the customer has actually presented the credit card.
     * - use: optional
     * @var bool
     */
    public $CardPresentInd;
    /**
     * The E_CommerceCode
     * Meta informations extracted from the WSDL
     * - documentation: The electronic commerce indicator required for some credit card authorizations, such as the Verified by Visa Process.
     * - use: optional
     * @var string
     */
    public $E_CommerceCode;
    /**
     * The AuthTransactionID
     * Meta informations extracted from the WSDL
     * - documentation: The authentication transaction identifier required for some credit card authorizations, such as the Verified by Visa Process.
     * - use: optional
     * @var string
     */
    public $AuthTransactionID;
    /**
     * The AuthVerificationValue
     * Meta informations extracted from the WSDL
     * - documentation: The cardholder authentication verfication value required for some credit card authorization, such as the Verified by Visa Process.
     * - use: optional
     * @var string
     */
    public $AuthVerificationValue;
    /**
     * Constructor method for CreditCardAuthorization
     * @uses CreditCardAuthorization::setCreditCard()
     * @uses CreditCardAuthorization::setID()
     * @uses CreditCardAuthorization::setSourceType()
     * @uses CreditCardAuthorization::setExtendedPaymentInd()
     * @uses CreditCardAuthorization::setExtendedPaymentQuantity()
     * @uses CreditCardAuthorization::setExtendedPaymentFrequency()
     * @uses CreditCardAuthorization::setAuthorizationCode()
     * @uses CreditCardAuthorization::setReversalIndicator()
     * @uses CreditCardAuthorization::setCardPresentInd()
     * @uses CreditCardAuthorization::setE_CommerceCode()
     * @uses CreditCardAuthorization::setAuthTransactionID()
     * @uses CreditCardAuthorization::setAuthVerificationValue()
     * @param mixed $creditCard
     * @param mixed[] $iD
     * @param string $sourceType
     * @param bool $extendedPaymentInd
     * @param string $extendedPaymentQuantity
     * @param string $extendedPaymentFrequency
     * @param string $authorizationCode
     * @param bool $reversalIndicator
     * @param bool $cardPresentInd
     * @param string $e_CommerceCode
     * @param string $authTransactionID
     * @param string $authVerificationValue
     */
    public function __construct($creditCard = null, array $iD = array(), $sourceType = null, $extendedPaymentInd = null, $extendedPaymentQuantity = null, $extendedPaymentFrequency = null, $authorizationCode = null, $reversalIndicator = null, $cardPresentInd = null, $e_CommerceCode = null, $authTransactionID = null, $authVerificationValue = null)
    {
        $this
            ->setCreditCard($creditCard)
            ->setID($iD)
            ->setSourceType($sourceType)
            ->setExtendedPaymentInd($extendedPaymentInd)
            ->setExtendedPaymentQuantity($extendedPaymentQuantity)
            ->setExtendedPaymentFrequency($extendedPaymentFrequency)
            ->setAuthorizationCode($authorizationCode)
            ->setReversalIndicator($reversalIndicator)
            ->setCardPresentInd($cardPresentInd)
            ->setE_CommerceCode($e_CommerceCode)
            ->setAuthTransactionID($authTransactionID)
            ->setAuthVerificationValue($authVerificationValue);
    }
    /**
     * Get CreditCard value
     * @return mixed|null
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param mixed $creditCard
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setCreditCard($creditCard = null)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    /**
     * Get ID value
     * @return mixed[]|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @throws \InvalidArgumentException
     * @param mixed[] $iD
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setID(array $iD = array())
    {
        foreach ($iD as $creditCardAuthorizationIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ID property can only contain items of anyType, "%s" given', is_object($creditCardAuthorizationIDItem) ? get_class($creditCardAuthorizationIDItem) : gettype($creditCardAuthorizationIDItem)), __LINE__);
            }
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Add item to ID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function addToID($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ID property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ID[] = $item;
        return $this;
    }
    /**
     * Get SourceType value
     * @return string|null
     */
    public function getSourceType()
    {
        return $this->SourceType;
    }
    /**
     * Set SourceType value
     * @param string $sourceType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setSourceType($sourceType = null)
    {
        // validation for constraint: string
        if (!is_null($sourceType) && !is_string($sourceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceType)), __LINE__);
        }
        $this->SourceType = $sourceType;
        return $this;
    }
    /**
     * Get ExtendedPaymentInd value
     * @return bool|null
     */
    public function getExtendedPaymentInd()
    {
        return $this->ExtendedPaymentInd;
    }
    /**
     * Set ExtendedPaymentInd value
     * @param bool $extendedPaymentInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setExtendedPaymentInd($extendedPaymentInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($extendedPaymentInd) && !is_bool($extendedPaymentInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($extendedPaymentInd)), __LINE__);
        }
        $this->ExtendedPaymentInd = $extendedPaymentInd;
        return $this;
    }
    /**
     * Get ExtendedPaymentQuantity value
     * @return string|null
     */
    public function getExtendedPaymentQuantity()
    {
        return $this->ExtendedPaymentQuantity;
    }
    /**
     * Set ExtendedPaymentQuantity value
     * @param string $extendedPaymentQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setExtendedPaymentQuantity($extendedPaymentQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($extendedPaymentQuantity) && !is_string($extendedPaymentQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedPaymentQuantity)), __LINE__);
        }
        $this->ExtendedPaymentQuantity = $extendedPaymentQuantity;
        return $this;
    }
    /**
     * Get ExtendedPaymentFrequency value
     * @return string|null
     */
    public function getExtendedPaymentFrequency()
    {
        return $this->ExtendedPaymentFrequency;
    }
    /**
     * Set ExtendedPaymentFrequency value
     * @param string $extendedPaymentFrequency
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setExtendedPaymentFrequency($extendedPaymentFrequency = null)
    {
        // validation for constraint: string
        if (!is_null($extendedPaymentFrequency) && !is_string($extendedPaymentFrequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedPaymentFrequency)), __LINE__);
        }
        $this->ExtendedPaymentFrequency = $extendedPaymentFrequency;
        return $this;
    }
    /**
     * Get AuthorizationCode value
     * @return string|null
     */
    public function getAuthorizationCode()
    {
        return $this->AuthorizationCode;
    }
    /**
     * Set AuthorizationCode value
     * @param string $authorizationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setAuthorizationCode($authorizationCode = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationCode) && !is_string($authorizationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorizationCode)), __LINE__);
        }
        $this->AuthorizationCode = $authorizationCode;
        return $this;
    }
    /**
     * Get ReversalIndicator value
     * @return bool|null
     */
    public function getReversalIndicator()
    {
        return $this->ReversalIndicator;
    }
    /**
     * Set ReversalIndicator value
     * @param bool $reversalIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setReversalIndicator($reversalIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($reversalIndicator) && !is_bool($reversalIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reversalIndicator)), __LINE__);
        }
        $this->ReversalIndicator = $reversalIndicator;
        return $this;
    }
    /**
     * Get CardPresentInd value
     * @return bool|null
     */
    public function getCardPresentInd()
    {
        return $this->CardPresentInd;
    }
    /**
     * Set CardPresentInd value
     * @param bool $cardPresentInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setCardPresentInd($cardPresentInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($cardPresentInd) && !is_bool($cardPresentInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cardPresentInd)), __LINE__);
        }
        $this->CardPresentInd = $cardPresentInd;
        return $this;
    }
    /**
     * Get E_CommerceCode value
     * @return string|null
     */
    public function getE_CommerceCode()
    {
        return $this->E_CommerceCode;
    }
    /**
     * Set E_CommerceCode value
     * @param string $e_CommerceCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setE_CommerceCode($e_CommerceCode = null)
    {
        // validation for constraint: string
        if (!is_null($e_CommerceCode) && !is_string($e_CommerceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($e_CommerceCode)), __LINE__);
        }
        $this->E_CommerceCode = $e_CommerceCode;
        return $this;
    }
    /**
     * Get AuthTransactionID value
     * @return string|null
     */
    public function getAuthTransactionID()
    {
        return $this->AuthTransactionID;
    }
    /**
     * Set AuthTransactionID value
     * @param string $authTransactionID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setAuthTransactionID($authTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($authTransactionID) && !is_string($authTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authTransactionID)), __LINE__);
        }
        $this->AuthTransactionID = $authTransactionID;
        return $this;
    }
    /**
     * Get AuthVerificationValue value
     * @return string|null
     */
    public function getAuthVerificationValue()
    {
        return $this->AuthVerificationValue;
    }
    /**
     * Set AuthVerificationValue value
     * @param string $authVerificationValue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
     */
    public function setAuthVerificationValue($authVerificationValue = null)
    {
        // validation for constraint: string
        if (!is_null($authVerificationValue) && !is_string($authVerificationValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authVerificationValue)), __LINE__);
        }
        $this->AuthVerificationValue = $authVerificationValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CreditCardAuthorization
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

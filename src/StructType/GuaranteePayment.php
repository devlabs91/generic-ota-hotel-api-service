<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteePayment StructType
 * Meta informations extracted from the WSDL
 * - documentation: Guarantee or Payment information for an individual guest. | Used to define the deposit policy, guarantees policy, and/or accepted forms of payment.
 * @subpackage Structs
 */
class GuaranteePayment extends HotelPaymentFormType
{
    /**
     * The DetailType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DetailType;
    /**
     * The GuaranteeType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $GuaranteeType;
    /**
     * The AcceptedPayments
     * Meta informations extracted from the WSDL
     * - documentation: Collection of forms of payment accepted for payment.
     * - minOccurs: 0
     * @var mixed
     */
    public $AcceptedPayments;
    /**
     * The AmountPercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercent
     */
    public $AmountPercent;
    /**
     * The Deadline
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Deadline[]
     */
    public $Deadline;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Text description of the Payment in a given language.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Address[]
     */
    public $Address;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The RetributionType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RetributionType;
    /**
     * The PaymentCode
     * Meta informations extracted from the WSDL
     * - documentation: This defines the form of payment. Recommended usage of this is with the Payment Type in OpenTravel Code List, this datatype will be updated in the future. In order to maintain forward compatability a change is not being made in this
     * publication. This will be corrected in a future version, when a major update is released.
     * - use: optional
     * @var string
     */
    public $PaymentCode;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The GuaranteeCode
     * Meta informations extracted from the WSDL
     * - documentation: Guarantee Code
     * - use: optional
     * @var string
     */
    public $GuaranteeCode;
    /**
     * The HoldTime
     * Meta informations extracted from the WSDL
     * - documentation: The room will held up until this time without a guarantee.
     * - use: optional
     * @var string
     */
    public $HoldTime;
    /**
     * The NoCardHolderInfoReqInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, no credit cardholder information is required for guarantee/deposit.
     * - use: optional
     * @var bool
     */
    public $NoCardHolderInfoReqInd;
    /**
     * The NameInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, the credit cardholder name is required for guarantee/deposit.
     * - use: optional
     * @var bool
     */
    public $NameInd;
    /**
     * The AddressInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, the credit cardholder address is required for guarantee/deposit.
     * - use: optional
     * @var bool
     */
    public $AddressInd;
    /**
     * The PhoneInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, the credit cardholder phone number is required for guarantee/deposit.
     * - use: optional
     * @var bool
     */
    public $PhoneInd;
    /**
     * The InterbankNbrInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, the Interbank Card Association number is required for guarantee/deposit.
     * - use: optional
     * @var bool
     */
    public $InterbankNbrInd;
    /**
     * The RoomTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: A system specific room type to which this guarantee payment information applies.
     * - use: optional
     * @var string
     */
    public $RoomTypeCode;
    /**
     * The InfoSource
     * Meta informations extracted from the WSDL
     * - documentation: To specify the source of the rate of exchange for a currency code.
     * - use: optional
     * @var string
     */
    public $InfoSource;
    /**
     * The NonRefundableIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates that any prepayment for the reservation is non refundable, therefore a 100% penalty on the prepayment is applied, irrespective of deadline.
     * - use: optional
     * @var bool
     */
    public $NonRefundableIndicator;
    /**
     * The PolicyCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the type of payment policy.
     * - use: optional
     * @var string
     */
    public $PolicyCode;
    /**
     * Constructor method for GuaranteePayment
     * @uses GuaranteePayment::setDetailType()
     * @uses GuaranteePayment::setGuaranteeType()
     * @uses GuaranteePayment::setAcceptedPayments()
     * @uses GuaranteePayment::setAmountPercent()
     * @uses GuaranteePayment::setDeadline()
     * @uses GuaranteePayment::setDescription()
     * @uses GuaranteePayment::setAddress()
     * @uses GuaranteePayment::setTPA_Extensions()
     * @uses GuaranteePayment::setRetributionType()
     * @uses GuaranteePayment::setPaymentCode()
     * @uses GuaranteePayment::setType()
     * @uses GuaranteePayment::setGuaranteeCode()
     * @uses GuaranteePayment::setHoldTime()
     * @uses GuaranteePayment::setNoCardHolderInfoReqInd()
     * @uses GuaranteePayment::setNameInd()
     * @uses GuaranteePayment::setAddressInd()
     * @uses GuaranteePayment::setPhoneInd()
     * @uses GuaranteePayment::setInterbankNbrInd()
     * @uses GuaranteePayment::setRoomTypeCode()
     * @uses GuaranteePayment::setInfoSource()
     * @uses GuaranteePayment::setNonRefundableIndicator()
     * @uses GuaranteePayment::setPolicyCode()
     * @param string $detailType
     * @param string $guaranteeType
     * @param mixed $acceptedPayments
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercent $amountPercent
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Deadline[] $deadline
     * @param mixed[] $description
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address[] $address
     * @param mixed $tPA_Extensions
     * @param string $retributionType
     * @param string $paymentCode
     * @param string $type
     * @param string $guaranteeCode
     * @param string $holdTime
     * @param bool $noCardHolderInfoReqInd
     * @param bool $nameInd
     * @param bool $addressInd
     * @param bool $phoneInd
     * @param bool $interbankNbrInd
     * @param string $roomTypeCode
     * @param string $infoSource
     * @param bool $nonRefundableIndicator
     * @param string $policyCode
     */
    public function __construct($detailType = null, $guaranteeType = null, $acceptedPayments = null, \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercent $amountPercent = null, array $deadline = array(), array $description = array(), array $address = array(), $tPA_Extensions = null, $retributionType = null, $paymentCode = null, $type = null, $guaranteeCode = null, $holdTime = null, $noCardHolderInfoReqInd = null, $nameInd = null, $addressInd = null, $phoneInd = null, $interbankNbrInd = null, $roomTypeCode = null, $infoSource = null, $nonRefundableIndicator = null, $policyCode = null)
    {
        $this
            ->setDetailType($detailType)
            ->setGuaranteeType($guaranteeType)
            ->setAcceptedPayments($acceptedPayments)
            ->setAmountPercent($amountPercent)
            ->setDeadline($deadline)
            ->setDescription($description)
            ->setAddress($address)
            ->setTPA_Extensions($tPA_Extensions)
            ->setRetributionType($retributionType)
            ->setPaymentCode($paymentCode)
            ->setType($type)
            ->setGuaranteeCode($guaranteeCode)
            ->setHoldTime($holdTime)
            ->setNoCardHolderInfoReqInd($noCardHolderInfoReqInd)
            ->setNameInd($nameInd)
            ->setAddressInd($addressInd)
            ->setPhoneInd($phoneInd)
            ->setInterbankNbrInd($interbankNbrInd)
            ->setRoomTypeCode($roomTypeCode)
            ->setInfoSource($infoSource)
            ->setNonRefundableIndicator($nonRefundableIndicator)
            ->setPolicyCode($policyCode);
    }
    /**
     * Get DetailType value
     * @return string|null
     */
    public function getDetailType()
    {
        return $this->DetailType;
    }
    /**
     * Set DetailType value
     * @param string $detailType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setDetailType($detailType = null)
    {
        // validation for constraint: string
        if (!is_null($detailType) && !is_string($detailType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailType)), __LINE__);
        }
        $this->DetailType = $detailType;
        return $this;
    }
    /**
     * Get GuaranteeType value
     * @return string|null
     */
    public function getGuaranteeType()
    {
        return $this->GuaranteeType;
    }
    /**
     * Set GuaranteeType value
     * @param string $guaranteeType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setGuaranteeType($guaranteeType = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteeType) && !is_string($guaranteeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteeType)), __LINE__);
        }
        $this->GuaranteeType = $guaranteeType;
        return $this;
    }
    /**
     * Get AcceptedPayments value
     * @return mixed|null
     */
    public function getAcceptedPayments()
    {
        return $this->AcceptedPayments;
    }
    /**
     * Set AcceptedPayments value
     * @param mixed $acceptedPayments
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setAcceptedPayments($acceptedPayments = null)
    {
        $this->AcceptedPayments = $acceptedPayments;
        return $this;
    }
    /**
     * Get AmountPercent value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercent|null
     */
    public function getAmountPercent()
    {
        return $this->AmountPercent;
    }
    /**
     * Set AmountPercent value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercent $amountPercent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setAmountPercent(\Devlabs91\GenericOtaHotelApiService\StructType\AmountPercent $amountPercent = null)
    {
        $this->AmountPercent = $amountPercent;
        return $this;
    }
    /**
     * Get Deadline value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Deadline[]|null
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }
    /**
     * Set Deadline value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Deadline[] $deadline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setDeadline(array $deadline = array())
    {
        foreach ($deadline as $guaranteePaymentDeadlineItem) {
            // validation for constraint: itemType
            if (!$guaranteePaymentDeadlineItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Deadline) {
                throw new \InvalidArgumentException(sprintf('The Deadline property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Deadline, "%s" given', is_object($guaranteePaymentDeadlineItem) ? get_class($guaranteePaymentDeadlineItem) : gettype($guaranteePaymentDeadlineItem)), __LINE__);
            }
        }
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Add item to Deadline value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Deadline $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function addToDeadline(\Devlabs91\GenericOtaHotelApiService\StructType\Deadline $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Deadline) {
            throw new \InvalidArgumentException(sprintf('The Deadline property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Deadline, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Deadline[] = $item;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param mixed[] $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $guaranteePaymentDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($guaranteePaymentDescriptionItem) ? get_class($guaranteePaymentDescriptionItem) : gettype($guaranteePaymentDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function addToDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get Address value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address[] $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $guaranteePaymentAddressItem) {
            // validation for constraint: itemType
            if (!$guaranteePaymentAddressItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Address) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Address, "%s" given', is_object($guaranteePaymentAddressItem) ? get_class($guaranteePaymentAddressItem) : gettype($guaranteePaymentAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function addToAddress(\Devlabs91\GenericOtaHotelApiService\StructType\Address $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Address) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Address, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get RetributionType value
     * @return string|null
     */
    public function getRetributionType()
    {
        return $this->RetributionType;
    }
    /**
     * Set RetributionType value
     * @param string $retributionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setRetributionType($retributionType = null)
    {
        // validation for constraint: string
        if (!is_null($retributionType) && !is_string($retributionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($retributionType)), __LINE__);
        }
        $this->RetributionType = $retributionType;
        return $this;
    }
    /**
     * Get PaymentCode value
     * @return string|null
     */
    public function getPaymentCode()
    {
        return $this->PaymentCode;
    }
    /**
     * Set PaymentCode value
     * @param string $paymentCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setPaymentCode($paymentCode = null)
    {
        // validation for constraint: string
        if (!is_null($paymentCode) && !is_string($paymentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentCode)), __LINE__);
        }
        $this->PaymentCode = $paymentCode;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get GuaranteeCode value
     * @return string|null
     */
    public function getGuaranteeCode()
    {
        return $this->GuaranteeCode;
    }
    /**
     * Set GuaranteeCode value
     * @param string $guaranteeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setGuaranteeCode($guaranteeCode = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteeCode) && !is_string($guaranteeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteeCode)), __LINE__);
        }
        $this->GuaranteeCode = $guaranteeCode;
        return $this;
    }
    /**
     * Get HoldTime value
     * @return string|null
     */
    public function getHoldTime()
    {
        return $this->HoldTime;
    }
    /**
     * Set HoldTime value
     * @param string $holdTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setHoldTime($holdTime = null)
    {
        // validation for constraint: string
        if (!is_null($holdTime) && !is_string($holdTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($holdTime)), __LINE__);
        }
        $this->HoldTime = $holdTime;
        return $this;
    }
    /**
     * Get NoCardHolderInfoReqInd value
     * @return bool|null
     */
    public function getNoCardHolderInfoReqInd()
    {
        return $this->NoCardHolderInfoReqInd;
    }
    /**
     * Set NoCardHolderInfoReqInd value
     * @param bool $noCardHolderInfoReqInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setNoCardHolderInfoReqInd($noCardHolderInfoReqInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($noCardHolderInfoReqInd) && !is_bool($noCardHolderInfoReqInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($noCardHolderInfoReqInd)), __LINE__);
        }
        $this->NoCardHolderInfoReqInd = $noCardHolderInfoReqInd;
        return $this;
    }
    /**
     * Get NameInd value
     * @return bool|null
     */
    public function getNameInd()
    {
        return $this->NameInd;
    }
    /**
     * Set NameInd value
     * @param bool $nameInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setNameInd($nameInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($nameInd) && !is_bool($nameInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nameInd)), __LINE__);
        }
        $this->NameInd = $nameInd;
        return $this;
    }
    /**
     * Get AddressInd value
     * @return bool|null
     */
    public function getAddressInd()
    {
        return $this->AddressInd;
    }
    /**
     * Set AddressInd value
     * @param bool $addressInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setAddressInd($addressInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($addressInd) && !is_bool($addressInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($addressInd)), __LINE__);
        }
        $this->AddressInd = $addressInd;
        return $this;
    }
    /**
     * Get PhoneInd value
     * @return bool|null
     */
    public function getPhoneInd()
    {
        return $this->PhoneInd;
    }
    /**
     * Set PhoneInd value
     * @param bool $phoneInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setPhoneInd($phoneInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($phoneInd) && !is_bool($phoneInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($phoneInd)), __LINE__);
        }
        $this->PhoneInd = $phoneInd;
        return $this;
    }
    /**
     * Get InterbankNbrInd value
     * @return bool|null
     */
    public function getInterbankNbrInd()
    {
        return $this->InterbankNbrInd;
    }
    /**
     * Set InterbankNbrInd value
     * @param bool $interbankNbrInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setInterbankNbrInd($interbankNbrInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($interbankNbrInd) && !is_bool($interbankNbrInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($interbankNbrInd)), __LINE__);
        }
        $this->InterbankNbrInd = $interbankNbrInd;
        return $this;
    }
    /**
     * Get RoomTypeCode value
     * @return string|null
     */
    public function getRoomTypeCode()
    {
        return $this->RoomTypeCode;
    }
    /**
     * Set RoomTypeCode value
     * @param string $roomTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setRoomTypeCode($roomTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypeCode) && !is_string($roomTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypeCode)), __LINE__);
        }
        $this->RoomTypeCode = $roomTypeCode;
        return $this;
    }
    /**
     * Get InfoSource value
     * @return string|null
     */
    public function getInfoSource()
    {
        return $this->InfoSource;
    }
    /**
     * Set InfoSource value
     * @param string $infoSource
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setInfoSource($infoSource = null)
    {
        // validation for constraint: string
        if (!is_null($infoSource) && !is_string($infoSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infoSource)), __LINE__);
        }
        $this->InfoSource = $infoSource;
        return $this;
    }
    /**
     * Get NonRefundableIndicator value
     * @return bool|null
     */
    public function getNonRefundableIndicator()
    {
        return $this->NonRefundableIndicator;
    }
    /**
     * Set NonRefundableIndicator value
     * @param bool $nonRefundableIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setNonRefundableIndicator($nonRefundableIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($nonRefundableIndicator) && !is_bool($nonRefundableIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nonRefundableIndicator)), __LINE__);
        }
        $this->NonRefundableIndicator = $nonRefundableIndicator;
        return $this;
    }
    /**
     * Get PolicyCode value
     * @return string|null
     */
    public function getPolicyCode()
    {
        return $this->PolicyCode;
    }
    /**
     * Set PolicyCode value
     * @param string $policyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setPolicyCode($policyCode = null)
    {
        // validation for constraint: string
        if (!is_null($policyCode) && !is_string($policyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyCode)), __LINE__);
        }
        $this->PolicyCode = $policyCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteeAccepted StructType
 * Meta informations extracted from the WSDL
 * - documentation: Guarantee Detail.
 * @subpackage Structs
 */
class GuaranteeAccepted extends PaymentFormType
{
    /**
     * The Default
     * Meta informations extracted from the WSDL
     * - documentation: This is to indicate that the information in the model is the default (e.g. if PaymentCard information is completed then this would be considered the default if the boolean is true).
     * @var bool
     */
    public $Default;
    /**
     * The NoCardHolderInfoReqInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, no credit card holder information is required. If false, it is not required.
     * - use: optional
     * @var bool
     */
    public $NoCardHolderInfoReqInd;
    /**
     * The NameReqInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, the credit card holder name is required. If false, it is not required.
     * - use: optional
     * @var bool
     */
    public $NameReqInd;
    /**
     * The AddressReqInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, credit card holder address is required. If false, it is not required.
     * - use: optional
     * @var bool
     */
    public $AddressReqInd;
    /**
     * The PhoneReqInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, credit card holder phone number is required. If false, it is not required.
     * - use: optional
     * @var bool
     */
    public $PhoneReqInd;
    /**
     * The InterbankNbrReqInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, the credit card interbank number is required. If false, it is not required.
     * - use: optional
     * @var bool
     */
    public $InterbankNbrReqInd;
    /**
     * The BookingSourceAllowedInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the booking source may be used to guarantee the booking.
     * - use: optional
     * @var bool
     */
    public $BookingSourceAllowedInd;
    /**
     * The CorpDiscountNbrAllowedInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the corporate discount number may be used to guarantee the booking.
     * - use: optional
     * @var bool
     */
    public $CorpDiscountNbrAllowedInd;
    /**
     * Constructor method for GuaranteeAccepted
     * @uses GuaranteeAccepted::setDefault()
     * @uses GuaranteeAccepted::setNoCardHolderInfoReqInd()
     * @uses GuaranteeAccepted::setNameReqInd()
     * @uses GuaranteeAccepted::setAddressReqInd()
     * @uses GuaranteeAccepted::setPhoneReqInd()
     * @uses GuaranteeAccepted::setInterbankNbrReqInd()
     * @uses GuaranteeAccepted::setBookingSourceAllowedInd()
     * @uses GuaranteeAccepted::setCorpDiscountNbrAllowedInd()
     * @param bool $default
     * @param bool $noCardHolderInfoReqInd
     * @param bool $nameReqInd
     * @param bool $addressReqInd
     * @param bool $phoneReqInd
     * @param bool $interbankNbrReqInd
     * @param bool $bookingSourceAllowedInd
     * @param bool $corpDiscountNbrAllowedInd
     */
    public function __construct($default = null, $noCardHolderInfoReqInd = null, $nameReqInd = null, $addressReqInd = null, $phoneReqInd = null, $interbankNbrReqInd = null, $bookingSourceAllowedInd = null, $corpDiscountNbrAllowedInd = null)
    {
        $this
            ->setDefault($default)
            ->setNoCardHolderInfoReqInd($noCardHolderInfoReqInd)
            ->setNameReqInd($nameReqInd)
            ->setAddressReqInd($addressReqInd)
            ->setPhoneReqInd($phoneReqInd)
            ->setInterbankNbrReqInd($interbankNbrReqInd)
            ->setBookingSourceAllowedInd($bookingSourceAllowedInd)
            ->setCorpDiscountNbrAllowedInd($corpDiscountNbrAllowedInd);
    }
    /**
     * Get Default value
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->Default;
    }
    /**
     * Set Default value
     * @param bool $default
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
     */
    public function setDefault($default = null)
    {
        // validation for constraint: boolean
        if (!is_null($default) && !is_bool($default)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($default)), __LINE__);
        }
        $this->Default = $default;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
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
     * Get NameReqInd value
     * @return bool|null
     */
    public function getNameReqInd()
    {
        return $this->NameReqInd;
    }
    /**
     * Set NameReqInd value
     * @param bool $nameReqInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
     */
    public function setNameReqInd($nameReqInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($nameReqInd) && !is_bool($nameReqInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nameReqInd)), __LINE__);
        }
        $this->NameReqInd = $nameReqInd;
        return $this;
    }
    /**
     * Get AddressReqInd value
     * @return bool|null
     */
    public function getAddressReqInd()
    {
        return $this->AddressReqInd;
    }
    /**
     * Set AddressReqInd value
     * @param bool $addressReqInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
     */
    public function setAddressReqInd($addressReqInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($addressReqInd) && !is_bool($addressReqInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($addressReqInd)), __LINE__);
        }
        $this->AddressReqInd = $addressReqInd;
        return $this;
    }
    /**
     * Get PhoneReqInd value
     * @return bool|null
     */
    public function getPhoneReqInd()
    {
        return $this->PhoneReqInd;
    }
    /**
     * Set PhoneReqInd value
     * @param bool $phoneReqInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
     */
    public function setPhoneReqInd($phoneReqInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($phoneReqInd) && !is_bool($phoneReqInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($phoneReqInd)), __LINE__);
        }
        $this->PhoneReqInd = $phoneReqInd;
        return $this;
    }
    /**
     * Get InterbankNbrReqInd value
     * @return bool|null
     */
    public function getInterbankNbrReqInd()
    {
        return $this->InterbankNbrReqInd;
    }
    /**
     * Set InterbankNbrReqInd value
     * @param bool $interbankNbrReqInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
     */
    public function setInterbankNbrReqInd($interbankNbrReqInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($interbankNbrReqInd) && !is_bool($interbankNbrReqInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($interbankNbrReqInd)), __LINE__);
        }
        $this->InterbankNbrReqInd = $interbankNbrReqInd;
        return $this;
    }
    /**
     * Get BookingSourceAllowedInd value
     * @return bool|null
     */
    public function getBookingSourceAllowedInd()
    {
        return $this->BookingSourceAllowedInd;
    }
    /**
     * Set BookingSourceAllowedInd value
     * @param bool $bookingSourceAllowedInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
     */
    public function setBookingSourceAllowedInd($bookingSourceAllowedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($bookingSourceAllowedInd) && !is_bool($bookingSourceAllowedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bookingSourceAllowedInd)), __LINE__);
        }
        $this->BookingSourceAllowedInd = $bookingSourceAllowedInd;
        return $this;
    }
    /**
     * Get CorpDiscountNbrAllowedInd value
     * @return bool|null
     */
    public function getCorpDiscountNbrAllowedInd()
    {
        return $this->CorpDiscountNbrAllowedInd;
    }
    /**
     * Set CorpDiscountNbrAllowedInd value
     * @param bool $corpDiscountNbrAllowedInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
     */
    public function setCorpDiscountNbrAllowedInd($corpDiscountNbrAllowedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($corpDiscountNbrAllowedInd) && !is_bool($corpDiscountNbrAllowedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($corpDiscountNbrAllowedInd)), __LINE__);
        }
        $this->CorpDiscountNbrAllowedInd = $corpDiscountNbrAllowedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
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

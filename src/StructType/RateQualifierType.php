<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateQualifierType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The RateQualifierType complex type describes fully rate information associated with a specific rate quotation, including the description of any promotions that may apply. | Basic information pertaining to a rate.
 * @subpackage Structs
 */
class RateQualifierType extends AbstractStructBase
{
    /**
     * The PromoDesc
     * Meta informations extracted from the WSDL
     * - documentation: This may be used to provide additional information about the promotion code.
     * - minOccurs: 0
     * @var mixed
     */
    public $PromoDesc;
    /**
     * The RateComments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateComments
     */
    public $RateComments;
    /**
     * The ArriveByFlight
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if this rate is only available to those customers who are flying to the vehicle rental location. | false
     * - use: optional
     * @var bool
     */
    public $ArriveByFlight;
    /**
     * The RateAuthorizationCode
     * Meta informations extracted from the WSDL
     * - documentation: The rate authorization code for this rate.
     * - use: optional
     * @var string
     */
    public $RateAuthorizationCode;
    /**
     * The VendorRateID
     * Meta informations extracted from the WSDL
     * - documentation: The identifier assigned to this rate by the vendor.
     * - use: optional
     * @var string
     */
    public $VendorRateID;
    /**
     * Constructor method for RateQualifierType
     * @uses RateQualifierType::setPromoDesc()
     * @uses RateQualifierType::setRateComments()
     * @uses RateQualifierType::setArriveByFlight()
     * @uses RateQualifierType::setRateAuthorizationCode()
     * @uses RateQualifierType::setVendorRateID()
     * @param mixed $promoDesc
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateComments $rateComments
     * @param bool $arriveByFlight
     * @param string $rateAuthorizationCode
     * @param string $vendorRateID
     */
    public function __construct($promoDesc = null, \Devlabs91\GenericOtaHotelApiService\StructType\RateComments $rateComments = null, $arriveByFlight = null, $rateAuthorizationCode = null, $vendorRateID = null)
    {
        $this
            ->setPromoDesc($promoDesc)
            ->setRateComments($rateComments)
            ->setArriveByFlight($arriveByFlight)
            ->setRateAuthorizationCode($rateAuthorizationCode)
            ->setVendorRateID($vendorRateID);
    }
    /**
     * Get PromoDesc value
     * @return mixed|null
     */
    public function getPromoDesc()
    {
        return $this->PromoDesc;
    }
    /**
     * Set PromoDesc value
     * @param mixed $promoDesc
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierType
     */
    public function setPromoDesc($promoDesc = null)
    {
        $this->PromoDesc = $promoDesc;
        return $this;
    }
    /**
     * Get RateComments value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateComments|null
     */
    public function getRateComments()
    {
        return $this->RateComments;
    }
    /**
     * Set RateComments value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateComments $rateComments
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierType
     */
    public function setRateComments(\Devlabs91\GenericOtaHotelApiService\StructType\RateComments $rateComments = null)
    {
        $this->RateComments = $rateComments;
        return $this;
    }
    /**
     * Get ArriveByFlight value
     * @return bool|null
     */
    public function getArriveByFlight()
    {
        return $this->ArriveByFlight;
    }
    /**
     * Set ArriveByFlight value
     * @param bool $arriveByFlight
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierType
     */
    public function setArriveByFlight($arriveByFlight = null)
    {
        // validation for constraint: boolean
        if (!is_null($arriveByFlight) && !is_bool($arriveByFlight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($arriveByFlight)), __LINE__);
        }
        $this->ArriveByFlight = $arriveByFlight;
        return $this;
    }
    /**
     * Get RateAuthorizationCode value
     * @return string|null
     */
    public function getRateAuthorizationCode()
    {
        return $this->RateAuthorizationCode;
    }
    /**
     * Set RateAuthorizationCode value
     * @param string $rateAuthorizationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierType
     */
    public function setRateAuthorizationCode($rateAuthorizationCode = null)
    {
        // validation for constraint: string
        if (!is_null($rateAuthorizationCode) && !is_string($rateAuthorizationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateAuthorizationCode)), __LINE__);
        }
        $this->RateAuthorizationCode = $rateAuthorizationCode;
        return $this;
    }
    /**
     * Get VendorRateID value
     * @return string|null
     */
    public function getVendorRateID()
    {
        return $this->VendorRateID;
    }
    /**
     * Set VendorRateID value
     * @param string $vendorRateID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierType
     */
    public function setVendorRateID($vendorRateID = null)
    {
        // validation for constraint: string
        if (!is_null($vendorRateID) && !is_string($vendorRateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorRateID)), __LINE__);
        }
        $this->VendorRateID = $vendorRateID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierType
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

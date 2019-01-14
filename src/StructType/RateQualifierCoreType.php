<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateQualifierCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The RateQualifierCoreType complex type defines the rate information that is common to all transactions. Such information may include rate codes, rate type, promotional codes, etc. This information may be used to determine the rate
 * that is made available. | Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created
 * for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
 * @subpackage Structs
 */
class RateQualifierCoreType extends AbstractStructBase
{
    /**
     * The TravelPurpose
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate the purpose, whether for business, personal or other. Refer to OTA Code List Travel Purpose (TVP).
     * - use: optional
     * @var string
     */
    public $TravelPurpose;
    /**
     * The RateCategory
     * Meta informations extracted from the WSDL
     * - documentation: The RateCategory attribute defines a set of valid values for the category of a rate. Typically rates are offered as either Leisure rates or Business (Corporate) rates, with a business rate usually including additional costs such as
     * the cost of insurance, etc. This set of values defines the rate categories. Refer to OTA Code List Rate Category(RTC).
     * - use: optional
     * @var string
     */
    public $RateCategory;
    /**
     * The CorpDiscountNmbr
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CorpDiscountNmbr;
    /**
     * The RateQualifier
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RateQualifier;
    /**
     * The RatePeriod
     * Meta informations extracted from the WSDL
     * - documentation: The RatePeriod attribute defines the type of rate that may be applied. For example, typically car rental rates differ based upon the duration of the rental, and the actual rate is then expressed in terms of the period of the rental.
     * - use: optional
     * @var string
     */
    public $RatePeriod;
    /**
     * Constructor method for RateQualifierCoreType
     * @uses RateQualifierCoreType::setTravelPurpose()
     * @uses RateQualifierCoreType::setRateCategory()
     * @uses RateQualifierCoreType::setCorpDiscountNmbr()
     * @uses RateQualifierCoreType::setRateQualifier()
     * @uses RateQualifierCoreType::setRatePeriod()
     * @param string $travelPurpose
     * @param string $rateCategory
     * @param string $corpDiscountNmbr
     * @param string $rateQualifier
     * @param string $ratePeriod
     */
    public function __construct($travelPurpose = null, $rateCategory = null, $corpDiscountNmbr = null, $rateQualifier = null, $ratePeriod = null)
    {
        $this
            ->setTravelPurpose($travelPurpose)
            ->setRateCategory($rateCategory)
            ->setCorpDiscountNmbr($corpDiscountNmbr)
            ->setRateQualifier($rateQualifier)
            ->setRatePeriod($ratePeriod);
    }
    /**
     * Get TravelPurpose value
     * @return string|null
     */
    public function getTravelPurpose()
    {
        return $this->TravelPurpose;
    }
    /**
     * Set TravelPurpose value
     * @param string $travelPurpose
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierCoreType
     */
    public function setTravelPurpose($travelPurpose = null)
    {
        // validation for constraint: string
        if (!is_null($travelPurpose) && !is_string($travelPurpose)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelPurpose)), __LINE__);
        }
        $this->TravelPurpose = $travelPurpose;
        return $this;
    }
    /**
     * Get RateCategory value
     * @return string|null
     */
    public function getRateCategory()
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param string $rateCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierCoreType
     */
    public function setRateCategory($rateCategory = null)
    {
        // validation for constraint: string
        if (!is_null($rateCategory) && !is_string($rateCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateCategory)), __LINE__);
        }
        $this->RateCategory = $rateCategory;
        return $this;
    }
    /**
     * Get CorpDiscountNmbr value
     * @return string|null
     */
    public function getCorpDiscountNmbr()
    {
        return $this->CorpDiscountNmbr;
    }
    /**
     * Set CorpDiscountNmbr value
     * @param string $corpDiscountNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierCoreType
     */
    public function setCorpDiscountNmbr($corpDiscountNmbr = null)
    {
        // validation for constraint: string
        if (!is_null($corpDiscountNmbr) && !is_string($corpDiscountNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corpDiscountNmbr)), __LINE__);
        }
        $this->CorpDiscountNmbr = $corpDiscountNmbr;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return string|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param string $rateQualifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierCoreType
     */
    public function setRateQualifier($rateQualifier = null)
    {
        // validation for constraint: string
        if (!is_null($rateQualifier) && !is_string($rateQualifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateQualifier)), __LINE__);
        }
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get RatePeriod value
     * @return string|null
     */
    public function getRatePeriod()
    {
        return $this->RatePeriod;
    }
    /**
     * Set RatePeriod value
     * @param string $ratePeriod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierCoreType
     */
    public function setRatePeriod($ratePeriod = null)
    {
        // validation for constraint: string
        if (!is_null($ratePeriod) && !is_string($ratePeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePeriod)), __LINE__);
        }
        $this->RatePeriod = $ratePeriod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierCoreType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateQualifier StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the type of rates of interest to the customer, along with any discount number or promotional codes that may affect the rate. | Indicates the type of rates applicable to the customer, along with any discount number or
 * promotional codes that affect the quoted rate.
 * - type: StringLength1to32
 * - use: optional
 * @subpackage Structs
 */
class RateQualifier extends RateQualifierType
{
    /**
     * The TourInfoRPH
     * Meta informations extracted from the WSDL
     * - documentation: Provides a reference pointer that links the availability rate to a TourInfo.
     * - use: optional
     * @var string
     */
    public $TourInfoRPH;
    /**
     * The CustLoyaltyRPH
     * Meta informations extracted from the WSDL
     * - documentation: Provides a reference pointer that links the availability rate to one or more CustLoyalty RPHs.
     * - use: optional
     * @var string
     */
    public $CustLoyaltyRPH;
    /**
     * The QuoteID
     * Meta informations extracted from the WSDL
     * - documentation: A reference string used to match a query, with rates, to a given time. This is useful for matching prices within a given quote period.
     * @var string
     */
    public $QuoteID;
    /**
     * Constructor method for RateQualifier
     * @uses RateQualifier::setTourInfoRPH()
     * @uses RateQualifier::setCustLoyaltyRPH()
     * @uses RateQualifier::setQuoteID()
     * @param string $tourInfoRPH
     * @param string $custLoyaltyRPH
     * @param string $quoteID
     */
    public function __construct($tourInfoRPH = null, $custLoyaltyRPH = null, $quoteID = null)
    {
        $this
            ->setTourInfoRPH($tourInfoRPH)
            ->setCustLoyaltyRPH($custLoyaltyRPH)
            ->setQuoteID($quoteID);
    }
    /**
     * Get TourInfoRPH value
     * @return string|null
     */
    public function getTourInfoRPH()
    {
        return $this->TourInfoRPH;
    }
    /**
     * Set TourInfoRPH value
     * @param string $tourInfoRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier
     */
    public function setTourInfoRPH($tourInfoRPH = null)
    {
        // validation for constraint: string
        if (!is_null($tourInfoRPH) && !is_string($tourInfoRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourInfoRPH)), __LINE__);
        }
        $this->TourInfoRPH = $tourInfoRPH;
        return $this;
    }
    /**
     * Get CustLoyaltyRPH value
     * @return string|null
     */
    public function getCustLoyaltyRPH()
    {
        return $this->CustLoyaltyRPH;
    }
    /**
     * Set CustLoyaltyRPH value
     * @param string $custLoyaltyRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier
     */
    public function setCustLoyaltyRPH($custLoyaltyRPH = null)
    {
        // validation for constraint: string
        if (!is_null($custLoyaltyRPH) && !is_string($custLoyaltyRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custLoyaltyRPH)), __LINE__);
        }
        $this->CustLoyaltyRPH = $custLoyaltyRPH;
        return $this;
    }
    /**
     * Get QuoteID value
     * @return string|null
     */
    public function getQuoteID()
    {
        return $this->QuoteID;
    }
    /**
     * Set QuoteID value
     * @param string $quoteID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier
     */
    public function setQuoteID($quoteID = null)
    {
        // validation for constraint: string
        if (!is_null($quoteID) && !is_string($quoteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quoteID)), __LINE__);
        }
        $this->QuoteID = $quoteID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier
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

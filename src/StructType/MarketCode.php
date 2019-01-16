<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketCode StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is user specific information used for tracking and market segmentation reporting.
 * @subpackage Structs
 */
class MarketCode extends AbstractStructBase
{
    /**
     * The MarketCode
     * Meta informations extracted from the WSDL
     * - documentation: The company specific code that relates to the market being sold to (e.g. corporate, government, association, social).
     * - use: optional
     * @var string
     */
    public $MarketCode;
    /**
     * The MarketCodeName
     * Meta informations extracted from the WSDL
     * - documentation: The descriptive name of the code that relates to the market being sold to (e.g. corporate, government, association, social).
     * - use: optional
     * @var string
     */
    public $MarketCodeName;
    /**
     * The CommissionableIndicator
     * Meta informations extracted from the WSDL
     * - documentation: If true, indicates that the rate for this market code is commissionable. The Commission element may be used to send details regarding the commission.
     * - use: optional
     * @var bool
     */
    public $CommissionableIndicator;
    /**
     * Constructor method for MarketCode
     * @uses MarketCode::setMarketCode()
     * @uses MarketCode::setMarketCodeName()
     * @uses MarketCode::setCommissionableIndicator()
     * @param string $marketCode
     * @param string $marketCodeName
     * @param bool $commissionableIndicator
     */
    public function __construct($marketCode = null, $marketCodeName = null, $commissionableIndicator = null)
    {
        $this
            ->setMarketCode($marketCode)
            ->setMarketCodeName($marketCodeName)
            ->setCommissionableIndicator($commissionableIndicator);
    }
    /**
     * Get MarketCode value
     * @return string|null
     */
    public function getMarketCode()
    {
        return $this->MarketCode;
    }
    /**
     * Set MarketCode value
     * @param string $marketCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode
     */
    public function setMarketCode($marketCode = null)
    {
        // validation for constraint: string
        if (!is_null($marketCode) && !is_string($marketCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketCode)), __LINE__);
        }
        $this->MarketCode = $marketCode;
        return $this;
    }
    /**
     * Get MarketCodeName value
     * @return string|null
     */
    public function getMarketCodeName()
    {
        return $this->MarketCodeName;
    }
    /**
     * Set MarketCodeName value
     * @param string $marketCodeName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode
     */
    public function setMarketCodeName($marketCodeName = null)
    {
        // validation for constraint: string
        if (!is_null($marketCodeName) && !is_string($marketCodeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketCodeName)), __LINE__);
        }
        $this->MarketCodeName = $marketCodeName;
        return $this;
    }
    /**
     * Get CommissionableIndicator value
     * @return bool|null
     */
    public function getCommissionableIndicator()
    {
        return $this->CommissionableIndicator;
    }
    /**
     * Set CommissionableIndicator value
     * @param bool $commissionableIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode
     */
    public function setCommissionableIndicator($commissionableIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($commissionableIndicator) && !is_bool($commissionableIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($commissionableIndicator)), __LINE__);
        }
        $this->CommissionableIndicator = $commissionableIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode
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

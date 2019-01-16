<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricingOverview StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information applicable to the pricing of the reservation.
 * @subpackage Structs
 */
class PricingOverview extends AbstractStructBase
{
    /**
     * The PricingIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PricingIndicator[]
     */
    public $PricingIndicator;
    /**
     * The Account
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Account[]
     */
    public $Account;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: A comment applicable to all the pricing information.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Comment;
    /**
     * The StatisticalCode
     * Meta informations extracted from the WSDL
     * - documentation: Used for domestic or international sales differentiation.
     * - use: optional
     * @var string
     */
    public $StatisticalCode;
    /**
     * The ValidatingAirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: The validating airline code for the ticketing.
     * - use: optional
     * @var string
     */
    public $ValidatingAirlineCode;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - documentation: The departure date of the first leg of the booked itinerary.
     * - use: optional
     * @var string
     */
    public $DepartureDate;
    /**
     * The PriceType
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the type of price.
     * - use: optional
     * @var string
     */
    public $PriceType;
    /**
     * The NUC_Rate
     * Meta informations extracted from the WSDL
     * - documentation: The neutral unit currency rate.
     * - use: optional
     * @var float
     */
    public $NUC_Rate;
    /**
     * The ExchangeRate
     * Meta informations extracted from the WSDL
     * - documentation: The currency exchange rate.
     * - use: optional
     * @var float
     */
    public $ExchangeRate;
    /**
     * Constructor method for PricingOverview
     * @uses PricingOverview::setPricingIndicator()
     * @uses PricingOverview::setAccount()
     * @uses PricingOverview::setComment()
     * @uses PricingOverview::setStatisticalCode()
     * @uses PricingOverview::setValidatingAirlineCode()
     * @uses PricingOverview::setDepartureDate()
     * @uses PricingOverview::setPriceType()
     * @uses PricingOverview::setNUC_Rate()
     * @uses PricingOverview::setExchangeRate()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricingIndicator[] $pricingIndicator
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Account[] $account
     * @param mixed[] $comment
     * @param string $statisticalCode
     * @param string $validatingAirlineCode
     * @param string $departureDate
     * @param string $priceType
     * @param float $nUC_Rate
     * @param float $exchangeRate
     */
    public function __construct(array $pricingIndicator = array(), array $account = array(), array $comment = array(), $statisticalCode = null, $validatingAirlineCode = null, $departureDate = null, $priceType = null, $nUC_Rate = null, $exchangeRate = null)
    {
        $this
            ->setPricingIndicator($pricingIndicator)
            ->setAccount($account)
            ->setComment($comment)
            ->setStatisticalCode($statisticalCode)
            ->setValidatingAirlineCode($validatingAirlineCode)
            ->setDepartureDate($departureDate)
            ->setPriceType($priceType)
            ->setNUC_Rate($nUC_Rate)
            ->setExchangeRate($exchangeRate);
    }
    /**
     * Get PricingIndicator value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingIndicator[]|null
     */
    public function getPricingIndicator()
    {
        return $this->PricingIndicator;
    }
    /**
     * Set PricingIndicator value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricingIndicator[] $pricingIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function setPricingIndicator(array $pricingIndicator = array())
    {
        foreach ($pricingIndicator as $pricingOverviewPricingIndicatorItem) {
            // validation for constraint: itemType
            if (!$pricingOverviewPricingIndicatorItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PricingIndicator) {
                throw new \InvalidArgumentException(sprintf('The PricingIndicator property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PricingIndicator, "%s" given', is_object($pricingOverviewPricingIndicatorItem) ? get_class($pricingOverviewPricingIndicatorItem) : gettype($pricingOverviewPricingIndicatorItem)), __LINE__);
            }
        }
        $this->PricingIndicator = $pricingIndicator;
        return $this;
    }
    /**
     * Add item to PricingIndicator value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricingIndicator $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function addToPricingIndicator(\Devlabs91\GenericOtaHotelApiService\StructType\PricingIndicator $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PricingIndicator) {
            throw new \InvalidArgumentException(sprintf('The PricingIndicator property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PricingIndicator, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PricingIndicator[] = $item;
        return $this;
    }
    /**
     * Get Account value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Account[]|null
     */
    public function getAccount()
    {
        return $this->Account;
    }
    /**
     * Set Account value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Account[] $account
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function setAccount(array $account = array())
    {
        foreach ($account as $pricingOverviewAccountItem) {
            // validation for constraint: itemType
            if (!$pricingOverviewAccountItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Account) {
                throw new \InvalidArgumentException(sprintf('The Account property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Account, "%s" given', is_object($pricingOverviewAccountItem) ? get_class($pricingOverviewAccountItem) : gettype($pricingOverviewAccountItem)), __LINE__);
            }
        }
        $this->Account = $account;
        return $this;
    }
    /**
     * Add item to Account value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Account $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function addToAccount(\Devlabs91\GenericOtaHotelApiService\StructType\Account $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Account) {
            throw new \InvalidArgumentException(sprintf('The Account property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Account, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Account[] = $item;
        return $this;
    }
    /**
     * Get Comment value
     * @return mixed[]|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @throws \InvalidArgumentException
     * @param mixed[] $comment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function setComment(array $comment = array())
    {
        foreach ($comment as $pricingOverviewCommentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of anyType, "%s" given', is_object($pricingOverviewCommentItem) ? get_class($pricingOverviewCommentItem) : gettype($pricingOverviewCommentItem)), __LINE__);
            }
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Add item to Comment value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function addToComment($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Comment[] = $item;
        return $this;
    }
    /**
     * Get StatisticalCode value
     * @return string|null
     */
    public function getStatisticalCode()
    {
        return $this->StatisticalCode;
    }
    /**
     * Set StatisticalCode value
     * @param string $statisticalCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function setStatisticalCode($statisticalCode = null)
    {
        // validation for constraint: string
        if (!is_null($statisticalCode) && !is_string($statisticalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statisticalCode)), __LINE__);
        }
        $this->StatisticalCode = $statisticalCode;
        return $this;
    }
    /**
     * Get ValidatingAirlineCode value
     * @return string|null
     */
    public function getValidatingAirlineCode()
    {
        return $this->ValidatingAirlineCode;
    }
    /**
     * Set ValidatingAirlineCode value
     * @param string $validatingAirlineCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function setValidatingAirlineCode($validatingAirlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($validatingAirlineCode) && !is_string($validatingAirlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validatingAirlineCode)), __LINE__);
        }
        $this->ValidatingAirlineCode = $validatingAirlineCode;
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate()
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        $this->DepartureDate = $departureDate;
        return $this;
    }
    /**
     * Get PriceType value
     * @return string|null
     */
    public function getPriceType()
    {
        return $this->PriceType;
    }
    /**
     * Set PriceType value
     * @param string $priceType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function setPriceType($priceType = null)
    {
        // validation for constraint: string
        if (!is_null($priceType) && !is_string($priceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priceType)), __LINE__);
        }
        $this->PriceType = $priceType;
        return $this;
    }
    /**
     * Get NUC_Rate value
     * @return float|null
     */
    public function getNUC_Rate()
    {
        return $this->NUC_Rate;
    }
    /**
     * Set NUC_Rate value
     * @param float $nUC_Rate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function setNUC_Rate($nUC_Rate = null)
    {
        $this->NUC_Rate = $nUC_Rate;
        return $this;
    }
    /**
     * Get ExchangeRate value
     * @return float|null
     */
    public function getExchangeRate()
    {
        return $this->ExchangeRate;
    }
    /**
     * Set ExchangeRate value
     * @param float $exchangeRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public function setExchangeRate($exchangeRate = null)
    {
        $this->ExchangeRate = $exchangeRate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
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

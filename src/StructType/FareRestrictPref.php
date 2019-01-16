<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRestrictPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferred fare restrictions to be used in search. | Constrains a fare search to those with restrictions that satisfy user-imposed limitations. | Container used for specifying or limiting acceptable fare restrictions.
 * @subpackage Structs
 */
class FareRestrictPref extends AbstractStructBase
{
    /**
     * The AdvResTicketing
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether advance reservation or ticketing restrictions are acceptable in the search results.
     * - minOccurs: 0
     * @var mixed
     */
    public $AdvResTicketing;
    /**
     * The StayRestrictions
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether restrictions on minimum or maximum stays should be included in the search results.
     * - minOccurs: 0
     * @var mixed
     */
    public $StayRestrictions;
    /**
     * The VoluntaryChanges
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether penalties associated with voluntary changes should be included in the search results.
     * - minOccurs: 0
     * @var mixed
     */
    public $VoluntaryChanges;
    /**
     * The FareDisplayCurrency
     * Meta informations extracted from the WSDL
     * - documentation: Currency in which fare display is requested.
     * - use: optional
     * @var string
     */
    public $FareDisplayCurrency;
    /**
     * The CurrencyOverride
     * Meta informations extracted from the WSDL
     * - documentation: Display fare published in other than local selling currency only.
     * - use: optional
     * @var string
     */
    public $CurrencyOverride;
    /**
     * Constructor method for FareRestrictPref
     * @uses FareRestrictPref::setAdvResTicketing()
     * @uses FareRestrictPref::setStayRestrictions()
     * @uses FareRestrictPref::setVoluntaryChanges()
     * @uses FareRestrictPref::setFareDisplayCurrency()
     * @uses FareRestrictPref::setCurrencyOverride()
     * @param mixed $advResTicketing
     * @param mixed $stayRestrictions
     * @param mixed $voluntaryChanges
     * @param string $fareDisplayCurrency
     * @param string $currencyOverride
     */
    public function __construct($advResTicketing = null, $stayRestrictions = null, $voluntaryChanges = null, $fareDisplayCurrency = null, $currencyOverride = null)
    {
        $this
            ->setAdvResTicketing($advResTicketing)
            ->setStayRestrictions($stayRestrictions)
            ->setVoluntaryChanges($voluntaryChanges)
            ->setFareDisplayCurrency($fareDisplayCurrency)
            ->setCurrencyOverride($currencyOverride);
    }
    /**
     * Get AdvResTicketing value
     * @return mixed|null
     */
    public function getAdvResTicketing()
    {
        return $this->AdvResTicketing;
    }
    /**
     * Set AdvResTicketing value
     * @param mixed $advResTicketing
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref
     */
    public function setAdvResTicketing($advResTicketing = null)
    {
        $this->AdvResTicketing = $advResTicketing;
        return $this;
    }
    /**
     * Get StayRestrictions value
     * @return mixed|null
     */
    public function getStayRestrictions()
    {
        return $this->StayRestrictions;
    }
    /**
     * Set StayRestrictions value
     * @param mixed $stayRestrictions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref
     */
    public function setStayRestrictions($stayRestrictions = null)
    {
        $this->StayRestrictions = $stayRestrictions;
        return $this;
    }
    /**
     * Get VoluntaryChanges value
     * @return mixed|null
     */
    public function getVoluntaryChanges()
    {
        return $this->VoluntaryChanges;
    }
    /**
     * Set VoluntaryChanges value
     * @param mixed $voluntaryChanges
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref
     */
    public function setVoluntaryChanges($voluntaryChanges = null)
    {
        $this->VoluntaryChanges = $voluntaryChanges;
        return $this;
    }
    /**
     * Get FareDisplayCurrency value
     * @return string|null
     */
    public function getFareDisplayCurrency()
    {
        return $this->FareDisplayCurrency;
    }
    /**
     * Set FareDisplayCurrency value
     * @param string $fareDisplayCurrency
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref
     */
    public function setFareDisplayCurrency($fareDisplayCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($fareDisplayCurrency) && !is_string($fareDisplayCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareDisplayCurrency)), __LINE__);
        }
        $this->FareDisplayCurrency = $fareDisplayCurrency;
        return $this;
    }
    /**
     * Get CurrencyOverride value
     * @return string|null
     */
    public function getCurrencyOverride()
    {
        return $this->CurrencyOverride;
    }
    /**
     * Set CurrencyOverride value
     * @param string $currencyOverride
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref
     */
    public function setCurrencyOverride($currencyOverride = null)
    {
        // validation for constraint: string
        if (!is_null($currencyOverride) && !is_string($currencyOverride)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyOverride)), __LINE__);
        }
        $this->CurrencyOverride = $currencyOverride;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref
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

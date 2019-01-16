<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Criterion StructType
 * Meta informations extracted from the WSDL
 * - documentation: Child elements that identify a single search criterion by criteria type. Because many of the types include partial matches to string values such as partial addresses (street names without a number) or partial telephone numbers (area
 * code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether the match to the string value must be exact.
 * @subpackage Structs
 */
class Criterion extends HotelSearchCriterionType
{
    /**
     * The MoreDataEchoToken
     * Meta informations extracted from the WSDL
     * - documentation: The search response returns this attribute if there were additional items that could not fit within the response. The text value returned should be echoed in the subsequent request to indicate where to begin the next block of data.
     * - use: optional
     * @var string
     */
    public $MoreDataEchoToken;
    /**
     * The InfoSource
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the source of the data being exchanged as determined by trading partners.
     * - use: optional
     * @var string
     */
    public $InfoSource;
    /**
     * The AlternateAvailability
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AlternateAvailability;
    /**
     * The AddressSearchScope
     * @var string
     */
    public $AddressSearchScope;
    /**
     * Constructor method for Criterion
     * @uses Criterion::setMoreDataEchoToken()
     * @uses Criterion::setInfoSource()
     * @uses Criterion::setAlternateAvailability()
     * @uses Criterion::setAddressSearchScope()
     * @param string $moreDataEchoToken
     * @param string $infoSource
     * @param string $alternateAvailability
     * @param string $addressSearchScope
     */
    public function __construct($moreDataEchoToken = null, $infoSource = null, $alternateAvailability = null, $addressSearchScope = null)
    {
        $this
            ->setMoreDataEchoToken($moreDataEchoToken)
            ->setInfoSource($infoSource)
            ->setAlternateAvailability($alternateAvailability)
            ->setAddressSearchScope($addressSearchScope);
    }
    /**
     * Get MoreDataEchoToken value
     * @return string|null
     */
    public function getMoreDataEchoToken()
    {
        return $this->MoreDataEchoToken;
    }
    /**
     * Set MoreDataEchoToken value
     * @param string $moreDataEchoToken
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criterion
     */
    public function setMoreDataEchoToken($moreDataEchoToken = null)
    {
        // validation for constraint: string
        if (!is_null($moreDataEchoToken) && !is_string($moreDataEchoToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moreDataEchoToken)), __LINE__);
        }
        $this->MoreDataEchoToken = $moreDataEchoToken;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criterion
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
     * Get AlternateAvailability value
     * @return string|null
     */
    public function getAlternateAvailability()
    {
        return $this->AlternateAvailability;
    }
    /**
     * Set AlternateAvailability value
     * @param string $alternateAvailability
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criterion
     */
    public function setAlternateAvailability($alternateAvailability = null)
    {
        // validation for constraint: string
        if (!is_null($alternateAvailability) && !is_string($alternateAvailability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alternateAvailability)), __LINE__);
        }
        $this->AlternateAvailability = $alternateAvailability;
        return $this;
    }
    /**
     * Get AddressSearchScope value
     * @return string|null
     */
    public function getAddressSearchScope()
    {
        return $this->AddressSearchScope;
    }
    /**
     * Set AddressSearchScope value
     * @param string $addressSearchScope
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criterion
     */
    public function setAddressSearchScope($addressSearchScope = null)
    {
        // validation for constraint: string
        if (!is_null($addressSearchScope) && !is_string($addressSearchScope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressSearchScope)), __LINE__);
        }
        $this->AddressSearchScope = $addressSearchScope;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criterion
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

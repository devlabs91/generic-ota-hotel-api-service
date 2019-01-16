<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyValueMatchType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A property that matches some or all of the search criteria.
 * @subpackage Structs
 */
class PropertyValueMatchType extends BasicPropertyInfoType
{
    /**
     * The SearchValueMatch
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch[]
     */
    public $SearchValueMatch;
    /**
     * The Amenities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Amenities
     */
    public $Amenities;
    /**
     * The RateRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public $RateRange;
    /**
     * The MoreDataEchoToken
     * Meta informations extracted from the WSDL
     * - documentation: The search response returns this attribute if there were additional items that could not fit within the response. The text value returned should be echoed in the subsequent request in "Criteria/Criterion@MoreDataEchoToken" to
     * indicate where to begin the next block of data.
     * - use: optional
     * @var string
     */
    public $MoreDataEchoToken;
    /**
     * The SameCountryInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, this property is in the same country as the requested city's country. When false, indicates this country is not the same as the requested city's country.
     * - use: optional
     * @var bool
     */
    public $SameCountryInd;
    /**
     * The AvailabilityStatus
     * Meta informations extracted from the WSDL
     * - documentation: The availability status of the property.
     * - use: optional
     * @var string
     */
    public $AvailabilityStatus;
    /**
     * Constructor method for PropertyValueMatchType
     * @uses PropertyValueMatchType::setSearchValueMatch()
     * @uses PropertyValueMatchType::setAmenities()
     * @uses PropertyValueMatchType::setRateRange()
     * @uses PropertyValueMatchType::setMoreDataEchoToken()
     * @uses PropertyValueMatchType::setSameCountryInd()
     * @uses PropertyValueMatchType::setAvailabilityStatus()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch[] $searchValueMatch
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRange $rateRange
     * @param string $moreDataEchoToken
     * @param bool $sameCountryInd
     * @param string $availabilityStatus
     */
    public function __construct(array $searchValueMatch = array(), \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities = null, \Devlabs91\GenericOtaHotelApiService\StructType\RateRange $rateRange = null, $moreDataEchoToken = null, $sameCountryInd = null, $availabilityStatus = null)
    {
        $this
            ->setSearchValueMatch($searchValueMatch)
            ->setAmenities($amenities)
            ->setRateRange($rateRange)
            ->setMoreDataEchoToken($moreDataEchoToken)
            ->setSameCountryInd($sameCountryInd)
            ->setAvailabilityStatus($availabilityStatus);
    }
    /**
     * Get SearchValueMatch value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch[]|null
     */
    public function getSearchValueMatch()
    {
        return $this->SearchValueMatch;
    }
    /**
     * Set SearchValueMatch value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch[] $searchValueMatch
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyValueMatchType
     */
    public function setSearchValueMatch(array $searchValueMatch = array())
    {
        foreach ($searchValueMatch as $propertyValueMatchTypeSearchValueMatchItem) {
            // validation for constraint: itemType
            if (!$propertyValueMatchTypeSearchValueMatchItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch) {
                throw new \InvalidArgumentException(sprintf('The SearchValueMatch property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch, "%s" given', is_object($propertyValueMatchTypeSearchValueMatchItem) ? get_class($propertyValueMatchTypeSearchValueMatchItem) : gettype($propertyValueMatchTypeSearchValueMatchItem)), __LINE__);
            }
        }
        $this->SearchValueMatch = $searchValueMatch;
        return $this;
    }
    /**
     * Add item to SearchValueMatch value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyValueMatchType
     */
    public function addToSearchValueMatch(\Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch) {
            throw new \InvalidArgumentException(sprintf('The SearchValueMatch property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchValueMatch[] = $item;
        return $this;
    }
    /**
     * Get Amenities value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenities|null
     */
    public function getAmenities()
    {
        return $this->Amenities;
    }
    /**
     * Set Amenities value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyValueMatchType
     */
    public function setAmenities(\Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities = null)
    {
        $this->Amenities = $amenities;
        return $this;
    }
    /**
     * Get RateRange value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange|null
     */
    public function getRateRange()
    {
        return $this->RateRange;
    }
    /**
     * Set RateRange value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRange $rateRange
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyValueMatchType
     */
    public function setRateRange(\Devlabs91\GenericOtaHotelApiService\StructType\RateRange $rateRange = null)
    {
        $this->RateRange = $rateRange;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyValueMatchType
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
     * Get SameCountryInd value
     * @return bool|null
     */
    public function getSameCountryInd()
    {
        return $this->SameCountryInd;
    }
    /**
     * Set SameCountryInd value
     * @param bool $sameCountryInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyValueMatchType
     */
    public function setSameCountryInd($sameCountryInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($sameCountryInd) && !is_bool($sameCountryInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sameCountryInd)), __LINE__);
        }
        $this->SameCountryInd = $sameCountryInd;
        return $this;
    }
    /**
     * Get AvailabilityStatus value
     * @return string|null
     */
    public function getAvailabilityStatus()
    {
        return $this->AvailabilityStatus;
    }
    /**
     * Set AvailabilityStatus value
     * @param string $availabilityStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyValueMatchType
     */
    public function setAvailabilityStatus($availabilityStatus = null)
    {
        // validation for constraint: string
        if (!is_null($availabilityStatus) && !is_string($availabilityStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availabilityStatus)), __LINE__);
        }
        $this->AvailabilityStatus = $availabilityStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyValueMatchType
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

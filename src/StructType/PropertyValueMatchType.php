<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyValueMatchType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A propety that matches some or all of the search criteria.
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
     * Constructor method for PropertyValueMatchType
     * @uses PropertyValueMatchType::setSearchValueMatch()
     * @uses PropertyValueMatchType::setAmenities()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch[] $searchValueMatch
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities
     */
    public function __construct(array $searchValueMatch = array(), \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities = null)
    {
        $this
            ->setSearchValueMatch($searchValueMatch)
            ->setAmenities($amenities);
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

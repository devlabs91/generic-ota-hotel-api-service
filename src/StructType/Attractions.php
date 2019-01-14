<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attractions StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Attraction objects identifying the local interest attractions in the vicinity of this hotel facility.
 * @subpackage Structs
 */
class Attractions extends AbstractStructBase
{
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $LastUpdated;
    /**
     * The Attraction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Attraction[]
     */
    public $Attraction;
    /**
     * Constructor method for Attractions
     * @uses Attractions::setLastUpdated()
     * @uses Attractions::setAttraction()
     * @param string $lastUpdated
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Attraction[] $attraction
     */
    public function __construct($lastUpdated = null, array $attraction = array())
    {
        $this
            ->setLastUpdated($lastUpdated)
            ->setAttraction($attraction);
    }
    /**
     * Get LastUpdated value
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attractions
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Get Attraction value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction[]|null
     */
    public function getAttraction()
    {
        return $this->Attraction;
    }
    /**
     * Set Attraction value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Attraction[] $attraction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attractions
     */
    public function setAttraction(array $attraction = array())
    {
        foreach ($attraction as $attractionsAttractionItem) {
            // validation for constraint: itemType
            if (!$attractionsAttractionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Attraction) {
                throw new \InvalidArgumentException(sprintf('The Attraction property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Attraction, "%s" given', is_object($attractionsAttractionItem) ? get_class($attractionsAttractionItem) : gettype($attractionsAttractionItem)), __LINE__);
            }
        }
        $this->Attraction = $attraction;
        return $this;
    }
    /**
     * Add item to Attraction value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Attraction $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attractions
     */
    public function addToAttraction(\Devlabs91\GenericOtaHotelApiService\StructType\Attraction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Attraction) {
            throw new \InvalidArgumentException(sprintf('The Attraction property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Attraction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attraction[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attractions
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

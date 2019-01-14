<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClosedSeasons StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of date and time periods when the hotel facility is closed.
 * @subpackage Structs
 */
class ClosedSeasons extends AbstractStructBase
{
    /**
     * The ClosedSeason
     * Meta informations extracted from the WSDL
     * - documentation: A date and time period when a hotel facility is closed.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $ClosedSeason;
    /**
     * Constructor method for ClosedSeasons
     * @uses ClosedSeasons::setClosedSeason()
     * @param mixed[] $closedSeason
     */
    public function __construct(array $closedSeason = array())
    {
        $this
            ->setClosedSeason($closedSeason);
    }
    /**
     * Get ClosedSeason value
     * @return mixed[]|null
     */
    public function getClosedSeason()
    {
        return $this->ClosedSeason;
    }
    /**
     * Set ClosedSeason value
     * @throws \InvalidArgumentException
     * @param mixed[] $closedSeason
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ClosedSeasons
     */
    public function setClosedSeason(array $closedSeason = array())
    {
        foreach ($closedSeason as $closedSeasonsClosedSeasonItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ClosedSeason property can only contain items of anyType, "%s" given', is_object($closedSeasonsClosedSeasonItem) ? get_class($closedSeasonsClosedSeasonItem) : gettype($closedSeasonsClosedSeasonItem)), __LINE__);
            }
        }
        $this->ClosedSeason = $closedSeason;
        return $this;
    }
    /**
     * Add item to ClosedSeason value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ClosedSeasons
     */
    public function addToClosedSeason($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ClosedSeason property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ClosedSeason[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ClosedSeasons
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

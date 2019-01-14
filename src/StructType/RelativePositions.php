<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelativePositions StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of directions to/from one or more locations.
 * @subpackage Structs
 */
class RelativePositions extends AbstractStructBase
{
    /**
     * The RelativePosition
     * Meta informations extracted from the WSDL
     * - documentation: Where the hotel is in relation to/from a location.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $RelativePosition;
    /**
     * Constructor method for RelativePositions
     * @uses RelativePositions::setRelativePosition()
     * @param mixed[] $relativePosition
     */
    public function __construct(array $relativePosition = array())
    {
        $this
            ->setRelativePosition($relativePosition);
    }
    /**
     * Get RelativePosition value
     * @return mixed[]|null
     */
    public function getRelativePosition()
    {
        return $this->RelativePosition;
    }
    /**
     * Set RelativePosition value
     * @throws \InvalidArgumentException
     * @param mixed[] $relativePosition
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositions
     */
    public function setRelativePosition(array $relativePosition = array())
    {
        foreach ($relativePosition as $relativePositionsRelativePositionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RelativePosition property can only contain items of anyType, "%s" given', is_object($relativePositionsRelativePositionItem) ? get_class($relativePositionsRelativePositionItem) : gettype($relativePositionsRelativePositionItem)), __LINE__);
            }
        }
        $this->RelativePosition = $relativePosition;
        return $this;
    }
    /**
     * Add item to RelativePosition value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositions
     */
    public function addToRelativePosition($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RelativePosition property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RelativePosition[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositions
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

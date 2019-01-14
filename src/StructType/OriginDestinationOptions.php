<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginDestinationOptions StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of OriginDestinationOption
 * @subpackage Structs
 */
class OriginDestinationOptions extends AbstractStructBase
{
    /**
     * The OriginDestinationOption
     * Meta informations extracted from the WSDL
     * - documentation: A container for OriginDestinationOptionType.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $OriginDestinationOption;
    /**
     * Constructor method for OriginDestinationOptions
     * @uses OriginDestinationOptions::setOriginDestinationOption()
     * @param mixed[] $originDestinationOption
     */
    public function __construct(array $originDestinationOption = array())
    {
        $this
            ->setOriginDestinationOption($originDestinationOption);
    }
    /**
     * Get OriginDestinationOption value
     * @return mixed[]|null
     */
    public function getOriginDestinationOption()
    {
        return $this->OriginDestinationOption;
    }
    /**
     * Set OriginDestinationOption value
     * @throws \InvalidArgumentException
     * @param mixed[] $originDestinationOption
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptions
     */
    public function setOriginDestinationOption(array $originDestinationOption = array())
    {
        foreach ($originDestinationOption as $originDestinationOptionsOriginDestinationOptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The OriginDestinationOption property can only contain items of anyType, "%s" given', is_object($originDestinationOptionsOriginDestinationOptionItem) ? get_class($originDestinationOptionsOriginDestinationOptionItem) : gettype($originDestinationOptionsOriginDestinationOptionItem)), __LINE__);
            }
        }
        $this->OriginDestinationOption = $originDestinationOption;
        return $this;
    }
    /**
     * Add item to OriginDestinationOption value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptions
     */
    public function addToOriginDestinationOption($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The OriginDestinationOption property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OriginDestinationOption[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptions
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

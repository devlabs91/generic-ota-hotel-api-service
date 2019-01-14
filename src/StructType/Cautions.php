<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cautions StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of items of essential information relating to components of a package itinerary.
 * @subpackage Structs
 */
class Cautions extends AbstractStructBase
{
    /**
     * The Caution
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $Caution;
    /**
     * Constructor method for Cautions
     * @uses Cautions::setCaution()
     * @param mixed[] $caution
     */
    public function __construct(array $caution = array())
    {
        $this
            ->setCaution($caution);
    }
    /**
     * Get Caution value
     * @return mixed[]|null
     */
    public function getCaution()
    {
        return $this->Caution;
    }
    /**
     * Set Caution value
     * @throws \InvalidArgumentException
     * @param mixed[] $caution
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Cautions
     */
    public function setCaution(array $caution = array())
    {
        foreach ($caution as $cautionsCautionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Caution property can only contain items of anyType, "%s" given', is_object($cautionsCautionItem) ? get_class($cautionsCautionItem) : gettype($cautionsCautionItem)), __LINE__);
            }
        }
        $this->Caution = $caution;
        return $this;
    }
    /**
     * Add item to Caution value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Cautions
     */
    public function addToCaution($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Caution property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Caution[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Cautions
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

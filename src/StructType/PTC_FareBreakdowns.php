<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PTC_FareBreakdowns StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a collection of PTC Fare Breakdowns
 * @subpackage Structs
 */
class PTC_FareBreakdowns extends AbstractStructBase
{
    /**
     * The PTC_FareBreakdown
     * Meta informations extracted from the WSDL
     * - documentation: Per passenger type code pricing for a travel itinerary.
     * - maxOccurs: 256
     * @var mixed[]
     */
    public $PTC_FareBreakdown;
    /**
     * Constructor method for PTC_FareBreakdowns
     * @uses PTC_FareBreakdowns::setPTC_FareBreakdown()
     * @param mixed[] $pTC_FareBreakdown
     */
    public function __construct(array $pTC_FareBreakdown = array())
    {
        $this
            ->setPTC_FareBreakdown($pTC_FareBreakdown);
    }
    /**
     * Get PTC_FareBreakdown value
     * @return mixed[]|null
     */
    public function getPTC_FareBreakdown()
    {
        return $this->PTC_FareBreakdown;
    }
    /**
     * Set PTC_FareBreakdown value
     * @throws \InvalidArgumentException
     * @param mixed[] $pTC_FareBreakdown
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTC_FareBreakdowns
     */
    public function setPTC_FareBreakdown(array $pTC_FareBreakdown = array())
    {
        foreach ($pTC_FareBreakdown as $pTC_FareBreakdownsPTC_FareBreakdownItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PTC_FareBreakdown property can only contain items of anyType, "%s" given', is_object($pTC_FareBreakdownsPTC_FareBreakdownItem) ? get_class($pTC_FareBreakdownsPTC_FareBreakdownItem) : gettype($pTC_FareBreakdownsPTC_FareBreakdownItem)), __LINE__);
            }
        }
        $this->PTC_FareBreakdown = $pTC_FareBreakdown;
        return $this;
    }
    /**
     * Add item to PTC_FareBreakdown value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTC_FareBreakdowns
     */
    public function addToPTC_FareBreakdown($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PTC_FareBreakdown property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PTC_FareBreakdown[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTC_FareBreakdowns
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

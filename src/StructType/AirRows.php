<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRows StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of Air Rows
 * @subpackage Structs
 */
class AirRows extends AbstractStructBase
{
    /**
     * The AirRow
     * Meta informations extracted from the WSDL
     * - documentation: Row in a Cabin class of a flight
     * - maxOccurs: 999
     * @var mixed[]
     */
    public $AirRow;
    /**
     * Constructor method for AirRows
     * @uses AirRows::setAirRow()
     * @param mixed[] $airRow
     */
    public function __construct(array $airRow = array())
    {
        $this
            ->setAirRow($airRow);
    }
    /**
     * Get AirRow value
     * @return mixed[]|null
     */
    public function getAirRow()
    {
        return $this->AirRow;
    }
    /**
     * Set AirRow value
     * @throws \InvalidArgumentException
     * @param mixed[] $airRow
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRows
     */
    public function setAirRow(array $airRow = array())
    {
        foreach ($airRow as $airRowsAirRowItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AirRow property can only contain items of anyType, "%s" given', is_object($airRowsAirRowItem) ? get_class($airRowsAirRowItem) : gettype($airRowsAirRowItem)), __LINE__);
            }
        }
        $this->AirRow = $airRow;
        return $this;
    }
    /**
     * Add item to AirRow value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRows
     */
    public function addToAirRow($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AirRow property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirRow[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRows
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

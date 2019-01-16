<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BlackoutDateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides blackout date information.
 * @subpackage Structs
 */
class BlackoutDateType extends AbstractStructBase
{
    /**
     * The BlackoutDate
     * Meta informations extracted from the WSDL
     * - documentation: Indicates black-out dates for the travel product/service.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $BlackoutDate;
    /**
     * Constructor method for BlackoutDateType
     * @uses BlackoutDateType::setBlackoutDate()
     * @param mixed[] $blackoutDate
     */
    public function __construct(array $blackoutDate = array())
    {
        $this
            ->setBlackoutDate($blackoutDate);
    }
    /**
     * Get BlackoutDate value
     * @return mixed[]|null
     */
    public function getBlackoutDate()
    {
        return $this->BlackoutDate;
    }
    /**
     * Set BlackoutDate value
     * @throws \InvalidArgumentException
     * @param mixed[] $blackoutDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BlackoutDateType
     */
    public function setBlackoutDate(array $blackoutDate = array())
    {
        foreach ($blackoutDate as $blackoutDateTypeBlackoutDateItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The BlackoutDate property can only contain items of anyType, "%s" given', is_object($blackoutDateTypeBlackoutDateItem) ? get_class($blackoutDateTypeBlackoutDateItem) : gettype($blackoutDateTypeBlackoutDateItem)), __LINE__);
            }
        }
        $this->BlackoutDate = $blackoutDate;
        return $this;
    }
    /**
     * Add item to BlackoutDate value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BlackoutDateType
     */
    public function addToBlackoutDate($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The BlackoutDate property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BlackoutDate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BlackoutDateType
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

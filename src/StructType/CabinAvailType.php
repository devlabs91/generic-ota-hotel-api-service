<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinAvailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a section of an aircraft, possibly providing extra services. | Provides a code and/or name for a cabin.
 * @subpackage Structs
 */
class CabinAvailType extends AbstractStructBase
{
    /**
     * The Seat
     * Meta informations extracted from the WSDL
     * - documentation: Specifies seat availability by class withn a cabin
     * - maxOccurs: 26
     * @var mixed[]
     */
    public $Seat;
    /**
     * The BaggageAllowance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BaggageAllowance
     */
    public $BaggageAllowance;
    /**
     * The Meal
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the meal provided.
     * - use: optional
     * @var string
     */
    public $Meal;
    /**
     * Constructor method for CabinAvailType
     * @uses CabinAvailType::setSeat()
     * @uses CabinAvailType::setBaggageAllowance()
     * @uses CabinAvailType::setMeal()
     * @param mixed[] $seat
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BaggageAllowance $baggageAllowance
     * @param string $meal
     */
    public function __construct(array $seat = array(), \Devlabs91\GenericOtaHotelApiService\StructType\BaggageAllowance $baggageAllowance = null, $meal = null)
    {
        $this
            ->setSeat($seat)
            ->setBaggageAllowance($baggageAllowance)
            ->setMeal($meal);
    }
    /**
     * Get Seat value
     * @return mixed[]|null
     */
    public function getSeat()
    {
        return $this->Seat;
    }
    /**
     * Set Seat value
     * @throws \InvalidArgumentException
     * @param mixed[] $seat
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinAvailType
     */
    public function setSeat(array $seat = array())
    {
        foreach ($seat as $cabinAvailTypeSeatItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Seat property can only contain items of anyType, "%s" given', is_object($cabinAvailTypeSeatItem) ? get_class($cabinAvailTypeSeatItem) : gettype($cabinAvailTypeSeatItem)), __LINE__);
            }
        }
        $this->Seat = $seat;
        return $this;
    }
    /**
     * Add item to Seat value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinAvailType
     */
    public function addToSeat($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Seat property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Seat[] = $item;
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaggageAllowance|null
     */
    public function getBaggageAllowance()
    {
        return $this->BaggageAllowance;
    }
    /**
     * Set BaggageAllowance value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BaggageAllowance $baggageAllowance
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinAvailType
     */
    public function setBaggageAllowance(\Devlabs91\GenericOtaHotelApiService\StructType\BaggageAllowance $baggageAllowance = null)
    {
        $this->BaggageAllowance = $baggageAllowance;
        return $this;
    }
    /**
     * Get Meal value
     * @return string|null
     */
    public function getMeal()
    {
        return $this->Meal;
    }
    /**
     * Set Meal value
     * @param string $meal
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinAvailType
     */
    public function setMeal($meal = null)
    {
        // validation for constraint: string
        if (!is_null($meal) && !is_string($meal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meal)), __LINE__);
        }
        $this->Meal = $meal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinAvailType
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

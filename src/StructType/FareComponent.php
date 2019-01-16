<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComponent StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the data for a component of the fare. | The currency code and the amount for the fare component.
 * @subpackage Structs
 */
class FareComponent extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: The fare component number.
     * - use: required
     * @var string
     */
    public $Number;
    /**
     * The FlightLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg[]
     */
    public $FlightLeg;
    /**
     * Constructor method for FareComponent
     * @uses FareComponent::setNumber()
     * @uses FareComponent::setFlightLeg()
     * @param string $number
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg[] $flightLeg
     */
    public function __construct($number = null, array $flightLeg = array())
    {
        $this
            ->setNumber($number)
            ->setFlightLeg($flightLeg);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get FlightLeg value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg[]|null
     */
    public function getFlightLeg()
    {
        return $this->FlightLeg;
    }
    /**
     * Set FlightLeg value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg[] $flightLeg
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent
     */
    public function setFlightLeg(array $flightLeg = array())
    {
        foreach ($flightLeg as $fareComponentFlightLegItem) {
            // validation for constraint: itemType
            if (!$fareComponentFlightLegItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg) {
                throw new \InvalidArgumentException(sprintf('The FlightLeg property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg, "%s" given', is_object($fareComponentFlightLegItem) ? get_class($fareComponentFlightLegItem) : gettype($fareComponentFlightLegItem)), __LINE__);
            }
        }
        $this->FlightLeg = $flightLeg;
        return $this;
    }
    /**
     * Add item to FlightLeg value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent
     */
    public function addToFlightLeg(\Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg) {
            throw new \InvalidArgumentException(sprintf('The FlightLeg property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightLeg[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleTourInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleTourInfoType provides information about a tour that includes a vehicle rental.
 * @subpackage Structs
 */
class VehicleTourInfoType extends AbstractStructBase
{
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - documentation: This identifies the tour operator.
     * - minOccurs: 0
     * @var mixed
     */
    public $TourOperator;
    /**
     * The TourNumber
     * Meta informations extracted from the WSDL
     * - documentation: This is the identifying code assigned by the tour operating company to the tour that includes the vehicle rental.
     * - use: optional
     * @var string
     */
    public $TourNumber;
    /**
     * Constructor method for VehicleTourInfoType
     * @uses VehicleTourInfoType::setTourOperator()
     * @uses VehicleTourInfoType::setTourNumber()
     * @param mixed $tourOperator
     * @param string $tourNumber
     */
    public function __construct($tourOperator = null, $tourNumber = null)
    {
        $this
            ->setTourOperator($tourOperator)
            ->setTourNumber($tourNumber);
    }
    /**
     * Get TourOperator value
     * @return mixed|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param mixed $tourOperator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTourInfoType
     */
    public function setTourOperator($tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Get TourNumber value
     * @return string|null
     */
    public function getTourNumber()
    {
        return $this->TourNumber;
    }
    /**
     * Set TourNumber value
     * @param string $tourNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTourInfoType
     */
    public function setTourNumber($tourNumber = null)
    {
        // validation for constraint: string
        if (!is_null($tourNumber) && !is_string($tourNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourNumber)), __LINE__);
        }
        $this->TourNumber = $tourNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTourInfoType
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

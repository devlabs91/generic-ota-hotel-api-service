<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vehicle StructType
 * Meta informations extracted from the WSDL
 * - documentation: To identify a vehicle type associated with additional driver information. | Identifies a specific vehicle type. | This element may be used to clarify the vehicle associated with this charge, if the charge varies by vehicle type. |
 * Specific information about a vehicle that is offered for rental at this facility. This element may repeat to identify all vehicles that may be rented from this facility. | Vehicle info including size, class, make/model, vehicle asset number, etc.
 * This is the actual vehicle being rented.
 * @subpackage Structs
 */
class Vehicle extends VehicleType
{
    /**
     * The IncludeExclude
     * Meta informations extracted from the WSDL
     * - documentation: To specify if this vehicle type is allowed, required, excluded, or included for an additional driver. | To specify if this car type is allowed, required, included, excluded for the associated age. | To indicate if the coverage is
     * required, allowed, included, or excluded for this vehicle type.
     * - use: optional
     * @var string
     */
    public $IncludeExclude;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Free text information for this vehicle type.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Text;
    /**
     * The IsConfirmableInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, this car type may be confirmed. If false, it may not be confirmed.
     * - use: optional
     * @var bool
     */
    public $IsConfirmableInd;
    /**
     * The DistanceUnit
     * Meta informations extracted from the WSDL
     * - documentation: To specify whether mileage information is miles or kilometers.
     * - use: optional
     * @var string
     */
    public $DistanceUnit;
    /**
     * The DistancePerFuelUnit
     * Meta informations extracted from the WSDL
     * - documentation: To specify the number of miles/kilometers per gallon/litre of gas.
     * - use: optional
     * @var string
     */
    public $DistancePerFuelUnit;
    /**
     * The VehRentalDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $VehRentalDetails;
    /**
     * Constructor method for Vehicle
     * @uses Vehicle::setIncludeExclude()
     * @uses Vehicle::setText()
     * @uses Vehicle::setIsConfirmableInd()
     * @uses Vehicle::setDistanceUnit()
     * @uses Vehicle::setDistancePerFuelUnit()
     * @uses Vehicle::setVehRentalDetails()
     * @param string $includeExclude
     * @param mixed[] $text
     * @param bool $isConfirmableInd
     * @param string $distanceUnit
     * @param string $distancePerFuelUnit
     * @param mixed[] $vehRentalDetails
     */
    public function __construct($includeExclude = null, array $text = array(), $isConfirmableInd = null, $distanceUnit = null, $distancePerFuelUnit = null, array $vehRentalDetails = array())
    {
        $this
            ->setIncludeExclude($includeExclude)
            ->setText($text)
            ->setIsConfirmableInd($isConfirmableInd)
            ->setDistanceUnit($distanceUnit)
            ->setDistancePerFuelUnit($distancePerFuelUnit)
            ->setVehRentalDetails($vehRentalDetails);
    }
    /**
     * Get IncludeExclude value
     * @return string|null
     */
    public function getIncludeExclude()
    {
        return $this->IncludeExclude;
    }
    /**
     * Set IncludeExclude value
     * @param string $includeExclude
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle
     */
    public function setIncludeExclude($includeExclude = null)
    {
        // validation for constraint: string
        if (!is_null($includeExclude) && !is_string($includeExclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($includeExclude)), __LINE__);
        }
        $this->IncludeExclude = $includeExclude;
        return $this;
    }
    /**
     * Get Text value
     * @return mixed[]|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @throws \InvalidArgumentException
     * @param mixed[] $text
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle
     */
    public function setText(array $text = array())
    {
        foreach ($text as $vehicleTextItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Text property can only contain items of anyType, "%s" given', is_object($vehicleTextItem) ? get_class($vehicleTextItem) : gettype($vehicleTextItem)), __LINE__);
            }
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Add item to Text value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle
     */
    public function addToText($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }
    /**
     * Get IsConfirmableInd value
     * @return bool|null
     */
    public function getIsConfirmableInd()
    {
        return $this->IsConfirmableInd;
    }
    /**
     * Set IsConfirmableInd value
     * @param bool $isConfirmableInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle
     */
    public function setIsConfirmableInd($isConfirmableInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($isConfirmableInd) && !is_bool($isConfirmableInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isConfirmableInd)), __LINE__);
        }
        $this->IsConfirmableInd = $isConfirmableInd;
        return $this;
    }
    /**
     * Get DistanceUnit value
     * @return string|null
     */
    public function getDistanceUnit()
    {
        return $this->DistanceUnit;
    }
    /**
     * Set DistanceUnit value
     * @param string $distanceUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle
     */
    public function setDistanceUnit($distanceUnit = null)
    {
        // validation for constraint: string
        if (!is_null($distanceUnit) && !is_string($distanceUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distanceUnit)), __LINE__);
        }
        $this->DistanceUnit = $distanceUnit;
        return $this;
    }
    /**
     * Get DistancePerFuelUnit value
     * @return string|null
     */
    public function getDistancePerFuelUnit()
    {
        return $this->DistancePerFuelUnit;
    }
    /**
     * Set DistancePerFuelUnit value
     * @param string $distancePerFuelUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle
     */
    public function setDistancePerFuelUnit($distancePerFuelUnit = null)
    {
        // validation for constraint: string
        if (!is_null($distancePerFuelUnit) && !is_string($distancePerFuelUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distancePerFuelUnit)), __LINE__);
        }
        $this->DistancePerFuelUnit = $distancePerFuelUnit;
        return $this;
    }
    /**
     * Get VehRentalDetails value
     * @return mixed[]|null
     */
    public function getVehRentalDetails()
    {
        return $this->VehRentalDetails;
    }
    /**
     * Set VehRentalDetails value
     * @throws \InvalidArgumentException
     * @param mixed[] $vehRentalDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle
     */
    public function setVehRentalDetails(array $vehRentalDetails = array())
    {
        foreach ($vehRentalDetails as $vehicleVehRentalDetailsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VehRentalDetails property can only contain items of anyType, "%s" given', is_object($vehicleVehRentalDetailsItem) ? get_class($vehicleVehRentalDetailsItem) : gettype($vehicleVehRentalDetailsItem)), __LINE__);
            }
        }
        $this->VehRentalDetails = $vehRentalDetails;
        return $this;
    }
    /**
     * Add item to VehRentalDetails value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle
     */
    public function addToVehRentalDetails($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VehRentalDetails property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehRentalDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle
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

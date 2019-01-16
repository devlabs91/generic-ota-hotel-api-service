<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleRentalCoreType complex type identifies the data that is common, or core, to almost every transaction associated with the rental of a vehicle.
 * @subpackage Structs
 */
class VehicleRentalCoreType extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PickUpLocation[]
     */
    public $PickUpLocation;
    /**
     * The ReturnLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ReturnLocation
     */
    public $ReturnLocation;
    /**
     * The PickUpDateTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PickUpDateTime;
    /**
     * The ReturnDateTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ReturnDateTime;
    /**
     * The StartChargesDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Used when a charge has a delayed start (e.g. if a vehicle is checked-out Sunday night, but actual charges start Monday or planned system down-time allowed a check-out before customer plans to retrieve vehicle or when an additional
     * service is added after a rental has been started and/or will terminate before the rental is completed).
     * - use: optional
     * @var string
     */
    public $StartChargesDateTime;
    /**
     * The StopChargesDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Used when a charge has a delayed stop (e.g. actual charges stop Sunday but the vehicle is checked-in Monday morning or if the system was down when customer returned vehicle or when an additional service is added after a rental has
     * been started and/or will terminate before the rental is completed).
     * - use: optional
     * @var string
     */
    public $StopChargesDateTime;
    /**
     * The OneWayIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates a one-way rental. This may also be discerned using the PickUpLocation and the ReturnLocation.
     * - use: optional
     * @var bool
     */
    public $OneWayIndicator;
    /**
     * The MultiIslandRentalDays
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the total number of rental days on all islands (e.g., if traveling for 7 days, but using a vehicle on one island for 3 days and on another for 2 days, the multi island rental days is 5).
     * - use: optional
     * @var string
     */
    public $MultiIslandRentalDays;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Provides the distance between the pick up and return locations.
     * - use: optional
     * @var int
     */
    public $Quantity;
    /**
     * The DistUnitName
     * Meta informations extracted from the WSDL
     * - documentation: Provides the unit of measure to which the quantity refers.
     * - use: optional
     * @var string
     */
    public $DistUnitName;
    /**
     * Constructor method for VehicleRentalCoreType
     * @uses VehicleRentalCoreType::setPickUpLocation()
     * @uses VehicleRentalCoreType::setReturnLocation()
     * @uses VehicleRentalCoreType::setPickUpDateTime()
     * @uses VehicleRentalCoreType::setReturnDateTime()
     * @uses VehicleRentalCoreType::setStartChargesDateTime()
     * @uses VehicleRentalCoreType::setStopChargesDateTime()
     * @uses VehicleRentalCoreType::setOneWayIndicator()
     * @uses VehicleRentalCoreType::setMultiIslandRentalDays()
     * @uses VehicleRentalCoreType::setQuantity()
     * @uses VehicleRentalCoreType::setDistUnitName()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PickUpLocation[] $pickUpLocation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ReturnLocation $returnLocation
     * @param string $pickUpDateTime
     * @param string $returnDateTime
     * @param string $startChargesDateTime
     * @param string $stopChargesDateTime
     * @param bool $oneWayIndicator
     * @param string $multiIslandRentalDays
     * @param int $quantity
     * @param string $distUnitName
     */
    public function __construct(array $pickUpLocation = array(), \Devlabs91\GenericOtaHotelApiService\StructType\ReturnLocation $returnLocation = null, $pickUpDateTime = null, $returnDateTime = null, $startChargesDateTime = null, $stopChargesDateTime = null, $oneWayIndicator = null, $multiIslandRentalDays = null, $quantity = null, $distUnitName = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setReturnLocation($returnLocation)
            ->setPickUpDateTime($pickUpDateTime)
            ->setReturnDateTime($returnDateTime)
            ->setStartChargesDateTime($startChargesDateTime)
            ->setStopChargesDateTime($stopChargesDateTime)
            ->setOneWayIndicator($oneWayIndicator)
            ->setMultiIslandRentalDays($multiIslandRentalDays)
            ->setQuantity($quantity)
            ->setDistUnitName($distUnitName);
    }
    /**
     * Get PickUpLocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PickUpLocation[]|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PickUpLocation[] $pickUpLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setPickUpLocation(array $pickUpLocation = array())
    {
        foreach ($pickUpLocation as $vehicleRentalCoreTypePickUpLocationItem) {
            // validation for constraint: itemType
            if (!$vehicleRentalCoreTypePickUpLocationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PickUpLocation) {
                throw new \InvalidArgumentException(sprintf('The PickUpLocation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PickUpLocation, "%s" given', is_object($vehicleRentalCoreTypePickUpLocationItem) ? get_class($vehicleRentalCoreTypePickUpLocationItem) : gettype($vehicleRentalCoreTypePickUpLocationItem)), __LINE__);
            }
        }
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Add item to PickUpLocation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PickUpLocation $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function addToPickUpLocation(\Devlabs91\GenericOtaHotelApiService\StructType\PickUpLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PickUpLocation) {
            throw new \InvalidArgumentException(sprintf('The PickUpLocation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PickUpLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PickUpLocation[] = $item;
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReturnLocation|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ReturnLocation $returnLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setReturnLocation(\Devlabs91\GenericOtaHotelApiService\StructType\ReturnLocation $returnLocation = null)
    {
        $this->ReturnLocation = $returnLocation;
        return $this;
    }
    /**
     * Get PickUpDateTime value
     * @return string|null
     */
    public function getPickUpDateTime()
    {
        return $this->PickUpDateTime;
    }
    /**
     * Set PickUpDateTime value
     * @param string $pickUpDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setPickUpDateTime($pickUpDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickUpDateTime) && !is_string($pickUpDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickUpDateTime)), __LINE__);
        }
        $this->PickUpDateTime = $pickUpDateTime;
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return string|null
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setReturnDateTime($returnDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDateTime)), __LINE__);
        }
        $this->ReturnDateTime = $returnDateTime;
        return $this;
    }
    /**
     * Get StartChargesDateTime value
     * @return string|null
     */
    public function getStartChargesDateTime()
    {
        return $this->StartChargesDateTime;
    }
    /**
     * Set StartChargesDateTime value
     * @param string $startChargesDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setStartChargesDateTime($startChargesDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startChargesDateTime) && !is_string($startChargesDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startChargesDateTime)), __LINE__);
        }
        $this->StartChargesDateTime = $startChargesDateTime;
        return $this;
    }
    /**
     * Get StopChargesDateTime value
     * @return string|null
     */
    public function getStopChargesDateTime()
    {
        return $this->StopChargesDateTime;
    }
    /**
     * Set StopChargesDateTime value
     * @param string $stopChargesDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setStopChargesDateTime($stopChargesDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($stopChargesDateTime) && !is_string($stopChargesDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stopChargesDateTime)), __LINE__);
        }
        $this->StopChargesDateTime = $stopChargesDateTime;
        return $this;
    }
    /**
     * Get OneWayIndicator value
     * @return bool|null
     */
    public function getOneWayIndicator()
    {
        return $this->OneWayIndicator;
    }
    /**
     * Set OneWayIndicator value
     * @param bool $oneWayIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setOneWayIndicator($oneWayIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($oneWayIndicator) && !is_bool($oneWayIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($oneWayIndicator)), __LINE__);
        }
        $this->OneWayIndicator = $oneWayIndicator;
        return $this;
    }
    /**
     * Get MultiIslandRentalDays value
     * @return string|null
     */
    public function getMultiIslandRentalDays()
    {
        return $this->MultiIslandRentalDays;
    }
    /**
     * Set MultiIslandRentalDays value
     * @param string $multiIslandRentalDays
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setMultiIslandRentalDays($multiIslandRentalDays = null)
    {
        // validation for constraint: string
        if (!is_null($multiIslandRentalDays) && !is_string($multiIslandRentalDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($multiIslandRentalDays)), __LINE__);
        }
        $this->MultiIslandRentalDays = $multiIslandRentalDays;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get DistUnitName value
     * @return string|null
     */
    public function getDistUnitName()
    {
        return $this->DistUnitName;
    }
    /**
     * Set DistUnitName value
     * @param string $distUnitName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setDistUnitName($distUnitName = null)
    {
        // validation for constraint: string
        if (!is_null($distUnitName) && !is_string($distUnitName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distUnitName)), __LINE__);
        }
        $this->DistUnitName = $distUnitName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
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

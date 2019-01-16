<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReservationSummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleReservationSummaryType complextype identifies the summary data that identifies a reservation. Use of one or more of the elements will help in identifying a specific reservation. | Information about the creation and last
 * modification of the reservation.
 * @subpackage Structs
 */
class VehicleReservationSummaryType extends AbstractStructBase
{
    /**
     * The ConfID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ConfID[]
     */
    public $ConfID;
    /**
     * The PickUpLocation
     * Meta informations extracted from the WSDL
     * - documentation: A code to identify the pick up location, along with an optional code context.
     * - minOccurs: 0
     * @var mixed
     */
    public $PickUpLocation;
    /**
     * The ReturnLocation
     * Meta informations extracted from the WSDL
     * - documentation: A code to identify the return location, along with an optional code context.
     * - minOccurs: 0
     * @var mixed
     */
    public $ReturnLocation;
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: Name of the person associated with the reservation
     * - minOccurs: 0
     * @var mixed
     */
    public $PersonName;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - documentation: Information about a vehicle that has been reserved, such as the class and type.
     * - minOccurs: 0
     * @var mixed
     */
    public $Vehicle;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the vendor associated with this information.
     * - minOccurs: 0
     * @var mixed
     */
    public $Vendor;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The PickUpDateTime
     * Meta informations extracted from the WSDL
     * - documentation: The PickUpDateTime attribute provides information on the pickup date and time.
     * - use: optional
     * @var string
     */
    public $PickUpDateTime;
    /**
     * The ReturnDateTime
     * Meta informations extracted from the WSDL
     * - documentation: The ReturnDateTime attribute provides information on the return date and time.
     * - use: optional
     * @var string
     */
    public $ReturnDateTime;
    /**
     * The ReservationStatus
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ReservationStatus;
    /**
     * Constructor method for VehicleReservationSummaryType
     * @uses VehicleReservationSummaryType::setConfID()
     * @uses VehicleReservationSummaryType::setPickUpLocation()
     * @uses VehicleReservationSummaryType::setReturnLocation()
     * @uses VehicleReservationSummaryType::setPersonName()
     * @uses VehicleReservationSummaryType::setVehicle()
     * @uses VehicleReservationSummaryType::setVendor()
     * @uses VehicleReservationSummaryType::setTPA_Extensions()
     * @uses VehicleReservationSummaryType::setPickUpDateTime()
     * @uses VehicleReservationSummaryType::setReturnDateTime()
     * @uses VehicleReservationSummaryType::setReservationStatus()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ConfID[] $confID
     * @param mixed $pickUpLocation
     * @param mixed $returnLocation
     * @param mixed $personName
     * @param mixed $vehicle
     * @param mixed $vendor
     * @param mixed $tPA_Extensions
     * @param string $pickUpDateTime
     * @param string $returnDateTime
     * @param string $reservationStatus
     */
    public function __construct(array $confID = array(), $pickUpLocation = null, $returnLocation = null, $personName = null, $vehicle = null, $vendor = null, $tPA_Extensions = null, $pickUpDateTime = null, $returnDateTime = null, $reservationStatus = null)
    {
        $this
            ->setConfID($confID)
            ->setPickUpLocation($pickUpLocation)
            ->setReturnLocation($returnLocation)
            ->setPersonName($personName)
            ->setVehicle($vehicle)
            ->setVendor($vendor)
            ->setTPA_Extensions($tPA_Extensions)
            ->setPickUpDateTime($pickUpDateTime)
            ->setReturnDateTime($returnDateTime)
            ->setReservationStatus($reservationStatus);
    }
    /**
     * Get ConfID value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ConfID[]|null
     */
    public function getConfID()
    {
        return $this->ConfID;
    }
    /**
     * Set ConfID value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ConfID[] $confID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
     */
    public function setConfID(array $confID = array())
    {
        foreach ($confID as $vehicleReservationSummaryTypeConfIDItem) {
            // validation for constraint: itemType
            if (!$vehicleReservationSummaryTypeConfIDItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ConfID) {
                throw new \InvalidArgumentException(sprintf('The ConfID property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ConfID, "%s" given', is_object($vehicleReservationSummaryTypeConfIDItem) ? get_class($vehicleReservationSummaryTypeConfIDItem) : gettype($vehicleReservationSummaryTypeConfIDItem)), __LINE__);
            }
        }
        $this->ConfID = $confID;
        return $this;
    }
    /**
     * Add item to ConfID value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ConfID $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
     */
    public function addToConfID(\Devlabs91\GenericOtaHotelApiService\StructType\ConfID $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ConfID) {
            throw new \InvalidArgumentException(sprintf('The ConfID property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ConfID, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConfID[] = $item;
        return $this;
    }
    /**
     * Get PickUpLocation value
     * @return mixed|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param mixed $pickUpLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
     */
    public function setPickUpLocation($pickUpLocation = null)
    {
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return mixed|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param mixed $returnLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
     */
    public function setReturnLocation($returnLocation = null)
    {
        $this->ReturnLocation = $returnLocation;
        return $this;
    }
    /**
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return mixed|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param mixed $vehicle
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
     */
    public function setVehicle($vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get Vendor value
     * @return mixed|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param mixed $vendor
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
     */
    public function setVendor($vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
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
     * Get ReservationStatus value
     * @return string|null
     */
    public function getReservationStatus()
    {
        return $this->ReservationStatus;
    }
    /**
     * Set ReservationStatus value
     * @param string $reservationStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
     */
    public function setReservationStatus($reservationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($reservationStatus) && !is_string($reservationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservationStatus)), __LINE__);
        }
        $this->ReservationStatus = $reservationStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationSummaryType
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

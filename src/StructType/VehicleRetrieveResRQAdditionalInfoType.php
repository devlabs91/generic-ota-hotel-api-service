<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRetrieveResRQAdditionalInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleRetrieveInfoRQType complex type defines the supplemental data by which an existing reservation can be identified for retrieval
 * @subpackage Structs
 */
class VehicleRetrieveResRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * Meta informations extracted from the WSDL
     * - documentation: A code to identify the pick up location, along with an optional code context.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LocationType
     */
    public $PickUpLocation;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - documentation: A telephone number associated with the reservation.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TelephoneType
     */
    public $Telephone;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - documentation: The vendor with whom the reservation has been made.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType
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
     * - use: optional
     * @var string
     */
    public $PickUpDateTime;
    /**
     * Constructor method for VehicleRetrieveResRQAdditionalInfoType
     * @uses VehicleRetrieveResRQAdditionalInfoType::setPickUpLocation()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setTelephone()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setVendor()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setPickUpDateTime()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LocationType $pickUpLocation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TelephoneType $telephone
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType $vendor
     * @param mixed $tPA_Extensions
     * @param string $pickUpDateTime
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\LocationType $pickUpLocation = null, \Devlabs91\GenericOtaHotelApiService\StructType\TelephoneType $telephone = null, \Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType $vendor = null, $tPA_Extensions = null, $pickUpDateTime = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setTelephone($telephone)
            ->setVendor($vendor)
            ->setTPA_Extensions($tPA_Extensions)
            ->setPickUpDateTime($pickUpDateTime);
    }
    /**
     * Get PickUpLocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationType|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LocationType $pickUpLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setPickUpLocation(\Devlabs91\GenericOtaHotelApiService\StructType\LocationType $pickUpLocation = null)
    {
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TelephoneType|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TelephoneType $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setTelephone(\Devlabs91\GenericOtaHotelApiService\StructType\TelephoneType $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType $vendor
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setVendor(\Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType $vendor = null)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
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

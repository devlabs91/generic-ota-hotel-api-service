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
     * The ReturnLocation
     * Meta informations extracted from the WSDL
     * - documentation: A code to identify the return location, along with an optional code context.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LocationType
     */
    public $ReturnLocation;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Telephone
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
     * The VehPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public $VehPref;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: An email address associated with the reservation to be retrieved.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\EmailType
     */
    public $Email;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: Free text description regarding the rental to be retrieved.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType[]
     */
    public $Remark;
    /**
     * The SearchDateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange[]
     */
    public $SearchDateRange;
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
     * @uses VehicleRetrieveResRQAdditionalInfoType::setReturnLocation()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setTelephone()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setVendor()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setVehPref()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setEmail()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setRemark()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setSearchDateRange()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setPickUpDateTime()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LocationType $pickUpLocation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LocationType $returnLocation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType $vendor
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType $vehPref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\EmailType $email
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType[] $remark
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange[] $searchDateRange
     * @param mixed $tPA_Extensions
     * @param string $pickUpDateTime
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\LocationType $pickUpLocation = null, \Devlabs91\GenericOtaHotelApiService\StructType\LocationType $returnLocation = null, \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone = null, \Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType $vendor = null, \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType $vehPref = null, \Devlabs91\GenericOtaHotelApiService\StructType\EmailType $email = null, array $remark = array(), array $searchDateRange = array(), $tPA_Extensions = null, $pickUpDateTime = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setReturnLocation($returnLocation)
            ->setTelephone($telephone)
            ->setVendor($vendor)
            ->setVehPref($vehPref)
            ->setEmail($email)
            ->setRemark($remark)
            ->setSearchDateRange($searchDateRange)
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
     * Get ReturnLocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationType|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LocationType $returnLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setReturnLocation(\Devlabs91\GenericOtaHotelApiService\StructType\LocationType $returnLocation = null)
    {
        $this->ReturnLocation = $returnLocation;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setTelephone(\Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone = null)
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
     * Get VehPref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType $vehPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setVehPref(\Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType $vehPref = null)
    {
        $this->VehPref = $vehPref;
        return $this;
    }
    /**
     * Get Email value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmailType|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\EmailType $email
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setEmail(\Devlabs91\GenericOtaHotelApiService\StructType\EmailType $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Remark value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType[] $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $vehicleRetrieveResRQAdditionalInfoTypeRemarkItem) {
            // validation for constraint: itemType
            if (!$vehicleRetrieveResRQAdditionalInfoTypeRemarkItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType, "%s" given', is_object($vehicleRetrieveResRQAdditionalInfoTypeRemarkItem) ? get_class($vehicleRetrieveResRQAdditionalInfoTypeRemarkItem) : gettype($vehicleRetrieveResRQAdditionalInfoTypeRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function addToRemark(\Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Remark[] = $item;
        return $this;
    }
    /**
     * Get SearchDateRange value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange[]|null
     */
    public function getSearchDateRange()
    {
        return $this->SearchDateRange;
    }
    /**
     * Set SearchDateRange value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange[] $searchDateRange
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setSearchDateRange(array $searchDateRange = array())
    {
        foreach ($searchDateRange as $vehicleRetrieveResRQAdditionalInfoTypeSearchDateRangeItem) {
            // validation for constraint: itemType
            if (!$vehicleRetrieveResRQAdditionalInfoTypeSearchDateRangeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange) {
                throw new \InvalidArgumentException(sprintf('The SearchDateRange property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange, "%s" given', is_object($vehicleRetrieveResRQAdditionalInfoTypeSearchDateRangeItem) ? get_class($vehicleRetrieveResRQAdditionalInfoTypeSearchDateRangeItem) : gettype($vehicleRetrieveResRQAdditionalInfoTypeSearchDateRangeItem)), __LINE__);
            }
        }
        $this->SearchDateRange = $searchDateRange;
        return $this;
    }
    /**
     * Add item to SearchDateRange value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function addToSearchDateRange(\Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange) {
            throw new \InvalidArgumentException(sprintf('The SearchDateRange property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchDateRange[] = $item;
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

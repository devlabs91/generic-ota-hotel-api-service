<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRetrieveResRQCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleRetrieveInfoRQType complex type defines the common,or core, data by which an existing reservation can be identified for retrieval | One of UNIQUEID, PERSONNAME or CUSTLOYALTY must be specified.
 * @subpackage Structs
 */
class VehicleRetrieveResRQCoreType extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier to reference the reservation, such as a reservation number.
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: A name by which the reservation may be identified. | A name by which the reservation may be identified.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public $PersonName;
    /**
     * The CustLoyalty
     * Meta informations extracted from the WSDL
     * - documentation: A frequent renter number associated with the reservation. | A frequent renter number associated with the reservation.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType
     */
    public $CustLoyalty;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleRetrieveResRQCoreType
     * @uses VehicleRetrieveResRQCoreType::setUniqueID()
     * @uses VehicleRetrieveResRQCoreType::setPersonName()
     * @uses VehicleRetrieveResRQCoreType::setCustLoyalty()
     * @uses VehicleRetrieveResRQCoreType::setTPA_Extensions()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType $personName
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType $custLoyalty
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID = null, \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType $personName = null, \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType $custLoyalty = null, $tPA_Extensions = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setPersonName($personName)
            ->setCustLoyalty($custLoyalty)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get UniqueID value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType
     */
    public function setUniqueID(\Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get PersonName value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType $personName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType
     */
    public function setPersonName(\Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType $personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType $custLoyalty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType
     */
    public function setCustLoyalty(\Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType $custLoyalty = null)
    {
        $this->CustLoyalty = $custLoyalty;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType
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

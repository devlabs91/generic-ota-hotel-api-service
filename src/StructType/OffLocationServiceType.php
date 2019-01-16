<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocationServiceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The OffLocationServiceType complex type defines a specific off-location service.
 * @subpackage Structs
 */
class OffLocationServiceType extends OffLocationServiceCoreType
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: Name for the contact person for the off location service.
     * - minOccurs: 0
     * @var mixed
     */
    public $PersonName;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Telephone
     */
    public $Telephone;
    /**
     * The TrackingID
     * Meta informations extracted from the WSDL
     * - documentation: Can be used as a tracking number for delivery and collection.
     * - minOccurs: 0
     * @var mixed
     */
    public $TrackingID;
    /**
     * The SpecInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Provides special instructions regarding the off location service (e.g., keys with receptionist).
     * - use: optional
     * @var string
     */
    public $SpecInstructions;
    /**
     * Constructor method for OffLocationServiceType
     * @uses OffLocationServiceType::setPersonName()
     * @uses OffLocationServiceType::setTelephone()
     * @uses OffLocationServiceType::setTrackingID()
     * @uses OffLocationServiceType::setSpecInstructions()
     * @param mixed $personName
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone
     * @param mixed $trackingID
     * @param string $specInstructions
     */
    public function __construct($personName = null, \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone = null, $trackingID = null, $specInstructions = null)
    {
        $this
            ->setPersonName($personName)
            ->setTelephone($telephone)
            ->setTrackingID($trackingID)
            ->setSpecInstructions($specInstructions);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServiceType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServiceType
     */
    public function setTelephone(\Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get TrackingID value
     * @return mixed|null
     */
    public function getTrackingID()
    {
        return $this->TrackingID;
    }
    /**
     * Set TrackingID value
     * @param mixed $trackingID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServiceType
     */
    public function setTrackingID($trackingID = null)
    {
        $this->TrackingID = $trackingID;
        return $this;
    }
    /**
     * Get SpecInstructions value
     * @return string|null
     */
    public function getSpecInstructions()
    {
        return $this->SpecInstructions;
    }
    /**
     * Set SpecInstructions value
     * @param string $specInstructions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServiceType
     */
    public function setSpecInstructions($specInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($specInstructions) && !is_string($specInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specInstructions)), __LINE__);
        }
        $this->SpecInstructions = $specInstructions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServiceType
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

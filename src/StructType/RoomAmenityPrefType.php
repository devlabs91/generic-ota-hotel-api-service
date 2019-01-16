<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomAmenityPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for hotel room amenities. | Identifies the customer's level of preference for the hotel room amenity identified. | Used for Character Strings, length 0 to 128.
 * - maxLength: 128
 * - minLength: 0
 * @subpackage Structs
 */
class RoomAmenityPrefType extends AbstractStructBase
{
    /**
     * The RoomAmenity
     * Meta informations extracted from the WSDL
     * - documentation: Identifes the types of room amenities offered by the property. Refer to OpenTravel Code List Room Amenity Type (RMA).
     * - use: optional
     * @var string
     */
    public $RoomAmenity;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with RoomAmenity.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * The QualityLevel
     * Meta informations extracted from the WSDL
     * - documentation: Used to designate the quality level of the RoomAmenity e.g., premium, deluxe, standard, economy.
     * - use: optional
     * @var string
     */
    public $QualityLevel;
    /**
     * Constructor method for RoomAmenityPrefType
     * @uses RoomAmenityPrefType::setRoomAmenity()
     * @uses RoomAmenityPrefType::setExistsCode()
     * @uses RoomAmenityPrefType::setQualityLevel()
     * @param string $roomAmenity
     * @param string $existsCode
     * @param string $qualityLevel
     */
    public function __construct($roomAmenity = null, $existsCode = null, $qualityLevel = null)
    {
        $this
            ->setRoomAmenity($roomAmenity)
            ->setExistsCode($existsCode)
            ->setQualityLevel($qualityLevel);
    }
    /**
     * Get RoomAmenity value
     * @return string|null
     */
    public function getRoomAmenity()
    {
        return $this->RoomAmenity;
    }
    /**
     * Set RoomAmenity value
     * @param string $roomAmenity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomAmenityPrefType
     */
    public function setRoomAmenity($roomAmenity = null)
    {
        // validation for constraint: string
        if (!is_null($roomAmenity) && !is_string($roomAmenity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomAmenity)), __LINE__);
        }
        $this->RoomAmenity = $roomAmenity;
        return $this;
    }
    /**
     * Get ExistsCode value
     * @return string|null
     */
    public function getExistsCode()
    {
        return $this->ExistsCode;
    }
    /**
     * Set ExistsCode value
     * @param string $existsCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomAmenityPrefType
     */
    public function setExistsCode($existsCode = null)
    {
        // validation for constraint: string
        if (!is_null($existsCode) && !is_string($existsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($existsCode)), __LINE__);
        }
        $this->ExistsCode = $existsCode;
        return $this;
    }
    /**
     * Get QualityLevel value
     * @return string|null
     */
    public function getQualityLevel()
    {
        return $this->QualityLevel;
    }
    /**
     * Set QualityLevel value
     * @param string $qualityLevel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomAmenityPrefType
     */
    public function setQualityLevel($qualityLevel = null)
    {
        // validation for constraint: string
        if (!is_null($qualityLevel) && !is_string($qualityLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qualityLevel)), __LINE__);
        }
        $this->QualityLevel = $qualityLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomAmenityPrefType
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

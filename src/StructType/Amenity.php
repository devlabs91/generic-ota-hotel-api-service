<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amenity StructType
 * Meta informations extracted from the WSDL
 * - documentation: Amenity Code Attribute is used to hold actual amenity code. | This provides an area to pass amenity information. | Tangible room item(s) (e.g., newspaper) available to the guest. | May be used to give further detail on the code (e.g.
 * if bathroom amenities is selected additional information about what amenities are available in the guest room can be passed here) or to remove an obsolete item. | A unique identifying value assigned by the creating system. The ID attribute may be
 * used to reference a primary-key value within a database or in a particular implementation.
 * @subpackage Structs
 */
class Amenity extends RoomAmenityPrefType
{
    /**
     * The AmenityCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Room Amenity Type (RMA).
     * @var string
     */
    public $AmenityCode;
    /**
     * The PropertyAmenityType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the amenities offered by the hotel. Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     * - use: optional
     * @var string
     */
    public $PropertyAmenityType;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - documentation: Collection of days, times, and fees.
     * - minOccurs: 0
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * The ContactInfo
     * Meta informations extracted from the WSDL
     * - documentation: Used to include additional information regarding the amenity (e.g. the provider of the service).
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $ContactInfo;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Multimedia information about the amenity.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive text that describes the amenity.
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
    /**
     * The RoomAmenityCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Room Amenity Type (RMA).
     * - use: optional
     * @var string
     */
    public $RoomAmenityCode;
    /**
     * The IncludedInRateIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, this indicates that the amenity or service is included in the room rate (i.e., this service or amenity has no additional charge).
     * - use: optional
     * @var bool
     */
    public $IncludedInRateIndicator;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether an amenity or service is offered. Refer to the OpenTravel Code List Option Type Code (OTC). This is used in conjunction with RoomAmenityCode.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * Constructor method for Amenity
     * @uses Amenity::setAmenityCode()
     * @uses Amenity::setPropertyAmenityType()
     * @uses Amenity::setOperationSchedules()
     * @uses Amenity::setContactInfo()
     * @uses Amenity::setMultimediaDescriptions()
     * @uses Amenity::setDescriptiveText()
     * @uses Amenity::setRoomAmenityCode()
     * @uses Amenity::setIncludedInRateIndicator()
     * @uses Amenity::setExistsCode()
     * @param string $amenityCode
     * @param string $propertyAmenityType
     * @param mixed $operationSchedules
     * @param mixed[] $contactInfo
     * @param mixed $multimediaDescriptions
     * @param string $descriptiveText
     * @param string $roomAmenityCode
     * @param bool $includedInRateIndicator
     * @param string $existsCode
     */
    public function __construct($amenityCode = null, $propertyAmenityType = null, $operationSchedules = null, array $contactInfo = array(), $multimediaDescriptions = null, $descriptiveText = null, $roomAmenityCode = null, $includedInRateIndicator = null, $existsCode = null)
    {
        $this
            ->setAmenityCode($amenityCode)
            ->setPropertyAmenityType($propertyAmenityType)
            ->setOperationSchedules($operationSchedules)
            ->setContactInfo($contactInfo)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setDescriptiveText($descriptiveText)
            ->setRoomAmenityCode($roomAmenityCode)
            ->setIncludedInRateIndicator($includedInRateIndicator)
            ->setExistsCode($existsCode);
    }
    /**
     * Get AmenityCode value
     * @return string|null
     */
    public function getAmenityCode()
    {
        return $this->AmenityCode;
    }
    /**
     * Set AmenityCode value
     * @param string $amenityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setAmenityCode($amenityCode = null)
    {
        // validation for constraint: string
        if (!is_null($amenityCode) && !is_string($amenityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amenityCode)), __LINE__);
        }
        $this->AmenityCode = $amenityCode;
        return $this;
    }
    /**
     * Get PropertyAmenityType value
     * @return string|null
     */
    public function getPropertyAmenityType()
    {
        return $this->PropertyAmenityType;
    }
    /**
     * Set PropertyAmenityType value
     * @param string $propertyAmenityType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setPropertyAmenityType($propertyAmenityType = null)
    {
        // validation for constraint: string
        if (!is_null($propertyAmenityType) && !is_string($propertyAmenityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyAmenityType)), __LINE__);
        }
        $this->PropertyAmenityType = $propertyAmenityType;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return mixed|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param mixed $operationSchedules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get ContactInfo value
     * @return mixed[]|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }
    /**
     * Set ContactInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $contactInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setContactInfo(array $contactInfo = array())
    {
        foreach ($contactInfo as $amenityContactInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ContactInfo property can only contain items of anyType, "%s" given', is_object($amenityContactInfoItem) ? get_class($amenityContactInfoItem) : gettype($amenityContactInfoItem)), __LINE__);
            }
        }
        $this->ContactInfo = $contactInfo;
        return $this;
    }
    /**
     * Add item to ContactInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function addToContactInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ContactInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContactInfo[] = $item;
        return $this;
    }
    /**
     * Get MultimediaDescriptions value
     * @return mixed|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param mixed $multimediaDescriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get DescriptiveText value
     * @return string|null
     */
    public function getDescriptiveText()
    {
        return $this->DescriptiveText;
    }
    /**
     * Set DescriptiveText value
     * @param string $descriptiveText
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setDescriptiveText($descriptiveText = null)
    {
        // validation for constraint: string
        if (!is_null($descriptiveText) && !is_string($descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptiveText)), __LINE__);
        }
        $this->DescriptiveText = $descriptiveText;
        return $this;
    }
    /**
     * Get RoomAmenityCode value
     * @return string|null
     */
    public function getRoomAmenityCode()
    {
        return $this->RoomAmenityCode;
    }
    /**
     * Set RoomAmenityCode value
     * @param string $roomAmenityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setRoomAmenityCode($roomAmenityCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomAmenityCode) && !is_string($roomAmenityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomAmenityCode)), __LINE__);
        }
        $this->RoomAmenityCode = $roomAmenityCode;
        return $this;
    }
    /**
     * Get IncludedInRateIndicator value
     * @return bool|null
     */
    public function getIncludedInRateIndicator()
    {
        return $this->IncludedInRateIndicator;
    }
    /**
     * Set IncludedInRateIndicator value
     * @param bool $includedInRateIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setIncludedInRateIndicator($includedInRateIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($includedInRateIndicator) && !is_bool($includedInRateIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includedInRateIndicator)), __LINE__);
        }
        $this->IncludedInRateIndicator = $includedInRateIndicator;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
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

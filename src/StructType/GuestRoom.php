<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRoom StructType
 * Meta informations extracted from the WSDL
 * - documentation: The accommodation occupied by a guest. | The hotel specific room type code that does not reference the OpenTravel Code Table as there are numerous hotel room types that are chain specific. | This may be used to uniquely identify a
 * guest room.
 * @subpackage Structs
 */
class GuestRoom extends AbstractStructBase
{
    /**
     * The TypeRoom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom[]
     */
    public $TypeRoom;
    /**
     * The Amenities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Amenities
     */
    public $Amenities;
    /**
     * The Features
     * Meta informations extracted from the WSDL
     * - documentation: Collection of features offered by a hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $Features;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Multimedia information about the guest room.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive text that describes the guest room.
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
    /**
     * The RoomTypeName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RoomTypeName;
    /**
     * The Composite
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that the room type contains multiple rooms sold as a single unit.
     * - use: optional
     * @var bool
     */
    public $Composite;
    /**
     * The Quality
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the quality of the room within a hotel such as an "S1K" as a superior room with one king bed.
     * - use: optional
     * @var string
     */
    public $Quality;
    /**
     * The MaxOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of guests allowed in a room type.
     * - use: optional
     * @var int
     */
    public $MaxOccupancy;
    /**
     * The MaxAdultOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of adults allowed in a room type.
     * - use: optional
     * @var int
     */
    public $MaxAdultOccupancy;
    /**
     * The NonsmokingQuantity
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to designate the number of non-smoking rooms by room type.
     * - use: optional
     * @var int
     */
    public $NonsmokingQuantity;
    /**
     * The MaxChildOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of children allowed in a room type.
     * - use: optional
     * @var int
     */
    public $MaxChildOccupancy;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: Used to define the display order.
     * - use: optional
     * @var int
     */
    public $Sort;
    /**
     * Constructor method for GuestRoom
     * @uses GuestRoom::setTypeRoom()
     * @uses GuestRoom::setAmenities()
     * @uses GuestRoom::setFeatures()
     * @uses GuestRoom::setMultimediaDescriptions()
     * @uses GuestRoom::setDescriptiveText()
     * @uses GuestRoom::setRoomTypeName()
     * @uses GuestRoom::setComposite()
     * @uses GuestRoom::setQuality()
     * @uses GuestRoom::setMaxOccupancy()
     * @uses GuestRoom::setMaxAdultOccupancy()
     * @uses GuestRoom::setNonsmokingQuantity()
     * @uses GuestRoom::setMaxChildOccupancy()
     * @uses GuestRoom::setSort()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom[] $typeRoom
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities
     * @param mixed $features
     * @param mixed $multimediaDescriptions
     * @param string $descriptiveText
     * @param string $roomTypeName
     * @param bool $composite
     * @param string $quality
     * @param int $maxOccupancy
     * @param int $maxAdultOccupancy
     * @param int $nonsmokingQuantity
     * @param int $maxChildOccupancy
     * @param int $sort
     */
    public function __construct(array $typeRoom = array(), \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities = null, $features = null, $multimediaDescriptions = null, $descriptiveText = null, $roomTypeName = null, $composite = null, $quality = null, $maxOccupancy = null, $maxAdultOccupancy = null, $nonsmokingQuantity = null, $maxChildOccupancy = null, $sort = null)
    {
        $this
            ->setTypeRoom($typeRoom)
            ->setAmenities($amenities)
            ->setFeatures($features)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setDescriptiveText($descriptiveText)
            ->setRoomTypeName($roomTypeName)
            ->setComposite($composite)
            ->setQuality($quality)
            ->setMaxOccupancy($maxOccupancy)
            ->setMaxAdultOccupancy($maxAdultOccupancy)
            ->setNonsmokingQuantity($nonsmokingQuantity)
            ->setMaxChildOccupancy($maxChildOccupancy)
            ->setSort($sort);
    }
    /**
     * Get TypeRoom value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom[]|null
     */
    public function getTypeRoom()
    {
        return $this->TypeRoom;
    }
    /**
     * Set TypeRoom value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom[] $typeRoom
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setTypeRoom(array $typeRoom = array())
    {
        foreach ($typeRoom as $guestRoomTypeRoomItem) {
            // validation for constraint: itemType
            if (!$guestRoomTypeRoomItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom) {
                throw new \InvalidArgumentException(sprintf('The TypeRoom property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom, "%s" given', is_object($guestRoomTypeRoomItem) ? get_class($guestRoomTypeRoomItem) : gettype($guestRoomTypeRoomItem)), __LINE__);
            }
        }
        $this->TypeRoom = $typeRoom;
        return $this;
    }
    /**
     * Add item to TypeRoom value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function addToTypeRoom(\Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom) {
            throw new \InvalidArgumentException(sprintf('The TypeRoom property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TypeRoom[] = $item;
        return $this;
    }
    /**
     * Get Amenities value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenities|null
     */
    public function getAmenities()
    {
        return $this->Amenities;
    }
    /**
     * Set Amenities value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setAmenities(\Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities = null)
    {
        $this->Amenities = $amenities;
        return $this;
    }
    /**
     * Get Features value
     * @return mixed|null
     */
    public function getFeatures()
    {
        return $this->Features;
    }
    /**
     * Set Features value
     * @param mixed $features
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setFeatures($features = null)
    {
        $this->Features = $features;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
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
     * Get RoomTypeName value
     * @return string|null
     */
    public function getRoomTypeName()
    {
        return $this->RoomTypeName;
    }
    /**
     * Set RoomTypeName value
     * @param string $roomTypeName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setRoomTypeName($roomTypeName = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypeName) && !is_string($roomTypeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypeName)), __LINE__);
        }
        $this->RoomTypeName = $roomTypeName;
        return $this;
    }
    /**
     * Get Composite value
     * @return bool|null
     */
    public function getComposite()
    {
        return $this->Composite;
    }
    /**
     * Set Composite value
     * @param bool $composite
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setComposite($composite = null)
    {
        // validation for constraint: boolean
        if (!is_null($composite) && !is_bool($composite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($composite)), __LINE__);
        }
        $this->Composite = $composite;
        return $this;
    }
    /**
     * Get Quality value
     * @return string|null
     */
    public function getQuality()
    {
        return $this->Quality;
    }
    /**
     * Set Quality value
     * @param string $quality
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setQuality($quality = null)
    {
        // validation for constraint: string
        if (!is_null($quality) && !is_string($quality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quality)), __LINE__);
        }
        $this->Quality = $quality;
        return $this;
    }
    /**
     * Get MaxOccupancy value
     * @return int|null
     */
    public function getMaxOccupancy()
    {
        return $this->MaxOccupancy;
    }
    /**
     * Set MaxOccupancy value
     * @param int $maxOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setMaxOccupancy($maxOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($maxOccupancy) && !is_numeric($maxOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxOccupancy)), __LINE__);
        }
        $this->MaxOccupancy = $maxOccupancy;
        return $this;
    }
    /**
     * Get MaxAdultOccupancy value
     * @return int|null
     */
    public function getMaxAdultOccupancy()
    {
        return $this->MaxAdultOccupancy;
    }
    /**
     * Set MaxAdultOccupancy value
     * @param int $maxAdultOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setMaxAdultOccupancy($maxAdultOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($maxAdultOccupancy) && !is_numeric($maxAdultOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxAdultOccupancy)), __LINE__);
        }
        $this->MaxAdultOccupancy = $maxAdultOccupancy;
        return $this;
    }
    /**
     * Get NonsmokingQuantity value
     * @return int|null
     */
    public function getNonsmokingQuantity()
    {
        return $this->NonsmokingQuantity;
    }
    /**
     * Set NonsmokingQuantity value
     * @param int $nonsmokingQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setNonsmokingQuantity($nonsmokingQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($nonsmokingQuantity) && !is_numeric($nonsmokingQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nonsmokingQuantity)), __LINE__);
        }
        $this->NonsmokingQuantity = $nonsmokingQuantity;
        return $this;
    }
    /**
     * Get MaxChildOccupancy value
     * @return int|null
     */
    public function getMaxChildOccupancy()
    {
        return $this->MaxChildOccupancy;
    }
    /**
     * Set MaxChildOccupancy value
     * @param int $maxChildOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setMaxChildOccupancy($maxChildOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($maxChildOccupancy) && !is_numeric($maxChildOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxChildOccupancy)), __LINE__);
        }
        $this->MaxChildOccupancy = $maxChildOccupancy;
        return $this;
    }
    /**
     * Get Sort value
     * @return int|null
     */
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @param int $sort
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
     */
    public function setSort($sort = null)
    {
        // validation for constraint: int
        if (!is_null($sort) && !is_numeric($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sort)), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomTypeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides details regarding rooms, usually guest rooms. | Provides details of the room type.
 * @subpackage Structs
 */
class RoomTypeType extends AbstractStructBase
{
    /**
     * The RoomDescription
     * Meta informations extracted from the WSDL
     * - documentation: Textual information regarding the room.
     * - minOccurs: 0
     * @var mixed
     */
    public $RoomDescription;
    /**
     * The AdditionalDetails
     * Meta informations extracted from the WSDL
     * - documentation: A collection of additional details.
     * - minOccurs: 0
     * @var mixed
     */
    public $AdditionalDetails;
    /**
     * The Amenities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Amenities
     */
    public $Amenities;
    /**
     * The Occupancy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy[]
     */
    public $Occupancy;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The NumberOfUnits
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $NumberOfUnits;
    /**
     * The IsRoom
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the room is a sleeping room when true.
     * - use: optional
     * @var bool
     */
    public $IsRoom;
    /**
     * The IsConverted
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the room is converted when true.
     * - use: optional
     * @var bool
     */
    public $IsConverted;
    /**
     * The IsAlternate
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the room is an alternate room type to the requested room type when true.
     * - use: optional
     * @var bool
     */
    public $IsAlternate;
    /**
     * The ReqdGuaranteeType
     * Meta informations extracted from the WSDL
     * - documentation: Denotes the form of guarantee for this room.
     * - use: optional
     * @var string
     */
    public $ReqdGuaranteeType;
    /**
     * Constructor method for RoomTypeType
     * @uses RoomTypeType::setRoomDescription()
     * @uses RoomTypeType::setAdditionalDetails()
     * @uses RoomTypeType::setAmenities()
     * @uses RoomTypeType::setOccupancy()
     * @uses RoomTypeType::setTPA_Extensions()
     * @uses RoomTypeType::setNumberOfUnits()
     * @uses RoomTypeType::setIsRoom()
     * @uses RoomTypeType::setIsConverted()
     * @uses RoomTypeType::setIsAlternate()
     * @uses RoomTypeType::setReqdGuaranteeType()
     * @param mixed $roomDescription
     * @param mixed $additionalDetails
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy[] $occupancy
     * @param mixed $tPA_Extensions
     * @param int $numberOfUnits
     * @param bool $isRoom
     * @param bool $isConverted
     * @param bool $isAlternate
     * @param string $reqdGuaranteeType
     */
    public function __construct($roomDescription = null, $additionalDetails = null, \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities = null, array $occupancy = array(), $tPA_Extensions = null, $numberOfUnits = null, $isRoom = null, $isConverted = null, $isAlternate = null, $reqdGuaranteeType = null)
    {
        $this
            ->setRoomDescription($roomDescription)
            ->setAdditionalDetails($additionalDetails)
            ->setAmenities($amenities)
            ->setOccupancy($occupancy)
            ->setTPA_Extensions($tPA_Extensions)
            ->setNumberOfUnits($numberOfUnits)
            ->setIsRoom($isRoom)
            ->setIsConverted($isConverted)
            ->setIsAlternate($isAlternate)
            ->setReqdGuaranteeType($reqdGuaranteeType);
    }
    /**
     * Get RoomDescription value
     * @return mixed|null
     */
    public function getRoomDescription()
    {
        return $this->RoomDescription;
    }
    /**
     * Set RoomDescription value
     * @param mixed $roomDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function setRoomDescription($roomDescription = null)
    {
        $this->RoomDescription = $roomDescription;
        return $this;
    }
    /**
     * Get AdditionalDetails value
     * @return mixed|null
     */
    public function getAdditionalDetails()
    {
        return $this->AdditionalDetails;
    }
    /**
     * Set AdditionalDetails value
     * @param mixed $additionalDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function setAdditionalDetails($additionalDetails = null)
    {
        $this->AdditionalDetails = $additionalDetails;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function setAmenities(\Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities = null)
    {
        $this->Amenities = $amenities;
        return $this;
    }
    /**
     * Get Occupancy value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy[]|null
     */
    public function getOccupancy()
    {
        return $this->Occupancy;
    }
    /**
     * Set Occupancy value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy[] $occupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function setOccupancy(array $occupancy = array())
    {
        foreach ($occupancy as $roomTypeTypeOccupancyItem) {
            // validation for constraint: itemType
            if (!$roomTypeTypeOccupancyItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy) {
                throw new \InvalidArgumentException(sprintf('The Occupancy property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy, "%s" given', is_object($roomTypeTypeOccupancyItem) ? get_class($roomTypeTypeOccupancyItem) : gettype($roomTypeTypeOccupancyItem)), __LINE__);
            }
        }
        $this->Occupancy = $occupancy;
        return $this;
    }
    /**
     * Add item to Occupancy value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function addToOccupancy(\Devlabs91\GenericOtaHotelApiService\StructType\Occupancy $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy) {
            throw new \InvalidArgumentException(sprintf('The Occupancy property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Occupancy[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get NumberOfUnits value
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnits) && !is_numeric($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
        return $this;
    }
    /**
     * Get IsRoom value
     * @return bool|null
     */
    public function getIsRoom()
    {
        return $this->IsRoom;
    }
    /**
     * Set IsRoom value
     * @param bool $isRoom
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function setIsRoom($isRoom = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRoom) && !is_bool($isRoom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRoom)), __LINE__);
        }
        $this->IsRoom = $isRoom;
        return $this;
    }
    /**
     * Get IsConverted value
     * @return bool|null
     */
    public function getIsConverted()
    {
        return $this->IsConverted;
    }
    /**
     * Set IsConverted value
     * @param bool $isConverted
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function setIsConverted($isConverted = null)
    {
        // validation for constraint: boolean
        if (!is_null($isConverted) && !is_bool($isConverted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isConverted)), __LINE__);
        }
        $this->IsConverted = $isConverted;
        return $this;
    }
    /**
     * Get IsAlternate value
     * @return bool|null
     */
    public function getIsAlternate()
    {
        return $this->IsAlternate;
    }
    /**
     * Set IsAlternate value
     * @param bool $isAlternate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function setIsAlternate($isAlternate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAlternate) && !is_bool($isAlternate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAlternate)), __LINE__);
        }
        $this->IsAlternate = $isAlternate;
        return $this;
    }
    /**
     * Get ReqdGuaranteeType value
     * @return string|null
     */
    public function getReqdGuaranteeType()
    {
        return $this->ReqdGuaranteeType;
    }
    /**
     * Set ReqdGuaranteeType value
     * @param string $reqdGuaranteeType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
     */
    public function setReqdGuaranteeType($reqdGuaranteeType = null)
    {
        // validation for constraint: string
        if (!is_null($reqdGuaranteeType) && !is_string($reqdGuaranteeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reqdGuaranteeType)), __LINE__);
        }
        $this->ReqdGuaranteeType = $reqdGuaranteeType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeType
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

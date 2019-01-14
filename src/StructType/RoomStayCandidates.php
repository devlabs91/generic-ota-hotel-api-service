<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStayCandidates StructType
 * @subpackage Structs
 */
class RoomStayCandidates extends AbstractStructBase
{
    /**
     * The RoomStayCandidate
     * Meta informations extracted from the WSDL
     * - documentation: element used to identify available room products and rates.
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType[]
     */
    public $RoomStayCandidate;
    /**
     * Constructor method for RoomStayCandidates
     * @uses RoomStayCandidates::setRoomStayCandidate()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType[] $roomStayCandidate
     */
    public function __construct(array $roomStayCandidate = array())
    {
        $this
            ->setRoomStayCandidate($roomStayCandidate);
    }
    /**
     * Get RoomStayCandidate value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType[]|null
     */
    public function getRoomStayCandidate()
    {
        return $this->RoomStayCandidate;
    }
    /**
     * Set RoomStayCandidate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType[] $roomStayCandidate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates
     */
    public function setRoomStayCandidate(array $roomStayCandidate = array())
    {
        foreach ($roomStayCandidate as $roomStayCandidatesRoomStayCandidateItem) {
            // validation for constraint: itemType
            if (!$roomStayCandidatesRoomStayCandidateItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType) {
                throw new \InvalidArgumentException(sprintf('The RoomStayCandidate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType, "%s" given', is_object($roomStayCandidatesRoomStayCandidateItem) ? get_class($roomStayCandidatesRoomStayCandidateItem) : gettype($roomStayCandidatesRoomStayCandidateItem)), __LINE__);
            }
        }
        $this->RoomStayCandidate = $roomStayCandidate;
        return $this;
    }
    /**
     * Add item to RoomStayCandidate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates
     */
    public function addToRoomStayCandidate(\Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType) {
            throw new \InvalidArgumentException(sprintf('The RoomStayCandidate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomStayCandidate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates
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

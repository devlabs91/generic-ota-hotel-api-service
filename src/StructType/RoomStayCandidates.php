<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStayCandidates StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of room stay candidates. | Collection of room stay candidates. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this
 * element under HotelSearchCriteria.**
 * @subpackage Structs
 */
class RoomStayCandidates extends AbstractStructBase
{
    /**
     * The RoomStayCandidate
     * Meta informations extracted from the WSDL
     * - documentation: Element used to identify available room products.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $RoomStayCandidate;
    /**
     * Constructor method for RoomStayCandidates
     * @uses RoomStayCandidates::setRoomStayCandidate()
     * @param mixed[] $roomStayCandidate
     */
    public function __construct(array $roomStayCandidate = array())
    {
        $this
            ->setRoomStayCandidate($roomStayCandidate);
    }
    /**
     * Get RoomStayCandidate value
     * @return mixed[]|null
     */
    public function getRoomStayCandidate()
    {
        return $this->RoomStayCandidate;
    }
    /**
     * Set RoomStayCandidate value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomStayCandidate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates
     */
    public function setRoomStayCandidate(array $roomStayCandidate = array())
    {
        foreach ($roomStayCandidate as $roomStayCandidatesRoomStayCandidateItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomStayCandidate property can only contain items of anyType, "%s" given', is_object($roomStayCandidatesRoomStayCandidateItem) ? get_class($roomStayCandidatesRoomStayCandidateItem) : gettype($roomStayCandidatesRoomStayCandidateItem)), __LINE__);
            }
        }
        $this->RoomStayCandidate = $roomStayCandidate;
        return $this;
    }
    /**
     * Add item to RoomStayCandidate value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates
     */
    public function addToRoomStayCandidate($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomStayCandidate property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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

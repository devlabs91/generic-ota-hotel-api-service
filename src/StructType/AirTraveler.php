<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirTraveler StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about the person traveling.
 * @subpackage Structs
 */
class AirTraveler extends AirTravelerType
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Comment[]
     */
    public $Comment;
    /**
     * Constructor method for AirTraveler
     * @uses AirTraveler::setComment()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Comment[] $comment
     */
    public function __construct(array $comment = array())
    {
        $this
            ->setComment($comment);
    }
    /**
     * Get Comment value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment[]|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Comment[] $comment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTraveler
     */
    public function setComment(array $comment = array())
    {
        foreach ($comment as $airTravelerCommentItem) {
            // validation for constraint: itemType
            if (!$airTravelerCommentItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Comment) {
                throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Comment, "%s" given', is_object($airTravelerCommentItem) ? get_class($airTravelerCommentItem) : gettype($airTravelerCommentItem)), __LINE__);
            }
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Add item to Comment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Comment $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTraveler
     */
    public function addToComment(\Devlabs91\GenericOtaHotelApiService\StructType\Comment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Comment) {
            throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Comment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Comment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTraveler
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

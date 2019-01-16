<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Comments StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of comments. | Collection of comments used for additional data about the response. | Comments related to the profile.
 * @subpackage Structs
 */
class Comments extends AbstractStructBase
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Comment information pertaining to the purchase. This may be used to pass a message to be printed on a note card. | Open comments to send additional data about the response.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $Comment;
    /**
     * Constructor method for Comments
     * @uses Comments::setComment()
     * @param mixed[] $comment
     */
    public function __construct(array $comment = array())
    {
        $this
            ->setComment($comment);
    }
    /**
     * Get Comment value
     * @return mixed[]|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @throws \InvalidArgumentException
     * @param mixed[] $comment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comments
     */
    public function setComment(array $comment = array())
    {
        foreach ($comment as $commentsCommentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of anyType, "%s" given', is_object($commentsCommentItem) ? get_class($commentsCommentItem) : gettype($commentsCommentItem)), __LINE__);
            }
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Add item to Comment value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comments
     */
    public function addToComment($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comments
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

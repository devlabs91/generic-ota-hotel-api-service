<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Comment StructType
 * Meta informations extracted from the WSDL
 * - documentation: ResComment : The ResComment object is used to store a further information (comments) pertaining to a reservation. Comments appended to the reservation may be retained as the reservation passes through multiple channels.
 * @subpackage Structs
 */
class Comment extends ParagraphType
{
    /**
     * The CommentOriginatorCode
     * Meta informations extracted from the WSDL
     * - documentation: CommentOriginatorCode : StringUnique identifier for the system which created the comment.
     * - use: optional
     * @var string
     */
    public $CommentOriginatorCode;
    /**
     * The GuestViewable
     * Meta informations extracted from the WSDL
     * - documentation: GuestViewable : BooleanWhether or not this comment should be shown to the guest.Values: False or No, and True or Yes.
     * - use: optional
     * @var bool
     */
    public $GuestViewable;
    /**
     * Constructor method for Comment
     * @uses Comment::setCommentOriginatorCode()
     * @uses Comment::setGuestViewable()
     * @param string $commentOriginatorCode
     * @param bool $guestViewable
     */
    public function __construct($commentOriginatorCode = null, $guestViewable = null)
    {
        $this
            ->setCommentOriginatorCode($commentOriginatorCode)
            ->setGuestViewable($guestViewable);
    }
    /**
     * Get CommentOriginatorCode value
     * @return string|null
     */
    public function getCommentOriginatorCode()
    {
        return $this->CommentOriginatorCode;
    }
    /**
     * Set CommentOriginatorCode value
     * @param string $commentOriginatorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment
     */
    public function setCommentOriginatorCode($commentOriginatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($commentOriginatorCode) && !is_string($commentOriginatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commentOriginatorCode)), __LINE__);
        }
        $this->CommentOriginatorCode = $commentOriginatorCode;
        return $this;
    }
    /**
     * Get GuestViewable value
     * @return bool|null
     */
    public function getGuestViewable()
    {
        return $this->GuestViewable;
    }
    /**
     * Set GuestViewable value
     * @param bool $guestViewable
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment
     */
    public function setGuestViewable($guestViewable = null)
    {
        // validation for constraint: boolean
        if (!is_null($guestViewable) && !is_bool($guestViewable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guestViewable)), __LINE__);
        }
        $this->GuestViewable = $guestViewable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment
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

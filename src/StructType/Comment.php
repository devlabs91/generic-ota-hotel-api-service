<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Comment StructType
 * Meta informations extracted from the WSDL
 * - documentation: A comment about the air traveler. | Comment details. | Comment details.
 * @subpackage Structs
 */
class Comment extends ParagraphType
{
    /**
     * The CommentOriginatorCode
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the system which created the comment. | Unique identifier for the system which created the comment.
     * - use: optional
     * @var string
     */
    public $CommentOriginatorCode;
    /**
     * The GuestViewable
     * Meta informations extracted from the WSDL
     * - documentation: When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer. | When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer.
     * - use: optional
     * @var bool
     */
    public $GuestViewable;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the type of comment.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The AuthorizedViewer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer[]
     */
    public $AuthorizedViewer;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - documentation: An industry segment (e.g., Air, Hotel, Car) to which the comment refers.
     * - use: optional
     * @var string
     */
    public $Category;
    /**
     * The AirlineVendorPrefRPH
     * Meta informations extracted from the WSDL
     * - documentation: Reference to an airline in AirlinePrefType/VendorPref.
     * - use: optional
     * @var string
     */
    public $AirlineVendorPrefRPH;
    /**
     * The TransferAction
     * Meta informations extracted from the WSDL
     * - documentation: Indicates under what conditions this element will be transfered to the booking.
     * - use: optional
     * @var string
     */
    public $TransferAction;
    /**
     * The ActionDate
     * Meta informations extracted from the WSDL
     * - documentation: Indicates at which date an action described in the comment must be taken.
     * - use: optional
     * @var string
     */
    public $ActionDate;
    /**
     * Constructor method for Comment
     * @uses Comment::setCommentOriginatorCode()
     * @uses Comment::setGuestViewable()
     * @uses Comment::setName()
     * @uses Comment::setAuthorizedViewer()
     * @uses Comment::setCategory()
     * @uses Comment::setAirlineVendorPrefRPH()
     * @uses Comment::setTransferAction()
     * @uses Comment::setActionDate()
     * @param string $commentOriginatorCode
     * @param bool $guestViewable
     * @param string $name
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer[] $authorizedViewer
     * @param string $category
     * @param string $airlineVendorPrefRPH
     * @param string $transferAction
     * @param string $actionDate
     */
    public function __construct($commentOriginatorCode = null, $guestViewable = null, $name = null, array $authorizedViewer = array(), $category = null, $airlineVendorPrefRPH = null, $transferAction = null, $actionDate = null)
    {
        $this
            ->setCommentOriginatorCode($commentOriginatorCode)
            ->setGuestViewable($guestViewable)
            ->setName($name)
            ->setAuthorizedViewer($authorizedViewer)
            ->setCategory($category)
            ->setAirlineVendorPrefRPH($airlineVendorPrefRPH)
            ->setTransferAction($transferAction)
            ->setActionDate($actionDate);
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get AuthorizedViewer value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer[]|null
     */
    public function getAuthorizedViewer()
    {
        return $this->AuthorizedViewer;
    }
    /**
     * Set AuthorizedViewer value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer[] $authorizedViewer
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment
     */
    public function setAuthorizedViewer(array $authorizedViewer = array())
    {
        foreach ($authorizedViewer as $commentAuthorizedViewerItem) {
            // validation for constraint: itemType
            if (!$commentAuthorizedViewerItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer) {
                throw new \InvalidArgumentException(sprintf('The AuthorizedViewer property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer, "%s" given', is_object($commentAuthorizedViewerItem) ? get_class($commentAuthorizedViewerItem) : gettype($commentAuthorizedViewerItem)), __LINE__);
            }
        }
        $this->AuthorizedViewer = $authorizedViewer;
        return $this;
    }
    /**
     * Add item to AuthorizedViewer value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment
     */
    public function addToAuthorizedViewer(\Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer) {
            throw new \InvalidArgumentException(sprintf('The AuthorizedViewer property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AuthorizedViewer[] = $item;
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Get AirlineVendorPrefRPH value
     * @return string|null
     */
    public function getAirlineVendorPrefRPH()
    {
        return $this->AirlineVendorPrefRPH;
    }
    /**
     * Set AirlineVendorPrefRPH value
     * @param string $airlineVendorPrefRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment
     */
    public function setAirlineVendorPrefRPH($airlineVendorPrefRPH = null)
    {
        // validation for constraint: string
        if (!is_null($airlineVendorPrefRPH) && !is_string($airlineVendorPrefRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineVendorPrefRPH)), __LINE__);
        }
        $this->AirlineVendorPrefRPH = $airlineVendorPrefRPH;
        return $this;
    }
    /**
     * Get TransferAction value
     * @return string|null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param string $transferAction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment
     */
    public function setTransferAction($transferAction = null)
    {
        // validation for constraint: string
        if (!is_null($transferAction) && !is_string($transferAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferAction)), __LINE__);
        }
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Get ActionDate value
     * @return string|null
     */
    public function getActionDate()
    {
        return $this->ActionDate;
    }
    /**
     * Set ActionDate value
     * @param string $actionDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comment
     */
    public function setActionDate($actionDate = null)
    {
        // validation for constraint: string
        if (!is_null($actionDate) && !is_string($actionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionDate)), __LINE__);
        }
        $this->ActionDate = $actionDate;
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

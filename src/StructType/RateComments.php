<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateComments StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of rate comments.
 * @subpackage Structs
 */
class RateComments extends AbstractStructBase
{
    /**
     * The RateComment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 15
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateComment[]
     */
    public $RateComment;
    /**
     * Constructor method for RateComments
     * @uses RateComments::setRateComment()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateComment[] $rateComment
     */
    public function __construct(array $rateComment = array())
    {
        $this
            ->setRateComment($rateComment);
    }
    /**
     * Get RateComment value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateComment[]|null
     */
    public function getRateComment()
    {
        return $this->RateComment;
    }
    /**
     * Set RateComment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateComment[] $rateComment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateComments
     */
    public function setRateComment(array $rateComment = array())
    {
        foreach ($rateComment as $rateCommentsRateCommentItem) {
            // validation for constraint: itemType
            if (!$rateCommentsRateCommentItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateComment) {
                throw new \InvalidArgumentException(sprintf('The RateComment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateComment, "%s" given', is_object($rateCommentsRateCommentItem) ? get_class($rateCommentsRateCommentItem) : gettype($rateCommentsRateCommentItem)), __LINE__);
            }
        }
        $this->RateComment = $rateComment;
        return $this;
    }
    /**
     * Add item to RateComment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateComment $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateComments
     */
    public function addToRateComment(\Devlabs91\GenericOtaHotelApiService\StructType\RateComment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateComment) {
            throw new \InvalidArgumentException(sprintf('The RateComment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateComment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateComment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateComments
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

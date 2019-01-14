<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailRequestSegmentsType StructType
 * @subpackage Structs
 */
class AvailRequestSegmentsType extends AbstractStructBase
{
    /**
     * The AvailRequestSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment[]
     */
    public $AvailRequestSegment;
    /**
     * Constructor method for AvailRequestSegmentsType
     * @uses AvailRequestSegmentsType::setAvailRequestSegment()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment[] $availRequestSegment
     */
    public function __construct(array $availRequestSegment = array())
    {
        $this
            ->setAvailRequestSegment($availRequestSegment);
    }
    /**
     * Get AvailRequestSegment value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment[]|null
     */
    public function getAvailRequestSegment()
    {
        return $this->AvailRequestSegment;
    }
    /**
     * Set AvailRequestSegment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment[] $availRequestSegment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegmentsType
     */
    public function setAvailRequestSegment(array $availRequestSegment = array())
    {
        foreach ($availRequestSegment as $availRequestSegmentsTypeAvailRequestSegmentItem) {
            // validation for constraint: itemType
            if (!$availRequestSegmentsTypeAvailRequestSegmentItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment) {
                throw new \InvalidArgumentException(sprintf('The AvailRequestSegment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment, "%s" given', is_object($availRequestSegmentsTypeAvailRequestSegmentItem) ? get_class($availRequestSegmentsTypeAvailRequestSegmentItem) : gettype($availRequestSegmentsTypeAvailRequestSegmentItem)), __LINE__);
            }
        }
        $this->AvailRequestSegment = $availRequestSegment;
        return $this;
    }
    /**
     * Add item to AvailRequestSegment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegmentsType
     */
    public function addToAvailRequestSegment(\Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment) {
            throw new \InvalidArgumentException(sprintf('The AvailRequestSegment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailRequestSegment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegmentsType
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

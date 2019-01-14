<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Awards StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Award elements.
 * @subpackage Structs
 */
class Awards extends AbstractStructBase
{
    /**
     * The Award
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Award[]
     */
    public $Award;
    /**
     * Constructor method for Awards
     * @uses Awards::setAward()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Award[] $award
     */
    public function __construct(array $award = array())
    {
        $this
            ->setAward($award);
    }
    /**
     * Get Award value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Award[]|null
     */
    public function getAward()
    {
        return $this->Award;
    }
    /**
     * Set Award value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Award[] $award
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Awards
     */
    public function setAward(array $award = array())
    {
        foreach ($award as $awardsAwardItem) {
            // validation for constraint: itemType
            if (!$awardsAwardItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Award) {
                throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Award, "%s" given', is_object($awardsAwardItem) ? get_class($awardsAwardItem) : gettype($awardsAwardItem)), __LINE__);
            }
        }
        $this->Award = $award;
        return $this;
    }
    /**
     * Add item to Award value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Award $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Awards
     */
    public function addToAward(\Devlabs91\GenericOtaHotelApiService\StructType\Award $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Award) {
            throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Award, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Award[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Awards
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

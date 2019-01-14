<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaObjectsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to send multimedia objects and the details associated with them.
 * @subpackage Structs
 */
class MultimediaObjectsType extends AbstractStructBase
{
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when the multimedia information for this hotel was last updated.
     * - use: required
     * @var string
     */
    public $LastUpdated;
    /**
     * The MultimediaObject
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject[]
     */
    public $MultimediaObject;
    /**
     * Constructor method for MultimediaObjectsType
     * @uses MultimediaObjectsType::setLastUpdated()
     * @uses MultimediaObjectsType::setMultimediaObject()
     * @param string $lastUpdated
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject[] $multimediaObject
     */
    public function __construct($lastUpdated = null, array $multimediaObject = array())
    {
        $this
            ->setLastUpdated($lastUpdated)
            ->setMultimediaObject($multimediaObject);
    }
    /**
     * Get LastUpdated value
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObjectsType
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Get MultimediaObject value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject[]|null
     */
    public function getMultimediaObject()
    {
        return $this->MultimediaObject;
    }
    /**
     * Set MultimediaObject value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject[] $multimediaObject
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObjectsType
     */
    public function setMultimediaObject(array $multimediaObject = array())
    {
        foreach ($multimediaObject as $multimediaObjectsTypeMultimediaObjectItem) {
            // validation for constraint: itemType
            if (!$multimediaObjectsTypeMultimediaObjectItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject) {
                throw new \InvalidArgumentException(sprintf('The MultimediaObject property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject, "%s" given', is_object($multimediaObjectsTypeMultimediaObjectItem) ? get_class($multimediaObjectsTypeMultimediaObjectItem) : gettype($multimediaObjectsTypeMultimediaObjectItem)), __LINE__);
            }
        }
        $this->MultimediaObject = $multimediaObject;
        return $this;
    }
    /**
     * Add item to MultimediaObject value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObjectsType
     */
    public function addToMultimediaObject(\Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject) {
            throw new \InvalidArgumentException(sprintf('The MultimediaObject property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MultimediaObject[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObjectsType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransformsType StructType
 * @subpackage Structs
 */
class TransformsType extends AbstractStructBase
{
    /**
     * The Transform
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TransformType
     */
    public $Transform;
    /**
     * Constructor method for TransformsType
     * @uses TransformsType::setTransform()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TransformType $transform
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\TransformType $transform = null)
    {
        $this
            ->setTransform($transform);
    }
    /**
     * Get Transform value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransformType|null
     */
    public function getTransform()
    {
        return $this->Transform;
    }
    /**
     * Set Transform value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TransformType $transform
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransformsType
     */
    public function setTransform(\Devlabs91\GenericOtaHotelApiService\StructType\TransformType $transform = null)
    {
        $this->Transform = $transform;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransformsType
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

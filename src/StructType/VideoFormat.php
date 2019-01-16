<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoFormat StructType
 * Meta informations extracted from the WSDL
 * - documentation: A set of video of a given category can be provided in different Format, each format will be described in this element. | Multimedia information for the video file. | A unique identifying value assigned by the creating system. The ID
 * attribute may be used to reference a primary-key value within a database or in a particular implementation.
 * @subpackage Structs
 */
class VideoFormat extends VideoItemType
{
    /**
     * Constructor method for VideoFormat
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat
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

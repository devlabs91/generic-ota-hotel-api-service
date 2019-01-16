<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Media StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to search for hotels based on available media content.
 * @subpackage Structs
 */
class Media extends AbstractStructBase
{
    /**
     * The ContentCode
     * Meta informations extracted from the WSDL
     * - documentation: Type of media that is used as a qualifier when searching for properties. Refer to OpenTravel Code list Content Code (CTT).
     * - use: optional
     * @var string
     */
    public $ContentCode;
    /**
     * Constructor method for Media
     * @uses Media::setContentCode()
     * @param string $contentCode
     */
    public function __construct($contentCode = null)
    {
        $this
            ->setContentCode($contentCode);
    }
    /**
     * Get ContentCode value
     * @return string|null
     */
    public function getContentCode()
    {
        return $this->ContentCode;
    }
    /**
     * Set ContentCode value
     * @param string $contentCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Media
     */
    public function setContentCode($contentCode = null)
    {
        // validation for constraint: string
        if (!is_null($contentCode) && !is_string($contentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentCode)), __LINE__);
        }
        $this->ContentCode = $contentCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Media
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

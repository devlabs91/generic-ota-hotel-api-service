<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageItem StructType
 * Meta informations extracted from the WSDL
 * - documentation: Image of a given category. | Creation and modification information for this image item. | If true, this item is obsolete and should be removed from the receiving system. | A unique identifying value assigned by the creating system.
 * The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
 * @subpackage Structs
 */
class ImageItem extends ImageDescriptionType
{
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The version of the image item.
     * - use: optional
     * @var string
     */
    public $Version;
    /**
     * Constructor method for ImageItem
     * @uses ImageItem::setVersion()
     * @param string $version
     */
    public function __construct($version = null)
    {
        $this
            ->setVersion($version);
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem
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

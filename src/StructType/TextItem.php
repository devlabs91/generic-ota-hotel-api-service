<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextItem StructType
 * Meta informations extracted from the WSDL
 * - documentation: Text description of a given category. | Creation and modification information for this text item. | If true, this item is obsolete and should be removed from the receiving system.
 * @subpackage Structs
 */
class TextItem extends TextDescriptionType
{
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The version of the text item.
     * - use: optional
     * @var string
     */
    public $Version;
    /**
     * Constructor method for TextItem
     * @uses TextItem::setVersion()
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TextItem
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TextItem
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

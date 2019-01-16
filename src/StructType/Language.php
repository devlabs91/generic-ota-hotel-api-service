<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Language StructType
 * Meta informations extracted from the WSDL
 * - documentation: Language details pertaining to the hotel.
 * - type: xs:language
 * - use: optional
 * @subpackage Structs
 */
class Language extends AbstractStructBase
{
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - documentation: Language spoken by the hotel staff.
     * - use: optional
     * @var string
     */
    public $Language;
    /**
     * Constructor method for Language
     * @uses Language::setLanguage()
     * @param string $language
     */
    public function __construct($language = null)
    {
        $this
            ->setLanguage($language);
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Language
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Language
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

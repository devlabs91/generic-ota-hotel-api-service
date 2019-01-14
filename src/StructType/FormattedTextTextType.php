<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormattedTextTextType StructType
 * @subpackage Structs
 */
class FormattedTextTextType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Formatted
     * Meta informations extracted from the WSDL
     * - documentation: Textual information, which may be formatted as a line of information, or unformatted, as a paragraph of text.
     * - use: optional
     * @var bool
     */
    public $Formatted;
    /**
     * Constructor method for FormattedTextTextType
     * @uses FormattedTextTextType::set_()
     * @uses FormattedTextTextType::setFormatted()
     * @param string $_
     * @param bool $formatted
     */
    public function __construct($_ = null, $formatted = null)
    {
        $this
            ->set_($_)
            ->setFormatted($formatted);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextTextType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Formatted value
     * @return bool|null
     */
    public function getFormatted()
    {
        return $this->Formatted;
    }
    /**
     * Set Formatted value
     * @param bool $formatted
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextTextType
     */
    public function setFormatted($formatted = null)
    {
        // validation for constraint: boolean
        if (!is_null($formatted) && !is_bool($formatted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($formatted)), __LINE__);
        }
        $this->Formatted = $formatted;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextTextType
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

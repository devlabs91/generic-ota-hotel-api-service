<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelName StructType
 * Meta informations extracted from the WSDL
 * - documentation: The full name of the hotel.
 * - type: StringLength1to64
 * - use: optional
 * @subpackage Structs
 */
class HotelName extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The HotelShortName
     * Meta informations extracted from the WSDL
     * - documentation: Concise hotel name
     * - use: optional
     * @var string
     */
    public $HotelShortName;
    /**
     * Constructor method for HotelName
     * @uses HotelName::set_()
     * @uses HotelName::setHotelShortName()
     * @param string $_
     * @param string $hotelShortName
     */
    public function __construct($_ = null, $hotelShortName = null)
    {
        $this
            ->set_($_)
            ->setHotelShortName($hotelShortName);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelName
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
     * Get HotelShortName value
     * @return string|null
     */
    public function getHotelShortName()
    {
        return $this->HotelShortName;
    }
    /**
     * Set HotelShortName value
     * @param string $hotelShortName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelName
     */
    public function setHotelShortName($hotelShortName = null)
    {
        // validation for constraint: string
        if (!is_null($hotelShortName) && !is_string($hotelShortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelShortName)), __LINE__);
        }
        $this->HotelShortName = $hotelShortName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelName
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

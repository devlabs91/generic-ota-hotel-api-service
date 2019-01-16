<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelInfoCode StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains code information about the hotel. | May be used to give further detail on the code or to remove an obsolete item.
 * @subpackage Structs
 */
class HotelInfoCode extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Hotel Information Code (HIC). Maybe used in conjunction with the OptionCode. Code examples are 51% minority owned and 51% non-minority woman owned.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The OptionCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Option Type Code (OTC) (e.g., yes, no, not applicable, not available).
     * - use: optional
     * @var string
     */
    public $OptionCode;
    /**
     * Constructor method for HotelInfoCode
     * @uses HotelInfoCode::setCode()
     * @uses HotelInfoCode::setOptionCode()
     * @param string $code
     * @param string $optionCode
     */
    public function __construct($code = null, $optionCode = null)
    {
        $this
            ->setCode($code)
            ->setOptionCode($optionCode);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get OptionCode value
     * @return string|null
     */
    public function getOptionCode()
    {
        return $this->OptionCode;
    }
    /**
     * Set OptionCode value
     * @param string $optionCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode
     */
    public function setOptionCode($optionCode = null)
    {
        // validation for constraint: string
        if (!is_null($optionCode) && !is_string($optionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($optionCode)), __LINE__);
        }
        $this->OptionCode = $optionCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode
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

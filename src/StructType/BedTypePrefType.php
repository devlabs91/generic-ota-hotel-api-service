<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BedTypePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for the size and features of hotel bed types. | Indicates the level of preference for the bed type requested. | Used for Character Strings, length 1 to 128
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class BedTypePrefType extends AbstractStructBase
{
    /**
     * The BedType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the hotel bed type requested. Refer to OTA Code List Bed Type (BED).
     * @var string
     */
    public $BedType;
    /**
     * Constructor method for BedTypePrefType
     * @uses BedTypePrefType::setBedType()
     * @param string $bedType
     */
    public function __construct($bedType = null)
    {
        $this
            ->setBedType($bedType);
    }
    /**
     * Get BedType value
     * @return string|null
     */
    public function getBedType()
    {
        return $this->BedType;
    }
    /**
     * Set BedType value
     * @param string $bedType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BedTypePrefType
     */
    public function setBedType($bedType = null)
    {
        // validation for constraint: string
        if (!is_null($bedType) && !is_string($bedType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bedType)), __LINE__);
        }
        $this->BedType = $bedType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BedTypePrefType
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

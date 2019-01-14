<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRowCharacteristicsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: OTA Codes for AirRowType
 * @subpackage Structs
 */
class AirRowCharacteristicsType extends AbstractStructBase
{
    /**
     * The AirRowType
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Air Row Type (ROW).
     * - use: required
     * @var string
     */
    public $AirRowType;
    /**
     * Constructor method for AirRowCharacteristicsType
     * @uses AirRowCharacteristicsType::setAirRowType()
     * @param string $airRowType
     */
    public function __construct($airRowType = null)
    {
        $this
            ->setAirRowType($airRowType);
    }
    /**
     * Get AirRowType value
     * @return string
     */
    public function getAirRowType()
    {
        return $this->AirRowType;
    }
    /**
     * Set AirRowType value
     * @param string $airRowType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristicsType
     */
    public function setAirRowType($airRowType = null)
    {
        // validation for constraint: string
        if (!is_null($airRowType) && !is_string($airRowType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airRowType)), __LINE__);
        }
        $this->AirRowType = $airRowType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristicsType
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

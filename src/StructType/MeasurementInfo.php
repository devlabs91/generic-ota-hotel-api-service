<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeasurementInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides area information related to the cabin. | Provides the unit of measure information for the item identified by the Code. | This will provide the item for which measurements are being provided (e.g., balcony, cabin).
 * @subpackage Structs
 */
class MeasurementInfo extends AbstractStructBase
{
    /**
     * The DimensionInfo
     * Meta informations extracted from the WSDL
     * - documentation: The dimensions associated with the cabin, balcony, or window (e.g., 10x12).
     * - use: optional
     * @var string
     */
    public $DimensionInfo;
    /**
     * Constructor method for MeasurementInfo
     * @uses MeasurementInfo::setDimensionInfo()
     * @param string $dimensionInfo
     */
    public function __construct($dimensionInfo = null)
    {
        $this
            ->setDimensionInfo($dimensionInfo);
    }
    /**
     * Get DimensionInfo value
     * @return string|null
     */
    public function getDimensionInfo()
    {
        return $this->DimensionInfo;
    }
    /**
     * Set DimensionInfo value
     * @param string $dimensionInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo
     */
    public function setDimensionInfo($dimensionInfo = null)
    {
        // validation for constraint: string
        if (!is_null($dimensionInfo) && !is_string($dimensionInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dimensionInfo)), __LINE__);
        }
        $this->DimensionInfo = $dimensionInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleChargePurposeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleChargePurposeType complex type defines information on a specific charge associated with the rental of a vehicle along with the purpose of the charge.
 * @subpackage Structs
 */
class VehicleChargePurposeType extends VehicleChargeType
{
    /**
     * The Purpose
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Vehicle Charge Purpose Type (VCP).
     * - use: required
     * @var string
     */
    public $Purpose;
    /**
     * Constructor method for VehicleChargePurposeType
     * @uses VehicleChargePurposeType::setPurpose()
     * @param string $purpose
     */
    public function __construct($purpose = null)
    {
        $this
            ->setPurpose($purpose);
    }
    /**
     * Get Purpose value
     * @return string
     */
    public function getPurpose()
    {
        return $this->Purpose;
    }
    /**
     * Set Purpose value
     * @param string $purpose
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleChargePurposeType
     */
    public function setPurpose($purpose = null)
    {
        // validation for constraint: string
        if (!is_null($purpose) && !is_string($purpose)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purpose)), __LINE__);
        }
        $this->Purpose = $purpose;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleChargePurposeType
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

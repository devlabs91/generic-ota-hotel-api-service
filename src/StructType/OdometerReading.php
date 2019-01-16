<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OdometerReading StructType
 * Meta informations extracted from the WSDL
 * - documentation: This provides values for the odometer reading. | To provide details of odometer measurements. | Used for interpreting the Odometer value displayed in the Odometer Reading on the dashboard of the vehicle (10 miles, 100 kilometers).
 * @subpackage Structs
 */
class OdometerReading extends AbstractStructBase
{
    /**
     * Constructor method for OdometerReading
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OdometerReading
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

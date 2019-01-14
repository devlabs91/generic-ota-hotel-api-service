<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for LocationDetailVehicleInfoType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The LocationDetailVehicleInfoType defines a set of valid values for the textual information about vehicles available at a rental facility.
 * @subpackage Enumerations
 */
class LocationDetailVehicleInfoType
{
    /**
     * Constant for value 'GeneralInformation'
     * @return string 'GeneralInformation'
     */
    const VALUE_GENERAL_INFORMATION = 'GeneralInformation';
    /**
     * Constant for value 'Disclaimer'
     * @return string 'Disclaimer'
     */
    const VALUE_DISCLAIMER = 'Disclaimer';
    /**
     * Constant for value 'AdvancedBooking'
     * @return string 'AdvancedBooking'
     */
    const VALUE_ADVANCED_BOOKING = 'AdvancedBooking';
    /**
     * Constant for value 'NonSmokingVehicles'
     * @return string 'NonSmokingVehicles'
     */
    const VALUE_NON_SMOKING_VEHICLES = 'NonSmokingVehicles';
    /**
     * Constant for value 'SpecialityVehicles'
     * @return string 'SpecialityVehicles'
     */
    const VALUE_SPECIALITY_VEHICLES = 'SpecialityVehicles';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_GENERAL_INFORMATION
     * @uses self::VALUE_DISCLAIMER
     * @uses self::VALUE_ADVANCED_BOOKING
     * @uses self::VALUE_NON_SMOKING_VEHICLES
     * @uses self::VALUE_SPECIALITY_VEHICLES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GENERAL_INFORMATION,
            self::VALUE_DISCLAIMER,
            self::VALUE_ADVANCED_BOOKING,
            self::VALUE_NON_SMOKING_VEHICLES,
            self::VALUE_SPECIALITY_VEHICLES,
        );
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for OffLocationServiceID_Type EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The OffLocationServiceType simple type defines a set of valid values for the services that do not occur at the rental facility.
 * @subpackage Enumerations
 */
class OffLocationServiceID_Type
{
    /**
     * Constant for value 'CustPickUp'
     * @return string 'CustPickUp'
     */
    const VALUE_CUST_PICK_UP = 'CustPickUp';
    /**
     * Constant for value 'VehDelivery'
     * @return string 'VehDelivery'
     */
    const VALUE_VEH_DELIVERY = 'VehDelivery';
    /**
     * Constant for value 'CustDropOff'
     * @return string 'CustDropOff'
     */
    const VALUE_CUST_DROP_OFF = 'CustDropOff';
    /**
     * Constant for value 'VehCollection'
     * @return string 'VehCollection'
     */
    const VALUE_VEH_COLLECTION = 'VehCollection';
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
     * @uses self::VALUE_CUST_PICK_UP
     * @uses self::VALUE_VEH_DELIVERY
     * @uses self::VALUE_CUST_DROP_OFF
     * @uses self::VALUE_VEH_COLLECTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUST_PICK_UP,
            self::VALUE_VEH_DELIVERY,
            self::VALUE_CUST_DROP_OFF,
            self::VALUE_VEH_COLLECTION,
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

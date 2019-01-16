<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for Status EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The status of the product. This attribute would primarily be used in the response message to identify the status of the item being purchased. | Provides a search filter by the status of sailing, category, fare, or cabin. | Used to
 * specify the status of the reservation with either one of the enumerations in InventoryStatusType or an UpperCaseAlphaLength1to2 code such as an IATA status code. | Used to specify the status of the item identified by the ConfID. | Used to specify the
 * status of the item identified by the ConfID.
 * - type: AvailabilityStatusType
 * - union: InventoryStatusType | UpperCaseAlphaLength1to2
 * - use: optional
 * @subpackage Enumerations
 */
class Status extends \Devlabs91\GenericOtaHotelApiService\EnumType\InventoryStatusType
{
    /**
     * Constant for value 'OrderPending'
     * @return string 'OrderPending'
     */
    const VALUE_ORDER_PENDING = 'OrderPending';
    /**
     * Constant for value 'BackOrder'
     * @return string 'BackOrder'
     */
    const VALUE_BACK_ORDER = 'BackOrder';
    /**
     * Constant for value 'Unavailable'
     * @return string 'Unavailable'
     */
    const VALUE_UNAVAILABLE = 'Unavailable';
    /**
     * Constant for value 'Confirmed'
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Status of the sailing, category, fare, or cabin. Refer to OpenTravel Codelist Status (STS).
     * - use: optional
     * @var string
     */
    public $Status;
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
     * @uses self::VALUE_ORDER_PENDING
     * @uses self::VALUE_BACK_ORDER
     * @uses self::VALUE_UNAVAILABLE
     * @uses self::VALUE_CONFIRMED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORDER_PENDING,
            self::VALUE_BACK_ORDER,
            self::VALUE_UNAVAILABLE,
            self::VALUE_CONFIRMED,
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

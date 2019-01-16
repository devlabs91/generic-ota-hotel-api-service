<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatingPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a seating preference. | Used to indicate a level of preference for seat information. | Used for Character Strings, length 0 to 64.
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class SeatingPrefType extends AbstractStructBase
{
    /**
     * The SeatDirection
     * Meta informations extracted from the WSDL
     * - documentation: Direction seat faces during travel, when conveyance allows.
     * - use: optional
     * @var string
     */
    public $SeatDirection;
    /**
     * The SeatLocation
     * Meta informations extracted from the WSDL
     * - documentation: Location of seat in cabin of conveyance. Suggested values include: Forward, Middle, Aft, ExitRow, Bulkhead, Right or Left Side, etc.
     * - use: optional
     * @var string
     */
    public $SeatLocation;
    /**
     * The SeatPosition
     * Meta informations extracted from the WSDL
     * - documentation: Preferred position of seat in a row, such as Aisle, Middle, Center, Window, etc.
     * - use: optional
     * @var string
     */
    public $SeatPosition;
    /**
     * The SeatRow
     * Meta informations extracted from the WSDL
     * - documentation: Preferred row for seating, indicates specific row number and/or seat identifier.
     * - use: optional
     * @var string
     */
    public $SeatRow;
    /**
     * Constructor method for SeatingPrefType
     * @uses SeatingPrefType::setSeatDirection()
     * @uses SeatingPrefType::setSeatLocation()
     * @uses SeatingPrefType::setSeatPosition()
     * @uses SeatingPrefType::setSeatRow()
     * @param string $seatDirection
     * @param string $seatLocation
     * @param string $seatPosition
     * @param string $seatRow
     */
    public function __construct($seatDirection = null, $seatLocation = null, $seatPosition = null, $seatRow = null)
    {
        $this
            ->setSeatDirection($seatDirection)
            ->setSeatLocation($seatLocation)
            ->setSeatPosition($seatPosition)
            ->setSeatRow($seatRow);
    }
    /**
     * Get SeatDirection value
     * @return string|null
     */
    public function getSeatDirection()
    {
        return $this->SeatDirection;
    }
    /**
     * Set SeatDirection value
     * @param string $seatDirection
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatingPrefType
     */
    public function setSeatDirection($seatDirection = null)
    {
        // validation for constraint: string
        if (!is_null($seatDirection) && !is_string($seatDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatDirection)), __LINE__);
        }
        $this->SeatDirection = $seatDirection;
        return $this;
    }
    /**
     * Get SeatLocation value
     * @return string|null
     */
    public function getSeatLocation()
    {
        return $this->SeatLocation;
    }
    /**
     * Set SeatLocation value
     * @param string $seatLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatingPrefType
     */
    public function setSeatLocation($seatLocation = null)
    {
        // validation for constraint: string
        if (!is_null($seatLocation) && !is_string($seatLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatLocation)), __LINE__);
        }
        $this->SeatLocation = $seatLocation;
        return $this;
    }
    /**
     * Get SeatPosition value
     * @return string|null
     */
    public function getSeatPosition()
    {
        return $this->SeatPosition;
    }
    /**
     * Set SeatPosition value
     * @param string $seatPosition
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatingPrefType
     */
    public function setSeatPosition($seatPosition = null)
    {
        // validation for constraint: string
        if (!is_null($seatPosition) && !is_string($seatPosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatPosition)), __LINE__);
        }
        $this->SeatPosition = $seatPosition;
        return $this;
    }
    /**
     * Get SeatRow value
     * @return string|null
     */
    public function getSeatRow()
    {
        return $this->SeatRow;
    }
    /**
     * Set SeatRow value
     * @param string $seatRow
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatingPrefType
     */
    public function setSeatRow($seatRow = null)
    {
        // validation for constraint: string
        if (!is_null($seatRow) && !is_string($seatRow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatRow)), __LINE__);
        }
        $this->SeatRow = $seatRow;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatingPrefType
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

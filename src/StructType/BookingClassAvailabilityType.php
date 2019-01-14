<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingClassAvailabilityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Holds booking class and available seats quantity.
 * @subpackage Structs
 */
class BookingClassAvailabilityType extends AbstractStructBase
{
    /**
     * The ResBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: Reservation Booking Designator (RBD) code (e.g. Y).
     * - use: optional
     * @var string
     */
    public $ResBookDesigCode;
    /**
     * The ResBookDesigQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Seat quantity available for this Reservation Booking Designator (RBD).
     * - use: optional
     * @var string
     */
    public $ResBookDesigQuantity;
    /**
     * The ResBookDesigStatusCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Res Book Designator Status Code (RBD). This provides the status (e.g. waitlist open, available, available by direct request to supplier only).
     * - use: optional
     * @var string
     */
    public $ResBookDesigStatusCode;
    /**
     * Constructor method for BookingClassAvailabilityType
     * @uses BookingClassAvailabilityType::setResBookDesigCode()
     * @uses BookingClassAvailabilityType::setResBookDesigQuantity()
     * @uses BookingClassAvailabilityType::setResBookDesigStatusCode()
     * @param string $resBookDesigCode
     * @param string $resBookDesigQuantity
     * @param string $resBookDesigStatusCode
     */
    public function __construct($resBookDesigCode = null, $resBookDesigQuantity = null, $resBookDesigStatusCode = null)
    {
        $this
            ->setResBookDesigCode($resBookDesigCode)
            ->setResBookDesigQuantity($resBookDesigQuantity)
            ->setResBookDesigStatusCode($resBookDesigStatusCode);
    }
    /**
     * Get ResBookDesigCode value
     * @return string|null
     */
    public function getResBookDesigCode()
    {
        return $this->ResBookDesigCode;
    }
    /**
     * Set ResBookDesigCode value
     * @param string $resBookDesigCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvailabilityType
     */
    public function setResBookDesigCode($resBookDesigCode = null)
    {
        // validation for constraint: string
        if (!is_null($resBookDesigCode) && !is_string($resBookDesigCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resBookDesigCode)), __LINE__);
        }
        $this->ResBookDesigCode = $resBookDesigCode;
        return $this;
    }
    /**
     * Get ResBookDesigQuantity value
     * @return string|null
     */
    public function getResBookDesigQuantity()
    {
        return $this->ResBookDesigQuantity;
    }
    /**
     * Set ResBookDesigQuantity value
     * @param string $resBookDesigQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvailabilityType
     */
    public function setResBookDesigQuantity($resBookDesigQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($resBookDesigQuantity) && !is_string($resBookDesigQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resBookDesigQuantity)), __LINE__);
        }
        $this->ResBookDesigQuantity = $resBookDesigQuantity;
        return $this;
    }
    /**
     * Get ResBookDesigStatusCode value
     * @return string|null
     */
    public function getResBookDesigStatusCode()
    {
        return $this->ResBookDesigStatusCode;
    }
    /**
     * Set ResBookDesigStatusCode value
     * @param string $resBookDesigStatusCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvailabilityType
     */
    public function setResBookDesigStatusCode($resBookDesigStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($resBookDesigStatusCode) && !is_string($resBookDesigStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resBookDesigStatusCode)), __LINE__);
        }
        $this->ResBookDesigStatusCode = $resBookDesigStatusCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvailabilityType
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

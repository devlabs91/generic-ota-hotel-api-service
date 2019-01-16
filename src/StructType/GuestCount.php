<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestCount StructType
 * Meta informations extracted from the WSDL
 * - documentation: A recurring element that identifies the number of guests and ages of the guests. | A recurring element that identifies the number of guests and ages of the guests.
 * @subpackage Structs
 */
class GuestCount extends AbstractStructBase
{
    /**
     * The ResGuestRPH
     * Meta informations extracted from the WSDL
     * - documentation: Used to refer to the guest associated with this reservation.
     * - use: optional
     * @var string
     */
    public $ResGuestRPH;
    /**
     * Constructor method for GuestCount
     * @uses GuestCount::setResGuestRPH()
     * @param string $resGuestRPH
     */
    public function __construct($resGuestRPH = null)
    {
        $this
            ->setResGuestRPH($resGuestRPH);
    }
    /**
     * Get ResGuestRPH value
     * @return string|null
     */
    public function getResGuestRPH()
    {
        return $this->ResGuestRPH;
    }
    /**
     * Set ResGuestRPH value
     * @param string $resGuestRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount
     */
    public function setResGuestRPH($resGuestRPH = null)
    {
        // validation for constraint: string
        if (!is_null($resGuestRPH) && !is_string($resGuestRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resGuestRPH)), __LINE__);
        }
        $this->ResGuestRPH = $resGuestRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount
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

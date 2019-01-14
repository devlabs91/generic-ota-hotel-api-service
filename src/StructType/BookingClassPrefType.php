<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingClassPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Booking class code and preference level for specifying booking classes preferred/not preferred in a request. | The preference level for the booking class.
 * @subpackage Structs
 */
class BookingClassPrefType extends AbstractStructBase
{
    /**
     * The ResBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: Booking class code
     * - use: required
     * @var string
     */
    public $ResBookDesigCode;
    /**
     * Constructor method for BookingClassPrefType
     * @uses BookingClassPrefType::setResBookDesigCode()
     * @param string $resBookDesigCode
     */
    public function __construct($resBookDesigCode = null)
    {
        $this
            ->setResBookDesigCode($resBookDesigCode);
    }
    /**
     * Get ResBookDesigCode value
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->ResBookDesigCode;
    }
    /**
     * Set ResBookDesigCode value
     * @param string $resBookDesigCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPrefType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPrefType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinkedBooking StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies cross references at the booking level.
 * @subpackage Structs
 */
class LinkedBooking extends RelatedTravelerType
{
    /**
     * The LinkTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the nature of the link (e.g. booking, dining, tour, back to back). Refer to OpenTravel Code Table Link Type Code (LTC).
     * - use: optional
     * @var string
     */
    public $LinkTypeCode;
    /**
     * Constructor method for LinkedBooking
     * @uses LinkedBooking::setLinkTypeCode()
     * @param string $linkTypeCode
     */
    public function __construct($linkTypeCode = null)
    {
        $this
            ->setLinkTypeCode($linkTypeCode);
    }
    /**
     * Get LinkTypeCode value
     * @return string|null
     */
    public function getLinkTypeCode()
    {
        return $this->LinkTypeCode;
    }
    /**
     * Set LinkTypeCode value
     * @param string $linkTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking
     */
    public function setLinkTypeCode($linkTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($linkTypeCode) && !is_string($linkTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkTypeCode)), __LINE__);
        }
        $this->LinkTypeCode = $linkTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginDestinationOption StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container for OriginDestinationOptionType.
 * @subpackage Structs
 */
class OriginDestinationOption extends OriginDestinationOptionType
{
    /**
     * The RefNumber
     * Meta informations extracted from the WSDL
     * - documentation: When a PricedItinerary element contains multiple solutions and a single price, this attribute identifies the OriginDestinationPair from the request.
     * - use: optional
     * @var string
     */
    public $RefNumber;
    /**
     * Constructor method for OriginDestinationOption
     * @uses OriginDestinationOption::setRefNumber()
     * @param string $refNumber
     */
    public function __construct($refNumber = null)
    {
        $this
            ->setRefNumber($refNumber);
    }
    /**
     * Get RefNumber value
     * @return string|null
     */
    public function getRefNumber()
    {
        return $this->RefNumber;
    }
    /**
     * Set RefNumber value
     * @param string $refNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOption
     */
    public function setRefNumber($refNumber = null)
    {
        // validation for constraint: string
        if (!is_null($refNumber) && !is_string($refNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNumber)), __LINE__);
        }
        $this->RefNumber = $refNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOption
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

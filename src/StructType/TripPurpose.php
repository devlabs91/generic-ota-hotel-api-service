<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TripPurpose StructType
 * Meta informations extracted from the WSDL
 * - documentation: Trip purpose codes used by this company.
 * @subpackage Structs
 */
class TripPurpose extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: A trip purpose code used by this company.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A description of the trip purpose.
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * Constructor method for TripPurpose
     * @uses TripPurpose::setCode()
     * @uses TripPurpose::setDescription()
     * @param string $code
     * @param string $description
     */
    public function __construct($code = null, $description = null)
    {
        $this
            ->setCode($code)
            ->setDescription($description);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TripPurpose
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TripPurpose
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TripPurpose
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

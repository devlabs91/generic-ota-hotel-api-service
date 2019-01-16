<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vendor StructType
 * Meta informations extracted from the WSDL
 * - documentation: The vendor for this vehicle type and its participation level in a system.
 * @subpackage Structs
 */
class Vendor extends CompanyNameType
{
    /**
     * The ParticipationLevelCode
     * Meta informations extracted from the WSDL
     * - documentation: The participation level of this vendor in a system. Refer to OpenTravel Code List Participation Level (PLC).
     * - use: optional
     * @var string
     */
    public $ParticipationLevelCode;
    /**
     * Constructor method for Vendor
     * @uses Vendor::setParticipationLevelCode()
     * @param string $participationLevelCode
     */
    public function __construct($participationLevelCode = null)
    {
        $this
            ->setParticipationLevelCode($participationLevelCode);
    }
    /**
     * Get ParticipationLevelCode value
     * @return string|null
     */
    public function getParticipationLevelCode()
    {
        return $this->ParticipationLevelCode;
    }
    /**
     * Set ParticipationLevelCode value
     * @param string $participationLevelCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vendor
     */
    public function setParticipationLevelCode($participationLevelCode = null)
    {
        // validation for constraint: string
        if (!is_null($participationLevelCode) && !is_string($participationLevelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($participationLevelCode)), __LINE__);
        }
        $this->ParticipationLevelCode = $participationLevelCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vendor
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

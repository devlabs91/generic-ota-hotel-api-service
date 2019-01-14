<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrivalPort StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains cruise arrival port information. Arrival port defines the end place of the cruise sailing.
 * @subpackage Structs
 */
class ArrivalPort extends LocationType
{
    /**
     * The DebarkationDateTime
     * @var string
     */
    public $DebarkationDateTime;
    /**
     * Constructor method for ArrivalPort
     * @uses ArrivalPort::setDebarkationDateTime()
     * @param string $debarkationDateTime
     */
    public function __construct($debarkationDateTime = null)
    {
        $this
            ->setDebarkationDateTime($debarkationDateTime);
    }
    /**
     * Get DebarkationDateTime value
     * @return string|null
     */
    public function getDebarkationDateTime()
    {
        return $this->DebarkationDateTime;
    }
    /**
     * Set DebarkationDateTime value
     * @param string $debarkationDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPort
     */
    public function setDebarkationDateTime($debarkationDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($debarkationDateTime) && !is_string($debarkationDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($debarkationDateTime)), __LINE__);
        }
        $this->DebarkationDateTime = $debarkationDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPort
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reference StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information by which this availability quote can be later cross-referenced | This element defines a security token reference
 * - type: wsse:ReferenceType
 * @subpackage Structs
 */
class Reference extends UniqueID_Type
{
    /**
     * The DateTime
     * Meta informations extracted from the WSDL
     * - documentation: The date and time at which this availability quote was made available.
     * @var string
     */
    public $DateTime;
    /**
     * Constructor method for Reference
     * @uses Reference::setDateTime()
     * @param string $dateTime
     */
    public function __construct($dateTime = null)
    {
        $this
            ->setDateTime($dateTime);
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Reference
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Reference
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

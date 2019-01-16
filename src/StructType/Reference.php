<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reference StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information identifying an earlier availability quote. | Information by which this availability quote can be later cross-referenced. | Information by which this availability quote can be later cross-referenced | Information
 * identifying an earlier availability quote. | This element defines a security token reference
 * - type: wsse:ReferenceType
 * @subpackage Structs
 */
class Reference extends UniqueID_Type
{
    /**
     * The DateTime
     * Meta informations extracted from the WSDL
     * - documentation: The date and time at which this availability quote was made available. | The date and time at which this availability quote was made available. | The date and time at which this availability quote was made available. | The date and
     * time at which this availability quote was made available.
     * - use: optional
     * @var string
     */
    public $DateTime;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Amount;
    /**
     * Constructor method for Reference
     * @uses Reference::setDateTime()
     * @uses Reference::setAmount()
     * @param string $dateTime
     * @param string $amount
     */
    public function __construct($dateTime = null, $amount = null)
    {
        $this
            ->setDateTime($dateTime)
            ->setAmount($amount);
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
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Reference
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Queue StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies queue information for this booking. | Information to specify the queue on which the reservation should be placed. | Information to identify a queue. | Information to specify the queue on which the reservation should be
 * placed. | Information to identify a queue.
 * @subpackage Structs
 */
class Queue extends AbstractStructBase
{
    /**
     * The DateTime
     * Meta informations extracted from the WSDL
     * - documentation: Date/time when the time initiated queuing should take place.
     * - use: optional
     * @var string
     */
    public $DateTime;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Text describing why the queuing takes place.
     * - use: optional
     * @var string
     */
    public $Text;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies airline/system on which the reservation is being queued.
     * - use: optional
     * @var string
     */
    public $CarrierCode;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * Constructor method for Queue
     * @uses Queue::setDateTime()
     * @uses Queue::setText()
     * @uses Queue::setCarrierCode()
     * @uses Queue::setOperation()
     * @param string $dateTime
     * @param string $text
     * @param string $carrierCode
     * @param string $operation
     */
    public function __construct($dateTime = null, $text = null, $carrierCode = null, $operation = null)
    {
        $this
            ->setDateTime($dateTime)
            ->setText($text)
            ->setCarrierCode($carrierCode)
            ->setOperation($operation);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queue
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
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queue
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @param string $carrierCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queue
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queue
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queue
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

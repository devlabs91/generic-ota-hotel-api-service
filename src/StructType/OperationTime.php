<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationTime StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides operating times of a facility. | The day(s) of week to which the operation time applies. | The date span applicable to the operation.
 * @subpackage Structs
 */
class OperationTime extends AbstractStructBase
{
    /**
     * The AdditionalOperationInfoCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide additional information regarding operation times (e.g., after hours operations, restricted times). Refer to OpenTravel Code List Additional Operation Info (OPR).
     * - use: optional
     * @var string
     */
    public $AdditionalOperationInfoCode;
    /**
     * The Frequency
     * Meta informations extracted from the WSDL
     * - documentation: The frequency with which this operation occurs (e.g., 'on the hour', 'on the half hour').
     * - use: optional
     * @var string
     */
    public $Frequency;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Textual information for this period of operation.
     * - use: optional
     * @var string
     */
    public $Text;
    /**
     * Constructor method for OperationTime
     * @uses OperationTime::setAdditionalOperationInfoCode()
     * @uses OperationTime::setFrequency()
     * @uses OperationTime::setText()
     * @param string $additionalOperationInfoCode
     * @param string $frequency
     * @param string $text
     */
    public function __construct($additionalOperationInfoCode = null, $frequency = null, $text = null)
    {
        $this
            ->setAdditionalOperationInfoCode($additionalOperationInfoCode)
            ->setFrequency($frequency)
            ->setText($text);
    }
    /**
     * Get AdditionalOperationInfoCode value
     * @return string|null
     */
    public function getAdditionalOperationInfoCode()
    {
        return $this->AdditionalOperationInfoCode;
    }
    /**
     * Set AdditionalOperationInfoCode value
     * @param string $additionalOperationInfoCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime
     */
    public function setAdditionalOperationInfoCode($additionalOperationInfoCode = null)
    {
        // validation for constraint: string
        if (!is_null($additionalOperationInfoCode) && !is_string($additionalOperationInfoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalOperationInfoCode)), __LINE__);
        }
        $this->AdditionalOperationInfoCode = $additionalOperationInfoCode;
        return $this;
    }
    /**
     * Get Frequency value
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }
    /**
     * Set Frequency value
     * @param string $frequency
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime
     */
    public function setFrequency($frequency = null)
    {
        // validation for constraint: string
        if (!is_null($frequency) && !is_string($frequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequency)), __LINE__);
        }
        $this->Frequency = $frequency;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime
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

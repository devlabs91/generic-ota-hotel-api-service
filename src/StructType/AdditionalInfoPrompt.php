<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalInfoPrompt StructType
 * Meta informations extracted from the WSDL
 * - documentation: Additional textual information is sometimes required when an Extra is selected. This element allows for up to 4 lines of prompts to be displayed.
 * @subpackage Structs
 */
class AdditionalInfoPrompt extends AbstractStructBase
{
    /**
     * The AdditionalInfoText
     * Meta informations extracted from the WSDL
     * - documentation: The text of a prompt for additional information
     * - use: optional
     * @var string
     */
    public $AdditionalInfoText;
    /**
     * The LineNumber
     * Meta informations extracted from the WSDL
     * - documentation: The line number to define the sequence of the prompt
     * - use: optional
     * @var string
     */
    public $LineNumber;
    /**
     * Constructor method for AdditionalInfoPrompt
     * @uses AdditionalInfoPrompt::setAdditionalInfoText()
     * @uses AdditionalInfoPrompt::setLineNumber()
     * @param string $additionalInfoText
     * @param string $lineNumber
     */
    public function __construct($additionalInfoText = null, $lineNumber = null)
    {
        $this
            ->setAdditionalInfoText($additionalInfoText)
            ->setLineNumber($lineNumber);
    }
    /**
     * Get AdditionalInfoText value
     * @return string|null
     */
    public function getAdditionalInfoText()
    {
        return $this->AdditionalInfoText;
    }
    /**
     * Set AdditionalInfoText value
     * @param string $additionalInfoText
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalInfoPrompt
     */
    public function setAdditionalInfoText($additionalInfoText = null)
    {
        // validation for constraint: string
        if (!is_null($additionalInfoText) && !is_string($additionalInfoText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalInfoText)), __LINE__);
        }
        $this->AdditionalInfoText = $additionalInfoText;
        return $this;
    }
    /**
     * Get LineNumber value
     * @return string|null
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    /**
     * Set LineNumber value
     * @param string $lineNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalInfoPrompt
     */
    public function setLineNumber($lineNumber = null)
    {
        // validation for constraint: string
        if (!is_null($lineNumber) && !is_string($lineNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineNumber)), __LINE__);
        }
        $this->LineNumber = $lineNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalInfoPrompt
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

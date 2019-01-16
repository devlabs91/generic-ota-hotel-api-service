<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareConstruction StructType
 * Meta informations extracted from the WSDL
 * - documentation: Should not contain unstructured FareCalc data.
 * @subpackage Structs
 */
class FareConstruction extends AbstractStructBase
{
    /**
     * The FormattedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, this is structured fare calculation information.
     * - use: optional
     * @var bool
     */
    public $FormattedIndicator;
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Language;
    /**
     * The OriginCityCode
     * Meta informations extracted from the WSDL
     * - documentation: The origin airport city code for this fare construction.
     * - use: optional
     * @var string
     */
    public $OriginCityCode;
    /**
     * The OriginCodeContext
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the context of the origin city code such as IATA, ARC, or internal code.
     * - use: optional
     * @var string
     */
    public $OriginCodeContext;
    /**
     * The DestinationCityCode
     * Meta informations extracted from the WSDL
     * - documentation: The destination airport city code for this fare construction.
     * - use: optional
     * @var string
     */
    public $DestinationCityCode;
    /**
     * The DestinationCodeContext
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the context of the destination city code such as IATA, ARC, or internal code.
     * - use: optional
     * @var string
     */
    public $DestinationCodeContext;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * Constructor method for FareConstruction
     * @uses FareConstruction::setFormattedIndicator()
     * @uses FareConstruction::setLanguage()
     * @uses FareConstruction::setOriginCityCode()
     * @uses FareConstruction::setOriginCodeContext()
     * @uses FareConstruction::setDestinationCityCode()
     * @uses FareConstruction::setDestinationCodeContext()
     * @uses FareConstruction::setOperation()
     * @param bool $formattedIndicator
     * @param string $language
     * @param string $originCityCode
     * @param string $originCodeContext
     * @param string $destinationCityCode
     * @param string $destinationCodeContext
     * @param string $operation
     */
    public function __construct($formattedIndicator = null, $language = null, $originCityCode = null, $originCodeContext = null, $destinationCityCode = null, $destinationCodeContext = null, $operation = null)
    {
        $this
            ->setFormattedIndicator($formattedIndicator)
            ->setLanguage($language)
            ->setOriginCityCode($originCityCode)
            ->setOriginCodeContext($originCodeContext)
            ->setDestinationCityCode($destinationCityCode)
            ->setDestinationCodeContext($destinationCodeContext)
            ->setOperation($operation);
    }
    /**
     * Get FormattedIndicator value
     * @return bool|null
     */
    public function getFormattedIndicator()
    {
        return $this->FormattedIndicator;
    }
    /**
     * Set FormattedIndicator value
     * @param bool $formattedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction
     */
    public function setFormattedIndicator($formattedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($formattedIndicator) && !is_bool($formattedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($formattedIndicator)), __LINE__);
        }
        $this->FormattedIndicator = $formattedIndicator;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Get OriginCityCode value
     * @return string|null
     */
    public function getOriginCityCode()
    {
        return $this->OriginCityCode;
    }
    /**
     * Set OriginCityCode value
     * @param string $originCityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction
     */
    public function setOriginCityCode($originCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($originCityCode) && !is_string($originCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originCityCode)), __LINE__);
        }
        $this->OriginCityCode = $originCityCode;
        return $this;
    }
    /**
     * Get OriginCodeContext value
     * @return string|null
     */
    public function getOriginCodeContext()
    {
        return $this->OriginCodeContext;
    }
    /**
     * Set OriginCodeContext value
     * @param string $originCodeContext
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction
     */
    public function setOriginCodeContext($originCodeContext = null)
    {
        // validation for constraint: string
        if (!is_null($originCodeContext) && !is_string($originCodeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originCodeContext)), __LINE__);
        }
        $this->OriginCodeContext = $originCodeContext;
        return $this;
    }
    /**
     * Get DestinationCityCode value
     * @return string|null
     */
    public function getDestinationCityCode()
    {
        return $this->DestinationCityCode;
    }
    /**
     * Set DestinationCityCode value
     * @param string $destinationCityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction
     */
    public function setDestinationCityCode($destinationCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCityCode) && !is_string($destinationCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationCityCode)), __LINE__);
        }
        $this->DestinationCityCode = $destinationCityCode;
        return $this;
    }
    /**
     * Get DestinationCodeContext value
     * @return string|null
     */
    public function getDestinationCodeContext()
    {
        return $this->DestinationCodeContext;
    }
    /**
     * Set DestinationCodeContext value
     * @param string $destinationCodeContext
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction
     */
    public function setDestinationCodeContext($destinationCodeContext = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCodeContext) && !is_string($destinationCodeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationCodeContext)), __LINE__);
        }
        $this->DestinationCodeContext = $destinationCodeContext;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction
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

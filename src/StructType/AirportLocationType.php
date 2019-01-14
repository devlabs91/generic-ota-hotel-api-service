<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirportLocationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Airport location includes 3 letter code, terminal and gate.
 * @subpackage Structs
 */
class AirportLocationType extends AbstractStructBase
{
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $LocationCode;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - default: IATA
     * - documentation: Identifies the context of the identifying code, such as IATA, ARC, or internal code, etc.
     * @var string
     */
    public $CodeContext;
    /**
     * The Terminal
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Terminal;
    /**
     * The Gate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Gate;
    /**
     * Constructor method for AirportLocationType
     * @uses AirportLocationType::setLocationCode()
     * @uses AirportLocationType::setCodeContext()
     * @uses AirportLocationType::setTerminal()
     * @uses AirportLocationType::setGate()
     * @param string $locationCode
     * @param string $codeContext
     * @param string $terminal
     * @param string $gate
     */
    public function __construct($locationCode = null, $codeContext = 'IATA', $terminal = null, $gate = null)
    {
        $this
            ->setLocationCode($locationCode)
            ->setCodeContext($codeContext)
            ->setTerminal($terminal)
            ->setGate($gate);
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirportLocationType
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
        return $this;
    }
    /**
     * Get CodeContext value
     * @return string|null
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }
    /**
     * Set CodeContext value
     * @param string $codeContext
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirportLocationType
     */
    public function setCodeContext($codeContext = 'IATA')
    {
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->CodeContext = $codeContext;
        return $this;
    }
    /**
     * Get Terminal value
     * @return string|null
     */
    public function getTerminal()
    {
        return $this->Terminal;
    }
    /**
     * Set Terminal value
     * @param string $terminal
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirportLocationType
     */
    public function setTerminal($terminal = null)
    {
        // validation for constraint: string
        if (!is_null($terminal) && !is_string($terminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminal)), __LINE__);
        }
        $this->Terminal = $terminal;
        return $this;
    }
    /**
     * Get Gate value
     * @return string|null
     */
    public function getGate()
    {
        return $this->Gate;
    }
    /**
     * Set Gate value
     * @param string $gate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirportLocationType
     */
    public function setGate($gate = null)
    {
        // validation for constraint: string
        if (!is_null($gate) && !is_string($gate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gate)), __LINE__);
        }
        $this->Gate = $gate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirportLocationType
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

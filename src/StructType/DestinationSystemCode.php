<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationSystemCode StructType
 * Meta informations extracted from the WSDL
 * - documentation: The destination system code defines a system to which information is to be provided. | The destination system code defines a system to which information is to be provided. | Used for Character Strings, length 1 to 32.
 * - maxLength: 32
 * - minLength: 1
 * @subpackage Structs
 */
class DestinationSystemCode extends AbstractStructBase
{
    /**
     * The ChainRateLevelCrossRef
     * Meta informations extracted from the WSDL
     * - documentation: A text field used to define a specific destination system code for a corresponding RateLevelCode.
     * - use: optional
     * @var string
     */
    public $ChainRateLevelCrossRef;
    /**
     * The ChainRateCodeCrossRef
     * Meta informations extracted from the WSDL
     * - documentation: A text field used to define a specific destination system code for a corresponding ChainRateCode.
     * - use: optional
     * @var string
     */
    public $ChainRateCodeCrossRef;
    /**
     * Constructor method for DestinationSystemCode
     * @uses DestinationSystemCode::setChainRateLevelCrossRef()
     * @uses DestinationSystemCode::setChainRateCodeCrossRef()
     * @param string $chainRateLevelCrossRef
     * @param string $chainRateCodeCrossRef
     */
    public function __construct($chainRateLevelCrossRef = null, $chainRateCodeCrossRef = null)
    {
        $this
            ->setChainRateLevelCrossRef($chainRateLevelCrossRef)
            ->setChainRateCodeCrossRef($chainRateCodeCrossRef);
    }
    /**
     * Get ChainRateLevelCrossRef value
     * @return string|null
     */
    public function getChainRateLevelCrossRef()
    {
        return $this->ChainRateLevelCrossRef;
    }
    /**
     * Set ChainRateLevelCrossRef value
     * @param string $chainRateLevelCrossRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode
     */
    public function setChainRateLevelCrossRef($chainRateLevelCrossRef = null)
    {
        // validation for constraint: string
        if (!is_null($chainRateLevelCrossRef) && !is_string($chainRateLevelCrossRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainRateLevelCrossRef)), __LINE__);
        }
        $this->ChainRateLevelCrossRef = $chainRateLevelCrossRef;
        return $this;
    }
    /**
     * Get ChainRateCodeCrossRef value
     * @return string|null
     */
    public function getChainRateCodeCrossRef()
    {
        return $this->ChainRateCodeCrossRef;
    }
    /**
     * Set ChainRateCodeCrossRef value
     * @param string $chainRateCodeCrossRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode
     */
    public function setChainRateCodeCrossRef($chainRateCodeCrossRef = null)
    {
        // validation for constraint: string
        if (!is_null($chainRateCodeCrossRef) && !is_string($chainRateCodeCrossRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainRateCodeCrossRef)), __LINE__);
        }
        $this->ChainRateCodeCrossRef = $chainRateCodeCrossRef;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode
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

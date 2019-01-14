<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerCountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines information on the number of travelers of a specific type (e.g. a driver type can be either one of a defined set, Adult, YoungDriver, YoungerDriver, or it may be a code that is acceptable to both Trading Partners). |
 * Specifies the number of travelers.
 * @subpackage Structs
 */
class TravelerCountType extends AbstractStructBase
{
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Age;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the source authority for the code.
     * - use: optional
     * @var string
     */
    public $CodeContext;
    /**
     * The URI
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the location of the code table
     * - use: optional
     * @var string
     */
    public $URI;
    /**
     * Constructor method for TravelerCountType
     * @uses TravelerCountType::setAge()
     * @uses TravelerCountType::setCode()
     * @uses TravelerCountType::setCodeContext()
     * @uses TravelerCountType::setURI()
     * @param string $age
     * @param string $code
     * @param string $codeContext
     * @param string $uRI
     */
    public function __construct($age = null, $code = null, $codeContext = null, $uRI = null)
    {
        $this
            ->setAge($age)
            ->setCode($code)
            ->setCodeContext($codeContext)
            ->setURI($uRI);
    }
    /**
     * Get Age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param string $age
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerCountType
     */
    public function setAge($age = null)
    {
        // validation for constraint: string
        if (!is_null($age) && !is_string($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerCountType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerCountType
     */
    public function setCodeContext($codeContext = null)
    {
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->CodeContext = $codeContext;
        return $this;
    }
    /**
     * Get URI value
     * @return string|null
     */
    public function getURI()
    {
        return $this->URI;
    }
    /**
     * Set URI value
     * @param string $uRI
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerCountType
     */
    public function setURI($uRI = null)
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRI)), __LINE__);
        }
        $this->URI = $uRI;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerCountType
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

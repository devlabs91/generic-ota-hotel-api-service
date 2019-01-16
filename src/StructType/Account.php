<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Account StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies an account code applicable to the pricing and reservation. | Specifies an account code to be used in pricing.
 * @subpackage Structs
 */
class Account extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: The account code applicable to the fare. | The account code for which fares are requested.
     * - use: required
     * @var string
     */
    public $Code;
    /**
     * The CodeOnlyFaresInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, return only the fares for the specified account code.
     * - use: optional
     * @var bool
     */
    public $CodeOnlyFaresInd;
    /**
     * Constructor method for Account
     * @uses Account::setCode()
     * @uses Account::setCodeOnlyFaresInd()
     * @param string $code
     * @param bool $codeOnlyFaresInd
     */
    public function __construct($code = null, $codeOnlyFaresInd = null)
    {
        $this
            ->setCode($code)
            ->setCodeOnlyFaresInd($codeOnlyFaresInd);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Account
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
     * Get CodeOnlyFaresInd value
     * @return bool|null
     */
    public function getCodeOnlyFaresInd()
    {
        return $this->CodeOnlyFaresInd;
    }
    /**
     * Set CodeOnlyFaresInd value
     * @param bool $codeOnlyFaresInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Account
     */
    public function setCodeOnlyFaresInd($codeOnlyFaresInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($codeOnlyFaresInd) && !is_bool($codeOnlyFaresInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($codeOnlyFaresInd)), __LINE__);
        }
        $this->CodeOnlyFaresInd = $codeOnlyFaresInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Account
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

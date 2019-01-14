<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RSAKeyValueType StructType
 * @subpackage Structs
 */
class RSAKeyValueType extends AbstractStructBase
{
    /**
     * The Modulus
     * @var CryptoBinary
     */
    public $Modulus;
    /**
     * The Exponent
     * @var CryptoBinary
     */
    public $Exponent;
    /**
     * Constructor method for RSAKeyValueType
     * @uses RSAKeyValueType::setModulus()
     * @uses RSAKeyValueType::setExponent()
     * @param CryptoBinary $modulus
     * @param CryptoBinary $exponent
     */
    public function __construct(CryptoBinary $modulus = null, CryptoBinary $exponent = null)
    {
        $this
            ->setModulus($modulus)
            ->setExponent($exponent);
    }
    /**
     * Get Modulus value
     * @return CryptoBinary|null
     */
    public function getModulus()
    {
        return $this->Modulus;
    }
    /**
     * Set Modulus value
     * @param CryptoBinary $modulus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RSAKeyValueType
     */
    public function setModulus(CryptoBinary $modulus = null)
    {
        $this->Modulus = $modulus;
        return $this;
    }
    /**
     * Get Exponent value
     * @return CryptoBinary|null
     */
    public function getExponent()
    {
        return $this->Exponent;
    }
    /**
     * Set Exponent value
     * @param CryptoBinary $exponent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RSAKeyValueType
     */
    public function setExponent(CryptoBinary $exponent = null)
    {
        $this->Exponent = $exponent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RSAKeyValueType
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

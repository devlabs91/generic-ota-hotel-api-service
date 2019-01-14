<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SystemCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of strings that identify the systems associated with this viewership record.
 * @subpackage Structs
 */
class SystemCodes extends AbstractStructBase
{
    /**
     * The SystemCode
     * Meta informations extracted from the WSDL
     * - documentation: The system code (e.g. AA, 1P, 1G, 1A, etc.).
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $SystemCode;
    /**
     * The SystemCodesInclusive
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the collection of System Codes is inclusive or exclusive. | Values: false=Exclusive, true=Inclusive.
     * - use: optional
     * @var bool
     */
    public $SystemCodesInclusive;
    /**
     * Constructor method for SystemCodes
     * @uses SystemCodes::setSystemCode()
     * @uses SystemCodes::setSystemCodesInclusive()
     * @param string[] $systemCode
     * @param bool $systemCodesInclusive
     */
    public function __construct(array $systemCode = array(), $systemCodesInclusive = null)
    {
        $this
            ->setSystemCode($systemCode)
            ->setSystemCodesInclusive($systemCodesInclusive);
    }
    /**
     * Get SystemCode value
     * @return string[]|null
     */
    public function getSystemCode()
    {
        return $this->SystemCode;
    }
    /**
     * Set SystemCode value
     * @throws \InvalidArgumentException
     * @param string[] $systemCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SystemCodes
     */
    public function setSystemCode(array $systemCode = array())
    {
        foreach ($systemCode as $systemCodesSystemCodeItem) {
            // validation for constraint: itemType
            if (!is_string($systemCodesSystemCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The SystemCode property can only contain items of string, "%s" given', is_object($systemCodesSystemCodeItem) ? get_class($systemCodesSystemCodeItem) : gettype($systemCodesSystemCodeItem)), __LINE__);
            }
        }
        $this->SystemCode = $systemCode;
        return $this;
    }
    /**
     * Add item to SystemCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SystemCodes
     */
    public function addToSystemCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SystemCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SystemCode[] = $item;
        return $this;
    }
    /**
     * Get SystemCodesInclusive value
     * @return bool|null
     */
    public function getSystemCodesInclusive()
    {
        return $this->SystemCodesInclusive;
    }
    /**
     * Set SystemCodesInclusive value
     * @param bool $systemCodesInclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SystemCodes
     */
    public function setSystemCodesInclusive($systemCodesInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($systemCodesInclusive) && !is_bool($systemCodesInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($systemCodesInclusive)), __LINE__);
        }
        $this->SystemCodesInclusive = $systemCodesInclusive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SystemCodes
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

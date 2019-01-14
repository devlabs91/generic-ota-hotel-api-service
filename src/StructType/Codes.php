<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Codes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Codes or abbreviations for meeting rooms.
 * @subpackage Structs
 */
class Codes extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Code;
    /**
     * Constructor method for Codes
     * @uses Codes::setCode()
     * @param string[] $code
     */
    public function __construct(array $code = array())
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return string[]|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Code::valueIsValid()
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Code::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Codes
     */
    public function setCode(array $code = array())
    {
        $invalidValues = array();
        foreach ($code as $codesCodeItem) {
            if (!\Devlabs91\GenericOtaHotelApiService\EnumType\Code::valueIsValid($codesCodeItem)) {
                $invalidValues[] = var_export($codesCodeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Devlabs91\GenericOtaHotelApiService\EnumType\Code::getValidValues())), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Add item to Code value
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Code::valueIsValid()
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Code::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Codes
     */
    public function addToCode($item)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\GenericOtaHotelApiService\EnumType\Code::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Devlabs91\GenericOtaHotelApiService\EnumType\Code::getValidValues())), __LINE__);
        }
        $this->Code[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Codes
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

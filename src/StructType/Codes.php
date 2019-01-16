<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Codes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Codes or abbreviations for meeting rooms. | Collection of coded information that is applicable to all meeting rooms.
 * @subpackage Structs
 */
class Codes extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Coded information that is applicable to all meeting rooms.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $Code;
    /**
     * Constructor method for Codes
     * @uses Codes::setCode()
     * @param mixed[] $code
     */
    public function __construct(array $code = array())
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return mixed[]|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @throws \InvalidArgumentException
     * @param mixed[] $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Codes
     */
    public function setCode(array $code = array())
    {
        foreach ($code as $codesCodeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Code property can only contain items of anyType, "%s" given', is_object($codesCodeItem) ? get_class($codesCodeItem) : gettype($codesCodeItem)), __LINE__);
            }
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Add item to Code value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Codes
     */
    public function addToCode($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Code property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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

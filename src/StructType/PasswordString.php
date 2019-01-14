<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PasswordString StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used for password elements per Section 4.1.
 * @subpackage Structs
 */
class PasswordString extends AttributedString
{
    /**
     * The _
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AttributedString
     */
    public $_;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for PasswordString
     * @uses PasswordString::set_()
     * @uses PasswordString::setType()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AttributedString $_
     * @param string $type
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\AttributedString $_ = null, $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
    }
    /**
     * Get _ value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AttributedString|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AttributedString $_
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PasswordString
     */
    public function set_(\Devlabs91\GenericOtaHotelApiService\StructType\AttributedString $_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PasswordString
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PasswordString
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

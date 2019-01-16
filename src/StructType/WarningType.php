<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WarningType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used when a message has been successfully processed to report any warnings or business errors that occurred. | Details of the warning.
 * @subpackage Structs
 */
class WarningType extends FreeTextType
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The Warning element MUST contain the Type attribute that uses a recommended set of values to indicate the warning type. The validating XSD can expect to accept values that it has NOT been explicitly coded for and process them by
     * using Type ="Unknown". Refer to OpenTravel Code List Error Warning Type (EWT).
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: Reference Place Holder used as an index for this warning.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for WarningType
     * @uses WarningType::setType()
     * @uses WarningType::setRPH()
     * @param string $type
     * @param string $rPH
     */
    public function __construct($type = null, $rPH = null)
    {
        $this
            ->setType($type)
            ->setRPH($rPH);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WarningType
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
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WarningType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WarningType
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

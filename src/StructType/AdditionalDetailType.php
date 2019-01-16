<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to send additional information.
 * @subpackage Structs
 */
class AdditionalDetailType extends AbstractStructBase
{
    /**
     * The DetailDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $DetailDescription;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Used to define the type of information being sent (e.g., rate description, property description, room information). Refer to OpenTravel Code List Additional Detail Type (ADT).
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Trading partner code associated to AdditionalDetailType.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for AdditionalDetailType
     * @uses AdditionalDetailType::setDetailDescription()
     * @uses AdditionalDetailType::setType()
     * @uses AdditionalDetailType::setCode()
     * @param mixed $detailDescription
     * @param string $type
     * @param string $code
     */
    public function __construct($detailDescription = null, $type = null, $code = null)
    {
        $this
            ->setDetailDescription($detailDescription)
            ->setType($type)
            ->setCode($code);
    }
    /**
     * Get DetailDescription value
     * @return mixed|null
     */
    public function getDetailDescription()
    {
        return $this->DetailDescription;
    }
    /**
     * Set DetailDescription value
     * @param mixed $detailDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalDetailType
     */
    public function setDetailDescription($detailDescription = null)
    {
        $this->DetailDescription = $detailDescription;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalDetailType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalDetailType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalDetailType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefPoint StructType
 * Meta informations extracted from the WSDL
 * - documentation: May be used to give further detail on the code or to remove an obsolete item.
 * @subpackage Structs
 */
class RefPoint extends RelativePositionType
{
    /**
     * The RefPointCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: The code for the type of reference point in the proximity of the hotel facility. Refer to OTA Code List Reference Point Category Code (REF).
     * - use: optional
     * @var string
     */
    public $RefPointCategoryCode;
    /**
     * The RefPointName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the reference point.
     * - use: optional
     * @var string
     */
    public $RefPointName;
    /**
     * Constructor method for RefPoint
     * @uses RefPoint::setRefPointCategoryCode()
     * @uses RefPoint::setRefPointName()
     * @param string $refPointCategoryCode
     * @param string $refPointName
     */
    public function __construct($refPointCategoryCode = null, $refPointName = null)
    {
        $this
            ->setRefPointCategoryCode($refPointCategoryCode)
            ->setRefPointName($refPointName);
    }
    /**
     * Get RefPointCategoryCode value
     * @return string|null
     */
    public function getRefPointCategoryCode()
    {
        return $this->RefPointCategoryCode;
    }
    /**
     * Set RefPointCategoryCode value
     * @param string $refPointCategoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setRefPointCategoryCode($refPointCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($refPointCategoryCode) && !is_string($refPointCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refPointCategoryCode)), __LINE__);
        }
        $this->RefPointCategoryCode = $refPointCategoryCode;
        return $this;
    }
    /**
     * Get RefPointName value
     * @return string|null
     */
    public function getRefPointName()
    {
        return $this->RefPointName;
    }
    /**
     * Set RefPointName value
     * @param string $refPointName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
     */
    public function setRefPointName($refPointName = null)
    {
        // validation for constraint: string
        if (!is_null($refPointName) && !is_string($refPointName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refPointName)), __LINE__);
        }
        $this->RefPointName = $refPointName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint
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

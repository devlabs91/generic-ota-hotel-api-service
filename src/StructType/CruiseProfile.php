<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseProfile StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the cruise attribute information, identifying those items which are mandatory, modifiable, or have required maximums.
 * @subpackage Structs
 */
class CruiseProfile extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the cruise options for which parameters are being set. Refer to OpenTravel Code table Cruise Profile Type (CPT).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The MaxQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the maximum quantity allowed for the option identified by the CruiseOption attribute. Typically only used when the ApplicationProfileTypeIndentifier contains the value "MAX".
     * - use: optional
     * @var string
     */
    public $MaxQuantity;
    /**
     * Constructor method for CruiseProfile
     * @uses CruiseProfile::setCode()
     * @uses CruiseProfile::setMaxQuantity()
     * @param string $code
     * @param string $maxQuantity
     */
    public function __construct($code = null, $maxQuantity = null)
    {
        $this
            ->setCode($code)
            ->setMaxQuantity($maxQuantity);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseProfile
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
     * Get MaxQuantity value
     * @return string|null
     */
    public function getMaxQuantity()
    {
        return $this->MaxQuantity;
    }
    /**
     * Set MaxQuantity value
     * @param string $maxQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseProfile
     */
    public function setMaxQuantity($maxQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($maxQuantity) && !is_string($maxQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxQuantity)), __LINE__);
        }
        $this->MaxQuantity = $maxQuantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseProfile
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

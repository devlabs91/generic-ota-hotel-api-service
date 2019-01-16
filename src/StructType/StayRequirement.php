<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StayRequirement StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the requirements for a minimimum or maximum length of stay for a property. Day of week may or may not have an impact on this requirement. Day of week is a stayover day unless StayContext is used.
 * @subpackage Structs
 */
class StayRequirement extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional information regarding stay requirements.
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * The MinLOS
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the minimum length of stay.
     * - use: optional
     * @var int
     */
    public $MinLOS;
    /**
     * The MaxLOS
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the maximum length of stay.
     * - use: optional
     * @var int
     */
    public $MaxLOS;
    /**
     * The StayContext
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $StayContext;
    /**
     * Constructor method for StayRequirement
     * @uses StayRequirement::setDescription()
     * @uses StayRequirement::setMinLOS()
     * @uses StayRequirement::setMaxLOS()
     * @uses StayRequirement::setStayContext()
     * @param mixed $description
     * @param int $minLOS
     * @param int $maxLOS
     * @param string $stayContext
     */
    public function __construct($description = null, $minLOS = null, $maxLOS = null, $stayContext = null)
    {
        $this
            ->setDescription($description)
            ->setMinLOS($minLOS)
            ->setMaxLOS($maxLOS)
            ->setStayContext($stayContext);
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get MinLOS value
     * @return int|null
     */
    public function getMinLOS()
    {
        return $this->MinLOS;
    }
    /**
     * Set MinLOS value
     * @param int $minLOS
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement
     */
    public function setMinLOS($minLOS = null)
    {
        // validation for constraint: int
        if (!is_null($minLOS) && !is_numeric($minLOS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minLOS)), __LINE__);
        }
        $this->MinLOS = $minLOS;
        return $this;
    }
    /**
     * Get MaxLOS value
     * @return int|null
     */
    public function getMaxLOS()
    {
        return $this->MaxLOS;
    }
    /**
     * Set MaxLOS value
     * @param int $maxLOS
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement
     */
    public function setMaxLOS($maxLOS = null)
    {
        // validation for constraint: int
        if (!is_null($maxLOS) && !is_numeric($maxLOS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxLOS)), __LINE__);
        }
        $this->MaxLOS = $maxLOS;
        return $this;
    }
    /**
     * Get StayContext value
     * @return string|null
     */
    public function getStayContext()
    {
        return $this->StayContext;
    }
    /**
     * Set StayContext value
     * @param string $stayContext
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement
     */
    public function setStayContext($stayContext = null)
    {
        // validation for constraint: string
        if (!is_null($stayContext) && !is_string($stayContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stayContext)), __LINE__);
        }
        $this->StayContext = $stayContext;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayRequirement
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

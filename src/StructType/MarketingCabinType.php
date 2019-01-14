<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketingCabinType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is specific to the supplier whereas cabin is generic to the industry.
 * @subpackage Structs
 */
class MarketingCabinType extends CabinAvailabilityType
{
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: "The reference place holder to link the marketing cabin information and the RBD."
     * - use: required
     * @var string
     */
    public $RPH;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * Constructor method for MarketingCabinType
     * @uses MarketingCabinType::setRPH()
     * @uses MarketingCabinType::setName()
     * @param string $rPH
     * @param string $name
     */
    public function __construct($rPH = null, $name = null)
    {
        $this
            ->setRPH($rPH)
            ->setName($name);
    }
    /**
     * Get RPH value
     * @return string
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MarketingCabinType
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MarketingCabinType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MarketingCabinType
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

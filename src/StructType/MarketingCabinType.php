<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketingCabinType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Marketing name for the First, Business or Economy cabin.
 * @subpackage Structs
 */
class MarketingCabinType extends CabinAvailabilityType
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: The marketing name of the cabin that is specific to the supplier.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The reference place holder to link the marketing cabin information and the RBD.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for MarketingCabinType
     * @uses MarketingCabinType::setName()
     * @uses MarketingCabinType::setRPH()
     * @param string $name
     * @param string $rPH
     */
    public function __construct($name = null, $rPH = null)
    {
        $this
            ->setName($name)
            ->setRPH($rPH);
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

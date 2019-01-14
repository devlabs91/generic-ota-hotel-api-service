<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestaurantDescription StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information describing the restaurant.
 * @subpackage Structs
 */
class RestaurantDescription extends ParagraphType
{
    /**
     * The Attire
     * Meta informations extracted from the WSDL
     * - documentation: Used to pass restaurant attire information.
     * - use: optional
     * @var string
     */
    public $Attire;
    /**
     * Constructor method for RestaurantDescription
     * @uses RestaurantDescription::setAttire()
     * @param string $attire
     */
    public function __construct($attire = null)
    {
        $this
            ->setAttire($attire);
    }
    /**
     * Get Attire value
     * @return string|null
     */
    public function getAttire()
    {
        return $this->Attire;
    }
    /**
     * Set Attire value
     * @param string $attire
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription
     */
    public function setAttire($attire = null)
    {
        // validation for constraint: string
        if (!is_null($attire) && !is_string($attire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attire)), __LINE__);
        }
        $this->Attire = $attire;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StreetNmbr StructType
 * Meta informations extracted from the WSDL
 * - documentation: May contain the street number and optionally the street name.
 * @subpackage Structs
 */
class StreetNmbr extends StreetNmbrType
{
    /**
     * The StreetNmbrSuffix
     * Meta informations extracted from the WSDL
     * - documentation: Usually a letter right after the street number (A in 66-A, B in 123-B etc).
     * - use: optional
     * @var string
     */
    public $StreetNmbrSuffix;
    /**
     * The StreetDirection
     * Meta informations extracted from the WSDL
     * - documentation: Street direction of an address (e.g., N, E, S, NW, SW).
     * - use: optional
     * @var string
     */
    public $StreetDirection;
    /**
     * The RuralRouteNmbr
     * Meta informations extracted from the WSDL
     * - documentation: Numerical equivalent of a rural township as defined within a given area (e.g., 12, 99).
     * - use: optional
     * @var string
     */
    public $RuralRouteNmbr;
    /**
     * Constructor method for StreetNmbr
     * @uses StreetNmbr::setStreetNmbrSuffix()
     * @uses StreetNmbr::setStreetDirection()
     * @uses StreetNmbr::setRuralRouteNmbr()
     * @param string $streetNmbrSuffix
     * @param string $streetDirection
     * @param string $ruralRouteNmbr
     */
    public function __construct($streetNmbrSuffix = null, $streetDirection = null, $ruralRouteNmbr = null)
    {
        $this
            ->setStreetNmbrSuffix($streetNmbrSuffix)
            ->setStreetDirection($streetDirection)
            ->setRuralRouteNmbr($ruralRouteNmbr);
    }
    /**
     * Get StreetNmbrSuffix value
     * @return string|null
     */
    public function getStreetNmbrSuffix()
    {
        return $this->StreetNmbrSuffix;
    }
    /**
     * Set StreetNmbrSuffix value
     * @param string $streetNmbrSuffix
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StreetNmbr
     */
    public function setStreetNmbrSuffix($streetNmbrSuffix = null)
    {
        // validation for constraint: string
        if (!is_null($streetNmbrSuffix) && !is_string($streetNmbrSuffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetNmbrSuffix)), __LINE__);
        }
        $this->StreetNmbrSuffix = $streetNmbrSuffix;
        return $this;
    }
    /**
     * Get StreetDirection value
     * @return string|null
     */
    public function getStreetDirection()
    {
        return $this->StreetDirection;
    }
    /**
     * Set StreetDirection value
     * @param string $streetDirection
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StreetNmbr
     */
    public function setStreetDirection($streetDirection = null)
    {
        // validation for constraint: string
        if (!is_null($streetDirection) && !is_string($streetDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetDirection)), __LINE__);
        }
        $this->StreetDirection = $streetDirection;
        return $this;
    }
    /**
     * Get RuralRouteNmbr value
     * @return string|null
     */
    public function getRuralRouteNmbr()
    {
        return $this->RuralRouteNmbr;
    }
    /**
     * Set RuralRouteNmbr value
     * @param string $ruralRouteNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StreetNmbr
     */
    public function setRuralRouteNmbr($ruralRouteNmbr = null)
    {
        // validation for constraint: string
        if (!is_null($ruralRouteNmbr) && !is_string($ruralRouteNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruralRouteNmbr)), __LINE__);
        }
        $this->RuralRouteNmbr = $ruralRouteNmbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StreetNmbr
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

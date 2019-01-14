<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelativePositionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The RelativePosition object contains information about the direction, distance and travel time to/from a facility (hotel, car rental location, or airport) or to/from a designated location.
 * @subpackage Structs
 */
class RelativePositionType extends TransportationsType
{
    /**
     * The Nearest
     * Meta informations extracted from the WSDL
     * - documentation: The indicator for whether this location is nearest.
     * - use: optional
     * @var bool
     */
    public $Nearest;
    /**
     * The IndexPointCode
     * Meta informations extracted from the WSDL
     * - documentation: This is the object referred to by the relative position (e.g. cross street, airport). Refer to OTA Code List Index Point Code (IPC).
     * - use: optional
     * @var string
     */
    public $IndexPointCode;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: This is used to accommodate a city name, rail station name etc. when using the indexPoint attribute.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * Constructor method for RelativePositionType
     * @uses RelativePositionType::setNearest()
     * @uses RelativePositionType::setIndexPointCode()
     * @uses RelativePositionType::setName()
     * @param bool $nearest
     * @param string $indexPointCode
     * @param string $name
     */
    public function __construct($nearest = null, $indexPointCode = null, $name = null)
    {
        $this
            ->setNearest($nearest)
            ->setIndexPointCode($indexPointCode)
            ->setName($name);
    }
    /**
     * Get Nearest value
     * @return bool|null
     */
    public function getNearest()
    {
        return $this->Nearest;
    }
    /**
     * Set Nearest value
     * @param bool $nearest
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositionType
     */
    public function setNearest($nearest = null)
    {
        // validation for constraint: boolean
        if (!is_null($nearest) && !is_bool($nearest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nearest)), __LINE__);
        }
        $this->Nearest = $nearest;
        return $this;
    }
    /**
     * Get IndexPointCode value
     * @return string|null
     */
    public function getIndexPointCode()
    {
        return $this->IndexPointCode;
    }
    /**
     * Set IndexPointCode value
     * @param string $indexPointCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositionType
     */
    public function setIndexPointCode($indexPointCode = null)
    {
        // validation for constraint: string
        if (!is_null($indexPointCode) && !is_string($indexPointCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indexPointCode)), __LINE__);
        }
        $this->IndexPointCode = $indexPointCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositionType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositionType
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

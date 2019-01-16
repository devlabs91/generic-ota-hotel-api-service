<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelativePositionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The RelativePosition object contains information about the direction, distance and travel time to/from a facility (hotel, car rental location, or airport) or to/from a designated location. | Defines the position of an entity in
 * relation to another entity (e.g. from an airport to a hotel, the relationship is dependant on use).
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
     * - documentation: This is the object referred to by the relative position (e.g. cross street, airport). Refer to OpenTravel Code List Index Point Code (IPC).
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
     * The PrimaryIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the reference point is considered the main reference point for the specific type of IndexPointCode (e.g., in Dallas, where IndexPointCode=airport Dallas/Fort Worth airport would be the primary airport even if
     * another airport such as Love Field is closer).
     * - use: optional
     * @var bool
     */
    public $PrimaryIndicator;
    /**
     * The ToFrom
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ToFrom;
    /**
     * The ApproximateDistanceInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the distance information is approximate.
     * - use: optional
     * @var bool
     */
    public $ApproximateDistanceInd;
    /**
     * Constructor method for RelativePositionType
     * @uses RelativePositionType::setNearest()
     * @uses RelativePositionType::setIndexPointCode()
     * @uses RelativePositionType::setName()
     * @uses RelativePositionType::setPrimaryIndicator()
     * @uses RelativePositionType::setToFrom()
     * @uses RelativePositionType::setApproximateDistanceInd()
     * @param bool $nearest
     * @param string $indexPointCode
     * @param string $name
     * @param bool $primaryIndicator
     * @param string $toFrom
     * @param bool $approximateDistanceInd
     */
    public function __construct($nearest = null, $indexPointCode = null, $name = null, $primaryIndicator = null, $toFrom = null, $approximateDistanceInd = null)
    {
        $this
            ->setNearest($nearest)
            ->setIndexPointCode($indexPointCode)
            ->setName($name)
            ->setPrimaryIndicator($primaryIndicator)
            ->setToFrom($toFrom)
            ->setApproximateDistanceInd($approximateDistanceInd);
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
     * Get PrimaryIndicator value
     * @return bool|null
     */
    public function getPrimaryIndicator()
    {
        return $this->PrimaryIndicator;
    }
    /**
     * Set PrimaryIndicator value
     * @param bool $primaryIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositionType
     */
    public function setPrimaryIndicator($primaryIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($primaryIndicator) && !is_bool($primaryIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primaryIndicator)), __LINE__);
        }
        $this->PrimaryIndicator = $primaryIndicator;
        return $this;
    }
    /**
     * Get ToFrom value
     * @return string|null
     */
    public function getToFrom()
    {
        return $this->ToFrom;
    }
    /**
     * Set ToFrom value
     * @param string $toFrom
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositionType
     */
    public function setToFrom($toFrom = null)
    {
        // validation for constraint: string
        if (!is_null($toFrom) && !is_string($toFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toFrom)), __LINE__);
        }
        $this->ToFrom = $toFrom;
        return $this;
    }
    /**
     * Get ApproximateDistanceInd value
     * @return bool|null
     */
    public function getApproximateDistanceInd()
    {
        return $this->ApproximateDistanceInd;
    }
    /**
     * Set ApproximateDistanceInd value
     * @param bool $approximateDistanceInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePositionType
     */
    public function setApproximateDistanceInd($approximateDistanceInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($approximateDistanceInd) && !is_bool($approximateDistanceInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($approximateDistanceInd)), __LINE__);
        }
        $this->ApproximateDistanceInd = $approximateDistanceInd;
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

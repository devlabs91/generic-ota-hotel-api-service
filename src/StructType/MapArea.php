<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MapArea StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides coordinates used to define the area of a map.
 * @subpackage Structs
 */
class MapArea extends AbstractStructBase
{
    /**
     * The NorthLatitude
     * Meta informations extracted from the WSDL
     * - documentation: The latitude of the northern boundary of the map.
     * - use: optional
     * @var string
     */
    public $NorthLatitude;
    /**
     * The SouthLatitude
     * Meta informations extracted from the WSDL
     * - documentation: The latitude of the southern boundary of the map.
     * - use: optional
     * @var string
     */
    public $SouthLatitude;
    /**
     * The EastLongitude
     * Meta informations extracted from the WSDL
     * - documentation: The longitude of the eastern boundary of the map.
     * - use: optional
     * @var string
     */
    public $EastLongitude;
    /**
     * The WestLongitude
     * Meta informations extracted from the WSDL
     * - documentation: The longitude of the western boundary of the map.
     * - use: optional
     * @var string
     */
    public $WestLongitude;
    /**
     * Constructor method for MapArea
     * @uses MapArea::setNorthLatitude()
     * @uses MapArea::setSouthLatitude()
     * @uses MapArea::setEastLongitude()
     * @uses MapArea::setWestLongitude()
     * @param string $northLatitude
     * @param string $southLatitude
     * @param string $eastLongitude
     * @param string $westLongitude
     */
    public function __construct($northLatitude = null, $southLatitude = null, $eastLongitude = null, $westLongitude = null)
    {
        $this
            ->setNorthLatitude($northLatitude)
            ->setSouthLatitude($southLatitude)
            ->setEastLongitude($eastLongitude)
            ->setWestLongitude($westLongitude);
    }
    /**
     * Get NorthLatitude value
     * @return string|null
     */
    public function getNorthLatitude()
    {
        return $this->NorthLatitude;
    }
    /**
     * Set NorthLatitude value
     * @param string $northLatitude
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapArea
     */
    public function setNorthLatitude($northLatitude = null)
    {
        // validation for constraint: string
        if (!is_null($northLatitude) && !is_string($northLatitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($northLatitude)), __LINE__);
        }
        $this->NorthLatitude = $northLatitude;
        return $this;
    }
    /**
     * Get SouthLatitude value
     * @return string|null
     */
    public function getSouthLatitude()
    {
        return $this->SouthLatitude;
    }
    /**
     * Set SouthLatitude value
     * @param string $southLatitude
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapArea
     */
    public function setSouthLatitude($southLatitude = null)
    {
        // validation for constraint: string
        if (!is_null($southLatitude) && !is_string($southLatitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($southLatitude)), __LINE__);
        }
        $this->SouthLatitude = $southLatitude;
        return $this;
    }
    /**
     * Get EastLongitude value
     * @return string|null
     */
    public function getEastLongitude()
    {
        return $this->EastLongitude;
    }
    /**
     * Set EastLongitude value
     * @param string $eastLongitude
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapArea
     */
    public function setEastLongitude($eastLongitude = null)
    {
        // validation for constraint: string
        if (!is_null($eastLongitude) && !is_string($eastLongitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eastLongitude)), __LINE__);
        }
        $this->EastLongitude = $eastLongitude;
        return $this;
    }
    /**
     * Get WestLongitude value
     * @return string|null
     */
    public function getWestLongitude()
    {
        return $this->WestLongitude;
    }
    /**
     * Set WestLongitude value
     * @param string $westLongitude
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapArea
     */
    public function setWestLongitude($westLongitude = null)
    {
        // validation for constraint: string
        if (!is_null($westLongitude) && !is_string($westLongitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($westLongitude)), __LINE__);
        }
        $this->WestLongitude = $westLongitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapArea
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

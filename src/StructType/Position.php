<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Position StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Position element contains three attributes, Latitude, Longitude, and Altitude, used to indicate the geographic location(s) requested by the search, expressed in notation specified by ISO standard 6709. It is likely that only the
 * first two attributes, Latitude and Longitude, would be needed to define a geographic area. | The geographic coordinates for the search. | Specifies the latitude and longitude of a source. | Used to specify the geographic coordinates of the source of
 * the request. | An element that identifies the geographic position of the hotel. The Position element uses the representation defined by ISO Standard 6709 to define a geographic point location. | Describes the geocoded location of the hotel.
 * @subpackage Structs
 */
class Position extends AbstractStructBase
{
    /**
     * The MapURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of a map image.
     * - use: optional
     * @var string
     */
    public $MapURL;
    /**
     * Constructor method for Position
     * @uses Position::setMapURL()
     * @param string $mapURL
     */
    public function __construct($mapURL = null)
    {
        $this
            ->setMapURL($mapURL);
    }
    /**
     * Get MapURL value
     * @return string|null
     */
    public function getMapURL()
    {
        return $this->MapURL;
    }
    /**
     * Set MapURL value
     * @param string $mapURL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Position
     */
    public function setMapURL($mapURL = null)
    {
        // validation for constraint: string
        if (!is_null($mapURL) && !is_string($mapURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mapURL)), __LINE__);
        }
        $this->MapURL = $mapURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Position
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

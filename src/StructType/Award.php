<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Award StructType
 * Meta informations extracted from the WSDL
 * - documentation: An element that identifies the hotel ratings. | An element that identifies the hotel ratings. | Provides detailed information regarding each award for this hotel.
 * @subpackage Structs
 */
class Award extends AbstractStructBase
{
    /**
     * The Provider
     * Meta informations extracted from the WSDL
     * - documentation: The name of the award or ratings provider. | The name of the award or ratings provider. | The name of the award or ratings provider (e.g., Michelin, American Automobile Association (AAA)).
     * - use: optional
     * @var string
     */
    public $Provider;
    /**
     * The Rating
     * Meta informations extracted from the WSDL
     * - documentation: The actual award or rating received by the hotel facility. | The actual award or rating received by the hotel facility. | The actual award or rating received by the hotel facility (e.g. 4 stars, 3 diamonds). If used in conjunction
     * with RatingSymbol only the numeric rating would be passed here.
     * - use: optional
     * @var string
     */
    public $Rating;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: The date the award was received.
     * - use: optional
     * @var string
     */
    public $Date;
    /**
     * The OfficialAppointmentInd
     * Meta informations extracted from the WSDL
     * - documentation: When true indicates the property has received official permission from the award provider to use the rating in publications and marketing materials; when false this permission has not been granted.
     * - use: optional
     * @var bool
     */
    public $OfficialAppointmentInd;
    /**
     * The RatingSymbol
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RatingSymbol;
    /**
     * Constructor method for Award
     * @uses Award::setProvider()
     * @uses Award::setRating()
     * @uses Award::setDate()
     * @uses Award::setOfficialAppointmentInd()
     * @uses Award::setRatingSymbol()
     * @param string $provider
     * @param string $rating
     * @param string $date
     * @param bool $officialAppointmentInd
     * @param string $ratingSymbol
     */
    public function __construct($provider = null, $rating = null, $date = null, $officialAppointmentInd = null, $ratingSymbol = null)
    {
        $this
            ->setProvider($provider)
            ->setRating($rating)
            ->setDate($date)
            ->setOfficialAppointmentInd($officialAppointmentInd)
            ->setRatingSymbol($ratingSymbol);
    }
    /**
     * Get Provider value
     * @return string|null
     */
    public function getProvider()
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param string $provider
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Award
     */
    public function setProvider($provider = null)
    {
        // validation for constraint: string
        if (!is_null($provider) && !is_string($provider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provider)), __LINE__);
        }
        $this->Provider = $provider;
        return $this;
    }
    /**
     * Get Rating value
     * @return string|null
     */
    public function getRating()
    {
        return $this->Rating;
    }
    /**
     * Set Rating value
     * @param string $rating
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Award
     */
    public function setRating($rating = null)
    {
        // validation for constraint: string
        if (!is_null($rating) && !is_string($rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rating)), __LINE__);
        }
        $this->Rating = $rating;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Award
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get OfficialAppointmentInd value
     * @return bool|null
     */
    public function getOfficialAppointmentInd()
    {
        return $this->OfficialAppointmentInd;
    }
    /**
     * Set OfficialAppointmentInd value
     * @param bool $officialAppointmentInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Award
     */
    public function setOfficialAppointmentInd($officialAppointmentInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($officialAppointmentInd) && !is_bool($officialAppointmentInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($officialAppointmentInd)), __LINE__);
        }
        $this->OfficialAppointmentInd = $officialAppointmentInd;
        return $this;
    }
    /**
     * Get RatingSymbol value
     * @return string|null
     */
    public function getRatingSymbol()
    {
        return $this->RatingSymbol;
    }
    /**
     * Set RatingSymbol value
     * @param string $ratingSymbol
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Award
     */
    public function setRatingSymbol($ratingSymbol = null)
    {
        // validation for constraint: string
        if (!is_null($ratingSymbol) && !is_string($ratingSymbol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratingSymbol)), __LINE__);
        }
        $this->RatingSymbol = $ratingSymbol;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Award
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

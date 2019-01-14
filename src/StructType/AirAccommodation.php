<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirAccommodation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies guest air accommodation information.
 * @subpackage Structs
 */
class AirAccommodation extends AirInfoType
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Used for additional info regarding the flight deviation.
     * - use: optional
     * @var string
     */
    public $Comment;
    /**
     * The AirAccommodationType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of air accommodation (e.g., Regular, Premium, Deviation).
     * - use: optional
     * @var string
     */
    public $AirAccommodationType;
    /**
     * Constructor method for AirAccommodation
     * @uses AirAccommodation::setComment()
     * @uses AirAccommodation::setAirAccommodationType()
     * @param string $comment
     * @param string $airAccommodationType
     */
    public function __construct($comment = null, $airAccommodationType = null)
    {
        $this
            ->setComment($comment)
            ->setAirAccommodationType($airAccommodationType);
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirAccommodation
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get AirAccommodationType value
     * @return string|null
     */
    public function getAirAccommodationType()
    {
        return $this->AirAccommodationType;
    }
    /**
     * Set AirAccommodationType value
     * @param string $airAccommodationType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirAccommodation
     */
    public function setAirAccommodationType($airAccommodationType = null)
    {
        // validation for constraint: string
        if (!is_null($airAccommodationType) && !is_string($airAccommodationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airAccommodationType)), __LINE__);
        }
        $this->AirAccommodationType = $airAccommodationType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirAccommodation
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

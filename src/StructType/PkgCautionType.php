<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgCautionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information regarding a package component which could affect a customer's decision to book.
 * @subpackage Structs
 */
class PkgCautionType extends FormattedTextTextType
{
    /**
     * The ItinerarySequence
     * Meta informations extracted from the WSDL
     * - documentation: Used to relate this item of information to the inventory item.
     * - use: optional
     * @var string
     */
    public $ItinerarySequence;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of information e.g. Resort, Flight, Accommodation etc..
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * Constructor method for PkgCautionType
     * @uses PkgCautionType::setItinerarySequence()
     * @uses PkgCautionType::setType()
     * @param string $itinerarySequence
     * @param string $type
     */
    public function __construct($itinerarySequence = null, $type = null)
    {
        $this
            ->setItinerarySequence($itinerarySequence)
            ->setType($type);
    }
    /**
     * Get ItinerarySequence value
     * @return string|null
     */
    public function getItinerarySequence()
    {
        return $this->ItinerarySequence;
    }
    /**
     * Set ItinerarySequence value
     * @param string $itinerarySequence
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgCautionType
     */
    public function setItinerarySequence($itinerarySequence = null)
    {
        // validation for constraint: string
        if (!is_null($itinerarySequence) && !is_string($itinerarySequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itinerarySequence)), __LINE__);
        }
        $this->ItinerarySequence = $itinerarySequence;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgCautionType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgCautionType
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

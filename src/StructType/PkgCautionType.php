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
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of information e.g. Resort, Flight, Accommodation etc..
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: The supplier's unique identification code for a caution.
     * - use: optional
     * @var string
     */
    public $ID;
    /**
     * The ListOfItineraryItemRPH
     * Meta informations extracted from the WSDL
     * - documentation: Pointers to individual InventoryItem elements to which this Caution applies.
     * - use: optional
     * @var string
     */
    public $ListOfItineraryItemRPH;
    /**
     * The ListOfExtraRPH
     * Meta informations extracted from the WSDL
     * - documentation: Pointers to individual Extra elements to which this Caution applies.
     * - use: optional
     * @var string
     */
    public $ListOfExtraRPH;
    /**
     * Constructor method for PkgCautionType
     * @uses PkgCautionType::setType()
     * @uses PkgCautionType::setID()
     * @uses PkgCautionType::setListOfItineraryItemRPH()
     * @uses PkgCautionType::setListOfExtraRPH()
     * @param string $type
     * @param string $iD
     * @param string $listOfItineraryItemRPH
     * @param string $listOfExtraRPH
     */
    public function __construct($type = null, $iD = null, $listOfItineraryItemRPH = null, $listOfExtraRPH = null)
    {
        $this
            ->setType($type)
            ->setID($iD)
            ->setListOfItineraryItemRPH($listOfItineraryItemRPH)
            ->setListOfExtraRPH($listOfExtraRPH);
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
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgCautionType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get ListOfItineraryItemRPH value
     * @return string|null
     */
    public function getListOfItineraryItemRPH()
    {
        return $this->ListOfItineraryItemRPH;
    }
    /**
     * Set ListOfItineraryItemRPH value
     * @param string $listOfItineraryItemRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgCautionType
     */
    public function setListOfItineraryItemRPH($listOfItineraryItemRPH = null)
    {
        // validation for constraint: string
        if (!is_null($listOfItineraryItemRPH) && !is_string($listOfItineraryItemRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfItineraryItemRPH)), __LINE__);
        }
        $this->ListOfItineraryItemRPH = $listOfItineraryItemRPH;
        return $this;
    }
    /**
     * Get ListOfExtraRPH value
     * @return string|null
     */
    public function getListOfExtraRPH()
    {
        return $this->ListOfExtraRPH;
    }
    /**
     * Set ListOfExtraRPH value
     * @param string $listOfExtraRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgCautionType
     */
    public function setListOfExtraRPH($listOfExtraRPH = null)
    {
        // validation for constraint: string
        if (!is_null($listOfExtraRPH) && !is_string($listOfExtraRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfExtraRPH)), __LINE__);
        }
        $this->ListOfExtraRPH = $listOfExtraRPH;
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

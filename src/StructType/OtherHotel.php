<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherHotel StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information on other area hotels.
 * @subpackage Structs
 */
class OtherHotel extends AbstractStructBase
{
    /**
     * The ContactInfos
     * Meta informations extracted from the WSDL
     * - documentation: Provides general property information for another hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $ContactInfos;
    /**
     * The RefPoints
     * Meta informations extracted from the WSDL
     * - documentation: Provides information on the location of the other hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $RefPoints;
    /**
     * The CompetitorIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates this hotel is a competitor. When false, this hotel is not a competitor.
     * - use: optional
     * @var bool
     */
    public $CompetitorIndicator;
    /**
     * The SegmentCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the segment (e.g., luxury, upscale, extended stay) of the other hotel. Refer to OpenTravel Codelist SEG.
     * - use: optional
     * @var string
     */
    public $SegmentCategoryCode;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: An ID as created by the source system (e.g. when passing competitor information, this would be the ID stored in the competitor's system).
     * - use: optional
     * @var string
     */
    public $ID;
    /**
     * The AlternateID
     * Meta informations extracted from the WSDL
     * - documentation: An ID as created by the non-source system (e.g. when passing competitor information, this would be the ID stored in the local company's system).
     * - use: optional
     * @var string
     */
    public $AlternateID;
    /**
     * Constructor method for OtherHotel
     * @uses OtherHotel::setContactInfos()
     * @uses OtherHotel::setRefPoints()
     * @uses OtherHotel::setCompetitorIndicator()
     * @uses OtherHotel::setSegmentCategoryCode()
     * @uses OtherHotel::setID()
     * @uses OtherHotel::setAlternateID()
     * @param mixed $contactInfos
     * @param mixed $refPoints
     * @param bool $competitorIndicator
     * @param string $segmentCategoryCode
     * @param string $iD
     * @param string $alternateID
     */
    public function __construct($contactInfos = null, $refPoints = null, $competitorIndicator = null, $segmentCategoryCode = null, $iD = null, $alternateID = null)
    {
        $this
            ->setContactInfos($contactInfos)
            ->setRefPoints($refPoints)
            ->setCompetitorIndicator($competitorIndicator)
            ->setSegmentCategoryCode($segmentCategoryCode)
            ->setID($iD)
            ->setAlternateID($alternateID);
    }
    /**
     * Get ContactInfos value
     * @return mixed|null
     */
    public function getContactInfos()
    {
        return $this->ContactInfos;
    }
    /**
     * Set ContactInfos value
     * @param mixed $contactInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel
     */
    public function setContactInfos($contactInfos = null)
    {
        $this->ContactInfos = $contactInfos;
        return $this;
    }
    /**
     * Get RefPoints value
     * @return mixed|null
     */
    public function getRefPoints()
    {
        return $this->RefPoints;
    }
    /**
     * Set RefPoints value
     * @param mixed $refPoints
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel
     */
    public function setRefPoints($refPoints = null)
    {
        $this->RefPoints = $refPoints;
        return $this;
    }
    /**
     * Get CompetitorIndicator value
     * @return bool|null
     */
    public function getCompetitorIndicator()
    {
        return $this->CompetitorIndicator;
    }
    /**
     * Set CompetitorIndicator value
     * @param bool $competitorIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel
     */
    public function setCompetitorIndicator($competitorIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($competitorIndicator) && !is_bool($competitorIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($competitorIndicator)), __LINE__);
        }
        $this->CompetitorIndicator = $competitorIndicator;
        return $this;
    }
    /**
     * Get SegmentCategoryCode value
     * @return string|null
     */
    public function getSegmentCategoryCode()
    {
        return $this->SegmentCategoryCode;
    }
    /**
     * Set SegmentCategoryCode value
     * @param string $segmentCategoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel
     */
    public function setSegmentCategoryCode($segmentCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($segmentCategoryCode) && !is_string($segmentCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentCategoryCode)), __LINE__);
        }
        $this->SegmentCategoryCode = $segmentCategoryCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel
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
     * Get AlternateID value
     * @return string|null
     */
    public function getAlternateID()
    {
        return $this->AlternateID;
    }
    /**
     * Set AlternateID value
     * @param string $alternateID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel
     */
    public function setAlternateID($alternateID = null)
    {
        // validation for constraint: string
        if (!is_null($alternateID) && !is_string($alternateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alternateID)), __LINE__);
        }
        $this->AlternateID = $alternateID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherHotel
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

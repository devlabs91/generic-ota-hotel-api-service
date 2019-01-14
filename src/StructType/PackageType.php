<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines a complete package holiday.
 * @subpackage Structs
 */
class PackageType extends AbstractStructBase
{
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $URL;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $CompanyName;
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DateRange
     */
    public $DateRange;
    /**
     * The ItineraryItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItems
     */
    public $ItineraryItems;
    /**
     * The Cautions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Cautions
     */
    public $Cautions;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Package Type (PKG).
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The TravelCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TravelCode;
    /**
     * The TourCode
     * Meta informations extracted from the WSDL
     * - documentation: The supplier’s code to identify the accommodation/tour arrangement for a package.
     * - use: optional
     * @var string
     */
    public $TourCode;
    /**
     * The ShortDescription
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ShortDescription;
    /**
     * The BoardCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $BoardCode;
    /**
     * The PromotionCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PromotionCode;
    /**
     * Constructor method for PackageType
     * @uses PackageType::setURL()
     * @uses PackageType::setCompanyName()
     * @uses PackageType::setDateRange()
     * @uses PackageType::setItineraryItems()
     * @uses PackageType::setCautions()
     * @uses PackageType::setType()
     * @uses PackageType::setTravelCode()
     * @uses PackageType::setTourCode()
     * @uses PackageType::setShortDescription()
     * @uses PackageType::setBoardCode()
     * @uses PackageType::setPromotionCode()
     * @param mixed $uRL
     * @param mixed $companyName
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DateRange $dateRange
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItems $itineraryItems
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Cautions $cautions
     * @param string $type
     * @param string $travelCode
     * @param string $tourCode
     * @param string $shortDescription
     * @param string $boardCode
     * @param string $promotionCode
     */
    public function __construct($uRL = null, $companyName = null, \Devlabs91\GenericOtaHotelApiService\StructType\DateRange $dateRange = null, \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItems $itineraryItems = null, \Devlabs91\GenericOtaHotelApiService\StructType\Cautions $cautions = null, $type = null, $travelCode = null, $tourCode = null, $shortDescription = null, $boardCode = null, $promotionCode = null)
    {
        $this
            ->setURL($uRL)
            ->setCompanyName($companyName)
            ->setDateRange($dateRange)
            ->setItineraryItems($itineraryItems)
            ->setCautions($cautions)
            ->setType($type)
            ->setTravelCode($travelCode)
            ->setTourCode($tourCode)
            ->setShortDescription($shortDescription)
            ->setBoardCode($boardCode)
            ->setPromotionCode($promotionCode);
    }
    /**
     * Get URL value
     * @return mixed|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param mixed $uRL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
     */
    public function setURL($uRL = null)
    {
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return mixed|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param mixed $companyName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get DateRange value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DateRange|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DateRange $dateRange
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
     */
    public function setDateRange(\Devlabs91\GenericOtaHotelApiService\StructType\DateRange $dateRange = null)
    {
        $this->DateRange = $dateRange;
        return $this;
    }
    /**
     * Get ItineraryItems value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItems|null
     */
    public function getItineraryItems()
    {
        return $this->ItineraryItems;
    }
    /**
     * Set ItineraryItems value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItems $itineraryItems
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
     */
    public function setItineraryItems(\Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItems $itineraryItems = null)
    {
        $this->ItineraryItems = $itineraryItems;
        return $this;
    }
    /**
     * Get Cautions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Cautions|null
     */
    public function getCautions()
    {
        return $this->Cautions;
    }
    /**
     * Set Cautions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Cautions $cautions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
     */
    public function setCautions(\Devlabs91\GenericOtaHotelApiService\StructType\Cautions $cautions = null)
    {
        $this->Cautions = $cautions;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
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
     * Get TravelCode value
     * @return string|null
     */
    public function getTravelCode()
    {
        return $this->TravelCode;
    }
    /**
     * Set TravelCode value
     * @param string $travelCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
     */
    public function setTravelCode($travelCode = null)
    {
        // validation for constraint: string
        if (!is_null($travelCode) && !is_string($travelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelCode)), __LINE__);
        }
        $this->TravelCode = $travelCode;
        return $this;
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode()
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
     */
    public function setTourCode($tourCode = null)
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourCode)), __LINE__);
        }
        $this->TourCode = $tourCode;
        return $this;
    }
    /**
     * Get ShortDescription value
     * @return string|null
     */
    public function getShortDescription()
    {
        return $this->ShortDescription;
    }
    /**
     * Set ShortDescription value
     * @param string $shortDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
     */
    public function setShortDescription($shortDescription = null)
    {
        // validation for constraint: string
        if (!is_null($shortDescription) && !is_string($shortDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortDescription)), __LINE__);
        }
        $this->ShortDescription = $shortDescription;
        return $this;
    }
    /**
     * Get BoardCode value
     * @return string|null
     */
    public function getBoardCode()
    {
        return $this->BoardCode;
    }
    /**
     * Set BoardCode value
     * @param string $boardCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
     */
    public function setBoardCode($boardCode = null)
    {
        // validation for constraint: string
        if (!is_null($boardCode) && !is_string($boardCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($boardCode)), __LINE__);
        }
        $this->BoardCode = $boardCode;
        return $this;
    }
    /**
     * Get PromotionCode value
     * @return string|null
     */
    public function getPromotionCode()
    {
        return $this->PromotionCode;
    }
    /**
     * Set PromotionCode value
     * @param string $promotionCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
     */
    public function setPromotionCode($promotionCode = null)
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionCode)), __LINE__);
        }
        $this->PromotionCode = $promotionCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PackageType
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

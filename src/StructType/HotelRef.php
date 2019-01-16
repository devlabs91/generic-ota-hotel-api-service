<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRef StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the detail of hotel reference information. | Detailed hotel information for the search. | This is used to identify the hotel to which the block applies. | Information to identify one or more hotels.
 * @subpackage Structs
 */
class HotelRef extends AbstractStructBase
{
    /**
     * The SegmentCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to search for hotels within a particular market segment. Refer to OpenTravel Code Segment Category Code Type (SEG).
     * - use: optional
     * @var string
     */
    public $SegmentCategoryCode;
    /**
     * The PropertyClassCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code list OpenTravel Code List Property Class Type (PCT).
     * - use: optional
     * @var string
     */
    public $PropertyClassCode;
    /**
     * The ArchitecturalStyleCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Architectural Style Code (ARC).
     * - use: optional
     * @var string
     */
    public $ArchitecturalStyleCode;
    /**
     * The SupplierIntegrationLevel
     * Meta informations extracted from the WSDL
     * - documentation: The level of integration of a property to provide automated transaction information. The lower the number, the higher the integration (e.g., a 1 means the supplier has the highest level of integration automation).
     * - use: optional
     * @var int
     */
    public $SupplierIntegrationLevel;
    /**
     * The LocationCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to search for hotels in a specific location category (e.g. downtown, airport or suburban, etc.). Refer to OpenTravel Code List Location Category Codes (LOC).
     * - use: optional
     * @var string
     */
    public $LocationCategoryCode;
    /**
     * The ExtendedCitySearchIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true indicates the search should be performed beyond the hotel city code, typically this could include neighboring cities to the specified hotel city code.
     * - use: optional
     * @var bool
     */
    public $ExtendedCitySearchIndicator;
    /**
     * Constructor method for HotelRef
     * @uses HotelRef::setSegmentCategoryCode()
     * @uses HotelRef::setPropertyClassCode()
     * @uses HotelRef::setArchitecturalStyleCode()
     * @uses HotelRef::setSupplierIntegrationLevel()
     * @uses HotelRef::setLocationCategoryCode()
     * @uses HotelRef::setExtendedCitySearchIndicator()
     * @param string $segmentCategoryCode
     * @param string $propertyClassCode
     * @param string $architecturalStyleCode
     * @param int $supplierIntegrationLevel
     * @param string $locationCategoryCode
     * @param bool $extendedCitySearchIndicator
     */
    public function __construct($segmentCategoryCode = null, $propertyClassCode = null, $architecturalStyleCode = null, $supplierIntegrationLevel = null, $locationCategoryCode = null, $extendedCitySearchIndicator = null)
    {
        $this
            ->setSegmentCategoryCode($segmentCategoryCode)
            ->setPropertyClassCode($propertyClassCode)
            ->setArchitecturalStyleCode($architecturalStyleCode)
            ->setSupplierIntegrationLevel($supplierIntegrationLevel)
            ->setLocationCategoryCode($locationCategoryCode)
            ->setExtendedCitySearchIndicator($extendedCitySearchIndicator);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef
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
     * Get PropertyClassCode value
     * @return string|null
     */
    public function getPropertyClassCode()
    {
        return $this->PropertyClassCode;
    }
    /**
     * Set PropertyClassCode value
     * @param string $propertyClassCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef
     */
    public function setPropertyClassCode($propertyClassCode = null)
    {
        // validation for constraint: string
        if (!is_null($propertyClassCode) && !is_string($propertyClassCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyClassCode)), __LINE__);
        }
        $this->PropertyClassCode = $propertyClassCode;
        return $this;
    }
    /**
     * Get ArchitecturalStyleCode value
     * @return string|null
     */
    public function getArchitecturalStyleCode()
    {
        return $this->ArchitecturalStyleCode;
    }
    /**
     * Set ArchitecturalStyleCode value
     * @param string $architecturalStyleCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef
     */
    public function setArchitecturalStyleCode($architecturalStyleCode = null)
    {
        // validation for constraint: string
        if (!is_null($architecturalStyleCode) && !is_string($architecturalStyleCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($architecturalStyleCode)), __LINE__);
        }
        $this->ArchitecturalStyleCode = $architecturalStyleCode;
        return $this;
    }
    /**
     * Get SupplierIntegrationLevel value
     * @return int|null
     */
    public function getSupplierIntegrationLevel()
    {
        return $this->SupplierIntegrationLevel;
    }
    /**
     * Set SupplierIntegrationLevel value
     * @param int $supplierIntegrationLevel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef
     */
    public function setSupplierIntegrationLevel($supplierIntegrationLevel = null)
    {
        // validation for constraint: int
        if (!is_null($supplierIntegrationLevel) && !is_numeric($supplierIntegrationLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($supplierIntegrationLevel)), __LINE__);
        }
        $this->SupplierIntegrationLevel = $supplierIntegrationLevel;
        return $this;
    }
    /**
     * Get LocationCategoryCode value
     * @return string|null
     */
    public function getLocationCategoryCode()
    {
        return $this->LocationCategoryCode;
    }
    /**
     * Set LocationCategoryCode value
     * @param string $locationCategoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef
     */
    public function setLocationCategoryCode($locationCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($locationCategoryCode) && !is_string($locationCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCategoryCode)), __LINE__);
        }
        $this->LocationCategoryCode = $locationCategoryCode;
        return $this;
    }
    /**
     * Get ExtendedCitySearchIndicator value
     * @return bool|null
     */
    public function getExtendedCitySearchIndicator()
    {
        return $this->ExtendedCitySearchIndicator;
    }
    /**
     * Set ExtendedCitySearchIndicator value
     * @param bool $extendedCitySearchIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef
     */
    public function setExtendedCitySearchIndicator($extendedCitySearchIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($extendedCitySearchIndicator) && !is_bool($extendedCitySearchIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($extendedCitySearchIndicator)), __LINE__);
        }
        $this->ExtendedCitySearchIndicator = $extendedCitySearchIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef
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

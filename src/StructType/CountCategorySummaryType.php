<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountCategorySummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A class that shows the total of all counts for a certain category. These categories provide a way to show counts such as guests, rooms occupied, etc.
 * @subpackage Structs
 */
class CountCategorySummaryType extends AbstractStructBase
{
    /**
     * The SummaryCount
     * Meta informations extracted from the WSDL
     * - documentation: The total count for that category. The data type is a signed integer.
     * - use: optional
     * @var int
     */
    public $SummaryCount;
    /**
     * The CountCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: The representation of a count category such as Guests : Number of guests at a property, RoomsSingleOcc : Count of rooms with one guest. Refer to OTA Code List Count Category Code (CNT).
     * - use: optional
     * @var string
     */
    public $CountCategoryCode;
    /**
     * Constructor method for CountCategorySummaryType
     * @uses CountCategorySummaryType::setSummaryCount()
     * @uses CountCategorySummaryType::setCountCategoryCode()
     * @param int $summaryCount
     * @param string $countCategoryCode
     */
    public function __construct($summaryCount = null, $countCategoryCode = null)
    {
        $this
            ->setSummaryCount($summaryCount)
            ->setCountCategoryCode($countCategoryCode);
    }
    /**
     * Get SummaryCount value
     * @return int|null
     */
    public function getSummaryCount()
    {
        return $this->SummaryCount;
    }
    /**
     * Set SummaryCount value
     * @param int $summaryCount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaryType
     */
    public function setSummaryCount($summaryCount = null)
    {
        // validation for constraint: int
        if (!is_null($summaryCount) && !is_numeric($summaryCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($summaryCount)), __LINE__);
        }
        $this->SummaryCount = $summaryCount;
        return $this;
    }
    /**
     * Get CountCategoryCode value
     * @return string|null
     */
    public function getCountCategoryCode()
    {
        return $this->CountCategoryCode;
    }
    /**
     * Set CountCategoryCode value
     * @param string $countCategoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaryType
     */
    public function setCountCategoryCode($countCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countCategoryCode) && !is_string($countCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countCategoryCode)), __LINE__);
        }
        $this->CountCategoryCode = $countCategoryCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaryType
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

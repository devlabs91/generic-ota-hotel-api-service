<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Criteria StructType
 * Meta informations extracted from the WSDL
 * - documentation: Conditions which must be met for an extra to be bookable e.g. age of passenger, booking of parent extra.
 * @subpackage Structs
 */
class Criteria extends AbstractStructBase
{
    /**
     * The Criterion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType[]
     */
    public $Criterion;
    /**
     * The MinimumAge
     * Meta informations extracted from the WSDL
     * - documentation: The minimum age qualification for an extra.
     * - use: optional
     * @var int
     */
    public $MinimumAge;
    /**
     * The MaximumAge
     * Meta informations extracted from the WSDL
     * - documentation: The maximum age qualification for an extra.
     * - use: optional
     * @var int
     */
    public $MaximumAge;
    /**
     * The YearsExperience
     * Meta informations extracted from the WSDL
     * - documentation: The minimum number of years of experience required to book this extra e.g. driving experiience for car rental.
     * - use: optional
     * @var int
     */
    public $YearsExperience;
    /**
     * The DateRequiredInd
     * Meta informations extracted from the WSDL
     * - documentation: When 'true', a date must be supplied for the Extra request.
     * - use: optional
     * @var bool
     */
    public $DateRequiredInd;
    /**
     * The DurationRequiredInd
     * Meta informations extracted from the WSDL
     * - documentation: When 'true', a duration must be supplied for the Extra request.
     * - use: optional
     * @var bool
     */
    public $DurationRequiredInd;
    /**
     * The StockControlledInd
     * Meta informations extracted from the WSDL
     * - documentation: When 'true', the availabilty of this extra needs to be checked; when 'false' the extra is available.
     * - use: optional
     * @var bool
     */
    public $StockControlledInd;
    /**
     * The MaximumOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of people permitted for this extra (e.g. car occupancy)
     * - use: optional
     * @var string
     */
    public $MaximumOccupancy;
    /**
     * Constructor method for Criteria
     * @uses Criteria::setCriterion()
     * @uses Criteria::setMinimumAge()
     * @uses Criteria::setMaximumAge()
     * @uses Criteria::setYearsExperience()
     * @uses Criteria::setDateRequiredInd()
     * @uses Criteria::setDurationRequiredInd()
     * @uses Criteria::setStockControlledInd()
     * @uses Criteria::setMaximumOccupancy()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType[] $criterion
     * @param int $minimumAge
     * @param int $maximumAge
     * @param int $yearsExperience
     * @param bool $dateRequiredInd
     * @param bool $durationRequiredInd
     * @param bool $stockControlledInd
     * @param string $maximumOccupancy
     */
    public function __construct(array $criterion = array(), $minimumAge = null, $maximumAge = null, $yearsExperience = null, $dateRequiredInd = null, $durationRequiredInd = null, $stockControlledInd = null, $maximumOccupancy = null)
    {
        $this
            ->setCriterion($criterion)
            ->setMinimumAge($minimumAge)
            ->setMaximumAge($maximumAge)
            ->setYearsExperience($yearsExperience)
            ->setDateRequiredInd($dateRequiredInd)
            ->setDurationRequiredInd($durationRequiredInd)
            ->setStockControlledInd($stockControlledInd)
            ->setMaximumOccupancy($maximumOccupancy);
    }
    /**
     * Get Criterion value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType[]|null
     */
    public function getCriterion()
    {
        return $this->Criterion;
    }
    /**
     * Set Criterion value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType[] $criterion
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function setCriterion(array $criterion = array())
    {
        foreach ($criterion as $criteriaCriterionItem) {
            // validation for constraint: itemType
            if (!$criteriaCriterionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType) {
                throw new \InvalidArgumentException(sprintf('The Criterion property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType, "%s" given', is_object($criteriaCriterionItem) ? get_class($criteriaCriterionItem) : gettype($criteriaCriterionItem)), __LINE__);
            }
        }
        $this->Criterion = $criterion;
        return $this;
    }
    /**
     * Add item to Criterion value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function addToCriterion(\Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType) {
            throw new \InvalidArgumentException(sprintf('The Criterion property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Criterion[] = $item;
        return $this;
    }
    /**
     * Get MinimumAge value
     * @return int|null
     */
    public function getMinimumAge()
    {
        return $this->MinimumAge;
    }
    /**
     * Set MinimumAge value
     * @param int $minimumAge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function setMinimumAge($minimumAge = null)
    {
        // validation for constraint: int
        if (!is_null($minimumAge) && !is_numeric($minimumAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumAge)), __LINE__);
        }
        $this->MinimumAge = $minimumAge;
        return $this;
    }
    /**
     * Get MaximumAge value
     * @return int|null
     */
    public function getMaximumAge()
    {
        return $this->MaximumAge;
    }
    /**
     * Set MaximumAge value
     * @param int $maximumAge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function setMaximumAge($maximumAge = null)
    {
        // validation for constraint: int
        if (!is_null($maximumAge) && !is_numeric($maximumAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumAge)), __LINE__);
        }
        $this->MaximumAge = $maximumAge;
        return $this;
    }
    /**
     * Get YearsExperience value
     * @return int|null
     */
    public function getYearsExperience()
    {
        return $this->YearsExperience;
    }
    /**
     * Set YearsExperience value
     * @param int $yearsExperience
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function setYearsExperience($yearsExperience = null)
    {
        // validation for constraint: int
        if (!is_null($yearsExperience) && !is_numeric($yearsExperience)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($yearsExperience)), __LINE__);
        }
        $this->YearsExperience = $yearsExperience;
        return $this;
    }
    /**
     * Get DateRequiredInd value
     * @return bool|null
     */
    public function getDateRequiredInd()
    {
        return $this->DateRequiredInd;
    }
    /**
     * Set DateRequiredInd value
     * @param bool $dateRequiredInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function setDateRequiredInd($dateRequiredInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($dateRequiredInd) && !is_bool($dateRequiredInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dateRequiredInd)), __LINE__);
        }
        $this->DateRequiredInd = $dateRequiredInd;
        return $this;
    }
    /**
     * Get DurationRequiredInd value
     * @return bool|null
     */
    public function getDurationRequiredInd()
    {
        return $this->DurationRequiredInd;
    }
    /**
     * Set DurationRequiredInd value
     * @param bool $durationRequiredInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function setDurationRequiredInd($durationRequiredInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($durationRequiredInd) && !is_bool($durationRequiredInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($durationRequiredInd)), __LINE__);
        }
        $this->DurationRequiredInd = $durationRequiredInd;
        return $this;
    }
    /**
     * Get StockControlledInd value
     * @return bool|null
     */
    public function getStockControlledInd()
    {
        return $this->StockControlledInd;
    }
    /**
     * Set StockControlledInd value
     * @param bool $stockControlledInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function setStockControlledInd($stockControlledInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($stockControlledInd) && !is_bool($stockControlledInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($stockControlledInd)), __LINE__);
        }
        $this->StockControlledInd = $stockControlledInd;
        return $this;
    }
    /**
     * Get MaximumOccupancy value
     * @return string|null
     */
    public function getMaximumOccupancy()
    {
        return $this->MaximumOccupancy;
    }
    /**
     * Set MaximumOccupancy value
     * @param string $maximumOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function setMaximumOccupancy($maximumOccupancy = null)
    {
        // validation for constraint: string
        if (!is_null($maximumOccupancy) && !is_string($maximumOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumOccupancy)), __LINE__);
        }
        $this->MaximumOccupancy = $maximumOccupancy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
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

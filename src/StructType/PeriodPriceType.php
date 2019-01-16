<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeriodPriceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides dates and times of availability together with duration and prices. The Duration attribite defines the period for which a charge applies, e.g. P1D = per day, P1N = per night, P7D = per week etc. If this attribute is not
 * present, the period is assumed to be the duration of the booking.
 * @subpackage Structs
 */
class PeriodPriceType extends OperationScheduleType
{
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - documentation: Provides a price for an extra by booking/rental period whihch may also be at passenger type/age-level.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Price;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: (Reference Place Holder) - an index code to identify an instance in a collection of like items.. For example, used to assign individual passengers or clients to particular itinerary items.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Category;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The DurationPeriod
     * Meta informations extracted from the WSDL
     * - documentation: Defines the period for which a charge applies, e.g. P1D = per day, P1N = per night, P7D = per week etc. If this attribute is not present, the period is assumed to be the duration of the booking.
     * - use: optional
     * @var string
     */
    public $DurationPeriod;
    /**
     * The PriceBasis
     * Meta informations extracted from the WSDL
     * - documentation: An enumerated type that defines how a service is priced. Values: Per stay, Per person, Per night, Per person per night, Per use.
     * - use: optional
     * @var string
     */
    public $PriceBasis;
    /**
     * The BasePeriodRPHs
     * Meta informations extracted from the WSDL
     * - documentation: Use with an 'AddOn' DurationPeriod to point to the 'Base' DurationPeriod(s) which it extends.
     * - use: optional
     * @var string
     */
    public $BasePeriodRPHs;
    /**
     * The GuidePriceIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When 'true', the accompanying price(s) are guidelines; full pricing will be returned when the Extra is selected in a Quick Cost message. When 'false', an accurate costing can be calculated from the price(s) given. When this attribute
     * is absent, accurate prices will be assumed.
     * - use: optional
     * @var bool
     */
    public $GuidePriceIndicator;
    /**
     * The MaximumPeriod
     * Meta informations extracted from the WSDL
     * - documentation: The maximum period for which the associated service is bookable.
     * - use: optional
     * @var string
     */
    public $MaximumPeriod;
    /**
     * Constructor method for PeriodPriceType
     * @uses PeriodPriceType::setPrice()
     * @uses PeriodPriceType::setRPH()
     * @uses PeriodPriceType::setCategory()
     * @uses PeriodPriceType::setType()
     * @uses PeriodPriceType::setDurationPeriod()
     * @uses PeriodPriceType::setPriceBasis()
     * @uses PeriodPriceType::setBasePeriodRPHs()
     * @uses PeriodPriceType::setGuidePriceIndicator()
     * @uses PeriodPriceType::setMaximumPeriod()
     * @param mixed[] $price
     * @param string $rPH
     * @param string $category
     * @param string $type
     * @param string $durationPeriod
     * @param string $priceBasis
     * @param string $basePeriodRPHs
     * @param bool $guidePriceIndicator
     * @param string $maximumPeriod
     */
    public function __construct(array $price = array(), $rPH = null, $category = null, $type = null, $durationPeriod = null, $priceBasis = null, $basePeriodRPHs = null, $guidePriceIndicator = null, $maximumPeriod = null)
    {
        $this
            ->setPrice($price)
            ->setRPH($rPH)
            ->setCategory($category)
            ->setType($type)
            ->setDurationPeriod($durationPeriod)
            ->setPriceBasis($priceBasis)
            ->setBasePeriodRPHs($basePeriodRPHs)
            ->setGuidePriceIndicator($guidePriceIndicator)
            ->setMaximumPeriod($maximumPeriod);
    }
    /**
     * Get Price value
     * @return mixed[]|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @throws \InvalidArgumentException
     * @param mixed[] $price
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
     */
    public function setPrice(array $price = array())
    {
        foreach ($price as $periodPriceTypePriceItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Price property can only contain items of anyType, "%s" given', is_object($periodPriceTypePriceItem) ? get_class($periodPriceTypePriceItem) : gettype($periodPriceTypePriceItem)), __LINE__);
            }
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Add item to Price value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
     */
    public function addToPrice($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Price property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Price[] = $item;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->Category = $category;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
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
     * Get DurationPeriod value
     * @return string|null
     */
    public function getDurationPeriod()
    {
        return $this->DurationPeriod;
    }
    /**
     * Set DurationPeriod value
     * @param string $durationPeriod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
     */
    public function setDurationPeriod($durationPeriod = null)
    {
        // validation for constraint: string
        if (!is_null($durationPeriod) && !is_string($durationPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($durationPeriod)), __LINE__);
        }
        $this->DurationPeriod = $durationPeriod;
        return $this;
    }
    /**
     * Get PriceBasis value
     * @return string|null
     */
    public function getPriceBasis()
    {
        return $this->PriceBasis;
    }
    /**
     * Set PriceBasis value
     * @param string $priceBasis
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
     */
    public function setPriceBasis($priceBasis = null)
    {
        // validation for constraint: string
        if (!is_null($priceBasis) && !is_string($priceBasis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priceBasis)), __LINE__);
        }
        $this->PriceBasis = $priceBasis;
        return $this;
    }
    /**
     * Get BasePeriodRPHs value
     * @return string|null
     */
    public function getBasePeriodRPHs()
    {
        return $this->BasePeriodRPHs;
    }
    /**
     * Set BasePeriodRPHs value
     * @param string $basePeriodRPHs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
     */
    public function setBasePeriodRPHs($basePeriodRPHs = null)
    {
        // validation for constraint: string
        if (!is_null($basePeriodRPHs) && !is_string($basePeriodRPHs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($basePeriodRPHs)), __LINE__);
        }
        $this->BasePeriodRPHs = $basePeriodRPHs;
        return $this;
    }
    /**
     * Get GuidePriceIndicator value
     * @return bool|null
     */
    public function getGuidePriceIndicator()
    {
        return $this->GuidePriceIndicator;
    }
    /**
     * Set GuidePriceIndicator value
     * @param bool $guidePriceIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
     */
    public function setGuidePriceIndicator($guidePriceIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($guidePriceIndicator) && !is_bool($guidePriceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guidePriceIndicator)), __LINE__);
        }
        $this->GuidePriceIndicator = $guidePriceIndicator;
        return $this;
    }
    /**
     * Get MaximumPeriod value
     * @return string|null
     */
    public function getMaximumPeriod()
    {
        return $this->MaximumPeriod;
    }
    /**
     * Set MaximumPeriod value
     * @param string $maximumPeriod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
     */
    public function setMaximumPeriod($maximumPeriod = null)
    {
        // validation for constraint: string
        if (!is_null($maximumPeriod) && !is_string($maximumPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumPeriod)), __LINE__);
        }
        $this->MaximumPeriod = $maximumPeriod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PeriodPriceType
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

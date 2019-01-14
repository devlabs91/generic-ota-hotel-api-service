<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccommodationSegment StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines an accommodation component of a package holiday.
 * @subpackage Structs
 */
class AccommodationSegment extends AbstractStructBase
{
    /**
     * The Identity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Identity;
    /**
     * The DateRange
     * @var mixed
     */
    public $DateRange;
    /**
     * The RoomProfiles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles
     */
    public $RoomProfiles;
    /**
     * The MealPlans
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MealPlans
     */
    public $MealPlans;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The ResortName
     * Meta informations extracted from the WSDL
     * - documentation: Describes the resort or area containing a property.
     * - use: optional
     * @var string
     */
    public $ResortName;
    /**
     * Constructor method for AccommodationSegment
     * @uses AccommodationSegment::setIdentity()
     * @uses AccommodationSegment::setDateRange()
     * @uses AccommodationSegment::setRoomProfiles()
     * @uses AccommodationSegment::setMealPlans()
     * @uses AccommodationSegment::setRPH()
     * @uses AccommodationSegment::setResortName()
     * @param mixed $identity
     * @param mixed $dateRange
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles $roomProfiles
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MealPlans $mealPlans
     * @param string $rPH
     * @param string $resortName
     */
    public function __construct($identity = null, $dateRange = null, \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles $roomProfiles = null, \Devlabs91\GenericOtaHotelApiService\StructType\MealPlans $mealPlans = null, $rPH = null, $resortName = null)
    {
        $this
            ->setIdentity($identity)
            ->setDateRange($dateRange)
            ->setRoomProfiles($roomProfiles)
            ->setMealPlans($mealPlans)
            ->setRPH($rPH)
            ->setResortName($resortName);
    }
    /**
     * Get Identity value
     * @return mixed|null
     */
    public function getIdentity()
    {
        return $this->Identity;
    }
    /**
     * Set Identity value
     * @param mixed $identity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegment
     */
    public function setIdentity($identity = null)
    {
        $this->Identity = $identity;
        return $this;
    }
    /**
     * Get DateRange value
     * @return mixed|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param mixed $dateRange
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegment
     */
    public function setDateRange($dateRange = null)
    {
        $this->DateRange = $dateRange;
        return $this;
    }
    /**
     * Get RoomProfiles value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles|null
     */
    public function getRoomProfiles()
    {
        return $this->RoomProfiles;
    }
    /**
     * Set RoomProfiles value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles $roomProfiles
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegment
     */
    public function setRoomProfiles(\Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles $roomProfiles = null)
    {
        $this->RoomProfiles = $roomProfiles;
        return $this;
    }
    /**
     * Get MealPlans value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealPlans|null
     */
    public function getMealPlans()
    {
        return $this->MealPlans;
    }
    /**
     * Set MealPlans value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MealPlans $mealPlans
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegment
     */
    public function setMealPlans(\Devlabs91\GenericOtaHotelApiService\StructType\MealPlans $mealPlans = null)
    {
        $this->MealPlans = $mealPlans;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegment
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
     * Get ResortName value
     * @return string|null
     */
    public function getResortName()
    {
        return $this->ResortName;
    }
    /**
     * Set ResortName value
     * @param string $resortName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegment
     */
    public function setResortName($resortName = null)
    {
        // validation for constraint: string
        if (!is_null($resortName) && !is_string($resortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resortName)), __LINE__);
        }
        $this->ResortName = $resortName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegment
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Accommodation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines an accommodation component of a package holiday. | Identifies the parent of the Resort. The geo-political position of the destination (e.g. country) is determined by the DestinationLevel attribute.
 * @subpackage Structs
 */
class Accommodation extends AbstractStructBase
{
    /**
     * The Identity
     * Meta informations extracted from the WSDL
     * - documentation: Full name or description plus codes for a property.
     * - minOccurs: 0
     * @var mixed
     */
    public $Identity;
    /**
     * The AccommodationClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass
     */
    public $AccommodationClass;
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - documentation: The Start date and Duration or End Date of the accommodation stay.
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
     * - documentation: (Reference Place Holder) - an index code to identify an instance in a collection of like items. For example, used to assign individual passengers or clients to particular itinerary items.
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
     * The ResortCode
     * Meta informations extracted from the WSDL
     * - documentation: The code for the resort or area containing a property.
     * - use: optional
     * @var string
     */
    public $ResortCode;
    /**
     * Constructor method for Accommodation
     * @uses Accommodation::setIdentity()
     * @uses Accommodation::setAccommodationClass()
     * @uses Accommodation::setDateRange()
     * @uses Accommodation::setRoomProfiles()
     * @uses Accommodation::setMealPlans()
     * @uses Accommodation::setRPH()
     * @uses Accommodation::setResortName()
     * @uses Accommodation::setResortCode()
     * @param mixed $identity
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass $accommodationClass
     * @param mixed $dateRange
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles $roomProfiles
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MealPlans $mealPlans
     * @param string $rPH
     * @param string $resortName
     * @param string $resortCode
     */
    public function __construct($identity = null, \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass $accommodationClass = null, $dateRange = null, \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles $roomProfiles = null, \Devlabs91\GenericOtaHotelApiService\StructType\MealPlans $mealPlans = null, $rPH = null, $resortName = null, $resortCode = null)
    {
        $this
            ->setIdentity($identity)
            ->setAccommodationClass($accommodationClass)
            ->setDateRange($dateRange)
            ->setRoomProfiles($roomProfiles)
            ->setMealPlans($mealPlans)
            ->setRPH($rPH)
            ->setResortName($resortName)
            ->setResortCode($resortCode);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Accommodation
     */
    public function setIdentity($identity = null)
    {
        $this->Identity = $identity;
        return $this;
    }
    /**
     * Get AccommodationClass value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass|null
     */
    public function getAccommodationClass()
    {
        return $this->AccommodationClass;
    }
    /**
     * Set AccommodationClass value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass $accommodationClass
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Accommodation
     */
    public function setAccommodationClass(\Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClass $accommodationClass = null)
    {
        $this->AccommodationClass = $accommodationClass;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Accommodation
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Accommodation
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Accommodation
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Accommodation
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Accommodation
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
     * Get ResortCode value
     * @return string|null
     */
    public function getResortCode()
    {
        return $this->ResortCode;
    }
    /**
     * Set ResortCode value
     * @param string $resortCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Accommodation
     */
    public function setResortCode($resortCode = null)
    {
        // validation for constraint: string
        if (!is_null($resortCode) && !is_string($resortCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resortCode)), __LINE__);
        }
        $this->ResortCode = $resortCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Accommodation
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

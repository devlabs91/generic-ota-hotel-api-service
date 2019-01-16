<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccommodationSegmentRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the required accommodation component of a package holiday. | Identifies the parent of the Resort. The geo-political position of the destination (e.g. country) is determined by the DestinationLevel attribute. | Identifies a
 * resort by code or name.
 * @subpackage Structs
 */
class AccommodationSegmentRequestType extends AbstractStructBase
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
     * Constructor method for AccommodationSegmentRequestType
     * @uses AccommodationSegmentRequestType::setIdentity()
     * @uses AccommodationSegmentRequestType::setDateRange()
     * @uses AccommodationSegmentRequestType::setRoomProfiles()
     * @uses AccommodationSegmentRequestType::setMealPlans()
     * @uses AccommodationSegmentRequestType::setRPH()
     * @param mixed $identity
     * @param mixed $dateRange
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles $roomProfiles
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MealPlans $mealPlans
     * @param string $rPH
     */
    public function __construct($identity = null, $dateRange = null, \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles $roomProfiles = null, \Devlabs91\GenericOtaHotelApiService\StructType\MealPlans $mealPlans = null, $rPH = null)
    {
        $this
            ->setIdentity($identity)
            ->setDateRange($dateRange)
            ->setRoomProfiles($roomProfiles)
            ->setMealPlans($mealPlans)
            ->setRPH($rPH);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegmentRequestType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegmentRequestType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegmentRequestType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegmentRequestType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegmentRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationSegmentRequestType
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

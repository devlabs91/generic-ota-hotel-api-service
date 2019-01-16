<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Availability StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information on the availability of the room rate. | Details on the hotel stay including the type of availabilty and the date range for which it applies. | The time span during which the availability applies.
 * @subpackage Structs
 */
class Availability extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify an availability status at the Hotel Stay level for a property.
     * - use: required
     * @var string
     */
    public $Status;
    /**
     * The AvailabilityStatus
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify an availability status for the room rate.
     * - use: optional
     * @var string
     */
    public $AvailabilityStatus;
    /**
     * The Restriction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var string[]
     */
    public $Restriction;
    /**
     * The Start
     * @var string
     */
    public $Start;
    /**
     * The Duration
     * @var string
     */
    public $Duration;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * Constructor method for Availability
     * @uses Availability::setStatus()
     * @uses Availability::setAvailabilityStatus()
     * @uses Availability::setRestriction()
     * @uses Availability::setStart()
     * @uses Availability::setDuration()
     * @uses Availability::setEnd()
     * @param string $status
     * @param string $availabilityStatus
     * @param string[] $restriction
     * @param string $start
     * @param string $duration
     * @param string $end
     */
    public function __construct($status = null, $availabilityStatus = null, array $restriction = array(), $start = null, $duration = null, $end = null)
    {
        $this
            ->setStatus($status)
            ->setAvailabilityStatus($availabilityStatus)
            ->setRestriction($restriction)
            ->setStart($start)
            ->setDuration($duration)
            ->setEnd($end);
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\AvailabilityStatusType::valueIsValid()
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\AvailabilityStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Availability
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\GenericOtaHotelApiService\EnumType\AvailabilityStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Devlabs91\GenericOtaHotelApiService\EnumType\AvailabilityStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get AvailabilityStatus value
     * @return string|null
     */
    public function getAvailabilityStatus()
    {
        return $this->AvailabilityStatus;
    }
    /**
     * Set AvailabilityStatus value
     * @param string $availabilityStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Availability
     */
    public function setAvailabilityStatus($availabilityStatus = null)
    {
        // validation for constraint: string
        if (!is_null($availabilityStatus) && !is_string($availabilityStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availabilityStatus)), __LINE__);
        }
        $this->AvailabilityStatus = $availabilityStatus;
        return $this;
    }
    /**
     * Get Restriction value
     * @return string[]|null
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Restriction::valueIsValid()
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Restriction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $restriction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Availability
     */
    public function setRestriction(array $restriction = array())
    {
        $invalidValues = array();
        foreach ($restriction as $availabilityRestrictionItem) {
            if (!\Devlabs91\GenericOtaHotelApiService\EnumType\Restriction::valueIsValid($availabilityRestrictionItem)) {
                $invalidValues[] = var_export($availabilityRestrictionItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Devlabs91\GenericOtaHotelApiService\EnumType\Restriction::getValidValues())), __LINE__);
        }
        $this->Restriction = $restriction;
        return $this;
    }
    /**
     * Add item to Restriction value
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Restriction::valueIsValid()
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Restriction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Availability
     */
    public function addToRestriction($item)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\GenericOtaHotelApiService\EnumType\Restriction::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Devlabs91\GenericOtaHotelApiService\EnumType\Restriction::getValidValues())), __LINE__);
        }
        $this->Restriction[] = $item;
        return $this;
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Availability
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Availability
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Availability
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Availability
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRestrictions StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on restrictions that may be associated with this rate. Additional details on rate restrictions may be found in OTA_VehRateRulesRS.xsd.
 * @subpackage Structs
 */
class RateRestrictions extends AbstractStructBase
{
    /**
     * The ArriveByFlight
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if this rate is only available to those customers who are flying to the vehicle rental location. | false
     * - use: optional
     * @var bool
     */
    public $ArriveByFlight;
    /**
     * The MinimumDayInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, there is a minimum day requirement.
     * - use: optional
     * @var bool
     */
    public $MinimumDayInd;
    /**
     * The MaximumDayInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, there is a maximum day requirement restriction.
     * - use: optional
     * @var bool
     */
    public $MaximumDayInd;
    /**
     * The AdvancedBookingInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, this rate requires advanced booking.
     * - use: optional
     * @var bool
     */
    public $AdvancedBookingInd;
    /**
     * The RestrictedMileageInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the mileage is restricted.
     * - use: optional
     * @var bool
     */
    public $RestrictedMileageInd;
    /**
     * The CorporateRateInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, this is a negotiated corporate rate.
     * - use: optional
     * @var bool
     */
    public $CorporateRateInd;
    /**
     * The GuaranteeReqInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, a guarantee is required.
     * - use: optional
     * @var bool
     */
    public $GuaranteeReqInd;
    /**
     * The MaximumVehiclesAllowed
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of vehicles that can be rented at this rate.
     * - use: optional
     * @var string
     */
    public $MaximumVehiclesAllowed;
    /**
     * The OvernightInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, an overnight rental is required.
     * - use: optional
     * @var bool
     */
    public $OvernightInd;
    /**
     * The OneWayPolicy
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $OneWayPolicy;
    /**
     * The CancellationPenaltyInd
     * Meta informations extracted from the WSDL
     * - documentation: When true indicates a fee applies if a cancellation is requested.
     * - use: optional
     * @var bool
     */
    public $CancellationPenaltyInd;
    /**
     * The ModificationPenaltyInd
     * Meta informations extracted from the WSDL
     * - documentation: When true indicates a fee applies if a modification is requested.
     * - use: optional
     * @var bool
     */
    public $ModificationPenaltyInd;
    /**
     * The MinimumAge
     * Meta informations extracted from the WSDL
     * - documentation: The minimum age for a driver to rent this vehicle at this rate.
     * @var string
     */
    public $MinimumAge;
    /**
     * Constructor method for RateRestrictions
     * @uses RateRestrictions::setArriveByFlight()
     * @uses RateRestrictions::setMinimumDayInd()
     * @uses RateRestrictions::setMaximumDayInd()
     * @uses RateRestrictions::setAdvancedBookingInd()
     * @uses RateRestrictions::setRestrictedMileageInd()
     * @uses RateRestrictions::setCorporateRateInd()
     * @uses RateRestrictions::setGuaranteeReqInd()
     * @uses RateRestrictions::setMaximumVehiclesAllowed()
     * @uses RateRestrictions::setOvernightInd()
     * @uses RateRestrictions::setOneWayPolicy()
     * @uses RateRestrictions::setCancellationPenaltyInd()
     * @uses RateRestrictions::setModificationPenaltyInd()
     * @uses RateRestrictions::setMinimumAge()
     * @param bool $arriveByFlight
     * @param bool $minimumDayInd
     * @param bool $maximumDayInd
     * @param bool $advancedBookingInd
     * @param bool $restrictedMileageInd
     * @param bool $corporateRateInd
     * @param bool $guaranteeReqInd
     * @param string $maximumVehiclesAllowed
     * @param bool $overnightInd
     * @param string $oneWayPolicy
     * @param bool $cancellationPenaltyInd
     * @param bool $modificationPenaltyInd
     * @param string $minimumAge
     */
    public function __construct($arriveByFlight = null, $minimumDayInd = null, $maximumDayInd = null, $advancedBookingInd = null, $restrictedMileageInd = null, $corporateRateInd = null, $guaranteeReqInd = null, $maximumVehiclesAllowed = null, $overnightInd = null, $oneWayPolicy = null, $cancellationPenaltyInd = null, $modificationPenaltyInd = null, $minimumAge = null)
    {
        $this
            ->setArriveByFlight($arriveByFlight)
            ->setMinimumDayInd($minimumDayInd)
            ->setMaximumDayInd($maximumDayInd)
            ->setAdvancedBookingInd($advancedBookingInd)
            ->setRestrictedMileageInd($restrictedMileageInd)
            ->setCorporateRateInd($corporateRateInd)
            ->setGuaranteeReqInd($guaranteeReqInd)
            ->setMaximumVehiclesAllowed($maximumVehiclesAllowed)
            ->setOvernightInd($overnightInd)
            ->setOneWayPolicy($oneWayPolicy)
            ->setCancellationPenaltyInd($cancellationPenaltyInd)
            ->setModificationPenaltyInd($modificationPenaltyInd)
            ->setMinimumAge($minimumAge);
    }
    /**
     * Get ArriveByFlight value
     * @return bool|null
     */
    public function getArriveByFlight()
    {
        return $this->ArriveByFlight;
    }
    /**
     * Set ArriveByFlight value
     * @param bool $arriveByFlight
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setArriveByFlight($arriveByFlight = null)
    {
        // validation for constraint: boolean
        if (!is_null($arriveByFlight) && !is_bool($arriveByFlight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($arriveByFlight)), __LINE__);
        }
        $this->ArriveByFlight = $arriveByFlight;
        return $this;
    }
    /**
     * Get MinimumDayInd value
     * @return bool|null
     */
    public function getMinimumDayInd()
    {
        return $this->MinimumDayInd;
    }
    /**
     * Set MinimumDayInd value
     * @param bool $minimumDayInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setMinimumDayInd($minimumDayInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($minimumDayInd) && !is_bool($minimumDayInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($minimumDayInd)), __LINE__);
        }
        $this->MinimumDayInd = $minimumDayInd;
        return $this;
    }
    /**
     * Get MaximumDayInd value
     * @return bool|null
     */
    public function getMaximumDayInd()
    {
        return $this->MaximumDayInd;
    }
    /**
     * Set MaximumDayInd value
     * @param bool $maximumDayInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setMaximumDayInd($maximumDayInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($maximumDayInd) && !is_bool($maximumDayInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($maximumDayInd)), __LINE__);
        }
        $this->MaximumDayInd = $maximumDayInd;
        return $this;
    }
    /**
     * Get AdvancedBookingInd value
     * @return bool|null
     */
    public function getAdvancedBookingInd()
    {
        return $this->AdvancedBookingInd;
    }
    /**
     * Set AdvancedBookingInd value
     * @param bool $advancedBookingInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setAdvancedBookingInd($advancedBookingInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($advancedBookingInd) && !is_bool($advancedBookingInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($advancedBookingInd)), __LINE__);
        }
        $this->AdvancedBookingInd = $advancedBookingInd;
        return $this;
    }
    /**
     * Get RestrictedMileageInd value
     * @return bool|null
     */
    public function getRestrictedMileageInd()
    {
        return $this->RestrictedMileageInd;
    }
    /**
     * Set RestrictedMileageInd value
     * @param bool $restrictedMileageInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setRestrictedMileageInd($restrictedMileageInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($restrictedMileageInd) && !is_bool($restrictedMileageInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($restrictedMileageInd)), __LINE__);
        }
        $this->RestrictedMileageInd = $restrictedMileageInd;
        return $this;
    }
    /**
     * Get CorporateRateInd value
     * @return bool|null
     */
    public function getCorporateRateInd()
    {
        return $this->CorporateRateInd;
    }
    /**
     * Set CorporateRateInd value
     * @param bool $corporateRateInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setCorporateRateInd($corporateRateInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($corporateRateInd) && !is_bool($corporateRateInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($corporateRateInd)), __LINE__);
        }
        $this->CorporateRateInd = $corporateRateInd;
        return $this;
    }
    /**
     * Get GuaranteeReqInd value
     * @return bool|null
     */
    public function getGuaranteeReqInd()
    {
        return $this->GuaranteeReqInd;
    }
    /**
     * Set GuaranteeReqInd value
     * @param bool $guaranteeReqInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setGuaranteeReqInd($guaranteeReqInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteeReqInd) && !is_bool($guaranteeReqInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteeReqInd)), __LINE__);
        }
        $this->GuaranteeReqInd = $guaranteeReqInd;
        return $this;
    }
    /**
     * Get MaximumVehiclesAllowed value
     * @return string|null
     */
    public function getMaximumVehiclesAllowed()
    {
        return $this->MaximumVehiclesAllowed;
    }
    /**
     * Set MaximumVehiclesAllowed value
     * @param string $maximumVehiclesAllowed
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setMaximumVehiclesAllowed($maximumVehiclesAllowed = null)
    {
        // validation for constraint: string
        if (!is_null($maximumVehiclesAllowed) && !is_string($maximumVehiclesAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumVehiclesAllowed)), __LINE__);
        }
        $this->MaximumVehiclesAllowed = $maximumVehiclesAllowed;
        return $this;
    }
    /**
     * Get OvernightInd value
     * @return bool|null
     */
    public function getOvernightInd()
    {
        return $this->OvernightInd;
    }
    /**
     * Set OvernightInd value
     * @param bool $overnightInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setOvernightInd($overnightInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($overnightInd) && !is_bool($overnightInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overnightInd)), __LINE__);
        }
        $this->OvernightInd = $overnightInd;
        return $this;
    }
    /**
     * Get OneWayPolicy value
     * @return string|null
     */
    public function getOneWayPolicy()
    {
        return $this->OneWayPolicy;
    }
    /**
     * Set OneWayPolicy value
     * @param string $oneWayPolicy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setOneWayPolicy($oneWayPolicy = null)
    {
        // validation for constraint: string
        if (!is_null($oneWayPolicy) && !is_string($oneWayPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oneWayPolicy)), __LINE__);
        }
        $this->OneWayPolicy = $oneWayPolicy;
        return $this;
    }
    /**
     * Get CancellationPenaltyInd value
     * @return bool|null
     */
    public function getCancellationPenaltyInd()
    {
        return $this->CancellationPenaltyInd;
    }
    /**
     * Set CancellationPenaltyInd value
     * @param bool $cancellationPenaltyInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setCancellationPenaltyInd($cancellationPenaltyInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($cancellationPenaltyInd) && !is_bool($cancellationPenaltyInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cancellationPenaltyInd)), __LINE__);
        }
        $this->CancellationPenaltyInd = $cancellationPenaltyInd;
        return $this;
    }
    /**
     * Get ModificationPenaltyInd value
     * @return bool|null
     */
    public function getModificationPenaltyInd()
    {
        return $this->ModificationPenaltyInd;
    }
    /**
     * Set ModificationPenaltyInd value
     * @param bool $modificationPenaltyInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setModificationPenaltyInd($modificationPenaltyInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($modificationPenaltyInd) && !is_bool($modificationPenaltyInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($modificationPenaltyInd)), __LINE__);
        }
        $this->ModificationPenaltyInd = $modificationPenaltyInd;
        return $this;
    }
    /**
     * Get MinimumAge value
     * @return string|null
     */
    public function getMinimumAge()
    {
        return $this->MinimumAge;
    }
    /**
     * Set MinimumAge value
     * @param string $minimumAge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setMinimumAge($minimumAge = null)
    {
        // validation for constraint: string
        if (!is_null($minimumAge) && !is_string($minimumAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minimumAge)), __LINE__);
        }
        $this->MinimumAge = $minimumAge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
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

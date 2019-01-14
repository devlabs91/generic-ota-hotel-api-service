<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ship StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the ship details.
 * @subpackage Structs
 */
class Ship extends AbstractStructBase
{
    /**
     * The StabilizedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, the ship is stabilized.
     * - use: optional
     * @var bool
     */
    public $StabilizedIndicator;
    /**
     * The RegistrationCountryCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the country of registration.
     * - use: optional
     * @var string
     */
    public $RegistrationCountryCode;
    /**
     * The RestaurantQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of restaurants.
     * - use: optional
     * @var int
     */
    public $RestaurantQuantity;
    /**
     * The ElevatorQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of elevators.
     * - use: optional
     * @var int
     */
    public $ElevatorQuantity;
    /**
     * The MaxCrewQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of crew.
     * - use: optional
     * @var int
     */
    public $MaxCrewQuantity;
    /**
     * The MaxGuestQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of guests.
     * - use: optional
     * @var int
     */
    public $MaxGuestQuantity;
    /**
     * The CruisingSpeed
     * Meta informations extracted from the WSDL
     * - documentation: The ship cruising speed in knots.
     * - use: optional
     * @var float
     */
    public $CruisingSpeed;
    /**
     * The MaxSpeed
     * Meta informations extracted from the WSDL
     * - documentation: The maximum ship speed in knots.
     * - use: optional
     * @var float
     */
    public $MaxSpeed;
    /**
     * The InsideCabinQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of interior cabins.
     * - use: optional
     * @var int
     */
    public $InsideCabinQuantity;
    /**
     * The OutsideCabinQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of exterior cabins.
     * - use: optional
     * @var int
     */
    public $OutsideCabinQuantity;
    /**
     * The InauguralDate
     * Meta informations extracted from the WSDL
     * - documentation: The date of the ship's first voyage.
     * - use: optional
     * @var string
     */
    public $InauguralDate;
    /**
     * The RefurbishedDate
     * Meta informations extracted from the WSDL
     * - documentation: Date the ship was last refurbished.
     * - use: optional
     * @var string
     */
    public $RefurbishedDate;
    /**
     * The BuiltDate
     * Meta informations extracted from the WSDL
     * - documentation: The date the ship was built or delivered to the cruiseline.
     * - use: optional
     * @var string
     */
    public $BuiltDate;
    /**
     * The NextRefurbishDate
     * Meta informations extracted from the WSDL
     * - documentation: This is the date the ship is next scheduled to be refurbished.
     * - use: optional
     * @var string
     */
    public $NextRefurbishDate;
    /**
     * Constructor method for Ship
     * @uses Ship::setStabilizedIndicator()
     * @uses Ship::setRegistrationCountryCode()
     * @uses Ship::setRestaurantQuantity()
     * @uses Ship::setElevatorQuantity()
     * @uses Ship::setMaxCrewQuantity()
     * @uses Ship::setMaxGuestQuantity()
     * @uses Ship::setCruisingSpeed()
     * @uses Ship::setMaxSpeed()
     * @uses Ship::setInsideCabinQuantity()
     * @uses Ship::setOutsideCabinQuantity()
     * @uses Ship::setInauguralDate()
     * @uses Ship::setRefurbishedDate()
     * @uses Ship::setBuiltDate()
     * @uses Ship::setNextRefurbishDate()
     * @param bool $stabilizedIndicator
     * @param string $registrationCountryCode
     * @param int $restaurantQuantity
     * @param int $elevatorQuantity
     * @param int $maxCrewQuantity
     * @param int $maxGuestQuantity
     * @param float $cruisingSpeed
     * @param float $maxSpeed
     * @param int $insideCabinQuantity
     * @param int $outsideCabinQuantity
     * @param string $inauguralDate
     * @param string $refurbishedDate
     * @param string $builtDate
     * @param string $nextRefurbishDate
     */
    public function __construct($stabilizedIndicator = null, $registrationCountryCode = null, $restaurantQuantity = null, $elevatorQuantity = null, $maxCrewQuantity = null, $maxGuestQuantity = null, $cruisingSpeed = null, $maxSpeed = null, $insideCabinQuantity = null, $outsideCabinQuantity = null, $inauguralDate = null, $refurbishedDate = null, $builtDate = null, $nextRefurbishDate = null)
    {
        $this
            ->setStabilizedIndicator($stabilizedIndicator)
            ->setRegistrationCountryCode($registrationCountryCode)
            ->setRestaurantQuantity($restaurantQuantity)
            ->setElevatorQuantity($elevatorQuantity)
            ->setMaxCrewQuantity($maxCrewQuantity)
            ->setMaxGuestQuantity($maxGuestQuantity)
            ->setCruisingSpeed($cruisingSpeed)
            ->setMaxSpeed($maxSpeed)
            ->setInsideCabinQuantity($insideCabinQuantity)
            ->setOutsideCabinQuantity($outsideCabinQuantity)
            ->setInauguralDate($inauguralDate)
            ->setRefurbishedDate($refurbishedDate)
            ->setBuiltDate($builtDate)
            ->setNextRefurbishDate($nextRefurbishDate);
    }
    /**
     * Get StabilizedIndicator value
     * @return bool|null
     */
    public function getStabilizedIndicator()
    {
        return $this->StabilizedIndicator;
    }
    /**
     * Set StabilizedIndicator value
     * @param bool $stabilizedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setStabilizedIndicator($stabilizedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($stabilizedIndicator) && !is_bool($stabilizedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($stabilizedIndicator)), __LINE__);
        }
        $this->StabilizedIndicator = $stabilizedIndicator;
        return $this;
    }
    /**
     * Get RegistrationCountryCode value
     * @return string|null
     */
    public function getRegistrationCountryCode()
    {
        return $this->RegistrationCountryCode;
    }
    /**
     * Set RegistrationCountryCode value
     * @param string $registrationCountryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setRegistrationCountryCode($registrationCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($registrationCountryCode) && !is_string($registrationCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registrationCountryCode)), __LINE__);
        }
        $this->RegistrationCountryCode = $registrationCountryCode;
        return $this;
    }
    /**
     * Get RestaurantQuantity value
     * @return int|null
     */
    public function getRestaurantQuantity()
    {
        return $this->RestaurantQuantity;
    }
    /**
     * Set RestaurantQuantity value
     * @param int $restaurantQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setRestaurantQuantity($restaurantQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($restaurantQuantity) && !is_numeric($restaurantQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($restaurantQuantity)), __LINE__);
        }
        $this->RestaurantQuantity = $restaurantQuantity;
        return $this;
    }
    /**
     * Get ElevatorQuantity value
     * @return int|null
     */
    public function getElevatorQuantity()
    {
        return $this->ElevatorQuantity;
    }
    /**
     * Set ElevatorQuantity value
     * @param int $elevatorQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setElevatorQuantity($elevatorQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($elevatorQuantity) && !is_numeric($elevatorQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($elevatorQuantity)), __LINE__);
        }
        $this->ElevatorQuantity = $elevatorQuantity;
        return $this;
    }
    /**
     * Get MaxCrewQuantity value
     * @return int|null
     */
    public function getMaxCrewQuantity()
    {
        return $this->MaxCrewQuantity;
    }
    /**
     * Set MaxCrewQuantity value
     * @param int $maxCrewQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setMaxCrewQuantity($maxCrewQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($maxCrewQuantity) && !is_numeric($maxCrewQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxCrewQuantity)), __LINE__);
        }
        $this->MaxCrewQuantity = $maxCrewQuantity;
        return $this;
    }
    /**
     * Get MaxGuestQuantity value
     * @return int|null
     */
    public function getMaxGuestQuantity()
    {
        return $this->MaxGuestQuantity;
    }
    /**
     * Set MaxGuestQuantity value
     * @param int $maxGuestQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setMaxGuestQuantity($maxGuestQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($maxGuestQuantity) && !is_numeric($maxGuestQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxGuestQuantity)), __LINE__);
        }
        $this->MaxGuestQuantity = $maxGuestQuantity;
        return $this;
    }
    /**
     * Get CruisingSpeed value
     * @return float|null
     */
    public function getCruisingSpeed()
    {
        return $this->CruisingSpeed;
    }
    /**
     * Set CruisingSpeed value
     * @param float $cruisingSpeed
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setCruisingSpeed($cruisingSpeed = null)
    {
        $this->CruisingSpeed = $cruisingSpeed;
        return $this;
    }
    /**
     * Get MaxSpeed value
     * @return float|null
     */
    public function getMaxSpeed()
    {
        return $this->MaxSpeed;
    }
    /**
     * Set MaxSpeed value
     * @param float $maxSpeed
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setMaxSpeed($maxSpeed = null)
    {
        $this->MaxSpeed = $maxSpeed;
        return $this;
    }
    /**
     * Get InsideCabinQuantity value
     * @return int|null
     */
    public function getInsideCabinQuantity()
    {
        return $this->InsideCabinQuantity;
    }
    /**
     * Set InsideCabinQuantity value
     * @param int $insideCabinQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setInsideCabinQuantity($insideCabinQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($insideCabinQuantity) && !is_numeric($insideCabinQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insideCabinQuantity)), __LINE__);
        }
        $this->InsideCabinQuantity = $insideCabinQuantity;
        return $this;
    }
    /**
     * Get OutsideCabinQuantity value
     * @return int|null
     */
    public function getOutsideCabinQuantity()
    {
        return $this->OutsideCabinQuantity;
    }
    /**
     * Set OutsideCabinQuantity value
     * @param int $outsideCabinQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setOutsideCabinQuantity($outsideCabinQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($outsideCabinQuantity) && !is_numeric($outsideCabinQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($outsideCabinQuantity)), __LINE__);
        }
        $this->OutsideCabinQuantity = $outsideCabinQuantity;
        return $this;
    }
    /**
     * Get InauguralDate value
     * @return string|null
     */
    public function getInauguralDate()
    {
        return $this->InauguralDate;
    }
    /**
     * Set InauguralDate value
     * @param string $inauguralDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setInauguralDate($inauguralDate = null)
    {
        // validation for constraint: string
        if (!is_null($inauguralDate) && !is_string($inauguralDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inauguralDate)), __LINE__);
        }
        $this->InauguralDate = $inauguralDate;
        return $this;
    }
    /**
     * Get RefurbishedDate value
     * @return string|null
     */
    public function getRefurbishedDate()
    {
        return $this->RefurbishedDate;
    }
    /**
     * Set RefurbishedDate value
     * @param string $refurbishedDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setRefurbishedDate($refurbishedDate = null)
    {
        // validation for constraint: string
        if (!is_null($refurbishedDate) && !is_string($refurbishedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refurbishedDate)), __LINE__);
        }
        $this->RefurbishedDate = $refurbishedDate;
        return $this;
    }
    /**
     * Get BuiltDate value
     * @return string|null
     */
    public function getBuiltDate()
    {
        return $this->BuiltDate;
    }
    /**
     * Set BuiltDate value
     * @param string $builtDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setBuiltDate($builtDate = null)
    {
        // validation for constraint: string
        if (!is_null($builtDate) && !is_string($builtDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($builtDate)), __LINE__);
        }
        $this->BuiltDate = $builtDate;
        return $this;
    }
    /**
     * Get NextRefurbishDate value
     * @return string|null
     */
    public function getNextRefurbishDate()
    {
        return $this->NextRefurbishDate;
    }
    /**
     * Set NextRefurbishDate value
     * @param string $nextRefurbishDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public function setNextRefurbishDate($nextRefurbishDate = null)
    {
        // validation for constraint: string
        if (!is_null($nextRefurbishDate) && !is_string($nextRefurbishDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nextRefurbishDate)), __LINE__);
        }
        $this->NextRefurbishDate = $nextRefurbishDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship
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

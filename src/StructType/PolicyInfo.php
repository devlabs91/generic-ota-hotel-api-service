<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyInfo StructType
 * @subpackage Structs
 */
class PolicyInfo extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional information regarding policy information.
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * The CheckInTime
     * Meta informations extracted from the WSDL
     * - documentation: The usual check-in time for the hotel.
     * - use: optional
     * @var string
     */
    public $CheckInTime;
    /**
     * The CheckOutTime
     * Meta informations extracted from the WSDL
     * - documentation: The usual check-out time for the hotel.
     * - use: optional
     * @var string
     */
    public $CheckOutTime;
    /**
     * The MinGuestAge
     * Meta informations extracted from the WSDL
     * - documentation: The minimum guest age allowed for a guest at the hotel facility.
     * - use: optional
     * @var int
     */
    public $MinGuestAge;
    /**
     * The MinRecommendedGuestAge
     * Meta informations extracted from the WSDL
     * - documentation: The minimum age recommended as a policy guideline for a guest at the hotel facility.
     * - use: optional
     * @var int
     */
    public $MinRecommendedGuestAge;
    /**
     * The UsualStayFreeCutoffAge
     * Meta informations extracted from the WSDL
     * - documentation: The usual age limit at which a child can stay free with an adult at the hotel facility. If this value is not set, then there is no cutoff limit.
     * - use: optional
     * @var int
     */
    public $UsualStayFreeCutoffAge;
    /**
     * The UsualStayFreeChildPerAdult
     * Meta informations extracted from the WSDL
     * - documentation: The usual number of children meeting the UsualStayFreeCutoffAge allowed to stay free with an adult at the hotel. If this value is not set, then there is no cutoff limit.
     * - use: optional
     * @var int
     */
    public $UsualStayFreeChildPerAdult;
    /**
     * The TotalGuestCount
     * Meta informations extracted from the WSDL
     * - documentation: The total guest count allowed in a room at the hotel.
     * - use: optional
     * @var int
     */
    public $TotalGuestCount;
    /**
     * The DefaultTaxServiceInclusive
     * Meta informations extracted from the WSDL
     * - documentation: Defines whether tax and service charge are included, by default, with this hotel's rates.
     * - use: optional
     * @var bool
     */
    public $DefaultTaxServiceInclusive;
    /**
     * The KidsStayFree
     * Meta informations extracted from the WSDL
     * - documentation: If true there is no charge for children.
     * - use: optional
     * @var bool
     */
    public $KidsStayFree;
    /**
     * The MaxChildAge
     * Meta informations extracted from the WSDL
     * - documentation: The maximum age for a child price.
     * - use: optional
     * @var string
     */
    public $MaxChildAge;
    /**
     * The InternetGuaranteeRequiredInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, a guarantee is required for an Internet booking. When false, a guarantee is not required for an Internet booking.
     * - use: optional
     * @var bool
     */
    public $InternetGuaranteeRequiredInd;
    /**
     * Constructor method for PolicyInfo
     * @uses PolicyInfo::setDescription()
     * @uses PolicyInfo::setCheckInTime()
     * @uses PolicyInfo::setCheckOutTime()
     * @uses PolicyInfo::setMinGuestAge()
     * @uses PolicyInfo::setMinRecommendedGuestAge()
     * @uses PolicyInfo::setUsualStayFreeCutoffAge()
     * @uses PolicyInfo::setUsualStayFreeChildPerAdult()
     * @uses PolicyInfo::setTotalGuestCount()
     * @uses PolicyInfo::setDefaultTaxServiceInclusive()
     * @uses PolicyInfo::setKidsStayFree()
     * @uses PolicyInfo::setMaxChildAge()
     * @uses PolicyInfo::setInternetGuaranteeRequiredInd()
     * @param mixed $description
     * @param string $checkInTime
     * @param string $checkOutTime
     * @param int $minGuestAge
     * @param int $minRecommendedGuestAge
     * @param int $usualStayFreeCutoffAge
     * @param int $usualStayFreeChildPerAdult
     * @param int $totalGuestCount
     * @param bool $defaultTaxServiceInclusive
     * @param bool $kidsStayFree
     * @param string $maxChildAge
     * @param bool $internetGuaranteeRequiredInd
     */
    public function __construct($description = null, $checkInTime = null, $checkOutTime = null, $minGuestAge = null, $minRecommendedGuestAge = null, $usualStayFreeCutoffAge = null, $usualStayFreeChildPerAdult = null, $totalGuestCount = null, $defaultTaxServiceInclusive = null, $kidsStayFree = null, $maxChildAge = null, $internetGuaranteeRequiredInd = null)
    {
        $this
            ->setDescription($description)
            ->setCheckInTime($checkInTime)
            ->setCheckOutTime($checkOutTime)
            ->setMinGuestAge($minGuestAge)
            ->setMinRecommendedGuestAge($minRecommendedGuestAge)
            ->setUsualStayFreeCutoffAge($usualStayFreeCutoffAge)
            ->setUsualStayFreeChildPerAdult($usualStayFreeChildPerAdult)
            ->setTotalGuestCount($totalGuestCount)
            ->setDefaultTaxServiceInclusive($defaultTaxServiceInclusive)
            ->setKidsStayFree($kidsStayFree)
            ->setMaxChildAge($maxChildAge)
            ->setInternetGuaranteeRequiredInd($internetGuaranteeRequiredInd);
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get CheckInTime value
     * @return string|null
     */
    public function getCheckInTime()
    {
        return $this->CheckInTime;
    }
    /**
     * Set CheckInTime value
     * @param string $checkInTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setCheckInTime($checkInTime = null)
    {
        // validation for constraint: string
        if (!is_null($checkInTime) && !is_string($checkInTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkInTime)), __LINE__);
        }
        $this->CheckInTime = $checkInTime;
        return $this;
    }
    /**
     * Get CheckOutTime value
     * @return string|null
     */
    public function getCheckOutTime()
    {
        return $this->CheckOutTime;
    }
    /**
     * Set CheckOutTime value
     * @param string $checkOutTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setCheckOutTime($checkOutTime = null)
    {
        // validation for constraint: string
        if (!is_null($checkOutTime) && !is_string($checkOutTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkOutTime)), __LINE__);
        }
        $this->CheckOutTime = $checkOutTime;
        return $this;
    }
    /**
     * Get MinGuestAge value
     * @return int|null
     */
    public function getMinGuestAge()
    {
        return $this->MinGuestAge;
    }
    /**
     * Set MinGuestAge value
     * @param int $minGuestAge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setMinGuestAge($minGuestAge = null)
    {
        // validation for constraint: int
        if (!is_null($minGuestAge) && !is_numeric($minGuestAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minGuestAge)), __LINE__);
        }
        $this->MinGuestAge = $minGuestAge;
        return $this;
    }
    /**
     * Get MinRecommendedGuestAge value
     * @return int|null
     */
    public function getMinRecommendedGuestAge()
    {
        return $this->MinRecommendedGuestAge;
    }
    /**
     * Set MinRecommendedGuestAge value
     * @param int $minRecommendedGuestAge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setMinRecommendedGuestAge($minRecommendedGuestAge = null)
    {
        // validation for constraint: int
        if (!is_null($minRecommendedGuestAge) && !is_numeric($minRecommendedGuestAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minRecommendedGuestAge)), __LINE__);
        }
        $this->MinRecommendedGuestAge = $minRecommendedGuestAge;
        return $this;
    }
    /**
     * Get UsualStayFreeCutoffAge value
     * @return int|null
     */
    public function getUsualStayFreeCutoffAge()
    {
        return $this->UsualStayFreeCutoffAge;
    }
    /**
     * Set UsualStayFreeCutoffAge value
     * @param int $usualStayFreeCutoffAge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setUsualStayFreeCutoffAge($usualStayFreeCutoffAge = null)
    {
        // validation for constraint: int
        if (!is_null($usualStayFreeCutoffAge) && !is_numeric($usualStayFreeCutoffAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($usualStayFreeCutoffAge)), __LINE__);
        }
        $this->UsualStayFreeCutoffAge = $usualStayFreeCutoffAge;
        return $this;
    }
    /**
     * Get UsualStayFreeChildPerAdult value
     * @return int|null
     */
    public function getUsualStayFreeChildPerAdult()
    {
        return $this->UsualStayFreeChildPerAdult;
    }
    /**
     * Set UsualStayFreeChildPerAdult value
     * @param int $usualStayFreeChildPerAdult
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setUsualStayFreeChildPerAdult($usualStayFreeChildPerAdult = null)
    {
        // validation for constraint: int
        if (!is_null($usualStayFreeChildPerAdult) && !is_numeric($usualStayFreeChildPerAdult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($usualStayFreeChildPerAdult)), __LINE__);
        }
        $this->UsualStayFreeChildPerAdult = $usualStayFreeChildPerAdult;
        return $this;
    }
    /**
     * Get TotalGuestCount value
     * @return int|null
     */
    public function getTotalGuestCount()
    {
        return $this->TotalGuestCount;
    }
    /**
     * Set TotalGuestCount value
     * @param int $totalGuestCount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setTotalGuestCount($totalGuestCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalGuestCount) && !is_numeric($totalGuestCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalGuestCount)), __LINE__);
        }
        $this->TotalGuestCount = $totalGuestCount;
        return $this;
    }
    /**
     * Get DefaultTaxServiceInclusive value
     * @return bool|null
     */
    public function getDefaultTaxServiceInclusive()
    {
        return $this->DefaultTaxServiceInclusive;
    }
    /**
     * Set DefaultTaxServiceInclusive value
     * @param bool $defaultTaxServiceInclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setDefaultTaxServiceInclusive($defaultTaxServiceInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaultTaxServiceInclusive) && !is_bool($defaultTaxServiceInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($defaultTaxServiceInclusive)), __LINE__);
        }
        $this->DefaultTaxServiceInclusive = $defaultTaxServiceInclusive;
        return $this;
    }
    /**
     * Get KidsStayFree value
     * @return bool|null
     */
    public function getKidsStayFree()
    {
        return $this->KidsStayFree;
    }
    /**
     * Set KidsStayFree value
     * @param bool $kidsStayFree
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setKidsStayFree($kidsStayFree = null)
    {
        // validation for constraint: boolean
        if (!is_null($kidsStayFree) && !is_bool($kidsStayFree)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($kidsStayFree)), __LINE__);
        }
        $this->KidsStayFree = $kidsStayFree;
        return $this;
    }
    /**
     * Get MaxChildAge value
     * @return string|null
     */
    public function getMaxChildAge()
    {
        return $this->MaxChildAge;
    }
    /**
     * Set MaxChildAge value
     * @param string $maxChildAge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setMaxChildAge($maxChildAge = null)
    {
        // validation for constraint: string
        if (!is_null($maxChildAge) && !is_string($maxChildAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxChildAge)), __LINE__);
        }
        $this->MaxChildAge = $maxChildAge;
        return $this;
    }
    /**
     * Get InternetGuaranteeRequiredInd value
     * @return bool|null
     */
    public function getInternetGuaranteeRequiredInd()
    {
        return $this->InternetGuaranteeRequiredInd;
    }
    /**
     * Set InternetGuaranteeRequiredInd value
     * @param bool $internetGuaranteeRequiredInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public function setInternetGuaranteeRequiredInd($internetGuaranteeRequiredInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($internetGuaranteeRequiredInd) && !is_bool($internetGuaranteeRequiredInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($internetGuaranteeRequiredInd)), __LINE__);
        }
        $this->InternetGuaranteeRequiredInd = $internetGuaranteeRequiredInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
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

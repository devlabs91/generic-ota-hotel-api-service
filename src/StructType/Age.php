<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Age StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information associated with the age requirements of renting a vehicle.
 * - type: Numeric0to999
 * - use: optional
 * @subpackage Structs
 */
class Age extends AbstractStructBase
{
    /**
     * The AgeSurcharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge[]
     */
    public $AgeSurcharge;
    /**
     * The AgeInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AgeInfos
     */
    public $AgeInfos;
    /**
     * The Vehicles
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles
     */
    public $Vehicles;
    /**
     * The MinimumAge
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the minimum age of a person allowed to rent a vehicle from this rental facility.
     * - use: optional
     * @var int
     */
    public $MinimumAge;
    /**
     * The MaximumAge
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the maximum age of a person allowed to rent a vehicle from this rental facility.
     * - use: optional
     * @var int
     */
    public $MaximumAge;
    /**
     * Constructor method for Age
     * @uses Age::setAgeSurcharge()
     * @uses Age::setAgeInfos()
     * @uses Age::setVehicles()
     * @uses Age::setMinimumAge()
     * @uses Age::setMaximumAge()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge[] $ageSurcharge
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AgeInfos $ageInfos
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles $vehicles
     * @param int $minimumAge
     * @param int $maximumAge
     */
    public function __construct(array $ageSurcharge = array(), \Devlabs91\GenericOtaHotelApiService\StructType\AgeInfos $ageInfos = null, \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles $vehicles = null, $minimumAge = null, $maximumAge = null)
    {
        $this
            ->setAgeSurcharge($ageSurcharge)
            ->setAgeInfos($ageInfos)
            ->setVehicles($vehicles)
            ->setMinimumAge($minimumAge)
            ->setMaximumAge($maximumAge);
    }
    /**
     * Get AgeSurcharge value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge[]|null
     */
    public function getAgeSurcharge()
    {
        return $this->AgeSurcharge;
    }
    /**
     * Set AgeSurcharge value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge[] $ageSurcharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Age
     */
    public function setAgeSurcharge(array $ageSurcharge = array())
    {
        foreach ($ageSurcharge as $ageAgeSurchargeItem) {
            // validation for constraint: itemType
            if (!$ageAgeSurchargeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge) {
                throw new \InvalidArgumentException(sprintf('The AgeSurcharge property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge, "%s" given', is_object($ageAgeSurchargeItem) ? get_class($ageAgeSurchargeItem) : gettype($ageAgeSurchargeItem)), __LINE__);
            }
        }
        $this->AgeSurcharge = $ageSurcharge;
        return $this;
    }
    /**
     * Add item to AgeSurcharge value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Age
     */
    public function addToAgeSurcharge(\Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge) {
            throw new \InvalidArgumentException(sprintf('The AgeSurcharge property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AgeSurcharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AgeSurcharge[] = $item;
        return $this;
    }
    /**
     * Get AgeInfos value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgeInfos|null
     */
    public function getAgeInfos()
    {
        return $this->AgeInfos;
    }
    /**
     * Set AgeInfos value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AgeInfos $ageInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Age
     */
    public function setAgeInfos(\Devlabs91\GenericOtaHotelApiService\StructType\AgeInfos $ageInfos = null)
    {
        $this->AgeInfos = $ageInfos;
        return $this;
    }
    /**
     * Get Vehicles value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles $vehicles
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Age
     */
    public function setVehicles(\Devlabs91\GenericOtaHotelApiService\StructType\Vehicles $vehicles = null)
    {
        $this->Vehicles = $vehicles;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Age
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Age
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Age
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

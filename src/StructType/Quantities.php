<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Quantities StructType
 * Meta informations extracted from the WSDL
 * - documentation: Max occupancy, max rollaways, number of beds, standard occupancy
 * @subpackage Structs
 */
class Quantities extends AbstractStructBase
{
    /**
     * The MaxOccupancy
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MaxOccupancy;
    /**
     * The MaxRollaways
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MaxRollaways;
    /**
     * The StandardNumBeds
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $StandardNumBeds;
    /**
     * The StandardOccupancy
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $StandardOccupancy;
    /**
     * The MaximumAdditionalGuests
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MaximumAdditionalGuests;
    /**
     * Constructor method for Quantities
     * @uses Quantities::setMaxOccupancy()
     * @uses Quantities::setMaxRollaways()
     * @uses Quantities::setStandardNumBeds()
     * @uses Quantities::setStandardOccupancy()
     * @uses Quantities::setMaximumAdditionalGuests()
     * @param int $maxOccupancy
     * @param int $maxRollaways
     * @param int $standardNumBeds
     * @param int $standardOccupancy
     * @param int $maximumAdditionalGuests
     */
    public function __construct($maxOccupancy = null, $maxRollaways = null, $standardNumBeds = null, $standardOccupancy = null, $maximumAdditionalGuests = null)
    {
        $this
            ->setMaxOccupancy($maxOccupancy)
            ->setMaxRollaways($maxRollaways)
            ->setStandardNumBeds($standardNumBeds)
            ->setStandardOccupancy($standardOccupancy)
            ->setMaximumAdditionalGuests($maximumAdditionalGuests);
    }
    /**
     * Get MaxOccupancy value
     * @return int|null
     */
    public function getMaxOccupancy()
    {
        return $this->MaxOccupancy;
    }
    /**
     * Set MaxOccupancy value
     * @param int $maxOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Quantities
     */
    public function setMaxOccupancy($maxOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($maxOccupancy) && !is_numeric($maxOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxOccupancy)), __LINE__);
        }
        $this->MaxOccupancy = $maxOccupancy;
        return $this;
    }
    /**
     * Get MaxRollaways value
     * @return int|null
     */
    public function getMaxRollaways()
    {
        return $this->MaxRollaways;
    }
    /**
     * Set MaxRollaways value
     * @param int $maxRollaways
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Quantities
     */
    public function setMaxRollaways($maxRollaways = null)
    {
        // validation for constraint: int
        if (!is_null($maxRollaways) && !is_numeric($maxRollaways)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxRollaways)), __LINE__);
        }
        $this->MaxRollaways = $maxRollaways;
        return $this;
    }
    /**
     * Get StandardNumBeds value
     * @return int|null
     */
    public function getStandardNumBeds()
    {
        return $this->StandardNumBeds;
    }
    /**
     * Set StandardNumBeds value
     * @param int $standardNumBeds
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Quantities
     */
    public function setStandardNumBeds($standardNumBeds = null)
    {
        // validation for constraint: int
        if (!is_null($standardNumBeds) && !is_numeric($standardNumBeds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($standardNumBeds)), __LINE__);
        }
        $this->StandardNumBeds = $standardNumBeds;
        return $this;
    }
    /**
     * Get StandardOccupancy value
     * @return int|null
     */
    public function getStandardOccupancy()
    {
        return $this->StandardOccupancy;
    }
    /**
     * Set StandardOccupancy value
     * @param int $standardOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Quantities
     */
    public function setStandardOccupancy($standardOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($standardOccupancy) && !is_numeric($standardOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($standardOccupancy)), __LINE__);
        }
        $this->StandardOccupancy = $standardOccupancy;
        return $this;
    }
    /**
     * Get MaximumAdditionalGuests value
     * @return int|null
     */
    public function getMaximumAdditionalGuests()
    {
        return $this->MaximumAdditionalGuests;
    }
    /**
     * Set MaximumAdditionalGuests value
     * @param int $maximumAdditionalGuests
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Quantities
     */
    public function setMaximumAdditionalGuests($maximumAdditionalGuests = null)
    {
        // validation for constraint: int
        if (!is_null($maximumAdditionalGuests) && !is_numeric($maximumAdditionalGuests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumAdditionalGuests)), __LINE__);
        }
        $this->MaximumAdditionalGuests = $maximumAdditionalGuests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Quantities
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Quantities StructType
 * Meta informations extracted from the WSDL
 * - documentation: Max rollaways, number of beds.
 * @subpackage Structs
 */
class Quantities extends AbstractStructBase
{
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
     * The MaximumAdditionalGuests
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $MaximumAdditionalGuests;
    /**
     * The MinBillableGuests
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the minimum number of guests for which a room charge will be applied, even if there are fewer guests in the room.
     * - use: optional
     * @var int
     */
    public $MinBillableGuests;
    /**
     * Constructor method for Quantities
     * @uses Quantities::setMaxRollaways()
     * @uses Quantities::setStandardNumBeds()
     * @uses Quantities::setMaximumAdditionalGuests()
     * @uses Quantities::setMinBillableGuests()
     * @param int $maxRollaways
     * @param int $standardNumBeds
     * @param int $maximumAdditionalGuests
     * @param int $minBillableGuests
     */
    public function __construct($maxRollaways = null, $standardNumBeds = null, $maximumAdditionalGuests = null, $minBillableGuests = null)
    {
        $this
            ->setMaxRollaways($maxRollaways)
            ->setStandardNumBeds($standardNumBeds)
            ->setMaximumAdditionalGuests($maximumAdditionalGuests)
            ->setMinBillableGuests($minBillableGuests);
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
     * Get MinBillableGuests value
     * @return int|null
     */
    public function getMinBillableGuests()
    {
        return $this->MinBillableGuests;
    }
    /**
     * Set MinBillableGuests value
     * @param int $minBillableGuests
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Quantities
     */
    public function setMinBillableGuests($minBillableGuests = null)
    {
        // validation for constraint: int
        if (!is_null($minBillableGuests) && !is_numeric($minBillableGuests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minBillableGuests)), __LINE__);
        }
        $this->MinBillableGuests = $minBillableGuests;
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

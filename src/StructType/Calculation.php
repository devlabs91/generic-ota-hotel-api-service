<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Calculation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on how this charge was calculated, for example, a daily rate multiplied by the number of days, a percentage, etc.
 * @subpackage Structs
 */
class Calculation extends AbstractStructBase
{
    /**
     * The UnitCharge
     * Meta informations extracted from the WSDL
     * - documentation: This is used in conjunction with UnitName to specify the charge per unit as defined by UnitName (e.g., if UnitCharge="100" and UnitName="day" the result is 100 dollars per day).
     * - use: optional
     * @var string
     */
    public $UnitCharge;
    /**
     * The UnitName
     * Meta informations extracted from the WSDL
     * - documentation: The UnitName attribute provides the unit on which an item charge may be based when renting a vehicle (e.g., there may be a charge which is based upon the number of days, another charge that is based upon the number of miles, a charge
     * that is based upon the number of gallons).
     * - use: optional
     * @var string
     */
    public $UnitName;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: This is used in conjunction with UnitName to specify the quantity of units as defined by UnitName (e.g., if Quantity="5" and UnitName="day" the result is 5 days).
     * - use: optional
     * @var string
     */
    public $Quantity;
    /**
     * The Percentage
     * Meta informations extracted from the WSDL
     * - documentation: Provides the ability to define a particular percentage.
     * - use: optional
     * @var string
     */
    public $Percentage;
    /**
     * The Applicability
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Applicability;
    /**
     * The MaxQuantity
     * Meta informations extracted from the WSDL
     * - documentation: This is used in conjunction with UnitName to specify the maximum quantity of units as defined by UnitName.
     * - use: optional
     * @var string
     */
    public $MaxQuantity;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: The total for a specific item in a calculation (e.g., ten day rental = one week plus three extra days; this attribute would provide the subtotal for just the three extra days. The VehChargeType can be used to show the total for the
     * ten day rental).
     * - use: optional
     * @var string
     */
    public $Total;
    /**
     * Constructor method for Calculation
     * @uses Calculation::setUnitCharge()
     * @uses Calculation::setUnitName()
     * @uses Calculation::setQuantity()
     * @uses Calculation::setPercentage()
     * @uses Calculation::setApplicability()
     * @uses Calculation::setMaxQuantity()
     * @uses Calculation::setTotal()
     * @param string $unitCharge
     * @param string $unitName
     * @param string $quantity
     * @param string $percentage
     * @param string $applicability
     * @param string $maxQuantity
     * @param string $total
     */
    public function __construct($unitCharge = null, $unitName = null, $quantity = null, $percentage = null, $applicability = null, $maxQuantity = null, $total = null)
    {
        $this
            ->setUnitCharge($unitCharge)
            ->setUnitName($unitName)
            ->setQuantity($quantity)
            ->setPercentage($percentage)
            ->setApplicability($applicability)
            ->setMaxQuantity($maxQuantity)
            ->setTotal($total);
    }
    /**
     * Get UnitCharge value
     * @return string|null
     */
    public function getUnitCharge()
    {
        return $this->UnitCharge;
    }
    /**
     * Set UnitCharge value
     * @param string $unitCharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Calculation
     */
    public function setUnitCharge($unitCharge = null)
    {
        // validation for constraint: string
        if (!is_null($unitCharge) && !is_string($unitCharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitCharge)), __LINE__);
        }
        $this->UnitCharge = $unitCharge;
        return $this;
    }
    /**
     * Get UnitName value
     * @return string|null
     */
    public function getUnitName()
    {
        return $this->UnitName;
    }
    /**
     * Set UnitName value
     * @param string $unitName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Calculation
     */
    public function setUnitName($unitName = null)
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitName)), __LINE__);
        }
        $this->UnitName = $unitName;
        return $this;
    }
    /**
     * Get Quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param string $quantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Calculation
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get Percentage value
     * @return string|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param string $percentage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Calculation
     */
    public function setPercentage($percentage = null)
    {
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percentage)), __LINE__);
        }
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Get Applicability value
     * @return string|null
     */
    public function getApplicability()
    {
        return $this->Applicability;
    }
    /**
     * Set Applicability value
     * @param string $applicability
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Calculation
     */
    public function setApplicability($applicability = null)
    {
        // validation for constraint: string
        if (!is_null($applicability) && !is_string($applicability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicability)), __LINE__);
        }
        $this->Applicability = $applicability;
        return $this;
    }
    /**
     * Get MaxQuantity value
     * @return string|null
     */
    public function getMaxQuantity()
    {
        return $this->MaxQuantity;
    }
    /**
     * Set MaxQuantity value
     * @param string $maxQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Calculation
     */
    public function setMaxQuantity($maxQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($maxQuantity) && !is_string($maxQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxQuantity)), __LINE__);
        }
        $this->MaxQuantity = $maxQuantity;
        return $this;
    }
    /**
     * Get Total value
     * @return string|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param string $total
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Calculation
     */
    public function setTotal($total = null)
    {
        // validation for constraint: string
        if (!is_null($total) && !is_string($total)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($total)), __LINE__);
        }
        $this->Total = $total;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Calculation
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

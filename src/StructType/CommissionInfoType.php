<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about agreements for commission arrangements with the business entity. | Allows for control of the sharing of data between parties. | Identifies a rate for paying commissions; can be a decimal value based on
 * percentage paid for the commission plan, or a flat rate.
 * @subpackage Structs
 */
class CommissionInfoType extends FreeTextType
{
    /**
     * The CommissionPlanCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a commission plan agreement between trading partners by plan code.
     * @var string
     */
    public $CommissionPlanCode;
    /**
     * Constructor method for CommissionInfoType
     * @uses CommissionInfoType::setCommissionPlanCode()
     * @param string $commissionPlanCode
     */
    public function __construct($commissionPlanCode = null)
    {
        $this
            ->setCommissionPlanCode($commissionPlanCode);
    }
    /**
     * Get CommissionPlanCode value
     * @return string|null
     */
    public function getCommissionPlanCode()
    {
        return $this->CommissionPlanCode;
    }
    /**
     * Set CommissionPlanCode value
     * @param string $commissionPlanCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionInfoType
     */
    public function setCommissionPlanCode($commissionPlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($commissionPlanCode) && !is_string($commissionPlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commissionPlanCode)), __LINE__);
        }
        $this->CommissionPlanCode = $commissionPlanCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionInfoType
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

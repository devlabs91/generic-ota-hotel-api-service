<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdvanceBooking StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates whether or not advance booking is required for this rate and if so, what the advance booking requirements are. | Specifies the advance booking requirements.
 * @subpackage Structs
 */
class AdvanceBooking extends AbstractStructBase
{
    /**
     * The RequiredInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, advanced booking is required for this rate.
     * - use: optional
     * @var bool
     */
    public $RequiredInd;
    /**
     * The RulesApplyInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, rules apply to the advance booking requirement.
     * - use: optional
     * @var bool
     */
    public $RulesApplyInd;
    /**
     * Constructor method for AdvanceBooking
     * @uses AdvanceBooking::setRequiredInd()
     * @uses AdvanceBooking::setRulesApplyInd()
     * @param bool $requiredInd
     * @param bool $rulesApplyInd
     */
    public function __construct($requiredInd = null, $rulesApplyInd = null)
    {
        $this
            ->setRequiredInd($requiredInd)
            ->setRulesApplyInd($rulesApplyInd);
    }
    /**
     * Get RequiredInd value
     * @return bool|null
     */
    public function getRequiredInd()
    {
        return $this->RequiredInd;
    }
    /**
     * Set RequiredInd value
     * @param bool $requiredInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBooking
     */
    public function setRequiredInd($requiredInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($requiredInd) && !is_bool($requiredInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($requiredInd)), __LINE__);
        }
        $this->RequiredInd = $requiredInd;
        return $this;
    }
    /**
     * Get RulesApplyInd value
     * @return bool|null
     */
    public function getRulesApplyInd()
    {
        return $this->RulesApplyInd;
    }
    /**
     * Set RulesApplyInd value
     * @param bool $rulesApplyInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBooking
     */
    public function setRulesApplyInd($rulesApplyInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($rulesApplyInd) && !is_bool($rulesApplyInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rulesApplyInd)), __LINE__);
        }
        $this->RulesApplyInd = $rulesApplyInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBooking
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

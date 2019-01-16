<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateDeposit StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information pertaining to the the deposit. | The deadline for making a deposit. | The effective and discontinue date
 * @subpackage Structs
 */
class RateDeposit extends AbstractStructBase
{
    /**
     * The DepositRequiredInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, a deposit is required as a guarantee.
     * - use: optional
     * @var bool
     */
    public $DepositRequiredInd;
    /**
     * Constructor method for RateDeposit
     * @uses RateDeposit::setDepositRequiredInd()
     * @param bool $depositRequiredInd
     */
    public function __construct($depositRequiredInd = null)
    {
        $this
            ->setDepositRequiredInd($depositRequiredInd);
    }
    /**
     * Get DepositRequiredInd value
     * @return bool|null
     */
    public function getDepositRequiredInd()
    {
        return $this->DepositRequiredInd;
    }
    /**
     * Set DepositRequiredInd value
     * @param bool $depositRequiredInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateDeposit
     */
    public function setDepositRequiredInd($depositRequiredInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($depositRequiredInd) && !is_bool($depositRequiredInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($depositRequiredInd)), __LINE__);
        }
        $this->DepositRequiredInd = $depositRequiredInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateDeposit
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

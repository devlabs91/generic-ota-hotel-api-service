<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageFee StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information on one specific charge for this coverage, insurance or waiver.
 * @subpackage Structs
 */
class CoverageFee extends AbstractStructBase
{
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - documentation: Provides full information on the specific charge.
     * @var mixed
     */
    public $Charge;
    /**
     * The Vehicles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles
     */
    public $Vehicles;
    /**
     * The Deductible
     * Meta informations extracted from the WSDL
     * - documentation: The deductible/excess amount and liability amount for this coverage of a vehicle(s).
     * - minOccurs: 0
     * @var mixed
     */
    public $Deductible;
    /**
     * Constructor method for CoverageFee
     * @uses CoverageFee::setCharge()
     * @uses CoverageFee::setVehicles()
     * @uses CoverageFee::setDeductible()
     * @param mixed $charge
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles $vehicles
     * @param mixed $deductible
     */
    public function __construct($charge = null, \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles $vehicles = null, $deductible = null)
    {
        $this
            ->setCharge($charge)
            ->setVehicles($vehicles)
            ->setDeductible($deductible);
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageFee
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageFee
     */
    public function setVehicles(\Devlabs91\GenericOtaHotelApiService\StructType\Vehicles $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Get Deductible value
     * @return mixed|null
     */
    public function getDeductible()
    {
        return $this->Deductible;
    }
    /**
     * Set Deductible value
     * @param mixed $deductible
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageFee
     */
    public function setDeductible($deductible = null)
    {
        $this->Deductible = $deductible;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageFee
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

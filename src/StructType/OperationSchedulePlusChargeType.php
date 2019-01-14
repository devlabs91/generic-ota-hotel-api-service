<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationSchedulePlusChargeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This allows a charge to be associated with operating times (e.g. a golf tee time may be more expensive during peak hours v. off peak hours).
 * @subpackage Structs
 */
class OperationSchedulePlusChargeType extends OperationScheduleType
{
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Charge
     */
    public $Charge;
    /**
     * Constructor method for OperationSchedulePlusChargeType
     * @uses OperationSchedulePlusChargeType::setCharge()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Charge $charge
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Charge $charge = null)
    {
        $this
            ->setCharge($charge);
    }
    /**
     * Get Charge value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Charge|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Charge $charge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedulePlusChargeType
     */
    public function setCharge(\Devlabs91\GenericOtaHotelApiService\StructType\Charge $charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedulePlusChargeType
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

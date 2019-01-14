<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailAdditionalInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleAvailAdditionalInfoType complex type identifies the data that describes supplemental information made available as part of describing the availability and rate of one or more vehicles.
 * @subpackage Structs
 */
class VehicleAvailAdditionalInfoType extends AbstractStructBase
{
    /**
     * The PricedCoverages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages
     */
    public $PricedCoverages;
    /**
     * The PaymentRules
     * Meta informations extracted from the WSDL
     * - documentation: A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable to a specific vehicle type.
     * - minOccurs: 0
     * @var mixed
     */
    public $PaymentRules;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The ChargeablePeriod
     * @var string
     */
    public $ChargeablePeriod;
    /**
     * Constructor method for VehicleAvailAdditionalInfoType
     * @uses VehicleAvailAdditionalInfoType::setPricedCoverages()
     * @uses VehicleAvailAdditionalInfoType::setPaymentRules()
     * @uses VehicleAvailAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleAvailAdditionalInfoType::setChargeablePeriod()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages $pricedCoverages
     * @param mixed $paymentRules
     * @param mixed $tPA_Extensions
     * @param string $chargeablePeriod
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages $pricedCoverages = null, $paymentRules = null, $tPA_Extensions = null, $chargeablePeriod = null)
    {
        $this
            ->setPricedCoverages($pricedCoverages)
            ->setPaymentRules($paymentRules)
            ->setTPA_Extensions($tPA_Extensions)
            ->setChargeablePeriod($chargeablePeriod);
    }
    /**
     * Get PricedCoverages value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages|null
     */
    public function getPricedCoverages()
    {
        return $this->PricedCoverages;
    }
    /**
     * Set PricedCoverages value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages $pricedCoverages
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailAdditionalInfoType
     */
    public function setPricedCoverages(\Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages $pricedCoverages = null)
    {
        $this->PricedCoverages = $pricedCoverages;
        return $this;
    }
    /**
     * Get PaymentRules value
     * @return mixed|null
     */
    public function getPaymentRules()
    {
        return $this->PaymentRules;
    }
    /**
     * Set PaymentRules value
     * @param mixed $paymentRules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailAdditionalInfoType
     */
    public function setPaymentRules($paymentRules = null)
    {
        $this->PaymentRules = $paymentRules;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailAdditionalInfoType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ChargeablePeriod value
     * @return string|null
     */
    public function getChargeablePeriod()
    {
        return $this->ChargeablePeriod;
    }
    /**
     * Set ChargeablePeriod value
     * @param string $chargeablePeriod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailAdditionalInfoType
     */
    public function setChargeablePeriod($chargeablePeriod = null)
    {
        // validation for constraint: string
        if (!is_null($chargeablePeriod) && !is_string($chargeablePeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeablePeriod)), __LINE__);
        }
        $this->ChargeablePeriod = $chargeablePeriod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailAdditionalInfoType
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

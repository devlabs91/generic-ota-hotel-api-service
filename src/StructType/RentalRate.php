<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RentalRate StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow
 * different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage. | Information on the rates associated with this vehicle. Rate information can include the distance and the
 * base rental cost, along with information on the various factors that may infuence this rate.
 * @subpackage Structs
 */
class RentalRate extends AbstractStructBase
{
    /**
     * The RateDistance
     * Meta informations extracted from the WSDL
     * - documentation: Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. | Information on the distance
     * that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time.
     * - minOccurs: 0
     * @var mixed
     */
    public $RateDistance;
    /**
     * The VehicleCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges
     */
    public $VehicleCharges;
    /**
     * The RateQualifier
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of rates applicable to the customer, along with any discount number or promotional codes that affect the quoted rate. | Indicates the type of rates applicable to the customer, along with any discount number or
     * promotional codes that affect the quoted rate.
     * - minOccurs: 0
     * @var mixed
     */
    public $RateQualifier;
    /**
     * The RateRestrictions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public $RateRestrictions;
    /**
     * Constructor method for RentalRate
     * @uses RentalRate::setRateDistance()
     * @uses RentalRate::setVehicleCharges()
     * @uses RentalRate::setRateQualifier()
     * @uses RentalRate::setRateRestrictions()
     * @param mixed $rateDistance
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges $vehicleCharges
     * @param mixed $rateQualifier
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions $rateRestrictions
     */
    public function __construct($rateDistance = null, \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges $vehicleCharges = null, $rateQualifier = null, \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions $rateRestrictions = null)
    {
        $this
            ->setRateDistance($rateDistance)
            ->setVehicleCharges($vehicleCharges)
            ->setRateQualifier($rateQualifier)
            ->setRateRestrictions($rateRestrictions);
    }
    /**
     * Get RateDistance value
     * @return mixed|null
     */
    public function getRateDistance()
    {
        return $this->RateDistance;
    }
    /**
     * Set RateDistance value
     * @param mixed $rateDistance
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate
     */
    public function setRateDistance($rateDistance = null)
    {
        $this->RateDistance = $rateDistance;
        return $this;
    }
    /**
     * Get VehicleCharges value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges|null
     */
    public function getVehicleCharges()
    {
        return $this->VehicleCharges;
    }
    /**
     * Set VehicleCharges value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges $vehicleCharges
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate
     */
    public function setVehicleCharges(\Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges $vehicleCharges = null)
    {
        $this->VehicleCharges = $vehicleCharges;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return mixed|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param mixed $rateQualifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate
     */
    public function setRateQualifier($rateQualifier = null)
    {
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get RateRestrictions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions|null
     */
    public function getRateRestrictions()
    {
        return $this->RateRestrictions;
    }
    /**
     * Set RateRestrictions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions $rateRestrictions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate
     */
    public function setRateRestrictions(\Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions $rateRestrictions = null)
    {
        $this->RateRestrictions = $rateRestrictions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate
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

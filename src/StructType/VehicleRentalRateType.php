<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalRateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This describes time, mileage and other charges.
 * @subpackage Structs
 */
class VehicleRentalRateType extends AbstractStructBase
{
    /**
     * The RateDistance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateDistance[]
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
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier
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
     * The RateGuarantee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateGuarantee
     */
    public $RateGuarantee;
    /**
     * The PickupReturnRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PickupReturnRule[]
     */
    public $PickupReturnRule;
    /**
     * The QuoteID
     * Meta informations extracted from the WSDL
     * - documentation: A reference string used to match a query, with rates, to a given time. This is useful for matching prices within a given quote period.
     * - use: optional
     * @var string
     */
    public $QuoteID;
    /**
     * Constructor method for VehicleRentalRateType
     * @uses VehicleRentalRateType::setRateDistance()
     * @uses VehicleRentalRateType::setVehicleCharges()
     * @uses VehicleRentalRateType::setRateQualifier()
     * @uses VehicleRentalRateType::setRateRestrictions()
     * @uses VehicleRentalRateType::setRateGuarantee()
     * @uses VehicleRentalRateType::setPickupReturnRule()
     * @uses VehicleRentalRateType::setQuoteID()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateDistance[] $rateDistance
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges $vehicleCharges
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier $rateQualifier
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions $rateRestrictions
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateGuarantee $rateGuarantee
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PickupReturnRule[] $pickupReturnRule
     * @param string $quoteID
     */
    public function __construct(array $rateDistance = array(), \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges $vehicleCharges = null, \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier $rateQualifier = null, \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions $rateRestrictions = null, \Devlabs91\GenericOtaHotelApiService\StructType\RateGuarantee $rateGuarantee = null, array $pickupReturnRule = array(), $quoteID = null)
    {
        $this
            ->setRateDistance($rateDistance)
            ->setVehicleCharges($vehicleCharges)
            ->setRateQualifier($rateQualifier)
            ->setRateRestrictions($rateRestrictions)
            ->setRateGuarantee($rateGuarantee)
            ->setPickupReturnRule($pickupReturnRule)
            ->setQuoteID($quoteID);
    }
    /**
     * Get RateDistance value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateDistance[]|null
     */
    public function getRateDistance()
    {
        return $this->RateDistance;
    }
    /**
     * Set RateDistance value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateDistance[] $rateDistance
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalRateType
     */
    public function setRateDistance(array $rateDistance = array())
    {
        foreach ($rateDistance as $vehicleRentalRateTypeRateDistanceItem) {
            // validation for constraint: itemType
            if (!$vehicleRentalRateTypeRateDistanceItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateDistance) {
                throw new \InvalidArgumentException(sprintf('The RateDistance property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateDistance, "%s" given', is_object($vehicleRentalRateTypeRateDistanceItem) ? get_class($vehicleRentalRateTypeRateDistanceItem) : gettype($vehicleRentalRateTypeRateDistanceItem)), __LINE__);
            }
        }
        $this->RateDistance = $rateDistance;
        return $this;
    }
    /**
     * Add item to RateDistance value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateDistance $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalRateType
     */
    public function addToRateDistance(\Devlabs91\GenericOtaHotelApiService\StructType\RateDistance $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateDistance) {
            throw new \InvalidArgumentException(sprintf('The RateDistance property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateDistance, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateDistance[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalRateType
     */
    public function setVehicleCharges(\Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges $vehicleCharges = null)
    {
        $this->VehicleCharges = $vehicleCharges;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier $rateQualifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalRateType
     */
    public function setRateQualifier(\Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier $rateQualifier = null)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalRateType
     */
    public function setRateRestrictions(\Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions $rateRestrictions = null)
    {
        $this->RateRestrictions = $rateRestrictions;
        return $this;
    }
    /**
     * Get RateGuarantee value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateGuarantee|null
     */
    public function getRateGuarantee()
    {
        return $this->RateGuarantee;
    }
    /**
     * Set RateGuarantee value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateGuarantee $rateGuarantee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalRateType
     */
    public function setRateGuarantee(\Devlabs91\GenericOtaHotelApiService\StructType\RateGuarantee $rateGuarantee = null)
    {
        $this->RateGuarantee = $rateGuarantee;
        return $this;
    }
    /**
     * Get PickupReturnRule value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PickupReturnRule[]|null
     */
    public function getPickupReturnRule()
    {
        return $this->PickupReturnRule;
    }
    /**
     * Set PickupReturnRule value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PickupReturnRule[] $pickupReturnRule
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalRateType
     */
    public function setPickupReturnRule(array $pickupReturnRule = array())
    {
        foreach ($pickupReturnRule as $vehicleRentalRateTypePickupReturnRuleItem) {
            // validation for constraint: itemType
            if (!$vehicleRentalRateTypePickupReturnRuleItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PickupReturnRule) {
                throw new \InvalidArgumentException(sprintf('The PickupReturnRule property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PickupReturnRule, "%s" given', is_object($vehicleRentalRateTypePickupReturnRuleItem) ? get_class($vehicleRentalRateTypePickupReturnRuleItem) : gettype($vehicleRentalRateTypePickupReturnRuleItem)), __LINE__);
            }
        }
        $this->PickupReturnRule = $pickupReturnRule;
        return $this;
    }
    /**
     * Add item to PickupReturnRule value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PickupReturnRule $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalRateType
     */
    public function addToPickupReturnRule(\Devlabs91\GenericOtaHotelApiService\StructType\PickupReturnRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PickupReturnRule) {
            throw new \InvalidArgumentException(sprintf('The PickupReturnRule property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PickupReturnRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PickupReturnRule[] = $item;
        return $this;
    }
    /**
     * Get QuoteID value
     * @return string|null
     */
    public function getQuoteID()
    {
        return $this->QuoteID;
    }
    /**
     * Set QuoteID value
     * @param string $quoteID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalRateType
     */
    public function setQuoteID($quoteID = null)
    {
        // validation for constraint: string
        if (!is_null($quoteID) && !is_string($quoteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quoteID)), __LINE__);
        }
        $this->QuoteID = $quoteID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalRateType
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

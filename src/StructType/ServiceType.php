<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A ServiceType class.
 * @subpackage Structs
 */
class ServiceType extends AbstractStructBase
{
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - documentation: The selling price of this Service.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Price;
    /**
     * The ServiceDetails
     * Meta informations extracted from the WSDL
     * - documentation: Details on the Service including Guest Counts, Time Span of this Service, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Service and finally financial information related to the
     * Service, including Guarantee, Deposit and Payment and Cancellation Penalties.
     * - minOccurs: 0
     * @var mixed
     */
    public $ServiceDetails;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The ServicePricingType
     * Meta informations extracted from the WSDL
     * - documentation: An enumerated type that defines how a service is priced. Values: Per stay, Per person, Per night, Per person per night, Per use.
     * - use: optional
     * @var string
     */
    public $ServicePricingType;
    /**
     * The ReservationStatusType
     * Meta informations extracted from the WSDL
     * - documentation: An enumerated type that defines the status of the reservation for this service.
     * - use: optional
     * @var string
     */
    public $ReservationStatusType;
    /**
     * The ServiceRPH
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ServiceRPH;
    /**
     * The ServiceInventoryCode
     * Meta informations extracted from the WSDL
     * - documentation: The representation of the specific service being reserved.
     * - use: optional
     * @var string
     */
    public $ServiceInventoryCode;
    /**
     * The RatePlanCode
     * Meta informations extracted from the WSDL
     * - documentation: The representation of the rate plan under which this service was booked.
     * - use: optional
     * @var string
     */
    public $RatePlanCode;
    /**
     * The InventoryBlockCode
     * Meta informations extracted from the WSDL
     * - documentation: The representation of the block code under which the inventory for this service is categorized.
     * - use: optional
     * @var string
     */
    public $InventoryBlockCode;
    /**
     * The PriceGuaranteed
     * Meta informations extracted from the WSDL
     * - documentation: Whether the price for this service is guaranteed or quoted and subject to change. Values: False (Price NOT guaranteed) and True (Price is guaranteed).
     * - use: optional
     * @var bool
     */
    public $PriceGuaranteed;
    /**
     * The Inclusive
     * Meta informations extracted from the WSDL
     * - documentation: Whether the price for this service is included in the room rate.Values: False (or No), and True (or Yes).
     * - use: optional
     * @var bool
     */
    public $Inclusive;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of tickets, rounds of golf, etc. Also serves as the number of persons when pricing class is per person or per person per night.
     * - use: optional
     * @var string
     */
    public $Quantity;
    /**
     * The RequestedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, the service has been requested by the guest.
     * - use: optional
     * @var bool
     */
    public $RequestedIndicator;
    /**
     * Constructor method for ServiceType
     * @uses ServiceType::setPrice()
     * @uses ServiceType::setServiceDetails()
     * @uses ServiceType::setTPA_Extensions()
     * @uses ServiceType::setServicePricingType()
     * @uses ServiceType::setReservationStatusType()
     * @uses ServiceType::setServiceRPH()
     * @uses ServiceType::setServiceInventoryCode()
     * @uses ServiceType::setRatePlanCode()
     * @uses ServiceType::setInventoryBlockCode()
     * @uses ServiceType::setPriceGuaranteed()
     * @uses ServiceType::setInclusive()
     * @uses ServiceType::setQuantity()
     * @uses ServiceType::setRequestedIndicator()
     * @param mixed[] $price
     * @param mixed $serviceDetails
     * @param mixed $tPA_Extensions
     * @param string $servicePricingType
     * @param string $reservationStatusType
     * @param string $serviceRPH
     * @param string $serviceInventoryCode
     * @param string $ratePlanCode
     * @param string $inventoryBlockCode
     * @param bool $priceGuaranteed
     * @param bool $inclusive
     * @param string $quantity
     * @param bool $requestedIndicator
     */
    public function __construct(array $price = array(), $serviceDetails = null, $tPA_Extensions = null, $servicePricingType = null, $reservationStatusType = null, $serviceRPH = null, $serviceInventoryCode = null, $ratePlanCode = null, $inventoryBlockCode = null, $priceGuaranteed = null, $inclusive = null, $quantity = null, $requestedIndicator = null)
    {
        $this
            ->setPrice($price)
            ->setServiceDetails($serviceDetails)
            ->setTPA_Extensions($tPA_Extensions)
            ->setServicePricingType($servicePricingType)
            ->setReservationStatusType($reservationStatusType)
            ->setServiceRPH($serviceRPH)
            ->setServiceInventoryCode($serviceInventoryCode)
            ->setRatePlanCode($ratePlanCode)
            ->setInventoryBlockCode($inventoryBlockCode)
            ->setPriceGuaranteed($priceGuaranteed)
            ->setInclusive($inclusive)
            ->setQuantity($quantity)
            ->setRequestedIndicator($requestedIndicator);
    }
    /**
     * Get Price value
     * @return mixed[]|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @throws \InvalidArgumentException
     * @param mixed[] $price
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setPrice(array $price = array())
    {
        foreach ($price as $serviceTypePriceItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Price property can only contain items of anyType, "%s" given', is_object($serviceTypePriceItem) ? get_class($serviceTypePriceItem) : gettype($serviceTypePriceItem)), __LINE__);
            }
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Add item to Price value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function addToPrice($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Price property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Price[] = $item;
        return $this;
    }
    /**
     * Get ServiceDetails value
     * @return mixed|null
     */
    public function getServiceDetails()
    {
        return $this->ServiceDetails;
    }
    /**
     * Set ServiceDetails value
     * @param mixed $serviceDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setServiceDetails($serviceDetails = null)
    {
        $this->ServiceDetails = $serviceDetails;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ServicePricingType value
     * @return string|null
     */
    public function getServicePricingType()
    {
        return $this->ServicePricingType;
    }
    /**
     * Set ServicePricingType value
     * @param string $servicePricingType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setServicePricingType($servicePricingType = null)
    {
        // validation for constraint: string
        if (!is_null($servicePricingType) && !is_string($servicePricingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($servicePricingType)), __LINE__);
        }
        $this->ServicePricingType = $servicePricingType;
        return $this;
    }
    /**
     * Get ReservationStatusType value
     * @return string|null
     */
    public function getReservationStatusType()
    {
        return $this->ReservationStatusType;
    }
    /**
     * Set ReservationStatusType value
     * @param string $reservationStatusType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setReservationStatusType($reservationStatusType = null)
    {
        // validation for constraint: string
        if (!is_null($reservationStatusType) && !is_string($reservationStatusType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservationStatusType)), __LINE__);
        }
        $this->ReservationStatusType = $reservationStatusType;
        return $this;
    }
    /**
     * Get ServiceRPH value
     * @return string|null
     */
    public function getServiceRPH()
    {
        return $this->ServiceRPH;
    }
    /**
     * Set ServiceRPH value
     * @param string $serviceRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setServiceRPH($serviceRPH = null)
    {
        // validation for constraint: string
        if (!is_null($serviceRPH) && !is_string($serviceRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceRPH)), __LINE__);
        }
        $this->ServiceRPH = $serviceRPH;
        return $this;
    }
    /**
     * Get ServiceInventoryCode value
     * @return string|null
     */
    public function getServiceInventoryCode()
    {
        return $this->ServiceInventoryCode;
    }
    /**
     * Set ServiceInventoryCode value
     * @param string $serviceInventoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setServiceInventoryCode($serviceInventoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($serviceInventoryCode) && !is_string($serviceInventoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceInventoryCode)), __LINE__);
        }
        $this->ServiceInventoryCode = $serviceInventoryCode;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get InventoryBlockCode value
     * @return string|null
     */
    public function getInventoryBlockCode()
    {
        return $this->InventoryBlockCode;
    }
    /**
     * Set InventoryBlockCode value
     * @param string $inventoryBlockCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setInventoryBlockCode($inventoryBlockCode = null)
    {
        // validation for constraint: string
        if (!is_null($inventoryBlockCode) && !is_string($inventoryBlockCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventoryBlockCode)), __LINE__);
        }
        $this->InventoryBlockCode = $inventoryBlockCode;
        return $this;
    }
    /**
     * Get PriceGuaranteed value
     * @return bool|null
     */
    public function getPriceGuaranteed()
    {
        return $this->PriceGuaranteed;
    }
    /**
     * Set PriceGuaranteed value
     * @param bool $priceGuaranteed
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setPriceGuaranteed($priceGuaranteed = null)
    {
        // validation for constraint: boolean
        if (!is_null($priceGuaranteed) && !is_bool($priceGuaranteed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($priceGuaranteed)), __LINE__);
        }
        $this->PriceGuaranteed = $priceGuaranteed;
        return $this;
    }
    /**
     * Get Inclusive value
     * @return bool|null
     */
    public function getInclusive()
    {
        return $this->Inclusive;
    }
    /**
     * Set Inclusive value
     * @param bool $inclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setInclusive($inclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inclusive) && !is_bool($inclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($inclusive)), __LINE__);
        }
        $this->Inclusive = $inclusive;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
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
     * Get RequestedIndicator value
     * @return bool|null
     */
    public function getRequestedIndicator()
    {
        return $this->RequestedIndicator;
    }
    /**
     * Set RequestedIndicator value
     * @param bool $requestedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
     */
    public function setRequestedIndicator($requestedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($requestedIndicator) && !is_bool($requestedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($requestedIndicator)), __LINE__);
        }
        $this->RequestedIndicator = $requestedIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceType
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

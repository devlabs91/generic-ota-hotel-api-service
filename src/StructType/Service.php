<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service StructType
 * Meta informations extracted from the WSDL
 * - documentation: A hotel service or amenity available to the guest such as a business center, concierge, valet parking, massage, newspapers, etc. | May be used to give further detail on the code or to remove an obsolete item. This may be used to
 * provide further information for either Code or BusinessServiceCode (e.g. if printer is selected, the code detail may be used to describe the type of printer available) as determined by the implementer. | A Service object represents a non-room product
 * provided to guests. Service products may have associated inventory and charges.
 * @subpackage Structs
 */
class Service extends AbstractStructBase
{
    /**
     * The RelativePosition
     * Meta informations extracted from the WSDL
     * - documentation: Directions to the service provider.
     * - minOccurs: 0
     * @var mixed
     */
    public $RelativePosition;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules
     */
    public $OperationSchedules;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A text description to explain additional descriptive information.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The Features
     * Meta informations extracted from the WSDL
     * - documentation: Collection of features offered by a hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $Features;
    /**
     * The Included
     * Meta informations extracted from the WSDL
     * - documentation: This may be used to identify a standard service included in the room rate.
     * - use: optional
     * @var bool
     */
    public $Included;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Hotel Amenity Code (HAC).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The BusinessServiceCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Business Srvc Type (BUS).
     * - use: optional
     * @var string
     */
    public $BusinessServiceCode;
    /**
     * The AvailableToAnyGuest
     * Meta informations extracted from the WSDL
     * - documentation: This flag indicates whether the business service is available to all guests or only to certain guests at the facility. | Values: 0 = (No) Not Available to All Guests, 1 = (Yes) Available to All Guests.
     * - use: optional
     * @var bool
     */
    public $AvailableToAnyGuest;
    /**
     * The InvCode
     * Meta informations extracted from the WSDL
     * - documentation: Identification code of the business service for inventory and booking purposes if the service is an inventoriable item.
     * - use: optional
     * @var string
     */
    public $InvCode;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - documentation: The selling price of this Service.
     * - minOccurs: 0
     * @var mixed
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
     * - documentation: Whether the price for this service is guaranteed or quoted and subject to change.Values: False (Price NOT guaranteed) and True (Price is guaranteed).
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
     * Constructor method for Service
     * @uses Service::setRelativePosition()
     * @uses Service::setOperationSchedules()
     * @uses Service::setDescription()
     * @uses Service::setFeatures()
     * @uses Service::setIncluded()
     * @uses Service::setCode()
     * @uses Service::setBusinessServiceCode()
     * @uses Service::setAvailableToAnyGuest()
     * @uses Service::setInvCode()
     * @uses Service::setPrice()
     * @uses Service::setServiceDetails()
     * @uses Service::setTPA_Extensions()
     * @uses Service::setServicePricingType()
     * @uses Service::setReservationStatusType()
     * @uses Service::setServiceRPH()
     * @uses Service::setServiceInventoryCode()
     * @uses Service::setRatePlanCode()
     * @uses Service::setInventoryBlockCode()
     * @uses Service::setPriceGuaranteed()
     * @uses Service::setInclusive()
     * @uses Service::setQuantity()
     * @param mixed $relativePosition
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules
     * @param mixed[] $description
     * @param mixed $features
     * @param bool $included
     * @param string $code
     * @param string $businessServiceCode
     * @param bool $availableToAnyGuest
     * @param string $invCode
     * @param mixed $price
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
     */
    public function __construct($relativePosition = null, \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules = null, array $description = array(), $features = null, $included = null, $code = null, $businessServiceCode = null, $availableToAnyGuest = null, $invCode = null, $price = null, $serviceDetails = null, $tPA_Extensions = null, $servicePricingType = null, $reservationStatusType = null, $serviceRPH = null, $serviceInventoryCode = null, $ratePlanCode = null, $inventoryBlockCode = null, $priceGuaranteed = null, $inclusive = null, $quantity = null)
    {
        $this
            ->setRelativePosition($relativePosition)
            ->setOperationSchedules($operationSchedules)
            ->setDescription($description)
            ->setFeatures($features)
            ->setIncluded($included)
            ->setCode($code)
            ->setBusinessServiceCode($businessServiceCode)
            ->setAvailableToAnyGuest($availableToAnyGuest)
            ->setInvCode($invCode)
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
            ->setQuantity($quantity);
    }
    /**
     * Get RelativePosition value
     * @return mixed|null
     */
    public function getRelativePosition()
    {
        return $this->RelativePosition;
    }
    /**
     * Set RelativePosition value
     * @param mixed $relativePosition
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setRelativePosition($relativePosition = null)
    {
        $this->RelativePosition = $relativePosition;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setOperationSchedules(\Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param mixed[] $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $serviceDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($serviceDescriptionItem) ? get_class($serviceDescriptionItem) : gettype($serviceDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function addToDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get Features value
     * @return mixed|null
     */
    public function getFeatures()
    {
        return $this->Features;
    }
    /**
     * Set Features value
     * @param mixed $features
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setFeatures($features = null)
    {
        $this->Features = $features;
        return $this;
    }
    /**
     * Get Included value
     * @return bool|null
     */
    public function getIncluded()
    {
        return $this->Included;
    }
    /**
     * Set Included value
     * @param bool $included
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setIncluded($included = null)
    {
        // validation for constraint: boolean
        if (!is_null($included) && !is_bool($included)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($included)), __LINE__);
        }
        $this->Included = $included;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get BusinessServiceCode value
     * @return string|null
     */
    public function getBusinessServiceCode()
    {
        return $this->BusinessServiceCode;
    }
    /**
     * Set BusinessServiceCode value
     * @param string $businessServiceCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setBusinessServiceCode($businessServiceCode = null)
    {
        // validation for constraint: string
        if (!is_null($businessServiceCode) && !is_string($businessServiceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($businessServiceCode)), __LINE__);
        }
        $this->BusinessServiceCode = $businessServiceCode;
        return $this;
    }
    /**
     * Get AvailableToAnyGuest value
     * @return bool|null
     */
    public function getAvailableToAnyGuest()
    {
        return $this->AvailableToAnyGuest;
    }
    /**
     * Set AvailableToAnyGuest value
     * @param bool $availableToAnyGuest
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setAvailableToAnyGuest($availableToAnyGuest = null)
    {
        // validation for constraint: boolean
        if (!is_null($availableToAnyGuest) && !is_bool($availableToAnyGuest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($availableToAnyGuest)), __LINE__);
        }
        $this->AvailableToAnyGuest = $availableToAnyGuest;
        return $this;
    }
    /**
     * Get InvCode value
     * @return string|null
     */
    public function getInvCode()
    {
        return $this->InvCode;
    }
    /**
     * Set InvCode value
     * @param string $invCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setInvCode($invCode = null)
    {
        // validation for constraint: string
        if (!is_null($invCode) && !is_string($invCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invCode)), __LINE__);
        }
        $this->InvCode = $invCode;
        return $this;
    }
    /**
     * Get Price value
     * @return mixed|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param mixed $price
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setPrice($price = null)
    {
        $this->Price = $price;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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

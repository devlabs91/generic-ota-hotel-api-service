<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Restaurant StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a specific restaurant such as type of restaurant, directions, schedules, etc.
 * @subpackage Structs
 */
class Restaurant extends AbstractStructBase
{
    /**
     * The RestaurantDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription[]
     */
    public $RestaurantDescription;
    /**
     * The RelativePosition
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the directions to a specific restaurant relative to the hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $RelativePosition;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - documentation: Collection of operating times for the restaurant including detail such as season, day of week, or a combination.
     * - minOccurs: 0
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * The InfoCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes
     */
    public $InfoCodes;
    /**
     * The CuisineCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCodes
     */
    public $CuisineCodes;
    /**
     * The Features
     * Meta informations extracted from the WSDL
     * - documentation: Collection of features offered by a hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $Features;
    /**
     * The ContactInfos
     * Meta informations extracted from the WSDL
     * - documentation: Collection of contacts, allows the passing of restaurant address, phone number, etc.
     * - minOccurs: 0
     * @var mixed
     */
    public $ContactInfos;
    /**
     * The RestaurantName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the restaurant at the hotel facility.
     * - use: optional
     * @var string
     */
    public $RestaurantName;
    /**
     * The MaxSeatingCapacity
     * Meta informations extracted from the WSDL
     * - documentation: The total seating capacity for this restaurant.
     * - use: optional
     * @var int
     */
    public $MaxSeatingCapacity;
    /**
     * The MaxSingleParty
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of people that can be seated as a single party in this restaurant.
     * - use: optional
     * @var int
     */
    public $MaxSingleParty;
    /**
     * The InvCode
     * Meta informations extracted from the WSDL
     * - documentation: Identification code of the restaurant service or facility for inventory and booking purposes if the service is an inventoriable item.
     * - use: optional
     * @var string
     */
    public $InvCode;
    /**
     * The OfferBreakfast
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $OfferBreakfast;
    /**
     * The OfferLunch
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $OfferLunch;
    /**
     * The OfferDinner
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $OfferDinner;
    /**
     * The OfferBrunch
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $OfferBrunch;
    /**
     * Constructor method for Restaurant
     * @uses Restaurant::setRestaurantDescription()
     * @uses Restaurant::setRelativePosition()
     * @uses Restaurant::setOperationSchedules()
     * @uses Restaurant::setInfoCodes()
     * @uses Restaurant::setCuisineCodes()
     * @uses Restaurant::setFeatures()
     * @uses Restaurant::setContactInfos()
     * @uses Restaurant::setRestaurantName()
     * @uses Restaurant::setMaxSeatingCapacity()
     * @uses Restaurant::setMaxSingleParty()
     * @uses Restaurant::setInvCode()
     * @uses Restaurant::setOfferBreakfast()
     * @uses Restaurant::setOfferLunch()
     * @uses Restaurant::setOfferDinner()
     * @uses Restaurant::setOfferBrunch()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription[] $restaurantDescription
     * @param mixed $relativePosition
     * @param mixed $operationSchedules
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes $infoCodes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCodes $cuisineCodes
     * @param mixed $features
     * @param mixed $contactInfos
     * @param string $restaurantName
     * @param int $maxSeatingCapacity
     * @param int $maxSingleParty
     * @param string $invCode
     * @param bool $offerBreakfast
     * @param bool $offerLunch
     * @param bool $offerDinner
     * @param bool $offerBrunch
     */
    public function __construct(array $restaurantDescription = array(), $relativePosition = null, $operationSchedules = null, \Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes $infoCodes = null, \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCodes $cuisineCodes = null, $features = null, $contactInfos = null, $restaurantName = null, $maxSeatingCapacity = null, $maxSingleParty = null, $invCode = null, $offerBreakfast = null, $offerLunch = null, $offerDinner = null, $offerBrunch = null)
    {
        $this
            ->setRestaurantDescription($restaurantDescription)
            ->setRelativePosition($relativePosition)
            ->setOperationSchedules($operationSchedules)
            ->setInfoCodes($infoCodes)
            ->setCuisineCodes($cuisineCodes)
            ->setFeatures($features)
            ->setContactInfos($contactInfos)
            ->setRestaurantName($restaurantName)
            ->setMaxSeatingCapacity($maxSeatingCapacity)
            ->setMaxSingleParty($maxSingleParty)
            ->setInvCode($invCode)
            ->setOfferBreakfast($offerBreakfast)
            ->setOfferLunch($offerLunch)
            ->setOfferDinner($offerDinner)
            ->setOfferBrunch($offerBrunch);
    }
    /**
     * Get RestaurantDescription value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription[]|null
     */
    public function getRestaurantDescription()
    {
        return $this->RestaurantDescription;
    }
    /**
     * Set RestaurantDescription value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription[] $restaurantDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setRestaurantDescription(array $restaurantDescription = array())
    {
        foreach ($restaurantDescription as $restaurantRestaurantDescriptionItem) {
            // validation for constraint: itemType
            if (!$restaurantRestaurantDescriptionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription) {
                throw new \InvalidArgumentException(sprintf('The RestaurantDescription property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription, "%s" given', is_object($restaurantRestaurantDescriptionItem) ? get_class($restaurantRestaurantDescriptionItem) : gettype($restaurantRestaurantDescriptionItem)), __LINE__);
            }
        }
        $this->RestaurantDescription = $restaurantDescription;
        return $this;
    }
    /**
     * Add item to RestaurantDescription value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function addToRestaurantDescription(\Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription) {
            throw new \InvalidArgumentException(sprintf('The RestaurantDescription property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantDescription, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RestaurantDescription[] = $item;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setRelativePosition($relativePosition = null)
    {
        $this->RelativePosition = $relativePosition;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return mixed|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param mixed $operationSchedules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get InfoCodes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes|null
     */
    public function getInfoCodes()
    {
        return $this->InfoCodes;
    }
    /**
     * Set InfoCodes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes $infoCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setInfoCodes(\Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes $infoCodes = null)
    {
        $this->InfoCodes = $infoCodes;
        return $this;
    }
    /**
     * Get CuisineCodes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCodes|null
     */
    public function getCuisineCodes()
    {
        return $this->CuisineCodes;
    }
    /**
     * Set CuisineCodes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCodes $cuisineCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setCuisineCodes(\Devlabs91\GenericOtaHotelApiService\StructType\CuisineCodes $cuisineCodes = null)
    {
        $this->CuisineCodes = $cuisineCodes;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setFeatures($features = null)
    {
        $this->Features = $features;
        return $this;
    }
    /**
     * Get ContactInfos value
     * @return mixed|null
     */
    public function getContactInfos()
    {
        return $this->ContactInfos;
    }
    /**
     * Set ContactInfos value
     * @param mixed $contactInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setContactInfos($contactInfos = null)
    {
        $this->ContactInfos = $contactInfos;
        return $this;
    }
    /**
     * Get RestaurantName value
     * @return string|null
     */
    public function getRestaurantName()
    {
        return $this->RestaurantName;
    }
    /**
     * Set RestaurantName value
     * @param string $restaurantName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setRestaurantName($restaurantName = null)
    {
        // validation for constraint: string
        if (!is_null($restaurantName) && !is_string($restaurantName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restaurantName)), __LINE__);
        }
        $this->RestaurantName = $restaurantName;
        return $this;
    }
    /**
     * Get MaxSeatingCapacity value
     * @return int|null
     */
    public function getMaxSeatingCapacity()
    {
        return $this->MaxSeatingCapacity;
    }
    /**
     * Set MaxSeatingCapacity value
     * @param int $maxSeatingCapacity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setMaxSeatingCapacity($maxSeatingCapacity = null)
    {
        // validation for constraint: int
        if (!is_null($maxSeatingCapacity) && !is_numeric($maxSeatingCapacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxSeatingCapacity)), __LINE__);
        }
        $this->MaxSeatingCapacity = $maxSeatingCapacity;
        return $this;
    }
    /**
     * Get MaxSingleParty value
     * @return int|null
     */
    public function getMaxSingleParty()
    {
        return $this->MaxSingleParty;
    }
    /**
     * Set MaxSingleParty value
     * @param int $maxSingleParty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setMaxSingleParty($maxSingleParty = null)
    {
        // validation for constraint: int
        if (!is_null($maxSingleParty) && !is_numeric($maxSingleParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxSingleParty)), __LINE__);
        }
        $this->MaxSingleParty = $maxSingleParty;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
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
     * Get OfferBreakfast value
     * @return bool|null
     */
    public function getOfferBreakfast()
    {
        return $this->OfferBreakfast;
    }
    /**
     * Set OfferBreakfast value
     * @param bool $offerBreakfast
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setOfferBreakfast($offerBreakfast = null)
    {
        // validation for constraint: boolean
        if (!is_null($offerBreakfast) && !is_bool($offerBreakfast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($offerBreakfast)), __LINE__);
        }
        $this->OfferBreakfast = $offerBreakfast;
        return $this;
    }
    /**
     * Get OfferLunch value
     * @return bool|null
     */
    public function getOfferLunch()
    {
        return $this->OfferLunch;
    }
    /**
     * Set OfferLunch value
     * @param bool $offerLunch
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setOfferLunch($offerLunch = null)
    {
        // validation for constraint: boolean
        if (!is_null($offerLunch) && !is_bool($offerLunch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($offerLunch)), __LINE__);
        }
        $this->OfferLunch = $offerLunch;
        return $this;
    }
    /**
     * Get OfferDinner value
     * @return bool|null
     */
    public function getOfferDinner()
    {
        return $this->OfferDinner;
    }
    /**
     * Set OfferDinner value
     * @param bool $offerDinner
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setOfferDinner($offerDinner = null)
    {
        // validation for constraint: boolean
        if (!is_null($offerDinner) && !is_bool($offerDinner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($offerDinner)), __LINE__);
        }
        $this->OfferDinner = $offerDinner;
        return $this;
    }
    /**
     * Get OfferBrunch value
     * @return bool|null
     */
    public function getOfferBrunch()
    {
        return $this->OfferBrunch;
    }
    /**
     * Set OfferBrunch value
     * @param bool $offerBrunch
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setOfferBrunch($offerBrunch = null)
    {
        // validation for constraint: boolean
        if (!is_null($offerBrunch) && !is_bool($offerBrunch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($offerBrunch)), __LINE__);
        }
        $this->OfferBrunch = $offerBrunch;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestaurantType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information associated with a specific restaurant. | This may be used to uniquely identify the restaurant.
 * @subpackage Structs
 */
class RestaurantType extends AbstractStructBase
{
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions
     */
    public $MultimediaDescriptions;
    /**
     * The RelativePosition
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the directions to a specific restaurant.
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
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Descriptive text that describes the restaurant. | Descriptive text that describes the transportation. | Descriptive text that describes the feature.
     * - pattern: [A-Za-z0-9]{1,500}
     * @var string
     */
    public $DescriptiveText;
    /**
     * The RestaurantName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the restaurant at the facility.
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
     * The ProximityCode
     * Meta informations extracted from the WSDL
     * - documentation: Denotes whether a service is onsite, offsite or information is not available. Refer to OpenTravel Code Table Proximity (PRX).
     * - use: optional
     * @var string
     */
    public $ProximityCode;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: Used to define the display order.
     * - use: optional
     * @var int
     */
    public $Sort;
    /**
     * Constructor method for RestaurantType
     * @uses RestaurantType::setMultimediaDescriptions()
     * @uses RestaurantType::setRelativePosition()
     * @uses RestaurantType::setOperationSchedules()
     * @uses RestaurantType::setInfoCodes()
     * @uses RestaurantType::setCuisineCodes()
     * @uses RestaurantType::setDescriptiveText()
     * @uses RestaurantType::setRestaurantName()
     * @uses RestaurantType::setMaxSeatingCapacity()
     * @uses RestaurantType::setMaxSingleParty()
     * @uses RestaurantType::setInvCode()
     * @uses RestaurantType::setOfferBreakfast()
     * @uses RestaurantType::setOfferLunch()
     * @uses RestaurantType::setOfferDinner()
     * @uses RestaurantType::setOfferBrunch()
     * @uses RestaurantType::setProximityCode()
     * @uses RestaurantType::setSort()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions
     * @param mixed $relativePosition
     * @param mixed $operationSchedules
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes $infoCodes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCodes $cuisineCodes
     * @param string $descriptiveText
     * @param string $restaurantName
     * @param int $maxSeatingCapacity
     * @param int $maxSingleParty
     * @param string $invCode
     * @param bool $offerBreakfast
     * @param bool $offerLunch
     * @param bool $offerDinner
     * @param bool $offerBrunch
     * @param string $proximityCode
     * @param int $sort
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions = null, $relativePosition = null, $operationSchedules = null, \Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes $infoCodes = null, \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCodes $cuisineCodes = null, $descriptiveText = null, $restaurantName = null, $maxSeatingCapacity = null, $maxSingleParty = null, $invCode = null, $offerBreakfast = null, $offerLunch = null, $offerDinner = null, $offerBrunch = null, $proximityCode = null, $sort = null)
    {
        $this
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setRelativePosition($relativePosition)
            ->setOperationSchedules($operationSchedules)
            ->setInfoCodes($infoCodes)
            ->setCuisineCodes($cuisineCodes)
            ->setDescriptiveText($descriptiveText)
            ->setRestaurantName($restaurantName)
            ->setMaxSeatingCapacity($maxSeatingCapacity)
            ->setMaxSingleParty($maxSingleParty)
            ->setInvCode($invCode)
            ->setOfferBreakfast($offerBreakfast)
            ->setOfferLunch($offerLunch)
            ->setOfferDinner($offerDinner)
            ->setOfferBrunch($offerBrunch)
            ->setProximityCode($proximityCode)
            ->setSort($sort);
    }
    /**
     * Get MultimediaDescriptions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
     */
    public function setMultimediaDescriptions(\Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
     */
    public function setCuisineCodes(\Devlabs91\GenericOtaHotelApiService\StructType\CuisineCodes $cuisineCodes = null)
    {
        $this->CuisineCodes = $cuisineCodes;
        return $this;
    }
    /**
     * Get DescriptiveText value
     * @return string|null
     */
    public function getDescriptiveText()
    {
        return $this->DescriptiveText;
    }
    /**
     * Set DescriptiveText value
     * @param string $descriptiveText
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
     */
    public function setDescriptiveText($descriptiveText = null)
    {
        // validation for constraint: pattern
        if (is_scalar($descriptiveText) && !preg_match('/[A-Za-z0-9]{1,500}/', $descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Za-z0-9]{1,500}", "%s" given', var_export($descriptiveText, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($descriptiveText) && !is_string($descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptiveText)), __LINE__);
        }
        $this->DescriptiveText = $descriptiveText;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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
     * Get ProximityCode value
     * @return string|null
     */
    public function getProximityCode()
    {
        return $this->ProximityCode;
    }
    /**
     * Set ProximityCode value
     * @param string $proximityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
     */
    public function setProximityCode($proximityCode = null)
    {
        // validation for constraint: string
        if (!is_null($proximityCode) && !is_string($proximityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proximityCode)), __LINE__);
        }
        $this->ProximityCode = $proximityCode;
        return $this;
    }
    /**
     * Get Sort value
     * @return int|null
     */
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @param int $sort
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
     */
    public function setSort($sort = null)
    {
        // validation for constraint: int
        if (!is_null($sort) && !is_numeric($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sort)), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantType
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

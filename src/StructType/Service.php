<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies services of interest. | Identifies services of interest. | A hotel service or amenity available to the guest such as a business center, concierge, valet parking, massage, newspapers, etc. | May be used to give further
 * detail on the code or to remove an obsolete item. This may be used to provide further information for either Code or BusinessServiceCode (e.g. if printer is selected, the code detail may be used to describe the type of printer available) as
 * determined by the implementer. | A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
 * @subpackage Structs
 */
class Service extends AbstractStructBase
{
    /**
     * The BusinessServiceCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to identify a specific business service. Refer to OpenTravel Code list Business Srvc Type (BUS). | Used to identify a specific business service. Refer to OpenTravel Code list Business Srvc Type (BUS). | Refer to OpenTravel Code
     * List Business Srvc Type (BUS).
     * - use: optional
     * @var string
     */
    public $BusinessServiceCode;
    /**
     * The ServiceInventoryCode
     * Meta informations extracted from the WSDL
     * - documentation: The representation of the specific service being reserved.
     * - use: optional
     * @var string
     */
    public $ServiceInventoryCode;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of services (e.g., tickets, rounds of golf). | Denotes the total number of service items identified by the Code attribute.
     * - use: optional
     * @var string
     */
    public $Quantity;
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - documentation: Contact information pertaining to a service.
     * - minOccurs: 0
     * @var mixed
     */
    public $Contact;
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
     * - documentation: Collection of days, times, and fees.
     * - minOccurs: 0
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Multimedia information about the service.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The Features
     * Meta informations extracted from the WSDL
     * - documentation: Collection of features offered by a hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $Features;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive text that describes the service.
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
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
     * - documentation: Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with either Code or BusinessServiceCode.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
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
     * The ProximityCode
     * Meta informations extracted from the WSDL
     * - documentation: Denotes whether a service is onsite, offsite or information is not available. Refer to OpenTravel Code Table Proximity (PRX).
     * - use: optional
     * @var string
     */
    public $ProximityCode;
    /**
     * The MealPlanCode
     * Meta informations extracted from the WSDL
     * - documentation: This describes available meal plans for a property. Refer to OpenTravel Code Table Meal Plan Type (MPT).
     * - use: optional
     * @var string
     */
    public $MealPlanCode;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: Used to define the display order.
     * - use: optional
     * @var int
     */
    public $Sort;
    /**
     * The MeetingRoomCode
     * Meta informations extracted from the WSDL
     * - documentation: At this level, MeetingRoomCode is intended for meeting/business services when high level data is being sent that requires operation schedule information and/or contact information. Refer to OpenTravel Codelist Meeting Room Code
     * (MRC). OpenTravel Codelist MRC is also used in FacilityInfo/MeetingRooms/Codes/Code for the instance when an amenity or service applies to all meeting rooms and in FacilityInfo/MeetingRooms/MeetingRoom/Codes/Code for the instance when an amenity or
     * service applies to a specific meeting room.
     * - use: optional
     * @var string
     */
    public $MeetingRoomCode;
    /**
     * Constructor method for Service
     * @uses Service::setBusinessServiceCode()
     * @uses Service::setServiceInventoryCode()
     * @uses Service::setQuantity()
     * @uses Service::setContact()
     * @uses Service::setRelativePosition()
     * @uses Service::setOperationSchedules()
     * @uses Service::setMultimediaDescriptions()
     * @uses Service::setFeatures()
     * @uses Service::setDescriptiveText()
     * @uses Service::setIncluded()
     * @uses Service::setCode()
     * @uses Service::setExistsCode()
     * @uses Service::setAvailableToAnyGuest()
     * @uses Service::setInvCode()
     * @uses Service::setProximityCode()
     * @uses Service::setMealPlanCode()
     * @uses Service::setSort()
     * @uses Service::setMeetingRoomCode()
     * @param string $businessServiceCode
     * @param string $serviceInventoryCode
     * @param string $quantity
     * @param mixed $contact
     * @param mixed $relativePosition
     * @param mixed $operationSchedules
     * @param mixed $multimediaDescriptions
     * @param mixed $features
     * @param string $descriptiveText
     * @param bool $included
     * @param string $code
     * @param string $existsCode
     * @param bool $availableToAnyGuest
     * @param string $invCode
     * @param string $proximityCode
     * @param string $mealPlanCode
     * @param int $sort
     * @param string $meetingRoomCode
     */
    public function __construct($businessServiceCode = null, $serviceInventoryCode = null, $quantity = null, $contact = null, $relativePosition = null, $operationSchedules = null, $multimediaDescriptions = null, $features = null, $descriptiveText = null, $included = null, $code = null, $existsCode = null, $availableToAnyGuest = null, $invCode = null, $proximityCode = null, $mealPlanCode = null, $sort = null, $meetingRoomCode = null)
    {
        $this
            ->setBusinessServiceCode($businessServiceCode)
            ->setServiceInventoryCode($serviceInventoryCode)
            ->setQuantity($quantity)
            ->setContact($contact)
            ->setRelativePosition($relativePosition)
            ->setOperationSchedules($operationSchedules)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setFeatures($features)
            ->setDescriptiveText($descriptiveText)
            ->setIncluded($included)
            ->setCode($code)
            ->setExistsCode($existsCode)
            ->setAvailableToAnyGuest($availableToAnyGuest)
            ->setInvCode($invCode)
            ->setProximityCode($proximityCode)
            ->setMealPlanCode($mealPlanCode)
            ->setSort($sort)
            ->setMeetingRoomCode($meetingRoomCode);
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
     * Get Contact value
     * @return mixed|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param mixed $contact
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setContact($contact = null)
    {
        $this->Contact = $contact;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get MultimediaDescriptions value
     * @return mixed|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param mixed $multimediaDescriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setDescriptiveText($descriptiveText = null)
    {
        // validation for constraint: string
        if (!is_null($descriptiveText) && !is_string($descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptiveText)), __LINE__);
        }
        $this->DescriptiveText = $descriptiveText;
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
     * Get ExistsCode value
     * @return string|null
     */
    public function getExistsCode()
    {
        return $this->ExistsCode;
    }
    /**
     * Set ExistsCode value
     * @param string $existsCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setExistsCode($existsCode = null)
    {
        // validation for constraint: string
        if (!is_null($existsCode) && !is_string($existsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($existsCode)), __LINE__);
        }
        $this->ExistsCode = $existsCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * Get MealPlanCode value
     * @return string|null
     */
    public function getMealPlanCode()
    {
        return $this->MealPlanCode;
    }
    /**
     * Set MealPlanCode value
     * @param string $mealPlanCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setMealPlanCode($mealPlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($mealPlanCode) && !is_string($mealPlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealPlanCode)), __LINE__);
        }
        $this->MealPlanCode = $mealPlanCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
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
     * Get MeetingRoomCode value
     * @return string|null
     */
    public function getMeetingRoomCode()
    {
        return $this->MeetingRoomCode;
    }
    /**
     * Set MeetingRoomCode value
     * @param string $meetingRoomCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Service
     */
    public function setMeetingRoomCode($meetingRoomCode = null)
    {
        // validation for constraint: string
        if (!is_null($meetingRoomCode) && !is_string($meetingRoomCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meetingRoomCode)), __LINE__);
        }
        $this->MeetingRoomCode = $meetingRoomCode;
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

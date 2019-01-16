<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Feature StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the security and physically challenged features that a hotel offers. | A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a
 * particular implementation. | Allows for the description of any features and/or amenities that are made available as part of this specific room and this specifiic rate plan, for example, large screen television, video/DVD player in room, room service
 * breakfast, and details about that breakfast.
 * @subpackage Structs
 */
class Feature extends AbstractStructBase
{
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Charge
     */
    public $Charge;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Multimedia information about the feature.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
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
     * The AccessibleCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Physically Challenged Feature Code (PHY). For any of the codes which apply to a room count, use the GuestRoom\@Quantity. Additionally, GuestRoom\@RoomTypeName may be used to pass the specific room type
     * or you could pass "all" or "total" to indicate the AccessibleCode applies to the total hotel.
     * - use: optional
     * @var string
     */
    public $AccessibleCode;
    /**
     * The SecurityCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Security Feature Code (SEC).
     * - use: optional
     * @var string
     */
    public $SecurityCode;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Codelist Option Type Code (OTC). This is used in conjunction with AccessibleCode or SecurityCode.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * The ProximityCode
     * Meta informations extracted from the WSDL
     * - documentation: Denotes the general location of a feature. Refer to OpenTravel Codelist Proximity (PRX).
     * - use: optional
     * @var string
     */
    public $ProximityCode;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The RoomAmenity
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Room Amenity Type (RMA).
     * - use: optional
     * @var string
     */
    public $RoomAmenity;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Provides the quantity of the amenity in the room. When zero, the amenity is either unavailable or not allowed.
     * - use: optional
     * @var string
     */
    public $Quantity;
    /**
     * The RoomViewCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of view a room has. Refer to OpenTravel Code List Room View Type (RVT).
     * - use: optional
     * @var string
     */
    public $RoomViewCode;
    /**
     * Constructor method for Feature
     * @uses Feature::setCharge()
     * @uses Feature::setMultimediaDescriptions()
     * @uses Feature::setDescriptiveText()
     * @uses Feature::setAccessibleCode()
     * @uses Feature::setSecurityCode()
     * @uses Feature::setExistsCode()
     * @uses Feature::setProximityCode()
     * @uses Feature::setDescription()
     * @uses Feature::setRoomAmenity()
     * @uses Feature::setQuantity()
     * @uses Feature::setRoomViewCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Charge $charge
     * @param mixed $multimediaDescriptions
     * @param string $descriptiveText
     * @param string $accessibleCode
     * @param string $securityCode
     * @param string $existsCode
     * @param string $proximityCode
     * @param mixed[] $description
     * @param string $roomAmenity
     * @param string $quantity
     * @param string $roomViewCode
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Charge $charge = null, $multimediaDescriptions = null, $descriptiveText = null, $accessibleCode = null, $securityCode = null, $existsCode = null, $proximityCode = null, array $description = array(), $roomAmenity = null, $quantity = null, $roomViewCode = null)
    {
        $this
            ->setCharge($charge)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setDescriptiveText($descriptiveText)
            ->setAccessibleCode($accessibleCode)
            ->setSecurityCode($securityCode)
            ->setExistsCode($existsCode)
            ->setProximityCode($proximityCode)
            ->setDescription($description)
            ->setRoomAmenity($roomAmenity)
            ->setQuantity($quantity)
            ->setRoomViewCode($roomViewCode);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
     */
    public function setCharge(\Devlabs91\GenericOtaHotelApiService\StructType\Charge $charge = null)
    {
        $this->Charge = $charge;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
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
     * Get AccessibleCode value
     * @return string|null
     */
    public function getAccessibleCode()
    {
        return $this->AccessibleCode;
    }
    /**
     * Set AccessibleCode value
     * @param string $accessibleCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
     */
    public function setAccessibleCode($accessibleCode = null)
    {
        // validation for constraint: string
        if (!is_null($accessibleCode) && !is_string($accessibleCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessibleCode)), __LINE__);
        }
        $this->AccessibleCode = $accessibleCode;
        return $this;
    }
    /**
     * Get SecurityCode value
     * @return string|null
     */
    public function getSecurityCode()
    {
        return $this->SecurityCode;
    }
    /**
     * Set SecurityCode value
     * @param string $securityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
     */
    public function setSecurityCode($securityCode = null)
    {
        // validation for constraint: string
        if (!is_null($securityCode) && !is_string($securityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($securityCode)), __LINE__);
        }
        $this->SecurityCode = $securityCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $featureDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($featureDescriptionItem) ? get_class($featureDescriptionItem) : gettype($featureDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
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
     * Get RoomAmenity value
     * @return string|null
     */
    public function getRoomAmenity()
    {
        return $this->RoomAmenity;
    }
    /**
     * Set RoomAmenity value
     * @param string $roomAmenity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
     */
    public function setRoomAmenity($roomAmenity = null)
    {
        // validation for constraint: string
        if (!is_null($roomAmenity) && !is_string($roomAmenity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomAmenity)), __LINE__);
        }
        $this->RoomAmenity = $roomAmenity;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
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
     * Get RoomViewCode value
     * @return string|null
     */
    public function getRoomViewCode()
    {
        return $this->RoomViewCode;
    }
    /**
     * Set RoomViewCode value
     * @param string $roomViewCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
     */
    public function setRoomViewCode($roomViewCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomViewCode) && !is_string($roomViewCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomViewCode)), __LINE__);
        }
        $this->RoomViewCode = $roomViewCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Feature StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the security and physically challenged features that a hotel offers. | Allows for the description of any features and/or amenities that are made available as part of this specific room and this specifiic rate plan, for
 * example, large screen television, video/DVD player in room. room service breakfast, and details about that breakfast.
 * @subpackage Structs
 */
class Feature extends AbstractStructBase
{
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this feature is chargeable.
     * - minOccurs: 0
     * @var mixed
     */
    public $Charge;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: This will allow text descriptions to be sent with accessability features (e.g. complies with Local/State/Federal laws for accessability).
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The AccessibleCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Physically Challenged Feature Code (PHY).
     * - use: optional
     * @var string
     */
    public $AccessibleCode;
    /**
     * The SecurityCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Security Feature Code (SEC).
     * - use: optional
     * @var string
     */
    public $SecurityCode;
    /**
     * The RoomAmenity
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Room Amenity Type (RMA).
     * - use: optional
     * @var string
     */
    public $RoomAmenity;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Quantity;
    /**
     * Constructor method for Feature
     * @uses Feature::setCharge()
     * @uses Feature::setDescription()
     * @uses Feature::setAccessibleCode()
     * @uses Feature::setSecurityCode()
     * @uses Feature::setRoomAmenity()
     * @uses Feature::setQuantity()
     * @param mixed $charge
     * @param mixed[] $description
     * @param string $accessibleCode
     * @param string $securityCode
     * @param string $roomAmenity
     * @param string $quantity
     */
    public function __construct($charge = null, array $description = array(), $accessibleCode = null, $securityCode = null, $roomAmenity = null, $quantity = null)
    {
        $this
            ->setCharge($charge)
            ->setDescription($description)
            ->setAccessibleCode($accessibleCode)
            ->setSecurityCode($securityCode)
            ->setRoomAmenity($roomAmenity)
            ->setQuantity($quantity);
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
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

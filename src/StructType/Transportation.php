<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transportation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the directions to/from a specific location for a mode of travel. | May be used to give further detail on the code (e.g. if a trolley is chosen, the trolley name could be added here) or to remove an obsolete item.
 * @subpackage Structs
 */
class Transportation extends AbstractStructBase
{
    /**
     * The Descriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Descriptions;
    /**
     * The NotificationRequired
     * Meta informations extracted from the WSDL
     * - documentation: This would be used for information such as a shuttle needs to be requested or a reservation is required.
     * - use: optional
     * @var string
     */
    public $NotificationRequired;
    /**
     * The TransportationCode
     * Meta informations extracted from the WSDL
     * - documentation: The mode of transportation. Refer to OTA Code List Transportation Code (TRP).
     * - use: optional
     * @var string
     */
    public $TransportationCode;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive information about the mode of transportation.
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The TypicalTravelTime
     * Meta informations extracted from the WSDL
     * - documentation: The normal (average) travel time required to get to or from the location, measured in minutes.
     * - use: optional
     * @var string
     */
    public $TypicalTravelTime;
    /**
     * Constructor method for Transportation
     * @uses Transportation::setDescriptions()
     * @uses Transportation::setNotificationRequired()
     * @uses Transportation::setTransportationCode()
     * @uses Transportation::setDescription()
     * @uses Transportation::setTypicalTravelTime()
     * @param mixed[] $descriptions
     * @param string $notificationRequired
     * @param string $transportationCode
     * @param string $description
     * @param string $typicalTravelTime
     */
    public function __construct(array $descriptions = array(), $notificationRequired = null, $transportationCode = null, $description = null, $typicalTravelTime = null)
    {
        $this
            ->setDescriptions($descriptions)
            ->setNotificationRequired($notificationRequired)
            ->setTransportationCode($transportationCode)
            ->setDescription($description)
            ->setTypicalTravelTime($typicalTravelTime);
    }
    /**
     * Get Descriptions value
     * @return mixed[]|null
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }
    /**
     * Set Descriptions value
     * @throws \InvalidArgumentException
     * @param mixed[] $descriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setDescriptions(array $descriptions = array())
    {
        foreach ($descriptions as $transportationDescriptionsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Descriptions property can only contain items of anyType, "%s" given', is_object($transportationDescriptionsItem) ? get_class($transportationDescriptionsItem) : gettype($transportationDescriptionsItem)), __LINE__);
            }
        }
        $this->Descriptions = $descriptions;
        return $this;
    }
    /**
     * Add item to Descriptions value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function addToDescriptions($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Descriptions property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Descriptions[] = $item;
        return $this;
    }
    /**
     * Get NotificationRequired value
     * @return string|null
     */
    public function getNotificationRequired()
    {
        return $this->NotificationRequired;
    }
    /**
     * Set NotificationRequired value
     * @param string $notificationRequired
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setNotificationRequired($notificationRequired = null)
    {
        // validation for constraint: string
        if (!is_null($notificationRequired) && !is_string($notificationRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notificationRequired)), __LINE__);
        }
        $this->NotificationRequired = $notificationRequired;
        return $this;
    }
    /**
     * Get TransportationCode value
     * @return string|null
     */
    public function getTransportationCode()
    {
        return $this->TransportationCode;
    }
    /**
     * Set TransportationCode value
     * @param string $transportationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setTransportationCode($transportationCode = null)
    {
        // validation for constraint: string
        if (!is_null($transportationCode) && !is_string($transportationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transportationCode)), __LINE__);
        }
        $this->TransportationCode = $transportationCode;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get TypicalTravelTime value
     * @return string|null
     */
    public function getTypicalTravelTime()
    {
        return $this->TypicalTravelTime;
    }
    /**
     * Set TypicalTravelTime value
     * @param string $typicalTravelTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setTypicalTravelTime($typicalTravelTime = null)
    {
        // validation for constraint: string
        if (!is_null($typicalTravelTime) && !is_string($typicalTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typicalTravelTime)), __LINE__);
        }
        $this->TypicalTravelTime = $typicalTravelTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
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

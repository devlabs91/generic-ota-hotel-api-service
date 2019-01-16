<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Event StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the event to which the rooming list applies. | Used for the earliest start date and the latest end date of the event.
 * @subpackage Structs
 */
class Event extends AbstractStructBase
{
    /**
     * The EventContact
     * Meta informations extracted from the WSDL
     * - documentation: The event organizer or host.
     * @var mixed
     */
    public $EventContact;
    /**
     * The MeetingName
     * Meta informations extracted from the WSDL
     * - documentation: This is used to identify the name of the meeting.
     * - use: optional
     * @var string
     */
    public $MeetingName;
    /**
     * Constructor method for Event
     * @uses Event::setEventContact()
     * @uses Event::setMeetingName()
     * @param mixed $eventContact
     * @param string $meetingName
     */
    public function __construct($eventContact = null, $meetingName = null)
    {
        $this
            ->setEventContact($eventContact)
            ->setMeetingName($meetingName);
    }
    /**
     * Get EventContact value
     * @return mixed|null
     */
    public function getEventContact()
    {
        return $this->EventContact;
    }
    /**
     * Set EventContact value
     * @param mixed $eventContact
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Event
     */
    public function setEventContact($eventContact = null)
    {
        $this->EventContact = $eventContact;
        return $this;
    }
    /**
     * Get MeetingName value
     * @return string|null
     */
    public function getMeetingName()
    {
        return $this->MeetingName;
    }
    /**
     * Set MeetingName value
     * @param string $meetingName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Event
     */
    public function setMeetingName($meetingName = null)
    {
        // validation for constraint: string
        if (!is_null($meetingName) && !is_string($meetingName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meetingName)), __LINE__);
        }
        $this->MeetingName = $meetingName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Event
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

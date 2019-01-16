<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestorID StructType
 * Meta informations extracted from the WSDL
 * - documentation: An identifier of the entity making the request (e.g. ATA/IATA/ID number, Electronic Reservation Service Provider (ERSP), Association of British Travel Agents (ABTA)).
 * @subpackage Structs
 */
class RequestorID extends UniqueID_Type
{
    /**
     * The MessagePassword
     * Meta informations extracted from the WSDL
     * - documentation: This password provides an additional level of security that the recipient can use to validate the sending party's authority to use the message.
     * - use: optional
     * @var string
     */
    public $MessagePassword;
    /**
     * Constructor method for RequestorID
     * @uses RequestorID::setMessagePassword()
     * @param string $messagePassword
     */
    public function __construct($messagePassword = null)
    {
        $this
            ->setMessagePassword($messagePassword);
    }
    /**
     * Get MessagePassword value
     * @return string|null
     */
    public function getMessagePassword()
    {
        return $this->MessagePassword;
    }
    /**
     * Set MessagePassword value
     * @param string $messagePassword
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequestorID
     */
    public function setMessagePassword($messagePassword = null)
    {
        // validation for constraint: string
        if (!is_null($messagePassword) && !is_string($messagePassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messagePassword)), __LINE__);
        }
        $this->MessagePassword = $messagePassword;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequestorID
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

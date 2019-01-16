<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageAcknowledgementType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information to acknowledge the receipt of a message. | The OTA_PayloadStdAttributes defines the standard attributes that appear on the root element for all OpenTravel Messages.
 * @subpackage Structs
 */
class MessageAcknowledgementType extends AbstractStructBase
{
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - documentation: Returning an empty element of this type indicates the successful processing of an OpenTravel message. This is used in conjunction with Warnings to report any warnings or business errors.
     * @var mixed
     */
    public $Success;
    /**
     * The Warnings
     * Meta informations extracted from the WSDL
     * - documentation: Used when a message has been successfully processed to report any warnings or business errors that occurred.
     * - minOccurs: 0
     * @var mixed
     */
    public $Warnings;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - documentation: Indicates an error occurred during the processing of an OpenTravel message. If the message successfully processes, but there are business errors, those errors should be passed in the warning element.
     * @var mixed
     */
    public $Errors;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: May be used to return the unique id from the request message.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for MessageAcknowledgementType
     * @uses MessageAcknowledgementType::setSuccess()
     * @uses MessageAcknowledgementType::setWarnings()
     * @uses MessageAcknowledgementType::setErrors()
     * @uses MessageAcknowledgementType::setUniqueID()
     * @uses MessageAcknowledgementType::setTPA_Extensions()
     * @param mixed $success
     * @param mixed $warnings
     * @param mixed $errors
     * @param mixed $uniqueID
     * @param mixed $tPA_Extensions
     */
    public function __construct($success = null, $warnings = null, $errors = null, $uniqueID = null, $tPA_Extensions = null)
    {
        $this
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setErrors($errors)
            ->setUniqueID($uniqueID)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get Success value
     * @return mixed|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param mixed $success
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageAcknowledgementType
     */
    public function setSuccess($success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Warnings value
     * @return mixed|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }
    /**
     * Set Warnings value
     * @param mixed $warnings
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageAcknowledgementType
     */
    public function setWarnings($warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get Errors value
     * @return mixed|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param mixed $errors
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageAcknowledgementType
     */
    public function setErrors($errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageAcknowledgementType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageAcknowledgementType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageAcknowledgementType
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

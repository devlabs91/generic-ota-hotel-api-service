<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageAcknowledgementType StructType
 * @subpackage Structs
 */
class MessageAcknowledgementType extends AbstractStructBase
{
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - documentation: The presence of the empty Success element explicitly indicates that the OTA versioned message succeeded.
     * @var mixed
     */
    public $Success;
    /**
     * The Warnings
     * Meta informations extracted from the WSDL
     * - documentation: Used in conjunction with the Success element to define one or more business errors.
     * - minOccurs: 0
     * @var mixed
     */
    public $Warnings;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - documentation: Errors is returned if the request was unable to be processed.
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
     * Constructor method for MessageAcknowledgementType
     * @uses MessageAcknowledgementType::setSuccess()
     * @uses MessageAcknowledgementType::setWarnings()
     * @uses MessageAcknowledgementType::setErrors()
     * @uses MessageAcknowledgementType::setUniqueID()
     * @param mixed $success
     * @param mixed $warnings
     * @param mixed $errors
     * @param mixed $uniqueID
     */
    public function __construct($success = null, $warnings = null, $errors = null, $uniqueID = null)
    {
        $this
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setErrors($errors)
            ->setUniqueID($uniqueID);
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

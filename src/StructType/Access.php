<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Access StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the action taken on the record. | The identifier of the system that performed the action on the profile record.
 * @subpackage Structs
 */
class Access extends AbstractStructBase
{
    /**
     * The AccessPerson
     * Meta informations extracted from the WSDL
     * - documentation: Name of individual who originated or updated record.
     * - minOccurs: 0
     * @var mixed
     */
    public $AccessPerson;
    /**
     * The AccessComment
     * Meta informations extracted from the WSDL
     * - documentation: Free text comment added by the person accessing the profile record.
     * - minOccurs: 0
     * @var mixed
     */
    public $AccessComment;
    /**
     * The ActionType
     * @var string
     */
    public $ActionType;
    /**
     * The ActionDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Month, day, year and optionally in hour, minute, second of day in ISO 8601 format of the action taken on the profile.
     * @var string
     */
    public $ActionDateTime;
    /**
     * Constructor method for Access
     * @uses Access::setAccessPerson()
     * @uses Access::setAccessComment()
     * @uses Access::setActionType()
     * @uses Access::setActionDateTime()
     * @param mixed $accessPerson
     * @param mixed $accessComment
     * @param string $actionType
     * @param string $actionDateTime
     */
    public function __construct($accessPerson = null, $accessComment = null, $actionType = null, $actionDateTime = null)
    {
        $this
            ->setAccessPerson($accessPerson)
            ->setAccessComment($accessComment)
            ->setActionType($actionType)
            ->setActionDateTime($actionDateTime);
    }
    /**
     * Get AccessPerson value
     * @return mixed|null
     */
    public function getAccessPerson()
    {
        return $this->AccessPerson;
    }
    /**
     * Set AccessPerson value
     * @param mixed $accessPerson
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Access
     */
    public function setAccessPerson($accessPerson = null)
    {
        $this->AccessPerson = $accessPerson;
        return $this;
    }
    /**
     * Get AccessComment value
     * @return mixed|null
     */
    public function getAccessComment()
    {
        return $this->AccessComment;
    }
    /**
     * Set AccessComment value
     * @param mixed $accessComment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Access
     */
    public function setAccessComment($accessComment = null)
    {
        $this->AccessComment = $accessComment;
        return $this;
    }
    /**
     * Get ActionType value
     * @return string|null
     */
    public function getActionType()
    {
        return $this->ActionType;
    }
    /**
     * Set ActionType value
     * @param string $actionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Access
     */
    public function setActionType($actionType = null)
    {
        // validation for constraint: string
        if (!is_null($actionType) && !is_string($actionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionType)), __LINE__);
        }
        $this->ActionType = $actionType;
        return $this;
    }
    /**
     * Get ActionDateTime value
     * @return string|null
     */
    public function getActionDateTime()
    {
        return $this->ActionDateTime;
    }
    /**
     * Set ActionDateTime value
     * @param string $actionDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Access
     */
    public function setActionDateTime($actionDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($actionDateTime) && !is_string($actionDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionDateTime)), __LINE__);
        }
        $this->ActionDateTime = $actionDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Access
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

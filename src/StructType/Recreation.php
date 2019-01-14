<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Recreation StructType
 * Meta informations extracted from the WSDL
 * - documentation: A recreation facility available to the guest. These may or may not be operated by the hotel or located at the hotel.
 * @subpackage Structs
 */
class Recreation extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - documentation: Used to pass contact information of a specific recreation facility.
     * - minOccurs: 0
     * @var mixed
     */
    public $Contact;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules
     */
    public $OperationSchedules;
    /**
     * The RefPoints
     * Meta informations extracted from the WSDL
     * - documentation: Identifies where the recreation facility is located.
     * - minOccurs: 0
     * @var mixed
     */
    public $RefPoints;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Describes the recreation facility.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The RecreationDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails
     */
    public $RecreationDetails;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Recreation Srvc Detail Type (REC).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * Constructor method for Recreation
     * @uses Recreation::setContact()
     * @uses Recreation::setOperationSchedules()
     * @uses Recreation::setRefPoints()
     * @uses Recreation::setDescription()
     * @uses Recreation::setRecreationDetails()
     * @uses Recreation::setCode()
     * @uses Recreation::setName()
     * @param mixed $contact
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules
     * @param mixed $refPoints
     * @param mixed[] $description
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails $recreationDetails
     * @param string $code
     * @param string $name
     */
    public function __construct($contact = null, \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules = null, $refPoints = null, array $description = array(), \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails $recreationDetails = null, $code = null, $name = null)
    {
        $this
            ->setContact($contact)
            ->setOperationSchedules($operationSchedules)
            ->setRefPoints($refPoints)
            ->setDescription($description)
            ->setRecreationDetails($recreationDetails)
            ->setCode($code)
            ->setName($name);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
     */
    public function setContact($contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
     */
    public function setOperationSchedules(\Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get RefPoints value
     * @return mixed|null
     */
    public function getRefPoints()
    {
        return $this->RefPoints;
    }
    /**
     * Set RefPoints value
     * @param mixed $refPoints
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
     */
    public function setRefPoints($refPoints = null)
    {
        $this->RefPoints = $refPoints;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $recreationDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($recreationDescriptionItem) ? get_class($recreationDescriptionItem) : gettype($recreationDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
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
     * Get RecreationDetails value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails|null
     */
    public function getRecreationDetails()
    {
        return $this->RecreationDetails;
    }
    /**
     * Set RecreationDetails value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails $recreationDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
     */
    public function setRecreationDetails(\Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails $recreationDetails = null)
    {
        $this->RecreationDetails = $recreationDetails;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
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

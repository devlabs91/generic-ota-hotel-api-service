<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Recreation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies recreation facilities or amenities of interest. | Identifies recreation facilities or amenities of interest. | A recreation facility available to the guest. These may or may not be operated by the hotel or located at the
 * hotel. | This may be used to uniquely identify a recreational facility.
 * @subpackage Structs
 */
class Recreation extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Used to identify a specific recreation activity. Refer to OpenTravel Code list Recreation Srvc Type (RST). | Used to identify a specific recreation activity. Refer to OpenTravel Code list Recreation Srvc Type (RST). | Refer to
     * OpenTravel Code List Recreation Srvc Type (RST).
     * - use: optional
     * @var string
     */
    public $Code;
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
     * - documentation: Collection of days, times, and fees.
     * - minOccurs: 0
     * @var mixed
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
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions
     */
    public $MultimediaDescriptions;
    /**
     * The RecreationDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails
     */
    public $RecreationDetails;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive text that describes the recreation facility.
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The ProximityCode
     * Meta informations extracted from the WSDL
     * - documentation: Denotes whether a recreation is onsite, offsite or information is not available. Refer to OpenTravel Code Table Proximity (PRX).
     * - use: optional
     * @var string
     */
    public $ProximityCode;
    /**
     * The Included
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Included;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Code.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: Used to define the display order.
     * - use: optional
     * @var int
     */
    public $Sort;
    /**
     * Constructor method for Recreation
     * @uses Recreation::setCode()
     * @uses Recreation::setContact()
     * @uses Recreation::setOperationSchedules()
     * @uses Recreation::setRefPoints()
     * @uses Recreation::setMultimediaDescriptions()
     * @uses Recreation::setRecreationDetails()
     * @uses Recreation::setDescriptiveText()
     * @uses Recreation::setName()
     * @uses Recreation::setProximityCode()
     * @uses Recreation::setIncluded()
     * @uses Recreation::setExistsCode()
     * @uses Recreation::setSort()
     * @param string $code
     * @param mixed $contact
     * @param mixed $operationSchedules
     * @param mixed $refPoints
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails $recreationDetails
     * @param string $descriptiveText
     * @param string $name
     * @param string $proximityCode
     * @param bool $included
     * @param string $existsCode
     * @param int $sort
     */
    public function __construct($code = null, $contact = null, $operationSchedules = null, $refPoints = null, \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions = null, \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails $recreationDetails = null, $descriptiveText = null, $name = null, $proximityCode = null, $included = null, $existsCode = null, $sort = null)
    {
        $this
            ->setCode($code)
            ->setContact($contact)
            ->setOperationSchedules($operationSchedules)
            ->setRefPoints($refPoints)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setRecreationDetails($recreationDetails)
            ->setDescriptiveText($descriptiveText)
            ->setName($name)
            ->setProximityCode($proximityCode)
            ->setIncluded($included)
            ->setExistsCode($existsCode)
            ->setSort($sort);
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
     * @return mixed|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param mixed $operationSchedules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
     */
    public function setOperationSchedules($operationSchedules = null)
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
     * Get MultimediaDescriptions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
     */
    public function setMultimediaDescriptions(\Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation
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

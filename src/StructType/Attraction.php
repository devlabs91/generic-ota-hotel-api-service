<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attraction StructType
 * Meta informations extracted from the WSDL
 * - documentation: This identifies an item of local interest (e.g. theme park, airport, museum, rail station, university). | The CodeContext attribute allows for a reference to the external code table used as the source for the code. The Code is
 * available to send code information for an attraction (e.g. if the attraction is an airport, the actual airport code may be included). | This may be used to uniquely identify an attraction.
 * @subpackage Structs
 */
class Attraction extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Contact
     */
    public $Contact;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Multimedia information about the attraction.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The RefPoints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $RefPoints;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive text that describes the attraction.
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
    /**
     * The AttractionCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: The code for the type of attraction in the proximity of the hotel facility. Refer to OpenTravel Code List Attraction Category Code (ACC).
     * - use: optional
     * @var string
     */
    public $AttractionCategoryCode;
    /**
     * The AttractionName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the local attraction.
     * - use: optional
     * @var string
     */
    public $AttractionName;
    /**
     * The AttractionFee
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var float
     */
    public $AttractionFee;
    /**
     * The CourtesyPhone
     * Meta informations extracted from the WSDL
     * - documentation: This signifies whether or not a courtesy phone for contacting the hotel is available at the attraction (e.g. often times these are availabe in airports). When true, the phone is available.
     * - use: optional
     * @var bool
     */
    public $CourtesyPhone;
    /**
     * The ProximityCode
     * Meta informations extracted from the WSDL
     * - documentation: Denotes whether a service is onsite, offsite or information is not available. Refer to OpenTravel Code Table Proximity (PRX).
     * - use: optional
     * @var string
     */
    public $ProximityCode;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: Used to define the display order.
     * - use: optional
     * @var int
     */
    public $Sort;
    /**
     * Constructor method for Attraction
     * @uses Attraction::setContact()
     * @uses Attraction::setOperationSchedules()
     * @uses Attraction::setMultimediaDescriptions()
     * @uses Attraction::setRefPoints()
     * @uses Attraction::setDescriptiveText()
     * @uses Attraction::setAttractionCategoryCode()
     * @uses Attraction::setAttractionName()
     * @uses Attraction::setAttractionFee()
     * @uses Attraction::setCourtesyPhone()
     * @uses Attraction::setProximityCode()
     * @uses Attraction::setSort()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Contact $contact
     * @param mixed $operationSchedules
     * @param mixed $multimediaDescriptions
     * @param mixed $refPoints
     * @param string $descriptiveText
     * @param string $attractionCategoryCode
     * @param string $attractionName
     * @param float $attractionFee
     * @param bool $courtesyPhone
     * @param string $proximityCode
     * @param int $sort
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Contact $contact = null, $operationSchedules = null, $multimediaDescriptions = null, $refPoints = null, $descriptiveText = null, $attractionCategoryCode = null, $attractionName = null, $attractionFee = null, $courtesyPhone = null, $proximityCode = null, $sort = null)
    {
        $this
            ->setContact($contact)
            ->setOperationSchedules($operationSchedules)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setRefPoints($refPoints)
            ->setDescriptiveText($descriptiveText)
            ->setAttractionCategoryCode($attractionCategoryCode)
            ->setAttractionName($attractionName)
            ->setAttractionFee($attractionFee)
            ->setCourtesyPhone($courtesyPhone)
            ->setProximityCode($proximityCode)
            ->setSort($sort);
    }
    /**
     * Get Contact value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Contact $contact
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
     */
    public function setContact(\Devlabs91\GenericOtaHotelApiService\StructType\Contact $contact = null)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
     */
    public function setRefPoints($refPoints = null)
    {
        $this->RefPoints = $refPoints;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
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
     * Get AttractionCategoryCode value
     * @return string|null
     */
    public function getAttractionCategoryCode()
    {
        return $this->AttractionCategoryCode;
    }
    /**
     * Set AttractionCategoryCode value
     * @param string $attractionCategoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
     */
    public function setAttractionCategoryCode($attractionCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($attractionCategoryCode) && !is_string($attractionCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attractionCategoryCode)), __LINE__);
        }
        $this->AttractionCategoryCode = $attractionCategoryCode;
        return $this;
    }
    /**
     * Get AttractionName value
     * @return string|null
     */
    public function getAttractionName()
    {
        return $this->AttractionName;
    }
    /**
     * Set AttractionName value
     * @param string $attractionName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
     */
    public function setAttractionName($attractionName = null)
    {
        // validation for constraint: string
        if (!is_null($attractionName) && !is_string($attractionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attractionName)), __LINE__);
        }
        $this->AttractionName = $attractionName;
        return $this;
    }
    /**
     * Get AttractionFee value
     * @return float|null
     */
    public function getAttractionFee()
    {
        return $this->AttractionFee;
    }
    /**
     * Set AttractionFee value
     * @param float $attractionFee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
     */
    public function setAttractionFee($attractionFee = null)
    {
        $this->AttractionFee = $attractionFee;
        return $this;
    }
    /**
     * Get CourtesyPhone value
     * @return bool|null
     */
    public function getCourtesyPhone()
    {
        return $this->CourtesyPhone;
    }
    /**
     * Set CourtesyPhone value
     * @param bool $courtesyPhone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
     */
    public function setCourtesyPhone($courtesyPhone = null)
    {
        // validation for constraint: boolean
        if (!is_null($courtesyPhone) && !is_bool($courtesyPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($courtesyPhone)), __LINE__);
        }
        $this->CourtesyPhone = $courtesyPhone;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
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

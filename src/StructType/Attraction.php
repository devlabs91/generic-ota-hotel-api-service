<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attraction StructType
 * Meta informations extracted from the WSDL
 * - documentation: This identifies an item of local interest (e.g. theme park, airport, museum, rail station, University, etc.). | The CodeContext attribute allows for a reference to the external code table used as the source for the code. The Code is
 * available to send code information for an attraction (e.g. if the attraction is an airport, the actual airport code may be included).
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
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The RefPoints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $RefPoints;
    /**
     * The AttractionCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: The code for the type of attraction in the proximity of the hotel facility. Refer to OTA Code List Attraction Category Code (ACC).
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
     * Constructor method for Attraction
     * @uses Attraction::setContact()
     * @uses Attraction::setDescription()
     * @uses Attraction::setRefPoints()
     * @uses Attraction::setAttractionCategoryCode()
     * @uses Attraction::setAttractionName()
     * @uses Attraction::setAttractionFee()
     * @uses Attraction::setCourtesyPhone()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Contact $contact
     * @param mixed[] $description
     * @param mixed $refPoints
     * @param string $attractionCategoryCode
     * @param string $attractionName
     * @param float $attractionFee
     * @param bool $courtesyPhone
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Contact $contact = null, array $description = array(), $refPoints = null, $attractionCategoryCode = null, $attractionName = null, $attractionFee = null, $courtesyPhone = null)
    {
        $this
            ->setContact($contact)
            ->setDescription($description)
            ->setRefPoints($refPoints)
            ->setAttractionCategoryCode($attractionCategoryCode)
            ->setAttractionName($attractionName)
            ->setAttractionFee($attractionFee)
            ->setCourtesyPhone($courtesyPhone);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $attractionDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($attractionDescriptionItem) ? get_class($attractionDescriptionItem) : gettype($attractionDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Attraction
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactInfoRootType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The ContactInfo class is used to define the contacts for consumers and technical people at the hotel facility, including various telephone numbers and e-mail addresses, or any respective attribute or affiliation for the hotel.
 * @subpackage Structs
 */
class ContactInfoRootType extends ContactInfoType
{
    /**
     * The ContactProfileID
     * Meta informations extracted from the WSDL
     * - documentation: This is a profile identifier for the contact, the type may be defined by the ContactProfileType.
     * - use: optional
     * @var string
     */
    public $ContactProfileID;
    /**
     * The ContactProfileType
     * Meta informations extracted from the WSDL
     * - documentation: This defines what type of ContactProfileID is being provided (e.g. IATA, chain specific, etc.)
     * - use: optional
     * @var string
     */
    public $ContactProfileType;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when the contact information for this hotel was last updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for ContactInfoRootType
     * @uses ContactInfoRootType::setContactProfileID()
     * @uses ContactInfoRootType::setContactProfileType()
     * @uses ContactInfoRootType::setLastUpdated()
     * @param string $contactProfileID
     * @param string $contactProfileType
     * @param string $lastUpdated
     */
    public function __construct($contactProfileID = null, $contactProfileType = null, $lastUpdated = null)
    {
        $this
            ->setContactProfileID($contactProfileID)
            ->setContactProfileType($contactProfileType)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get ContactProfileID value
     * @return string|null
     */
    public function getContactProfileID()
    {
        return $this->ContactProfileID;
    }
    /**
     * Set ContactProfileID value
     * @param string $contactProfileID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoRootType
     */
    public function setContactProfileID($contactProfileID = null)
    {
        // validation for constraint: string
        if (!is_null($contactProfileID) && !is_string($contactProfileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactProfileID)), __LINE__);
        }
        $this->ContactProfileID = $contactProfileID;
        return $this;
    }
    /**
     * Get ContactProfileType value
     * @return string|null
     */
    public function getContactProfileType()
    {
        return $this->ContactProfileType;
    }
    /**
     * Set ContactProfileType value
     * @param string $contactProfileType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoRootType
     */
    public function setContactProfileType($contactProfileType = null)
    {
        // validation for constraint: string
        if (!is_null($contactProfileType) && !is_string($contactProfileType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactProfileType)), __LINE__);
        }
        $this->ContactProfileType = $contactProfileType;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoRootType
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoRootType
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

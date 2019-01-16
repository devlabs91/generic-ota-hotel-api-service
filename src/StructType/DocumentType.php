<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information on a specific document. | Allows for control of the sharing of document data between parties. | The gender of the document holder. | The birth date of the document holder. | The effective and expiry date of the
 * document.
 * @subpackage Structs
 */
class DocumentType extends AbstractStructBase
{
    /**
     * The DocHolderName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the document holder in unformatted text (Mr. Sam Jones).
     * - minOccurs: 0
     * @var mixed
     */
    public $DocHolderName;
    /**
     * The DocHolderFormattedName
     * Meta informations extracted from the WSDL
     * - documentation: The name of document holder in formatted text.
     * - minOccurs: 0
     * @var mixed
     */
    public $DocHolderFormattedName;
    /**
     * The DocLimitations
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate any limitations on the document (e.g. as a person may only be allowed to spend a max of 30 days in country on a visitor's visa).
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $DocLimitations;
    /**
     * The AdditionalPersonNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalPersonNames
     */
    public $AdditionalPersonNames;
    /**
     * The DocIssueAuthority
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the group or association that granted the document.
     * - use: optional
     * @var string
     */
    public $DocIssueAuthority;
    /**
     * The DocIssueLocation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the location where the document was issued.
     * - use: optional
     * @var string
     */
    public $DocIssueLocation;
    /**
     * The DocID
     * Meta informations extracted from the WSDL
     * - documentation: Unique number assigned by authorities to document.
     * - use: optional
     * @var string
     */
    public $DocID;
    /**
     * The DocType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of document (e.g. Passport, Military ID, Drivers License, national ID, Vaccination Certificate). Refer to OpenTravel Code List Document Type (DOC).
     * - use: optional
     * @var string
     */
    public $DocType;
    /**
     * The DocIssueStateProv
     * Meta informations extracted from the WSDL
     * - documentation: State or Province where the document was issued.
     * - use: optional
     * @var string
     */
    public $DocIssueStateProv;
    /**
     * The DocIssueCountry
     * Meta informations extracted from the WSDL
     * - documentation: Country where the document was issued.
     * - use: optional
     * @var string
     */
    public $DocIssueCountry;
    /**
     * The BirthCountry
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the birth country of the document holder.
     * - use: optional
     * @var string
     */
    public $BirthCountry;
    /**
     * The BirthPlace
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the birth place of the document holder (e.g., city, state, county, province), when designating a country of birth, use BirthCountry.
     * - use: optional
     * @var string
     */
    public $BirthPlace;
    /**
     * The DocHolderNationality
     * Meta informations extracted from the WSDL
     * - documentation: The country code of the nationality of the document holder.
     * - use: optional
     * @var string
     */
    public $DocHolderNationality;
    /**
     * The ContactName
     * Meta informations extracted from the WSDL
     * - documentation: Provides contact name associated with the document.
     * - use: optional
     * @var string
     */
    public $ContactName;
    /**
     * The HolderType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $HolderType;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: A remark associated with the document.
     * - use: optional
     * @var string
     */
    public $Remark;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the postal code (e.g., ZIP code) on the document.
     * - use: optional
     * @var string
     */
    public $PostalCode;
    /**
     * Constructor method for DocumentType
     * @uses DocumentType::setDocHolderName()
     * @uses DocumentType::setDocHolderFormattedName()
     * @uses DocumentType::setDocLimitations()
     * @uses DocumentType::setAdditionalPersonNames()
     * @uses DocumentType::setDocIssueAuthority()
     * @uses DocumentType::setDocIssueLocation()
     * @uses DocumentType::setDocID()
     * @uses DocumentType::setDocType()
     * @uses DocumentType::setDocIssueStateProv()
     * @uses DocumentType::setDocIssueCountry()
     * @uses DocumentType::setBirthCountry()
     * @uses DocumentType::setBirthPlace()
     * @uses DocumentType::setDocHolderNationality()
     * @uses DocumentType::setContactName()
     * @uses DocumentType::setHolderType()
     * @uses DocumentType::setRemark()
     * @uses DocumentType::setPostalCode()
     * @param mixed $docHolderName
     * @param mixed $docHolderFormattedName
     * @param mixed[] $docLimitations
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalPersonNames $additionalPersonNames
     * @param string $docIssueAuthority
     * @param string $docIssueLocation
     * @param string $docID
     * @param string $docType
     * @param string $docIssueStateProv
     * @param string $docIssueCountry
     * @param string $birthCountry
     * @param string $birthPlace
     * @param string $docHolderNationality
     * @param string $contactName
     * @param string $holderType
     * @param string $remark
     * @param string $postalCode
     */
    public function __construct($docHolderName = null, $docHolderFormattedName = null, array $docLimitations = array(), \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalPersonNames $additionalPersonNames = null, $docIssueAuthority = null, $docIssueLocation = null, $docID = null, $docType = null, $docIssueStateProv = null, $docIssueCountry = null, $birthCountry = null, $birthPlace = null, $docHolderNationality = null, $contactName = null, $holderType = null, $remark = null, $postalCode = null)
    {
        $this
            ->setDocHolderName($docHolderName)
            ->setDocHolderFormattedName($docHolderFormattedName)
            ->setDocLimitations($docLimitations)
            ->setAdditionalPersonNames($additionalPersonNames)
            ->setDocIssueAuthority($docIssueAuthority)
            ->setDocIssueLocation($docIssueLocation)
            ->setDocID($docID)
            ->setDocType($docType)
            ->setDocIssueStateProv($docIssueStateProv)
            ->setDocIssueCountry($docIssueCountry)
            ->setBirthCountry($birthCountry)
            ->setBirthPlace($birthPlace)
            ->setDocHolderNationality($docHolderNationality)
            ->setContactName($contactName)
            ->setHolderType($holderType)
            ->setRemark($remark)
            ->setPostalCode($postalCode);
    }
    /**
     * Get DocHolderName value
     * @return mixed|null
     */
    public function getDocHolderName()
    {
        return $this->DocHolderName;
    }
    /**
     * Set DocHolderName value
     * @param mixed $docHolderName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setDocHolderName($docHolderName = null)
    {
        $this->DocHolderName = $docHolderName;
        return $this;
    }
    /**
     * Get DocHolderFormattedName value
     * @return mixed|null
     */
    public function getDocHolderFormattedName()
    {
        return $this->DocHolderFormattedName;
    }
    /**
     * Set DocHolderFormattedName value
     * @param mixed $docHolderFormattedName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setDocHolderFormattedName($docHolderFormattedName = null)
    {
        $this->DocHolderFormattedName = $docHolderFormattedName;
        return $this;
    }
    /**
     * Get DocLimitations value
     * @return mixed[]|null
     */
    public function getDocLimitations()
    {
        return $this->DocLimitations;
    }
    /**
     * Set DocLimitations value
     * @throws \InvalidArgumentException
     * @param mixed[] $docLimitations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setDocLimitations(array $docLimitations = array())
    {
        foreach ($docLimitations as $documentTypeDocLimitationsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The DocLimitations property can only contain items of anyType, "%s" given', is_object($documentTypeDocLimitationsItem) ? get_class($documentTypeDocLimitationsItem) : gettype($documentTypeDocLimitationsItem)), __LINE__);
            }
        }
        $this->DocLimitations = $docLimitations;
        return $this;
    }
    /**
     * Add item to DocLimitations value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function addToDocLimitations($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The DocLimitations property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocLimitations[] = $item;
        return $this;
    }
    /**
     * Get AdditionalPersonNames value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalPersonNames|null
     */
    public function getAdditionalPersonNames()
    {
        return $this->AdditionalPersonNames;
    }
    /**
     * Set AdditionalPersonNames value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalPersonNames $additionalPersonNames
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setAdditionalPersonNames(\Devlabs91\GenericOtaHotelApiService\StructType\AdditionalPersonNames $additionalPersonNames = null)
    {
        $this->AdditionalPersonNames = $additionalPersonNames;
        return $this;
    }
    /**
     * Get DocIssueAuthority value
     * @return string|null
     */
    public function getDocIssueAuthority()
    {
        return $this->DocIssueAuthority;
    }
    /**
     * Set DocIssueAuthority value
     * @param string $docIssueAuthority
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setDocIssueAuthority($docIssueAuthority = null)
    {
        // validation for constraint: string
        if (!is_null($docIssueAuthority) && !is_string($docIssueAuthority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($docIssueAuthority)), __LINE__);
        }
        $this->DocIssueAuthority = $docIssueAuthority;
        return $this;
    }
    /**
     * Get DocIssueLocation value
     * @return string|null
     */
    public function getDocIssueLocation()
    {
        return $this->DocIssueLocation;
    }
    /**
     * Set DocIssueLocation value
     * @param string $docIssueLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setDocIssueLocation($docIssueLocation = null)
    {
        // validation for constraint: string
        if (!is_null($docIssueLocation) && !is_string($docIssueLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($docIssueLocation)), __LINE__);
        }
        $this->DocIssueLocation = $docIssueLocation;
        return $this;
    }
    /**
     * Get DocID value
     * @return string|null
     */
    public function getDocID()
    {
        return $this->DocID;
    }
    /**
     * Set DocID value
     * @param string $docID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setDocID($docID = null)
    {
        // validation for constraint: string
        if (!is_null($docID) && !is_string($docID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($docID)), __LINE__);
        }
        $this->DocID = $docID;
        return $this;
    }
    /**
     * Get DocType value
     * @return string|null
     */
    public function getDocType()
    {
        return $this->DocType;
    }
    /**
     * Set DocType value
     * @param string $docType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setDocType($docType = null)
    {
        // validation for constraint: string
        if (!is_null($docType) && !is_string($docType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($docType)), __LINE__);
        }
        $this->DocType = $docType;
        return $this;
    }
    /**
     * Get DocIssueStateProv value
     * @return string|null
     */
    public function getDocIssueStateProv()
    {
        return $this->DocIssueStateProv;
    }
    /**
     * Set DocIssueStateProv value
     * @param string $docIssueStateProv
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setDocIssueStateProv($docIssueStateProv = null)
    {
        // validation for constraint: string
        if (!is_null($docIssueStateProv) && !is_string($docIssueStateProv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($docIssueStateProv)), __LINE__);
        }
        $this->DocIssueStateProv = $docIssueStateProv;
        return $this;
    }
    /**
     * Get DocIssueCountry value
     * @return string|null
     */
    public function getDocIssueCountry()
    {
        return $this->DocIssueCountry;
    }
    /**
     * Set DocIssueCountry value
     * @param string $docIssueCountry
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setDocIssueCountry($docIssueCountry = null)
    {
        // validation for constraint: string
        if (!is_null($docIssueCountry) && !is_string($docIssueCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($docIssueCountry)), __LINE__);
        }
        $this->DocIssueCountry = $docIssueCountry;
        return $this;
    }
    /**
     * Get BirthCountry value
     * @return string|null
     */
    public function getBirthCountry()
    {
        return $this->BirthCountry;
    }
    /**
     * Set BirthCountry value
     * @param string $birthCountry
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setBirthCountry($birthCountry = null)
    {
        // validation for constraint: string
        if (!is_null($birthCountry) && !is_string($birthCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthCountry)), __LINE__);
        }
        $this->BirthCountry = $birthCountry;
        return $this;
    }
    /**
     * Get BirthPlace value
     * @return string|null
     */
    public function getBirthPlace()
    {
        return $this->BirthPlace;
    }
    /**
     * Set BirthPlace value
     * @param string $birthPlace
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setBirthPlace($birthPlace = null)
    {
        // validation for constraint: string
        if (!is_null($birthPlace) && !is_string($birthPlace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthPlace)), __LINE__);
        }
        $this->BirthPlace = $birthPlace;
        return $this;
    }
    /**
     * Get DocHolderNationality value
     * @return string|null
     */
    public function getDocHolderNationality()
    {
        return $this->DocHolderNationality;
    }
    /**
     * Set DocHolderNationality value
     * @param string $docHolderNationality
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setDocHolderNationality($docHolderNationality = null)
    {
        // validation for constraint: string
        if (!is_null($docHolderNationality) && !is_string($docHolderNationality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($docHolderNationality)), __LINE__);
        }
        $this->DocHolderNationality = $docHolderNationality;
        return $this;
    }
    /**
     * Get ContactName value
     * @return string|null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    /**
     * Set ContactName value
     * @param string $contactName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setContactName($contactName = null)
    {
        // validation for constraint: string
        if (!is_null($contactName) && !is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactName)), __LINE__);
        }
        $this->ContactName = $contactName;
        return $this;
    }
    /**
     * Get HolderType value
     * @return string|null
     */
    public function getHolderType()
    {
        return $this->HolderType;
    }
    /**
     * Set HolderType value
     * @param string $holderType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setHolderType($holderType = null)
    {
        // validation for constraint: string
        if (!is_null($holderType) && !is_string($holderType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($holderType)), __LINE__);
        }
        $this->HolderType = $holderType;
        return $this;
    }
    /**
     * Get Remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param string $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remark)), __LINE__);
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentType
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

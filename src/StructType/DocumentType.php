<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information on a specific documents
 * @subpackage Structs
 */
class DocumentType extends AbstractStructBase
{
    /**
     * The DocHolderName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $DocHolderName;
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
     * The DocIssueAuthority
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the group or association that granted the document
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
     * - documentation: Indicates the type of document (e.g. Passport, Military ID, Drivers License, national ID, Vaccination Certificate). Refer to OTA Code List Document Type (DOC).
     * - use: optional
     * @var string
     */
    public $DocType;
    /**
     * Constructor method for DocumentType
     * @uses DocumentType::setDocHolderName()
     * @uses DocumentType::setDocLimitations()
     * @uses DocumentType::setDocIssueAuthority()
     * @uses DocumentType::setDocIssueLocation()
     * @uses DocumentType::setDocID()
     * @uses DocumentType::setDocType()
     * @param mixed $docHolderName
     * @param mixed[] $docLimitations
     * @param string $docIssueAuthority
     * @param string $docIssueLocation
     * @param string $docID
     * @param string $docType
     */
    public function __construct($docHolderName = null, array $docLimitations = array(), $docIssueAuthority = null, $docIssueLocation = null, $docID = null, $docType = null)
    {
        $this
            ->setDocHolderName($docHolderName)
            ->setDocLimitations($docLimitations)
            ->setDocIssueAuthority($docIssueAuthority)
            ->setDocIssueLocation($docIssueLocation)
            ->setDocID($docID)
            ->setDocType($docType);
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The RevenueDetail class contains line item detail about specific revenue transactions.
 * @subpackage Structs
 */
class RevenueDetailType extends AbstractStructBase
{
    /**
     * The FolioIDs
     * Meta informations extracted from the WSDL
     * - documentation: Collection of strings (recommended length - 20 characters) indicating the PMS folio identifiers associated with this revenue detail item.
     * @var mixed
     */
    public $FolioIDs;
    /**
     * The ReferenceID
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ReferenceID;
    /**
     * The TransactionDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TransactionDate;
    /**
     * The RatePlanCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RatePlanCode;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The PMSRevenueCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PMSRevenueCode;
    /**
     * Constructor method for RevenueDetailType
     * @uses RevenueDetailType::setFolioIDs()
     * @uses RevenueDetailType::setReferenceID()
     * @uses RevenueDetailType::setTransactionDate()
     * @uses RevenueDetailType::setRatePlanCode()
     * @uses RevenueDetailType::setDescription()
     * @uses RevenueDetailType::setPMSRevenueCode()
     * @param mixed $folioIDs
     * @param string $referenceID
     * @param string $transactionDate
     * @param string $ratePlanCode
     * @param string $description
     * @param string $pMSRevenueCode
     */
    public function __construct($folioIDs = null, $referenceID = null, $transactionDate = null, $ratePlanCode = null, $description = null, $pMSRevenueCode = null)
    {
        $this
            ->setFolioIDs($folioIDs)
            ->setReferenceID($referenceID)
            ->setTransactionDate($transactionDate)
            ->setRatePlanCode($ratePlanCode)
            ->setDescription($description)
            ->setPMSRevenueCode($pMSRevenueCode);
    }
    /**
     * Get FolioIDs value
     * @return mixed|null
     */
    public function getFolioIDs()
    {
        return $this->FolioIDs;
    }
    /**
     * Set FolioIDs value
     * @param mixed $folioIDs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueDetailType
     */
    public function setFolioIDs($folioIDs = null)
    {
        $this->FolioIDs = $folioIDs;
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return string|null
     */
    public function getReferenceID()
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param string $referenceID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueDetailType
     */
    public function setReferenceID($referenceID = null)
    {
        // validation for constraint: string
        if (!is_null($referenceID) && !is_string($referenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceID)), __LINE__);
        }
        $this->ReferenceID = $referenceID;
        return $this;
    }
    /**
     * Get TransactionDate value
     * @return string|null
     */
    public function getTransactionDate()
    {
        return $this->TransactionDate;
    }
    /**
     * Set TransactionDate value
     * @param string $transactionDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueDetailType
     */
    public function setTransactionDate($transactionDate = null)
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionDate)), __LINE__);
        }
        $this->TransactionDate = $transactionDate;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueDetailType
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueDetailType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get PMSRevenueCode value
     * @return string|null
     */
    public function getPMSRevenueCode()
    {
        return $this->PMSRevenueCode;
    }
    /**
     * Set PMSRevenueCode value
     * @param string $pMSRevenueCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueDetailType
     */
    public function setPMSRevenueCode($pMSRevenueCode = null)
    {
        // validation for constraint: string
        if (!is_null($pMSRevenueCode) && !is_string($pMSRevenueCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pMSRevenueCode)), __LINE__);
        }
        $this->PMSRevenueCode = $pMSRevenueCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueDetailType
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

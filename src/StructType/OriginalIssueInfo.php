<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginalIssueInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: The original ticket/document issue information.
 * @subpackage Structs
 */
class OriginalIssueInfo extends AbstractStructBase
{
    /**
     * The TicketDocumentNbr
     * Meta informations extracted from the WSDL
     * - documentation: The original ticket/document number.
     * - use: optional
     * @var string
     */
    public $TicketDocumentNbr;
    /**
     * The IssuingAgentID
     * Meta informations extracted from the WSDL
     * - documentation: ID of the original issuer of the ticket/document.
     * - use: optional
     * @var string
     */
    public $IssuingAgentID;
    /**
     * The DateOfIssue
     * Meta informations extracted from the WSDL
     * - documentation: Date the ticket/document was originally issued.
     * - use: optional
     * @var string
     */
    public $DateOfIssue;
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - documentation: Location of original issue.
     * - use: optional
     * @var string
     */
    public $LocationCode;
    /**
     * The IssuingAirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: The code of the original issuing airline.
     * - use: optional
     * @var string
     */
    public $IssuingAirlineCode;
    /**
     * Constructor method for OriginalIssueInfo
     * @uses OriginalIssueInfo::setTicketDocumentNbr()
     * @uses OriginalIssueInfo::setIssuingAgentID()
     * @uses OriginalIssueInfo::setDateOfIssue()
     * @uses OriginalIssueInfo::setLocationCode()
     * @uses OriginalIssueInfo::setIssuingAirlineCode()
     * @param string $ticketDocumentNbr
     * @param string $issuingAgentID
     * @param string $dateOfIssue
     * @param string $locationCode
     * @param string $issuingAirlineCode
     */
    public function __construct($ticketDocumentNbr = null, $issuingAgentID = null, $dateOfIssue = null, $locationCode = null, $issuingAirlineCode = null)
    {
        $this
            ->setTicketDocumentNbr($ticketDocumentNbr)
            ->setIssuingAgentID($issuingAgentID)
            ->setDateOfIssue($dateOfIssue)
            ->setLocationCode($locationCode)
            ->setIssuingAirlineCode($issuingAirlineCode);
    }
    /**
     * Get TicketDocumentNbr value
     * @return string|null
     */
    public function getTicketDocumentNbr()
    {
        return $this->TicketDocumentNbr;
    }
    /**
     * Set TicketDocumentNbr value
     * @param string $ticketDocumentNbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo
     */
    public function setTicketDocumentNbr($ticketDocumentNbr = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDocumentNbr) && !is_string($ticketDocumentNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDocumentNbr)), __LINE__);
        }
        $this->TicketDocumentNbr = $ticketDocumentNbr;
        return $this;
    }
    /**
     * Get IssuingAgentID value
     * @return string|null
     */
    public function getIssuingAgentID()
    {
        return $this->IssuingAgentID;
    }
    /**
     * Set IssuingAgentID value
     * @param string $issuingAgentID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo
     */
    public function setIssuingAgentID($issuingAgentID = null)
    {
        // validation for constraint: string
        if (!is_null($issuingAgentID) && !is_string($issuingAgentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuingAgentID)), __LINE__);
        }
        $this->IssuingAgentID = $issuingAgentID;
        return $this;
    }
    /**
     * Get DateOfIssue value
     * @return string|null
     */
    public function getDateOfIssue()
    {
        return $this->DateOfIssue;
    }
    /**
     * Set DateOfIssue value
     * @param string $dateOfIssue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo
     */
    public function setDateOfIssue($dateOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfIssue) && !is_string($dateOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfIssue)), __LINE__);
        }
        $this->DateOfIssue = $dateOfIssue;
        return $this;
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
        return $this;
    }
    /**
     * Get IssuingAirlineCode value
     * @return string|null
     */
    public function getIssuingAirlineCode()
    {
        return $this->IssuingAirlineCode;
    }
    /**
     * Set IssuingAirlineCode value
     * @param string $issuingAirlineCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo
     */
    public function setIssuingAirlineCode($issuingAirlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($issuingAirlineCode) && !is_string($issuingAirlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuingAirlineCode)), __LINE__);
        }
        $this->IssuingAirlineCode = $issuingAirlineCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustLoyalty StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the loyalty program(s) that the customer belongs to and associated information. | Loyalty program information for the customer. | Program rewarding frequent use by accumulating credits for services provided by vendors. |
 * Customer loyalty information used for additional authorization checks. | Customer loyalty information. | Loyalty program information. | Details of the customer loyalty membership. | A frequent renter number associated with the reservation. | A
 * frequent renter number associated with the reservation.
 * @subpackage Structs
 */
class CustLoyalty extends AbstractStructBase
{
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: A remark associated with the customer's loyalty program.
     * - use: optional
     * @var string
     */
    public $Remark;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * The ProgramID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier to indicate the company owner of the loyalty program. | Identifier to indicate the company owner of the loyalty program. | Identifier to indicate the company owner of the loyalty program.
     * @var string
     */
    public $ProgramID;
    /**
     * The MembershipID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the member in the program (membership number, account number, etc.). | Unique identifier of the member in the program (membership number, account number, etc.). | Unique identifier of the member in the program
     * (membership number, account number, etc.).
     * @var string
     */
    public $MembershipID;
    /**
     * The TravelSector
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS). | Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS). | Identifies the travel sector. Refer to OpenTravel Code List Travel
     * Sector (TVS).
     * @var string
     */
    public $TravelSector;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: A reference placeholder for this loyalty membership. | A reference placeholder for this loyalty membership. | A reference placeholder for this loyalty membership.
     * @var string
     */
    public $RPH;
    /**
     * The VendorCode
     * Meta informations extracted from the WSDL
     * - documentation: Indicate the partner(s)/vendor(s) for which the customer loyalty number is valid. | Indicate the partner(s)/vendor(s) for which the customer loyalty number is valid. | Indicate the partner(s)/vendor(s) for which the customer loyalty
     * number is valid.
     * @var string
     */
    public $VendorCode;
    /**
     * The PrimaryLoyaltyIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates this is the primary customer loyalty program and when false, indicates this is not the primary customer loyalty program. | When true, indicates this is the primary customer loyalty program and when false,
     * indicates this is not the primary customer loyalty program. | When true, indicates this is the primary customer loyalty program and when false, indicates this is not the primary customer loyalty program.
     * @var bool
     */
    public $PrimaryLoyaltyIndicator;
    /**
     * The AllianceLoyaltyLevelName
     * Meta informations extracted from the WSDL
     * - documentation: Name of the alliance loyalty level (e.g.,OneWorld uses Emerald, Ruby, etc and SkyTeam uses Elite, etc.) | Name of the alliance loyalty level (e.g.,OneWorld uses Emerald, Ruby, etc and SkyTeam uses Elite, etc.) | Name of the alliance
     * loyalty level (e.g.,OneWorld uses Emerald, Ruby, etc and SkyTeam uses Elite, etc.)
     * @var string
     */
    public $AllianceLoyaltyLevelName;
    /**
     * The CustomerType
     * Meta informations extracted from the WSDL
     * - documentation: Original assessment of the customer by the travel agent. | Original assessment of the customer by the travel agent. | Original assessment of the customer by the travel agent.
     * @var string
     */
    public $CustomerType;
    /**
     * The CustomerValue
     * Meta informations extracted from the WSDL
     * - documentation: The supplier's ranking of the customer (e.g., VIP, numerical ranking). | The supplier's ranking of the customer (e.g., VIP, numerical ranking). | The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     * @var string
     */
    public $CustomerValue;
    /**
     * Constructor method for CustLoyalty
     * @uses CustLoyalty::setRemark()
     * @uses CustLoyalty::setOperation()
     * @uses CustLoyalty::setProgramID()
     * @uses CustLoyalty::setMembershipID()
     * @uses CustLoyalty::setTravelSector()
     * @uses CustLoyalty::setRPH()
     * @uses CustLoyalty::setVendorCode()
     * @uses CustLoyalty::setPrimaryLoyaltyIndicator()
     * @uses CustLoyalty::setAllianceLoyaltyLevelName()
     * @uses CustLoyalty::setCustomerType()
     * @uses CustLoyalty::setCustomerValue()
     * @param string $remark
     * @param string $operation
     * @param string $programID
     * @param string $membershipID
     * @param string $travelSector
     * @param string $rPH
     * @param string $vendorCode
     * @param bool $primaryLoyaltyIndicator
     * @param string $allianceLoyaltyLevelName
     * @param string $customerType
     * @param string $customerValue
     */
    public function __construct($remark = null, $operation = null, $programID = null, $membershipID = null, $travelSector = null, $rPH = null, $vendorCode = null, $primaryLoyaltyIndicator = null, $allianceLoyaltyLevelName = null, $customerType = null, $customerValue = null)
    {
        $this
            ->setRemark($remark)
            ->setOperation($operation)
            ->setProgramID($programID)
            ->setMembershipID($membershipID)
            ->setTravelSector($travelSector)
            ->setRPH($rPH)
            ->setVendorCode($vendorCode)
            ->setPrimaryLoyaltyIndicator($primaryLoyaltyIndicator)
            ->setAllianceLoyaltyLevelName($allianceLoyaltyLevelName)
            ->setCustomerType($customerType)
            ->setCustomerValue($customerValue);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
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
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Get ProgramID value
     * @return string|null
     */
    public function getProgramID()
    {
        return $this->ProgramID;
    }
    /**
     * Set ProgramID value
     * @param string $programID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
     */
    public function setProgramID($programID = null)
    {
        // validation for constraint: string
        if (!is_null($programID) && !is_string($programID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programID)), __LINE__);
        }
        $this->ProgramID = $programID;
        return $this;
    }
    /**
     * Get MembershipID value
     * @return string|null
     */
    public function getMembershipID()
    {
        return $this->MembershipID;
    }
    /**
     * Set MembershipID value
     * @param string $membershipID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
     */
    public function setMembershipID($membershipID = null)
    {
        // validation for constraint: string
        if (!is_null($membershipID) && !is_string($membershipID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($membershipID)), __LINE__);
        }
        $this->MembershipID = $membershipID;
        return $this;
    }
    /**
     * Get TravelSector value
     * @return string|null
     */
    public function getTravelSector()
    {
        return $this->TravelSector;
    }
    /**
     * Set TravelSector value
     * @param string $travelSector
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
     */
    public function setTravelSector($travelSector = null)
    {
        // validation for constraint: string
        if (!is_null($travelSector) && !is_string($travelSector)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelSector)), __LINE__);
        }
        $this->TravelSector = $travelSector;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        return $this;
    }
    /**
     * Get PrimaryLoyaltyIndicator value
     * @return bool|null
     */
    public function getPrimaryLoyaltyIndicator()
    {
        return $this->PrimaryLoyaltyIndicator;
    }
    /**
     * Set PrimaryLoyaltyIndicator value
     * @param bool $primaryLoyaltyIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
     */
    public function setPrimaryLoyaltyIndicator($primaryLoyaltyIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($primaryLoyaltyIndicator) && !is_bool($primaryLoyaltyIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primaryLoyaltyIndicator)), __LINE__);
        }
        $this->PrimaryLoyaltyIndicator = $primaryLoyaltyIndicator;
        return $this;
    }
    /**
     * Get AllianceLoyaltyLevelName value
     * @return string|null
     */
    public function getAllianceLoyaltyLevelName()
    {
        return $this->AllianceLoyaltyLevelName;
    }
    /**
     * Set AllianceLoyaltyLevelName value
     * @param string $allianceLoyaltyLevelName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
     */
    public function setAllianceLoyaltyLevelName($allianceLoyaltyLevelName = null)
    {
        // validation for constraint: string
        if (!is_null($allianceLoyaltyLevelName) && !is_string($allianceLoyaltyLevelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($allianceLoyaltyLevelName)), __LINE__);
        }
        $this->AllianceLoyaltyLevelName = $allianceLoyaltyLevelName;
        return $this;
    }
    /**
     * Get CustomerType value
     * @return string|null
     */
    public function getCustomerType()
    {
        return $this->CustomerType;
    }
    /**
     * Set CustomerType value
     * @param string $customerType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
     */
    public function setCustomerType($customerType = null)
    {
        // validation for constraint: string
        if (!is_null($customerType) && !is_string($customerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerType)), __LINE__);
        }
        $this->CustomerType = $customerType;
        return $this;
    }
    /**
     * Get CustomerValue value
     * @return string|null
     */
    public function getCustomerValue()
    {
        return $this->CustomerValue;
    }
    /**
     * Set CustomerValue value
     * @param string $customerValue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
     */
    public function setCustomerValue($customerValue = null)
    {
        // validation for constraint: string
        if (!is_null($customerValue) && !is_string($customerValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerValue)), __LINE__);
        }
        $this->CustomerValue = $customerValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty
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

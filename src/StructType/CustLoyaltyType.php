<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustLoyaltyType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Program rewarding frequent use by accumulating credits for services provided by vendors.
 * @subpackage Structs
 */
class CustLoyaltyType extends AbstractStructBase
{
    /**
     * The ProgramID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier to indicate the company owner of the loyalty program.
     * @var string
     */
    public $ProgramID;
    /**
     * The MembershipID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the member in the program (membership number, account number, etc.).
     * @var string
     */
    public $MembershipID;
    /**
     * The TravelSector
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the travel sector. Refer to OTA Code List Travel Sector (TVS).
     * - use: optional
     * @var string
     */
    public $TravelSector;
    /**
     * The RPH
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for CustLoyaltyType
     * @uses CustLoyaltyType::setProgramID()
     * @uses CustLoyaltyType::setMembershipID()
     * @uses CustLoyaltyType::setTravelSector()
     * @uses CustLoyaltyType::setRPH()
     * @param string $programID
     * @param string $membershipID
     * @param string $travelSector
     * @param string $rPH
     */
    public function __construct($programID = null, $membershipID = null, $travelSector = null, $rPH = null)
    {
        $this
            ->setProgramID($programID)
            ->setMembershipID($membershipID)
            ->setTravelSector($travelSector)
            ->setRPH($rPH);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyaltyType
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

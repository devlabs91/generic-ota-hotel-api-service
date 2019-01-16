<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Membership StructType
 * Meta informations extracted from the WSDL
 * - documentation: The SelectedMembership object identifies the frequent customer reward program and (optionally) indicates points awarded for stay activity.
 * @subpackage Structs
 */
class Membership extends AbstractStructBase
{
    /**
     * The ProgramCode
     * Meta informations extracted from the WSDL
     * - documentation: The code or name of the membership program ('Hertz', 'AAdvantage', etc.).
     * - use: optional
     * @var string
     */
    public $ProgramCode;
    /**
     * The BonusCode
     * Meta informations extracted from the WSDL
     * - documentation: The code or name of the bonus program. BonusCode can be used to indicate the level of membership (Gold Club, Platinum member, etc.)
     * - use: optional
     * @var string
     */
    public $BonusCode;
    /**
     * The AccountID
     * Meta informations extracted from the WSDL
     * - documentation: The account identification number for this particular member in this particular program.
     * - use: optional
     * @var string
     */
    public $AccountID;
    /**
     * The PointsEarned
     * Meta informations extracted from the WSDL
     * - documentation: The total number of points earned through the selected membership.
     * - use: optional
     * @var int
     */
    public $PointsEarned;
    /**
     * The TravelSector
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS).
     * - use: optional
     * @var string
     */
    public $TravelSector;
    /**
     * Constructor method for Membership
     * @uses Membership::setProgramCode()
     * @uses Membership::setBonusCode()
     * @uses Membership::setAccountID()
     * @uses Membership::setPointsEarned()
     * @uses Membership::setTravelSector()
     * @param string $programCode
     * @param string $bonusCode
     * @param string $accountID
     * @param int $pointsEarned
     * @param string $travelSector
     */
    public function __construct($programCode = null, $bonusCode = null, $accountID = null, $pointsEarned = null, $travelSector = null)
    {
        $this
            ->setProgramCode($programCode)
            ->setBonusCode($bonusCode)
            ->setAccountID($accountID)
            ->setPointsEarned($pointsEarned)
            ->setTravelSector($travelSector);
    }
    /**
     * Get ProgramCode value
     * @return string|null
     */
    public function getProgramCode()
    {
        return $this->ProgramCode;
    }
    /**
     * Set ProgramCode value
     * @param string $programCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Membership
     */
    public function setProgramCode($programCode = null)
    {
        // validation for constraint: string
        if (!is_null($programCode) && !is_string($programCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programCode)), __LINE__);
        }
        $this->ProgramCode = $programCode;
        return $this;
    }
    /**
     * Get BonusCode value
     * @return string|null
     */
    public function getBonusCode()
    {
        return $this->BonusCode;
    }
    /**
     * Set BonusCode value
     * @param string $bonusCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Membership
     */
    public function setBonusCode($bonusCode = null)
    {
        // validation for constraint: string
        if (!is_null($bonusCode) && !is_string($bonusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bonusCode)), __LINE__);
        }
        $this->BonusCode = $bonusCode;
        return $this;
    }
    /**
     * Get AccountID value
     * @return string|null
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }
    /**
     * Set AccountID value
     * @param string $accountID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Membership
     */
    public function setAccountID($accountID = null)
    {
        // validation for constraint: string
        if (!is_null($accountID) && !is_string($accountID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountID)), __LINE__);
        }
        $this->AccountID = $accountID;
        return $this;
    }
    /**
     * Get PointsEarned value
     * @return int|null
     */
    public function getPointsEarned()
    {
        return $this->PointsEarned;
    }
    /**
     * Set PointsEarned value
     * @param int $pointsEarned
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Membership
     */
    public function setPointsEarned($pointsEarned = null)
    {
        // validation for constraint: int
        if (!is_null($pointsEarned) && !is_numeric($pointsEarned)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pointsEarned)), __LINE__);
        }
        $this->PointsEarned = $pointsEarned;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Membership
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Membership
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

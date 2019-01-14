<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectedLoyaltyType StructType
 * Meta informations extracted from the WSDL
 * - documentation: SelectedLoyalty communicates the Loyalty program and points to be credited for a specific stay. The SelectedLoyalty class originates in the CRS Reservation Synchronization standard.
 * @subpackage Structs
 */
class SelectedLoyaltyType extends AbstractStructBase
{
    /**
     * The ReservationActionType
     * Meta informations extracted from the WSDL
     * - documentation: Tells the status of the reservation (e.g. stay, no-show, cancelled, etc.).
     * - use: optional
     * @var string
     */
    public $ReservationActionType;
    /**
     * The SelectedLoyaltyRPH
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SelectedLoyaltyRPH;
    /**
     * The ProgramCode
     * Meta informations extracted from the WSDL
     * - documentation: This may be used for different loyalty awards (e.g. points and miles awarded).
     * - use: optional
     * @var string
     */
    public $ProgramCode;
    /**
     * The BonusCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $BonusCode;
    /**
     * The AccountID
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AccountID;
    /**
     * The PointsEarned
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PointsEarned;
    /**
     * Constructor method for SelectedLoyaltyType
     * @uses SelectedLoyaltyType::setReservationActionType()
     * @uses SelectedLoyaltyType::setSelectedLoyaltyRPH()
     * @uses SelectedLoyaltyType::setProgramCode()
     * @uses SelectedLoyaltyType::setBonusCode()
     * @uses SelectedLoyaltyType::setAccountID()
     * @uses SelectedLoyaltyType::setPointsEarned()
     * @param string $reservationActionType
     * @param string $selectedLoyaltyRPH
     * @param string $programCode
     * @param string $bonusCode
     * @param string $accountID
     * @param string $pointsEarned
     */
    public function __construct($reservationActionType = null, $selectedLoyaltyRPH = null, $programCode = null, $bonusCode = null, $accountID = null, $pointsEarned = null)
    {
        $this
            ->setReservationActionType($reservationActionType)
            ->setSelectedLoyaltyRPH($selectedLoyaltyRPH)
            ->setProgramCode($programCode)
            ->setBonusCode($bonusCode)
            ->setAccountID($accountID)
            ->setPointsEarned($pointsEarned);
    }
    /**
     * Get ReservationActionType value
     * @return string|null
     */
    public function getReservationActionType()
    {
        return $this->ReservationActionType;
    }
    /**
     * Set ReservationActionType value
     * @param string $reservationActionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedLoyaltyType
     */
    public function setReservationActionType($reservationActionType = null)
    {
        // validation for constraint: string
        if (!is_null($reservationActionType) && !is_string($reservationActionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservationActionType)), __LINE__);
        }
        $this->ReservationActionType = $reservationActionType;
        return $this;
    }
    /**
     * Get SelectedLoyaltyRPH value
     * @return string|null
     */
    public function getSelectedLoyaltyRPH()
    {
        return $this->SelectedLoyaltyRPH;
    }
    /**
     * Set SelectedLoyaltyRPH value
     * @param string $selectedLoyaltyRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedLoyaltyType
     */
    public function setSelectedLoyaltyRPH($selectedLoyaltyRPH = null)
    {
        // validation for constraint: string
        if (!is_null($selectedLoyaltyRPH) && !is_string($selectedLoyaltyRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($selectedLoyaltyRPH)), __LINE__);
        }
        $this->SelectedLoyaltyRPH = $selectedLoyaltyRPH;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedLoyaltyType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedLoyaltyType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedLoyaltyType
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
     * @return string|null
     */
    public function getPointsEarned()
    {
        return $this->PointsEarned;
    }
    /**
     * Set PointsEarned value
     * @param string $pointsEarned
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedLoyaltyType
     */
    public function setPointsEarned($pointsEarned = null)
    {
        // validation for constraint: string
        if (!is_null($pointsEarned) && !is_string($pointsEarned)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pointsEarned)), __LINE__);
        }
        $this->PointsEarned = $pointsEarned;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedLoyaltyType
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

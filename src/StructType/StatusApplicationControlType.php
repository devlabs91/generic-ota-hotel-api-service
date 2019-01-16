<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatusApplicationControlType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The StatusApplicationControl class is used to indicate to which block codes/rate plans/inventory codes a status should be applied.
 * @subpackage Structs
 */
class StatusApplicationControlType extends AbstractStructBase
{
    /**
     * The DestinationSystemCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $DestinationSystemCodes;
    /**
     * The RateTier
     * Meta informations extracted from the WSDL
     * - documentation: Hotel systems often have different tiers for a given rate plan; this attribute is used to designate a specific tier within the rate plan (e.g. high, medium, low).
     * - use: optional
     * @var string
     */
    public $RateTier;
    /**
     * The AllRateCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $AllRateCode;
    /**
     * The AllInvCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $AllInvCode;
    /**
     * The InvBlockCode
     * Meta informations extracted from the WSDL
     * - documentation: Code that identifies an inventory block.
     * - use: optional
     * @var string
     */
    public $InvBlockCode;
    /**
     * The Override
     * Meta informations extracted from the WSDL
     * - documentation: Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = 0 (No), the reservations system may ignore the settings passed and keep values overridden
     * by the user. If value = 1 (Yes), the reservations system must replace values overridden by the user.
     * - use: optional
     * @var bool
     */
    public $Override;
    /**
     * The QuoteID
     * Meta informations extracted from the WSDL
     * - documentation: This identifies a specific quote.
     * - use: optional
     * @var string
     */
    public $QuoteID;
    /**
     * The SubBlockCode
     * Meta informations extracted from the WSDL
     * - documentation: This is the code defining a subset of the inventory block.
     * - use: optional
     * @var string
     */
    public $SubBlockCode;
    /**
     * The WingIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: Used to identify the wing of a hotel.
     * - use: optional
     * @var string
     */
    public $WingIdentifier;
    /**
     * Constructor method for StatusApplicationControlType
     * @uses StatusApplicationControlType::setDestinationSystemCodes()
     * @uses StatusApplicationControlType::setRateTier()
     * @uses StatusApplicationControlType::setAllRateCode()
     * @uses StatusApplicationControlType::setAllInvCode()
     * @uses StatusApplicationControlType::setInvBlockCode()
     * @uses StatusApplicationControlType::setOverride()
     * @uses StatusApplicationControlType::setQuoteID()
     * @uses StatusApplicationControlType::setSubBlockCode()
     * @uses StatusApplicationControlType::setWingIdentifier()
     * @param mixed $destinationSystemCodes
     * @param string $rateTier
     * @param bool $allRateCode
     * @param bool $allInvCode
     * @param string $invBlockCode
     * @param bool $override
     * @param string $quoteID
     * @param string $subBlockCode
     * @param string $wingIdentifier
     */
    public function __construct($destinationSystemCodes = null, $rateTier = null, $allRateCode = null, $allInvCode = null, $invBlockCode = null, $override = null, $quoteID = null, $subBlockCode = null, $wingIdentifier = null)
    {
        $this
            ->setDestinationSystemCodes($destinationSystemCodes)
            ->setRateTier($rateTier)
            ->setAllRateCode($allRateCode)
            ->setAllInvCode($allInvCode)
            ->setInvBlockCode($invBlockCode)
            ->setOverride($override)
            ->setQuoteID($quoteID)
            ->setSubBlockCode($subBlockCode)
            ->setWingIdentifier($wingIdentifier);
    }
    /**
     * Get DestinationSystemCodes value
     * @return mixed|null
     */
    public function getDestinationSystemCodes()
    {
        return $this->DestinationSystemCodes;
    }
    /**
     * Set DestinationSystemCodes value
     * @param mixed $destinationSystemCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
     */
    public function setDestinationSystemCodes($destinationSystemCodes = null)
    {
        $this->DestinationSystemCodes = $destinationSystemCodes;
        return $this;
    }
    /**
     * Get RateTier value
     * @return string|null
     */
    public function getRateTier()
    {
        return $this->RateTier;
    }
    /**
     * Set RateTier value
     * @param string $rateTier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
     */
    public function setRateTier($rateTier = null)
    {
        // validation for constraint: string
        if (!is_null($rateTier) && !is_string($rateTier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateTier)), __LINE__);
        }
        $this->RateTier = $rateTier;
        return $this;
    }
    /**
     * Get AllRateCode value
     * @return bool|null
     */
    public function getAllRateCode()
    {
        return $this->AllRateCode;
    }
    /**
     * Set AllRateCode value
     * @param bool $allRateCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
     */
    public function setAllRateCode($allRateCode = null)
    {
        // validation for constraint: boolean
        if (!is_null($allRateCode) && !is_bool($allRateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allRateCode)), __LINE__);
        }
        $this->AllRateCode = $allRateCode;
        return $this;
    }
    /**
     * Get AllInvCode value
     * @return bool|null
     */
    public function getAllInvCode()
    {
        return $this->AllInvCode;
    }
    /**
     * Set AllInvCode value
     * @param bool $allInvCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
     */
    public function setAllInvCode($allInvCode = null)
    {
        // validation for constraint: boolean
        if (!is_null($allInvCode) && !is_bool($allInvCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allInvCode)), __LINE__);
        }
        $this->AllInvCode = $allInvCode;
        return $this;
    }
    /**
     * Get InvBlockCode value
     * @return string|null
     */
    public function getInvBlockCode()
    {
        return $this->InvBlockCode;
    }
    /**
     * Set InvBlockCode value
     * @param string $invBlockCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
     */
    public function setInvBlockCode($invBlockCode = null)
    {
        // validation for constraint: string
        if (!is_null($invBlockCode) && !is_string($invBlockCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invBlockCode)), __LINE__);
        }
        $this->InvBlockCode = $invBlockCode;
        return $this;
    }
    /**
     * Get Override value
     * @return bool|null
     */
    public function getOverride()
    {
        return $this->Override;
    }
    /**
     * Set Override value
     * @param bool $override
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
     */
    public function setOverride($override = null)
    {
        // validation for constraint: boolean
        if (!is_null($override) && !is_bool($override)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($override)), __LINE__);
        }
        $this->Override = $override;
        return $this;
    }
    /**
     * Get QuoteID value
     * @return string|null
     */
    public function getQuoteID()
    {
        return $this->QuoteID;
    }
    /**
     * Set QuoteID value
     * @param string $quoteID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
     */
    public function setQuoteID($quoteID = null)
    {
        // validation for constraint: string
        if (!is_null($quoteID) && !is_string($quoteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quoteID)), __LINE__);
        }
        $this->QuoteID = $quoteID;
        return $this;
    }
    /**
     * Get SubBlockCode value
     * @return string|null
     */
    public function getSubBlockCode()
    {
        return $this->SubBlockCode;
    }
    /**
     * Set SubBlockCode value
     * @param string $subBlockCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
     */
    public function setSubBlockCode($subBlockCode = null)
    {
        // validation for constraint: string
        if (!is_null($subBlockCode) && !is_string($subBlockCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subBlockCode)), __LINE__);
        }
        $this->SubBlockCode = $subBlockCode;
        return $this;
    }
    /**
     * Get WingIdentifier value
     * @return string|null
     */
    public function getWingIdentifier()
    {
        return $this->WingIdentifier;
    }
    /**
     * Set WingIdentifier value
     * @param string $wingIdentifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
     */
    public function setWingIdentifier($wingIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($wingIdentifier) && !is_string($wingIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wingIdentifier)), __LINE__);
        }
        $this->WingIdentifier = $wingIdentifier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
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

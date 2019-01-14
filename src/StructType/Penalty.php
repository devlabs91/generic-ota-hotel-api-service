<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Penalty StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies penalty charges as either a currency amount or a percentage of the fare | The penalty charge defined a fee in terms of its amount, currency and decimal laces.
 * @subpackage Structs
 */
class Penalty extends AbstractStructBase
{
    /**
     * The PenaltyType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of penalty involved in the search or response.
     * - use: optional
     * @var string
     */
    public $PenaltyType;
    /**
     * The DepartureStatus
     * Meta informations extracted from the WSDL
     * - documentation: Identifier used to indicate whether the change occurs before or after departure from the origin city.
     * - use: optional
     * @var string
     */
    public $DepartureStatus;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - documentation: The penalty charge conveyed as a percent of the total fare.
     * @var string
     */
    public $Percent;
    /**
     * Constructor method for Penalty
     * @uses Penalty::setPenaltyType()
     * @uses Penalty::setDepartureStatus()
     * @uses Penalty::setPercent()
     * @param string $penaltyType
     * @param string $departureStatus
     * @param string $percent
     */
    public function __construct($penaltyType = null, $departureStatus = null, $percent = null)
    {
        $this
            ->setPenaltyType($penaltyType)
            ->setDepartureStatus($departureStatus)
            ->setPercent($percent);
    }
    /**
     * Get PenaltyType value
     * @return string|null
     */
    public function getPenaltyType()
    {
        return $this->PenaltyType;
    }
    /**
     * Set PenaltyType value
     * @param string $penaltyType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Penalty
     */
    public function setPenaltyType($penaltyType = null)
    {
        // validation for constraint: string
        if (!is_null($penaltyType) && !is_string($penaltyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($penaltyType)), __LINE__);
        }
        $this->PenaltyType = $penaltyType;
        return $this;
    }
    /**
     * Get DepartureStatus value
     * @return string|null
     */
    public function getDepartureStatus()
    {
        return $this->DepartureStatus;
    }
    /**
     * Set DepartureStatus value
     * @param string $departureStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Penalty
     */
    public function setDepartureStatus($departureStatus = null)
    {
        // validation for constraint: string
        if (!is_null($departureStatus) && !is_string($departureStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureStatus)), __LINE__);
        }
        $this->DepartureStatus = $departureStatus;
        return $this;
    }
    /**
     * Get Percent value
     * @return string|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Penalty
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percent)), __LINE__);
        }
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Penalty
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

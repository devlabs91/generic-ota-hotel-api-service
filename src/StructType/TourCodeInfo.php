<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourCodeInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the tour code. | Used to provide a promotion code and the associated vendor.
 * @subpackage Structs
 */
class TourCodeInfo extends AbstractStructBase
{
    /**
     * The TourTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Type of tour (e.g., IT=inclusive Tour, BT= Bulk Tour, NR=Net Remit).
     * - use: optional
     * @var string
     */
    public $TourTypeCode;
    /**
     * The YearNum
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $YearNum;
    /**
     * The PartyID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier assigned to a tour group by the airline.
     * - use: optional
     * @var string
     */
    public $PartyID;
    /**
     * Constructor method for TourCodeInfo
     * @uses TourCodeInfo::setTourTypeCode()
     * @uses TourCodeInfo::setYearNum()
     * @uses TourCodeInfo::setPartyID()
     * @param string $tourTypeCode
     * @param string $yearNum
     * @param string $partyID
     */
    public function __construct($tourTypeCode = null, $yearNum = null, $partyID = null)
    {
        $this
            ->setTourTypeCode($tourTypeCode)
            ->setYearNum($yearNum)
            ->setPartyID($partyID);
    }
    /**
     * Get TourTypeCode value
     * @return string|null
     */
    public function getTourTypeCode()
    {
        return $this->TourTypeCode;
    }
    /**
     * Set TourTypeCode value
     * @param string $tourTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodeInfo
     */
    public function setTourTypeCode($tourTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($tourTypeCode) && !is_string($tourTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourTypeCode)), __LINE__);
        }
        $this->TourTypeCode = $tourTypeCode;
        return $this;
    }
    /**
     * Get YearNum value
     * @return string|null
     */
    public function getYearNum()
    {
        return $this->YearNum;
    }
    /**
     * Set YearNum value
     * @param string $yearNum
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodeInfo
     */
    public function setYearNum($yearNum = null)
    {
        // validation for constraint: string
        if (!is_null($yearNum) && !is_string($yearNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($yearNum)), __LINE__);
        }
        $this->YearNum = $yearNum;
        return $this;
    }
    /**
     * Get PartyID value
     * @return string|null
     */
    public function getPartyID()
    {
        return $this->PartyID;
    }
    /**
     * Set PartyID value
     * @param string $partyID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodeInfo
     */
    public function setPartyID($partyID = null)
    {
        // validation for constraint: string
        if (!is_null($partyID) && !is_string($partyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partyID)), __LINE__);
        }
        $this->PartyID = $partyID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodeInfo
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

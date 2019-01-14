<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookFlightSegmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for the flight segment data plus the MarriageGrp.
 * @subpackage Structs
 */
class BookFlightSegmentType extends FlightSegmentType
{
    /**
     * The MarriageGrp
     * Meta informations extracted from the WSDL
     * - documentation: Many airlines link connection flights together by terming them married segments. When two or more segments are married, they must be processed as one unit. The segments must be moved, cancelled, and/or priced together. The value of
     * the marriage group must be the same for all segments.
     * - minOccurs: 0
     * @var mixed
     */
    public $MarriageGrp;
    /**
     * The ResBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: Specific Booking Class for this segment.
     * - use: optional
     * @var string
     */
    public $ResBookDesigCode;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ActionCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $NumberInParty;
    /**
     * Constructor method for BookFlightSegmentType
     * @uses BookFlightSegmentType::setMarriageGrp()
     * @uses BookFlightSegmentType::setResBookDesigCode()
     * @uses BookFlightSegmentType::setActionCode()
     * @uses BookFlightSegmentType::setNumberInParty()
     * @param mixed $marriageGrp
     * @param string $resBookDesigCode
     * @param string $actionCode
     * @param int $numberInParty
     */
    public function __construct($marriageGrp = null, $resBookDesigCode = null, $actionCode = null, $numberInParty = null)
    {
        $this
            ->setMarriageGrp($marriageGrp)
            ->setResBookDesigCode($resBookDesigCode)
            ->setActionCode($actionCode)
            ->setNumberInParty($numberInParty);
    }
    /**
     * Get MarriageGrp value
     * @return mixed|null
     */
    public function getMarriageGrp()
    {
        return $this->MarriageGrp;
    }
    /**
     * Set MarriageGrp value
     * @param mixed $marriageGrp
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setMarriageGrp($marriageGrp = null)
    {
        $this->MarriageGrp = $marriageGrp;
        return $this;
    }
    /**
     * Get ResBookDesigCode value
     * @return string|null
     */
    public function getResBookDesigCode()
    {
        return $this->ResBookDesigCode;
    }
    /**
     * Set ResBookDesigCode value
     * @param string $resBookDesigCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setResBookDesigCode($resBookDesigCode = null)
    {
        // validation for constraint: string
        if (!is_null($resBookDesigCode) && !is_string($resBookDesigCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resBookDesigCode)), __LINE__);
        }
        $this->ResBookDesigCode = $resBookDesigCode;
        return $this;
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param int $numberInParty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
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

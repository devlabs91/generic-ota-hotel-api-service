<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyalProgram StructType
 * Meta informations extracted from the WSDL
 * - documentation: The LoyalProgram class defines the loyalty programs that this hotel participates in.
 * @subpackage Structs
 */
class LoyalProgram extends AbstractStructBase
{
    /**
     * The ProgramDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ProgramDescription[]
     */
    public $ProgramDescription;
    /**
     * The ProgramRestriction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ProgramRestriction
     */
    public $ProgramRestriction;
    /**
     * The BlackoutDates
     * Meta informations extracted from the WSDL
     * - documentation: A collection of black-out dates (i.e. dates when loyalty redemptions are not allowed).
     * - minOccurs: 0
     * @var mixed
     */
    public $BlackoutDates;
    /**
     * The ProgramName
     * Meta informations extracted from the WSDL
     * - documentation: This identifies the loyalty program.
     * - use: optional
     * @var string
     */
    public $ProgramName;
    /**
     * The SecondaryProgramName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the secondary level of the program, e.g.: gold, silver, etc..
     * - use: optional
     * @var string
     */
    public $SecondaryProgramName;
    /**
     * The AffiliateProgramName
     * Meta informations extracted from the WSDL
     * - documentation: The title of the membership program affiliated with the primary program.
     * - use: optional
     * @var string
     */
    public $AffiliateProgramName;
    /**
     * The HotelLevel
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate the level to which the hotel is assigned within the program for redemption purposes.
     * - use: optional
     * @var string
     */
    public $HotelLevel;
    /**
     * The ProgramCode
     * Meta informations extracted from the WSDL
     * - documentation: A company-specific code used to identify a loyalty program.
     * - use: optional
     * @var string
     */
    public $ProgramCode;
    /**
     * The TravelSector
     * Meta informations extracted from the WSDL
     * - documentation: Used to identify the specific travel sector to which the loyalty program applies. Refer to OpenTravel Codelist Travel Sector (TVS).
     * - use: optional
     * @var string
     */
    public $TravelSector;
    /**
     * Constructor method for LoyalProgram
     * @uses LoyalProgram::setProgramDescription()
     * @uses LoyalProgram::setProgramRestriction()
     * @uses LoyalProgram::setBlackoutDates()
     * @uses LoyalProgram::setProgramName()
     * @uses LoyalProgram::setSecondaryProgramName()
     * @uses LoyalProgram::setAffiliateProgramName()
     * @uses LoyalProgram::setHotelLevel()
     * @uses LoyalProgram::setProgramCode()
     * @uses LoyalProgram::setTravelSector()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProgramDescription[] $programDescription
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProgramRestriction $programRestriction
     * @param mixed $blackoutDates
     * @param string $programName
     * @param string $secondaryProgramName
     * @param string $affiliateProgramName
     * @param string $hotelLevel
     * @param string $programCode
     * @param string $travelSector
     */
    public function __construct(array $programDescription = array(), \Devlabs91\GenericOtaHotelApiService\StructType\ProgramRestriction $programRestriction = null, $blackoutDates = null, $programName = null, $secondaryProgramName = null, $affiliateProgramName = null, $hotelLevel = null, $programCode = null, $travelSector = null)
    {
        $this
            ->setProgramDescription($programDescription)
            ->setProgramRestriction($programRestriction)
            ->setBlackoutDates($blackoutDates)
            ->setProgramName($programName)
            ->setSecondaryProgramName($secondaryProgramName)
            ->setAffiliateProgramName($affiliateProgramName)
            ->setHotelLevel($hotelLevel)
            ->setProgramCode($programCode)
            ->setTravelSector($travelSector);
    }
    /**
     * Get ProgramDescription value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProgramDescription[]|null
     */
    public function getProgramDescription()
    {
        return $this->ProgramDescription;
    }
    /**
     * Set ProgramDescription value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProgramDescription[] $programDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
     */
    public function setProgramDescription(array $programDescription = array())
    {
        foreach ($programDescription as $loyalProgramProgramDescriptionItem) {
            // validation for constraint: itemType
            if (!$loyalProgramProgramDescriptionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ProgramDescription) {
                throw new \InvalidArgumentException(sprintf('The ProgramDescription property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ProgramDescription, "%s" given', is_object($loyalProgramProgramDescriptionItem) ? get_class($loyalProgramProgramDescriptionItem) : gettype($loyalProgramProgramDescriptionItem)), __LINE__);
            }
        }
        $this->ProgramDescription = $programDescription;
        return $this;
    }
    /**
     * Add item to ProgramDescription value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProgramDescription $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
     */
    public function addToProgramDescription(\Devlabs91\GenericOtaHotelApiService\StructType\ProgramDescription $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ProgramDescription) {
            throw new \InvalidArgumentException(sprintf('The ProgramDescription property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ProgramDescription, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProgramDescription[] = $item;
        return $this;
    }
    /**
     * Get ProgramRestriction value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProgramRestriction|null
     */
    public function getProgramRestriction()
    {
        return $this->ProgramRestriction;
    }
    /**
     * Set ProgramRestriction value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProgramRestriction $programRestriction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
     */
    public function setProgramRestriction(\Devlabs91\GenericOtaHotelApiService\StructType\ProgramRestriction $programRestriction = null)
    {
        $this->ProgramRestriction = $programRestriction;
        return $this;
    }
    /**
     * Get BlackoutDates value
     * @return mixed|null
     */
    public function getBlackoutDates()
    {
        return $this->BlackoutDates;
    }
    /**
     * Set BlackoutDates value
     * @param mixed $blackoutDates
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
     */
    public function setBlackoutDates($blackoutDates = null)
    {
        $this->BlackoutDates = $blackoutDates;
        return $this;
    }
    /**
     * Get ProgramName value
     * @return string|null
     */
    public function getProgramName()
    {
        return $this->ProgramName;
    }
    /**
     * Set ProgramName value
     * @param string $programName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
     */
    public function setProgramName($programName = null)
    {
        // validation for constraint: string
        if (!is_null($programName) && !is_string($programName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programName)), __LINE__);
        }
        $this->ProgramName = $programName;
        return $this;
    }
    /**
     * Get SecondaryProgramName value
     * @return string|null
     */
    public function getSecondaryProgramName()
    {
        return $this->SecondaryProgramName;
    }
    /**
     * Set SecondaryProgramName value
     * @param string $secondaryProgramName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
     */
    public function setSecondaryProgramName($secondaryProgramName = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryProgramName) && !is_string($secondaryProgramName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryProgramName)), __LINE__);
        }
        $this->SecondaryProgramName = $secondaryProgramName;
        return $this;
    }
    /**
     * Get AffiliateProgramName value
     * @return string|null
     */
    public function getAffiliateProgramName()
    {
        return $this->AffiliateProgramName;
    }
    /**
     * Set AffiliateProgramName value
     * @param string $affiliateProgramName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
     */
    public function setAffiliateProgramName($affiliateProgramName = null)
    {
        // validation for constraint: string
        if (!is_null($affiliateProgramName) && !is_string($affiliateProgramName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($affiliateProgramName)), __LINE__);
        }
        $this->AffiliateProgramName = $affiliateProgramName;
        return $this;
    }
    /**
     * Get HotelLevel value
     * @return string|null
     */
    public function getHotelLevel()
    {
        return $this->HotelLevel;
    }
    /**
     * Set HotelLevel value
     * @param string $hotelLevel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
     */
    public function setHotelLevel($hotelLevel = null)
    {
        // validation for constraint: string
        if (!is_null($hotelLevel) && !is_string($hotelLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelLevel)), __LINE__);
        }
        $this->HotelLevel = $hotelLevel;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalProgram
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

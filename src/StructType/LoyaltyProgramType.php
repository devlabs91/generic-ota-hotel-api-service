<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyProgramType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a membership or loyalty program offered by the company by name of the program. | Indicates the alliance status of the loyalty program. | Used for Character Strings, length 0 to 32.
 * - maxLength: 32
 * - minLength: 0
 * @subpackage Structs
 */
class LoyaltyProgramType extends AbstractStructBase
{
    /**
     * The ProgramCode
     * Meta informations extracted from the WSDL
     * - documentation: Identification of the loyalty program by code.
     * - use: optional
     * @var string
     */
    public $ProgramCode;
    /**
     * The LoyaltyLevel
     * Meta informations extracted from the WSDL
     * - documentation: Indicates special privileges in program assigned to individual.
     * - use: optional
     * @var string
     */
    public $LoyaltyLevel;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: A unique reference for a loyalty program within this message.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The PrimaryLoyaltyIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates this is the primary loyalty program and when false, indicates this is not the primary loyalty program.
     * - use: optional
     * @var bool
     */
    public $PrimaryLoyaltyIndicator;
    /**
     * Constructor method for LoyaltyProgramType
     * @uses LoyaltyProgramType::setProgramCode()
     * @uses LoyaltyProgramType::setLoyaltyLevel()
     * @uses LoyaltyProgramType::setRPH()
     * @uses LoyaltyProgramType::setPrimaryLoyaltyIndicator()
     * @param string $programCode
     * @param string $loyaltyLevel
     * @param string $rPH
     * @param bool $primaryLoyaltyIndicator
     */
    public function __construct($programCode = null, $loyaltyLevel = null, $rPH = null, $primaryLoyaltyIndicator = null)
    {
        $this
            ->setProgramCode($programCode)
            ->setLoyaltyLevel($loyaltyLevel)
            ->setRPH($rPH)
            ->setPrimaryLoyaltyIndicator($primaryLoyaltyIndicator);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyProgramType
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
     * Get LoyaltyLevel value
     * @return string|null
     */
    public function getLoyaltyLevel()
    {
        return $this->LoyaltyLevel;
    }
    /**
     * Set LoyaltyLevel value
     * @param string $loyaltyLevel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyProgramType
     */
    public function setLoyaltyLevel($loyaltyLevel = null)
    {
        // validation for constraint: string
        if (!is_null($loyaltyLevel) && !is_string($loyaltyLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loyaltyLevel)), __LINE__);
        }
        $this->LoyaltyLevel = $loyaltyLevel;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyProgramType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyProgramType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyProgramType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: The SpecialRequest object indicates special requests for a particular guest, service or reservation. Each of these may be independent of any that are tied to the profile (see Profile Synchronization standard).
 * @subpackage Structs
 */
class SpecialRequest extends ParagraphType
{
    /**
     * The RequestCode
     * Meta informations extracted from the WSDL
     * - documentation: This identifies a special request for this reservation and is typically hotel-specific.
     * - use: optional
     * @var string
     */
    public $RequestCode;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the source authority for the RequestCode.
     * - use: optional
     * @var string
     */
    public $CodeContext;
    /**
     * The NumberOfUnits
     * Meta informations extracted from the WSDL
     * - documentation: Allows you to pass the number of units that the special request is for (e.g., if 4 rooms are booked you may want 3 with double/double beds and 1 with a king).
     * - use: optional
     * @var int
     */
    public $NumberOfUnits;
    /**
     * Constructor method for SpecialRequest
     * @uses SpecialRequest::setRequestCode()
     * @uses SpecialRequest::setCodeContext()
     * @uses SpecialRequest::setNumberOfUnits()
     * @param string $requestCode
     * @param string $codeContext
     * @param int $numberOfUnits
     */
    public function __construct($requestCode = null, $codeContext = null, $numberOfUnits = null)
    {
        $this
            ->setRequestCode($requestCode)
            ->setCodeContext($codeContext)
            ->setNumberOfUnits($numberOfUnits);
    }
    /**
     * Get RequestCode value
     * @return string|null
     */
    public function getRequestCode()
    {
        return $this->RequestCode;
    }
    /**
     * Set RequestCode value
     * @param string $requestCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest
     */
    public function setRequestCode($requestCode = null)
    {
        // validation for constraint: string
        if (!is_null($requestCode) && !is_string($requestCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestCode)), __LINE__);
        }
        $this->RequestCode = $requestCode;
        return $this;
    }
    /**
     * Get CodeContext value
     * @return string|null
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }
    /**
     * Set CodeContext value
     * @param string $codeContext
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest
     */
    public function setCodeContext($codeContext = null)
    {
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->CodeContext = $codeContext;
        return $this;
    }
    /**
     * Get NumberOfUnits value
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnits) && !is_numeric($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRequest
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

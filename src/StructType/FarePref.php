<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FarePref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferred fare.
 * @subpackage Structs
 */
class FarePref extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Code indicating the type of fare preference (e.g., FM=commission, FD=fare discount).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Free text describing the fare preference.
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The AirlineVendorPrefRPH
     * Meta informations extracted from the WSDL
     * - documentation: Reference to one or more airlines in AirlinePrefType/VendorPref.
     * - use: optional
     * @var string
     */
    public $AirlineVendorPrefRPH;
    /**
     * The RateCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: Provides a rate category for the fare preference. Refer to OpenTravel code list Rate Category (RTC).
     * - use: optional
     * @var string
     */
    public $RateCategoryCode;
    /**
     * The TransferAction
     * Meta informations extracted from the WSDL
     * - documentation: Indicates under what conditions this element will be transfered to the booking.
     * - use: optional
     * @var string
     */
    public $TransferAction;
    /**
     * Constructor method for FarePref
     * @uses FarePref::setCode()
     * @uses FarePref::setDescription()
     * @uses FarePref::setAirlineVendorPrefRPH()
     * @uses FarePref::setRateCategoryCode()
     * @uses FarePref::setTransferAction()
     * @param string $code
     * @param string $description
     * @param string $airlineVendorPrefRPH
     * @param string $rateCategoryCode
     * @param string $transferAction
     */
    public function __construct($code = null, $description = null, $airlineVendorPrefRPH = null, $rateCategoryCode = null, $transferAction = null)
    {
        $this
            ->setCode($code)
            ->setDescription($description)
            ->setAirlineVendorPrefRPH($airlineVendorPrefRPH)
            ->setRateCategoryCode($rateCategoryCode)
            ->setTransferAction($transferAction);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FarePref
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FarePref
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get AirlineVendorPrefRPH value
     * @return string|null
     */
    public function getAirlineVendorPrefRPH()
    {
        return $this->AirlineVendorPrefRPH;
    }
    /**
     * Set AirlineVendorPrefRPH value
     * @param string $airlineVendorPrefRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FarePref
     */
    public function setAirlineVendorPrefRPH($airlineVendorPrefRPH = null)
    {
        // validation for constraint: string
        if (!is_null($airlineVendorPrefRPH) && !is_string($airlineVendorPrefRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineVendorPrefRPH)), __LINE__);
        }
        $this->AirlineVendorPrefRPH = $airlineVendorPrefRPH;
        return $this;
    }
    /**
     * Get RateCategoryCode value
     * @return string|null
     */
    public function getRateCategoryCode()
    {
        return $this->RateCategoryCode;
    }
    /**
     * Set RateCategoryCode value
     * @param string $rateCategoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FarePref
     */
    public function setRateCategoryCode($rateCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($rateCategoryCode) && !is_string($rateCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateCategoryCode)), __LINE__);
        }
        $this->RateCategoryCode = $rateCategoryCode;
        return $this;
    }
    /**
     * Get TransferAction value
     * @return string|null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param string $transferAction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FarePref
     */
    public function setTransferAction($transferAction = null)
    {
        // validation for constraint: string
        if (!is_null($transferAction) && !is_string($transferAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferAction)), __LINE__);
        }
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FarePref
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

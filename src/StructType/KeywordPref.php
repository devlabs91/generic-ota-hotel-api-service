<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeywordPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: This element stores data about an airline marketing keyword.
 * @subpackage Structs
 */
class KeywordPref extends AbstractStructBase
{
    /**
     * The VendorCode
     * Meta informations extracted from the WSDL
     * - documentation: Indicates to which airline the element is associated.
     * - use: optional
     * @var string
     */
    public $VendorCode;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Text of the Keyword element.
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The Keyword
     * Meta informations extracted from the WSDL
     * - documentation: The keyword is defined by the airline.
     * - use: optional
     * @var string
     */
    public $Keyword;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - documentation: Confirmation status from the airline. Refer to OpenTravel code list Status (STS).
     * - use: optional
     * @var string
     */
    public $StatusCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Number of passengers that will benefit from the request.
     * - use: optional
     * @var int
     */
    public $NumberInParty;
    /**
     * The AirlineVendorRPH
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AirlineVendorRPH;
    /**
     * The TransferAction
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TransferAction;
    /**
     * Constructor method for KeywordPref
     * @uses KeywordPref::setVendorCode()
     * @uses KeywordPref::setDescription()
     * @uses KeywordPref::setKeyword()
     * @uses KeywordPref::setStatusCode()
     * @uses KeywordPref::setNumberInParty()
     * @uses KeywordPref::setAirlineVendorRPH()
     * @uses KeywordPref::setTransferAction()
     * @param string $vendorCode
     * @param string $description
     * @param string $keyword
     * @param string $statusCode
     * @param int $numberInParty
     * @param string $airlineVendorRPH
     * @param string $transferAction
     */
    public function __construct($vendorCode = null, $description = null, $keyword = null, $statusCode = null, $numberInParty = null, $airlineVendorRPH = null, $transferAction = null)
    {
        $this
            ->setVendorCode($vendorCode)
            ->setDescription($description)
            ->setKeyword($keyword)
            ->setStatusCode($statusCode)
            ->setNumberInParty($numberInParty)
            ->setAirlineVendorRPH($airlineVendorRPH)
            ->setTransferAction($transferAction);
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref
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
     * Get Keyword value
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }
    /**
     * Set Keyword value
     * @param string $keyword
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref
     */
    public function setKeyword($keyword = null)
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keyword)), __LINE__);
        }
        $this->Keyword = $keyword;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref
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
     * Get AirlineVendorRPH value
     * @return string|null
     */
    public function getAirlineVendorRPH()
    {
        return $this->AirlineVendorRPH;
    }
    /**
     * Set AirlineVendorRPH value
     * @param string $airlineVendorRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref
     */
    public function setAirlineVendorRPH($airlineVendorRPH = null)
    {
        // validation for constraint: string
        if (!is_null($airlineVendorRPH) && !is_string($airlineVendorRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineVendorRPH)), __LINE__);
        }
        $this->AirlineVendorRPH = $airlineVendorRPH;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\KeywordPref
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

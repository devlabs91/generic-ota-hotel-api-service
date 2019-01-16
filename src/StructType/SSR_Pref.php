<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SSR_Pref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates Special Service Request preference type.
 * @subpackage Structs
 */
class SSR_Pref extends AbstractStructBase
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
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Number of passengers that will benefit from the request.
     * - use: optional
     * @var int
     */
    public $NumberInParty;
    /**
     * The DefaultStatusCode
     * Meta informations extracted from the WSDL
     * - documentation: The default status from the airline. Refer to the OpenTravel Code List named Status (STS).
     * - use: optional
     * @var string
     */
    public $DefaultStatusCode;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: Text that description of the service request.
     * - use: optional
     * @var string
     */
    public $Remark;
    /**
     * The LookupKey
     * Meta informations extracted from the WSDL
     * - documentation: Database key to retrieve the other part of the card number.
     * - use: optional
     * @var string
     */
    public $LookupKey;
    /**
     * The AirlineVendorPrefRPH
     * Meta informations extracted from the WSDL
     * - documentation: Reference to one or more airlines in VendorPref.
     * - use: optional
     * @var string
     */
    public $AirlineVendorPrefRPH;
    /**
     * The TransferActionType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates in what condition the element must be trasnferred to the booking.
     * - use: optional
     * @var string
     */
    public $TransferActionType;
    /**
     * Constructor method for SSR_Pref
     * @uses SSR_Pref::setVendorCode()
     * @uses SSR_Pref::setNumberInParty()
     * @uses SSR_Pref::setDefaultStatusCode()
     * @uses SSR_Pref::setRemark()
     * @uses SSR_Pref::setLookupKey()
     * @uses SSR_Pref::setAirlineVendorPrefRPH()
     * @uses SSR_Pref::setTransferActionType()
     * @param string $vendorCode
     * @param int $numberInParty
     * @param string $defaultStatusCode
     * @param string $remark
     * @param string $lookupKey
     * @param string $airlineVendorPrefRPH
     * @param string $transferActionType
     */
    public function __construct($vendorCode = null, $numberInParty = null, $defaultStatusCode = null, $remark = null, $lookupKey = null, $airlineVendorPrefRPH = null, $transferActionType = null)
    {
        $this
            ->setVendorCode($vendorCode)
            ->setNumberInParty($numberInParty)
            ->setDefaultStatusCode($defaultStatusCode)
            ->setRemark($remark)
            ->setLookupKey($lookupKey)
            ->setAirlineVendorPrefRPH($airlineVendorPrefRPH)
            ->setTransferActionType($transferActionType);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref
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
     * Get DefaultStatusCode value
     * @return string|null
     */
    public function getDefaultStatusCode()
    {
        return $this->DefaultStatusCode;
    }
    /**
     * Set DefaultStatusCode value
     * @param string $defaultStatusCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref
     */
    public function setDefaultStatusCode($defaultStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($defaultStatusCode) && !is_string($defaultStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultStatusCode)), __LINE__);
        }
        $this->DefaultStatusCode = $defaultStatusCode;
        return $this;
    }
    /**
     * Get Remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param string $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remark)), __LINE__);
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get LookupKey value
     * @return string|null
     */
    public function getLookupKey()
    {
        return $this->LookupKey;
    }
    /**
     * Set LookupKey value
     * @param string $lookupKey
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref
     */
    public function setLookupKey($lookupKey = null)
    {
        // validation for constraint: string
        if (!is_null($lookupKey) && !is_string($lookupKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lookupKey)), __LINE__);
        }
        $this->LookupKey = $lookupKey;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref
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
     * Get TransferActionType value
     * @return string|null
     */
    public function getTransferActionType()
    {
        return $this->TransferActionType;
    }
    /**
     * Set TransferActionType value
     * @param string $transferActionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref
     */
    public function setTransferActionType($transferActionType = null)
    {
        // validation for constraint: string
        if (!is_null($transferActionType) && !is_string($transferActionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferActionType)), __LINE__);
        }
        $this->TransferActionType = $transferActionType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_Pref
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the preferred airline carrier(s) by name. | Specify vendors to include and exclude from the response. | Indicates the preferred Vendor Company for the vehicle rental. If a company name is supplied, the rates will be
 * supplied for the specific Vendor Company. The company name is unique amongst the vendors.
 * @subpackage Structs
 */
class VendorPref extends CompanyNamePrefType
{
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: A reference pointer used to identify an airline vendor.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The AllianceAllowedInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, flights for other airlines in an alliance with the specified carrier code may be returned.
     * - use: optional
     * @var bool
     */
    public $AllianceAllowedInd;
    /**
     * The LoyaltyAllowedInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, flights for other airlines in a loyalty program with the specified carrier code may be returned.
     * - use: optional
     * @var bool
     */
    public $LoyaltyAllowedInd;
    /**
     * The CorpDiscountNmbr
     * Meta informations extracted from the WSDL
     * - documentation: This is the vendor specific code used to identify a special rate associated with a specific organization. Used when multiple vendors have been requested and there is a different code for each.
     * - use: optional
     * @var string
     */
    public $CorpDiscountNmbr;
    /**
     * Constructor method for VendorPref
     * @uses VendorPref::setRPH()
     * @uses VendorPref::setAllianceAllowedInd()
     * @uses VendorPref::setLoyaltyAllowedInd()
     * @uses VendorPref::setCorpDiscountNmbr()
     * @param string $rPH
     * @param bool $allianceAllowedInd
     * @param bool $loyaltyAllowedInd
     * @param string $corpDiscountNmbr
     */
    public function __construct($rPH = null, $allianceAllowedInd = null, $loyaltyAllowedInd = null, $corpDiscountNmbr = null)
    {
        $this
            ->setRPH($rPH)
            ->setAllianceAllowedInd($allianceAllowedInd)
            ->setLoyaltyAllowedInd($loyaltyAllowedInd)
            ->setCorpDiscountNmbr($corpDiscountNmbr);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref
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
     * Get AllianceAllowedInd value
     * @return bool|null
     */
    public function getAllianceAllowedInd()
    {
        return $this->AllianceAllowedInd;
    }
    /**
     * Set AllianceAllowedInd value
     * @param bool $allianceAllowedInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref
     */
    public function setAllianceAllowedInd($allianceAllowedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($allianceAllowedInd) && !is_bool($allianceAllowedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allianceAllowedInd)), __LINE__);
        }
        $this->AllianceAllowedInd = $allianceAllowedInd;
        return $this;
    }
    /**
     * Get LoyaltyAllowedInd value
     * @return bool|null
     */
    public function getLoyaltyAllowedInd()
    {
        return $this->LoyaltyAllowedInd;
    }
    /**
     * Set LoyaltyAllowedInd value
     * @param bool $loyaltyAllowedInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref
     */
    public function setLoyaltyAllowedInd($loyaltyAllowedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($loyaltyAllowedInd) && !is_bool($loyaltyAllowedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($loyaltyAllowedInd)), __LINE__);
        }
        $this->LoyaltyAllowedInd = $loyaltyAllowedInd;
        return $this;
    }
    /**
     * Get CorpDiscountNmbr value
     * @return string|null
     */
    public function getCorpDiscountNmbr()
    {
        return $this->CorpDiscountNmbr;
    }
    /**
     * Set CorpDiscountNmbr value
     * @param string $corpDiscountNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref
     */
    public function setCorpDiscountNmbr($corpDiscountNmbr = null)
    {
        // validation for constraint: string
        if (!is_null($corpDiscountNmbr) && !is_string($corpDiscountNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corpDiscountNmbr)), __LINE__);
        }
        $this->CorpDiscountNmbr = $corpDiscountNmbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref
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

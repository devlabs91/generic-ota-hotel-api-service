<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorOption StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates vendors available for document delivery. | Specifies the price for the mailing option.
 * @subpackage Structs
 */
class VendorOption extends AbstractStructBase
{
    /**
     * The VendorName
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the various options for mailing documents (e.g., UPS, FEDEX).
     * - use: optional
     * @var string
     */
    public $VendorName;
    /**
     * Constructor method for VendorOption
     * @uses VendorOption::setVendorName()
     * @param string $vendorName
     */
    public function __construct($vendorName = null)
    {
        $this
            ->setVendorName($vendorName);
    }
    /**
     * Get VendorName value
     * @return string|null
     */
    public function getVendorName()
    {
        return $this->VendorName;
    }
    /**
     * Set VendorName value
     * @param string $vendorName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption
     */
    public function setVendorName($vendorName = null)
    {
        // validation for constraint: string
        if (!is_null($vendorName) && !is_string($vendorName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorName)), __LINE__);
        }
        $this->VendorName = $vendorName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption
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

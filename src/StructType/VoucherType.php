<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoucherType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A form of payment using a voucher or coupon. | The date when a voucher becomes valid for use, if applicable, and the the date when a voucher or series of coupons expires and is no longer valid.
 * @subpackage Structs
 */
class VoucherType extends AbstractStructBase
{
    /**
     * The SeriesCode
     * Meta informations extracted from the WSDL
     * - documentation: Identification of a series of coupons or vouchers identified by serial number(s).
     * @var string
     */
    public $SeriesCode;
    /**
     * Constructor method for VoucherType
     * @uses VoucherType::setSeriesCode()
     * @param string $seriesCode
     */
    public function __construct($seriesCode = null)
    {
        $this
            ->setSeriesCode($seriesCode);
    }
    /**
     * Get SeriesCode value
     * @return string|null
     */
    public function getSeriesCode()
    {
        return $this->SeriesCode;
    }
    /**
     * Set SeriesCode value
     * @param string $seriesCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VoucherType
     */
    public function setSeriesCode($seriesCode = null)
    {
        // validation for constraint: string
        if (!is_null($seriesCode) && !is_string($seriesCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seriesCode)), __LINE__);
        }
        $this->SeriesCode = $seriesCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VoucherType
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

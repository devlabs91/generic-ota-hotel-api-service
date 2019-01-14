<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestPrice StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the guest and prices at the guest level.
 * @subpackage Structs
 */
class GuestPrice extends GuestType
{
    /**
     * The PriceInfos
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos
     */
    public $PriceInfos;
    /**
     * Constructor method for GuestPrice
     * @uses GuestPrice::setPriceInfos()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos $priceInfos
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos $priceInfos = null)
    {
        $this
            ->setPriceInfos($priceInfos);
    }
    /**
     * Get PriceInfos value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos|null
     */
    public function getPriceInfos()
    {
        return $this->PriceInfos;
    }
    /**
     * Set PriceInfos value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos $priceInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestPrice
     */
    public function setPriceInfos(\Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos $priceInfos = null)
    {
        $this->PriceInfos = $priceInfos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestPrice
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

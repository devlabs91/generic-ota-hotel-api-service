<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateQualifierType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The RateQualifierType complex type describes fully rate information associated with a speciifc rate quotation, including the description of any promotions that may apply.
 * @subpackage Structs
 */
class RateQualifierType extends RateQualifierCoreType
{
    /**
     * The PromoDesc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $PromoDesc;
    /**
     * Constructor method for RateQualifierType
     * @uses RateQualifierType::setPromoDesc()
     * @param mixed $promoDesc
     */
    public function __construct($promoDesc = null)
    {
        $this
            ->setPromoDesc($promoDesc);
    }
    /**
     * Get PromoDesc value
     * @return mixed|null
     */
    public function getPromoDesc()
    {
        return $this->PromoDesc;
    }
    /**
     * Set PromoDesc value
     * @param mixed $promoDesc
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierType
     */
    public function setPromoDesc($promoDesc = null)
    {
        $this->PromoDesc = $promoDesc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifierType
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

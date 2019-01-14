<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteePayment StructType
 * Meta informations extracted from the WSDL
 * - documentation: Guarantee or Payment information for an individual guest.
 * @subpackage Structs
 */
class GuaranteePayment extends HotelPaymentFormType
{
    /**
     * The DetailType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DetailType;
    /**
     * Constructor method for GuaranteePayment
     * @uses GuaranteePayment::setDetailType()
     * @param string $detailType
     */
    public function __construct($detailType = null)
    {
        $this
            ->setDetailType($detailType);
    }
    /**
     * Get DetailType value
     * @return string|null
     */
    public function getDetailType()
    {
        return $this->DetailType;
    }
    /**
     * Set DetailType value
     * @param string $detailType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
     */
    public function setDetailType($detailType = null)
    {
        // validation for constraint: string
        if (!is_null($detailType) && !is_string($detailType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailType)), __LINE__);
        }
        $this->DetailType = $detailType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment
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

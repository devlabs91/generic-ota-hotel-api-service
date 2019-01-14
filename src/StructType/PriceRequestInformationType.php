<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceRequestInformationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identify pricing source, if negotiated fares are requested and if it is a reprice request.
 * @subpackage Structs
 */
class PriceRequestInformationType extends AbstractStructBase
{
    /**
     * The NegotiatedFareCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode[]
     */
    public $NegotiatedFareCode;
    /**
     * Constructor method for PriceRequestInformationType
     * @uses PriceRequestInformationType::setNegotiatedFareCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode[] $negotiatedFareCode
     */
    public function __construct(array $negotiatedFareCode = array())
    {
        $this
            ->setNegotiatedFareCode($negotiatedFareCode);
    }
    /**
     * Get NegotiatedFareCode value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode[]|null
     */
    public function getNegotiatedFareCode()
    {
        return $this->NegotiatedFareCode;
    }
    /**
     * Set NegotiatedFareCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode[] $negotiatedFareCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
     */
    public function setNegotiatedFareCode(array $negotiatedFareCode = array())
    {
        foreach ($negotiatedFareCode as $priceRequestInformationTypeNegotiatedFareCodeItem) {
            // validation for constraint: itemType
            if (!$priceRequestInformationTypeNegotiatedFareCodeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode) {
                throw new \InvalidArgumentException(sprintf('The NegotiatedFareCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode, "%s" given', is_object($priceRequestInformationTypeNegotiatedFareCodeItem) ? get_class($priceRequestInformationTypeNegotiatedFareCodeItem) : gettype($priceRequestInformationTypeNegotiatedFareCodeItem)), __LINE__);
            }
        }
        $this->NegotiatedFareCode = $negotiatedFareCode;
        return $this;
    }
    /**
     * Add item to NegotiatedFareCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
     */
    public function addToNegotiatedFareCode(\Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode) {
            throw new \InvalidArgumentException(sprintf('The NegotiatedFareCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NegotiatedFareCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Informtion pertaining to the shipment of a product to the recipient. | The charges associated with shipment of the item.
 * @subpackage Structs
 */
class ShippingInfo extends AbstractStructBase
{
    /**
     * The ShippingType
     * Meta informations extracted from the WSDL
     * - documentation: The method of shipment (e.g., air, ground, pickup).
     * - use: optional
     * @var string
     */
    public $ShippingType;
    /**
     * The ShippingCarrier
     * Meta informations extracted from the WSDL
     * - documentation: The shipping carrier (e.g., USPS, UPS, FedEx).
     * - use: optional
     * @var string
     */
    public $ShippingCarrier;
    /**
     * Constructor method for ShippingInfo
     * @uses ShippingInfo::setShippingType()
     * @uses ShippingInfo::setShippingCarrier()
     * @param string $shippingType
     * @param string $shippingCarrier
     */
    public function __construct($shippingType = null, $shippingCarrier = null)
    {
        $this
            ->setShippingType($shippingType)
            ->setShippingCarrier($shippingCarrier);
    }
    /**
     * Get ShippingType value
     * @return string|null
     */
    public function getShippingType()
    {
        return $this->ShippingType;
    }
    /**
     * Set ShippingType value
     * @param string $shippingType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShippingInfo
     */
    public function setShippingType($shippingType = null)
    {
        // validation for constraint: string
        if (!is_null($shippingType) && !is_string($shippingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingType)), __LINE__);
        }
        $this->ShippingType = $shippingType;
        return $this;
    }
    /**
     * Get ShippingCarrier value
     * @return string|null
     */
    public function getShippingCarrier()
    {
        return $this->ShippingCarrier;
    }
    /**
     * Set ShippingCarrier value
     * @param string $shippingCarrier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShippingInfo
     */
    public function setShippingCarrier($shippingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCarrier) && !is_string($shippingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingCarrier)), __LINE__);
        }
        $this->ShippingCarrier = $shippingCarrier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShippingInfo
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

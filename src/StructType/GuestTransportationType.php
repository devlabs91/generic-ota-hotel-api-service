<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestTransportationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the guest transportation type.
 * @subpackage Structs
 */
class GuestTransportationType extends AbstractStructBase
{
    /**
     * The Mode
     * Meta informations extracted from the WSDL
     * - documentation: Transportation mode code. Refer to OpenTravel Code List Transportation Code (TRP).
     * - use: required
     * @var string
     */
    public $Mode;
    /**
     * The GuestCity
     * Meta informations extracted from the WSDL
     * - documentation: City or closest airport where the guest resides.
     * - minOccurs: 0
     * @var mixed
     */
    public $GuestCity;
    /**
     * The GatewayCity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the gateway city for the cruise line (especially when the mode of transportation is air).
     * - minOccurs: 0
     * @var mixed
     */
    public $GatewayCity;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Status for the mode of transportation. Refer to OpenTravel Code table Status (STS).
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * Constructor method for GuestTransportationType
     * @uses GuestTransportationType::setMode()
     * @uses GuestTransportationType::setGuestCity()
     * @uses GuestTransportationType::setGatewayCity()
     * @uses GuestTransportationType::setStatus()
     * @param string $mode
     * @param mixed $guestCity
     * @param mixed $gatewayCity
     * @param string $status
     */
    public function __construct($mode = null, $guestCity = null, $gatewayCity = null, $status = null)
    {
        $this
            ->setMode($mode)
            ->setGuestCity($guestCity)
            ->setGatewayCity($gatewayCity)
            ->setStatus($status);
    }
    /**
     * Get Mode value
     * @return string
     */
    public function getMode()
    {
        return $this->Mode;
    }
    /**
     * Set Mode value
     * @param string $mode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestTransportationType
     */
    public function setMode($mode = null)
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mode)), __LINE__);
        }
        $this->Mode = $mode;
        return $this;
    }
    /**
     * Get GuestCity value
     * @return mixed|null
     */
    public function getGuestCity()
    {
        return $this->GuestCity;
    }
    /**
     * Set GuestCity value
     * @param mixed $guestCity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestTransportationType
     */
    public function setGuestCity($guestCity = null)
    {
        $this->GuestCity = $guestCity;
        return $this;
    }
    /**
     * Get GatewayCity value
     * @return mixed|null
     */
    public function getGatewayCity()
    {
        return $this->GatewayCity;
    }
    /**
     * Set GatewayCity value
     * @param mixed $gatewayCity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestTransportationType
     */
    public function setGatewayCity($gatewayCity = null)
    {
        $this->GatewayCity = $gatewayCity;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestTransportationType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestTransportationType
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

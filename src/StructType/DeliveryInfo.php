<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Shipping information for the ticket. | Specifies the cost of the ticket delivery option.
 * @subpackage Structs
 */
class DeliveryInfo extends AbstractStructBase
{
    /**
     * The DistribType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the manner in which a ticket will be sent to the traveler. Refer to OpenTravel Code List Distribution Type (DTB).
     * - use: optional
     * @var string
     */
    public $DistribType;
    /**
     * Constructor method for DeliveryInfo
     * @uses DeliveryInfo::setDistribType()
     * @param string $distribType
     */
    public function __construct($distribType = null)
    {
        $this
            ->setDistribType($distribType);
    }
    /**
     * Get DistribType value
     * @return string|null
     */
    public function getDistribType()
    {
        return $this->DistribType;
    }
    /**
     * Set DistribType value
     * @param string $distribType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo
     */
    public function setDistribType($distribType = null)
    {
        // validation for constraint: string
        if (!is_null($distribType) && !is_string($distribType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distribType)), __LINE__);
        }
        $this->DistribType = $distribType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo
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

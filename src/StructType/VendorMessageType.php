<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorMessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides formatted textual information that a vendor wishes to make known. The type of information is indicated.
 * @subpackage Structs
 */
class VendorMessageType extends FormattedTextType
{
    /**
     * The InfoType
     * Meta informations extracted from the WSDL
     * - documentation: To define the type of information such as Description, Policy, Marketing, etc. Refer to OpenTravel Code List Information Type (INF).
     * - use: required
     * @var string
     */
    public $InfoType;
    /**
     * Constructor method for VendorMessageType
     * @uses VendorMessageType::setInfoType()
     * @param string $infoType
     */
    public function __construct($infoType = null)
    {
        $this
            ->setInfoType($infoType);
    }
    /**
     * Get InfoType value
     * @return string
     */
    public function getInfoType()
    {
        return $this->InfoType;
    }
    /**
     * Set InfoType value
     * @param string $infoType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessageType
     */
    public function setInfoType($infoType = null)
    {
        // validation for constraint: string
        if (!is_null($infoType) && !is_string($infoType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infoType)), __LINE__);
        }
        $this->InfoType = $infoType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessageType
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

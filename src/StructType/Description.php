<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Description StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about the hotel.
 * @subpackage Structs
 */
class Description extends ParagraphType
{
    /**
     * The InfoCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to designate a particular type of description such as marketing. Refer to OTA Code List InfoType.
     * - use: optional
     * @var string
     */
    public $InfoCode;
    /**
     * Constructor method for Description
     * @uses Description::setInfoCode()
     * @param string $infoCode
     */
    public function __construct($infoCode = null)
    {
        $this
            ->setInfoCode($infoCode);
    }
    /**
     * Get InfoCode value
     * @return string|null
     */
    public function getInfoCode()
    {
        return $this->InfoCode;
    }
    /**
     * Set InfoCode value
     * @param string $infoCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Description
     */
    public function setInfoCode($infoCode = null)
    {
        // validation for constraint: string
        if (!is_null($infoCode) && !is_string($infoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infoCode)), __LINE__);
        }
        $this->InfoCode = $infoCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Description
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyName StructType
 * @subpackage Structs
 */
class CompanyName extends CompanyNameType
{
    /**
     * The ContactName
     * Meta informations extracted from the WSDL
     * - documentation: This may be used to pass the name of the contact at the company for which the direct bill applies.
     * - use: optional
     * @var string
     */
    public $ContactName;
    /**
     * Constructor method for CompanyName
     * @uses CompanyName::setContactName()
     * @param string $contactName
     */
    public function __construct($contactName = null)
    {
        $this
            ->setContactName($contactName);
    }
    /**
     * Get ContactName value
     * @return string|null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    /**
     * Set ContactName value
     * @param string $contactName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyName
     */
    public function setContactName($contactName = null)
    {
        // validation for constraint: string
        if (!is_null($contactName) && !is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactName)), __LINE__);
        }
        $this->ContactName = $contactName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyName
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

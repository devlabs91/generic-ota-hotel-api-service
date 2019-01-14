<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinConfiguration StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies cabin bed configuration.
 * @subpackage Structs
 */
class CabinConfiguration extends AbstractStructBase
{
    /**
     * The BedConfigurationCode
     * Meta informations extracted from the WSDL
     * - documentation: Contains a code defining the bed configuration in the cabin.
     * - use: optional
     * @var string
     */
    public $BedConfigurationCode;
    /**
     * Constructor method for CabinConfiguration
     * @uses CabinConfiguration::setBedConfigurationCode()
     * @param string $bedConfigurationCode
     */
    public function __construct($bedConfigurationCode = null)
    {
        $this
            ->setBedConfigurationCode($bedConfigurationCode);
    }
    /**
     * Get BedConfigurationCode value
     * @return string|null
     */
    public function getBedConfigurationCode()
    {
        return $this->BedConfigurationCode;
    }
    /**
     * Set BedConfigurationCode value
     * @param string $bedConfigurationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration
     */
    public function setBedConfigurationCode($bedConfigurationCode = null)
    {
        // validation for constraint: string
        if (!is_null($bedConfigurationCode) && !is_string($bedConfigurationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bedConfigurationCode)), __LINE__);
        }
        $this->BedConfigurationCode = $bedConfigurationCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration
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

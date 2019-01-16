<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgPriceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Gives a price for a quantity of a traveller type e.g. a price for 2 adults.
 * @subpackage Structs
 */
class PkgPriceType extends AbstractStructBase
{
    /**
     * The PriceBasis
     * Meta informations extracted from the WSDL
     * - documentation: An enumerated type that defines how a service is priced. Values: Per stay, Per person, Per night, Per person per night, Per use.
     * - use: optional
     * @var string
     */
    public $PriceBasis;
    /**
     * Constructor method for PkgPriceType
     * @uses PkgPriceType::setPriceBasis()
     * @param string $priceBasis
     */
    public function __construct($priceBasis = null)
    {
        $this
            ->setPriceBasis($priceBasis);
    }
    /**
     * Get PriceBasis value
     * @return string|null
     */
    public function getPriceBasis()
    {
        return $this->PriceBasis;
    }
    /**
     * Set PriceBasis value
     * @param string $priceBasis
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPriceType
     */
    public function setPriceBasis($priceBasis = null)
    {
        // validation for constraint: string
        if (!is_null($priceBasis) && !is_string($priceBasis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priceBasis)), __LINE__);
        }
        $this->PriceBasis = $priceBasis;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPriceType
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

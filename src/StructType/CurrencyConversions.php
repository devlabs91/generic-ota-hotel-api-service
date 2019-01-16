<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyConversions StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of currency conversion elements.
 * @subpackage Structs
 */
class CurrencyConversions extends AbstractStructBase
{
    /**
     * The CurrencyConversion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion[]
     */
    public $CurrencyConversion;
    /**
     * Constructor method for CurrencyConversions
     * @uses CurrencyConversions::setCurrencyConversion()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion[] $currencyConversion
     */
    public function __construct(array $currencyConversion = array())
    {
        $this
            ->setCurrencyConversion($currencyConversion);
    }
    /**
     * Get CurrencyConversion value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion[]|null
     */
    public function getCurrencyConversion()
    {
        return $this->CurrencyConversion;
    }
    /**
     * Set CurrencyConversion value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion[] $currencyConversion
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversions
     */
    public function setCurrencyConversion(array $currencyConversion = array())
    {
        foreach ($currencyConversion as $currencyConversionsCurrencyConversionItem) {
            // validation for constraint: itemType
            if (!$currencyConversionsCurrencyConversionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion) {
                throw new \InvalidArgumentException(sprintf('The CurrencyConversion property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion, "%s" given', is_object($currencyConversionsCurrencyConversionItem) ? get_class($currencyConversionsCurrencyConversionItem) : gettype($currencyConversionsCurrencyConversionItem)), __LINE__);
            }
        }
        $this->CurrencyConversion = $currencyConversion;
        return $this;
    }
    /**
     * Add item to CurrencyConversion value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversions
     */
    public function addToCurrencyConversion(\Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion) {
            throw new \InvalidArgumentException(sprintf('The CurrencyConversion property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CurrencyConversion[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversions
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffSell StructType
 * Meta informations extracted from the WSDL
 * - documentation: Communicates additional information about inventory that is not available for sale. | Communicates information about inventory that is not available for sale.
 * @subpackage Structs
 */
class OffSell extends AbstractStructBase
{
    /**
     * The OffSellValueType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $OffSellValueType;
    /**
     * The OffSellValue
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $OffSellValue;
    /**
     * Constructor method for OffSell
     * @uses OffSell::setOffSellValueType()
     * @uses OffSell::setOffSellValue()
     * @param string $offSellValueType
     * @param string $offSellValue
     */
    public function __construct($offSellValueType = null, $offSellValue = null)
    {
        $this
            ->setOffSellValueType($offSellValueType)
            ->setOffSellValue($offSellValue);
    }
    /**
     * Get OffSellValueType value
     * @return string|null
     */
    public function getOffSellValueType()
    {
        return $this->OffSellValueType;
    }
    /**
     * Set OffSellValueType value
     * @param string $offSellValueType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffSell
     */
    public function setOffSellValueType($offSellValueType = null)
    {
        // validation for constraint: string
        if (!is_null($offSellValueType) && !is_string($offSellValueType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offSellValueType)), __LINE__);
        }
        $this->OffSellValueType = $offSellValueType;
        return $this;
    }
    /**
     * Get OffSellValue value
     * @return string|null
     */
    public function getOffSellValue()
    {
        return $this->OffSellValue;
    }
    /**
     * Set OffSellValue value
     * @param string $offSellValue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffSell
     */
    public function setOffSellValue($offSellValue = null)
    {
        // validation for constraint: string
        if (!is_null($offSellValue) && !is_string($offSellValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offSellValue)), __LINE__);
        }
        $this->OffSellValue = $offSellValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffSell
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

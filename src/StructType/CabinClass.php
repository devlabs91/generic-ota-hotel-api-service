<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinClass StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the Cabin details in a seat map.
 * @subpackage Structs
 */
class CabinClass extends CabinClassType
{
    /**
     * The StartingRow
     * Meta informations extracted from the WSDL
     * - documentation: Specify the starting row number for this cabin class.
     * - use: optional
     * @var string
     */
    public $StartingRow;
    /**
     * The EndingRow
     * Meta informations extracted from the WSDL
     * - documentation: Specify the ending row number for this cabin class.
     * - use: optional
     * @var string
     */
    public $EndingRow;
    /**
     * Constructor method for CabinClass
     * @uses CabinClass::setStartingRow()
     * @uses CabinClass::setEndingRow()
     * @param string $startingRow
     * @param string $endingRow
     */
    public function __construct($startingRow = null, $endingRow = null)
    {
        $this
            ->setStartingRow($startingRow)
            ->setEndingRow($endingRow);
    }
    /**
     * Get StartingRow value
     * @return string|null
     */
    public function getStartingRow()
    {
        return $this->StartingRow;
    }
    /**
     * Set StartingRow value
     * @param string $startingRow
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinClass
     */
    public function setStartingRow($startingRow = null)
    {
        // validation for constraint: string
        if (!is_null($startingRow) && !is_string($startingRow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startingRow)), __LINE__);
        }
        $this->StartingRow = $startingRow;
        return $this;
    }
    /**
     * Get EndingRow value
     * @return string|null
     */
    public function getEndingRow()
    {
        return $this->EndingRow;
    }
    /**
     * Set EndingRow value
     * @param string $endingRow
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinClass
     */
    public function setEndingRow($endingRow = null)
    {
        // validation for constraint: string
        if (!is_null($endingRow) && !is_string($endingRow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endingRow)), __LINE__);
        }
        $this->EndingRow = $endingRow;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinClass
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

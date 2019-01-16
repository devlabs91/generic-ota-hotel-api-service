<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnstructuredFareCalc StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the fare calc information for the stored fare for the passenger.
 * @subpackage Structs
 */
class UnstructuredFareCalc extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The FareCalcMode
     * Meta informations extracted from the WSDL
     * - documentation: Used to identify the method of pricing for this transaction (e.g., manual, automated pricing). Should be 1 character in length.
     * - use: optional
     * @var string
     */
    public $FareCalcMode;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * Constructor method for UnstructuredFareCalc
     * @uses UnstructuredFareCalc::set_()
     * @uses UnstructuredFareCalc::setFareCalcMode()
     * @uses UnstructuredFareCalc::setOperation()
     * @param string $_
     * @param string $fareCalcMode
     * @param string $operation
     */
    public function __construct($_ = null, $fareCalcMode = null, $operation = null)
    {
        $this
            ->set_($_)
            ->setFareCalcMode($fareCalcMode)
            ->setOperation($operation);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UnstructuredFareCalc
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get FareCalcMode value
     * @return string|null
     */
    public function getFareCalcMode()
    {
        return $this->FareCalcMode;
    }
    /**
     * Set FareCalcMode value
     * @param string $fareCalcMode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UnstructuredFareCalc
     */
    public function setFareCalcMode($fareCalcMode = null)
    {
        // validation for constraint: string
        if (!is_null($fareCalcMode) && !is_string($fareCalcMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareCalcMode)), __LINE__);
        }
        $this->FareCalcMode = $fareCalcMode;
        return $this;
    }
    /**
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UnstructuredFareCalc
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UnstructuredFareCalc
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

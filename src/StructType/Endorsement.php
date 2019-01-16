<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Endorsement StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies ticket endorsement information.
 * @subpackage Structs
 */
class Endorsement extends FreeTextType
{
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * Constructor method for Endorsement
     * @uses Endorsement::setOperation()
     * @param string $operation
     */
    public function __construct($operation = null)
    {
        $this
            ->setOperation($operation);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement
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

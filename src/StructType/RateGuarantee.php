<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateGuarantee StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to indicate how long a specific rate is guaranteed. | The effective and discontinue dates for this guarantee. | Used to indicate how long a specific rate is guaranteed.
 * @subpackage Structs
 */
class RateGuarantee extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A description of the rate guarantee. | A description of the rate guarantee.
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * Constructor method for RateGuarantee
     * @uses RateGuarantee::setDescription()
     * @param mixed $description
     */
    public function __construct($description = null)
    {
        $this
            ->setDescription($description);
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateGuarantee
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateGuarantee
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

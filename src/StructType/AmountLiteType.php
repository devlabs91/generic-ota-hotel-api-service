<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountLiteType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary version of the AmountType, initially created for the Travel Itinerary Message set.
 * @subpackage Structs
 */
class AmountLiteType extends AbstractStructBase
{
    /**
     * The Base
     * Meta informations extracted from the WSDL
     * - documentation: The base amount charged for the accommodation or service per unit of time (ex: Nightly, Weekly, etc). If TaxInclusive is set to True, then taxes are included in the base amount. Note that any additional charges should itemized in the
     * other elements.
     * @var mixed
     */
    public $Base;
    /**
     * The GuaranteedInd
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $GuaranteedInd;
    /**
     * Constructor method for AmountLiteType
     * @uses AmountLiteType::setBase()
     * @uses AmountLiteType::setGuaranteedInd()
     * @param mixed $base
     * @param bool $guaranteedInd
     */
    public function __construct($base = null, $guaranteedInd = null)
    {
        $this
            ->setBase($base)
            ->setGuaranteedInd($guaranteedInd);
    }
    /**
     * Get Base value
     * @return mixed|null
     */
    public function getBase()
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param mixed $base
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountLiteType
     */
    public function setBase($base = null)
    {
        $this->Base = $base;
        return $this;
    }
    /**
     * Get GuaranteedInd value
     * @return bool|null
     */
    public function getGuaranteedInd()
    {
        return $this->GuaranteedInd;
    }
    /**
     * Set GuaranteedInd value
     * @param bool $guaranteedInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountLiteType
     */
    public function setGuaranteedInd($guaranteedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteedInd) && !is_bool($guaranteedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteedInd)), __LINE__);
        }
        $this->GuaranteedInd = $guaranteedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountLiteType
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

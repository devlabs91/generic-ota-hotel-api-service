<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonalInsuranceItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the number of customers taking specific type of personal insurance.
 * @subpackage Structs
 */
class PersonalInsuranceItemType extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Code;
    /**
     * The CustomerCounts
     * Meta informations extracted from the WSDL
     * - documentation: Counts of the number of passengers in age categories. Used when individual passenger identification is not required.
     * @var mixed
     */
    public $CustomerCounts;
    /**
     * Constructor method for PersonalInsuranceItemType
     * @uses PersonalInsuranceItemType::setCode()
     * @uses PersonalInsuranceItemType::setCustomerCounts()
     * @param string $code
     * @param mixed $customerCounts
     */
    public function __construct($code = null, $customerCounts = null)
    {
        $this
            ->setCode($code)
            ->setCustomerCounts($customerCounts);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonalInsuranceItemType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get CustomerCounts value
     * @return mixed|null
     */
    public function getCustomerCounts()
    {
        return $this->CustomerCounts;
    }
    /**
     * Set CustomerCounts value
     * @param mixed $customerCounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonalInsuranceItemType
     */
    public function setCustomerCounts($customerCounts = null)
    {
        $this->CustomerCounts = $customerCounts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonalInsuranceItemType
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

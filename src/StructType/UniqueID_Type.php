<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniqueID_Type StructType
 * Meta informations extracted from the WSDL
 * - documentation: An identifier used to uniquely reference an object in a system (e.g. an airline reservation reference, customer profile reference, booking confirmation number, or a reference to a previous availability quote).
 * @subpackage Structs
 */
class UniqueID_Type extends AbstractStructBase
{
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the company that is associated with the UniqueID.
     * - minOccurs: 0
     * @var mixed
     */
    public $CompanyName;
    /**
     * Constructor method for UniqueID_Type
     * @uses UniqueID_Type::setCompanyName()
     * @param mixed $companyName
     */
    public function __construct($companyName = null)
    {
        $this
            ->setCompanyName($companyName);
    }
    /**
     * Get CompanyName value
     * @return mixed|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param mixed $companyName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type
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

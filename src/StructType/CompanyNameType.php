<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyNameType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a company by name. | Provides detailed information on a company. | Used for Character Strings, length 0 to 128.
 * - maxLength: 128
 * - minLength: 0
 * @subpackage Structs
 */
class CompanyNameType extends AbstractStructBase
{
    /**
     * The Division
     * Meta informations extracted from the WSDL
     * - documentation: The division name or ID with which the contact is associated.
     * - use: optional
     * @var string
     */
    public $Division;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - documentation: The department name or ID with which the contact is associated.
     * - use: optional
     * @var string
     */
    public $Department;
    /**
     * Constructor method for CompanyNameType
     * @uses CompanyNameType::setDivision()
     * @uses CompanyNameType::setDepartment()
     * @param string $division
     * @param string $department
     */
    public function __construct($division = null, $department = null)
    {
        $this
            ->setDivision($division)
            ->setDepartment($department);
    }
    /**
     * Get Division value
     * @return string|null
     */
    public function getDivision()
    {
        return $this->Division;
    }
    /**
     * Set Division value
     * @param string $division
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType
     */
    public function setDivision($division = null)
    {
        // validation for constraint: string
        if (!is_null($division) && !is_string($division)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($division)), __LINE__);
        }
        $this->Division = $division;
        return $this;
    }
    /**
     * Get Department value
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param string $department
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($department)), __LINE__);
        }
        $this->Department = $department;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyNameType
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

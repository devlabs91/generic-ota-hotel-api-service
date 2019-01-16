<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Employment identification; using an employee ID number, title, level within the company, and an indication of their status (e.g., active, retired, on leave, or terminated from employment). Additional information about an employee can
 * be entered into the element, including the name of the employee, if it differs from the person name identified as a customer or contact. | Used for Character Strings, length 0 to 64.
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class EmployeeInfoType extends AbstractStructBase
{
    /**
     * The EmployeeId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier assigned to the employee.
     * @var string
     */
    public $EmployeeId;
    /**
     * The EmployeeLevel
     * Meta informations extracted from the WSDL
     * - documentation: Level in employer organization (e.g. seniority) that coveys privileges.
     * - use: optional
     * @var string
     */
    public $EmployeeLevel;
    /**
     * The EmployeeTitle
     * Meta informations extracted from the WSDL
     * - documentation: Title of employee in the employer company that conveys rank or privileges.
     * - use: optional
     * @var string
     */
    public $EmployeeTitle;
    /**
     * The EmployeeStatus
     * Meta informations extracted from the WSDL
     * - documentation: Status of employment. Refer to OpenTravel Code List Employee Status (EMP).
     * - use: optional
     * @var string
     */
    public $EmployeeStatus;
    /**
     * Constructor method for EmployeeInfoType
     * @uses EmployeeInfoType::setEmployeeId()
     * @uses EmployeeInfoType::setEmployeeLevel()
     * @uses EmployeeInfoType::setEmployeeTitle()
     * @uses EmployeeInfoType::setEmployeeStatus()
     * @param string $employeeId
     * @param string $employeeLevel
     * @param string $employeeTitle
     * @param string $employeeStatus
     */
    public function __construct($employeeId = null, $employeeLevel = null, $employeeTitle = null, $employeeStatus = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setEmployeeLevel($employeeLevel)
            ->setEmployeeTitle($employeeTitle)
            ->setEmployeeStatus($employeeStatus);
    }
    /**
     * Get EmployeeId value
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }
    /**
     * Set EmployeeId value
     * @param string $employeeId
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployeeInfoType
     */
    public function setEmployeeId($employeeId = null)
    {
        // validation for constraint: string
        if (!is_null($employeeId) && !is_string($employeeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employeeId)), __LINE__);
        }
        $this->EmployeeId = $employeeId;
        return $this;
    }
    /**
     * Get EmployeeLevel value
     * @return string|null
     */
    public function getEmployeeLevel()
    {
        return $this->EmployeeLevel;
    }
    /**
     * Set EmployeeLevel value
     * @param string $employeeLevel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployeeInfoType
     */
    public function setEmployeeLevel($employeeLevel = null)
    {
        // validation for constraint: string
        if (!is_null($employeeLevel) && !is_string($employeeLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employeeLevel)), __LINE__);
        }
        $this->EmployeeLevel = $employeeLevel;
        return $this;
    }
    /**
     * Get EmployeeTitle value
     * @return string|null
     */
    public function getEmployeeTitle()
    {
        return $this->EmployeeTitle;
    }
    /**
     * Set EmployeeTitle value
     * @param string $employeeTitle
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployeeInfoType
     */
    public function setEmployeeTitle($employeeTitle = null)
    {
        // validation for constraint: string
        if (!is_null($employeeTitle) && !is_string($employeeTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employeeTitle)), __LINE__);
        }
        $this->EmployeeTitle = $employeeTitle;
        return $this;
    }
    /**
     * Get EmployeeStatus value
     * @return string|null
     */
    public function getEmployeeStatus()
    {
        return $this->EmployeeStatus;
    }
    /**
     * Set EmployeeStatus value
     * @param string $employeeStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployeeInfoType
     */
    public function setEmployeeStatus($employeeStatus = null)
    {
        // validation for constraint: string
        if (!is_null($employeeStatus) && !is_string($employeeStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employeeStatus)), __LINE__);
        }
        $this->EmployeeStatus = $employeeStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployeeInfoType
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

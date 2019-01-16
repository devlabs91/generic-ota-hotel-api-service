<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StaffTourCodeInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides a tour code for airline staff.
 * @subpackage Structs
 */
class StaffTourCodeInfo extends AbstractStructBase
{
    /**
     * The StaffType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $StaffType;
    /**
     * The EmployeeID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier of the staff member.
     * - use: optional
     * @var string
     */
    public $EmployeeID;
    /**
     * The VendorCode
     * Meta informations extracted from the WSDL
     * - documentation: The airline to which the EmployeeID is associated.
     * - use: optional
     * @var string
     */
    public $VendorCode;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Description of the staff tour code.
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * Constructor method for StaffTourCodeInfo
     * @uses StaffTourCodeInfo::setStaffType()
     * @uses StaffTourCodeInfo::setEmployeeID()
     * @uses StaffTourCodeInfo::setVendorCode()
     * @uses StaffTourCodeInfo::setDescription()
     * @param string $staffType
     * @param string $employeeID
     * @param string $vendorCode
     * @param string $description
     */
    public function __construct($staffType = null, $employeeID = null, $vendorCode = null, $description = null)
    {
        $this
            ->setStaffType($staffType)
            ->setEmployeeID($employeeID)
            ->setVendorCode($vendorCode)
            ->setDescription($description);
    }
    /**
     * Get StaffType value
     * @return string|null
     */
    public function getStaffType()
    {
        return $this->StaffType;
    }
    /**
     * Set StaffType value
     * @param string $staffType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo
     */
    public function setStaffType($staffType = null)
    {
        // validation for constraint: string
        if (!is_null($staffType) && !is_string($staffType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($staffType)), __LINE__);
        }
        $this->StaffType = $staffType;
        return $this;
    }
    /**
     * Get EmployeeID value
     * @return string|null
     */
    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }
    /**
     * Set EmployeeID value
     * @param string $employeeID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo
     */
    public function setEmployeeID($employeeID = null)
    {
        // validation for constraint: string
        if (!is_null($employeeID) && !is_string($employeeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employeeID)), __LINE__);
        }
        $this->EmployeeID = $employeeID;
        return $this;
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo
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

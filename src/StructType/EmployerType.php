<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Company or organization that employs the customer.
 * @subpackage Structs
 */
class EmployerType extends AbstractStructBase
{
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $CompanyName;
    /**
     * The RelatedEmployer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RelatedEmployer;
    /**
     * The EmployeeInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $EmployeeInfo;
    /**
     * The InternalRefNmbr
     * Meta informations extracted from the WSDL
     * - documentation: Accounting code(s) assigned to travel for employer.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $InternalRefNmbr;
    /**
     * The TravelArranger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TravelArranger;
    /**
     * The LoyaltyProgram
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $LoyaltyProgram;
    /**
     * Constructor method for EmployerType
     * @uses EmployerType::setCompanyName()
     * @uses EmployerType::setRelatedEmployer()
     * @uses EmployerType::setEmployeeInfo()
     * @uses EmployerType::setInternalRefNmbr()
     * @uses EmployerType::setTravelArranger()
     * @uses EmployerType::setLoyaltyProgram()
     * @param mixed $companyName
     * @param mixed[] $relatedEmployer
     * @param mixed[] $employeeInfo
     * @param mixed[] $internalRefNmbr
     * @param mixed[] $travelArranger
     * @param mixed[] $loyaltyProgram
     */
    public function __construct($companyName = null, array $relatedEmployer = array(), array $employeeInfo = array(), array $internalRefNmbr = array(), array $travelArranger = array(), array $loyaltyProgram = array())
    {
        $this
            ->setCompanyName($companyName)
            ->setRelatedEmployer($relatedEmployer)
            ->setEmployeeInfo($employeeInfo)
            ->setInternalRefNmbr($internalRefNmbr)
            ->setTravelArranger($travelArranger)
            ->setLoyaltyProgram($loyaltyProgram);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get RelatedEmployer value
     * @return mixed[]|null
     */
    public function getRelatedEmployer()
    {
        return $this->RelatedEmployer;
    }
    /**
     * Set RelatedEmployer value
     * @throws \InvalidArgumentException
     * @param mixed[] $relatedEmployer
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function setRelatedEmployer(array $relatedEmployer = array())
    {
        foreach ($relatedEmployer as $employerTypeRelatedEmployerItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RelatedEmployer property can only contain items of anyType, "%s" given', is_object($employerTypeRelatedEmployerItem) ? get_class($employerTypeRelatedEmployerItem) : gettype($employerTypeRelatedEmployerItem)), __LINE__);
            }
        }
        $this->RelatedEmployer = $relatedEmployer;
        return $this;
    }
    /**
     * Add item to RelatedEmployer value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function addToRelatedEmployer($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RelatedEmployer property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RelatedEmployer[] = $item;
        return $this;
    }
    /**
     * Get EmployeeInfo value
     * @return mixed[]|null
     */
    public function getEmployeeInfo()
    {
        return $this->EmployeeInfo;
    }
    /**
     * Set EmployeeInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $employeeInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function setEmployeeInfo(array $employeeInfo = array())
    {
        foreach ($employeeInfo as $employerTypeEmployeeInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The EmployeeInfo property can only contain items of anyType, "%s" given', is_object($employerTypeEmployeeInfoItem) ? get_class($employerTypeEmployeeInfoItem) : gettype($employerTypeEmployeeInfoItem)), __LINE__);
            }
        }
        $this->EmployeeInfo = $employeeInfo;
        return $this;
    }
    /**
     * Add item to EmployeeInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function addToEmployeeInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The EmployeeInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmployeeInfo[] = $item;
        return $this;
    }
    /**
     * Get InternalRefNmbr value
     * @return mixed[]|null
     */
    public function getInternalRefNmbr()
    {
        return $this->InternalRefNmbr;
    }
    /**
     * Set InternalRefNmbr value
     * @throws \InvalidArgumentException
     * @param mixed[] $internalRefNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function setInternalRefNmbr(array $internalRefNmbr = array())
    {
        foreach ($internalRefNmbr as $employerTypeInternalRefNmbrItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The InternalRefNmbr property can only contain items of anyType, "%s" given', is_object($employerTypeInternalRefNmbrItem) ? get_class($employerTypeInternalRefNmbrItem) : gettype($employerTypeInternalRefNmbrItem)), __LINE__);
            }
        }
        $this->InternalRefNmbr = $internalRefNmbr;
        return $this;
    }
    /**
     * Add item to InternalRefNmbr value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function addToInternalRefNmbr($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The InternalRefNmbr property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InternalRefNmbr[] = $item;
        return $this;
    }
    /**
     * Get TravelArranger value
     * @return mixed[]|null
     */
    public function getTravelArranger()
    {
        return $this->TravelArranger;
    }
    /**
     * Set TravelArranger value
     * @throws \InvalidArgumentException
     * @param mixed[] $travelArranger
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function setTravelArranger(array $travelArranger = array())
    {
        foreach ($travelArranger as $employerTypeTravelArrangerItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TravelArranger property can only contain items of anyType, "%s" given', is_object($employerTypeTravelArrangerItem) ? get_class($employerTypeTravelArrangerItem) : gettype($employerTypeTravelArrangerItem)), __LINE__);
            }
        }
        $this->TravelArranger = $travelArranger;
        return $this;
    }
    /**
     * Add item to TravelArranger value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function addToTravelArranger($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TravelArranger property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelArranger[] = $item;
        return $this;
    }
    /**
     * Get LoyaltyProgram value
     * @return mixed[]|null
     */
    public function getLoyaltyProgram()
    {
        return $this->LoyaltyProgram;
    }
    /**
     * Set LoyaltyProgram value
     * @throws \InvalidArgumentException
     * @param mixed[] $loyaltyProgram
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function setLoyaltyProgram(array $loyaltyProgram = array())
    {
        foreach ($loyaltyProgram as $employerTypeLoyaltyProgramItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The LoyaltyProgram property can only contain items of anyType, "%s" given', is_object($employerTypeLoyaltyProgramItem) ? get_class($employerTypeLoyaltyProgramItem) : gettype($employerTypeLoyaltyProgramItem)), __LINE__);
            }
        }
        $this->LoyaltyProgram = $loyaltyProgram;
        return $this;
    }
    /**
     * Add item to LoyaltyProgram value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
     */
    public function addToLoyaltyProgram($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The LoyaltyProgram property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LoyaltyProgram[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmployerType
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

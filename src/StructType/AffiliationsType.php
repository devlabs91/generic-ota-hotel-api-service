<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AffiliationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines an entity that provides travel services or benefits to a customer or company. | Allows for control of the sharing of affiliation data between parties.
 * @subpackage Structs
 */
class AffiliationsType extends AbstractStructBase
{
    /**
     * The Organization
     * Meta informations extracted from the WSDL
     * - documentation: Detailed information for a membership organization that has travel benefits, programs or discounts.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Organization;
    /**
     * The Employer
     * Meta informations extracted from the WSDL
     * - documentation: Employer information associated to this affiliation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Employer;
    /**
     * The TravelArranger
     * Meta informations extracted from the WSDL
     * - documentation: Information on the organization responsible for arranging travel.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TravelArranger;
    /**
     * The TravelClub
     * Meta informations extracted from the WSDL
     * - documentation: A club that offers special privileges and related services for this affiliation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TravelClub;
    /**
     * The Insurance
     * Meta informations extracted from the WSDL
     * - documentation: Travel insurance associated to this affiliation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Insurance;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for AffiliationsType
     * @uses AffiliationsType::setOrganization()
     * @uses AffiliationsType::setEmployer()
     * @uses AffiliationsType::setTravelArranger()
     * @uses AffiliationsType::setTravelClub()
     * @uses AffiliationsType::setInsurance()
     * @uses AffiliationsType::setTPA_Extensions()
     * @param mixed[] $organization
     * @param mixed[] $employer
     * @param mixed[] $travelArranger
     * @param mixed[] $travelClub
     * @param mixed[] $insurance
     * @param mixed $tPA_Extensions
     */
    public function __construct(array $organization = array(), array $employer = array(), array $travelArranger = array(), array $travelClub = array(), array $insurance = array(), $tPA_Extensions = null)
    {
        $this
            ->setOrganization($organization)
            ->setEmployer($employer)
            ->setTravelArranger($travelArranger)
            ->setTravelClub($travelClub)
            ->setInsurance($insurance)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get Organization value
     * @return mixed[]|null
     */
    public function getOrganization()
    {
        return $this->Organization;
    }
    /**
     * Set Organization value
     * @throws \InvalidArgumentException
     * @param mixed[] $organization
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
     */
    public function setOrganization(array $organization = array())
    {
        foreach ($organization as $affiliationsTypeOrganizationItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Organization property can only contain items of anyType, "%s" given', is_object($affiliationsTypeOrganizationItem) ? get_class($affiliationsTypeOrganizationItem) : gettype($affiliationsTypeOrganizationItem)), __LINE__);
            }
        }
        $this->Organization = $organization;
        return $this;
    }
    /**
     * Add item to Organization value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
     */
    public function addToOrganization($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Organization property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Organization[] = $item;
        return $this;
    }
    /**
     * Get Employer value
     * @return mixed[]|null
     */
    public function getEmployer()
    {
        return $this->Employer;
    }
    /**
     * Set Employer value
     * @throws \InvalidArgumentException
     * @param mixed[] $employer
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
     */
    public function setEmployer(array $employer = array())
    {
        foreach ($employer as $affiliationsTypeEmployerItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Employer property can only contain items of anyType, "%s" given', is_object($affiliationsTypeEmployerItem) ? get_class($affiliationsTypeEmployerItem) : gettype($affiliationsTypeEmployerItem)), __LINE__);
            }
        }
        $this->Employer = $employer;
        return $this;
    }
    /**
     * Add item to Employer value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
     */
    public function addToEmployer($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Employer property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Employer[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
     */
    public function setTravelArranger(array $travelArranger = array())
    {
        foreach ($travelArranger as $affiliationsTypeTravelArrangerItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TravelArranger property can only contain items of anyType, "%s" given', is_object($affiliationsTypeTravelArrangerItem) ? get_class($affiliationsTypeTravelArrangerItem) : gettype($affiliationsTypeTravelArrangerItem)), __LINE__);
            }
        }
        $this->TravelArranger = $travelArranger;
        return $this;
    }
    /**
     * Add item to TravelArranger value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
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
     * Get TravelClub value
     * @return mixed[]|null
     */
    public function getTravelClub()
    {
        return $this->TravelClub;
    }
    /**
     * Set TravelClub value
     * @throws \InvalidArgumentException
     * @param mixed[] $travelClub
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
     */
    public function setTravelClub(array $travelClub = array())
    {
        foreach ($travelClub as $affiliationsTypeTravelClubItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TravelClub property can only contain items of anyType, "%s" given', is_object($affiliationsTypeTravelClubItem) ? get_class($affiliationsTypeTravelClubItem) : gettype($affiliationsTypeTravelClubItem)), __LINE__);
            }
        }
        $this->TravelClub = $travelClub;
        return $this;
    }
    /**
     * Add item to TravelClub value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
     */
    public function addToTravelClub($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TravelClub property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelClub[] = $item;
        return $this;
    }
    /**
     * Get Insurance value
     * @return mixed[]|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @throws \InvalidArgumentException
     * @param mixed[] $insurance
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
     */
    public function setInsurance(array $insurance = array())
    {
        foreach ($insurance as $affiliationsTypeInsuranceItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Insurance property can only contain items of anyType, "%s" given', is_object($affiliationsTypeInsuranceItem) ? get_class($affiliationsTypeInsuranceItem) : gettype($affiliationsTypeInsuranceItem)), __LINE__);
            }
        }
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Add item to Insurance value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
     */
    public function addToInsurance($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Insurance property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Insurance[] = $item;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationsType
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

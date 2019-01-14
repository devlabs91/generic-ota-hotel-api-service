<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganizationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Membership organization that has travel benefits, programs, or discounts.
 * @subpackage Structs
 */
class OrganizationType extends AbstractStructBase
{
    /**
     * The OrgMemberName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OrgMemberName
     */
    public $OrgMemberName;
    /**
     * The OrgName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $OrgName;
    /**
     * The RelatedOrgName
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RelatedOrgName;
    /**
     * The TravelArranger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TravelArranger;
    /**
     * Constructor method for OrganizationType
     * @uses OrganizationType::setOrgMemberName()
     * @uses OrganizationType::setOrgName()
     * @uses OrganizationType::setRelatedOrgName()
     * @uses OrganizationType::setTravelArranger()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OrgMemberName $orgMemberName
     * @param mixed $orgName
     * @param mixed[] $relatedOrgName
     * @param mixed[] $travelArranger
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\OrgMemberName $orgMemberName = null, $orgName = null, array $relatedOrgName = array(), array $travelArranger = array())
    {
        $this
            ->setOrgMemberName($orgMemberName)
            ->setOrgName($orgName)
            ->setRelatedOrgName($relatedOrgName)
            ->setTravelArranger($travelArranger);
    }
    /**
     * Get OrgMemberName value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrgMemberName|null
     */
    public function getOrgMemberName()
    {
        return $this->OrgMemberName;
    }
    /**
     * Set OrgMemberName value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OrgMemberName $orgMemberName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrganizationType
     */
    public function setOrgMemberName(\Devlabs91\GenericOtaHotelApiService\StructType\OrgMemberName $orgMemberName = null)
    {
        $this->OrgMemberName = $orgMemberName;
        return $this;
    }
    /**
     * Get OrgName value
     * @return mixed|null
     */
    public function getOrgName()
    {
        return $this->OrgName;
    }
    /**
     * Set OrgName value
     * @param mixed $orgName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrganizationType
     */
    public function setOrgName($orgName = null)
    {
        $this->OrgName = $orgName;
        return $this;
    }
    /**
     * Get RelatedOrgName value
     * @return mixed[]|null
     */
    public function getRelatedOrgName()
    {
        return $this->RelatedOrgName;
    }
    /**
     * Set RelatedOrgName value
     * @throws \InvalidArgumentException
     * @param mixed[] $relatedOrgName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrganizationType
     */
    public function setRelatedOrgName(array $relatedOrgName = array())
    {
        foreach ($relatedOrgName as $organizationTypeRelatedOrgNameItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RelatedOrgName property can only contain items of anyType, "%s" given', is_object($organizationTypeRelatedOrgNameItem) ? get_class($organizationTypeRelatedOrgNameItem) : gettype($organizationTypeRelatedOrgNameItem)), __LINE__);
            }
        }
        $this->RelatedOrgName = $relatedOrgName;
        return $this;
    }
    /**
     * Add item to RelatedOrgName value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrganizationType
     */
    public function addToRelatedOrgName($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RelatedOrgName property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RelatedOrgName[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrganizationType
     */
    public function setTravelArranger(array $travelArranger = array())
    {
        foreach ($travelArranger as $organizationTypeTravelArrangerItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TravelArranger property can only contain items of anyType, "%s" given', is_object($organizationTypeTravelArrangerItem) ? get_class($organizationTypeTravelArrangerItem) : gettype($organizationTypeTravelArrangerItem)), __LINE__);
            }
        }
        $this->TravelArranger = $travelArranger;
        return $this;
    }
    /**
     * Add item to TravelArranger value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrganizationType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrganizationType
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

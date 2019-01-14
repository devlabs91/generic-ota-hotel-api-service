<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MembershipType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's
 * SelectedMembershipRPHs collection.
 * @subpackage Structs
 */
class MembershipType extends AbstractStructBase
{
    /**
     * The Membership
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Membership[]
     */
    public $Membership;
    /**
     * Constructor method for MembershipType
     * @uses MembershipType::setMembership()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Membership[] $membership
     */
    public function __construct(array $membership = array())
    {
        $this
            ->setMembership($membership);
    }
    /**
     * Get Membership value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Membership[]|null
     */
    public function getMembership()
    {
        return $this->Membership;
    }
    /**
     * Set Membership value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Membership[] $membership
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MembershipType
     */
    public function setMembership(array $membership = array())
    {
        foreach ($membership as $membershipTypeMembershipItem) {
            // validation for constraint: itemType
            if (!$membershipTypeMembershipItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Membership) {
                throw new \InvalidArgumentException(sprintf('The Membership property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Membership, "%s" given', is_object($membershipTypeMembershipItem) ? get_class($membershipTypeMembershipItem) : gettype($membershipTypeMembershipItem)), __LINE__);
            }
        }
        $this->Membership = $membership;
        return $this;
    }
    /**
     * Add item to Membership value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Membership $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MembershipType
     */
    public function addToMembership(\Devlabs91\GenericOtaHotelApiService\StructType\Membership $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Membership) {
            throw new \InvalidArgumentException(sprintf('The Membership property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Membership, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Membership[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MembershipType
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

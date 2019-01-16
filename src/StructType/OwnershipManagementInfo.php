<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnershipManagementInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides details of the ownership or management.
 * @subpackage Structs
 */
class OwnershipManagementInfo extends ContactInfoType
{
    /**
     * The RelationshipTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the relationship of the contact or company, contained in the Contact element, to the property. Refer to OpenTravel Code List Relationship (REL).
     * - use: optional
     * @var string
     */
    public $RelationshipTypeCode;
    /**
     * Constructor method for OwnershipManagementInfo
     * @uses OwnershipManagementInfo::setRelationshipTypeCode()
     * @param string $relationshipTypeCode
     */
    public function __construct($relationshipTypeCode = null)
    {
        $this
            ->setRelationshipTypeCode($relationshipTypeCode);
    }
    /**
     * Get RelationshipTypeCode value
     * @return string|null
     */
    public function getRelationshipTypeCode()
    {
        return $this->RelationshipTypeCode;
    }
    /**
     * Set RelationshipTypeCode value
     * @param string $relationshipTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo
     */
    public function setRelationshipTypeCode($relationshipTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($relationshipTypeCode) && !is_string($relationshipTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relationshipTypeCode)), __LINE__);
        }
        $this->RelationshipTypeCode = $relationshipTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo
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

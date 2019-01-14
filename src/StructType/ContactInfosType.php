<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactInfosType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of ContactInfo elements that provides detailed contact information.
 * @subpackage Structs
 */
class ContactInfosType extends AbstractStructBase
{
    /**
     * The ContactInfo
     * Meta informations extracted from the WSDL
     * - documentation: Used to define specific contact information such as phone and address.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $ContactInfo;
    /**
     * Constructor method for ContactInfosType
     * @uses ContactInfosType::setContactInfo()
     * @param mixed[] $contactInfo
     */
    public function __construct(array $contactInfo = array())
    {
        $this
            ->setContactInfo($contactInfo);
    }
    /**
     * Get ContactInfo value
     * @return mixed[]|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }
    /**
     * Set ContactInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $contactInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfosType
     */
    public function setContactInfo(array $contactInfo = array())
    {
        foreach ($contactInfo as $contactInfosTypeContactInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ContactInfo property can only contain items of anyType, "%s" given', is_object($contactInfosTypeContactInfoItem) ? get_class($contactInfosTypeContactInfoItem) : gettype($contactInfosTypeContactInfoItem)), __LINE__);
            }
        }
        $this->ContactInfo = $contactInfo;
        return $this;
    }
    /**
     * Add item to ContactInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfosType
     */
    public function addToContactInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ContactInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContactInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfosType
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

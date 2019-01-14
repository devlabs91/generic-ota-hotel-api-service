<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides detailed name information.
 * @subpackage Structs
 */
class ContactsType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Name;
    /**
     * Constructor method for ContactsType
     * @uses ContactsType::setName()
     * @param string[] $name
     */
    public function __construct(array $name = array())
    {
        $this
            ->setName($name);
    }
    /**
     * Get Name value
     * @return string[]|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Name::valueIsValid()
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Name::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactsType
     */
    public function setName(array $name = array())
    {
        $invalidValues = array();
        foreach ($name as $contactsTypeNameItem) {
            if (!\Devlabs91\GenericOtaHotelApiService\EnumType\Name::valueIsValid($contactsTypeNameItem)) {
                $invalidValues[] = var_export($contactsTypeNameItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Devlabs91\GenericOtaHotelApiService\EnumType\Name::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Add item to Name value
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Name::valueIsValid()
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\Name::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactsType
     */
    public function addToName($item)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\GenericOtaHotelApiService\EnumType\Name::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Devlabs91\GenericOtaHotelApiService\EnumType\Name::getValidValues())), __LINE__);
        }
        $this->Name[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactsType
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

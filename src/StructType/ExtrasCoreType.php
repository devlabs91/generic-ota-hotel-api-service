<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtrasCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes an optional service which is not included in the standard package but may be booked in addition.
 * @subpackage Structs
 */
class ExtrasCoreType extends AbstractStructBase
{
    /**
     * The SubCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SubCategory[]
     */
    public $SubCategory;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: (Reference Place Holder) - an index code to identify an instance in a collection of like items.. For example, used to assign individual passengers or clients to particular itinerary items.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Code to uniquely identify an extra.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: A one to three character code denoting the type of an Extra, for example 'C' for car hire, 'SKI' for Ski extras. Allocated by the provider.
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: The quantity of an extra being booked. A value of zero may be used to remove an automatic or previously selected extra.
     * - use: optional
     * @var string
     */
    public $Quantity;
    /**
     * The GroupCode
     * Meta informations extracted from the WSDL
     * - documentation: A code which links two or more Extras together, enabling a rule to be applied to all group members e.g. only one of the group may be booked, or any combination.
     * - use: optional
     * @var string
     */
    public $GroupCode;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: The name of an extra being.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The ListOfInventoryItemRPH
     * Meta informations extracted from the WSDL
     * - documentation: One or more pointers to the Inventory Item(s) with which an extra may be booked.
     * - use: optional
     * @var string
     */
    public $ListOfInventoryItemRPH;
    /**
     * The ListofRoomRPH
     * Meta informations extracted from the WSDL
     * - documentation: One or more pointers to the room(s) with which an extra may be booked.
     * - use: optional
     * @var string
     */
    public $ListofRoomRPH;
    /**
     * Constructor method for ExtrasCoreType
     * @uses ExtrasCoreType::setSubCategory()
     * @uses ExtrasCoreType::setRPH()
     * @uses ExtrasCoreType::setCode()
     * @uses ExtrasCoreType::setType()
     * @uses ExtrasCoreType::setQuantity()
     * @uses ExtrasCoreType::setGroupCode()
     * @uses ExtrasCoreType::setName()
     * @uses ExtrasCoreType::setListOfInventoryItemRPH()
     * @uses ExtrasCoreType::setListofRoomRPH()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SubCategory[] $subCategory
     * @param string $rPH
     * @param string $code
     * @param string $type
     * @param string $quantity
     * @param string $groupCode
     * @param string $name
     * @param string $listOfInventoryItemRPH
     * @param string $listofRoomRPH
     */
    public function __construct(array $subCategory = array(), $rPH = null, $code = null, $type = null, $quantity = null, $groupCode = null, $name = null, $listOfInventoryItemRPH = null, $listofRoomRPH = null)
    {
        $this
            ->setSubCategory($subCategory)
            ->setRPH($rPH)
            ->setCode($code)
            ->setType($type)
            ->setQuantity($quantity)
            ->setGroupCode($groupCode)
            ->setName($name)
            ->setListOfInventoryItemRPH($listOfInventoryItemRPH)
            ->setListofRoomRPH($listofRoomRPH);
    }
    /**
     * Get SubCategory value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SubCategory[]|null
     */
    public function getSubCategory()
    {
        return $this->SubCategory;
    }
    /**
     * Set SubCategory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SubCategory[] $subCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
     */
    public function setSubCategory(array $subCategory = array())
    {
        foreach ($subCategory as $extrasCoreTypeSubCategoryItem) {
            // validation for constraint: itemType
            if (!$extrasCoreTypeSubCategoryItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SubCategory) {
                throw new \InvalidArgumentException(sprintf('The SubCategory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SubCategory, "%s" given', is_object($extrasCoreTypeSubCategoryItem) ? get_class($extrasCoreTypeSubCategoryItem) : gettype($extrasCoreTypeSubCategoryItem)), __LINE__);
            }
        }
        $this->SubCategory = $subCategory;
        return $this;
    }
    /**
     * Add item to SubCategory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SubCategory $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
     */
    public function addToSubCategory(\Devlabs91\GenericOtaHotelApiService\StructType\SubCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SubCategory) {
            throw new \InvalidArgumentException(sprintf('The SubCategory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SubCategory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SubCategory[] = $item;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param string $quantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get GroupCode value
     * @return string|null
     */
    public function getGroupCode()
    {
        return $this->GroupCode;
    }
    /**
     * Set GroupCode value
     * @param string $groupCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
     */
    public function setGroupCode($groupCode = null)
    {
        // validation for constraint: string
        if (!is_null($groupCode) && !is_string($groupCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupCode)), __LINE__);
        }
        $this->GroupCode = $groupCode;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ListOfInventoryItemRPH value
     * @return string|null
     */
    public function getListOfInventoryItemRPH()
    {
        return $this->ListOfInventoryItemRPH;
    }
    /**
     * Set ListOfInventoryItemRPH value
     * @param string $listOfInventoryItemRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
     */
    public function setListOfInventoryItemRPH($listOfInventoryItemRPH = null)
    {
        // validation for constraint: string
        if (!is_null($listOfInventoryItemRPH) && !is_string($listOfInventoryItemRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfInventoryItemRPH)), __LINE__);
        }
        $this->ListOfInventoryItemRPH = $listOfInventoryItemRPH;
        return $this;
    }
    /**
     * Get ListofRoomRPH value
     * @return string|null
     */
    public function getListofRoomRPH()
    {
        return $this->ListofRoomRPH;
    }
    /**
     * Set ListofRoomRPH value
     * @param string $listofRoomRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
     */
    public function setListofRoomRPH($listofRoomRPH = null)
    {
        // validation for constraint: string
        if (!is_null($listofRoomRPH) && !is_string($listofRoomRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listofRoomRPH)), __LINE__);
        }
        $this->ListofRoomRPH = $listofRoomRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasCoreType
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

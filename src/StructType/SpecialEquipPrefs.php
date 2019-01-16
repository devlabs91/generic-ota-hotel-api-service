<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialEquipPrefs StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child seats, etc. | Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child
 * seats, etc.
 * @subpackage Structs
 */
class SpecialEquipPrefs extends AbstractStructBase
{
    /**
     * The SpecialEquipPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 15
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPref[]
     */
    public $SpecialEquipPref;
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - documentation: Used when the customer was previously quoted a rate for the equipment in an availability search response.
     * - minOccurs: 0
     * @var mixed
     */
    public $Charge;
    /**
     * Constructor method for SpecialEquipPrefs
     * @uses SpecialEquipPrefs::setSpecialEquipPref()
     * @uses SpecialEquipPrefs::setCharge()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPref[] $specialEquipPref
     * @param mixed $charge
     */
    public function __construct(array $specialEquipPref = array(), $charge = null)
    {
        $this
            ->setSpecialEquipPref($specialEquipPref)
            ->setCharge($charge);
    }
    /**
     * Get SpecialEquipPref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPref[]|null
     */
    public function getSpecialEquipPref()
    {
        return $this->SpecialEquipPref;
    }
    /**
     * Set SpecialEquipPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPref[] $specialEquipPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPrefs
     */
    public function setSpecialEquipPref(array $specialEquipPref = array())
    {
        foreach ($specialEquipPref as $specialEquipPrefsSpecialEquipPrefItem) {
            // validation for constraint: itemType
            if (!$specialEquipPrefsSpecialEquipPrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPref) {
                throw new \InvalidArgumentException(sprintf('The SpecialEquipPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPref, "%s" given', is_object($specialEquipPrefsSpecialEquipPrefItem) ? get_class($specialEquipPrefsSpecialEquipPrefItem) : gettype($specialEquipPrefsSpecialEquipPrefItem)), __LINE__);
            }
        }
        $this->SpecialEquipPref = $specialEquipPref;
        return $this;
    }
    /**
     * Add item to SpecialEquipPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPrefs
     */
    public function addToSpecialEquipPref(\Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPref) {
            throw new \InvalidArgumentException(sprintf('The SpecialEquipPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialEquipPref[] = $item;
        return $this;
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPrefs
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPrefs
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

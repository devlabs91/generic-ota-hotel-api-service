<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorPrefs StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of vendor preferences.
 * @subpackage Structs
 */
class VendorPrefs extends AbstractStructBase
{
    /**
     * The VendorPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 20
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref[]
     */
    public $VendorPref;
    /**
     * The ParticipationLevelCode
     * Meta informations extracted from the WSDL
     * - documentation: To specify vendors with a certain level of participation in a system. Refer to OpenTravel Code List Participation Level (PLC).
     * - use: optional
     * @var string
     */
    public $ParticipationLevelCode;
    /**
     * The LocationCategory
     * Meta informations extracted from the WSDL
     * - documentation: The type of location being requested. Refer to OpenTravel Code List Vehicle Where at Facility (VWF).
     * - use: optional
     * @var string
     */
    public $LocationCategory;
    /**
     * Constructor method for VendorPrefs
     * @uses VendorPrefs::setVendorPref()
     * @uses VendorPrefs::setParticipationLevelCode()
     * @uses VendorPrefs::setLocationCategory()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref[] $vendorPref
     * @param string $participationLevelCode
     * @param string $locationCategory
     */
    public function __construct(array $vendorPref = array(), $participationLevelCode = null, $locationCategory = null)
    {
        $this
            ->setVendorPref($vendorPref)
            ->setParticipationLevelCode($participationLevelCode)
            ->setLocationCategory($locationCategory);
    }
    /**
     * Get VendorPref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref[]|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref[] $vendorPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs
     */
    public function setVendorPref(array $vendorPref = array())
    {
        foreach ($vendorPref as $vendorPrefsVendorPrefItem) {
            // validation for constraint: itemType
            if (!$vendorPrefsVendorPrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref) {
                throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref, "%s" given', is_object($vendorPrefsVendorPrefItem) ? get_class($vendorPrefsVendorPrefItem) : gettype($vendorPrefsVendorPrefItem)), __LINE__);
            }
        }
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Add item to VendorPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs
     */
    public function addToVendorPref(\Devlabs91\GenericOtaHotelApiService\StructType\VendorPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref) {
            throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VendorPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VendorPref[] = $item;
        return $this;
    }
    /**
     * Get ParticipationLevelCode value
     * @return string|null
     */
    public function getParticipationLevelCode()
    {
        return $this->ParticipationLevelCode;
    }
    /**
     * Set ParticipationLevelCode value
     * @param string $participationLevelCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs
     */
    public function setParticipationLevelCode($participationLevelCode = null)
    {
        // validation for constraint: string
        if (!is_null($participationLevelCode) && !is_string($participationLevelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($participationLevelCode)), __LINE__);
        }
        $this->ParticipationLevelCode = $participationLevelCode;
        return $this;
    }
    /**
     * Get LocationCategory value
     * @return string|null
     */
    public function getLocationCategory()
    {
        return $this->LocationCategory;
    }
    /**
     * Set LocationCategory value
     * @param string $locationCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs
     */
    public function setLocationCategory($locationCategory = null)
    {
        // validation for constraint: string
        if (!is_null($locationCategory) && !is_string($locationCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCategory)), __LINE__);
        }
        $this->LocationCategory = $locationCategory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs
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

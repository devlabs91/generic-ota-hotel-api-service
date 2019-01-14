<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectedPackages StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the selected packages.
 * @subpackage Structs
 */
class SelectedPackages extends AbstractStructBase
{
    /**
     * The SelectedPackage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage[]
     */
    public $SelectedPackage;
    /**
     * Constructor method for SelectedPackages
     * @uses SelectedPackages::setSelectedPackage()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage[] $selectedPackage
     */
    public function __construct(array $selectedPackage = array())
    {
        $this
            ->setSelectedPackage($selectedPackage);
    }
    /**
     * Get SelectedPackage value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage[]|null
     */
    public function getSelectedPackage()
    {
        return $this->SelectedPackage;
    }
    /**
     * Set SelectedPackage value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage[] $selectedPackage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackages
     */
    public function setSelectedPackage(array $selectedPackage = array())
    {
        foreach ($selectedPackage as $selectedPackagesSelectedPackageItem) {
            // validation for constraint: itemType
            if (!$selectedPackagesSelectedPackageItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage) {
                throw new \InvalidArgumentException(sprintf('The SelectedPackage property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage, "%s" given', is_object($selectedPackagesSelectedPackageItem) ? get_class($selectedPackagesSelectedPackageItem) : gettype($selectedPackagesSelectedPackageItem)), __LINE__);
            }
        }
        $this->SelectedPackage = $selectedPackage;
        return $this;
    }
    /**
     * Add item to SelectedPackage value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackages
     */
    public function addToSelectedPackage(\Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage) {
            throw new \InvalidArgumentException(sprintf('The SelectedPackage property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectedPackage[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedPackages
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehVendorAvails StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of vendors for which vehicle availability is available.
 * @subpackage Structs
 */
class VehVendorAvails extends AbstractStructBase
{
    /**
     * The VehVendorAvail
     * Meta informations extracted from the WSDL
     * - documentation: Information on the availability of rental vehicles for one specific vendor.
     * - maxOccurs: 20
     * @var mixed[]
     */
    public $VehVendorAvail;
    /**
     * Constructor method for VehVendorAvails
     * @uses VehVendorAvails::setVehVendorAvail()
     * @param mixed[] $vehVendorAvail
     */
    public function __construct(array $vehVendorAvail = array())
    {
        $this
            ->setVehVendorAvail($vehVendorAvail);
    }
    /**
     * Get VehVendorAvail value
     * @return mixed[]|null
     */
    public function getVehVendorAvail()
    {
        return $this->VehVendorAvail;
    }
    /**
     * Set VehVendorAvail value
     * @throws \InvalidArgumentException
     * @param mixed[] $vehVendorAvail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehVendorAvails
     */
    public function setVehVendorAvail(array $vehVendorAvail = array())
    {
        foreach ($vehVendorAvail as $vehVendorAvailsVehVendorAvailItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VehVendorAvail property can only contain items of anyType, "%s" given', is_object($vehVendorAvailsVehVendorAvailItem) ? get_class($vehVendorAvailsVehVendorAvailItem) : gettype($vehVendorAvailsVehVendorAvailItem)), __LINE__);
            }
        }
        $this->VehVendorAvail = $vehVendorAvail;
        return $this;
    }
    /**
     * Add item to VehVendorAvail value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehVendorAvails
     */
    public function addToVehVendorAvail($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VehVendorAvail property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehVendorAvail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehVendorAvails
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

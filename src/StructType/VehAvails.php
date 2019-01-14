<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehAvails StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of vehicles along with their availability and associated rate information.
 * @subpackage Structs
 */
class VehAvails extends AbstractStructBase
{
    /**
     * The VehAvail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail[]
     */
    public $VehAvail;
    /**
     * Constructor method for VehAvails
     * @uses VehAvails::setVehAvail()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail[] $vehAvail
     */
    public function __construct(array $vehAvail = array())
    {
        $this
            ->setVehAvail($vehAvail);
    }
    /**
     * Get VehAvail value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail[]|null
     */
    public function getVehAvail()
    {
        return $this->VehAvail;
    }
    /**
     * Set VehAvail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail[] $vehAvail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails
     */
    public function setVehAvail(array $vehAvail = array())
    {
        foreach ($vehAvail as $vehAvailsVehAvailItem) {
            // validation for constraint: itemType
            if (!$vehAvailsVehAvailItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail) {
                throw new \InvalidArgumentException(sprintf('The VehAvail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail, "%s" given', is_object($vehAvailsVehAvailItem) ? get_class($vehAvailsVehAvailItem) : gettype($vehAvailsVehAvailItem)), __LINE__);
            }
        }
        $this->VehAvail = $vehAvail;
        return $this;
    }
    /**
     * Add item to VehAvail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails
     */
    public function addToVehAvail(\Devlabs91\GenericOtaHotelApiService\StructType\VehAvail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail) {
            throw new \InvalidArgumentException(sprintf('The VehAvail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehAvail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails
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

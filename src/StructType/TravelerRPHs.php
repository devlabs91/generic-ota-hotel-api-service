<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerRPHs StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container to relate individual travelers to an inventory or chargeable item.
 * @subpackage Structs
 */
class TravelerRPHs extends AbstractStructBase
{
    /**
     * The TravelerRPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPH[]
     */
    public $TravelerRPH;
    /**
     * Constructor method for TravelerRPHs
     * @uses TravelerRPHs::setTravelerRPH()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPH[] $travelerRPH
     */
    public function __construct(array $travelerRPH = array())
    {
        $this
            ->setTravelerRPH($travelerRPH);
    }
    /**
     * Get TravelerRPH value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPH[]|null
     */
    public function getTravelerRPH()
    {
        return $this->TravelerRPH;
    }
    /**
     * Set TravelerRPH value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPH[] $travelerRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPHs
     */
    public function setTravelerRPH(array $travelerRPH = array())
    {
        foreach ($travelerRPH as $travelerRPHsTravelerRPHItem) {
            // validation for constraint: itemType
            if (!$travelerRPHsTravelerRPHItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPH) {
                throw new \InvalidArgumentException(sprintf('The TravelerRPH property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPH, "%s" given', is_object($travelerRPHsTravelerRPHItem) ? get_class($travelerRPHsTravelerRPHItem) : gettype($travelerRPHsTravelerRPHItem)), __LINE__);
            }
        }
        $this->TravelerRPH = $travelerRPH;
        return $this;
    }
    /**
     * Add item to TravelerRPH value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPH $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPHs
     */
    public function addToTravelerRPH(\Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPH $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPH) {
            throw new \InvalidArgumentException(sprintf('The TravelerRPH property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPH, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelerRPH[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRPHs
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

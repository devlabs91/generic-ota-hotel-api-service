<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceRPH StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a reference placeholder used as an index for a service to be associated with this stay
 * @subpackage Structs
 */
class ServiceRPH extends ReferencePlaceHolderType
{
    /**
     * The IsPerRoom
     * Meta informations extracted from the WSDL
     * - documentation: Defines whether this is for each room of a RoomStay
     * - use: optional
     * @var bool
     */
    public $IsPerRoom;
    /**
     * Constructor method for ServiceRPH
     * @uses ServiceRPH::setIsPerRoom()
     * @param bool $isPerRoom
     */
    public function __construct($isPerRoom = null)
    {
        $this
            ->setIsPerRoom($isPerRoom);
    }
    /**
     * Get IsPerRoom value
     * @return bool|null
     */
    public function getIsPerRoom()
    {
        return $this->IsPerRoom;
    }
    /**
     * Set IsPerRoom value
     * @param bool $isPerRoom
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH
     */
    public function setIsPerRoom($isPerRoom = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPerRoom) && !is_bool($isPerRoom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPerRoom)), __LINE__);
        }
        $this->IsPerRoom = $isPerRoom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRPH
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

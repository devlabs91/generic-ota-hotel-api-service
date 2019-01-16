<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes a customer request for a service or facility which is not directly bookable in the supplier's system and may have to be passed on to the ultimate provider of the service e.g. flowers in room; low floor room etc. | Used for
 * Character Strings, length 1 to 32.
 * - maxLength: 32
 * - minLength: 1
 * @subpackage Structs
 */
class ServiceRequestType extends AbstractStructBase
{
    /**
     * The TravelSector
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Travel Sector (TVS).
     * - use: optional
     * @var string
     */
    public $TravelSector;
    /**
     * The InventoryItemRPH
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the inventory item to which this request relates.
     * - use: optional
     * @var string
     */
    public $InventoryItemRPH;
    /**
     * Constructor method for ServiceRequestType
     * @uses ServiceRequestType::setTravelSector()
     * @uses ServiceRequestType::setInventoryItemRPH()
     * @param string $travelSector
     * @param string $inventoryItemRPH
     */
    public function __construct($travelSector = null, $inventoryItemRPH = null)
    {
        $this
            ->setTravelSector($travelSector)
            ->setInventoryItemRPH($inventoryItemRPH);
    }
    /**
     * Get TravelSector value
     * @return string|null
     */
    public function getTravelSector()
    {
        return $this->TravelSector;
    }
    /**
     * Set TravelSector value
     * @param string $travelSector
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRequestType
     */
    public function setTravelSector($travelSector = null)
    {
        // validation for constraint: string
        if (!is_null($travelSector) && !is_string($travelSector)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelSector)), __LINE__);
        }
        $this->TravelSector = $travelSector;
        return $this;
    }
    /**
     * Get InventoryItemRPH value
     * @return string|null
     */
    public function getInventoryItemRPH()
    {
        return $this->InventoryItemRPH;
    }
    /**
     * Set InventoryItemRPH value
     * @param string $inventoryItemRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRequestType
     */
    public function setInventoryItemRPH($inventoryItemRPH = null)
    {
        // validation for constraint: string
        if (!is_null($inventoryItemRPH) && !is_string($inventoryItemRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventoryItemRPH)), __LINE__);
        }
        $this->InventoryItemRPH = $inventoryItemRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ServiceRequestType
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

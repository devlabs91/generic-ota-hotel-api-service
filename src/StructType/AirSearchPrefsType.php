<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSearchPrefsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines user preferences to be used in conducting a search. | Request smoking flights in response. Defaults to false - no desire for smoking flights.
 * @subpackage Structs
 */
class AirSearchPrefsType extends AbstractStructBase
{
    /**
     * The VendorPref
     * Meta informations extracted from the WSDL
     * - documentation: Specify vendors to include and exclude from the response.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $VendorPref;
    /**
     * The FlightTypePref
     * Meta informations extracted from the WSDL
     * - documentation: Defines preferred flight characteristics to be used in a search.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $FlightTypePref;
    /**
     * The FareRestrictPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref[]
     */
    public $FareRestrictPref;
    /**
     * The EquipPref
     * Meta informations extracted from the WSDL
     * - documentation: Defines preferred equipment profile(s) to be used in a search.
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $EquipPref;
    /**
     * The CabinPref
     * Meta informations extracted from the WSDL
     * - documentation: Defines preferred cabin(s) to be used in a search.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CabinPref;
    /**
     * The TicketDistribPref
     * Meta informations extracted from the WSDL
     * - documentation: Defines Distribution prefernces.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TicketDistribPref;
    /**
     * The OnTimeRate
     * Meta informations extracted from the WSDL
     * - documentation: Request for flights in response that meet the given Department of Transport on-time rate. This is a number between 0 and 100.
     * - use: optional
     * @var string
     */
    public $OnTimeRate;
    /**
     * The ETicketDesired
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Request flights that are e-ticketable in the response.
     * - use: optional
     * @var bool
     */
    public $ETicketDesired;
    /**
     * The MaxStopsQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Request flights that have no more than the requested number of stops.
     * - use: optional
     * @var string
     */
    public $MaxStopsQuantity;
    /**
     * Constructor method for AirSearchPrefsType
     * @uses AirSearchPrefsType::setVendorPref()
     * @uses AirSearchPrefsType::setFlightTypePref()
     * @uses AirSearchPrefsType::setFareRestrictPref()
     * @uses AirSearchPrefsType::setEquipPref()
     * @uses AirSearchPrefsType::setCabinPref()
     * @uses AirSearchPrefsType::setTicketDistribPref()
     * @uses AirSearchPrefsType::setOnTimeRate()
     * @uses AirSearchPrefsType::setETicketDesired()
     * @uses AirSearchPrefsType::setMaxStopsQuantity()
     * @param mixed[] $vendorPref
     * @param mixed[] $flightTypePref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref[] $fareRestrictPref
     * @param mixed[] $equipPref
     * @param mixed[] $cabinPref
     * @param mixed[] $ticketDistribPref
     * @param string $onTimeRate
     * @param bool $eTicketDesired
     * @param string $maxStopsQuantity
     */
    public function __construct(array $vendorPref = array(), array $flightTypePref = array(), array $fareRestrictPref = array(), array $equipPref = array(), array $cabinPref = array(), array $ticketDistribPref = array(), $onTimeRate = null, $eTicketDesired = false, $maxStopsQuantity = null)
    {
        $this
            ->setVendorPref($vendorPref)
            ->setFlightTypePref($flightTypePref)
            ->setFareRestrictPref($fareRestrictPref)
            ->setEquipPref($equipPref)
            ->setCabinPref($cabinPref)
            ->setTicketDistribPref($ticketDistribPref)
            ->setOnTimeRate($onTimeRate)
            ->setETicketDesired($eTicketDesired)
            ->setMaxStopsQuantity($maxStopsQuantity);
    }
    /**
     * Get VendorPref value
     * @return mixed[]|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $vendorPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function setVendorPref(array $vendorPref = array())
    {
        foreach ($vendorPref as $airSearchPrefsTypeVendorPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of anyType, "%s" given', is_object($airSearchPrefsTypeVendorPrefItem) ? get_class($airSearchPrefsTypeVendorPrefItem) : gettype($airSearchPrefsTypeVendorPrefItem)), __LINE__);
            }
        }
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Add item to VendorPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function addToVendorPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VendorPref[] = $item;
        return $this;
    }
    /**
     * Get FlightTypePref value
     * @return mixed[]|null
     */
    public function getFlightTypePref()
    {
        return $this->FlightTypePref;
    }
    /**
     * Set FlightTypePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $flightTypePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function setFlightTypePref(array $flightTypePref = array())
    {
        foreach ($flightTypePref as $airSearchPrefsTypeFlightTypePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The FlightTypePref property can only contain items of anyType, "%s" given', is_object($airSearchPrefsTypeFlightTypePrefItem) ? get_class($airSearchPrefsTypeFlightTypePrefItem) : gettype($airSearchPrefsTypeFlightTypePrefItem)), __LINE__);
            }
        }
        $this->FlightTypePref = $flightTypePref;
        return $this;
    }
    /**
     * Add item to FlightTypePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function addToFlightTypePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The FlightTypePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightTypePref[] = $item;
        return $this;
    }
    /**
     * Get FareRestrictPref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref[]|null
     */
    public function getFareRestrictPref()
    {
        return $this->FareRestrictPref;
    }
    /**
     * Set FareRestrictPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref[] $fareRestrictPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function setFareRestrictPref(array $fareRestrictPref = array())
    {
        foreach ($fareRestrictPref as $airSearchPrefsTypeFareRestrictPrefItem) {
            // validation for constraint: itemType
            if (!$airSearchPrefsTypeFareRestrictPrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref) {
                throw new \InvalidArgumentException(sprintf('The FareRestrictPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref, "%s" given', is_object($airSearchPrefsTypeFareRestrictPrefItem) ? get_class($airSearchPrefsTypeFareRestrictPrefItem) : gettype($airSearchPrefsTypeFareRestrictPrefItem)), __LINE__);
            }
        }
        $this->FareRestrictPref = $fareRestrictPref;
        return $this;
    }
    /**
     * Add item to FareRestrictPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function addToFareRestrictPref(\Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref) {
            throw new \InvalidArgumentException(sprintf('The FareRestrictPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareRestrictPref[] = $item;
        return $this;
    }
    /**
     * Get EquipPref value
     * @return mixed[]|null
     */
    public function getEquipPref()
    {
        return $this->EquipPref;
    }
    /**
     * Set EquipPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $equipPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function setEquipPref(array $equipPref = array())
    {
        foreach ($equipPref as $airSearchPrefsTypeEquipPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The EquipPref property can only contain items of anyType, "%s" given', is_object($airSearchPrefsTypeEquipPrefItem) ? get_class($airSearchPrefsTypeEquipPrefItem) : gettype($airSearchPrefsTypeEquipPrefItem)), __LINE__);
            }
        }
        $this->EquipPref = $equipPref;
        return $this;
    }
    /**
     * Add item to EquipPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function addToEquipPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The EquipPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EquipPref[] = $item;
        return $this;
    }
    /**
     * Get CabinPref value
     * @return mixed[]|null
     */
    public function getCabinPref()
    {
        return $this->CabinPref;
    }
    /**
     * Set CabinPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $cabinPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function setCabinPref(array $cabinPref = array())
    {
        foreach ($cabinPref as $airSearchPrefsTypeCabinPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CabinPref property can only contain items of anyType, "%s" given', is_object($airSearchPrefsTypeCabinPrefItem) ? get_class($airSearchPrefsTypeCabinPrefItem) : gettype($airSearchPrefsTypeCabinPrefItem)), __LINE__);
            }
        }
        $this->CabinPref = $cabinPref;
        return $this;
    }
    /**
     * Add item to CabinPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function addToCabinPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CabinPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CabinPref[] = $item;
        return $this;
    }
    /**
     * Get TicketDistribPref value
     * @return mixed[]|null
     */
    public function getTicketDistribPref()
    {
        return $this->TicketDistribPref;
    }
    /**
     * Set TicketDistribPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $ticketDistribPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function setTicketDistribPref(array $ticketDistribPref = array())
    {
        foreach ($ticketDistribPref as $airSearchPrefsTypeTicketDistribPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TicketDistribPref property can only contain items of anyType, "%s" given', is_object($airSearchPrefsTypeTicketDistribPrefItem) ? get_class($airSearchPrefsTypeTicketDistribPrefItem) : gettype($airSearchPrefsTypeTicketDistribPrefItem)), __LINE__);
            }
        }
        $this->TicketDistribPref = $ticketDistribPref;
        return $this;
    }
    /**
     * Add item to TicketDistribPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function addToTicketDistribPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TicketDistribPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketDistribPref[] = $item;
        return $this;
    }
    /**
     * Get OnTimeRate value
     * @return string|null
     */
    public function getOnTimeRate()
    {
        return $this->OnTimeRate;
    }
    /**
     * Set OnTimeRate value
     * @param string $onTimeRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function setOnTimeRate($onTimeRate = null)
    {
        // validation for constraint: string
        if (!is_null($onTimeRate) && !is_string($onTimeRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($onTimeRate)), __LINE__);
        }
        $this->OnTimeRate = $onTimeRate;
        return $this;
    }
    /**
     * Get ETicketDesired value
     * @return bool|null
     */
    public function getETicketDesired()
    {
        return $this->ETicketDesired;
    }
    /**
     * Set ETicketDesired value
     * @param bool $eTicketDesired
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function setETicketDesired($eTicketDesired = false)
    {
        // validation for constraint: boolean
        if (!is_null($eTicketDesired) && !is_bool($eTicketDesired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eTicketDesired)), __LINE__);
        }
        $this->ETicketDesired = $eTicketDesired;
        return $this;
    }
    /**
     * Get MaxStopsQuantity value
     * @return string|null
     */
    public function getMaxStopsQuantity()
    {
        return $this->MaxStopsQuantity;
    }
    /**
     * Set MaxStopsQuantity value
     * @param string $maxStopsQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
     */
    public function setMaxStopsQuantity($maxStopsQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($maxStopsQuantity) && !is_string($maxStopsQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxStopsQuantity)), __LINE__);
        }
        $this->MaxStopsQuantity = $maxStopsQuantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSearchPrefsType
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

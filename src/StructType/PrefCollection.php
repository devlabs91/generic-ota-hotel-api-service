<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrefCollection StructType
 * Meta informations extracted from the WSDL
 * - documentation: Unique aggregation of customer travel needs.
 * @subpackage Structs
 */
class PrefCollection extends AbstractStructBase
{
    /**
     * The CommonPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CommonPref;
    /**
     * The VehicleRentalPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $VehicleRentalPref;
    /**
     * The AirlinePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AirlinePref;
    /**
     * The HotelPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $HotelPref;
    /**
     * The OtherSrvcPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $OtherSrvcPref;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The TravelPurpose
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Travel Purpose (TVP).
     * - use: optional
     * @var string
     */
    public $TravelPurpose;
    /**
     * Constructor method for PrefCollection
     * @uses PrefCollection::setCommonPref()
     * @uses PrefCollection::setVehicleRentalPref()
     * @uses PrefCollection::setAirlinePref()
     * @uses PrefCollection::setHotelPref()
     * @uses PrefCollection::setOtherSrvcPref()
     * @uses PrefCollection::setTPA_Extensions()
     * @uses PrefCollection::setTravelPurpose()
     * @param mixed[] $commonPref
     * @param mixed[] $vehicleRentalPref
     * @param mixed[] $airlinePref
     * @param mixed[] $hotelPref
     * @param mixed[] $otherSrvcPref
     * @param mixed $tPA_Extensions
     * @param string $travelPurpose
     */
    public function __construct(array $commonPref = array(), array $vehicleRentalPref = array(), array $airlinePref = array(), array $hotelPref = array(), array $otherSrvcPref = array(), $tPA_Extensions = null, $travelPurpose = null)
    {
        $this
            ->setCommonPref($commonPref)
            ->setVehicleRentalPref($vehicleRentalPref)
            ->setAirlinePref($airlinePref)
            ->setHotelPref($hotelPref)
            ->setOtherSrvcPref($otherSrvcPref)
            ->setTPA_Extensions($tPA_Extensions)
            ->setTravelPurpose($travelPurpose);
    }
    /**
     * Get CommonPref value
     * @return mixed[]|null
     */
    public function getCommonPref()
    {
        return $this->CommonPref;
    }
    /**
     * Set CommonPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $commonPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function setCommonPref(array $commonPref = array())
    {
        foreach ($commonPref as $prefCollectionCommonPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CommonPref property can only contain items of anyType, "%s" given', is_object($prefCollectionCommonPrefItem) ? get_class($prefCollectionCommonPrefItem) : gettype($prefCollectionCommonPrefItem)), __LINE__);
            }
        }
        $this->CommonPref = $commonPref;
        return $this;
    }
    /**
     * Add item to CommonPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function addToCommonPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CommonPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CommonPref[] = $item;
        return $this;
    }
    /**
     * Get VehicleRentalPref value
     * @return mixed[]|null
     */
    public function getVehicleRentalPref()
    {
        return $this->VehicleRentalPref;
    }
    /**
     * Set VehicleRentalPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $vehicleRentalPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function setVehicleRentalPref(array $vehicleRentalPref = array())
    {
        foreach ($vehicleRentalPref as $prefCollectionVehicleRentalPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VehicleRentalPref property can only contain items of anyType, "%s" given', is_object($prefCollectionVehicleRentalPrefItem) ? get_class($prefCollectionVehicleRentalPrefItem) : gettype($prefCollectionVehicleRentalPrefItem)), __LINE__);
            }
        }
        $this->VehicleRentalPref = $vehicleRentalPref;
        return $this;
    }
    /**
     * Add item to VehicleRentalPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function addToVehicleRentalPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VehicleRentalPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehicleRentalPref[] = $item;
        return $this;
    }
    /**
     * Get AirlinePref value
     * @return mixed[]|null
     */
    public function getAirlinePref()
    {
        return $this->AirlinePref;
    }
    /**
     * Set AirlinePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $airlinePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function setAirlinePref(array $airlinePref = array())
    {
        foreach ($airlinePref as $prefCollectionAirlinePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AirlinePref property can only contain items of anyType, "%s" given', is_object($prefCollectionAirlinePrefItem) ? get_class($prefCollectionAirlinePrefItem) : gettype($prefCollectionAirlinePrefItem)), __LINE__);
            }
        }
        $this->AirlinePref = $airlinePref;
        return $this;
    }
    /**
     * Add item to AirlinePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function addToAirlinePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AirlinePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirlinePref[] = $item;
        return $this;
    }
    /**
     * Get HotelPref value
     * @return mixed[]|null
     */
    public function getHotelPref()
    {
        return $this->HotelPref;
    }
    /**
     * Set HotelPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $hotelPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function setHotelPref(array $hotelPref = array())
    {
        foreach ($hotelPref as $prefCollectionHotelPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The HotelPref property can only contain items of anyType, "%s" given', is_object($prefCollectionHotelPrefItem) ? get_class($prefCollectionHotelPrefItem) : gettype($prefCollectionHotelPrefItem)), __LINE__);
            }
        }
        $this->HotelPref = $hotelPref;
        return $this;
    }
    /**
     * Add item to HotelPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function addToHotelPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The HotelPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelPref[] = $item;
        return $this;
    }
    /**
     * Get OtherSrvcPref value
     * @return mixed[]|null
     */
    public function getOtherSrvcPref()
    {
        return $this->OtherSrvcPref;
    }
    /**
     * Set OtherSrvcPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $otherSrvcPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function setOtherSrvcPref(array $otherSrvcPref = array())
    {
        foreach ($otherSrvcPref as $prefCollectionOtherSrvcPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The OtherSrvcPref property can only contain items of anyType, "%s" given', is_object($prefCollectionOtherSrvcPrefItem) ? get_class($prefCollectionOtherSrvcPrefItem) : gettype($prefCollectionOtherSrvcPrefItem)), __LINE__);
            }
        }
        $this->OtherSrvcPref = $otherSrvcPref;
        return $this;
    }
    /**
     * Add item to OtherSrvcPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function addToOtherSrvcPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The OtherSrvcPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OtherSrvcPref[] = $item;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get TravelPurpose value
     * @return string|null
     */
    public function getTravelPurpose()
    {
        return $this->TravelPurpose;
    }
    /**
     * Set TravelPurpose value
     * @param string $travelPurpose
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
     */
    public function setTravelPurpose($travelPurpose = null)
    {
        // validation for constraint: string
        if (!is_null($travelPurpose) && !is_string($travelPurpose)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelPurpose)), __LINE__);
        }
        $this->TravelPurpose = $travelPurpose;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PrefCollection
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

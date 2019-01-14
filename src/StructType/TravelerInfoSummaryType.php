<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerInfoSummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specify passenger numbers and types
 * @subpackage Structs
 */
class TravelerInfoSummaryType extends AbstractStructBase
{
    /**
     * The SeatsRequested
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var int[]
     */
    public $SeatsRequested;
    /**
     * The AirTravelerAvail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AirTravelerAvail;
    /**
     * The PriceRequestInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $PriceRequestInformation;
    /**
     * Constructor method for TravelerInfoSummaryType
     * @uses TravelerInfoSummaryType::setSeatsRequested()
     * @uses TravelerInfoSummaryType::setAirTravelerAvail()
     * @uses TravelerInfoSummaryType::setPriceRequestInformation()
     * @param int[] $seatsRequested
     * @param mixed[] $airTravelerAvail
     * @param mixed $priceRequestInformation
     */
    public function __construct(array $seatsRequested = array(), array $airTravelerAvail = array(), $priceRequestInformation = null)
    {
        $this
            ->setSeatsRequested($seatsRequested)
            ->setAirTravelerAvail($airTravelerAvail)
            ->setPriceRequestInformation($priceRequestInformation);
    }
    /**
     * Get SeatsRequested value
     * @return int[]|null
     */
    public function getSeatsRequested()
    {
        return $this->SeatsRequested;
    }
    /**
     * Set SeatsRequested value
     * @throws \InvalidArgumentException
     * @param int[] $seatsRequested
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoSummaryType
     */
    public function setSeatsRequested(array $seatsRequested = array())
    {
        foreach ($seatsRequested as $travelerInfoSummaryTypeSeatsRequestedItem) {
            // validation for constraint: itemType
            if (!is_numeric($travelerInfoSummaryTypeSeatsRequestedItem)) {
                throw new \InvalidArgumentException(sprintf('The SeatsRequested property can only contain items of nonNegativeInteger, "%s" given', is_object($travelerInfoSummaryTypeSeatsRequestedItem) ? get_class($travelerInfoSummaryTypeSeatsRequestedItem) : gettype($travelerInfoSummaryTypeSeatsRequestedItem)), __LINE__);
            }
        }
        $this->SeatsRequested = $seatsRequested;
        return $this;
    }
    /**
     * Add item to SeatsRequested value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoSummaryType
     */
    public function addToSeatsRequested($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The SeatsRequested property can only contain items of nonNegativeInteger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatsRequested[] = $item;
        return $this;
    }
    /**
     * Get AirTravelerAvail value
     * @return mixed[]|null
     */
    public function getAirTravelerAvail()
    {
        return $this->AirTravelerAvail;
    }
    /**
     * Set AirTravelerAvail value
     * @throws \InvalidArgumentException
     * @param mixed[] $airTravelerAvail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoSummaryType
     */
    public function setAirTravelerAvail(array $airTravelerAvail = array())
    {
        foreach ($airTravelerAvail as $travelerInfoSummaryTypeAirTravelerAvailItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AirTravelerAvail property can only contain items of anyType, "%s" given', is_object($travelerInfoSummaryTypeAirTravelerAvailItem) ? get_class($travelerInfoSummaryTypeAirTravelerAvailItem) : gettype($travelerInfoSummaryTypeAirTravelerAvailItem)), __LINE__);
            }
        }
        $this->AirTravelerAvail = $airTravelerAvail;
        return $this;
    }
    /**
     * Add item to AirTravelerAvail value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoSummaryType
     */
    public function addToAirTravelerAvail($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AirTravelerAvail property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirTravelerAvail[] = $item;
        return $this;
    }
    /**
     * Get PriceRequestInformation value
     * @return mixed|null
     */
    public function getPriceRequestInformation()
    {
        return $this->PriceRequestInformation;
    }
    /**
     * Set PriceRequestInformation value
     * @param mixed $priceRequestInformation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoSummaryType
     */
    public function setPriceRequestInformation($priceRequestInformation = null)
    {
        $this->PriceRequestInformation = $priceRequestInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoSummaryType
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

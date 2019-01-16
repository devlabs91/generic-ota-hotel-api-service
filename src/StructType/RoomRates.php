<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomRates StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reservation rate(s). | A collection of Room Rates associated with a particular Room Stay. Each Room Rate combination can have multiple rates. Example King room, Rack rate plan, Monday through Thursday, weekday amount, Friday and
 * Saturday, weekend amount. | The combination of a given Rate Plan and Room Type. This allows for support for systems where Rate Plans are child of Room Type as well as systems which Room Types are child of Rate Plans.
 * @subpackage Structs
 */
class RoomRates extends AbstractStructBase
{
    /**
     * The RoomRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $RoomRate;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The MoreRatesExistInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates more rates exist. When false, all rate information is provided.
     * - use: optional
     * @var bool
     */
    public $MoreRatesExistInd;
    /**
     * Constructor method for RoomRates
     * @uses RoomRates::setRoomRate()
     * @uses RoomRates::setTPA_Extensions()
     * @uses RoomRates::setMoreRatesExistInd()
     * @param mixed[] $roomRate
     * @param mixed $tPA_Extensions
     * @param bool $moreRatesExistInd
     */
    public function __construct(array $roomRate = array(), $tPA_Extensions = null, $moreRatesExistInd = null)
    {
        $this
            ->setRoomRate($roomRate)
            ->setTPA_Extensions($tPA_Extensions)
            ->setMoreRatesExistInd($moreRatesExistInd);
    }
    /**
     * Get RoomRate value
     * @return mixed[]|null
     */
    public function getRoomRate()
    {
        return $this->RoomRate;
    }
    /**
     * Set RoomRate value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates
     */
    public function setRoomRate(array $roomRate = array())
    {
        foreach ($roomRate as $roomRatesRoomRateItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomRate property can only contain items of anyType, "%s" given', is_object($roomRatesRoomRateItem) ? get_class($roomRatesRoomRateItem) : gettype($roomRatesRoomRateItem)), __LINE__);
            }
        }
        $this->RoomRate = $roomRate;
        return $this;
    }
    /**
     * Add item to RoomRate value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates
     */
    public function addToRoomRate($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomRate property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomRate[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get MoreRatesExistInd value
     * @return bool|null
     */
    public function getMoreRatesExistInd()
    {
        return $this->MoreRatesExistInd;
    }
    /**
     * Set MoreRatesExistInd value
     * @param bool $moreRatesExistInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates
     */
    public function setMoreRatesExistInd($moreRatesExistInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($moreRatesExistInd) && !is_bool($moreRatesExistInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($moreRatesExistInd)), __LINE__);
        }
        $this->MoreRatesExistInd = $moreRatesExistInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates
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

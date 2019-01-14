<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a request message for creating a reservation. It is used by HotelResRQ and HotelResNotifRQ to keep them synchronized.
 * @subpackage Structs
 */
class HotelResRequestType extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - documentation: The point-of-sale data, contained in the POS element, communicates the information that allows the receiving system to identify the trading partner that is sending the request or the response message.
     * - minOccurs: 0
     * @var mixed
     */
    public $POS;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $UniqueID;
    /**
     * The HotelReservations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $HotelReservations;
    /**
     * The ResStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the status of the reservation represented by the message. This is an enumeration with possible values of Initiate, Ignore, Modify, Commit.
     * - use: optional
     * @var string
     */
    public $ResStatus;
    /**
     * Constructor method for HotelResRequestType
     * @uses HotelResRequestType::setPOS()
     * @uses HotelResRequestType::setUniqueID()
     * @uses HotelResRequestType::setHotelReservations()
     * @uses HotelResRequestType::setResStatus()
     * @param mixed $pOS
     * @param mixed[] $uniqueID
     * @param mixed $hotelReservations
     * @param string $resStatus
     */
    public function __construct($pOS = null, array $uniqueID = array(), $hotelReservations = null, $resStatus = null)
    {
        $this
            ->setPOS($pOS)
            ->setUniqueID($uniqueID)
            ->setHotelReservations($hotelReservations)
            ->setResStatus($resStatus);
    }
    /**
     * Get POS value
     * @return mixed|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param mixed $pOS
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResRequestType
     */
    public function setPOS($pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return mixed[]|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed[] $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResRequestType
     */
    public function setUniqueID(array $uniqueID = array())
    {
        foreach ($uniqueID as $hotelResRequestTypeUniqueIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($hotelResRequestTypeUniqueIDItem) ? get_class($hotelResRequestTypeUniqueIDItem) : gettype($hotelResRequestTypeUniqueIDItem)), __LINE__);
            }
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Add item to UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResRequestType
     */
    public function addToUniqueID($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UniqueID[] = $item;
        return $this;
    }
    /**
     * Get HotelReservations value
     * @return mixed|null
     */
    public function getHotelReservations()
    {
        return $this->HotelReservations;
    }
    /**
     * Set HotelReservations value
     * @param mixed $hotelReservations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResRequestType
     */
    public function setHotelReservations($hotelReservations = null)
    {
        $this->HotelReservations = $hotelReservations;
        return $this;
    }
    /**
     * Get ResStatus value
     * @return string|null
     */
    public function getResStatus()
    {
        return $this->ResStatus;
    }
    /**
     * Set ResStatus value
     * @param string $resStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResRequestType
     */
    public function setResStatus($resStatus = null)
    {
        // validation for constraint: string
        if (!is_null($resStatus) && !is_string($resStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resStatus)), __LINE__);
        }
        $this->ResStatus = $resStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResRequestType
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

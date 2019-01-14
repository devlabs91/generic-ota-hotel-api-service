<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResModifyRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a request message for modifying a reservation. It is used for a full overlay of the reservation. When changing data that requires an availability check, this message assumes the availability is known (if availability is not
 * known an availability check containing the reservation ID may be useful).
 * @subpackage Structs
 */
class HotelResModifyRequestType extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - documentation: Point of sale object.
     * - minOccurs: 0
     * @var mixed
     */
    public $POS;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: This represents the batch ID for a group of modified items.
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $UniqueID;
    /**
     * The HotelResModifies
     * Meta informations extracted from the WSDL
     * - documentation: A collection of reservations to be modified.
     * - minOccurs: 0
     * @var mixed
     */
    public $HotelResModifies;
    /**
     * The ResStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the status of the reservation represented by the message. This is an enumeration with possible values of Initiate, Ignore, Modify, Commit.
     * - use: optional
     * @var string
     */
    public $ResStatus;
    /**
     * Constructor method for HotelResModifyRequestType
     * @uses HotelResModifyRequestType::setPOS()
     * @uses HotelResModifyRequestType::setUniqueID()
     * @uses HotelResModifyRequestType::setHotelResModifies()
     * @uses HotelResModifyRequestType::setResStatus()
     * @param mixed $pOS
     * @param mixed[] $uniqueID
     * @param mixed $hotelResModifies
     * @param string $resStatus
     */
    public function __construct($pOS = null, array $uniqueID = array(), $hotelResModifies = null, $resStatus = null)
    {
        $this
            ->setPOS($pOS)
            ->setUniqueID($uniqueID)
            ->setHotelResModifies($hotelResModifies)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyRequestType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyRequestType
     */
    public function setUniqueID(array $uniqueID = array())
    {
        foreach ($uniqueID as $hotelResModifyRequestTypeUniqueIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($hotelResModifyRequestTypeUniqueIDItem) ? get_class($hotelResModifyRequestTypeUniqueIDItem) : gettype($hotelResModifyRequestTypeUniqueIDItem)), __LINE__);
            }
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Add item to UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyRequestType
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
     * Get HotelResModifies value
     * @return mixed|null
     */
    public function getHotelResModifies()
    {
        return $this->HotelResModifies;
    }
    /**
     * Set HotelResModifies value
     * @param mixed $hotelResModifies
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyRequestType
     */
    public function setHotelResModifies($hotelResModifies = null)
    {
        $this->HotelResModifies = $hotelResModifies;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyRequestType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyRequestType
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

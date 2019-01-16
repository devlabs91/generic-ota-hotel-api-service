<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Policies StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of policy information as it applies to the hotel.
 * @subpackage Structs
 */
class Policies extends PoliciesType
{
    /**
     * The GuaranteeRoomTypeViaGDS
     * Meta informations extracted from the WSDL
     * - documentation: If true, indicates that room types can be guaranteed on reservations booked through GDS channels.
     * - use: optional
     * @var bool
     */
    public $GuaranteeRoomTypeViaGDS;
    /**
     * The GuaranteeRoomTypeViaCRC
     * Meta informations extracted from the WSDL
     * - documentation: If true, indicates that room types can be guaranteed on reservations booked by central reservation centers.
     * - use: optional
     * @var bool
     */
    public $GuaranteeRoomTypeViaCRC;
    /**
     * The GuaranteeRoomTypeViaProperty
     * Meta informations extracted from the WSDL
     * - documentation: If true, indicates that room types can be guaranteed on reservations booked by the property.
     * - use: optional
     * @var bool
     */
    public $GuaranteeRoomTypeViaProperty;
    /**
     * Constructor method for Policies
     * @uses Policies::setGuaranteeRoomTypeViaGDS()
     * @uses Policies::setGuaranteeRoomTypeViaCRC()
     * @uses Policies::setGuaranteeRoomTypeViaProperty()
     * @param bool $guaranteeRoomTypeViaGDS
     * @param bool $guaranteeRoomTypeViaCRC
     * @param bool $guaranteeRoomTypeViaProperty
     */
    public function __construct($guaranteeRoomTypeViaGDS = null, $guaranteeRoomTypeViaCRC = null, $guaranteeRoomTypeViaProperty = null)
    {
        $this
            ->setGuaranteeRoomTypeViaGDS($guaranteeRoomTypeViaGDS)
            ->setGuaranteeRoomTypeViaCRC($guaranteeRoomTypeViaCRC)
            ->setGuaranteeRoomTypeViaProperty($guaranteeRoomTypeViaProperty);
    }
    /**
     * Get GuaranteeRoomTypeViaGDS value
     * @return bool|null
     */
    public function getGuaranteeRoomTypeViaGDS()
    {
        return $this->GuaranteeRoomTypeViaGDS;
    }
    /**
     * Set GuaranteeRoomTypeViaGDS value
     * @param bool $guaranteeRoomTypeViaGDS
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policies
     */
    public function setGuaranteeRoomTypeViaGDS($guaranteeRoomTypeViaGDS = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteeRoomTypeViaGDS) && !is_bool($guaranteeRoomTypeViaGDS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteeRoomTypeViaGDS)), __LINE__);
        }
        $this->GuaranteeRoomTypeViaGDS = $guaranteeRoomTypeViaGDS;
        return $this;
    }
    /**
     * Get GuaranteeRoomTypeViaCRC value
     * @return bool|null
     */
    public function getGuaranteeRoomTypeViaCRC()
    {
        return $this->GuaranteeRoomTypeViaCRC;
    }
    /**
     * Set GuaranteeRoomTypeViaCRC value
     * @param bool $guaranteeRoomTypeViaCRC
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policies
     */
    public function setGuaranteeRoomTypeViaCRC($guaranteeRoomTypeViaCRC = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteeRoomTypeViaCRC) && !is_bool($guaranteeRoomTypeViaCRC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteeRoomTypeViaCRC)), __LINE__);
        }
        $this->GuaranteeRoomTypeViaCRC = $guaranteeRoomTypeViaCRC;
        return $this;
    }
    /**
     * Get GuaranteeRoomTypeViaProperty value
     * @return bool|null
     */
    public function getGuaranteeRoomTypeViaProperty()
    {
        return $this->GuaranteeRoomTypeViaProperty;
    }
    /**
     * Set GuaranteeRoomTypeViaProperty value
     * @param bool $guaranteeRoomTypeViaProperty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policies
     */
    public function setGuaranteeRoomTypeViaProperty($guaranteeRoomTypeViaProperty = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteeRoomTypeViaProperty) && !is_bool($guaranteeRoomTypeViaProperty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteeRoomTypeViaProperty)), __LINE__);
        }
        $this->GuaranteeRoomTypeViaProperty = $guaranteeRoomTypeViaProperty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policies
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

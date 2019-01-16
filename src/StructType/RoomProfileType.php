<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomProfileType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the occupancy of a room or cabin.
 * @subpackage Structs
 */
class RoomProfileType extends RoomStayCandidateType
{
    /**
     * The PassengerRPHs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PassengerRPHs
     */
    public $PassengerRPHs;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A full description of the room/apartment etc.
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The MaxAdults
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of adults allowed in a unit of accommodation.
     * - use: optional
     * @var string
     */
    public $MaxAdults;
    /**
     * The CotQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of cots/cribs available in a room/apartment etc.
     * - use: optional
     * @var string
     */
    public $CotQuantity;
    /**
     * The FreeChildFlag
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether a free child is permitted in a room/apartment etc.
     * - use: optional
     * @var bool
     */
    public $FreeChildFlag;
    /**
     * Constructor method for RoomProfileType
     * @uses RoomProfileType::setPassengerRPHs()
     * @uses RoomProfileType::setDescription()
     * @uses RoomProfileType::setMaxAdults()
     * @uses RoomProfileType::setCotQuantity()
     * @uses RoomProfileType::setFreeChildFlag()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PassengerRPHs $passengerRPHs
     * @param string $description
     * @param string $maxAdults
     * @param string $cotQuantity
     * @param bool $freeChildFlag
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\PassengerRPHs $passengerRPHs = null, $description = null, $maxAdults = null, $cotQuantity = null, $freeChildFlag = null)
    {
        $this
            ->setPassengerRPHs($passengerRPHs)
            ->setDescription($description)
            ->setMaxAdults($maxAdults)
            ->setCotQuantity($cotQuantity)
            ->setFreeChildFlag($freeChildFlag);
    }
    /**
     * Get PassengerRPHs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PassengerRPHs|null
     */
    public function getPassengerRPHs()
    {
        return $this->PassengerRPHs;
    }
    /**
     * Set PassengerRPHs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PassengerRPHs $passengerRPHs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfileType
     */
    public function setPassengerRPHs(\Devlabs91\GenericOtaHotelApiService\StructType\PassengerRPHs $passengerRPHs = null)
    {
        $this->PassengerRPHs = $passengerRPHs;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfileType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get MaxAdults value
     * @return string|null
     */
    public function getMaxAdults()
    {
        return $this->MaxAdults;
    }
    /**
     * Set MaxAdults value
     * @param string $maxAdults
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfileType
     */
    public function setMaxAdults($maxAdults = null)
    {
        // validation for constraint: string
        if (!is_null($maxAdults) && !is_string($maxAdults)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxAdults)), __LINE__);
        }
        $this->MaxAdults = $maxAdults;
        return $this;
    }
    /**
     * Get CotQuantity value
     * @return string|null
     */
    public function getCotQuantity()
    {
        return $this->CotQuantity;
    }
    /**
     * Set CotQuantity value
     * @param string $cotQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfileType
     */
    public function setCotQuantity($cotQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($cotQuantity) && !is_string($cotQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cotQuantity)), __LINE__);
        }
        $this->CotQuantity = $cotQuantity;
        return $this;
    }
    /**
     * Get FreeChildFlag value
     * @return bool|null
     */
    public function getFreeChildFlag()
    {
        return $this->FreeChildFlag;
    }
    /**
     * Set FreeChildFlag value
     * @param bool $freeChildFlag
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfileType
     */
    public function setFreeChildFlag($freeChildFlag = null)
    {
        // validation for constraint: boolean
        if (!is_null($freeChildFlag) && !is_bool($freeChildFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($freeChildFlag)), __LINE__);
        }
        $this->FreeChildFlag = $freeChildFlag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfileType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dining StructType
 * Meta informations extracted from the WSDL
 * - documentation: The status per dining seating. | Identifies the availability of the particular sitting. | Provides a search filter by dining sitting.
 * @subpackage Structs
 */
class Dining extends AbstractStructBase
{
    /**
     * The Sitting
     * Meta informations extracted from the WSDL
     * - documentation: The dining seating (e.g., main dining, second dining). | Dining service. Typical values are: first, second, third, open. | The dining seating (e.g., main dining, second dining).
     * - use: optional
     * @var string
     */
    public $Sitting;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: The status of the dining. Refer to OpenTravel Code Table Status (STS). | Indicates the dining status. Refer to OpenTravel Code table Status (STS).
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * The Occupancy
     * Meta informations extracted from the WSDL
     * - documentation: The available occupancy associated with the dining.
     * - use: optional
     * @var string
     */
    public $Occupancy;
    /**
     * Constructor method for Dining
     * @uses Dining::setSitting()
     * @uses Dining::setStatus()
     * @uses Dining::setOccupancy()
     * @param string $sitting
     * @param string $status
     * @param string $occupancy
     */
    public function __construct($sitting = null, $status = null, $occupancy = null)
    {
        $this
            ->setSitting($sitting)
            ->setStatus($status)
            ->setOccupancy($occupancy);
    }
    /**
     * Get Sitting value
     * @return string|null
     */
    public function getSitting()
    {
        return $this->Sitting;
    }
    /**
     * Set Sitting value
     * @param string $sitting
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Dining
     */
    public function setSitting($sitting = null)
    {
        // validation for constraint: string
        if (!is_null($sitting) && !is_string($sitting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sitting)), __LINE__);
        }
        $this->Sitting = $sitting;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Dining
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Occupancy value
     * @return string|null
     */
    public function getOccupancy()
    {
        return $this->Occupancy;
    }
    /**
     * Set Occupancy value
     * @param string $occupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Dining
     */
    public function setOccupancy($occupancy = null)
    {
        // validation for constraint: string
        if (!is_null($occupancy) && !is_string($occupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($occupancy)), __LINE__);
        }
        $this->Occupancy = $occupancy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Dining
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

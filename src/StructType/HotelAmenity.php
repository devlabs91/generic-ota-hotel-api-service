<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAmenity StructType
 * Meta informations extracted from the WSDL
 * - documentation: Hotel-level amenities (pool, etc) for searching. | Hotel level amenities for searches.
 * @subpackage Structs
 */
class HotelAmenity extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Hotel Amenity Code (HAC). | Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The ComplimentaryInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, there is no charge for the amenity. When false, there is a fee associated with the amenity.
     * - use: optional
     * @var bool
     */
    public $ComplimentaryInd;
    /**
     * Constructor method for HotelAmenity
     * @uses HotelAmenity::setCode()
     * @uses HotelAmenity::setComplimentaryInd()
     * @param string $code
     * @param bool $complimentaryInd
     */
    public function __construct($code = null, $complimentaryInd = null)
    {
        $this
            ->setCode($code)
            ->setComplimentaryInd($complimentaryInd);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get ComplimentaryInd value
     * @return bool|null
     */
    public function getComplimentaryInd()
    {
        return $this->ComplimentaryInd;
    }
    /**
     * Set ComplimentaryInd value
     * @param bool $complimentaryInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity
     */
    public function setComplimentaryInd($complimentaryInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($complimentaryInd) && !is_bool($complimentaryInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($complimentaryInd)), __LINE__);
        }
        $this->ComplimentaryInd = $complimentaryInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStayCandidate StructType
 * Meta informations extracted from the WSDL
 * - documentation: Element used to identify available room products.
 * @subpackage Structs
 */
class RoomStayCandidate extends RoomStayCandidateType
{
    /**
     * The IsAlternate
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the segment of the RoomStay is an alternate offer. Default=false. | false
     * - use: optional
     * @var bool
     */
    public $IsAlternate;
    /**
     * Constructor method for RoomStayCandidate
     * @uses RoomStayCandidate::setIsAlternate()
     * @param bool $isAlternate
     */
    public function __construct($isAlternate = null)
    {
        $this
            ->setIsAlternate($isAlternate);
    }
    /**
     * Get IsAlternate value
     * @return bool|null
     */
    public function getIsAlternate()
    {
        return $this->IsAlternate;
    }
    /**
     * Set IsAlternate value
     * @param bool $isAlternate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidate
     */
    public function setIsAlternate($isAlternate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAlternate) && !is_bool($isAlternate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAlternate)), __LINE__);
        }
        $this->IsAlternate = $isAlternate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidate
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

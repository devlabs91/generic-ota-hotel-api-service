<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestrictionStatusType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the status of a restriction on a room and/or rate.
 * @subpackage Structs
 */
class RestrictionStatusType extends AbstractStructBase
{
    /**
     * The Restriction
     * @var string
     */
    public $Restriction;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * Constructor method for RestrictionStatusType
     * @uses RestrictionStatusType::setRestriction()
     * @uses RestrictionStatusType::setStatus()
     * @param string $restriction
     * @param string $status
     */
    public function __construct($restriction = null, $status = null)
    {
        $this
            ->setRestriction($restriction)
            ->setStatus($status);
    }
    /**
     * Get Restriction value
     * @return string|null
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param string $restriction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatusType
     */
    public function setRestriction($restriction = null)
    {
        // validation for constraint: string
        if (!is_null($restriction) && !is_string($restriction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restriction)), __LINE__);
        }
        $this->Restriction = $restriction;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatusType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatusType
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

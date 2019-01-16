<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleEquipmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleEquipmentType complex type identifies the data that fully describes a piece of special equipment, including the description and any restrictions that may apply to its rental.
 * @subpackage Structs
 */
class VehicleEquipmentType extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Restriction
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Restriction;
    /**
     * Constructor method for VehicleEquipmentType
     * @uses VehicleEquipmentType::setDescription()
     * @uses VehicleEquipmentType::setRestriction()
     * @param string $description
     * @param string $restriction
     */
    public function __construct($description = null, $restriction = null)
    {
        $this
            ->setDescription($description)
            ->setRestriction($restriction);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleEquipmentType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleEquipmentType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleEquipmentType
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

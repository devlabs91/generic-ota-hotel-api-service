<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipmentTypePref StructType
 * @subpackage Structs
 */
class EquipmentTypePref extends EquipmentType
{
    /**
     * The WideBody
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $WideBody;
    /**
     * Constructor method for EquipmentTypePref
     * @uses EquipmentTypePref::setWideBody()
     * @param bool $wideBody
     */
    public function __construct($wideBody = null)
    {
        $this
            ->setWideBody($wideBody);
    }
    /**
     * Get WideBody value
     * @return bool|null
     */
    public function getWideBody()
    {
        return $this->WideBody;
    }
    /**
     * Set WideBody value
     * @param bool $wideBody
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EquipmentTypePref
     */
    public function setWideBody($wideBody = null)
    {
        // validation for constraint: boolean
        if (!is_null($wideBody) && !is_bool($wideBody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($wideBody)), __LINE__);
        }
        $this->WideBody = $wideBody;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EquipmentTypePref
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

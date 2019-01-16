<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: A preference for one specific vehicle type.
 * @subpackage Structs
 */
class VehPref extends VehiclePrefType
{
    /**
     * The UpSellInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, a higher class of vehicle than those specified, may be returned.
     * - use: optional
     * @var bool
     */
    public $UpSellInd;
    /**
     * Constructor method for VehPref
     * @uses VehPref::setUpSellInd()
     * @param bool $upSellInd
     */
    public function __construct($upSellInd = null)
    {
        $this
            ->setUpSellInd($upSellInd);
    }
    /**
     * Get UpSellInd value
     * @return bool|null
     */
    public function getUpSellInd()
    {
        return $this->UpSellInd;
    }
    /**
     * Set UpSellInd value
     * @param bool $upSellInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehPref
     */
    public function setUpSellInd($upSellInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($upSellInd) && !is_bool($upSellInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($upSellInd)), __LINE__);
        }
        $this->UpSellInd = $upSellInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehPref
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

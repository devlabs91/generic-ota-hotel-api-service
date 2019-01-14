<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Area StructType
 * @subpackage Structs
 */
class Area extends AbstractStructBase
{
    /**
     * The AreaDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AreaDescription;
    /**
     * Constructor method for Area
     * @uses Area::setAreaDescription()
     * @param mixed $areaDescription
     */
    public function __construct($areaDescription = null)
    {
        $this
            ->setAreaDescription($areaDescription);
    }
    /**
     * Get AreaDescription value
     * @return mixed|null
     */
    public function getAreaDescription()
    {
        return $this->AreaDescription;
    }
    /**
     * Set AreaDescription value
     * @param mixed $areaDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Area
     */
    public function setAreaDescription($areaDescription = null)
    {
        $this->AreaDescription = $areaDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Area
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

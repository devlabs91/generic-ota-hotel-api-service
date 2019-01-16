<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinClassType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the Cabin details in a seat map
 * @subpackage Structs
 */
class CabinClassType extends AbstractStructBase
{
    /**
     * The CabinType
     * Meta informations extracted from the WSDL
     * - documentation: Cabin class for which the seat map details is being given. Could be first, business or economy.
     * - use: required
     * @var string
     */
    public $CabinType;
    /**
     * The AirRows
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AirRows
     */
    public $AirRows;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Name that a particular airline/ CRS may give to the cabin class
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * Constructor method for CabinClassType
     * @uses CabinClassType::setCabinType()
     * @uses CabinClassType::setAirRows()
     * @uses CabinClassType::setName()
     * @param string $cabinType
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirRows $airRows
     * @param string $name
     */
    public function __construct($cabinType = null, \Devlabs91\GenericOtaHotelApiService\StructType\AirRows $airRows = null, $name = null)
    {
        $this
            ->setCabinType($cabinType)
            ->setAirRows($airRows)
            ->setName($name);
    }
    /**
     * Get CabinType value
     * @return string
     */
    public function getCabinType()
    {
        return $this->CabinType;
    }
    /**
     * Set CabinType value
     * @param string $cabinType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinClassType
     */
    public function setCabinType($cabinType = null)
    {
        // validation for constraint: string
        if (!is_null($cabinType) && !is_string($cabinType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinType)), __LINE__);
        }
        $this->CabinType = $cabinType;
        return $this;
    }
    /**
     * Get AirRows value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRows|null
     */
    public function getAirRows()
    {
        return $this->AirRows;
    }
    /**
     * Set AirRows value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirRows $airRows
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinClassType
     */
    public function setAirRows(\Devlabs91\GenericOtaHotelApiService\StructType\AirRows $airRows = null)
    {
        $this->AirRows = $airRows;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinClassType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinClassType
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

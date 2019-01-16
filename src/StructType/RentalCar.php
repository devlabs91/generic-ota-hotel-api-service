<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RentalCar StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a rental car included in the package | Details of a rental car included in the package
 * @subpackage Structs
 */
class RentalCar extends VehicleRentalCoreType
{
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: (Reference Place Holder) - an index code to identify an instance in a collection of like items.. For example, used to assign individual passengers or clients to particular itinerary items. | (Reference Place Holder) - an index code
     * to identify an instance in a collection of like items.. For example, used to assign individual passengers or clients to particular itinerary items.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: The name or type of vehicle e.g. 'Opel Corsa or similar'. | The name or type of vehicle e.g. 'Opel Corsa or similar'.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: The supplier's code for the vehicle. | The supplier's code for the vehicle.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for RentalCar
     * @uses RentalCar::setRPH()
     * @uses RentalCar::setName()
     * @uses RentalCar::setCode()
     * @param string $rPH
     * @param string $name
     * @param string $code
     */
    public function __construct($rPH = null, $name = null, $code = null)
    {
        $this
            ->setRPH($rPH)
            ->setName($name)
            ->setCode($code);
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalCar
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalCar
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalCar
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalCar
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

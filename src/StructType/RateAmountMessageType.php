<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateAmountMessageType StructType
 * @subpackage Structs
 */
class RateAmountMessageType extends AbstractStructBase
{
    /**
     * The StatusApplicationControl
     * Meta informations extracted from the WSDL
     * - documentation: Information on what the RateAmount Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     * - minOccurs: 0
     * @var mixed
     */
    public $StatusApplicationControl;
    /**
     * The Rates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Rates
     */
    public $Rates;
    /**
     * The LocatorID
     * Meta informations extracted from the WSDL
     * - documentation: Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     * - use: optional
     * @var int
     */
    public $LocatorID;
    /**
     * Constructor method for RateAmountMessageType
     * @uses RateAmountMessageType::setStatusApplicationControl()
     * @uses RateAmountMessageType::setRates()
     * @uses RateAmountMessageType::setLocatorID()
     * @param mixed $statusApplicationControl
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Rates $rates
     * @param int $locatorID
     */
    public function __construct($statusApplicationControl = null, \Devlabs91\GenericOtaHotelApiService\StructType\Rates $rates = null, $locatorID = null)
    {
        $this
            ->setStatusApplicationControl($statusApplicationControl)
            ->setRates($rates)
            ->setLocatorID($locatorID);
    }
    /**
     * Get StatusApplicationControl value
     * @return mixed|null
     */
    public function getStatusApplicationControl()
    {
        return $this->StatusApplicationControl;
    }
    /**
     * Set StatusApplicationControl value
     * @param mixed $statusApplicationControl
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateAmountMessageType
     */
    public function setStatusApplicationControl($statusApplicationControl = null)
    {
        $this->StatusApplicationControl = $statusApplicationControl;
        return $this;
    }
    /**
     * Get Rates value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rates|null
     */
    public function getRates()
    {
        return $this->Rates;
    }
    /**
     * Set Rates value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Rates $rates
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateAmountMessageType
     */
    public function setRates(\Devlabs91\GenericOtaHotelApiService\StructType\Rates $rates = null)
    {
        $this->Rates = $rates;
        return $this;
    }
    /**
     * Get LocatorID value
     * @return int|null
     */
    public function getLocatorID()
    {
        return $this->LocatorID;
    }
    /**
     * Set LocatorID value
     * @param int $locatorID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateAmountMessageType
     */
    public function setLocatorID($locatorID = null)
    {
        // validation for constraint: int
        if (!is_null($locatorID) && !is_numeric($locatorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($locatorID)), __LINE__);
        }
        $this->LocatorID = $locatorID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateAmountMessageType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehAvails StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of vehicles along with their availability and associated rate information.
 * @subpackage Structs
 */
class VehAvails extends AbstractStructBase
{
    /**
     * The VehAvail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail[]
     */
    public $VehAvail;
    /**
     * The RateCategory
     * Meta informations extracted from the WSDL
     * - documentation: The rate category for all the vehicles available. Refer to OpenTravel Code List Rate Category (RTC).
     * - use: optional
     * @var string
     */
    public $RateCategory;
    /**
     * The RatePeriod
     * Meta informations extracted from the WSDL
     * - documentation: The rate period for all the vehicles available.
     * - use: optional
     * @var string
     */
    public $RatePeriod;
    /**
     * Constructor method for VehAvails
     * @uses VehAvails::setVehAvail()
     * @uses VehAvails::setRateCategory()
     * @uses VehAvails::setRatePeriod()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail[] $vehAvail
     * @param string $rateCategory
     * @param string $ratePeriod
     */
    public function __construct(array $vehAvail = array(), $rateCategory = null, $ratePeriod = null)
    {
        $this
            ->setVehAvail($vehAvail)
            ->setRateCategory($rateCategory)
            ->setRatePeriod($ratePeriod);
    }
    /**
     * Get VehAvail value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail[]|null
     */
    public function getVehAvail()
    {
        return $this->VehAvail;
    }
    /**
     * Set VehAvail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail[] $vehAvail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails
     */
    public function setVehAvail(array $vehAvail = array())
    {
        foreach ($vehAvail as $vehAvailsVehAvailItem) {
            // validation for constraint: itemType
            if (!$vehAvailsVehAvailItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail) {
                throw new \InvalidArgumentException(sprintf('The VehAvail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail, "%s" given', is_object($vehAvailsVehAvailItem) ? get_class($vehAvailsVehAvailItem) : gettype($vehAvailsVehAvailItem)), __LINE__);
            }
        }
        $this->VehAvail = $vehAvail;
        return $this;
    }
    /**
     * Add item to VehAvail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails
     */
    public function addToVehAvail(\Devlabs91\GenericOtaHotelApiService\StructType\VehAvail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail) {
            throw new \InvalidArgumentException(sprintf('The VehAvail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VehAvail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehAvail[] = $item;
        return $this;
    }
    /**
     * Get RateCategory value
     * @return string|null
     */
    public function getRateCategory()
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param string $rateCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails
     */
    public function setRateCategory($rateCategory = null)
    {
        // validation for constraint: string
        if (!is_null($rateCategory) && !is_string($rateCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateCategory)), __LINE__);
        }
        $this->RateCategory = $rateCategory;
        return $this;
    }
    /**
     * Get RatePeriod value
     * @return string|null
     */
    public function getRatePeriod()
    {
        return $this->RatePeriod;
    }
    /**
     * Set RatePeriod value
     * @param string $ratePeriod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails
     */
    public function setRatePeriod($ratePeriod = null)
    {
        // validation for constraint: string
        if (!is_null($ratePeriod) && !is_string($ratePeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePeriod)), __LINE__);
        }
        $this->RatePeriod = $ratePeriod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails
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

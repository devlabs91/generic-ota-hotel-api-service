<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Recreations StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Recreation objects identifying the different types of recreation facilities available to the guest.
 * @subpackage Structs
 */
class Recreations extends AbstractStructBase
{
    /**
     * The Recreation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Recreation[]
     */
    public $Recreation;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when Recreations was last updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for Recreations
     * @uses Recreations::setRecreation()
     * @uses Recreations::setLastUpdated()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Recreation[] $recreation
     * @param string $lastUpdated
     */
    public function __construct(array $recreation = array(), $lastUpdated = null)
    {
        $this
            ->setRecreation($recreation)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get Recreation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreation[]|null
     */
    public function getRecreation()
    {
        return $this->Recreation;
    }
    /**
     * Set Recreation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Recreation[] $recreation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreations
     */
    public function setRecreation(array $recreation = array())
    {
        foreach ($recreation as $recreationsRecreationItem) {
            // validation for constraint: itemType
            if (!$recreationsRecreationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Recreation) {
                throw new \InvalidArgumentException(sprintf('The Recreation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Recreation, "%s" given', is_object($recreationsRecreationItem) ? get_class($recreationsRecreationItem) : gettype($recreationsRecreationItem)), __LINE__);
            }
        }
        $this->Recreation = $recreation;
        return $this;
    }
    /**
     * Add item to Recreation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Recreation $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreations
     */
    public function addToRecreation(\Devlabs91\GenericOtaHotelApiService\StructType\Recreation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Recreation) {
            throw new \InvalidArgumentException(sprintf('The Recreation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Recreation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Recreation[] = $item;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreations
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Recreations
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

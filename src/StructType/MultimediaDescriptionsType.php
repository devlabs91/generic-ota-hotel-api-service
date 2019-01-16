<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaDescriptionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains multimedia item(s).
 * @subpackage Structs
 */
class MultimediaDescriptionsType extends AbstractStructBase
{
    /**
     * The MultimediaDescription
     * Meta informations extracted from the WSDL
     * - documentation: A multimedia item.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $MultimediaDescription;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when the collection of multimedia information was last updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for MultimediaDescriptionsType
     * @uses MultimediaDescriptionsType::setMultimediaDescription()
     * @uses MultimediaDescriptionsType::setLastUpdated()
     * @param mixed[] $multimediaDescription
     * @param string $lastUpdated
     */
    public function __construct(array $multimediaDescription = array(), $lastUpdated = null)
    {
        $this
            ->setMultimediaDescription($multimediaDescription)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get MultimediaDescription value
     * @return mixed[]|null
     */
    public function getMultimediaDescription()
    {
        return $this->MultimediaDescription;
    }
    /**
     * Set MultimediaDescription value
     * @throws \InvalidArgumentException
     * @param mixed[] $multimediaDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionsType
     */
    public function setMultimediaDescription(array $multimediaDescription = array())
    {
        foreach ($multimediaDescription as $multimediaDescriptionsTypeMultimediaDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MultimediaDescription property can only contain items of anyType, "%s" given', is_object($multimediaDescriptionsTypeMultimediaDescriptionItem) ? get_class($multimediaDescriptionsTypeMultimediaDescriptionItem) : gettype($multimediaDescriptionsTypeMultimediaDescriptionItem)), __LINE__);
            }
        }
        $this->MultimediaDescription = $multimediaDescription;
        return $this;
    }
    /**
     * Add item to MultimediaDescription value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionsType
     */
    public function addToMultimediaDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The MultimediaDescription property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MultimediaDescription[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionsType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionsType
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

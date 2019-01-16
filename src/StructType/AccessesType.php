<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccessesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Element to capture creation and last update data. | Allows for control of the sharing of access data between parties.
 * @subpackage Structs
 */
class AccessesType extends AbstractStructBase
{
    /**
     * The Access
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Access[]
     */
    public $Access;
    /**
     * The CreateDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Month, day, year and optionally hour, minute, second of day the profile originated, in ISO 8601 format.
     * @var string
     */
    public $CreateDateTime;
    /**
     * Constructor method for AccessesType
     * @uses AccessesType::setAccess()
     * @uses AccessesType::setCreateDateTime()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Access[] $access
     * @param string $createDateTime
     */
    public function __construct(array $access = array(), $createDateTime = null)
    {
        $this
            ->setAccess($access)
            ->setCreateDateTime($createDateTime);
    }
    /**
     * Get Access value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Access[]|null
     */
    public function getAccess()
    {
        return $this->Access;
    }
    /**
     * Set Access value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Access[] $access
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccessesType
     */
    public function setAccess(array $access = array())
    {
        foreach ($access as $accessesTypeAccessItem) {
            // validation for constraint: itemType
            if (!$accessesTypeAccessItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Access) {
                throw new \InvalidArgumentException(sprintf('The Access property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Access, "%s" given', is_object($accessesTypeAccessItem) ? get_class($accessesTypeAccessItem) : gettype($accessesTypeAccessItem)), __LINE__);
            }
        }
        $this->Access = $access;
        return $this;
    }
    /**
     * Add item to Access value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Access $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccessesType
     */
    public function addToAccess(\Devlabs91\GenericOtaHotelApiService\StructType\Access $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Access) {
            throw new \InvalidArgumentException(sprintf('The Access property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Access, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Access[] = $item;
        return $this;
    }
    /**
     * Get CreateDateTime value
     * @return string|null
     */
    public function getCreateDateTime()
    {
        return $this->CreateDateTime;
    }
    /**
     * Set CreateDateTime value
     * @param string $createDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccessesType
     */
    public function setCreateDateTime($createDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($createDateTime) && !is_string($createDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDateTime)), __LINE__);
        }
        $this->CreateDateTime = $createDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccessesType
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

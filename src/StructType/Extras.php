<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Extras StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of requested/booked Extras. | A collection of Extras requests.
 * @subpackage Structs
 */
class Extras extends AbstractStructBase
{
    /**
     * The Extra
     * Meta informations extracted from the WSDL
     * - documentation: Describes an optional service which is not included in the standard package but has been requested in addition. | Describes an optional service which is not included in the standard package but may be booked in addition.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $Extra;
    /**
     * Constructor method for Extras
     * @uses Extras::setExtra()
     * @param mixed[] $extra
     */
    public function __construct(array $extra = array())
    {
        $this
            ->setExtra($extra);
    }
    /**
     * Get Extra value
     * @return mixed[]|null
     */
    public function getExtra()
    {
        return $this->Extra;
    }
    /**
     * Set Extra value
     * @throws \InvalidArgumentException
     * @param mixed[] $extra
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Extras
     */
    public function setExtra(array $extra = array())
    {
        foreach ($extra as $extrasExtraItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Extra property can only contain items of anyType, "%s" given', is_object($extrasExtraItem) ? get_class($extrasExtraItem) : gettype($extrasExtraItem)), __LINE__);
            }
        }
        $this->Extra = $extra;
        return $this;
    }
    /**
     * Add item to Extra value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Extras
     */
    public function addToExtra($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Extra property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Extra[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Extras
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

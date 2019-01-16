<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareBasisCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a collection of fare basis codes.
 * @subpackage Structs
 */
class FareBasisCodes extends AbstractStructBase
{
    /**
     * The FareBasisCode
     * Meta informations extracted from the WSDL
     * - documentation: Fare basis code for the price for this PTC
     * - maxOccurs: 299
     * @var mixed[]
     */
    public $FareBasisCode;
    /**
     * Constructor method for FareBasisCodes
     * @uses FareBasisCodes::setFareBasisCode()
     * @param mixed[] $fareBasisCode
     */
    public function __construct(array $fareBasisCode = array())
    {
        $this
            ->setFareBasisCode($fareBasisCode);
    }
    /**
     * Get FareBasisCode value
     * @return mixed[]|null
     */
    public function getFareBasisCode()
    {
        return $this->FareBasisCode;
    }
    /**
     * Set FareBasisCode value
     * @throws \InvalidArgumentException
     * @param mixed[] $fareBasisCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodes
     */
    public function setFareBasisCode(array $fareBasisCode = array())
    {
        foreach ($fareBasisCode as $fareBasisCodesFareBasisCodeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The FareBasisCode property can only contain items of anyType, "%s" given', is_object($fareBasisCodesFareBasisCodeItem) ? get_class($fareBasisCodesFareBasisCodeItem) : gettype($fareBasisCodesFareBasisCodeItem)), __LINE__);
            }
        }
        $this->FareBasisCode = $fareBasisCode;
        return $this;
    }
    /**
     * Add item to FareBasisCode value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodes
     */
    public function addToFareBasisCode($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The FareBasisCode property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareBasisCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodes
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The CoverageType complex type describes the data that is needed to fully describe a vehicle coverage, including the core details along with optional descriptions.
 * - type: OTA_CodeType
 * - use: required
 * @subpackage Structs
 */
class CoverageType extends AbstractStructBase
{
    /**
     * The Details
     * Meta informations extracted from the WSDL
     * - documentation: Textual information about coverage, such as coverage limit or descriptions.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Details;
    /**
     * Constructor method for CoverageType
     * @uses CoverageType::setDetails()
     * @param mixed[] $details
     */
    public function __construct(array $details = array())
    {
        $this
            ->setDetails($details);
    }
    /**
     * Get Details value
     * @return mixed[]|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @throws \InvalidArgumentException
     * @param mixed[] $details
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageType
     */
    public function setDetails(array $details = array())
    {
        foreach ($details as $coverageTypeDetailsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Details property can only contain items of anyType, "%s" given', is_object($coverageTypeDetailsItem) ? get_class($coverageTypeDetailsItem) : gettype($coverageTypeDetailsItem)), __LINE__);
            }
        }
        $this->Details = $details;
        return $this;
    }
    /**
     * Add item to Details value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageType
     */
    public function addToDetails($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Details property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Details[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageType
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

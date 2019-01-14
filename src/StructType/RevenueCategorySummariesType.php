<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueCategorySummariesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The report that sends the guest revenue statistical data and other predetermined information to a central server or management system.
 * @subpackage Structs
 */
class RevenueCategorySummariesType extends AbstractStructBase
{
    /**
     * The RevenueCategorySummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $RevenueCategorySummary;
    /**
     * Constructor method for RevenueCategorySummariesType
     * @uses RevenueCategorySummariesType::setRevenueCategorySummary()
     * @param mixed[] $revenueCategorySummary
     */
    public function __construct(array $revenueCategorySummary = array())
    {
        $this
            ->setRevenueCategorySummary($revenueCategorySummary);
    }
    /**
     * Get RevenueCategorySummary value
     * @return mixed[]|null
     */
    public function getRevenueCategorySummary()
    {
        return $this->RevenueCategorySummary;
    }
    /**
     * Set RevenueCategorySummary value
     * @throws \InvalidArgumentException
     * @param mixed[] $revenueCategorySummary
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummariesType
     */
    public function setRevenueCategorySummary(array $revenueCategorySummary = array())
    {
        foreach ($revenueCategorySummary as $revenueCategorySummariesTypeRevenueCategorySummaryItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RevenueCategorySummary property can only contain items of anyType, "%s" given', is_object($revenueCategorySummariesTypeRevenueCategorySummaryItem) ? get_class($revenueCategorySummariesTypeRevenueCategorySummaryItem) : gettype($revenueCategorySummariesTypeRevenueCategorySummaryItem)), __LINE__);
            }
        }
        $this->RevenueCategorySummary = $revenueCategorySummary;
        return $this;
    }
    /**
     * Add item to RevenueCategorySummary value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummariesType
     */
    public function addToRevenueCategorySummary($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RevenueCategorySummary property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RevenueCategorySummary[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummariesType
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

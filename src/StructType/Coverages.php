<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coverages StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of coverage, insurance and waiver liability descriptions.
 * @subpackage Structs
 */
class Coverages extends AbstractStructBase
{
    /**
     * The Coverage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Coverage[]
     */
    public $Coverage;
    /**
     * Constructor method for Coverages
     * @uses Coverages::setCoverage()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Coverage[] $coverage
     */
    public function __construct(array $coverage = array())
    {
        $this
            ->setCoverage($coverage);
    }
    /**
     * Get Coverage value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Coverage[]|null
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }
    /**
     * Set Coverage value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Coverage[] $coverage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Coverages
     */
    public function setCoverage(array $coverage = array())
    {
        foreach ($coverage as $coveragesCoverageItem) {
            // validation for constraint: itemType
            if (!$coveragesCoverageItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Coverage) {
                throw new \InvalidArgumentException(sprintf('The Coverage property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Coverage, "%s" given', is_object($coveragesCoverageItem) ? get_class($coveragesCoverageItem) : gettype($coveragesCoverageItem)), __LINE__);
            }
        }
        $this->Coverage = $coverage;
        return $this;
    }
    /**
     * Add item to Coverage value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Coverage $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Coverages
     */
    public function addToCoverage(\Devlabs91\GenericOtaHotelApiService\StructType\Coverage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Coverage) {
            throw new \InvalidArgumentException(sprintf('The Coverage property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Coverage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Coverage[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Coverages
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

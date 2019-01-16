<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveragePrefs StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the preferences for one or more types of coverage (insurance). | Indicates the preferences for one or more types of coverage (insurance).
 * @subpackage Structs
 */
class CoveragePrefs extends AbstractStructBase
{
    /**
     * The CoveragePref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 30
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePref[]
     */
    public $CoveragePref;
    /**
     * Constructor method for CoveragePrefs
     * @uses CoveragePrefs::setCoveragePref()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePref[] $coveragePref
     */
    public function __construct(array $coveragePref = array())
    {
        $this
            ->setCoveragePref($coveragePref);
    }
    /**
     * Get CoveragePref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePref[]|null
     */
    public function getCoveragePref()
    {
        return $this->CoveragePref;
    }
    /**
     * Set CoveragePref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePref[] $coveragePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs
     */
    public function setCoveragePref(array $coveragePref = array())
    {
        foreach ($coveragePref as $coveragePrefsCoveragePrefItem) {
            // validation for constraint: itemType
            if (!$coveragePrefsCoveragePrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePref) {
                throw new \InvalidArgumentException(sprintf('The CoveragePref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePref, "%s" given', is_object($coveragePrefsCoveragePrefItem) ? get_class($coveragePrefsCoveragePrefItem) : gettype($coveragePrefsCoveragePrefItem)), __LINE__);
            }
        }
        $this->CoveragePref = $coveragePref;
        return $this;
    }
    /**
     * Add item to CoveragePref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs
     */
    public function addToCoveragePref(\Devlabs91\GenericOtaHotelApiService\StructType\CoveragePref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePref) {
            throw new \InvalidArgumentException(sprintf('The CoveragePref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CoveragePref[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs
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

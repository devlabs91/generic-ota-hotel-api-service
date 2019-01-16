<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDS_Codes StructType
 * Meta informations extracted from the WSDL
 * - documentation: The element acts as a container for GDS_Code. It is used to send item for each GDS.
 * @subpackage Structs
 */
class GDS_Codes extends AbstractStructBase
{
    /**
     * The GDS_Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code[]
     */
    public $GDS_Code;
    /**
     * The LoadGDSIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, this indicates rates will be loaded to specified GDSs. This attribute is also under GDS_Code to associate the rate load for an individual GDS. (This may also be used to idicate the willingness to upload rates to GDSs even
     * if not specified in the request message.)
     * - use: optional
     * @var bool
     */
    public $LoadGDSIndicator;
    /**
     * Constructor method for GDS_Codes
     * @uses GDS_Codes::setGDS_Code()
     * @uses GDS_Codes::setLoadGDSIndicator()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code[] $gDS_Code
     * @param bool $loadGDSIndicator
     */
    public function __construct(array $gDS_Code = array(), $loadGDSIndicator = null)
    {
        $this
            ->setGDS_Code($gDS_Code)
            ->setLoadGDSIndicator($loadGDSIndicator);
    }
    /**
     * Get GDS_Code value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code[]|null
     */
    public function getGDS_Code()
    {
        return $this->GDS_Code;
    }
    /**
     * Set GDS_Code value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code[] $gDS_Code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Codes
     */
    public function setGDS_Code(array $gDS_Code = array())
    {
        foreach ($gDS_Code as $gDS_CodesGDS_CodeItem) {
            // validation for constraint: itemType
            if (!$gDS_CodesGDS_CodeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code) {
                throw new \InvalidArgumentException(sprintf('The GDS_Code property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code, "%s" given', is_object($gDS_CodesGDS_CodeItem) ? get_class($gDS_CodesGDS_CodeItem) : gettype($gDS_CodesGDS_CodeItem)), __LINE__);
            }
        }
        $this->GDS_Code = $gDS_Code;
        return $this;
    }
    /**
     * Add item to GDS_Code value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Codes
     */
    public function addToGDS_Code(\Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code) {
            throw new \InvalidArgumentException(sprintf('The GDS_Code property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GDS_Code[] = $item;
        return $this;
    }
    /**
     * Get LoadGDSIndicator value
     * @return bool|null
     */
    public function getLoadGDSIndicator()
    {
        return $this->LoadGDSIndicator;
    }
    /**
     * Set LoadGDSIndicator value
     * @param bool $loadGDSIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Codes
     */
    public function setLoadGDSIndicator($loadGDSIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($loadGDSIndicator) && !is_bool($loadGDSIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($loadGDSIndicator)), __LINE__);
        }
        $this->LoadGDSIndicator = $loadGDSIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Codes
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

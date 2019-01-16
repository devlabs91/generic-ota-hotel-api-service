<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDS_Code StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides detailed information regarding the specified GDS.
 * @subpackage Structs
 */
class GDS_Code extends AbstractStructBase
{
    /**
     * The GDS_Name
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $GDS_Name;
    /**
     * The GDS_CodeDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetails
     */
    public $GDS_CodeDetails;
    /**
     * The ChainCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ChainCode;
    /**
     * The GDS_PropertyCode
     * Meta informations extracted from the WSDL
     * - documentation: This is the GDS Property Code used to identify a specific hotel.
     * - use: optional
     * @var string
     */
    public $GDS_PropertyCode;
    /**
     * The LoadGDSIndicator
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used in conjunction with the GDS_Name. When true, this indicates rates will be loaded to the GDS specified by the GDS_Name.
     * - use: optional
     * @var bool
     */
    public $LoadGDSIndicator;
    /**
     * Constructor method for GDS_Code
     * @uses GDS_Code::setGDS_Name()
     * @uses GDS_Code::setGDS_CodeDetails()
     * @uses GDS_Code::setChainCode()
     * @uses GDS_Code::setGDS_PropertyCode()
     * @uses GDS_Code::setLoadGDSIndicator()
     * @param string $gDS_Name
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetails $gDS_CodeDetails
     * @param string $chainCode
     * @param string $gDS_PropertyCode
     * @param bool $loadGDSIndicator
     */
    public function __construct($gDS_Name = null, \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetails $gDS_CodeDetails = null, $chainCode = null, $gDS_PropertyCode = null, $loadGDSIndicator = null)
    {
        $this
            ->setGDS_Name($gDS_Name)
            ->setGDS_CodeDetails($gDS_CodeDetails)
            ->setChainCode($chainCode)
            ->setGDS_PropertyCode($gDS_PropertyCode)
            ->setLoadGDSIndicator($loadGDSIndicator);
    }
    /**
     * Get GDS_Name value
     * @return string
     */
    public function getGDS_Name()
    {
        return $this->GDS_Name;
    }
    /**
     * Set GDS_Name value
     * @param string $gDS_Name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code
     */
    public function setGDS_Name($gDS_Name = null)
    {
        // validation for constraint: string
        if (!is_null($gDS_Name) && !is_string($gDS_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gDS_Name)), __LINE__);
        }
        $this->GDS_Name = $gDS_Name;
        return $this;
    }
    /**
     * Get GDS_CodeDetails value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetails|null
     */
    public function getGDS_CodeDetails()
    {
        return $this->GDS_CodeDetails;
    }
    /**
     * Set GDS_CodeDetails value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetails $gDS_CodeDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code
     */
    public function setGDS_CodeDetails(\Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetails $gDS_CodeDetails = null)
    {
        $this->GDS_CodeDetails = $gDS_CodeDetails;
        return $this;
    }
    /**
     * Get ChainCode value
     * @return string|null
     */
    public function getChainCode()
    {
        return $this->ChainCode;
    }
    /**
     * Set ChainCode value
     * @param string $chainCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code
     */
    public function setChainCode($chainCode = null)
    {
        // validation for constraint: string
        if (!is_null($chainCode) && !is_string($chainCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainCode)), __LINE__);
        }
        $this->ChainCode = $chainCode;
        return $this;
    }
    /**
     * Get GDS_PropertyCode value
     * @return string|null
     */
    public function getGDS_PropertyCode()
    {
        return $this->GDS_PropertyCode;
    }
    /**
     * Set GDS_PropertyCode value
     * @param string $gDS_PropertyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code
     */
    public function setGDS_PropertyCode($gDS_PropertyCode = null)
    {
        // validation for constraint: string
        if (!is_null($gDS_PropertyCode) && !is_string($gDS_PropertyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gDS_PropertyCode)), __LINE__);
        }
        $this->GDS_PropertyCode = $gDS_PropertyCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Code
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

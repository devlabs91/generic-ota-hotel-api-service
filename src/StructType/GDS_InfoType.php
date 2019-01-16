<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDS_InfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This defines codes used by individual GDS's, which can be used to upload rate information.
 * @subpackage Structs
 */
class GDS_InfoType extends AbstractStructBase
{
    /**
     * The GDS_Codes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Codes
     */
    public $GDS_Codes;
    /**
     * The MasterChainCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MasterChainCode;
    /**
     * Constructor method for GDS_InfoType
     * @uses GDS_InfoType::setGDS_Codes()
     * @uses GDS_InfoType::setMasterChainCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Codes $gDS_Codes
     * @param string $masterChainCode
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\GDS_Codes $gDS_Codes = null, $masterChainCode = null)
    {
        $this
            ->setGDS_Codes($gDS_Codes)
            ->setMasterChainCode($masterChainCode);
    }
    /**
     * Get GDS_Codes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Codes|null
     */
    public function getGDS_Codes()
    {
        return $this->GDS_Codes;
    }
    /**
     * Set GDS_Codes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GDS_Codes $gDS_Codes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_InfoType
     */
    public function setGDS_Codes(\Devlabs91\GenericOtaHotelApiService\StructType\GDS_Codes $gDS_Codes = null)
    {
        $this->GDS_Codes = $gDS_Codes;
        return $this;
    }
    /**
     * Get MasterChainCode value
     * @return string|null
     */
    public function getMasterChainCode()
    {
        return $this->MasterChainCode;
    }
    /**
     * Set MasterChainCode value
     * @param string $masterChainCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_InfoType
     */
    public function setMasterChainCode($masterChainCode = null)
    {
        // validation for constraint: string
        if (!is_null($masterChainCode) && !is_string($masterChainCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masterChainCode)), __LINE__);
        }
        $this->MasterChainCode = $masterChainCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_InfoType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViewershipCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Viewship codes
 * @subpackage Structs
 */
class ViewershipCodes extends AbstractStructBase
{
    /**
     * The ViewershipCode
     * Meta informations extracted from the WSDL
     * - documentation: The viewership code (e.g. pseudo-city code).
     * @var string
     */
    public $ViewershipCode;
    /**
     * Constructor method for ViewershipCodes
     * @uses ViewershipCodes::setViewershipCode()
     * @param string $viewershipCode
     */
    public function __construct($viewershipCode = null)
    {
        $this
            ->setViewershipCode($viewershipCode);
    }
    /**
     * Get ViewershipCode value
     * @return string|null
     */
    public function getViewershipCode()
    {
        return $this->ViewershipCode;
    }
    /**
     * Set ViewershipCode value
     * @param string $viewershipCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ViewershipCodes
     */
    public function setViewershipCode($viewershipCode = null)
    {
        // validation for constraint: string
        if (!is_null($viewershipCode) && !is_string($viewershipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($viewershipCode)), __LINE__);
        }
        $this->ViewershipCode = $viewershipCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ViewershipCodes
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

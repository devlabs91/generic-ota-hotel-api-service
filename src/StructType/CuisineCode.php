<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CuisineCode StructType
 * Meta informations extracted from the WSDL
 * - documentation: The code for the type of cuisine served at the restaurant. | May be used to give further detail on the code or to remove an obsolete item.
 * @subpackage Structs
 */
class CuisineCode extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Main Cuisine Code (CUI).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The IsMain
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this cuisine code is the main cuisine offered by restaurant.
     * - use: optional
     * @var bool
     */
    public $IsMain;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether the Code applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Code.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * Constructor method for CuisineCode
     * @uses CuisineCode::setCode()
     * @uses CuisineCode::setIsMain()
     * @uses CuisineCode::setExistsCode()
     * @param string $code
     * @param bool $isMain
     * @param string $existsCode
     */
    public function __construct($code = null, $isMain = null, $existsCode = null)
    {
        $this
            ->setCode($code)
            ->setIsMain($isMain)
            ->setExistsCode($existsCode);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCode
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get IsMain value
     * @return bool|null
     */
    public function getIsMain()
    {
        return $this->IsMain;
    }
    /**
     * Set IsMain value
     * @param bool $isMain
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCode
     */
    public function setIsMain($isMain = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMain) && !is_bool($isMain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMain)), __LINE__);
        }
        $this->IsMain = $isMain;
        return $this;
    }
    /**
     * Get ExistsCode value
     * @return string|null
     */
    public function getExistsCode()
    {
        return $this->ExistsCode;
    }
    /**
     * Set ExistsCode value
     * @param string $existsCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCode
     */
    public function setExistsCode($existsCode = null)
    {
        // validation for constraint: string
        if (!is_null($existsCode) && !is_string($existsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($existsCode)), __LINE__);
        }
        $this->ExistsCode = $existsCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CuisineCode
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

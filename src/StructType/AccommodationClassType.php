<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccommodationClassType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Rating of an accommodation property.
 * @subpackage Structs
 */
class AccommodationClassType extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Providers rating eg '4'.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Providers qualifier name e.g. 'Crowns'.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The NationalCode
     * Meta informations extracted from the WSDL
     * - documentation: Official rating e.g. '4'.
     * - use: optional
     * @var string
     */
    public $NationalCode;
    /**
     * The OfficialName
     * Meta informations extracted from the WSDL
     * - documentation: Official qualifier name eg 'STAR'.
     * - use: optional
     * @var string
     */
    public $OfficialName;
    /**
     * Constructor method for AccommodationClassType
     * @uses AccommodationClassType::setCode()
     * @uses AccommodationClassType::setName()
     * @uses AccommodationClassType::setNationalCode()
     * @uses AccommodationClassType::setOfficialName()
     * @param string $code
     * @param string $name
     * @param string $nationalCode
     * @param string $officialName
     */
    public function __construct($code = null, $name = null, $nationalCode = null, $officialName = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setNationalCode($nationalCode)
            ->setOfficialName($officialName);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClassType
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClassType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NationalCode value
     * @return string|null
     */
    public function getNationalCode()
    {
        return $this->NationalCode;
    }
    /**
     * Set NationalCode value
     * @param string $nationalCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClassType
     */
    public function setNationalCode($nationalCode = null)
    {
        // validation for constraint: string
        if (!is_null($nationalCode) && !is_string($nationalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nationalCode)), __LINE__);
        }
        $this->NationalCode = $nationalCode;
        return $this;
    }
    /**
     * Get OfficialName value
     * @return string|null
     */
    public function getOfficialName()
    {
        return $this->OfficialName;
    }
    /**
     * Set OfficialName value
     * @param string $officialName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClassType
     */
    public function setOfficialName($officialName = null)
    {
        // validation for constraint: string
        if (!is_null($officialName) && !is_string($officialName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($officialName)), __LINE__);
        }
        $this->OfficialName = $officialName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationClassType
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

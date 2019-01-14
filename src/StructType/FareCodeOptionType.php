<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareCodeOptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies fare option info.
 * @subpackage Structs
 */
class FareCodeOptionType extends AbstractStructBase
{
    /**
     * The FareRemark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareRemark
     */
    public $FareRemark;
    /**
     * The ListOfFareQualifierCode
     * Meta informations extracted from the WSDL
     * - documentation: Specify the type of fare. For example it could specify that the fare applies to a past passenger. Refer to OpenTravel Code table Fare Qualifier (FQC).
     * - use: optional
     * @var string
     */
    public $ListOfFareQualifierCode;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the status of the fare. Refer to OpenTravel Code table Status (STS).
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * The FareDescription
     * Meta informations extracted from the WSDL
     * - documentation: Contains a description of the fare.
     * - use: optional
     * @var string
     */
    public $FareDescription;
    /**
     * Constructor method for FareCodeOptionType
     * @uses FareCodeOptionType::setFareRemark()
     * @uses FareCodeOptionType::setListOfFareQualifierCode()
     * @uses FareCodeOptionType::setStatus()
     * @uses FareCodeOptionType::setFareDescription()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareRemark $fareRemark
     * @param string $listOfFareQualifierCode
     * @param string $status
     * @param string $fareDescription
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\FareRemark $fareRemark = null, $listOfFareQualifierCode = null, $status = null, $fareDescription = null)
    {
        $this
            ->setFareRemark($fareRemark)
            ->setListOfFareQualifierCode($listOfFareQualifierCode)
            ->setStatus($status)
            ->setFareDescription($fareDescription);
    }
    /**
     * Get FareRemark value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRemark|null
     */
    public function getFareRemark()
    {
        return $this->FareRemark;
    }
    /**
     * Set FareRemark value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareRemark $fareRemark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareCodeOptionType
     */
    public function setFareRemark(\Devlabs91\GenericOtaHotelApiService\StructType\FareRemark $fareRemark = null)
    {
        $this->FareRemark = $fareRemark;
        return $this;
    }
    /**
     * Get ListOfFareQualifierCode value
     * @return string|null
     */
    public function getListOfFareQualifierCode()
    {
        return $this->ListOfFareQualifierCode;
    }
    /**
     * Set ListOfFareQualifierCode value
     * @param string $listOfFareQualifierCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareCodeOptionType
     */
    public function setListOfFareQualifierCode($listOfFareQualifierCode = null)
    {
        // validation for constraint: string
        if (!is_null($listOfFareQualifierCode) && !is_string($listOfFareQualifierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfFareQualifierCode)), __LINE__);
        }
        $this->ListOfFareQualifierCode = $listOfFareQualifierCode;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareCodeOptionType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get FareDescription value
     * @return string|null
     */
    public function getFareDescription()
    {
        return $this->FareDescription;
    }
    /**
     * Set FareDescription value
     * @param string $fareDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareCodeOptionType
     */
    public function setFareDescription($fareDescription = null)
    {
        // validation for constraint: string
        if (!is_null($fareDescription) && !is_string($fareDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareDescription)), __LINE__);
        }
        $this->FareDescription = $fareDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareCodeOptionType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRoomInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: The types and quantities of guest rooms at a hotel. | May be used to give further detail on the code (e.g. if the code refers to the number of free standing units, information about the free standing units may be passed such as
 * cabins, cottages, etc.) or to remove an obsolete item.
 * @subpackage Structs
 */
class GuestRoomInfo extends AbstractStructBase
{
    /**
     * The RateRanges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateRanges
     */
    public $RateRanges;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Multimedia information about the guest room.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive text that describes the guest room.
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Guest Room Info (GRI).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $Quantity;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether the Code applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Code.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * Constructor method for GuestRoomInfo
     * @uses GuestRoomInfo::setRateRanges()
     * @uses GuestRoomInfo::setMultimediaDescriptions()
     * @uses GuestRoomInfo::setDescriptiveText()
     * @uses GuestRoomInfo::setCode()
     * @uses GuestRoomInfo::setQuantity()
     * @uses GuestRoomInfo::setExistsCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRanges $rateRanges
     * @param mixed $multimediaDescriptions
     * @param string $descriptiveText
     * @param string $code
     * @param int $quantity
     * @param string $existsCode
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\RateRanges $rateRanges = null, $multimediaDescriptions = null, $descriptiveText = null, $code = null, $quantity = null, $existsCode = null)
    {
        $this
            ->setRateRanges($rateRanges)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setDescriptiveText($descriptiveText)
            ->setCode($code)
            ->setQuantity($quantity)
            ->setExistsCode($existsCode);
    }
    /**
     * Get RateRanges value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRanges|null
     */
    public function getRateRanges()
    {
        return $this->RateRanges;
    }
    /**
     * Set RateRanges value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRanges $rateRanges
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
     */
    public function setRateRanges(\Devlabs91\GenericOtaHotelApiService\StructType\RateRanges $rateRanges = null)
    {
        $this->RateRanges = $rateRanges;
        return $this;
    }
    /**
     * Get MultimediaDescriptions value
     * @return mixed|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param mixed $multimediaDescriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get DescriptiveText value
     * @return string|null
     */
    public function getDescriptiveText()
    {
        return $this->DescriptiveText;
    }
    /**
     * Set DescriptiveText value
     * @param string $descriptiveText
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
     */
    public function setDescriptiveText($descriptiveText = null)
    {
        // validation for constraint: string
        if (!is_null($descriptiveText) && !is_string($descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptiveText)), __LINE__);
        }
        $this->DescriptiveText = $descriptiveText;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
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
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
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

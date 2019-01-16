<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingRoomCodeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: May be used to give further detail on the code or to remove an obsolete item. | A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a
 * particular implementation.
 * @subpackage Structs
 */
class MeetingRoomCodeType extends AbstractStructBase
{
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - documentation: The minimum charge for this meeting room code.
     * - minOccurs: 0
     * @var mixed
     */
    public $Charge;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: This is used to define items that may be available for any of the meeting rooms. Refer to OpenTravel Code List Meeting Room Code (MRC).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Code.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * The DiscountsAvailableCode
     * Meta informations extracted from the WSDL
     * - documentation: This is used for discounts that apply to meetings (eg. corporate, military). Refer to OpenTravel Code List Discounts Available (DIS).
     * - use: optional
     * @var string
     */
    public $DiscountsAvailableCode;
    /**
     * Constructor method for MeetingRoomCodeType
     * @uses MeetingRoomCodeType::setCharge()
     * @uses MeetingRoomCodeType::setMultimediaDescriptions()
     * @uses MeetingRoomCodeType::setCode()
     * @uses MeetingRoomCodeType::setExistsCode()
     * @uses MeetingRoomCodeType::setDiscountsAvailableCode()
     * @param mixed $charge
     * @param mixed $multimediaDescriptions
     * @param string $code
     * @param string $existsCode
     * @param string $discountsAvailableCode
     */
    public function __construct($charge = null, $multimediaDescriptions = null, $code = null, $existsCode = null, $discountsAvailableCode = null)
    {
        $this
            ->setCharge($charge)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setCode($code)
            ->setExistsCode($existsCode)
            ->setDiscountsAvailableCode($discountsAvailableCode);
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomCodeType
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomCodeType
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomCodeType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomCodeType
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
     * Get DiscountsAvailableCode value
     * @return string|null
     */
    public function getDiscountsAvailableCode()
    {
        return $this->DiscountsAvailableCode;
    }
    /**
     * Set DiscountsAvailableCode value
     * @param string $discountsAvailableCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomCodeType
     */
    public function setDiscountsAvailableCode($discountsAvailableCode = null)
    {
        // validation for constraint: string
        if (!is_null($discountsAvailableCode) && !is_string($discountsAvailableCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountsAvailableCode)), __LINE__);
        }
        $this->DiscountsAvailableCode = $discountsAvailableCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomCodeType
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

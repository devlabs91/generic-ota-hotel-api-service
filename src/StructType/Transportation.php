<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transportation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Detailed transportation information. | May be used to give further detail on the code (e.g. if a trolley is chosen, the trolley name could be added here) or to remove an obsolete item. | The currency amount of the tranportation
 * charge. | A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation. | Identifies transportation facilities.
 * @subpackage Structs
 */
class Transportation extends AbstractStructBase
{
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Multimedia information about the transportation.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - documentation: Collection of operation schedules for the transportation.
     * - minOccurs: 0
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Descriptive text that describes the restaurant. | Descriptive text that describes the transportation. | Descriptive text that describes the feature.
     * - pattern: [A-Za-z0-9]{1,500}
     * @var string
     */
    public $DescriptiveText;
    /**
     * The NotificationRequired
     * Meta informations extracted from the WSDL
     * - documentation: This would be used for information such as a shuttle needs to be requested or a reservation is required.
     * - use: optional
     * @var string
     */
    public $NotificationRequired;
    /**
     * The TransportationCode
     * Meta informations extracted from the WSDL
     * - documentation: The mode of transportation. Refer to OpenTravel Code List Transportation Code (TRP).
     * - use: optional
     * @var string
     */
    public $TransportationCode;
    /**
     * The ChargeUnit
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Codelist Charge Type (CHG).
     * - use: optional
     * @var string
     */
    public $ChargeUnit;
    /**
     * The Included
     * Meta informations extracted from the WSDL
     * - documentation: When true there is no additional charge for transportation.
     * - use: optional
     * @var bool
     */
    public $Included;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive information about the mode of transportation.
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The TypicalTravelTime
     * Meta informations extracted from the WSDL
     * - documentation: The normal (average) travel time required to get to or from the location, measured in minutes.
     * - use: optional
     * @var string
     */
    public $TypicalTravelTime;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether the type of transportation applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with TransportationCode.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Any code used to specify an item, for example, type of traveler, service code, room amenity, etc. | Used to define the mode of available transportation. Refer to OpenTravel Code List Transportation Code (TRP).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for Transportation
     * @uses Transportation::setMultimediaDescriptions()
     * @uses Transportation::setOperationSchedules()
     * @uses Transportation::setDescriptiveText()
     * @uses Transportation::setNotificationRequired()
     * @uses Transportation::setTransportationCode()
     * @uses Transportation::setChargeUnit()
     * @uses Transportation::setIncluded()
     * @uses Transportation::setDescription()
     * @uses Transportation::setTypicalTravelTime()
     * @uses Transportation::setExistsCode()
     * @uses Transportation::setCode()
     * @param mixed $multimediaDescriptions
     * @param mixed $operationSchedules
     * @param string $descriptiveText
     * @param string $notificationRequired
     * @param string $transportationCode
     * @param string $chargeUnit
     * @param bool $included
     * @param string $description
     * @param string $typicalTravelTime
     * @param string $existsCode
     * @param string $code
     */
    public function __construct($multimediaDescriptions = null, $operationSchedules = null, $descriptiveText = null, $notificationRequired = null, $transportationCode = null, $chargeUnit = null, $included = null, $description = null, $typicalTravelTime = null, $existsCode = null, $code = null)
    {
        $this
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setOperationSchedules($operationSchedules)
            ->setDescriptiveText($descriptiveText)
            ->setNotificationRequired($notificationRequired)
            ->setTransportationCode($transportationCode)
            ->setChargeUnit($chargeUnit)
            ->setIncluded($included)
            ->setDescription($description)
            ->setTypicalTravelTime($typicalTravelTime)
            ->setExistsCode($existsCode)
            ->setCode($code);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return mixed|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param mixed $operationSchedules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setDescriptiveText($descriptiveText = null)
    {
        // validation for constraint: pattern
        if (is_scalar($descriptiveText) && !preg_match('/[A-Za-z0-9]{1,500}/', $descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Za-z0-9]{1,500}", "%s" given', var_export($descriptiveText, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($descriptiveText) && !is_string($descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptiveText)), __LINE__);
        }
        $this->DescriptiveText = $descriptiveText;
        return $this;
    }
    /**
     * Get NotificationRequired value
     * @return string|null
     */
    public function getNotificationRequired()
    {
        return $this->NotificationRequired;
    }
    /**
     * Set NotificationRequired value
     * @param string $notificationRequired
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setNotificationRequired($notificationRequired = null)
    {
        // validation for constraint: string
        if (!is_null($notificationRequired) && !is_string($notificationRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notificationRequired)), __LINE__);
        }
        $this->NotificationRequired = $notificationRequired;
        return $this;
    }
    /**
     * Get TransportationCode value
     * @return string|null
     */
    public function getTransportationCode()
    {
        return $this->TransportationCode;
    }
    /**
     * Set TransportationCode value
     * @param string $transportationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setTransportationCode($transportationCode = null)
    {
        // validation for constraint: string
        if (!is_null($transportationCode) && !is_string($transportationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transportationCode)), __LINE__);
        }
        $this->TransportationCode = $transportationCode;
        return $this;
    }
    /**
     * Get ChargeUnit value
     * @return string|null
     */
    public function getChargeUnit()
    {
        return $this->ChargeUnit;
    }
    /**
     * Set ChargeUnit value
     * @param string $chargeUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setChargeUnit($chargeUnit = null)
    {
        // validation for constraint: string
        if (!is_null($chargeUnit) && !is_string($chargeUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeUnit)), __LINE__);
        }
        $this->ChargeUnit = $chargeUnit;
        return $this;
    }
    /**
     * Get Included value
     * @return bool|null
     */
    public function getIncluded()
    {
        return $this->Included;
    }
    /**
     * Set Included value
     * @param bool $included
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setIncluded($included = null)
    {
        // validation for constraint: boolean
        if (!is_null($included) && !is_bool($included)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($included)), __LINE__);
        }
        $this->Included = $included;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get TypicalTravelTime value
     * @return string|null
     */
    public function getTypicalTravelTime()
    {
        return $this->TypicalTravelTime;
    }
    /**
     * Set TypicalTravelTime value
     * @param string $typicalTravelTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
     */
    public function setTypicalTravelTime($typicalTravelTime = null)
    {
        // validation for constraint: string
        if (!is_null($typicalTravelTime) && !is_string($typicalTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typicalTravelTime)), __LINE__);
        }
        $this->TypicalTravelTime = $typicalTravelTime;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation
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

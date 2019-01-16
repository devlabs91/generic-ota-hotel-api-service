<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtrasType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Requests an optional service which is not included in the standard package but may be booked in addition.
 * @subpackage Structs
 */
class ExtrasType extends ExtrasCoreType
{
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the date and/or duration for the option
     * - minOccurs: 0
     * @var mixed
     */
    public $Date;
    /**
     * The PassengerCounts
     * Meta informations extracted from the WSDL
     * - documentation: Counts of the number of passengers in age categories. Used when individual passenger identification is not required.
     * - minOccurs: 0
     * @var mixed
     */
    public $PassengerCounts;
    /**
     * The AdditionalInfo
     * Meta informations extracted from the WSDL
     * - documentation: Additional textual information is sometimes required when an option is selected.
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalInfo;
    /**
     * The ListOfPassengerRPH
     * Meta informations extracted from the WSDL
     * - documentation: Where an option is applicable only to certain passengers, this attribute will contain the ReferencePlaceHolders of the relevant passengers.
     * - use: optional
     * @var string
     */
    public $ListOfPassengerRPH;
    /**
     * Constructor method for ExtrasType
     * @uses ExtrasType::setDate()
     * @uses ExtrasType::setPassengerCounts()
     * @uses ExtrasType::setAdditionalInfo()
     * @uses ExtrasType::setListOfPassengerRPH()
     * @param mixed $date
     * @param mixed $passengerCounts
     * @param string $additionalInfo
     * @param string $listOfPassengerRPH
     */
    public function __construct($date = null, $passengerCounts = null, $additionalInfo = null, $listOfPassengerRPH = null)
    {
        $this
            ->setDate($date)
            ->setPassengerCounts($passengerCounts)
            ->setAdditionalInfo($additionalInfo)
            ->setListOfPassengerRPH($listOfPassengerRPH);
    }
    /**
     * Get Date value
     * @return mixed|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param mixed $date
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasType
     */
    public function setDate($date = null)
    {
        $this->Date = $date;
        return $this;
    }
    /**
     * Get PassengerCounts value
     * @return mixed|null
     */
    public function getPassengerCounts()
    {
        return $this->PassengerCounts;
    }
    /**
     * Set PassengerCounts value
     * @param mixed $passengerCounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasType
     */
    public function setPassengerCounts($passengerCounts = null)
    {
        $this->PassengerCounts = $passengerCounts;
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return string|null
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param string $additionalInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasType
     */
    public function setAdditionalInfo($additionalInfo = null)
    {
        // validation for constraint: string
        if (!is_null($additionalInfo) && !is_string($additionalInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalInfo)), __LINE__);
        }
        $this->AdditionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * Get ListOfPassengerRPH value
     * @return string|null
     */
    public function getListOfPassengerRPH()
    {
        return $this->ListOfPassengerRPH;
    }
    /**
     * Set ListOfPassengerRPH value
     * @param string $listOfPassengerRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasType
     */
    public function setListOfPassengerRPH($listOfPassengerRPH = null)
    {
        // validation for constraint: string
        if (!is_null($listOfPassengerRPH) && !is_string($listOfPassengerRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfPassengerRPH)), __LINE__);
        }
        $this->ListOfPassengerRPH = $listOfPassengerRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExtrasType
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

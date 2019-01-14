<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SailingBaseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines base sailing information.
 * @subpackage Structs
 */
class SailingBaseType extends AbstractStructBase
{
    /**
     * The CruiseLine
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CruiseLine
     */
    public $CruiseLine;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Region
     */
    public $Region;
    /**
     * The DeparturePort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DeparturePort
     */
    public $DeparturePort;
    /**
     * The ArrivalPort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPort
     */
    public $ArrivalPort;
    /**
     * The ListOfSailingDescriptionCode
     * Meta informations extracted from the WSDL
     * - documentation: Different qualifiers of the sailing (e.g., groups exist on this sailing; inclusive packages available; or no itinerary description available). Refer to OpenTravel Code Table Sailing Description Code (SAI).
     * - use: optional
     * @var string
     */
    public $ListOfSailingDescriptionCode;
    /**
     * Constructor method for SailingBaseType
     * @uses SailingBaseType::setCruiseLine()
     * @uses SailingBaseType::setRegion()
     * @uses SailingBaseType::setDeparturePort()
     * @uses SailingBaseType::setArrivalPort()
     * @uses SailingBaseType::setListOfSailingDescriptionCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CruiseLine $cruiseLine
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Region $region
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DeparturePort $departurePort
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPort $arrivalPort
     * @param string $listOfSailingDescriptionCode
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\CruiseLine $cruiseLine = null, \Devlabs91\GenericOtaHotelApiService\StructType\Region $region = null, \Devlabs91\GenericOtaHotelApiService\StructType\DeparturePort $departurePort = null, \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPort $arrivalPort = null, $listOfSailingDescriptionCode = null)
    {
        $this
            ->setCruiseLine($cruiseLine)
            ->setRegion($region)
            ->setDeparturePort($departurePort)
            ->setArrivalPort($arrivalPort)
            ->setListOfSailingDescriptionCode($listOfSailingDescriptionCode);
    }
    /**
     * Get CruiseLine value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseLine|null
     */
    public function getCruiseLine()
    {
        return $this->CruiseLine;
    }
    /**
     * Set CruiseLine value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CruiseLine $cruiseLine
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingBaseType
     */
    public function setCruiseLine(\Devlabs91\GenericOtaHotelApiService\StructType\CruiseLine $cruiseLine = null)
    {
        $this->CruiseLine = $cruiseLine;
        return $this;
    }
    /**
     * Get Region value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Region|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Region $region
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingBaseType
     */
    public function setRegion(\Devlabs91\GenericOtaHotelApiService\StructType\Region $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Get DeparturePort value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeparturePort|null
     */
    public function getDeparturePort()
    {
        return $this->DeparturePort;
    }
    /**
     * Set DeparturePort value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DeparturePort $departurePort
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingBaseType
     */
    public function setDeparturePort(\Devlabs91\GenericOtaHotelApiService\StructType\DeparturePort $departurePort = null)
    {
        $this->DeparturePort = $departurePort;
        return $this;
    }
    /**
     * Get ArrivalPort value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPort|null
     */
    public function getArrivalPort()
    {
        return $this->ArrivalPort;
    }
    /**
     * Set ArrivalPort value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPort $arrivalPort
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingBaseType
     */
    public function setArrivalPort(\Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPort $arrivalPort = null)
    {
        $this->ArrivalPort = $arrivalPort;
        return $this;
    }
    /**
     * Get ListOfSailingDescriptionCode value
     * @return string|null
     */
    public function getListOfSailingDescriptionCode()
    {
        return $this->ListOfSailingDescriptionCode;
    }
    /**
     * Set ListOfSailingDescriptionCode value
     * @param string $listOfSailingDescriptionCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingBaseType
     */
    public function setListOfSailingDescriptionCode($listOfSailingDescriptionCode = null)
    {
        // validation for constraint: string
        if (!is_null($listOfSailingDescriptionCode) && !is_string($listOfSailingDescriptionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfSailingDescriptionCode)), __LINE__);
        }
        $this->ListOfSailingDescriptionCode = $listOfSailingDescriptionCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingBaseType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccommodationDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides accommodation location, dates and classifications | The Start date and Duration or End Date of the accommodation stay.
 * @subpackage Structs
 */
class AccommodationDetailType extends AccommodationInfoType
{
    /**
     * The FacilityChoices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $FacilityChoices;
    /**
     * The BedQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of available beds for the stay at a property.
     * - use: optional
     * @var string
     */
    public $BedQuantity;
    /**
     * The TravelOKFlag
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate whether or not the travel associated with the package is available with this accommodation.
     * - use: optional
     * @var bool
     */
    public $TravelOKFlag;
    /**
     * Constructor method for AccommodationDetailType
     * @uses AccommodationDetailType::setFacilityChoices()
     * @uses AccommodationDetailType::setBedQuantity()
     * @uses AccommodationDetailType::setTravelOKFlag()
     * @param mixed $facilityChoices
     * @param string $bedQuantity
     * @param bool $travelOKFlag
     */
    public function __construct($facilityChoices = null, $bedQuantity = null, $travelOKFlag = null)
    {
        $this
            ->setFacilityChoices($facilityChoices)
            ->setBedQuantity($bedQuantity)
            ->setTravelOKFlag($travelOKFlag);
    }
    /**
     * Get FacilityChoices value
     * @return mixed|null
     */
    public function getFacilityChoices()
    {
        return $this->FacilityChoices;
    }
    /**
     * Set FacilityChoices value
     * @param mixed $facilityChoices
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setFacilityChoices($facilityChoices = null)
    {
        $this->FacilityChoices = $facilityChoices;
        return $this;
    }
    /**
     * Get BedQuantity value
     * @return string|null
     */
    public function getBedQuantity()
    {
        return $this->BedQuantity;
    }
    /**
     * Set BedQuantity value
     * @param string $bedQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setBedQuantity($bedQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($bedQuantity) && !is_string($bedQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bedQuantity)), __LINE__);
        }
        $this->BedQuantity = $bedQuantity;
        return $this;
    }
    /**
     * Get TravelOKFlag value
     * @return bool|null
     */
    public function getTravelOKFlag()
    {
        return $this->TravelOKFlag;
    }
    /**
     * Set TravelOKFlag value
     * @param bool $travelOKFlag
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
     */
    public function setTravelOKFlag($travelOKFlag = null)
    {
        // validation for constraint: boolean
        if (!is_null($travelOKFlag) && !is_bool($travelOKFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($travelOKFlag)), __LINE__);
        }
        $this->TravelOKFlag = $travelOKFlag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccommodationDetailType
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

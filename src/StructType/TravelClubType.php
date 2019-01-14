<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelClubType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a travel club that offers special privileges and related services.
 * @subpackage Structs
 */
class TravelClubType extends AbstractStructBase
{
    /**
     * The TravelClubName
     * @var mixed
     */
    public $TravelClubName;
    /**
     * The ClubMemberName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ClubMemberName
     */
    public $ClubMemberName;
    /**
     * Constructor method for TravelClubType
     * @uses TravelClubType::setTravelClubName()
     * @uses TravelClubType::setClubMemberName()
     * @param mixed $travelClubName
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ClubMemberName $clubMemberName
     */
    public function __construct($travelClubName = null, \Devlabs91\GenericOtaHotelApiService\StructType\ClubMemberName $clubMemberName = null)
    {
        $this
            ->setTravelClubName($travelClubName)
            ->setClubMemberName($clubMemberName);
    }
    /**
     * Get TravelClubName value
     * @return mixed|null
     */
    public function getTravelClubName()
    {
        return $this->TravelClubName;
    }
    /**
     * Set TravelClubName value
     * @param mixed $travelClubName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelClubType
     */
    public function setTravelClubName($travelClubName = null)
    {
        $this->TravelClubName = $travelClubName;
        return $this;
    }
    /**
     * Get ClubMemberName value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ClubMemberName|null
     */
    public function getClubMemberName()
    {
        return $this->ClubMemberName;
    }
    /**
     * Set ClubMemberName value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ClubMemberName $clubMemberName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelClubType
     */
    public function setClubMemberName(\Devlabs91\GenericOtaHotelApiService\StructType\ClubMemberName $clubMemberName = null)
    {
        $this->ClubMemberName = $clubMemberName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelClubType
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

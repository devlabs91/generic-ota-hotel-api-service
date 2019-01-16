<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerRPHs StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of individual passengers - may be used instead of CustomerCounts. | Details of individual passengers in a room; may be used instead of GuestCounts.
 * @subpackage Structs
 */
class PassengerRPHs extends AbstractStructBase
{
    /**
     * The ListOfPassengerRPH
     * Meta informations extracted from the WSDL
     * - documentation: Where an option is applicable only to certain passengers, this attribute will contain the ReferencePlaceHolders of the relevant passengers. | Where an option is applicable only to certain passengers, this attribute will contain the
     * ReferencePlaceHolders of the relevant passengers.
     * - use: optional
     * @var string
     */
    public $ListOfPassengerRPH;
    /**
     * Constructor method for PassengerRPHs
     * @uses PassengerRPHs::setListOfPassengerRPH()
     * @param string $listOfPassengerRPH
     */
    public function __construct($listOfPassengerRPH = null)
    {
        $this
            ->setListOfPassengerRPH($listOfPassengerRPH);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PassengerRPHs
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PassengerRPHs
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Verification StructType
 * Meta informations extracted from the WSDL
 * - documentation: The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
 * @subpackage Structs
 */
class Verification extends VerificationType
{
    /**
     * The CurrentStateReservation
     * Meta informations extracted from the WSDL
     * - documentation: Premodification copy of the hotel reservation.
     * - minOccurs: 0
     * @var mixed
     */
    public $CurrentStateReservation;
    /**
     * Constructor method for Verification
     * @uses Verification::setCurrentStateReservation()
     * @param mixed $currentStateReservation
     */
    public function __construct($currentStateReservation = null)
    {
        $this
            ->setCurrentStateReservation($currentStateReservation);
    }
    /**
     * Get CurrentStateReservation value
     * @return mixed|null
     */
    public function getCurrentStateReservation()
    {
        return $this->CurrentStateReservation;
    }
    /**
     * Set CurrentStateReservation value
     * @param mixed $currentStateReservation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Verification
     */
    public function setCurrentStateReservation($currentStateReservation = null)
    {
        $this->CurrentStateReservation = $currentStateReservation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Verification
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

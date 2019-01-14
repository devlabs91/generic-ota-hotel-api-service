<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResModify StructType
 * Meta informations extracted from the WSDL
 * - documentation: A full overlay of reservation information containing the modified data.
 * @subpackage Structs
 */
class HotelResModify extends HotelReservationType
{
    /**
     * The Verification
     * Meta informations extracted from the WSDL
     * - documentation: The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify to ensure the correct reservation is being modified).
     * - minOccurs: 0
     * @var mixed
     */
    public $Verification;
    /**
     * Constructor method for HotelResModify
     * @uses HotelResModify::setVerification()
     * @param mixed $verification
     */
    public function __construct($verification = null)
    {
        $this
            ->setVerification($verification);
    }
    /**
     * Get Verification value
     * @return mixed|null
     */
    public function getVerification()
    {
        return $this->Verification;
    }
    /**
     * Set Verification value
     * @param mixed $verification
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModify
     */
    public function setVerification($verification = null)
    {
        $this->Verification = $verification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModify
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

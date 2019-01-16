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
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Verification[]
     */
    public $Verification;
    /**
     * Constructor method for HotelResModify
     * @uses HotelResModify::setVerification()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Verification[] $verification
     */
    public function __construct(array $verification = array())
    {
        $this
            ->setVerification($verification);
    }
    /**
     * Get Verification value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Verification[]|null
     */
    public function getVerification()
    {
        return $this->Verification;
    }
    /**
     * Set Verification value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Verification[] $verification
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModify
     */
    public function setVerification(array $verification = array())
    {
        foreach ($verification as $hotelResModifyVerificationItem) {
            // validation for constraint: itemType
            if (!$hotelResModifyVerificationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Verification) {
                throw new \InvalidArgumentException(sprintf('The Verification property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Verification, "%s" given', is_object($hotelResModifyVerificationItem) ? get_class($hotelResModifyVerificationItem) : gettype($hotelResModifyVerificationItem)), __LINE__);
            }
        }
        $this->Verification = $verification;
        return $this;
    }
    /**
     * Add item to Verification value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Verification $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModify
     */
    public function addToVerification(\Devlabs91\GenericOtaHotelApiService\StructType\Verification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Verification) {
            throw new \InvalidArgumentException(sprintf('The Verification property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Verification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Verification[] = $item;
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseReservationType StructType
 * @subpackage Structs
 */
class CruiseReservationType extends AbstractStructBase
{
    /**
     * The SailingInfo
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the selected category to book. Contains information related to the selected sailing. Typically the selected sailing is one of the sailings returned in the previous sailing availability response.
     * @var mixed
     */
    public $SailingInfo;
    /**
     * The SailingProfile
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the profile information at the sailing level.
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SailingProfile;
    /**
     * The ReservationInfo
     * Meta informations extracted from the WSDL
     * - documentation: Specifies reservation and guest information about the booking.
     * @var mixed
     */
    public $ReservationInfo;
    /**
     * The PaymentsDue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentsDue
     */
    public $PaymentsDue;
    /**
     * The Information
     * Meta informations extracted from the WSDL
     * - documentation: Contains information such as advisories or marketing messages returned by the cruise line.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Information;
    /**
     * Constructor method for CruiseReservationType
     * @uses CruiseReservationType::setSailingInfo()
     * @uses CruiseReservationType::setSailingProfile()
     * @uses CruiseReservationType::setReservationInfo()
     * @uses CruiseReservationType::setPaymentsDue()
     * @uses CruiseReservationType::setInformation()
     * @param mixed $sailingInfo
     * @param mixed[] $sailingProfile
     * @param mixed $reservationInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentsDue $paymentsDue
     * @param mixed[] $information
     */
    public function __construct($sailingInfo = null, array $sailingProfile = array(), $reservationInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\PaymentsDue $paymentsDue = null, array $information = array())
    {
        $this
            ->setSailingInfo($sailingInfo)
            ->setSailingProfile($sailingProfile)
            ->setReservationInfo($reservationInfo)
            ->setPaymentsDue($paymentsDue)
            ->setInformation($information);
    }
    /**
     * Get SailingInfo value
     * @return mixed|null
     */
    public function getSailingInfo()
    {
        return $this->SailingInfo;
    }
    /**
     * Set SailingInfo value
     * @param mixed $sailingInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseReservationType
     */
    public function setSailingInfo($sailingInfo = null)
    {
        $this->SailingInfo = $sailingInfo;
        return $this;
    }
    /**
     * Get SailingProfile value
     * @return mixed[]|null
     */
    public function getSailingProfile()
    {
        return $this->SailingProfile;
    }
    /**
     * Set SailingProfile value
     * @throws \InvalidArgumentException
     * @param mixed[] $sailingProfile
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseReservationType
     */
    public function setSailingProfile(array $sailingProfile = array())
    {
        foreach ($sailingProfile as $cruiseReservationTypeSailingProfileItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SailingProfile property can only contain items of anyType, "%s" given', is_object($cruiseReservationTypeSailingProfileItem) ? get_class($cruiseReservationTypeSailingProfileItem) : gettype($cruiseReservationTypeSailingProfileItem)), __LINE__);
            }
        }
        $this->SailingProfile = $sailingProfile;
        return $this;
    }
    /**
     * Add item to SailingProfile value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseReservationType
     */
    public function addToSailingProfile($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SailingProfile property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SailingProfile[] = $item;
        return $this;
    }
    /**
     * Get ReservationInfo value
     * @return mixed|null
     */
    public function getReservationInfo()
    {
        return $this->ReservationInfo;
    }
    /**
     * Set ReservationInfo value
     * @param mixed $reservationInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseReservationType
     */
    public function setReservationInfo($reservationInfo = null)
    {
        $this->ReservationInfo = $reservationInfo;
        return $this;
    }
    /**
     * Get PaymentsDue value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentsDue|null
     */
    public function getPaymentsDue()
    {
        return $this->PaymentsDue;
    }
    /**
     * Set PaymentsDue value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentsDue $paymentsDue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseReservationType
     */
    public function setPaymentsDue(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentsDue $paymentsDue = null)
    {
        $this->PaymentsDue = $paymentsDue;
        return $this;
    }
    /**
     * Get Information value
     * @return mixed[]|null
     */
    public function getInformation()
    {
        return $this->Information;
    }
    /**
     * Set Information value
     * @throws \InvalidArgumentException
     * @param mixed[] $information
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseReservationType
     */
    public function setInformation(array $information = array())
    {
        foreach ($information as $cruiseReservationTypeInformationItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Information property can only contain items of anyType, "%s" given', is_object($cruiseReservationTypeInformationItem) ? get_class($cruiseReservationTypeInformationItem) : gettype($cruiseReservationTypeInformationItem)), __LINE__);
            }
        }
        $this->Information = $information;
        return $this;
    }
    /**
     * Add item to Information value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseReservationType
     */
    public function addToInformation($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Information property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Information[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseReservationType
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

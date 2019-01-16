<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReservationRQAdditionalInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleReservationRQAdditionalInfoType complex type identifies the supplemental information that may be included when requesting the reservation of a vehicle.
 * @subpackage Structs
 */
class VehicleReservationRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The SpecialReqPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the preference associated with special needs or requirements of the customer, described using free text
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SpecialReqPref;
    /**
     * The CoveragePrefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs
     */
    public $CoveragePrefs;
    /**
     * The OffLocService
     * Meta informations extracted from the WSDL
     * - documentation: Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var mixed[]
     */
    public $OffLocService;
    /**
     * The ArrivalDetails
     * Meta informations extracted from the WSDL
     * - documentation: Details of the arrival transportation, if applicable
     * - minOccurs: 0
     * @var mixed
     */
    public $ArrivalDetails;
    /**
     * The RentalPaymentPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref[]
     */
    public $RentalPaymentPref;
    /**
     * The Reference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Reference
     */
    public $Reference;
    /**
     * The TourInfo
     * Meta informations extracted from the WSDL
     * - documentation: Details of a tour with which this reservation information is associated. Availability and rate information may vary if associated with a tour.
     * - minOccurs: 0
     * @var mixed
     */
    public $TourInfo;
    /**
     * The WrittenConfInst
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide instructions regarding cusotmer preferences for receiving confirmation information.
     * - minOccurs: 0
     * @var mixed
     */
    public $WrittenConfInst;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Remark;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The LuggageQty
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $LuggageQty;
    /**
     * The PassengerQty
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $PassengerQty;
    /**
     * The GasPrePay
     * Meta informations extracted from the WSDL
     * - documentation: The GasPrePay attribute defines a set of valid values for the choice of prepaying for gas at the time of the pick up of the rental vehicle. This information is useful in that it allows a customer's preference to be made known to the
     * vendor. It also allows the vendor to provide more detailed and accurate pricing up front. | false
     * - use: optional
     * @var bool
     */
    public $GasPrePay;
    /**
     * Constructor method for VehicleReservationRQAdditionalInfoType
     * @uses VehicleReservationRQAdditionalInfoType::setSpecialReqPref()
     * @uses VehicleReservationRQAdditionalInfoType::setCoveragePrefs()
     * @uses VehicleReservationRQAdditionalInfoType::setOffLocService()
     * @uses VehicleReservationRQAdditionalInfoType::setArrivalDetails()
     * @uses VehicleReservationRQAdditionalInfoType::setRentalPaymentPref()
     * @uses VehicleReservationRQAdditionalInfoType::setReference()
     * @uses VehicleReservationRQAdditionalInfoType::setTourInfo()
     * @uses VehicleReservationRQAdditionalInfoType::setWrittenConfInst()
     * @uses VehicleReservationRQAdditionalInfoType::setRemark()
     * @uses VehicleReservationRQAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleReservationRQAdditionalInfoType::setLuggageQty()
     * @uses VehicleReservationRQAdditionalInfoType::setPassengerQty()
     * @uses VehicleReservationRQAdditionalInfoType::setGasPrePay()
     * @param mixed[] $specialReqPref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs $coveragePrefs
     * @param mixed[] $offLocService
     * @param mixed $arrivalDetails
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref[] $rentalPaymentPref
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference
     * @param mixed $tourInfo
     * @param mixed $writtenConfInst
     * @param mixed[] $remark
     * @param mixed $tPA_Extensions
     * @param int $luggageQty
     * @param int $passengerQty
     * @param bool $gasPrePay
     */
    public function __construct(array $specialReqPref = array(), \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs $coveragePrefs = null, array $offLocService = array(), $arrivalDetails = null, array $rentalPaymentPref = array(), \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference = null, $tourInfo = null, $writtenConfInst = null, array $remark = array(), $tPA_Extensions = null, $luggageQty = null, $passengerQty = null, $gasPrePay = null)
    {
        $this
            ->setSpecialReqPref($specialReqPref)
            ->setCoveragePrefs($coveragePrefs)
            ->setOffLocService($offLocService)
            ->setArrivalDetails($arrivalDetails)
            ->setRentalPaymentPref($rentalPaymentPref)
            ->setReference($reference)
            ->setTourInfo($tourInfo)
            ->setWrittenConfInst($writtenConfInst)
            ->setRemark($remark)
            ->setTPA_Extensions($tPA_Extensions)
            ->setLuggageQty($luggageQty)
            ->setPassengerQty($passengerQty)
            ->setGasPrePay($gasPrePay);
    }
    /**
     * Get SpecialReqPref value
     * @return mixed[]|null
     */
    public function getSpecialReqPref()
    {
        return $this->SpecialReqPref;
    }
    /**
     * Set SpecialReqPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $specialReqPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setSpecialReqPref(array $specialReqPref = array())
    {
        foreach ($specialReqPref as $vehicleReservationRQAdditionalInfoTypeSpecialReqPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecialReqPref property can only contain items of anyType, "%s" given', is_object($vehicleReservationRQAdditionalInfoTypeSpecialReqPrefItem) ? get_class($vehicleReservationRQAdditionalInfoTypeSpecialReqPrefItem) : gettype($vehicleReservationRQAdditionalInfoTypeSpecialReqPrefItem)), __LINE__);
            }
        }
        $this->SpecialReqPref = $specialReqPref;
        return $this;
    }
    /**
     * Add item to SpecialReqPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function addToSpecialReqPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SpecialReqPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialReqPref[] = $item;
        return $this;
    }
    /**
     * Get CoveragePrefs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs|null
     */
    public function getCoveragePrefs()
    {
        return $this->CoveragePrefs;
    }
    /**
     * Set CoveragePrefs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs $coveragePrefs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setCoveragePrefs(\Devlabs91\GenericOtaHotelApiService\StructType\CoveragePrefs $coveragePrefs = null)
    {
        $this->CoveragePrefs = $coveragePrefs;
        return $this;
    }
    /**
     * Get OffLocService value
     * @return mixed[]|null
     */
    public function getOffLocService()
    {
        return $this->OffLocService;
    }
    /**
     * Set OffLocService value
     * @throws \InvalidArgumentException
     * @param mixed[] $offLocService
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setOffLocService(array $offLocService = array())
    {
        foreach ($offLocService as $vehicleReservationRQAdditionalInfoTypeOffLocServiceItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The OffLocService property can only contain items of anyType, "%s" given', is_object($vehicleReservationRQAdditionalInfoTypeOffLocServiceItem) ? get_class($vehicleReservationRQAdditionalInfoTypeOffLocServiceItem) : gettype($vehicleReservationRQAdditionalInfoTypeOffLocServiceItem)), __LINE__);
            }
        }
        $this->OffLocService = $offLocService;
        return $this;
    }
    /**
     * Add item to OffLocService value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function addToOffLocService($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The OffLocService property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OffLocService[] = $item;
        return $this;
    }
    /**
     * Get ArrivalDetails value
     * @return mixed|null
     */
    public function getArrivalDetails()
    {
        return $this->ArrivalDetails;
    }
    /**
     * Set ArrivalDetails value
     * @param mixed $arrivalDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setArrivalDetails($arrivalDetails = null)
    {
        $this->ArrivalDetails = $arrivalDetails;
        return $this;
    }
    /**
     * Get RentalPaymentPref value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref[]|null
     */
    public function getRentalPaymentPref()
    {
        return $this->RentalPaymentPref;
    }
    /**
     * Set RentalPaymentPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref[] $rentalPaymentPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setRentalPaymentPref(array $rentalPaymentPref = array())
    {
        foreach ($rentalPaymentPref as $vehicleReservationRQAdditionalInfoTypeRentalPaymentPrefItem) {
            // validation for constraint: itemType
            if (!$vehicleReservationRQAdditionalInfoTypeRentalPaymentPrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref) {
                throw new \InvalidArgumentException(sprintf('The RentalPaymentPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref, "%s" given', is_object($vehicleReservationRQAdditionalInfoTypeRentalPaymentPrefItem) ? get_class($vehicleReservationRQAdditionalInfoTypeRentalPaymentPrefItem) : gettype($vehicleReservationRQAdditionalInfoTypeRentalPaymentPrefItem)), __LINE__);
            }
        }
        $this->RentalPaymentPref = $rentalPaymentPref;
        return $this;
    }
    /**
     * Add item to RentalPaymentPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function addToRentalPaymentPref(\Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref) {
            throw new \InvalidArgumentException(sprintf('The RentalPaymentPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RentalPaymentPref[] = $item;
        return $this;
    }
    /**
     * Get Reference value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Reference|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setReference(\Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference = null)
    {
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get TourInfo value
     * @return mixed|null
     */
    public function getTourInfo()
    {
        return $this->TourInfo;
    }
    /**
     * Set TourInfo value
     * @param mixed $tourInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setTourInfo($tourInfo = null)
    {
        $this->TourInfo = $tourInfo;
        return $this;
    }
    /**
     * Get WrittenConfInst value
     * @return mixed|null
     */
    public function getWrittenConfInst()
    {
        return $this->WrittenConfInst;
    }
    /**
     * Set WrittenConfInst value
     * @param mixed $writtenConfInst
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setWrittenConfInst($writtenConfInst = null)
    {
        $this->WrittenConfInst = $writtenConfInst;
        return $this;
    }
    /**
     * Get Remark value
     * @return mixed[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param mixed[] $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $vehicleReservationRQAdditionalInfoTypeRemarkItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of anyType, "%s" given', is_object($vehicleReservationRQAdditionalInfoTypeRemarkItem) ? get_class($vehicleReservationRQAdditionalInfoTypeRemarkItem) : gettype($vehicleReservationRQAdditionalInfoTypeRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function addToRemark($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Remark[] = $item;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get LuggageQty value
     * @return int|null
     */
    public function getLuggageQty()
    {
        return $this->LuggageQty;
    }
    /**
     * Set LuggageQty value
     * @param int $luggageQty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setLuggageQty($luggageQty = null)
    {
        // validation for constraint: int
        if (!is_null($luggageQty) && !is_numeric($luggageQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($luggageQty)), __LINE__);
        }
        $this->LuggageQty = $luggageQty;
        return $this;
    }
    /**
     * Get PassengerQty value
     * @return int|null
     */
    public function getPassengerQty()
    {
        return $this->PassengerQty;
    }
    /**
     * Set PassengerQty value
     * @param int $passengerQty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setPassengerQty($passengerQty = null)
    {
        // validation for constraint: int
        if (!is_null($passengerQty) && !is_numeric($passengerQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($passengerQty)), __LINE__);
        }
        $this->PassengerQty = $passengerQty;
        return $this;
    }
    /**
     * Get GasPrePay value
     * @return bool|null
     */
    public function getGasPrePay()
    {
        return $this->GasPrePay;
    }
    /**
     * Set GasPrePay value
     * @param bool $gasPrePay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setGasPrePay($gasPrePay = null)
    {
        // validation for constraint: boolean
        if (!is_null($gasPrePay) && !is_bool($gasPrePay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gasPrePay)), __LINE__);
        }
        $this->GasPrePay = $gasPrePay;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationRQAdditionalInfoType
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

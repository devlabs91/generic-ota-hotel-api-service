<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourCodePref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the contract code for a negotiated fare.
 * @subpackage Structs
 */
class TourCodePref extends AbstractStructBase
{
    /**
     * The TourCodeInfo
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TourCodeInfo
     */
    public $TourCodeInfo;
    /**
     * The StaffTourCodeInfo
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo
     */
    public $StaffTourCodeInfo;
    /**
     * The PassengerTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
     * - use: optional
     * @var string
     */
    public $PassengerTypeCode;
    /**
     * The AirlineVendorPrefRPH
     * Meta informations extracted from the WSDL
     * - documentation: Reference to one or more airlines in AirlinePrefType/VendorPref.
     * - use: optional
     * @var string
     */
    public $AirlineVendorPrefRPH;
    /**
     * The TransferAction
     * Meta informations extracted from the WSDL
     * - documentation: Indicates under what conditions this element will be transfered to the booking.
     * - use: optional
     * @var string
     */
    public $TransferAction;
    /**
     * Constructor method for TourCodePref
     * @uses TourCodePref::setTourCodeInfo()
     * @uses TourCodePref::setStaffTourCodeInfo()
     * @uses TourCodePref::setPassengerTypeCode()
     * @uses TourCodePref::setAirlineVendorPrefRPH()
     * @uses TourCodePref::setTransferAction()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TourCodeInfo $tourCodeInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo $staffTourCodeInfo
     * @param string $passengerTypeCode
     * @param string $airlineVendorPrefRPH
     * @param string $transferAction
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\TourCodeInfo $tourCodeInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo $staffTourCodeInfo = null, $passengerTypeCode = null, $airlineVendorPrefRPH = null, $transferAction = null)
    {
        $this
            ->setTourCodeInfo($tourCodeInfo)
            ->setStaffTourCodeInfo($staffTourCodeInfo)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setAirlineVendorPrefRPH($airlineVendorPrefRPH)
            ->setTransferAction($transferAction);
    }
    /**
     * Get TourCodeInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodeInfo|null
     */
    public function getTourCodeInfo()
    {
        return $this->TourCodeInfo;
    }
    /**
     * Set TourCodeInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TourCodeInfo $tourCodeInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref
     */
    public function setTourCodeInfo(\Devlabs91\GenericOtaHotelApiService\StructType\TourCodeInfo $tourCodeInfo = null)
    {
        $this->TourCodeInfo = $tourCodeInfo;
        return $this;
    }
    /**
     * Get StaffTourCodeInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo|null
     */
    public function getStaffTourCodeInfo()
    {
        return $this->StaffTourCodeInfo;
    }
    /**
     * Set StaffTourCodeInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo $staffTourCodeInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref
     */
    public function setStaffTourCodeInfo(\Devlabs91\GenericOtaHotelApiService\StructType\StaffTourCodeInfo $staffTourCodeInfo = null)
    {
        $this->StaffTourCodeInfo = $staffTourCodeInfo;
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode()
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref
     */
    public function setPassengerTypeCode($passengerTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerTypeCode)), __LINE__);
        }
        $this->PassengerTypeCode = $passengerTypeCode;
        return $this;
    }
    /**
     * Get AirlineVendorPrefRPH value
     * @return string|null
     */
    public function getAirlineVendorPrefRPH()
    {
        return $this->AirlineVendorPrefRPH;
    }
    /**
     * Set AirlineVendorPrefRPH value
     * @param string $airlineVendorPrefRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref
     */
    public function setAirlineVendorPrefRPH($airlineVendorPrefRPH = null)
    {
        // validation for constraint: string
        if (!is_null($airlineVendorPrefRPH) && !is_string($airlineVendorPrefRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineVendorPrefRPH)), __LINE__);
        }
        $this->AirlineVendorPrefRPH = $airlineVendorPrefRPH;
        return $this;
    }
    /**
     * Get TransferAction value
     * @return string|null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param string $transferAction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref
     */
    public function setTransferAction($transferAction = null)
    {
        // validation for constraint: string
        if (!is_null($transferAction) && !is_string($transferAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferAction)), __LINE__);
        }
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCodePref
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

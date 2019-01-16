<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialReqDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Remarks, OSIs, Seat Requests etc.
 * @subpackage Structs
 */
class SpecialReqDetailsType extends AbstractStructBase
{
    /**
     * The SeatRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequests
     */
    public $SeatRequests;
    /**
     * The SpecialServiceRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequests
     */
    public $SpecialServiceRequests;
    /**
     * The OtherServiceInformations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformations
     */
    public $OtherServiceInformations;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Remarks
     */
    public $Remarks;
    /**
     * The SpecialRemarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarks
     */
    public $SpecialRemarks;
    /**
     * Constructor method for SpecialReqDetailsType
     * @uses SpecialReqDetailsType::setSeatRequests()
     * @uses SpecialReqDetailsType::setSpecialServiceRequests()
     * @uses SpecialReqDetailsType::setOtherServiceInformations()
     * @uses SpecialReqDetailsType::setRemarks()
     * @uses SpecialReqDetailsType::setSpecialRemarks()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequests $seatRequests
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequests $specialServiceRequests
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformations $otherServiceInformations
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Remarks $remarks
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarks $specialRemarks
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\SeatRequests $seatRequests = null, \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequests $specialServiceRequests = null, \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformations $otherServiceInformations = null, \Devlabs91\GenericOtaHotelApiService\StructType\Remarks $remarks = null, \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarks $specialRemarks = null)
    {
        $this
            ->setSeatRequests($seatRequests)
            ->setSpecialServiceRequests($specialServiceRequests)
            ->setOtherServiceInformations($otherServiceInformations)
            ->setRemarks($remarks)
            ->setSpecialRemarks($specialRemarks);
    }
    /**
     * Get SeatRequests value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequests|null
     */
    public function getSeatRequests()
    {
        return $this->SeatRequests;
    }
    /**
     * Set SeatRequests value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequests $seatRequests
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialReqDetailsType
     */
    public function setSeatRequests(\Devlabs91\GenericOtaHotelApiService\StructType\SeatRequests $seatRequests = null)
    {
        $this->SeatRequests = $seatRequests;
        return $this;
    }
    /**
     * Get SpecialServiceRequests value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequests|null
     */
    public function getSpecialServiceRequests()
    {
        return $this->SpecialServiceRequests;
    }
    /**
     * Set SpecialServiceRequests value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequests $specialServiceRequests
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialReqDetailsType
     */
    public function setSpecialServiceRequests(\Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequests $specialServiceRequests = null)
    {
        $this->SpecialServiceRequests = $specialServiceRequests;
        return $this;
    }
    /**
     * Get OtherServiceInformations value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformations|null
     */
    public function getOtherServiceInformations()
    {
        return $this->OtherServiceInformations;
    }
    /**
     * Set OtherServiceInformations value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformations $otherServiceInformations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialReqDetailsType
     */
    public function setOtherServiceInformations(\Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformations $otherServiceInformations = null)
    {
        $this->OtherServiceInformations = $otherServiceInformations;
        return $this;
    }
    /**
     * Get Remarks value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Remarks|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Remarks $remarks
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialReqDetailsType
     */
    public function setRemarks(\Devlabs91\GenericOtaHotelApiService\StructType\Remarks $remarks = null)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    /**
     * Get SpecialRemarks value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarks|null
     */
    public function getSpecialRemarks()
    {
        return $this->SpecialRemarks;
    }
    /**
     * Set SpecialRemarks value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarks $specialRemarks
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialReqDetailsType
     */
    public function setSpecialRemarks(\Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarks $specialRemarks = null)
    {
        $this->SpecialRemarks = $specialRemarks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialReqDetailsType
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

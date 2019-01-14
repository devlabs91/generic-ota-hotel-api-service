<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinOptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies cabin option info. | Provides the deck name and number.
 * @subpackage Structs
 */
class CabinOptionType extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the status of the cabin. Refer to OpenTravel Code table Status (STS).
     * - use: required
     * @var string
     */
    public $Status;
    /**
     * The CabinConfiguration
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration[]
     */
    public $CabinConfiguration;
    /**
     * The MeasurementInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo[]
     */
    public $MeasurementInfo;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: Remark information related to the cabin option.
     * - minOccurs: 0
     * @var mixed
     */
    public $Remark;
    /**
     * The CategoryLocation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the category location.
     * - use: optional
     * @var string
     */
    public $CategoryLocation;
    /**
     * The ShipSide
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ShipSide;
    /**
     * The PositionInShip
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PositionInShip;
    /**
     * The BedType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the bed type for this cabin. Refer to OpenTravel Codelist Bed Type (BED).
     * - use: optional
     * @var string
     */
    public $BedType;
    /**
     * The ReleaseDateTime
     * Meta informations extracted from the WSDL
     * - documentation: The date and time the held cabin will be released back to inventory if not booked. Typically, this is the same ReleaseDateTime that was provided in the CabinHoldRS.
     * - use: optional
     * @var string
     */
    public $ReleaseDateTime;
    /**
     * The CabinCategoryStatusCode
     * Meta informations extracted from the WSDL
     * - documentation: The status of the berth category of the cabin. Refer to OpenTravel Code Table STS (Status).
     * - use: optional
     * @var string
     */
    public $CabinCategoryStatusCode;
    /**
     * The CabinCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: The berth category of the cabin.
     * - use: optional
     * @var string
     */
    public $CabinCategoryCode;
    /**
     * The CabinRanking
     * Meta informations extracted from the WSDL
     * - documentation: The relative ranking of the cabin based on location preference, a better view, etc.
     * - use: optional
     * @var string
     */
    public $CabinRanking;
    /**
     * The ConnectingCabinIndicator
     * Meta informations extracted from the WSDL
     * - documentation: If true, the cabin is connected to another cabin.
     * - use: optional
     * @var bool
     */
    public $ConnectingCabinIndicator;
    /**
     * The ConnectingCabinNumber
     * Meta informations extracted from the WSDL
     * - documentation: The number of the connecting cabin.
     * - use: optional
     * @var string
     */
    public $ConnectingCabinNumber;
    /**
     * Constructor method for CabinOptionType
     * @uses CabinOptionType::setStatus()
     * @uses CabinOptionType::setCabinConfiguration()
     * @uses CabinOptionType::setMeasurementInfo()
     * @uses CabinOptionType::setRemark()
     * @uses CabinOptionType::setCategoryLocation()
     * @uses CabinOptionType::setShipSide()
     * @uses CabinOptionType::setPositionInShip()
     * @uses CabinOptionType::setBedType()
     * @uses CabinOptionType::setReleaseDateTime()
     * @uses CabinOptionType::setCabinCategoryStatusCode()
     * @uses CabinOptionType::setCabinCategoryCode()
     * @uses CabinOptionType::setCabinRanking()
     * @uses CabinOptionType::setConnectingCabinIndicator()
     * @uses CabinOptionType::setConnectingCabinNumber()
     * @param string $status
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration[] $cabinConfiguration
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo[] $measurementInfo
     * @param mixed $remark
     * @param string $categoryLocation
     * @param string $shipSide
     * @param string $positionInShip
     * @param string $bedType
     * @param string $releaseDateTime
     * @param string $cabinCategoryStatusCode
     * @param string $cabinCategoryCode
     * @param string $cabinRanking
     * @param bool $connectingCabinIndicator
     * @param string $connectingCabinNumber
     */
    public function __construct($status = null, array $cabinConfiguration = array(), array $measurementInfo = array(), $remark = null, $categoryLocation = null, $shipSide = null, $positionInShip = null, $bedType = null, $releaseDateTime = null, $cabinCategoryStatusCode = null, $cabinCategoryCode = null, $cabinRanking = null, $connectingCabinIndicator = null, $connectingCabinNumber = null)
    {
        $this
            ->setStatus($status)
            ->setCabinConfiguration($cabinConfiguration)
            ->setMeasurementInfo($measurementInfo)
            ->setRemark($remark)
            ->setCategoryLocation($categoryLocation)
            ->setShipSide($shipSide)
            ->setPositionInShip($positionInShip)
            ->setBedType($bedType)
            ->setReleaseDateTime($releaseDateTime)
            ->setCabinCategoryStatusCode($cabinCategoryStatusCode)
            ->setCabinCategoryCode($cabinCategoryCode)
            ->setCabinRanking($cabinRanking)
            ->setConnectingCabinIndicator($connectingCabinIndicator)
            ->setConnectingCabinNumber($connectingCabinNumber);
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get CabinConfiguration value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration[]|null
     */
    public function getCabinConfiguration()
    {
        return $this->CabinConfiguration;
    }
    /**
     * Set CabinConfiguration value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration[] $cabinConfiguration
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setCabinConfiguration(array $cabinConfiguration = array())
    {
        foreach ($cabinConfiguration as $cabinOptionTypeCabinConfigurationItem) {
            // validation for constraint: itemType
            if (!$cabinOptionTypeCabinConfigurationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration) {
                throw new \InvalidArgumentException(sprintf('The CabinConfiguration property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration, "%s" given', is_object($cabinOptionTypeCabinConfigurationItem) ? get_class($cabinOptionTypeCabinConfigurationItem) : gettype($cabinOptionTypeCabinConfigurationItem)), __LINE__);
            }
        }
        $this->CabinConfiguration = $cabinConfiguration;
        return $this;
    }
    /**
     * Add item to CabinConfiguration value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function addToCabinConfiguration(\Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration) {
            throw new \InvalidArgumentException(sprintf('The CabinConfiguration property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CabinConfiguration, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CabinConfiguration[] = $item;
        return $this;
    }
    /**
     * Get MeasurementInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo[]|null
     */
    public function getMeasurementInfo()
    {
        return $this->MeasurementInfo;
    }
    /**
     * Set MeasurementInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo[] $measurementInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setMeasurementInfo(array $measurementInfo = array())
    {
        foreach ($measurementInfo as $cabinOptionTypeMeasurementInfoItem) {
            // validation for constraint: itemType
            if (!$cabinOptionTypeMeasurementInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo) {
                throw new \InvalidArgumentException(sprintf('The MeasurementInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo, "%s" given', is_object($cabinOptionTypeMeasurementInfoItem) ? get_class($cabinOptionTypeMeasurementInfoItem) : gettype($cabinOptionTypeMeasurementInfoItem)), __LINE__);
            }
        }
        $this->MeasurementInfo = $measurementInfo;
        return $this;
    }
    /**
     * Add item to MeasurementInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function addToMeasurementInfo(\Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo) {
            throw new \InvalidArgumentException(sprintf('The MeasurementInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\MeasurementInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MeasurementInfo[] = $item;
        return $this;
    }
    /**
     * Get Remark value
     * @return mixed|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param mixed $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setRemark($remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get CategoryLocation value
     * @return string|null
     */
    public function getCategoryLocation()
    {
        return $this->CategoryLocation;
    }
    /**
     * Set CategoryLocation value
     * @param string $categoryLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setCategoryLocation($categoryLocation = null)
    {
        // validation for constraint: string
        if (!is_null($categoryLocation) && !is_string($categoryLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryLocation)), __LINE__);
        }
        $this->CategoryLocation = $categoryLocation;
        return $this;
    }
    /**
     * Get ShipSide value
     * @return string|null
     */
    public function getShipSide()
    {
        return $this->ShipSide;
    }
    /**
     * Set ShipSide value
     * @param string $shipSide
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setShipSide($shipSide = null)
    {
        // validation for constraint: string
        if (!is_null($shipSide) && !is_string($shipSide)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipSide)), __LINE__);
        }
        $this->ShipSide = $shipSide;
        return $this;
    }
    /**
     * Get PositionInShip value
     * @return string|null
     */
    public function getPositionInShip()
    {
        return $this->PositionInShip;
    }
    /**
     * Set PositionInShip value
     * @param string $positionInShip
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setPositionInShip($positionInShip = null)
    {
        // validation for constraint: string
        if (!is_null($positionInShip) && !is_string($positionInShip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($positionInShip)), __LINE__);
        }
        $this->PositionInShip = $positionInShip;
        return $this;
    }
    /**
     * Get BedType value
     * @return string|null
     */
    public function getBedType()
    {
        return $this->BedType;
    }
    /**
     * Set BedType value
     * @param string $bedType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setBedType($bedType = null)
    {
        // validation for constraint: string
        if (!is_null($bedType) && !is_string($bedType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bedType)), __LINE__);
        }
        $this->BedType = $bedType;
        return $this;
    }
    /**
     * Get ReleaseDateTime value
     * @return string|null
     */
    public function getReleaseDateTime()
    {
        return $this->ReleaseDateTime;
    }
    /**
     * Set ReleaseDateTime value
     * @param string $releaseDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setReleaseDateTime($releaseDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($releaseDateTime) && !is_string($releaseDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($releaseDateTime)), __LINE__);
        }
        $this->ReleaseDateTime = $releaseDateTime;
        return $this;
    }
    /**
     * Get CabinCategoryStatusCode value
     * @return string|null
     */
    public function getCabinCategoryStatusCode()
    {
        return $this->CabinCategoryStatusCode;
    }
    /**
     * Set CabinCategoryStatusCode value
     * @param string $cabinCategoryStatusCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setCabinCategoryStatusCode($cabinCategoryStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($cabinCategoryStatusCode) && !is_string($cabinCategoryStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinCategoryStatusCode)), __LINE__);
        }
        $this->CabinCategoryStatusCode = $cabinCategoryStatusCode;
        return $this;
    }
    /**
     * Get CabinCategoryCode value
     * @return string|null
     */
    public function getCabinCategoryCode()
    {
        return $this->CabinCategoryCode;
    }
    /**
     * Set CabinCategoryCode value
     * @param string $cabinCategoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setCabinCategoryCode($cabinCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($cabinCategoryCode) && !is_string($cabinCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinCategoryCode)), __LINE__);
        }
        $this->CabinCategoryCode = $cabinCategoryCode;
        return $this;
    }
    /**
     * Get CabinRanking value
     * @return string|null
     */
    public function getCabinRanking()
    {
        return $this->CabinRanking;
    }
    /**
     * Set CabinRanking value
     * @param string $cabinRanking
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setCabinRanking($cabinRanking = null)
    {
        // validation for constraint: string
        if (!is_null($cabinRanking) && !is_string($cabinRanking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinRanking)), __LINE__);
        }
        $this->CabinRanking = $cabinRanking;
        return $this;
    }
    /**
     * Get ConnectingCabinIndicator value
     * @return bool|null
     */
    public function getConnectingCabinIndicator()
    {
        return $this->ConnectingCabinIndicator;
    }
    /**
     * Set ConnectingCabinIndicator value
     * @param bool $connectingCabinIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setConnectingCabinIndicator($connectingCabinIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($connectingCabinIndicator) && !is_bool($connectingCabinIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($connectingCabinIndicator)), __LINE__);
        }
        $this->ConnectingCabinIndicator = $connectingCabinIndicator;
        return $this;
    }
    /**
     * Get ConnectingCabinNumber value
     * @return string|null
     */
    public function getConnectingCabinNumber()
    {
        return $this->ConnectingCabinNumber;
    }
    /**
     * Set ConnectingCabinNumber value
     * @param string $connectingCabinNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
     */
    public function setConnectingCabinNumber($connectingCabinNumber = null)
    {
        // validation for constraint: string
        if (!is_null($connectingCabinNumber) && !is_string($connectingCabinNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($connectingCabinNumber)), __LINE__);
        }
        $this->ConnectingCabinNumber = $connectingCabinNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinOptionType
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

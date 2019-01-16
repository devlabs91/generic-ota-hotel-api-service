<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The type of fare required (e.g. unrestricted, excursion). Refer to the Fare Qualifier OpenTravel Code list (FAQ). | Holds a base fare, tax, total and currency information on a price | Used to indicate a negotiated fare and, if so,
 * the fare code.
 * - union: UpperCaseAlphaLength1to3 | OTA_CodeType
 * - use: required
 * @subpackage Structs
 */
class FareType extends AbstractStructBase
{
    /**
     * The BaseFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BaseFare
     */
    public $BaseFare;
    /**
     * The EquivFare
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\EquivFare[]
     */
    public $EquivFare;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Taxes
     */
    public $Taxes;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Fees
     */
    public $Fees;
    /**
     * The TotalFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TotalFare
     */
    public $TotalFare;
    /**
     * The FareConstruction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction
     */
    public $FareConstruction;
    /**
     * The UnstructuredFareCalc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\UnstructuredFareCalc
     */
    public $UnstructuredFareCalc;
    /**
     * The FareBaggageAllowance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance[]
     */
    public $FareBaggageAllowance;
    /**
     * The TourCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TourCode
     */
    public $TourCode;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Remark[]
     */
    public $Remark;
    /**
     * The OriginalIssueInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo
     */
    public $OriginalIssueInfo;
    /**
     * The ExchangeInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo
     */
    public $ExchangeInfo;
    /**
     * The Discounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Discounts
     */
    public $Discounts;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The TicketDesignatorCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a discount code applicable to the fare.
     * - use: optional
     * @var string
     */
    public $TicketDesignatorCode;
    /**
     * The TotalNbrTrips
     * Meta informations extracted from the WSDL
     * - documentation: The total number of trips in this itinerary.
     * - use: optional
     * @var string
     */
    public $TotalNbrTrips;
    /**
     * The TotalNbrPTC
     * Meta informations extracted from the WSDL
     * - documentation: The total number of passenger type codes in this priced itinerary.
     * - use: optional
     * @var string
     */
    public $TotalNbrPTC;
    /**
     * Constructor method for FareType
     * @uses FareType::setBaseFare()
     * @uses FareType::setEquivFare()
     * @uses FareType::setTaxes()
     * @uses FareType::setFees()
     * @uses FareType::setTotalFare()
     * @uses FareType::setFareConstruction()
     * @uses FareType::setUnstructuredFareCalc()
     * @uses FareType::setFareBaggageAllowance()
     * @uses FareType::setTourCode()
     * @uses FareType::setRemark()
     * @uses FareType::setOriginalIssueInfo()
     * @uses FareType::setExchangeInfo()
     * @uses FareType::setDiscounts()
     * @uses FareType::setTPA_Extensions()
     * @uses FareType::setTicketDesignatorCode()
     * @uses FareType::setTotalNbrTrips()
     * @uses FareType::setTotalNbrPTC()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BaseFare $baseFare
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\EquivFare[] $equivFare
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TotalFare $totalFare
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction $fareConstruction
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UnstructuredFareCalc $unstructuredFareCalc
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance[] $fareBaggageAllowance
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TourCode $tourCode
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Remark[] $remark
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo $originalIssueInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo $exchangeInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Discounts $discounts
     * @param mixed $tPA_Extensions
     * @param string $ticketDesignatorCode
     * @param string $totalNbrTrips
     * @param string $totalNbrPTC
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\BaseFare $baseFare = null, array $equivFare = array(), \Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes = null, \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null, \Devlabs91\GenericOtaHotelApiService\StructType\TotalFare $totalFare = null, \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction $fareConstruction = null, \Devlabs91\GenericOtaHotelApiService\StructType\UnstructuredFareCalc $unstructuredFareCalc = null, array $fareBaggageAllowance = array(), \Devlabs91\GenericOtaHotelApiService\StructType\TourCode $tourCode = null, array $remark = array(), \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo $originalIssueInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo $exchangeInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\Discounts $discounts = null, $tPA_Extensions = null, $ticketDesignatorCode = null, $totalNbrTrips = null, $totalNbrPTC = null)
    {
        $this
            ->setBaseFare($baseFare)
            ->setEquivFare($equivFare)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setTotalFare($totalFare)
            ->setFareConstruction($fareConstruction)
            ->setUnstructuredFareCalc($unstructuredFareCalc)
            ->setFareBaggageAllowance($fareBaggageAllowance)
            ->setTourCode($tourCode)
            ->setRemark($remark)
            ->setOriginalIssueInfo($originalIssueInfo)
            ->setExchangeInfo($exchangeInfo)
            ->setDiscounts($discounts)
            ->setTPA_Extensions($tPA_Extensions)
            ->setTicketDesignatorCode($ticketDesignatorCode)
            ->setTotalNbrTrips($totalNbrTrips)
            ->setTotalNbrPTC($totalNbrPTC);
    }
    /**
     * Get BaseFare value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseFare|null
     */
    public function getBaseFare()
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BaseFare $baseFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setBaseFare(\Devlabs91\GenericOtaHotelApiService\StructType\BaseFare $baseFare = null)
    {
        $this->BaseFare = $baseFare;
        return $this;
    }
    /**
     * Get EquivFare value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EquivFare[]|null
     */
    public function getEquivFare()
    {
        return $this->EquivFare;
    }
    /**
     * Set EquivFare value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\EquivFare[] $equivFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setEquivFare(array $equivFare = array())
    {
        foreach ($equivFare as $fareTypeEquivFareItem) {
            // validation for constraint: itemType
            if (!$fareTypeEquivFareItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\EquivFare) {
                throw new \InvalidArgumentException(sprintf('The EquivFare property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\EquivFare, "%s" given', is_object($fareTypeEquivFareItem) ? get_class($fareTypeEquivFareItem) : gettype($fareTypeEquivFareItem)), __LINE__);
            }
        }
        $this->EquivFare = $equivFare;
        return $this;
    }
    /**
     * Add item to EquivFare value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\EquivFare $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function addToEquivFare(\Devlabs91\GenericOtaHotelApiService\StructType\EquivFare $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\EquivFare) {
            throw new \InvalidArgumentException(sprintf('The EquivFare property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\EquivFare, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EquivFare[] = $item;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setTaxes(\Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Fees value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setFees(\Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get TotalFare value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalFare|null
     */
    public function getTotalFare()
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TotalFare $totalFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setTotalFare(\Devlabs91\GenericOtaHotelApiService\StructType\TotalFare $totalFare = null)
    {
        $this->TotalFare = $totalFare;
        return $this;
    }
    /**
     * Get FareConstruction value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction|null
     */
    public function getFareConstruction()
    {
        return $this->FareConstruction;
    }
    /**
     * Set FareConstruction value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction $fareConstruction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setFareConstruction(\Devlabs91\GenericOtaHotelApiService\StructType\FareConstruction $fareConstruction = null)
    {
        $this->FareConstruction = $fareConstruction;
        return $this;
    }
    /**
     * Get UnstructuredFareCalc value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UnstructuredFareCalc|null
     */
    public function getUnstructuredFareCalc()
    {
        return $this->UnstructuredFareCalc;
    }
    /**
     * Set UnstructuredFareCalc value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UnstructuredFareCalc $unstructuredFareCalc
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setUnstructuredFareCalc(\Devlabs91\GenericOtaHotelApiService\StructType\UnstructuredFareCalc $unstructuredFareCalc = null)
    {
        $this->UnstructuredFareCalc = $unstructuredFareCalc;
        return $this;
    }
    /**
     * Get FareBaggageAllowance value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance[]|null
     */
    public function getFareBaggageAllowance()
    {
        return $this->FareBaggageAllowance;
    }
    /**
     * Set FareBaggageAllowance value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance[] $fareBaggageAllowance
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setFareBaggageAllowance(array $fareBaggageAllowance = array())
    {
        foreach ($fareBaggageAllowance as $fareTypeFareBaggageAllowanceItem) {
            // validation for constraint: itemType
            if (!$fareTypeFareBaggageAllowanceItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance) {
                throw new \InvalidArgumentException(sprintf('The FareBaggageAllowance property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance, "%s" given', is_object($fareTypeFareBaggageAllowanceItem) ? get_class($fareTypeFareBaggageAllowanceItem) : gettype($fareTypeFareBaggageAllowanceItem)), __LINE__);
            }
        }
        $this->FareBaggageAllowance = $fareBaggageAllowance;
        return $this;
    }
    /**
     * Add item to FareBaggageAllowance value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function addToFareBaggageAllowance(\Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance) {
            throw new \InvalidArgumentException(sprintf('The FareBaggageAllowance property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareBaggageAllowance[] = $item;
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TourCode|null
     */
    public function getTourCode()
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TourCode $tourCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setTourCode(\Devlabs91\GenericOtaHotelApiService\StructType\TourCode $tourCode = null)
    {
        $this->TourCode = $tourCode;
        return $this;
    }
    /**
     * Get Remark value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Remark[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Remark[] $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $fareTypeRemarkItem) {
            // validation for constraint: itemType
            if (!$fareTypeRemarkItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Remark) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Remark, "%s" given', is_object($fareTypeRemarkItem) ? get_class($fareTypeRemarkItem) : gettype($fareTypeRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Remark $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function addToRemark(\Devlabs91\GenericOtaHotelApiService\StructType\Remark $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Remark) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Remark, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Remark[] = $item;
        return $this;
    }
    /**
     * Get OriginalIssueInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo|null
     */
    public function getOriginalIssueInfo()
    {
        return $this->OriginalIssueInfo;
    }
    /**
     * Set OriginalIssueInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo $originalIssueInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setOriginalIssueInfo(\Devlabs91\GenericOtaHotelApiService\StructType\OriginalIssueInfo $originalIssueInfo = null)
    {
        $this->OriginalIssueInfo = $originalIssueInfo;
        return $this;
    }
    /**
     * Get ExchangeInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo|null
     */
    public function getExchangeInfo()
    {
        return $this->ExchangeInfo;
    }
    /**
     * Set ExchangeInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo $exchangeInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setExchangeInfo(\Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo $exchangeInfo = null)
    {
        $this->ExchangeInfo = $exchangeInfo;
        return $this;
    }
    /**
     * Get Discounts value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Discounts|null
     */
    public function getDiscounts()
    {
        return $this->Discounts;
    }
    /**
     * Set Discounts value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Discounts $discounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setDiscounts(\Devlabs91\GenericOtaHotelApiService\StructType\Discounts $discounts = null)
    {
        $this->Discounts = $discounts;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get TicketDesignatorCode value
     * @return string|null
     */
    public function getTicketDesignatorCode()
    {
        return $this->TicketDesignatorCode;
    }
    /**
     * Set TicketDesignatorCode value
     * @param string $ticketDesignatorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setTicketDesignatorCode($ticketDesignatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDesignatorCode) && !is_string($ticketDesignatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDesignatorCode)), __LINE__);
        }
        $this->TicketDesignatorCode = $ticketDesignatorCode;
        return $this;
    }
    /**
     * Get TotalNbrTrips value
     * @return string|null
     */
    public function getTotalNbrTrips()
    {
        return $this->TotalNbrTrips;
    }
    /**
     * Set TotalNbrTrips value
     * @param string $totalNbrTrips
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setTotalNbrTrips($totalNbrTrips = null)
    {
        // validation for constraint: string
        if (!is_null($totalNbrTrips) && !is_string($totalNbrTrips)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalNbrTrips)), __LINE__);
        }
        $this->TotalNbrTrips = $totalNbrTrips;
        return $this;
    }
    /**
     * Get TotalNbrPTC value
     * @return string|null
     */
    public function getTotalNbrPTC()
    {
        return $this->TotalNbrPTC;
    }
    /**
     * Set TotalNbrPTC value
     * @param string $totalNbrPTC
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setTotalNbrPTC($totalNbrPTC = null)
    {
        // validation for constraint: string
        if (!is_null($totalNbrPTC) && !is_string($totalNbrPTC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalNbrPTC)), __LINE__);
        }
        $this->TotalNbrPTC = $totalNbrPTC;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
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

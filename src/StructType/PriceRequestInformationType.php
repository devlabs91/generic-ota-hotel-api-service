<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceRequestInformationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identify pricing source, if negotiated fares are requested and if it is a reprice request. | Used to describe a price request.
 * @subpackage Structs
 */
class PriceRequestInformationType extends AbstractStructBase
{
    /**
     * The NegotiatedFareCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode[]
     */
    public $NegotiatedFareCode;
    /**
     * The RebookOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption[]
     */
    public $RebookOption;
    /**
     * The CabinType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of cabin (i.e., first, business, economy) requested.
     * - use: optional
     * @var string
     */
    public $CabinType;
    /**
     * The TicketingCountry
     * Meta informations extracted from the WSDL
     * - documentation: The ISO country code where the ticket will be issued.
     * - use: optional
     * @var string
     */
    public $TicketingCountry;
    /**
     * The OverrideAirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: The airline which should be used to override the system selected pricing airline.
     * - use: optional
     * @var string
     */
    public $OverrideAirlineCode;
    /**
     * Constructor method for PriceRequestInformationType
     * @uses PriceRequestInformationType::setNegotiatedFareCode()
     * @uses PriceRequestInformationType::setRebookOption()
     * @uses PriceRequestInformationType::setCabinType()
     * @uses PriceRequestInformationType::setTicketingCountry()
     * @uses PriceRequestInformationType::setOverrideAirlineCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode[] $negotiatedFareCode
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption[] $rebookOption
     * @param string $cabinType
     * @param string $ticketingCountry
     * @param string $overrideAirlineCode
     */
    public function __construct(array $negotiatedFareCode = array(), array $rebookOption = array(), $cabinType = null, $ticketingCountry = null, $overrideAirlineCode = null)
    {
        $this
            ->setNegotiatedFareCode($negotiatedFareCode)
            ->setRebookOption($rebookOption)
            ->setCabinType($cabinType)
            ->setTicketingCountry($ticketingCountry)
            ->setOverrideAirlineCode($overrideAirlineCode);
    }
    /**
     * Get NegotiatedFareCode value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode[]|null
     */
    public function getNegotiatedFareCode()
    {
        return $this->NegotiatedFareCode;
    }
    /**
     * Set NegotiatedFareCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode[] $negotiatedFareCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
     */
    public function setNegotiatedFareCode(array $negotiatedFareCode = array())
    {
        foreach ($negotiatedFareCode as $priceRequestInformationTypeNegotiatedFareCodeItem) {
            // validation for constraint: itemType
            if (!$priceRequestInformationTypeNegotiatedFareCodeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode) {
                throw new \InvalidArgumentException(sprintf('The NegotiatedFareCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode, "%s" given', is_object($priceRequestInformationTypeNegotiatedFareCodeItem) ? get_class($priceRequestInformationTypeNegotiatedFareCodeItem) : gettype($priceRequestInformationTypeNegotiatedFareCodeItem)), __LINE__);
            }
        }
        $this->NegotiatedFareCode = $negotiatedFareCode;
        return $this;
    }
    /**
     * Add item to NegotiatedFareCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
     */
    public function addToNegotiatedFareCode(\Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode) {
            throw new \InvalidArgumentException(sprintf('The NegotiatedFareCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NegotiatedFareCode[] = $item;
        return $this;
    }
    /**
     * Get RebookOption value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption[]|null
     */
    public function getRebookOption()
    {
        return $this->RebookOption;
    }
    /**
     * Set RebookOption value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption[] $rebookOption
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
     */
    public function setRebookOption(array $rebookOption = array())
    {
        foreach ($rebookOption as $priceRequestInformationTypeRebookOptionItem) {
            // validation for constraint: itemType
            if (!$priceRequestInformationTypeRebookOptionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption) {
                throw new \InvalidArgumentException(sprintf('The RebookOption property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption, "%s" given', is_object($priceRequestInformationTypeRebookOptionItem) ? get_class($priceRequestInformationTypeRebookOptionItem) : gettype($priceRequestInformationTypeRebookOptionItem)), __LINE__);
            }
        }
        $this->RebookOption = $rebookOption;
        return $this;
    }
    /**
     * Add item to RebookOption value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
     */
    public function addToRebookOption(\Devlabs91\GenericOtaHotelApiService\StructType\RebookOption $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption) {
            throw new \InvalidArgumentException(sprintf('The RebookOption property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RebookOption[] = $item;
        return $this;
    }
    /**
     * Get CabinType value
     * @return string|null
     */
    public function getCabinType()
    {
        return $this->CabinType;
    }
    /**
     * Set CabinType value
     * @param string $cabinType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
     */
    public function setCabinType($cabinType = null)
    {
        // validation for constraint: string
        if (!is_null($cabinType) && !is_string($cabinType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinType)), __LINE__);
        }
        $this->CabinType = $cabinType;
        return $this;
    }
    /**
     * Get TicketingCountry value
     * @return string|null
     */
    public function getTicketingCountry()
    {
        return $this->TicketingCountry;
    }
    /**
     * Set TicketingCountry value
     * @param string $ticketingCountry
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
     */
    public function setTicketingCountry($ticketingCountry = null)
    {
        // validation for constraint: string
        if (!is_null($ticketingCountry) && !is_string($ticketingCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketingCountry)), __LINE__);
        }
        $this->TicketingCountry = $ticketingCountry;
        return $this;
    }
    /**
     * Get OverrideAirlineCode value
     * @return string|null
     */
    public function getOverrideAirlineCode()
    {
        return $this->OverrideAirlineCode;
    }
    /**
     * Set OverrideAirlineCode value
     * @param string $overrideAirlineCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
     */
    public function setOverrideAirlineCode($overrideAirlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($overrideAirlineCode) && !is_string($overrideAirlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($overrideAirlineCode)), __LINE__);
        }
        $this->OverrideAirlineCode = $overrideAirlineCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceRequestInformationType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangeInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Exchange ticket/document information.
 * @subpackage Structs
 */
class ExchangeInfo extends AbstractStructBase
{
    /**
     * The CouponInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo[]
     */
    public $CouponInfo;
    /**
     * The OriginalOriginDestination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OriginalOriginDestination
     */
    public $OriginalOriginDestination;
    /**
     * The TicketDocumentNbr
     * Meta informations extracted from the WSDL
     * - documentation: The new ticket/document number.
     * - use: optional
     * @var string
     */
    public $TicketDocumentNbr;
    /**
     * Constructor method for ExchangeInfo
     * @uses ExchangeInfo::setCouponInfo()
     * @uses ExchangeInfo::setOriginalOriginDestination()
     * @uses ExchangeInfo::setTicketDocumentNbr()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo[] $couponInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OriginalOriginDestination $originalOriginDestination
     * @param string $ticketDocumentNbr
     */
    public function __construct(array $couponInfo = array(), \Devlabs91\GenericOtaHotelApiService\StructType\OriginalOriginDestination $originalOriginDestination = null, $ticketDocumentNbr = null)
    {
        $this
            ->setCouponInfo($couponInfo)
            ->setOriginalOriginDestination($originalOriginDestination)
            ->setTicketDocumentNbr($ticketDocumentNbr);
    }
    /**
     * Get CouponInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo[]|null
     */
    public function getCouponInfo()
    {
        return $this->CouponInfo;
    }
    /**
     * Set CouponInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo[] $couponInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo
     */
    public function setCouponInfo(array $couponInfo = array())
    {
        foreach ($couponInfo as $exchangeInfoCouponInfoItem) {
            // validation for constraint: itemType
            if (!$exchangeInfoCouponInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo) {
                throw new \InvalidArgumentException(sprintf('The CouponInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo, "%s" given', is_object($exchangeInfoCouponInfoItem) ? get_class($exchangeInfoCouponInfoItem) : gettype($exchangeInfoCouponInfoItem)), __LINE__);
            }
        }
        $this->CouponInfo = $couponInfo;
        return $this;
    }
    /**
     * Add item to CouponInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo
     */
    public function addToCouponInfo(\Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo) {
            throw new \InvalidArgumentException(sprintf('The CouponInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CouponInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CouponInfo[] = $item;
        return $this;
    }
    /**
     * Get OriginalOriginDestination value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalOriginDestination|null
     */
    public function getOriginalOriginDestination()
    {
        return $this->OriginalOriginDestination;
    }
    /**
     * Set OriginalOriginDestination value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OriginalOriginDestination $originalOriginDestination
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo
     */
    public function setOriginalOriginDestination(\Devlabs91\GenericOtaHotelApiService\StructType\OriginalOriginDestination $originalOriginDestination = null)
    {
        $this->OriginalOriginDestination = $originalOriginDestination;
        return $this;
    }
    /**
     * Get TicketDocumentNbr value
     * @return string|null
     */
    public function getTicketDocumentNbr()
    {
        return $this->TicketDocumentNbr;
    }
    /**
     * Set TicketDocumentNbr value
     * @param string $ticketDocumentNbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo
     */
    public function setTicketDocumentNbr($ticketDocumentNbr = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDocumentNbr) && !is_string($ticketDocumentNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDocumentNbr)), __LINE__);
        }
        $this->TicketDocumentNbr = $ticketDocumentNbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ExchangeInfo
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailStatusMessages StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for the individual AvailStatusMessage(s). An OTA_HotelAvailNotifRQ contains the availability statuses for a single hotel. Hotel identification information are the attributes of this element.
 * @subpackage Structs
 */
class AvailStatusMessages extends AbstractStructBase
{
    /**
     * The AvailStatusMessage
     * Meta informations extracted from the WSDL
     * - documentation: The AvailStatusMessage. It is here that one indicates whether the inventory is opened, closed, closed on request, etc. | The MinMaxLOSStatusMessage class communicates the set of minimum and maximum length-of-stay availability status
     * changes to be synchronized with another system. | The RateHurdleStatusMessage class defines the setting for rate hurdle controls to be synchronized with the central reservation system.
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType[]
     */
    public $AvailStatusMessage;
    /**
     * The ChainCode
     * @var string
     */
    public $ChainCode;
    /**
     * The BrandCode
     * @var string
     */
    public $BrandCode;
    /**
     * The HotelCode
     * @var string
     */
    public $HotelCode;
    /**
     * The HotelCityCode
     * @var string
     */
    public $HotelCityCode;
    /**
     * The HotelName
     * @var string
     */
    public $HotelName;
    /**
     * The HotelCodeContext
     * @var string
     */
    public $HotelCodeContext;
    /**
     * The ChainName
     * @var string
     */
    public $ChainName;
    /**
     * The BrandName
     * @var string
     */
    public $BrandName;
    /**
     * Constructor method for AvailStatusMessages
     * @uses AvailStatusMessages::setAvailStatusMessage()
     * @uses AvailStatusMessages::setChainCode()
     * @uses AvailStatusMessages::setBrandCode()
     * @uses AvailStatusMessages::setHotelCode()
     * @uses AvailStatusMessages::setHotelCityCode()
     * @uses AvailStatusMessages::setHotelName()
     * @uses AvailStatusMessages::setHotelCodeContext()
     * @uses AvailStatusMessages::setChainName()
     * @uses AvailStatusMessages::setBrandName()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType[] $availStatusMessage
     * @param string $chainCode
     * @param string $brandCode
     * @param string $hotelCode
     * @param string $hotelCityCode
     * @param string $hotelName
     * @param string $hotelCodeContext
     * @param string $chainName
     * @param string $brandName
     */
    public function __construct(array $availStatusMessage = array(), $chainCode = null, $brandCode = null, $hotelCode = null, $hotelCityCode = null, $hotelName = null, $hotelCodeContext = null, $chainName = null, $brandName = null)
    {
        $this
            ->setAvailStatusMessage($availStatusMessage)
            ->setChainCode($chainCode)
            ->setBrandCode($brandCode)
            ->setHotelCode($hotelCode)
            ->setHotelCityCode($hotelCityCode)
            ->setHotelName($hotelName)
            ->setHotelCodeContext($hotelCodeContext)
            ->setChainName($chainName)
            ->setBrandName($brandName);
    }
    /**
     * Get AvailStatusMessage value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType[]|null
     */
    public function getAvailStatusMessage()
    {
        return $this->AvailStatusMessage;
    }
    /**
     * Set AvailStatusMessage value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType[] $availStatusMessage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public function setAvailStatusMessage(array $availStatusMessage = array())
    {
        foreach ($availStatusMessage as $availStatusMessagesAvailStatusMessageItem) {
            // validation for constraint: itemType
            if (!$availStatusMessagesAvailStatusMessageItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType) {
                throw new \InvalidArgumentException(sprintf('The AvailStatusMessage property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType, "%s" given', is_object($availStatusMessagesAvailStatusMessageItem) ? get_class($availStatusMessagesAvailStatusMessageItem) : gettype($availStatusMessagesAvailStatusMessageItem)), __LINE__);
            }
        }
        $this->AvailStatusMessage = $availStatusMessage;
        return $this;
    }
    /**
     * Add item to AvailStatusMessage value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public function addToAvailStatusMessage(\Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType) {
            throw new \InvalidArgumentException(sprintf('The AvailStatusMessage property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailStatusMessage[] = $item;
        return $this;
    }
    /**
     * Get ChainCode value
     * @return string|null
     */
    public function getChainCode()
    {
        return $this->ChainCode;
    }
    /**
     * Set ChainCode value
     * @param string $chainCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public function setChainCode($chainCode = null)
    {
        // validation for constraint: string
        if (!is_null($chainCode) && !is_string($chainCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainCode)), __LINE__);
        }
        $this->ChainCode = $chainCode;
        return $this;
    }
    /**
     * Get BrandCode value
     * @return string|null
     */
    public function getBrandCode()
    {
        return $this->BrandCode;
    }
    /**
     * Set BrandCode value
     * @param string $brandCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public function setBrandCode($brandCode = null)
    {
        // validation for constraint: string
        if (!is_null($brandCode) && !is_string($brandCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandCode)), __LINE__);
        }
        $this->BrandCode = $brandCode;
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Get HotelCityCode value
     * @return string|null
     */
    public function getHotelCityCode()
    {
        return $this->HotelCityCode;
    }
    /**
     * Set HotelCityCode value
     * @param string $hotelCityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public function setHotelCityCode($hotelCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCityCode) && !is_string($hotelCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCityCode)), __LINE__);
        }
        $this->HotelCityCode = $hotelCityCode;
        return $this;
    }
    /**
     * Get HotelName value
     * @return string|null
     */
    public function getHotelName()
    {
        return $this->HotelName;
    }
    /**
     * Set HotelName value
     * @param string $hotelName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public function setHotelName($hotelName = null)
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelName)), __LINE__);
        }
        $this->HotelName = $hotelName;
        return $this;
    }
    /**
     * Get HotelCodeContext value
     * @return string|null
     */
    public function getHotelCodeContext()
    {
        return $this->HotelCodeContext;
    }
    /**
     * Set HotelCodeContext value
     * @param string $hotelCodeContext
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public function setHotelCodeContext($hotelCodeContext = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCodeContext) && !is_string($hotelCodeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCodeContext)), __LINE__);
        }
        $this->HotelCodeContext = $hotelCodeContext;
        return $this;
    }
    /**
     * Get ChainName value
     * @return string|null
     */
    public function getChainName()
    {
        return $this->ChainName;
    }
    /**
     * Set ChainName value
     * @param string $chainName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public function setChainName($chainName = null)
    {
        // validation for constraint: string
        if (!is_null($chainName) && !is_string($chainName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainName)), __LINE__);
        }
        $this->ChainName = $chainName;
        return $this;
    }
    /**
     * Get BrandName value
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->BrandName;
    }
    /**
     * Set BrandName value
     * @param string $brandName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public function setBrandName($brandName = null)
    {
        // validation for constraint: string
        if (!is_null($brandName) && !is_string($brandName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandName)), __LINE__);
        }
        $this->BrandName = $brandName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
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

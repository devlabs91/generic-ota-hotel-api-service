<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmenityOptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the amenity/gift and its form of delivery.
 * @subpackage Structs
 */
class AmenityOptionType extends AbstractStructBase
{
    /**
     * The OptionCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the amenity, gift or option code as defined by the cruise line.
     * - use: required
     * @var string
     */
    public $OptionCode;
    /**
     * The Originator
     * Meta informations extracted from the WSDL
     * - documentation: The person requesting the amenity.
     * - minOccurs: 0
     * @var mixed
     */
    public $Originator;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the additional comments or message.
     * - minOccurs: 0
     * @var mixed
     */
    public $Message;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the quantity of the Amenity order.
     * - use: optional
     * @var string
     */
    public $Quantity;
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the delivery date of the Amenity/ Gift.
     * - use: optional
     * @var string
     */
    public $DeliveryDate;
    /**
     * The DeliveryLocation
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DeliveryLocation;
    /**
     * The ModifiableIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, the existing option is modifiable.
     * - use: optional
     * @var bool
     */
    public $ModifiableIndicator;
    /**
     * Constructor method for AmenityOptionType
     * @uses AmenityOptionType::setOptionCode()
     * @uses AmenityOptionType::setOriginator()
     * @uses AmenityOptionType::setMessage()
     * @uses AmenityOptionType::setQuantity()
     * @uses AmenityOptionType::setDeliveryDate()
     * @uses AmenityOptionType::setDeliveryLocation()
     * @uses AmenityOptionType::setModifiableIndicator()
     * @param string $optionCode
     * @param mixed $originator
     * @param mixed $message
     * @param string $quantity
     * @param string $deliveryDate
     * @param string $deliveryLocation
     * @param bool $modifiableIndicator
     */
    public function __construct($optionCode = null, $originator = null, $message = null, $quantity = null, $deliveryDate = null, $deliveryLocation = null, $modifiableIndicator = null)
    {
        $this
            ->setOptionCode($optionCode)
            ->setOriginator($originator)
            ->setMessage($message)
            ->setQuantity($quantity)
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryLocation($deliveryLocation)
            ->setModifiableIndicator($modifiableIndicator);
    }
    /**
     * Get OptionCode value
     * @return string
     */
    public function getOptionCode()
    {
        return $this->OptionCode;
    }
    /**
     * Set OptionCode value
     * @param string $optionCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmenityOptionType
     */
    public function setOptionCode($optionCode = null)
    {
        // validation for constraint: string
        if (!is_null($optionCode) && !is_string($optionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($optionCode)), __LINE__);
        }
        $this->OptionCode = $optionCode;
        return $this;
    }
    /**
     * Get Originator value
     * @return mixed|null
     */
    public function getOriginator()
    {
        return $this->Originator;
    }
    /**
     * Set Originator value
     * @param mixed $originator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmenityOptionType
     */
    public function setOriginator($originator = null)
    {
        $this->Originator = $originator;
        return $this;
    }
    /**
     * Get Message value
     * @return mixed|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param mixed $message
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmenityOptionType
     */
    public function setMessage($message = null)
    {
        $this->Message = $message;
        return $this;
    }
    /**
     * Get Quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param string $quantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmenityOptionType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmenityOptionType
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get DeliveryLocation value
     * @return string|null
     */
    public function getDeliveryLocation()
    {
        return $this->DeliveryLocation;
    }
    /**
     * Set DeliveryLocation value
     * @param string $deliveryLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmenityOptionType
     */
    public function setDeliveryLocation($deliveryLocation = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryLocation) && !is_string($deliveryLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryLocation)), __LINE__);
        }
        $this->DeliveryLocation = $deliveryLocation;
        return $this;
    }
    /**
     * Get ModifiableIndicator value
     * @return bool|null
     */
    public function getModifiableIndicator()
    {
        return $this->ModifiableIndicator;
    }
    /**
     * Set ModifiableIndicator value
     * @param bool $modifiableIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmenityOptionType
     */
    public function setModifiableIndicator($modifiableIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($modifiableIndicator) && !is_bool($modifiableIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($modifiableIndicator)), __LINE__);
        }
        $this->ModifiableIndicator = $modifiableIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmenityOptionType
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

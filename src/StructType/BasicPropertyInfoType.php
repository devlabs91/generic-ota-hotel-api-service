<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicPropertyInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A abbrivated short summary of hotel descriptive information.
 * @subpackage Structs
 */
class BasicPropertyInfoType extends AbstractStructBase
{
    /**
     * The VendorMessages
     * Meta informations extracted from the WSDL
     * - documentation: A collection of VenderMessages
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $VendorMessages;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - documentation: An element that identifies the geographic position of the hotel. The Position element uses the representation defined by ISO Standard 6709 to define a geographic point location.
     * - minOccurs: 0
     * @var mixed
     */
    public $Position;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Public address of the hotel property.
     * - minOccurs: 0
     * @var mixed
     */
    public $Address;
    /**
     * The ContactNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumbers
     */
    public $ContactNumbers;
    /**
     * The Award
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Award[]
     */
    public $Award;
    /**
     * The RelativePosition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RelativePosition
     */
    public $RelativePosition;
    /**
     * Constructor method for BasicPropertyInfoType
     * @uses BasicPropertyInfoType::setVendorMessages()
     * @uses BasicPropertyInfoType::setPosition()
     * @uses BasicPropertyInfoType::setAddress()
     * @uses BasicPropertyInfoType::setContactNumbers()
     * @uses BasicPropertyInfoType::setAward()
     * @uses BasicPropertyInfoType::setRelativePosition()
     * @param mixed[] $vendorMessages
     * @param mixed $position
     * @param mixed $address
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumbers $contactNumbers
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Award[] $award
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RelativePosition $relativePosition
     */
    public function __construct(array $vendorMessages = array(), $position = null, $address = null, \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumbers $contactNumbers = null, array $award = array(), \Devlabs91\GenericOtaHotelApiService\StructType\RelativePosition $relativePosition = null)
    {
        $this
            ->setVendorMessages($vendorMessages)
            ->setPosition($position)
            ->setAddress($address)
            ->setContactNumbers($contactNumbers)
            ->setAward($award)
            ->setRelativePosition($relativePosition);
    }
    /**
     * Get VendorMessages value
     * @return mixed[]|null
     */
    public function getVendorMessages()
    {
        return $this->VendorMessages;
    }
    /**
     * Set VendorMessages value
     * @throws \InvalidArgumentException
     * @param mixed[] $vendorMessages
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BasicPropertyInfoType
     */
    public function setVendorMessages(array $vendorMessages = array())
    {
        foreach ($vendorMessages as $basicPropertyInfoTypeVendorMessagesItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VendorMessages property can only contain items of anyType, "%s" given', is_object($basicPropertyInfoTypeVendorMessagesItem) ? get_class($basicPropertyInfoTypeVendorMessagesItem) : gettype($basicPropertyInfoTypeVendorMessagesItem)), __LINE__);
            }
        }
        $this->VendorMessages = $vendorMessages;
        return $this;
    }
    /**
     * Add item to VendorMessages value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BasicPropertyInfoType
     */
    public function addToVendorMessages($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VendorMessages property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VendorMessages[] = $item;
        return $this;
    }
    /**
     * Get Position value
     * @return mixed|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param mixed $position
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BasicPropertyInfoType
     */
    public function setPosition($position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Address value
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param mixed $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BasicPropertyInfoType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get ContactNumbers value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumbers|null
     */
    public function getContactNumbers()
    {
        return $this->ContactNumbers;
    }
    /**
     * Set ContactNumbers value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumbers $contactNumbers
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BasicPropertyInfoType
     */
    public function setContactNumbers(\Devlabs91\GenericOtaHotelApiService\StructType\ContactNumbers $contactNumbers = null)
    {
        $this->ContactNumbers = $contactNumbers;
        return $this;
    }
    /**
     * Get Award value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Award[]|null
     */
    public function getAward()
    {
        return $this->Award;
    }
    /**
     * Set Award value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Award[] $award
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BasicPropertyInfoType
     */
    public function setAward(array $award = array())
    {
        foreach ($award as $basicPropertyInfoTypeAwardItem) {
            // validation for constraint: itemType
            if (!$basicPropertyInfoTypeAwardItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Award) {
                throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Award, "%s" given', is_object($basicPropertyInfoTypeAwardItem) ? get_class($basicPropertyInfoTypeAwardItem) : gettype($basicPropertyInfoTypeAwardItem)), __LINE__);
            }
        }
        $this->Award = $award;
        return $this;
    }
    /**
     * Add item to Award value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Award $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BasicPropertyInfoType
     */
    public function addToAward(\Devlabs91\GenericOtaHotelApiService\StructType\Award $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Award) {
            throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Award, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Award[] = $item;
        return $this;
    }
    /**
     * Get RelativePosition value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelativePosition|null
     */
    public function getRelativePosition()
    {
        return $this->RelativePosition;
    }
    /**
     * Set RelativePosition value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RelativePosition $relativePosition
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BasicPropertyInfoType
     */
    public function setRelativePosition(\Devlabs91\GenericOtaHotelApiService\StructType\RelativePosition $relativePosition = null)
    {
        $this->RelativePosition = $relativePosition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BasicPropertyInfoType
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

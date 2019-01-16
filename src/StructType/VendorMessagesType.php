<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorMessagesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of vendor messages.
 * @subpackage Structs
 */
class VendorMessagesType extends AbstractStructBase
{
    /**
     * The VendorMessage
     * Meta informations extracted from the WSDL
     * - documentation: A specific message associated with this vendor.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $VendorMessage;
    /**
     * Constructor method for VendorMessagesType
     * @uses VendorMessagesType::setVendorMessage()
     * @param mixed[] $vendorMessage
     */
    public function __construct(array $vendorMessage = array())
    {
        $this
            ->setVendorMessage($vendorMessage);
    }
    /**
     * Get VendorMessage value
     * @return mixed[]|null
     */
    public function getVendorMessage()
    {
        return $this->VendorMessage;
    }
    /**
     * Set VendorMessage value
     * @throws \InvalidArgumentException
     * @param mixed[] $vendorMessage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessagesType
     */
    public function setVendorMessage(array $vendorMessage = array())
    {
        foreach ($vendorMessage as $vendorMessagesTypeVendorMessageItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VendorMessage property can only contain items of anyType, "%s" given', is_object($vendorMessagesTypeVendorMessageItem) ? get_class($vendorMessagesTypeVendorMessageItem) : gettype($vendorMessagesTypeVendorMessageItem)), __LINE__);
            }
        }
        $this->VendorMessage = $vendorMessage;
        return $this;
    }
    /**
     * Add item to VendorMessage value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessagesType
     */
    public function addToVendorMessage($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VendorMessage property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VendorMessage[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessagesType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrdersType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the details of one or more orders.
 * @subpackage Structs
 */
class OrdersType extends AbstractStructBase
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Order[]
     */
    public $Order;
    /**
     * The OrderType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of orders.
     * - use: optional
     * @var string
     */
    public $OrderType;
    /**
     * The DiscountCode
     * Meta informations extracted from the WSDL
     * - documentation: A discount code that applies to the orders.
     * - use: optional
     * @var string
     */
    public $DiscountCode;
    /**
     * The VendorPurchaseOrderID
     * Meta informations extracted from the WSDL
     * - documentation: The purchase order number of a sales intermediary.
     * - use: optional
     * @var string
     */
    public $VendorPurchaseOrderID;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: The identification number associated to the orders.
     * - use: optional
     * @var string
     */
    public $OrderID;
    /**
     * Constructor method for OrdersType
     * @uses OrdersType::setOrder()
     * @uses OrdersType::setOrderType()
     * @uses OrdersType::setDiscountCode()
     * @uses OrdersType::setVendorPurchaseOrderID()
     * @uses OrdersType::setOrderID()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Order[] $order
     * @param string $orderType
     * @param string $discountCode
     * @param string $vendorPurchaseOrderID
     * @param string $orderID
     */
    public function __construct(array $order = array(), $orderType = null, $discountCode = null, $vendorPurchaseOrderID = null, $orderID = null)
    {
        $this
            ->setOrder($order)
            ->setOrderType($orderType)
            ->setDiscountCode($discountCode)
            ->setVendorPurchaseOrderID($vendorPurchaseOrderID)
            ->setOrderID($orderID);
    }
    /**
     * Get Order value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Order[]|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Order[] $order
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrdersType
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $ordersTypeOrderItem) {
            // validation for constraint: itemType
            if (!$ordersTypeOrderItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Order) {
                throw new \InvalidArgumentException(sprintf('The Order property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Order, "%s" given', is_object($ordersTypeOrderItem) ? get_class($ordersTypeOrderItem) : gettype($ordersTypeOrderItem)), __LINE__);
            }
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Add item to Order value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Order $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrdersType
     */
    public function addToOrder(\Devlabs91\GenericOtaHotelApiService\StructType\Order $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Order) {
            throw new \InvalidArgumentException(sprintf('The Order property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Order, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Order[] = $item;
        return $this;
    }
    /**
     * Get OrderType value
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->OrderType;
    }
    /**
     * Set OrderType value
     * @param string $orderType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrdersType
     */
    public function setOrderType($orderType = null)
    {
        // validation for constraint: string
        if (!is_null($orderType) && !is_string($orderType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderType)), __LINE__);
        }
        $this->OrderType = $orderType;
        return $this;
    }
    /**
     * Get DiscountCode value
     * @return string|null
     */
    public function getDiscountCode()
    {
        return $this->DiscountCode;
    }
    /**
     * Set DiscountCode value
     * @param string $discountCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrdersType
     */
    public function setDiscountCode($discountCode = null)
    {
        // validation for constraint: string
        if (!is_null($discountCode) && !is_string($discountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountCode)), __LINE__);
        }
        $this->DiscountCode = $discountCode;
        return $this;
    }
    /**
     * Get VendorPurchaseOrderID value
     * @return string|null
     */
    public function getVendorPurchaseOrderID()
    {
        return $this->VendorPurchaseOrderID;
    }
    /**
     * Set VendorPurchaseOrderID value
     * @param string $vendorPurchaseOrderID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrdersType
     */
    public function setVendorPurchaseOrderID($vendorPurchaseOrderID = null)
    {
        // validation for constraint: string
        if (!is_null($vendorPurchaseOrderID) && !is_string($vendorPurchaseOrderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorPurchaseOrderID)), __LINE__);
        }
        $this->VendorPurchaseOrderID = $vendorPurchaseOrderID;
        return $this;
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrdersType
     */
    public function setOrderID($orderID = null)
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OrdersType
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

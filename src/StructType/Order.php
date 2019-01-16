<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Order StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information pertaining to a specific order.
 * @subpackage Structs
 */
class Order extends AbstractStructBase
{
    /**
     * The Products
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Products
     */
    public $Products;
    /**
     * The OrderType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of order.
     * - use: optional
     * @var string
     */
    public $OrderType;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: The identification number associated to the orders.
     * - use: optional
     * @var string
     */
    public $OrderID;
    /**
     * The ListOfRecipientRPH
     * Meta informations extracted from the WSDL
     * - documentation: The recipient(s) to whom the order pertains.
     * - use: optional
     * @var string
     */
    public $ListOfRecipientRPH;
    /**
     * Constructor method for Order
     * @uses Order::setProducts()
     * @uses Order::setOrderType()
     * @uses Order::setOrderID()
     * @uses Order::setListOfRecipientRPH()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Products $products
     * @param string $orderType
     * @param string $orderID
     * @param string $listOfRecipientRPH
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Products $products = null, $orderType = null, $orderID = null, $listOfRecipientRPH = null)
    {
        $this
            ->setProducts($products)
            ->setOrderType($orderType)
            ->setOrderID($orderID)
            ->setListOfRecipientRPH($listOfRecipientRPH);
    }
    /**
     * Get Products value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Products|null
     */
    public function getProducts()
    {
        return $this->Products;
    }
    /**
     * Set Products value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Products $products
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Order
     */
    public function setProducts(\Devlabs91\GenericOtaHotelApiService\StructType\Products $products = null)
    {
        $this->Products = $products;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Order
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Order
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
     * Get ListOfRecipientRPH value
     * @return string|null
     */
    public function getListOfRecipientRPH()
    {
        return $this->ListOfRecipientRPH;
    }
    /**
     * Set ListOfRecipientRPH value
     * @param string $listOfRecipientRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Order
     */
    public function setListOfRecipientRPH($listOfRecipientRPH = null)
    {
        // validation for constraint: string
        if (!is_null($listOfRecipientRPH) && !is_string($listOfRecipientRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfRecipientRPH)), __LINE__);
        }
        $this->ListOfRecipientRPH = $listOfRecipientRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Order
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

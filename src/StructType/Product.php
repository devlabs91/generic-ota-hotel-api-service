<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Product StructType
 * Meta informations extracted from the WSDL
 * - documentation: The details associated to a specific product. | The amount related to the specific item (e.g., if the item being purchased is a gift certificate, and only one item is being purchased the full amount is applied to the gift
 * certificate).
 * @subpackage Structs
 */
class Product extends AbstractStructBase
{
    /**
     * The ProductIssueDate
     * Meta informations extracted from the WSDL
     * - documentation: The date or date and time that the product was issued.
     * - use: optional
     * @var string
     */
    public $ProductIssueDate;
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: An identification number associated to the specific product.
     * - use: optional
     * @var string
     */
    public $ProductID;
    /**
     * The ProductType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of product being purchased.
     * - use: optional
     * @var string
     */
    public $ProductType;
    /**
     * The ProductQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of the specific product being purchased.
     * - use: optional
     * @var int
     */
    public $ProductQuantity;
    /**
     * The ProductSerialNumber
     * Meta informations extracted from the WSDL
     * - documentation: The serial number of the specific product.
     * - use: optional
     * @var string
     */
    public $ProductSerialNumber;
    /**
     * The DiscountCode
     * Meta informations extracted from the WSDL
     * - documentation: The discount code that applies to the specific product.
     * - use: optional
     * @var string
     */
    public $DiscountCode;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * The ListOfRecipientRPH
     * Meta informations extracted from the WSDL
     * - documentation: The recipient(s) to whom the product pertains.
     * - use: optional
     * @var string
     */
    public $ListOfRecipientRPH;
    /**
     * Constructor method for Product
     * @uses Product::setProductIssueDate()
     * @uses Product::setProductID()
     * @uses Product::setProductType()
     * @uses Product::setProductQuantity()
     * @uses Product::setProductSerialNumber()
     * @uses Product::setDiscountCode()
     * @uses Product::setStatus()
     * @uses Product::setListOfRecipientRPH()
     * @param string $productIssueDate
     * @param string $productID
     * @param string $productType
     * @param int $productQuantity
     * @param string $productSerialNumber
     * @param string $discountCode
     * @param string $status
     * @param string $listOfRecipientRPH
     */
    public function __construct($productIssueDate = null, $productID = null, $productType = null, $productQuantity = null, $productSerialNumber = null, $discountCode = null, $status = null, $listOfRecipientRPH = null)
    {
        $this
            ->setProductIssueDate($productIssueDate)
            ->setProductID($productID)
            ->setProductType($productType)
            ->setProductQuantity($productQuantity)
            ->setProductSerialNumber($productSerialNumber)
            ->setDiscountCode($discountCode)
            ->setStatus($status)
            ->setListOfRecipientRPH($listOfRecipientRPH);
    }
    /**
     * Get ProductIssueDate value
     * @return string|null
     */
    public function getProductIssueDate()
    {
        return $this->ProductIssueDate;
    }
    /**
     * Set ProductIssueDate value
     * @param string $productIssueDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Product
     */
    public function setProductIssueDate($productIssueDate = null)
    {
        // validation for constraint: string
        if (!is_null($productIssueDate) && !is_string($productIssueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productIssueDate)), __LINE__);
        }
        $this->ProductIssueDate = $productIssueDate;
        return $this;
    }
    /**
     * Get ProductID value
     * @return string|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param string $productID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Product
     */
    public function setProductID($productID = null)
    {
        // validation for constraint: string
        if (!is_null($productID) && !is_string($productID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Get ProductType value
     * @return string|null
     */
    public function getProductType()
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @param string $productType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Product
     */
    public function setProductType($productType = null)
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productType)), __LINE__);
        }
        $this->ProductType = $productType;
        return $this;
    }
    /**
     * Get ProductQuantity value
     * @return int|null
     */
    public function getProductQuantity()
    {
        return $this->ProductQuantity;
    }
    /**
     * Set ProductQuantity value
     * @param int $productQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Product
     */
    public function setProductQuantity($productQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($productQuantity) && !is_numeric($productQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productQuantity)), __LINE__);
        }
        $this->ProductQuantity = $productQuantity;
        return $this;
    }
    /**
     * Get ProductSerialNumber value
     * @return string|null
     */
    public function getProductSerialNumber()
    {
        return $this->ProductSerialNumber;
    }
    /**
     * Set ProductSerialNumber value
     * @param string $productSerialNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Product
     */
    public function setProductSerialNumber($productSerialNumber = null)
    {
        // validation for constraint: string
        if (!is_null($productSerialNumber) && !is_string($productSerialNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productSerialNumber)), __LINE__);
        }
        $this->ProductSerialNumber = $productSerialNumber;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Product
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Product
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Product
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Product
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

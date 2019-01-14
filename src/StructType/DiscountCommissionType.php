<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountCommissionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the fee earned by the agent for the booking or an amount of discount given on a direct booking.
 * @subpackage Structs
 */
class DiscountCommissionType extends AbstractStructBase
{
    /**
     * The DiscountAmount
     * Meta informations extracted from the WSDL
     * - documentation: Value of commission in a given monetary unit or of a discount; may be repeated for multiple currencies e.g. GBP and Euros.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $DiscountAmount;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The DiscountRate
     * Meta informations extracted from the WSDL
     * - documentation: Value of commission as a percentage - present when Rate Code indicates a percentage.
     * - use: optional
     * @var string
     */
    public $DiscountRate;
    /**
     * The DiscountType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DiscountType;
    /**
     * Constructor method for DiscountCommissionType
     * @uses DiscountCommissionType::setDiscountAmount()
     * @uses DiscountCommissionType::setDescription()
     * @uses DiscountCommissionType::setDiscountRate()
     * @uses DiscountCommissionType::setDiscountType()
     * @param mixed[] $discountAmount
     * @param string $description
     * @param string $discountRate
     * @param string $discountType
     */
    public function __construct(array $discountAmount = array(), $description = null, $discountRate = null, $discountType = null)
    {
        $this
            ->setDiscountAmount($discountAmount)
            ->setDescription($description)
            ->setDiscountRate($discountRate)
            ->setDiscountType($discountType);
    }
    /**
     * Get DiscountAmount value
     * @return mixed[]|null
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }
    /**
     * Set DiscountAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $discountAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountCommissionType
     */
    public function setDiscountAmount(array $discountAmount = array())
    {
        foreach ($discountAmount as $discountCommissionTypeDiscountAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The DiscountAmount property can only contain items of anyType, "%s" given', is_object($discountCommissionTypeDiscountAmountItem) ? get_class($discountCommissionTypeDiscountAmountItem) : gettype($discountCommissionTypeDiscountAmountItem)), __LINE__);
            }
        }
        $this->DiscountAmount = $discountAmount;
        return $this;
    }
    /**
     * Add item to DiscountAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountCommissionType
     */
    public function addToDiscountAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The DiscountAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DiscountAmount[] = $item;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountCommissionType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DiscountRate value
     * @return string|null
     */
    public function getDiscountRate()
    {
        return $this->DiscountRate;
    }
    /**
     * Set DiscountRate value
     * @param string $discountRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountCommissionType
     */
    public function setDiscountRate($discountRate = null)
    {
        // validation for constraint: string
        if (!is_null($discountRate) && !is_string($discountRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountRate)), __LINE__);
        }
        $this->DiscountRate = $discountRate;
        return $this;
    }
    /**
     * Get DiscountType value
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->DiscountType;
    }
    /**
     * Set DiscountType value
     * @param string $discountType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountCommissionType
     */
    public function setDiscountType($discountType = null)
    {
        // validation for constraint: string
        if (!is_null($discountType) && !is_string($discountType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountType)), __LINE__);
        }
        $this->DiscountType = $discountType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountCommissionType
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

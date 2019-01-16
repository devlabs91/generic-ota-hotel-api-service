<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAdditionalChargesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Currency code and number of decimal places used.
 * @subpackage Structs
 */
class HotelAdditionalChargesType extends AbstractStructBase
{
    /**
     * The AdditionalCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge[]
     */
    public $AdditionalCharge;
    /**
     * The AmountBeforeTax
     * Meta informations extracted from the WSDL
     * - documentation: Total additional charges before taxes.
     * - use: optional
     * @var string
     */
    public $AmountBeforeTax;
    /**
     * The AmountAfterTax
     * Meta informations extracted from the WSDL
     * - documentation: Total additional charges after taxes.
     * - use: optional
     * @var string
     */
    public $AmountAfterTax;
    /**
     * Constructor method for HotelAdditionalChargesType
     * @uses HotelAdditionalChargesType::setAdditionalCharge()
     * @uses HotelAdditionalChargesType::setAmountBeforeTax()
     * @uses HotelAdditionalChargesType::setAmountAfterTax()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge[] $additionalCharge
     * @param string $amountBeforeTax
     * @param string $amountAfterTax
     */
    public function __construct(array $additionalCharge = array(), $amountBeforeTax = null, $amountAfterTax = null)
    {
        $this
            ->setAdditionalCharge($additionalCharge)
            ->setAmountBeforeTax($amountBeforeTax)
            ->setAmountAfterTax($amountAfterTax);
    }
    /**
     * Get AdditionalCharge value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge[]|null
     */
    public function getAdditionalCharge()
    {
        return $this->AdditionalCharge;
    }
    /**
     * Set AdditionalCharge value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge[] $additionalCharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelAdditionalChargesType
     */
    public function setAdditionalCharge(array $additionalCharge = array())
    {
        foreach ($additionalCharge as $hotelAdditionalChargesTypeAdditionalChargeItem) {
            // validation for constraint: itemType
            if (!$hotelAdditionalChargesTypeAdditionalChargeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge) {
                throw new \InvalidArgumentException(sprintf('The AdditionalCharge property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge, "%s" given', is_object($hotelAdditionalChargesTypeAdditionalChargeItem) ? get_class($hotelAdditionalChargesTypeAdditionalChargeItem) : gettype($hotelAdditionalChargesTypeAdditionalChargeItem)), __LINE__);
            }
        }
        $this->AdditionalCharge = $additionalCharge;
        return $this;
    }
    /**
     * Add item to AdditionalCharge value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelAdditionalChargesType
     */
    public function addToAdditionalCharge(\Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge) {
            throw new \InvalidArgumentException(sprintf('The AdditionalCharge property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalCharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalCharge[] = $item;
        return $this;
    }
    /**
     * Get AmountBeforeTax value
     * @return string|null
     */
    public function getAmountBeforeTax()
    {
        return $this->AmountBeforeTax;
    }
    /**
     * Set AmountBeforeTax value
     * @param string $amountBeforeTax
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelAdditionalChargesType
     */
    public function setAmountBeforeTax($amountBeforeTax = null)
    {
        // validation for constraint: string
        if (!is_null($amountBeforeTax) && !is_string($amountBeforeTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amountBeforeTax)), __LINE__);
        }
        $this->AmountBeforeTax = $amountBeforeTax;
        return $this;
    }
    /**
     * Get AmountAfterTax value
     * @return string|null
     */
    public function getAmountAfterTax()
    {
        return $this->AmountAfterTax;
    }
    /**
     * Set AmountAfterTax value
     * @param string $amountAfterTax
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelAdditionalChargesType
     */
    public function setAmountAfterTax($amountAfterTax = null)
    {
        // validation for constraint: string
        if (!is_null($amountAfterTax) && !is_string($amountAfterTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amountAfterTax)), __LINE__);
        }
        $this->AmountAfterTax = $amountAfterTax;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelAdditionalChargesType
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

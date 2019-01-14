<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalGuestAmounts StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of charges that apply to for additional occupants, guests or service users (over and above the rate's MaxGuest Applicable) | A collection of charges that apply to for additional occupants, guests or service users (over
 * and above the rate's MaxGuest Applicable)
 * @subpackage Structs
 */
class AdditionalGuestAmounts extends AbstractStructBase
{
    /**
     * The AdditionalGuestAmount
     * Meta informations extracted from the WSDL
     * - documentation: Collection of incremental charges per age qualifying code for additional guests. Amount charged for additional occupant is with respect to age group of the base guests.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $AdditionalGuestAmount;
    /**
     * Constructor method for AdditionalGuestAmounts
     * @uses AdditionalGuestAmounts::setAdditionalGuestAmount()
     * @param mixed[] $additionalGuestAmount
     */
    public function __construct(array $additionalGuestAmount = array())
    {
        $this
            ->setAdditionalGuestAmount($additionalGuestAmount);
    }
    /**
     * Get AdditionalGuestAmount value
     * @return mixed[]|null
     */
    public function getAdditionalGuestAmount()
    {
        return $this->AdditionalGuestAmount;
    }
    /**
     * Set AdditionalGuestAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $additionalGuestAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount = array())
    {
        foreach ($additionalGuestAmount as $additionalGuestAmountsAdditionalGuestAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AdditionalGuestAmount property can only contain items of anyType, "%s" given', is_object($additionalGuestAmountsAdditionalGuestAmountItem) ? get_class($additionalGuestAmountsAdditionalGuestAmountItem) : gettype($additionalGuestAmountsAdditionalGuestAmountItem)), __LINE__);
            }
        }
        $this->AdditionalGuestAmount = $additionalGuestAmount;
        return $this;
    }
    /**
     * Add item to AdditionalGuestAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts
     */
    public function addToAdditionalGuestAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AdditionalGuestAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalGuestAmount[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts
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

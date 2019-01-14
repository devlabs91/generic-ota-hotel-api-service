<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalGuestAmount StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of incremental charges per age qualifying code for additional guests. Amount charged for additional occupant is with respect to age group of the base guests.
 * @subpackage Structs
 */
class AdditionalGuestAmount extends AbstractStructBase
{
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Taxes;
    /**
     * The AddlGuestAmtDescription
     * Meta informations extracted from the WSDL
     * - documentation: Text description of the AdditionalGuestAmount in a given language.
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AddlGuestAmtDescription;
    /**
     * The TaxInclusive
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether taxes are included when figuring the additional occupant amounts.
     * - use: optional
     * @var bool
     */
    public $TaxInclusive;
    /**
     * The MaxAdditionalGuests
     * Meta informations extracted from the WSDL
     * - documentation: Increase the base rate by the additional occupant amount for each additional occupant of the same age group up to this maximum number of occupants of this age group.
     * - use: optional
     * @var string
     */
    public $MaxAdditionalGuests;
    /**
     * Constructor method for AdditionalGuestAmount
     * @uses AdditionalGuestAmount::setTaxes()
     * @uses AdditionalGuestAmount::setAddlGuestAmtDescription()
     * @uses AdditionalGuestAmount::setTaxInclusive()
     * @uses AdditionalGuestAmount::setMaxAdditionalGuests()
     * @param mixed $taxes
     * @param mixed[] $addlGuestAmtDescription
     * @param bool $taxInclusive
     * @param string $maxAdditionalGuests
     */
    public function __construct($taxes = null, array $addlGuestAmtDescription = array(), $taxInclusive = null, $maxAdditionalGuests = null)
    {
        $this
            ->setTaxes($taxes)
            ->setAddlGuestAmtDescription($addlGuestAmtDescription)
            ->setTaxInclusive($taxInclusive)
            ->setMaxAdditionalGuests($maxAdditionalGuests);
    }
    /**
     * Get Taxes value
     * @return mixed|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param mixed $taxes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmount
     */
    public function setTaxes($taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get AddlGuestAmtDescription value
     * @return mixed[]|null
     */
    public function getAddlGuestAmtDescription()
    {
        return $this->AddlGuestAmtDescription;
    }
    /**
     * Set AddlGuestAmtDescription value
     * @throws \InvalidArgumentException
     * @param mixed[] $addlGuestAmtDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmount
     */
    public function setAddlGuestAmtDescription(array $addlGuestAmtDescription = array())
    {
        foreach ($addlGuestAmtDescription as $additionalGuestAmountAddlGuestAmtDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AddlGuestAmtDescription property can only contain items of anyType, "%s" given', is_object($additionalGuestAmountAddlGuestAmtDescriptionItem) ? get_class($additionalGuestAmountAddlGuestAmtDescriptionItem) : gettype($additionalGuestAmountAddlGuestAmtDescriptionItem)), __LINE__);
            }
        }
        $this->AddlGuestAmtDescription = $addlGuestAmtDescription;
        return $this;
    }
    /**
     * Add item to AddlGuestAmtDescription value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmount
     */
    public function addToAddlGuestAmtDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AddlGuestAmtDescription property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddlGuestAmtDescription[] = $item;
        return $this;
    }
    /**
     * Get TaxInclusive value
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->TaxInclusive;
    }
    /**
     * Set TaxInclusive value
     * @param bool $taxInclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmount
     */
    public function setTaxInclusive($taxInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxInclusive) && !is_bool($taxInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxInclusive)), __LINE__);
        }
        $this->TaxInclusive = $taxInclusive;
        return $this;
    }
    /**
     * Get MaxAdditionalGuests value
     * @return string|null
     */
    public function getMaxAdditionalGuests()
    {
        return $this->MaxAdditionalGuests;
    }
    /**
     * Set MaxAdditionalGuests value
     * @param string $maxAdditionalGuests
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmount
     */
    public function setMaxAdditionalGuests($maxAdditionalGuests = null)
    {
        // validation for constraint: string
        if (!is_null($maxAdditionalGuests) && !is_string($maxAdditionalGuests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxAdditionalGuests)), __LINE__);
        }
        $this->MaxAdditionalGuests = $maxAdditionalGuests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmount
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

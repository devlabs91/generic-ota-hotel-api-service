<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalGuestAmountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Charges related to additional guests.
 * @subpackage Structs
 */
class AdditionalGuestAmountType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: The amount charged for an additional guest.
     * @var mixed
     */
    public $Amount;
    /**
     * The AddlGuestAmtDescription
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive information regarding amounts charged for additional guests.
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AddlGuestAmtDescription;
    /**
     * The MaxAdditionalGuests
     * Meta informations extracted from the WSDL
     * - documentation: Increase the base rate by the additional occupant amount for each additional occupant of the same age group up to this maximum number of occupants of this age group.
     * - use: optional
     * @var string
     */
    public $MaxAdditionalGuests;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: A code representing the charges related to additional guests. Refer to OpenTravel Code List Additional Detail Type (ADT). Typically, the extra person information code would be used here.
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - documentation: The percent charged for an additional guest.
     * - use: optional
     * @var string
     */
    public $Percent;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: An index code to identify an instance in a collection of like items.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for AdditionalGuestAmountType
     * @uses AdditionalGuestAmountType::setAmount()
     * @uses AdditionalGuestAmountType::setAddlGuestAmtDescription()
     * @uses AdditionalGuestAmountType::setMaxAdditionalGuests()
     * @uses AdditionalGuestAmountType::setType()
     * @uses AdditionalGuestAmountType::setPercent()
     * @uses AdditionalGuestAmountType::setRPH()
     * @param mixed $amount
     * @param mixed[] $addlGuestAmtDescription
     * @param string $maxAdditionalGuests
     * @param string $type
     * @param string $percent
     * @param string $rPH
     */
    public function __construct($amount = null, array $addlGuestAmtDescription = array(), $maxAdditionalGuests = null, $type = null, $percent = null, $rPH = null)
    {
        $this
            ->setAmount($amount)
            ->setAddlGuestAmtDescription($addlGuestAmtDescription)
            ->setMaxAdditionalGuests($maxAdditionalGuests)
            ->setType($type)
            ->setPercent($percent)
            ->setRPH($rPH);
    }
    /**
     * Get Amount value
     * @return mixed|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param mixed $amount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmountType
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmountType
     */
    public function setAddlGuestAmtDescription(array $addlGuestAmtDescription = array())
    {
        foreach ($addlGuestAmtDescription as $additionalGuestAmountTypeAddlGuestAmtDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AddlGuestAmtDescription property can only contain items of anyType, "%s" given', is_object($additionalGuestAmountTypeAddlGuestAmtDescriptionItem) ? get_class($additionalGuestAmountTypeAddlGuestAmtDescriptionItem) : gettype($additionalGuestAmountTypeAddlGuestAmtDescriptionItem)), __LINE__);
            }
        }
        $this->AddlGuestAmtDescription = $addlGuestAmtDescription;
        return $this;
    }
    /**
     * Add item to AddlGuestAmtDescription value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmountType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmountType
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
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmountType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Percent value
     * @return string|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmountType
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percent)), __LINE__);
        }
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmountType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmountType
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

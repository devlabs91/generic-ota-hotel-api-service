<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseByGuestAmt StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base charge for a given number of guests for a given age qualifying code.
 * @subpackage Structs
 */
class BaseByGuestAmt extends TotalType
{
    /**
     * The NumberOfGuestsDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of number of guests and the associated age group (ex 2 Adults).
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $NumberOfGuestsDescription;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: The code associated with this base charge.
     * @var string
     */
    public $Code;
    /**
     * The NumberOfGuests
     * Meta informations extracted from the WSDL
     * - documentation: The number of guests associated with this base charge.
     * - use: optional
     * @var string
     */
    public $NumberOfGuests;
    /**
     * Constructor method for BaseByGuestAmt
     * @uses BaseByGuestAmt::setNumberOfGuestsDescription()
     * @uses BaseByGuestAmt::setCode()
     * @uses BaseByGuestAmt::setNumberOfGuests()
     * @param mixed[] $numberOfGuestsDescription
     * @param string $code
     * @param string $numberOfGuests
     */
    public function __construct(array $numberOfGuestsDescription = array(), $code = null, $numberOfGuests = null)
    {
        $this
            ->setNumberOfGuestsDescription($numberOfGuestsDescription)
            ->setCode($code)
            ->setNumberOfGuests($numberOfGuests);
    }
    /**
     * Get NumberOfGuestsDescription value
     * @return mixed[]|null
     */
    public function getNumberOfGuestsDescription()
    {
        return $this->NumberOfGuestsDescription;
    }
    /**
     * Set NumberOfGuestsDescription value
     * @throws \InvalidArgumentException
     * @param mixed[] $numberOfGuestsDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt
     */
    public function setNumberOfGuestsDescription(array $numberOfGuestsDescription = array())
    {
        foreach ($numberOfGuestsDescription as $baseByGuestAmtNumberOfGuestsDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The NumberOfGuestsDescription property can only contain items of anyType, "%s" given', is_object($baseByGuestAmtNumberOfGuestsDescriptionItem) ? get_class($baseByGuestAmtNumberOfGuestsDescriptionItem) : gettype($baseByGuestAmtNumberOfGuestsDescriptionItem)), __LINE__);
            }
        }
        $this->NumberOfGuestsDescription = $numberOfGuestsDescription;
        return $this;
    }
    /**
     * Add item to NumberOfGuestsDescription value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt
     */
    public function addToNumberOfGuestsDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The NumberOfGuestsDescription property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NumberOfGuestsDescription[] = $item;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get NumberOfGuests value
     * @return string|null
     */
    public function getNumberOfGuests()
    {
        return $this->NumberOfGuests;
    }
    /**
     * Set NumberOfGuests value
     * @param string $numberOfGuests
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt
     */
    public function setNumberOfGuests($numberOfGuests = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfGuests) && !is_string($numberOfGuests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberOfGuests)), __LINE__);
        }
        $this->NumberOfGuests = $numberOfGuests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt
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

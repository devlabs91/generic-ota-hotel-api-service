<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactNumbers StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of hotel contact numbers.
 * @subpackage Structs
 */
class ContactNumbers extends AbstractStructBase
{
    /**
     * The ContactNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumber[]
     */
    public $ContactNumber;
    /**
     * Constructor method for ContactNumbers
     * @uses ContactNumbers::setContactNumber()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumber[] $contactNumber
     */
    public function __construct(array $contactNumber = array())
    {
        $this
            ->setContactNumber($contactNumber);
    }
    /**
     * Get ContactNumber value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumber[]|null
     */
    public function getContactNumber()
    {
        return $this->ContactNumber;
    }
    /**
     * Set ContactNumber value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumber[] $contactNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumbers
     */
    public function setContactNumber(array $contactNumber = array())
    {
        foreach ($contactNumber as $contactNumbersContactNumberItem) {
            // validation for constraint: itemType
            if (!$contactNumbersContactNumberItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumber) {
                throw new \InvalidArgumentException(sprintf('The ContactNumber property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumber, "%s" given', is_object($contactNumbersContactNumberItem) ? get_class($contactNumbersContactNumberItem) : gettype($contactNumbersContactNumberItem)), __LINE__);
            }
        }
        $this->ContactNumber = $contactNumber;
        return $this;
    }
    /**
     * Add item to ContactNumber value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumber $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumbers
     */
    public function addToContactNumber(\Devlabs91\GenericOtaHotelApiService\StructType\ContactNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumber) {
            throw new \InvalidArgumentException(sprintf('The ContactNumber property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContactNumber[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactNumbers
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

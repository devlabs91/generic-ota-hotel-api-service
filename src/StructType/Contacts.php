<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contacts StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of contacts.
 * @subpackage Structs
 */
class Contacts extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - documentation: This may be used for multiple sets of contact information (e.g., sales manager, group contact, event manager).
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $Contact;
    /**
     * Constructor method for Contacts
     * @uses Contacts::setContact()
     * @param mixed[] $contact
     */
    public function __construct(array $contact = array())
    {
        $this
            ->setContact($contact);
    }
    /**
     * Get Contact value
     * @return mixed[]|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @throws \InvalidArgumentException
     * @param mixed[] $contact
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Contacts
     */
    public function setContact(array $contact = array())
    {
        foreach ($contact as $contactsContactItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of anyType, "%s" given', is_object($contactsContactItem) ? get_class($contactsContactItem) : gettype($contactsContactItem)), __LINE__);
            }
        }
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Add item to Contact value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Contacts
     */
    public function addToContact($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Contact[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Contacts
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of email elements.
 * @subpackage Structs
 */
class EmailsType extends AbstractStructBase
{
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Email[]
     */
    public $Email;
    /**
     * Constructor method for EmailsType
     * @uses EmailsType::setEmail()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Email[] $email
     */
    public function __construct(array $email = array())
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get Email value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Email[]|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Email[] $email
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmailsType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $emailsTypeEmailItem) {
            // validation for constraint: itemType
            if (!$emailsTypeEmailItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Email) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Email, "%s" given', is_object($emailsTypeEmailItem) ? get_class($emailsTypeEmailItem) : gettype($emailsTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Email $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmailsType
     */
    public function addToEmail(\Devlabs91\GenericOtaHotelApiService\StructType\Email $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Email) {
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Email, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Email[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmailsType
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

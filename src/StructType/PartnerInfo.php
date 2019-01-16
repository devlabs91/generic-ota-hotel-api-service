<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PartnerInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information on marketing and service partnerships (e.g., a theme park that offers discounts if you book this hotel). This is not a loyalty partnership.
 * @subpackage Structs
 */
class PartnerInfo extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - documentation: Provides general information for the partner.
     * - minOccurs: 0
     * @var mixed
     */
    public $Contact;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Describes the partnership program.
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * Constructor method for PartnerInfo
     * @uses PartnerInfo::setContact()
     * @uses PartnerInfo::setDescription()
     * @param mixed $contact
     * @param mixed $description
     */
    public function __construct($contact = null, $description = null)
    {
        $this
            ->setContact($contact)
            ->setDescription($description);
    }
    /**
     * Get Contact value
     * @return mixed|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param mixed $contact
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo
     */
    public function setContact($contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo
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

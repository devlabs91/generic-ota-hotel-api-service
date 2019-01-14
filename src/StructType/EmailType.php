<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Electronic email addresses, in IETF specified format. | Used for Character Strings, length 1 to 128
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class EmailType extends AbstractStructBase
{
    /**
     * The EmailType
     * Meta informations extracted from the WSDL
     * - documentation: Defines the purpose of the e-mail address (e.g. personal, business, listserve). Refer to OTA Code List Email Address Type (EAT).
     * - use: optional
     * @var string
     */
    public $EmailType;
    /**
     * Constructor method for EmailType
     * @uses EmailType::setEmailType()
     * @param string $emailType
     */
    public function __construct($emailType = null)
    {
        $this
            ->setEmailType($emailType);
    }
    /**
     * Get EmailType value
     * @return string|null
     */
    public function getEmailType()
    {
        return $this->EmailType;
    }
    /**
     * Set EmailType value
     * @param string $emailType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmailType
     */
    public function setEmailType($emailType = null)
    {
        // validation for constraint: string
        if (!is_null($emailType) && !is_string($emailType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailType)), __LINE__);
        }
        $this->EmailType = $emailType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmailType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Electronic email addresses, in IETF specified format. | Allows for control of the sharing of email information between parties. | Identifies whether or not this is the default email address. | Used for Character Strings, length 1 to
 * 128.
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class EmailType extends AbstractStructBase
{
    /**
     * The EmailType
     * Meta informations extracted from the WSDL
     * - documentation: Defines the purpose of the e-mail address (e.g. personal, business, listserve). Refer to OpenTravel Code List Email Address Type (EAT).
     * - use: optional
     * @var string
     */
    public $EmailType;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: Used elsewhere in the message to reference this specific email address.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: A remark associated with the e-mail address.
     * - use: optional
     * @var string
     */
    public $Remark;
    /**
     * Constructor method for EmailType
     * @uses EmailType::setEmailType()
     * @uses EmailType::setRPH()
     * @uses EmailType::setRemark()
     * @param string $emailType
     * @param string $rPH
     * @param string $remark
     */
    public function __construct($emailType = null, $rPH = null, $remark = null)
    {
        $this
            ->setEmailType($emailType)
            ->setRPH($rPH)
            ->setRemark($remark);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmailType
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
     * Get Remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param string $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EmailType
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remark)), __LINE__);
        }
        $this->Remark = $remark;
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

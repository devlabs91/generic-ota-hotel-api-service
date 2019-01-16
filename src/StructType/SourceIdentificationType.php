<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SourceIdentificationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Where details of the package can be found. | Used for Character Strings, length 0 to 64.
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class SourceIdentificationType extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: E.g. brochure code.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Issue
     * Meta informations extracted from the WSDL
     * - documentation: e.g. brochure edition/issue reference.
     * - use: optional
     * @var string
     */
    public $Issue;
    /**
     * The Page
     * Meta informations extracted from the WSDL
     * - documentation: e.g. page number in the brochure.
     * - use: optional
     * @var string
     */
    public $Page;
    /**
     * Constructor method for SourceIdentificationType
     * @uses SourceIdentificationType::setCode()
     * @uses SourceIdentificationType::setIssue()
     * @uses SourceIdentificationType::setPage()
     * @param string $code
     * @param string $issue
     * @param string $page
     */
    public function __construct($code = null, $issue = null, $page = null)
    {
        $this
            ->setCode($code)
            ->setIssue($issue)
            ->setPage($page);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceIdentificationType
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
     * Get Issue value
     * @return string|null
     */
    public function getIssue()
    {
        return $this->Issue;
    }
    /**
     * Set Issue value
     * @param string $issue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceIdentificationType
     */
    public function setIssue($issue = null)
    {
        // validation for constraint: string
        if (!is_null($issue) && !is_string($issue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issue)), __LINE__);
        }
        $this->Issue = $issue;
        return $this;
    }
    /**
     * Get Page value
     * @return string|null
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param string $page
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceIdentificationType
     */
    public function setPage($page = null)
    {
        // validation for constraint: string
        if (!is_null($page) && !is_string($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($page)), __LINE__);
        }
        $this->Page = $page;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceIdentificationType
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

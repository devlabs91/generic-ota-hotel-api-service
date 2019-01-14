<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllianceMember StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identification of a company that participates in an alliance or consortium to which the primary business entity identified in this profile belongs.
 * @subpackage Structs
 */
class AllianceMember extends CompanyNameType
{
    /**
     * The MemberCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the alliance or consortium member by code.
     * @var string
     */
    public $MemberCode;
    /**
     * Constructor method for AllianceMember
     * @uses AllianceMember::setMemberCode()
     * @param string $memberCode
     */
    public function __construct($memberCode = null)
    {
        $this
            ->setMemberCode($memberCode);
    }
    /**
     * Get MemberCode value
     * @return string|null
     */
    public function getMemberCode()
    {
        return $this->MemberCode;
    }
    /**
     * Set MemberCode value
     * @param string $memberCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AllianceMember
     */
    public function setMemberCode($memberCode = null)
    {
        // validation for constraint: string
        if (!is_null($memberCode) && !is_string($memberCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memberCode)), __LINE__);
        }
        $this->MemberCode = $memberCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AllianceMember
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

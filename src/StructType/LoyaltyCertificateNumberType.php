<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyCertificateNumberType StructType
 * @subpackage Structs
 */
class LoyaltyCertificateNumberType extends AbstractStructBase
{
    /**
     * The CertificateNumber
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CertificateNumber;
    /**
     * The MemberNumber
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MemberNumber;
    /**
     * The ProgramName
     * Meta informations extracted from the WSDL
     * - documentation: This identifies the loyalty program.
     * - use: optional
     * @var string
     */
    public $ProgramName;
    /**
     * Constructor method for LoyaltyCertificateNumberType
     * @uses LoyaltyCertificateNumberType::setCertificateNumber()
     * @uses LoyaltyCertificateNumberType::setMemberNumber()
     * @uses LoyaltyCertificateNumberType::setProgramName()
     * @param string $certificateNumber
     * @param string $memberNumber
     * @param string $programName
     */
    public function __construct($certificateNumber = null, $memberNumber = null, $programName = null)
    {
        $this
            ->setCertificateNumber($certificateNumber)
            ->setMemberNumber($memberNumber)
            ->setProgramName($programName);
    }
    /**
     * Get CertificateNumber value
     * @return string|null
     */
    public function getCertificateNumber()
    {
        return $this->CertificateNumber;
    }
    /**
     * Set CertificateNumber value
     * @param string $certificateNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificateNumberType
     */
    public function setCertificateNumber($certificateNumber = null)
    {
        // validation for constraint: string
        if (!is_null($certificateNumber) && !is_string($certificateNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($certificateNumber)), __LINE__);
        }
        $this->CertificateNumber = $certificateNumber;
        return $this;
    }
    /**
     * Get MemberNumber value
     * @return string|null
     */
    public function getMemberNumber()
    {
        return $this->MemberNumber;
    }
    /**
     * Set MemberNumber value
     * @param string $memberNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificateNumberType
     */
    public function setMemberNumber($memberNumber = null)
    {
        // validation for constraint: string
        if (!is_null($memberNumber) && !is_string($memberNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memberNumber)), __LINE__);
        }
        $this->MemberNumber = $memberNumber;
        return $this;
    }
    /**
     * Get ProgramName value
     * @return string|null
     */
    public function getProgramName()
    {
        return $this->ProgramName;
    }
    /**
     * Set ProgramName value
     * @param string $programName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificateNumberType
     */
    public function setProgramName($programName = null)
    {
        // validation for constraint: string
        if (!is_null($programName) && !is_string($programName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programName)), __LINE__);
        }
        $this->ProgramName = $programName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificateNumberType
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

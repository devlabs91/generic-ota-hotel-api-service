<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureOnFile StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates if the signature is authorized as a form of guarantee. In some countries, the customer can sign the payment card slip as a form of guarantee. | Provides the date range for which the signature is accepted for a guarantee.
 * @subpackage Structs
 */
class SignatureOnFile extends AbstractStructBase
{
    /**
     * The SignatureOnFileIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates a signature has been obtained.
     * - use: optional
     * @var bool
     */
    public $SignatureOnFileIndicator;
    /**
     * Constructor method for SignatureOnFile
     * @uses SignatureOnFile::setSignatureOnFileIndicator()
     * @param bool $signatureOnFileIndicator
     */
    public function __construct($signatureOnFileIndicator = null)
    {
        $this
            ->setSignatureOnFileIndicator($signatureOnFileIndicator);
    }
    /**
     * Get SignatureOnFileIndicator value
     * @return bool|null
     */
    public function getSignatureOnFileIndicator()
    {
        return $this->SignatureOnFileIndicator;
    }
    /**
     * Set SignatureOnFileIndicator value
     * @param bool $signatureOnFileIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureOnFile
     */
    public function setSignatureOnFileIndicator($signatureOnFileIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($signatureOnFileIndicator) && !is_bool($signatureOnFileIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($signatureOnFileIndicator)), __LINE__);
        }
        $this->SignatureOnFileIndicator = $signatureOnFileIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureOnFile
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

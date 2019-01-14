<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignedInfoType StructType
 * @subpackage Structs
 */
class SignedInfoType extends AbstractStructBase
{
    /**
     * The CanonicalizationMethod
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CanonicalizationMethodType
     */
    public $CanonicalizationMethod;
    /**
     * The SignatureMethod
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType
     */
    public $SignatureMethod;
    /**
     * The Reference
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType
     */
    public $Reference;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for SignedInfoType
     * @uses SignedInfoType::setCanonicalizationMethod()
     * @uses SignedInfoType::setSignatureMethod()
     * @uses SignedInfoType::setReference()
     * @uses SignedInfoType::setId()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CanonicalizationMethodType $canonicalizationMethod
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType $signatureMethod
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType $reference
     * @param string $id
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\CanonicalizationMethodType $canonicalizationMethod = null, \Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType $signatureMethod = null, \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType $reference = null, $id = null)
    {
        $this
            ->setCanonicalizationMethod($canonicalizationMethod)
            ->setSignatureMethod($signatureMethod)
            ->setReference($reference)
            ->setId($id);
    }
    /**
     * Get CanonicalizationMethod value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CanonicalizationMethodType|null
     */
    public function getCanonicalizationMethod()
    {
        return $this->CanonicalizationMethod;
    }
    /**
     * Set CanonicalizationMethod value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CanonicalizationMethodType $canonicalizationMethod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType
     */
    public function setCanonicalizationMethod(\Devlabs91\GenericOtaHotelApiService\StructType\CanonicalizationMethodType $canonicalizationMethod = null)
    {
        $this->CanonicalizationMethod = $canonicalizationMethod;
        return $this;
    }
    /**
     * Get SignatureMethod value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType|null
     */
    public function getSignatureMethod()
    {
        return $this->SignatureMethod;
    }
    /**
     * Set SignatureMethod value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType $signatureMethod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType
     */
    public function setSignatureMethod(\Devlabs91\GenericOtaHotelApiService\StructType\SignatureMethodType $signatureMethod = null)
    {
        $this->SignatureMethod = $signatureMethod;
        return $this;
    }
    /**
     * Get Reference value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType $reference
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType
     */
    public function setReference(\Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType $reference = null)
    {
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType
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

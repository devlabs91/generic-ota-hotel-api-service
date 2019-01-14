<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type represents a reference to an external security token.
 * @subpackage Structs
 */
class ReferenceType extends AbstractStructBase
{
    /**
     * The Transforms
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TransformsType
     */
    public $Transforms;
    /**
     * The DigestMethod
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DigestMethodType
     */
    public $DigestMethod;
    /**
     * The DigestValue
     * @var DigestValueType
     */
    public $DigestValue;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * The URI
     * @var string
     */
    public $URI;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * The ValueType
     * @var string
     */
    public $ValueType;
    /**
     * Constructor method for ReferenceType
     * @uses ReferenceType::setTransforms()
     * @uses ReferenceType::setDigestMethod()
     * @uses ReferenceType::setDigestValue()
     * @uses ReferenceType::setId()
     * @uses ReferenceType::setURI()
     * @uses ReferenceType::setType()
     * @uses ReferenceType::setValueType()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TransformsType $transforms
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DigestMethodType $digestMethod
     * @param DigestValueType $digestValue
     * @param string $id
     * @param string $uRI
     * @param string $type
     * @param string $valueType
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\TransformsType $transforms = null, \Devlabs91\GenericOtaHotelApiService\StructType\DigestMethodType $digestMethod = null, DigestValueType $digestValue = null, $id = null, $uRI = null, $type = null, $valueType = null)
    {
        $this
            ->setTransforms($transforms)
            ->setDigestMethod($digestMethod)
            ->setDigestValue($digestValue)
            ->setId($id)
            ->setURI($uRI)
            ->setType($type)
            ->setValueType($valueType);
    }
    /**
     * Get Transforms value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransformsType|null
     */
    public function getTransforms()
    {
        return $this->Transforms;
    }
    /**
     * Set Transforms value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TransformsType $transforms
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType
     */
    public function setTransforms(\Devlabs91\GenericOtaHotelApiService\StructType\TransformsType $transforms = null)
    {
        $this->Transforms = $transforms;
        return $this;
    }
    /**
     * Get DigestMethod value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DigestMethodType|null
     */
    public function getDigestMethod()
    {
        return $this->DigestMethod;
    }
    /**
     * Set DigestMethod value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DigestMethodType $digestMethod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType
     */
    public function setDigestMethod(\Devlabs91\GenericOtaHotelApiService\StructType\DigestMethodType $digestMethod = null)
    {
        $this->DigestMethod = $digestMethod;
        return $this;
    }
    /**
     * Get DigestValue value
     * @return DigestValueType|null
     */
    public function getDigestValue()
    {
        return $this->DigestValue;
    }
    /**
     * Set DigestValue value
     * @param DigestValueType $digestValue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType
     */
    public function setDigestValue(DigestValueType $digestValue = null)
    {
        $this->DigestValue = $digestValue;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType
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
     * Get URI value
     * @return string|null
     */
    public function getURI()
    {
        return $this->URI;
    }
    /**
     * Set URI value
     * @param string $uRI
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType
     */
    public function setURI($uRI = null)
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRI)), __LINE__);
        }
        $this->URI = $uRI;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ValueType value
     * @return string|null
     */
    public function getValueType()
    {
        return $this->ValueType;
    }
    /**
     * Set ValueType value
     * @param string $valueType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType
     */
    public function setValueType($valueType = null)
    {
        // validation for constraint: string
        if (!is_null($valueType) && !is_string($valueType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valueType)), __LINE__);
        }
        $this->ValueType = $valueType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType
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

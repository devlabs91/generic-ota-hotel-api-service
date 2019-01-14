<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureType StructType
 * @subpackage Structs
 */
class SignatureType extends AbstractStructBase
{
    /**
     * The SignedInfo
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType
     */
    public $SignedInfo;
    /**
     * The SignatureValue
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SignatureValueType
     */
    public $SignatureValue;
    /**
     * The KeyInfo
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\KeyInfoType
     */
    public $KeyInfo;
    /**
     * The Object
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ObjectType
     */
    public $Object;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for SignatureType
     * @uses SignatureType::setSignedInfo()
     * @uses SignatureType::setSignatureValue()
     * @uses SignatureType::setKeyInfo()
     * @uses SignatureType::setObject()
     * @uses SignatureType::setId()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType $signedInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SignatureValueType $signatureValue
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\KeyInfoType $keyInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ObjectType $object
     * @param string $id
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType $signedInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\SignatureValueType $signatureValue = null, \Devlabs91\GenericOtaHotelApiService\StructType\KeyInfoType $keyInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\ObjectType $object = null, $id = null)
    {
        $this
            ->setSignedInfo($signedInfo)
            ->setSignatureValue($signatureValue)
            ->setKeyInfo($keyInfo)
            ->setObject($object)
            ->setId($id);
    }
    /**
     * Get SignedInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType|null
     */
    public function getSignedInfo()
    {
        return $this->SignedInfo;
    }
    /**
     * Set SignedInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType $signedInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureType
     */
    public function setSignedInfo(\Devlabs91\GenericOtaHotelApiService\StructType\SignedInfoType $signedInfo = null)
    {
        $this->SignedInfo = $signedInfo;
        return $this;
    }
    /**
     * Get SignatureValue value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureValueType|null
     */
    public function getSignatureValue()
    {
        return $this->SignatureValue;
    }
    /**
     * Set SignatureValue value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SignatureValueType $signatureValue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureType
     */
    public function setSignatureValue(\Devlabs91\GenericOtaHotelApiService\StructType\SignatureValueType $signatureValue = null)
    {
        $this->SignatureValue = $signatureValue;
        return $this;
    }
    /**
     * Get KeyInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\KeyInfoType|null
     */
    public function getKeyInfo()
    {
        return $this->KeyInfo;
    }
    /**
     * Set KeyInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\KeyInfoType $keyInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureType
     */
    public function setKeyInfo(\Devlabs91\GenericOtaHotelApiService\StructType\KeyInfoType $keyInfo = null)
    {
        $this->KeyInfo = $keyInfo;
        return $this;
    }
    /**
     * Get Object value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ObjectType|null
     */
    public function getObject()
    {
        return $this->Object;
    }
    /**
     * Set Object value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ObjectType $object
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureType
     */
    public function setObject(\Devlabs91\GenericOtaHotelApiService\StructType\ObjectType $object = null)
    {
        $this->Object = $object;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SignatureType
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

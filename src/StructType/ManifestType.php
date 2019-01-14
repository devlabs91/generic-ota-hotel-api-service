<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManifestType StructType
 * @subpackage Structs
 */
class ManifestType extends AbstractStructBase
{
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
     * Constructor method for ManifestType
     * @uses ManifestType::setReference()
     * @uses ManifestType::setId()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType $reference
     * @param string $id
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\ReferenceType $reference = null, $id = null)
    {
        $this
            ->setReference($reference)
            ->setId($id);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ManifestType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ManifestType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ManifestType
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

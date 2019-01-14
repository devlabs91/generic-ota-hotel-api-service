<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanCandidate StructType
 * Meta informations extracted from the WSDL
 * - documentation: element used to identify available products and rates.
 * @subpackage Structs
 */
class RatePlanCandidate extends AbstractStructBase
{
    /**
     * The RatePlanType
     * @var string
     */
    public $RatePlanType;
    /**
     * The RatePlanCode
     * @var string
     */
    public $RatePlanCode;
    /**
     * The RatePlanID
     * @var string
     */
    public $RatePlanID;
    /**
     * The RatePlanQualifier
     * @var bool
     */
    public $RatePlanQualifier;
    /**
     * The RatePlanCategory
     * @var string
     */
    public $RatePlanCategory;
    /**
     * Constructor method for RatePlanCandidate
     * @uses RatePlanCandidate::setRatePlanType()
     * @uses RatePlanCandidate::setRatePlanCode()
     * @uses RatePlanCandidate::setRatePlanID()
     * @uses RatePlanCandidate::setRatePlanQualifier()
     * @uses RatePlanCandidate::setRatePlanCategory()
     * @param string $ratePlanType
     * @param string $ratePlanCode
     * @param string $ratePlanID
     * @param bool $ratePlanQualifier
     * @param string $ratePlanCategory
     */
    public function __construct($ratePlanType = null, $ratePlanCode = null, $ratePlanID = null, $ratePlanQualifier = null, $ratePlanCategory = null)
    {
        $this
            ->setRatePlanType($ratePlanType)
            ->setRatePlanCode($ratePlanCode)
            ->setRatePlanID($ratePlanID)
            ->setRatePlanQualifier($ratePlanQualifier)
            ->setRatePlanCategory($ratePlanCategory);
    }
    /**
     * Get RatePlanType value
     * @return string|null
     */
    public function getRatePlanType()
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setRatePlanType($ratePlanType = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get RatePlanID value
     * @return string|null
     */
    public function getRatePlanID()
    {
        return $this->RatePlanID;
    }
    /**
     * Set RatePlanID value
     * @param string $ratePlanID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setRatePlanID($ratePlanID = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanID) && !is_string($ratePlanID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanID)), __LINE__);
        }
        $this->RatePlanID = $ratePlanID;
        return $this;
    }
    /**
     * Get RatePlanQualifier value
     * @return bool|null
     */
    public function getRatePlanQualifier()
    {
        return $this->RatePlanQualifier;
    }
    /**
     * Set RatePlanQualifier value
     * @param bool $ratePlanQualifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setRatePlanQualifier($ratePlanQualifier = null)
    {
        // validation for constraint: boolean
        if (!is_null($ratePlanQualifier) && !is_bool($ratePlanQualifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ratePlanQualifier)), __LINE__);
        }
        $this->RatePlanQualifier = $ratePlanQualifier;
        return $this;
    }
    /**
     * Get RatePlanCategory value
     * @return string|null
     */
    public function getRatePlanCategory()
    {
        return $this->RatePlanCategory;
    }
    /**
     * Set RatePlanCategory value
     * @param string $ratePlanCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setRatePlanCategory($ratePlanCategory = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCategory) && !is_string($ratePlanCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCategory)), __LINE__);
        }
        $this->RatePlanCategory = $ratePlanCategory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
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

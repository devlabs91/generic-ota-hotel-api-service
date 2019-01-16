<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Additional StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on additional driver(s), possibly including frequent renter number. | Specifies the dates for how long the additional driver should be part of the rental contract. | Used to define the specific type of additional person
 * (Adult, YoungDriver, YoungerDriver, or it may be a code that is acceptable to both Trading Partners)
 * @subpackage Structs
 */
class Additional extends CustomerType
{
    /**
     * The CorpDiscountName
     * Meta informations extracted from the WSDL
     * - documentation: This is the name of the organization associated with the corporate discount number.
     * - use: optional
     * @var string
     */
    public $CorpDiscountName;
    /**
     * The CorpDiscountNmbr
     * Meta informations extracted from the WSDL
     * - documentation: This is the code used to identify if the additional driver is eligible for benefits associated with a specific organization.
     * - use: optional
     * @var string
     */
    public $CorpDiscountNmbr;
    /**
     * The QualificationMethod
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $QualificationMethod;
    /**
     * Constructor method for Additional
     * @uses Additional::setCorpDiscountName()
     * @uses Additional::setCorpDiscountNmbr()
     * @uses Additional::setQualificationMethod()
     * @param string $corpDiscountName
     * @param string $corpDiscountNmbr
     * @param string $qualificationMethod
     */
    public function __construct($corpDiscountName = null, $corpDiscountNmbr = null, $qualificationMethod = null)
    {
        $this
            ->setCorpDiscountName($corpDiscountName)
            ->setCorpDiscountNmbr($corpDiscountNmbr)
            ->setQualificationMethod($qualificationMethod);
    }
    /**
     * Get CorpDiscountName value
     * @return string|null
     */
    public function getCorpDiscountName()
    {
        return $this->CorpDiscountName;
    }
    /**
     * Set CorpDiscountName value
     * @param string $corpDiscountName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Additional
     */
    public function setCorpDiscountName($corpDiscountName = null)
    {
        // validation for constraint: string
        if (!is_null($corpDiscountName) && !is_string($corpDiscountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corpDiscountName)), __LINE__);
        }
        $this->CorpDiscountName = $corpDiscountName;
        return $this;
    }
    /**
     * Get CorpDiscountNmbr value
     * @return string|null
     */
    public function getCorpDiscountNmbr()
    {
        return $this->CorpDiscountNmbr;
    }
    /**
     * Set CorpDiscountNmbr value
     * @param string $corpDiscountNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Additional
     */
    public function setCorpDiscountNmbr($corpDiscountNmbr = null)
    {
        // validation for constraint: string
        if (!is_null($corpDiscountNmbr) && !is_string($corpDiscountNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corpDiscountNmbr)), __LINE__);
        }
        $this->CorpDiscountNmbr = $corpDiscountNmbr;
        return $this;
    }
    /**
     * Get QualificationMethod value
     * @return string|null
     */
    public function getQualificationMethod()
    {
        return $this->QualificationMethod;
    }
    /**
     * Set QualificationMethod value
     * @param string $qualificationMethod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Additional
     */
    public function setQualificationMethod($qualificationMethod = null)
    {
        // validation for constraint: string
        if (!is_null($qualificationMethod) && !is_string($qualificationMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qualificationMethod)), __LINE__);
        }
        $this->QualificationMethod = $qualificationMethod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Additional
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

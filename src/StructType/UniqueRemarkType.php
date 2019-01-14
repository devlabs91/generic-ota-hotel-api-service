<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniqueRemarkType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Categorized remark information for the booking
 * @subpackage Structs
 */
class UniqueRemarkType extends AbstractStructBase
{
    /**
     * The RemarkType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $RemarkType;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for UniqueRemarkType
     * @uses UniqueRemarkType::setRemarkType()
     * @uses UniqueRemarkType::set_()
     * @param string $remarkType
     * @param string $_
     */
    public function __construct($remarkType = null, $_ = null)
    {
        $this
            ->setRemarkType($remarkType)
            ->set_($_);
    }
    /**
     * Get RemarkType value
     * @return string
     */
    public function getRemarkType()
    {
        return $this->RemarkType;
    }
    /**
     * Set RemarkType value
     * @param string $remarkType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueRemarkType
     */
    public function setRemarkType($remarkType = null)
    {
        // validation for constraint: string
        if (!is_null($remarkType) && !is_string($remarkType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarkType)), __LINE__);
        }
        $this->RemarkType = $remarkType;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueRemarkType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueRemarkType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WarningsType StructType
 * @subpackage Structs
 */
class WarningsType extends AbstractStructBase
{
    /**
     * The Warning
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $Warning;
    /**
     * Constructor method for WarningsType
     * @uses WarningsType::setWarning()
     * @param mixed[] $warning
     */
    public function __construct(array $warning = array())
    {
        $this
            ->setWarning($warning);
    }
    /**
     * Get Warning value
     * @return mixed[]|null
     */
    public function getWarning()
    {
        return $this->Warning;
    }
    /**
     * Set Warning value
     * @throws \InvalidArgumentException
     * @param mixed[] $warning
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WarningsType
     */
    public function setWarning(array $warning = array())
    {
        foreach ($warning as $warningsTypeWarningItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Warning property can only contain items of anyType, "%s" given', is_object($warningsTypeWarningItem) ? get_class($warningsTypeWarningItem) : gettype($warningsTypeWarningItem)), __LINE__);
            }
        }
        $this->Warning = $warning;
        return $this;
    }
    /**
     * Add item to Warning value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WarningsType
     */
    public function addToWarning($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Warning property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Warning[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WarningsType
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

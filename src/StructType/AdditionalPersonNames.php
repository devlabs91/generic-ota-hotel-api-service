<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalPersonNames StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container for additional person names.
 * @subpackage Structs
 */
class AdditionalPersonNames extends AbstractStructBase
{
    /**
     * The AdditionalPersonName
     * Meta informations extracted from the WSDL
     * - documentation: The name of an additional person listed on this document.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $AdditionalPersonName;
    /**
     * Constructor method for AdditionalPersonNames
     * @uses AdditionalPersonNames::setAdditionalPersonName()
     * @param mixed[] $additionalPersonName
     */
    public function __construct(array $additionalPersonName = array())
    {
        $this
            ->setAdditionalPersonName($additionalPersonName);
    }
    /**
     * Get AdditionalPersonName value
     * @return mixed[]|null
     */
    public function getAdditionalPersonName()
    {
        return $this->AdditionalPersonName;
    }
    /**
     * Set AdditionalPersonName value
     * @throws \InvalidArgumentException
     * @param mixed[] $additionalPersonName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalPersonNames
     */
    public function setAdditionalPersonName(array $additionalPersonName = array())
    {
        foreach ($additionalPersonName as $additionalPersonNamesAdditionalPersonNameItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AdditionalPersonName property can only contain items of anyType, "%s" given', is_object($additionalPersonNamesAdditionalPersonNameItem) ? get_class($additionalPersonNamesAdditionalPersonNameItem) : gettype($additionalPersonNamesAdditionalPersonNameItem)), __LINE__);
            }
        }
        $this->AdditionalPersonName = $additionalPersonName;
        return $this;
    }
    /**
     * Add item to AdditionalPersonName value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalPersonNames
     */
    public function addToAdditionalPersonName($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AdditionalPersonName property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalPersonName[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalPersonNames
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Applicable tax element. This element allows for both percentages and flat amounts. If one field is used, the other should be zero since logically, taxes should be calculated in only one of the two ways. | Provides details of the tax.
 * | Provides the effective and expiry dates for the tax. | Specifies charge information by unit (e.g., room, person, item) and frequency (e.g., daily, weekly, stay).
 * @subpackage Structs
 */
class TaxType extends AbstractStructBase
{
    /**
     * The TaxDescription
     * Meta informations extracted from the WSDL
     * - documentation: Text description of the taxes in a given language.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TaxDescription;
    /**
     * Constructor method for TaxType
     * @uses TaxType::setTaxDescription()
     * @param mixed[] $taxDescription
     */
    public function __construct(array $taxDescription = array())
    {
        $this
            ->setTaxDescription($taxDescription);
    }
    /**
     * Get TaxDescription value
     * @return mixed[]|null
     */
    public function getTaxDescription()
    {
        return $this->TaxDescription;
    }
    /**
     * Set TaxDescription value
     * @throws \InvalidArgumentException
     * @param mixed[] $taxDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxType
     */
    public function setTaxDescription(array $taxDescription = array())
    {
        foreach ($taxDescription as $taxTypeTaxDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TaxDescription property can only contain items of anyType, "%s" given', is_object($taxTypeTaxDescriptionItem) ? get_class($taxTypeTaxDescriptionItem) : gettype($taxTypeTaxDescriptionItem)), __LINE__);
            }
        }
        $this->TaxDescription = $taxDescription;
        return $this;
    }
    /**
     * Add item to TaxDescription value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxType
     */
    public function addToTaxDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TaxDescription property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxDescription[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerPrimaryAdditionalType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
 * @subpackage Structs
 */
class CustomerPrimaryAdditionalType extends AbstractStructBase
{
    /**
     * The Primary
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Primary
     */
    public $Primary;
    /**
     * The Additional
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Additional[]
     */
    public $Additional;
    /**
     * Constructor method for CustomerPrimaryAdditionalType
     * @uses CustomerPrimaryAdditionalType::setPrimary()
     * @uses CustomerPrimaryAdditionalType::setAdditional()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Primary $primary
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Additional[] $additional
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Primary $primary = null, array $additional = array())
    {
        $this
            ->setPrimary($primary)
            ->setAdditional($additional);
    }
    /**
     * Get Primary value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Primary|null
     */
    public function getPrimary()
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Primary $primary
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerPrimaryAdditionalType
     */
    public function setPrimary(\Devlabs91\GenericOtaHotelApiService\StructType\Primary $primary = null)
    {
        $this->Primary = $primary;
        return $this;
    }
    /**
     * Get Additional value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Additional[]|null
     */
    public function getAdditional()
    {
        return $this->Additional;
    }
    /**
     * Set Additional value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Additional[] $additional
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerPrimaryAdditionalType
     */
    public function setAdditional(array $additional = array())
    {
        foreach ($additional as $customerPrimaryAdditionalTypeAdditionalItem) {
            // validation for constraint: itemType
            if (!$customerPrimaryAdditionalTypeAdditionalItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Additional) {
                throw new \InvalidArgumentException(sprintf('The Additional property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Additional, "%s" given', is_object($customerPrimaryAdditionalTypeAdditionalItem) ? get_class($customerPrimaryAdditionalTypeAdditionalItem) : gettype($customerPrimaryAdditionalTypeAdditionalItem)), __LINE__);
            }
        }
        $this->Additional = $additional;
        return $this;
    }
    /**
     * Add item to Additional value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Additional $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerPrimaryAdditionalType
     */
    public function addToAdditional(\Devlabs91\GenericOtaHotelApiService\StructType\Additional $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Additional) {
            throw new \InvalidArgumentException(sprintf('The Additional property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Additional, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Additional[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerPrimaryAdditionalType
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

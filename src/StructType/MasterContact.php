<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MasterContact StructType
 * Meta informations extracted from the WSDL
 * - documentation: Planner or coordinator contact information for the rooming list.
 * @subpackage Structs
 */
class MasterContact extends ContactPersonType
{
    /**
     * The UniqueIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\UniqueIDs
     */
    public $UniqueIDs;
    /**
     * The Loyalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Loyalty[]
     */
    public $Loyalty;
    /**
     * Constructor method for MasterContact
     * @uses MasterContact::setUniqueIDs()
     * @uses MasterContact::setLoyalty()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueIDs $uniqueIDs
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Loyalty[] $loyalty
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\UniqueIDs $uniqueIDs = null, array $loyalty = array())
    {
        $this
            ->setUniqueIDs($uniqueIDs)
            ->setLoyalty($loyalty);
    }
    /**
     * Get UniqueIDs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueIDs|null
     */
    public function getUniqueIDs()
    {
        return $this->UniqueIDs;
    }
    /**
     * Set UniqueIDs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueIDs $uniqueIDs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MasterContact
     */
    public function setUniqueIDs(\Devlabs91\GenericOtaHotelApiService\StructType\UniqueIDs $uniqueIDs = null)
    {
        $this->UniqueIDs = $uniqueIDs;
        return $this;
    }
    /**
     * Get Loyalty value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Loyalty[]|null
     */
    public function getLoyalty()
    {
        return $this->Loyalty;
    }
    /**
     * Set Loyalty value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Loyalty[] $loyalty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MasterContact
     */
    public function setLoyalty(array $loyalty = array())
    {
        foreach ($loyalty as $masterContactLoyaltyItem) {
            // validation for constraint: itemType
            if (!$masterContactLoyaltyItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Loyalty) {
                throw new \InvalidArgumentException(sprintf('The Loyalty property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Loyalty, "%s" given', is_object($masterContactLoyaltyItem) ? get_class($masterContactLoyaltyItem) : gettype($masterContactLoyaltyItem)), __LINE__);
            }
        }
        $this->Loyalty = $loyalty;
        return $this;
    }
    /**
     * Add item to Loyalty value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Loyalty $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MasterContact
     */
    public function addToLoyalty(\Devlabs91\GenericOtaHotelApiService\StructType\Loyalty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Loyalty) {
            throw new \InvalidArgumentException(sprintf('The Loyalty property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Loyalty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Loyalty[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MasterContact
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

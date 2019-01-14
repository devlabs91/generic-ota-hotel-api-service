<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectedSpecialServices StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the Special Services information.
 * @subpackage Structs
 */
class SelectedSpecialServices extends AbstractStructBase
{
    /**
     * The SelectedSpecialService
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Special Service information.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SelectedSpecialService;
    /**
     * Constructor method for SelectedSpecialServices
     * @uses SelectedSpecialServices::setSelectedSpecialService()
     * @param mixed[] $selectedSpecialService
     */
    public function __construct(array $selectedSpecialService = array())
    {
        $this
            ->setSelectedSpecialService($selectedSpecialService);
    }
    /**
     * Get SelectedSpecialService value
     * @return mixed[]|null
     */
    public function getSelectedSpecialService()
    {
        return $this->SelectedSpecialService;
    }
    /**
     * Set SelectedSpecialService value
     * @throws \InvalidArgumentException
     * @param mixed[] $selectedSpecialService
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSpecialServices
     */
    public function setSelectedSpecialService(array $selectedSpecialService = array())
    {
        foreach ($selectedSpecialService as $selectedSpecialServicesSelectedSpecialServiceItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SelectedSpecialService property can only contain items of anyType, "%s" given', is_object($selectedSpecialServicesSelectedSpecialServiceItem) ? get_class($selectedSpecialServicesSelectedSpecialServiceItem) : gettype($selectedSpecialServicesSelectedSpecialServiceItem)), __LINE__);
            }
        }
        $this->SelectedSpecialService = $selectedSpecialService;
        return $this;
    }
    /**
     * Add item to SelectedSpecialService value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSpecialServices
     */
    public function addToSelectedSpecialService($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SelectedSpecialService property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectedSpecialService[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSpecialServices
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Descriptions StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of hotel and/or renovation information.
 * @subpackage Structs
 */
class Descriptions extends AbstractStructBase
{
    /**
     * The Renovation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Renovation[]
     */
    public $Renovation;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Description[]
     */
    public $Description;
    /**
     * Constructor method for Descriptions
     * @uses Descriptions::setRenovation()
     * @uses Descriptions::setDescription()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Renovation[] $renovation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Description[] $description
     */
    public function __construct(array $renovation = array(), array $description = array())
    {
        $this
            ->setRenovation($renovation)
            ->setDescription($description);
    }
    /**
     * Get Renovation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Renovation[]|null
     */
    public function getRenovation()
    {
        return $this->Renovation;
    }
    /**
     * Set Renovation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Renovation[] $renovation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
     */
    public function setRenovation(array $renovation = array())
    {
        foreach ($renovation as $descriptionsRenovationItem) {
            // validation for constraint: itemType
            if (!$descriptionsRenovationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Renovation) {
                throw new \InvalidArgumentException(sprintf('The Renovation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Renovation, "%s" given', is_object($descriptionsRenovationItem) ? get_class($descriptionsRenovationItem) : gettype($descriptionsRenovationItem)), __LINE__);
            }
        }
        $this->Renovation = $renovation;
        return $this;
    }
    /**
     * Add item to Renovation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Renovation $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
     */
    public function addToRenovation(\Devlabs91\GenericOtaHotelApiService\StructType\Renovation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Renovation) {
            throw new \InvalidArgumentException(sprintf('The Renovation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Renovation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Renovation[] = $item;
        return $this;
    }
    /**
     * Get Description value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Description[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Description[] $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $descriptionsDescriptionItem) {
            // validation for constraint: itemType
            if (!$descriptionsDescriptionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Description) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Description, "%s" given', is_object($descriptionsDescriptionItem) ? get_class($descriptionsDescriptionItem) : gettype($descriptionsDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Description $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
     */
    public function addToDescription(\Devlabs91\GenericOtaHotelApiService\StructType\Description $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Description) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Description, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
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

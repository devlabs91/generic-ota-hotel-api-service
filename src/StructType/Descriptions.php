<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Descriptions StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of affiliation descriptions. | Collection of hotel and/or renovation information.
 * @subpackage Structs
 */
class Descriptions extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Describes affiliation information (e.g., accolades, recognition).
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $Description;
    /**
     * The Renovation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Renovation[]
     */
    public $Renovation;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions
     */
    public $MultimediaDescriptions;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive text that describes the hotel.
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
    /**
     * Constructor method for Descriptions
     * @uses Descriptions::setDescription()
     * @uses Descriptions::setRenovation()
     * @uses Descriptions::setMultimediaDescriptions()
     * @uses Descriptions::setDescriptiveText()
     * @param mixed[] $description
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Renovation[] $renovation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions
     * @param string $descriptiveText
     */
    public function __construct(array $description = array(), array $renovation = array(), \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions = null, $descriptiveText = null)
    {
        $this
            ->setDescription($description)
            ->setRenovation($renovation)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setDescriptiveText($descriptiveText);
    }
    /**
     * Get Description value
     * @return mixed[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param mixed[] $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $descriptionsDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($descriptionsDescriptionItem) ? get_class($descriptionsDescriptionItem) : gettype($descriptionsDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
     */
    public function addToDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
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
     * Get MultimediaDescriptions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
     */
    public function setMultimediaDescriptions(\Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptions $multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get DescriptiveText value
     * @return string|null
     */
    public function getDescriptiveText()
    {
        return $this->DescriptiveText;
    }
    /**
     * Set DescriptiveText value
     * @param string $descriptiveText
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
     */
    public function setDescriptiveText($descriptiveText = null)
    {
        // validation for constraint: string
        if (!is_null($descriptiveText) && !is_string($descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptiveText)), __LINE__);
        }
        $this->DescriptiveText = $descriptiveText;
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

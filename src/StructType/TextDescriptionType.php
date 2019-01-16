<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextDescriptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes a text item. | Generic information about the text multimedia item.
 * @subpackage Structs
 */
class TextDescriptionType extends AbstractStructBase
{
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: The URL for a specific text item.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Description[]
     */
    public $Description;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the text category. Refer to OpenTravel Code list Picture Category Code (PIC).
     * - use: optional
     * @var string
     */
    public $Category;
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - documentation: The language of the text item.
     * - use: optional
     * @var string
     */
    public $Language;
    /**
     * Constructor method for TextDescriptionType
     * @uses TextDescriptionType::setURL()
     * @uses TextDescriptionType::setDescription()
     * @uses TextDescriptionType::setCategory()
     * @uses TextDescriptionType::setLanguage()
     * @param string $uRL
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Description[] $description
     * @param string $category
     * @param string $language
     */
    public function __construct($uRL = null, array $description = array(), $category = null, $language = null)
    {
        $this
            ->setURL($uRL)
            ->setDescription($description)
            ->setCategory($category)
            ->setLanguage($language);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TextDescriptionType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TextDescriptionType
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $textDescriptionTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$textDescriptionTypeDescriptionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Description) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Description, "%s" given', is_object($textDescriptionTypeDescriptionItem) ? get_class($textDescriptionTypeDescriptionItem) : gettype($textDescriptionTypeDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Description $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TextDescriptionType
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
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TextDescriptionType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TextDescriptionType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TextDescriptionType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormattedTextType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of formatted text sub sections.
 * @subpackage Structs
 */
class FormattedTextType extends AbstractStructBase
{
    /**
     * The SubSection
     * Meta informations extracted from the WSDL
     * - documentation: Subsection formatted text information.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $SubSection;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: This attribute may be used to provide a title for the formatted free text, for example, Driving Directions. Each of the sub sections that are defined to be a part of the formatted text would provide detailed information about the
     * subject identified by the title.
     * - use: optional
     * @var string
     */
    public $Title;
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - documentation: The language in which the content is provided.
     * - use: optional
     * @var string
     */
    public $Language;
    /**
     * Constructor method for FormattedTextType
     * @uses FormattedTextType::setSubSection()
     * @uses FormattedTextType::setTitle()
     * @uses FormattedTextType::setLanguage()
     * @param mixed[] $subSection
     * @param string $title
     * @param string $language
     */
    public function __construct(array $subSection = array(), $title = null, $language = null)
    {
        $this
            ->setSubSection($subSection)
            ->setTitle($title)
            ->setLanguage($language);
    }
    /**
     * Get SubSection value
     * @return mixed[]|null
     */
    public function getSubSection()
    {
        return $this->SubSection;
    }
    /**
     * Set SubSection value
     * @throws \InvalidArgumentException
     * @param mixed[] $subSection
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextType
     */
    public function setSubSection(array $subSection = array())
    {
        foreach ($subSection as $formattedTextTypeSubSectionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SubSection property can only contain items of anyType, "%s" given', is_object($formattedTextTypeSubSectionItem) ? get_class($formattedTextTypeSubSectionItem) : gettype($formattedTextTypeSubSectionItem)), __LINE__);
            }
        }
        $this->SubSection = $subSection;
        return $this;
    }
    /**
     * Add item to SubSection value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextType
     */
    public function addToSubSection($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SubSection property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SubSection[] = $item;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormattedTextSubSectionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to provide subsection formatted text information.
 * @subpackage Structs
 */
class FormattedTextSubSectionType extends AbstractStructBase
{
    /**
     * The Paragraph
     * Meta informations extracted from the WSDL
     * - documentation: Details and content of a paragraph for a formatted text message.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $Paragraph;
    /**
     * The SubTitle
     * Meta informations extracted from the WSDL
     * - documentation: This attribute may be used to provide a title for a sub-section of the formatted free text. A sub-section may have multiple related paragraphs of information. For example, if used to provide driving directions there may be multiple
     * paragraphs, and these paragraphs may be grouped into a sub-section called "Driving from the North". A second subsection may be titled "Driving from the South", and may contain several paragraphs to describe the driving directions when driving from
     * the south.
     * - use: optional
     * @var string
     */
    public $SubTitle;
    /**
     * The SubCode
     * Meta informations extracted from the WSDL
     * - documentation: An optional code that may be assigned to this sub-section of formatted free text.
     * - use: optional
     * @var string
     */
    public $SubCode;
    /**
     * The SubSectionNumber
     * Meta informations extracted from the WSDL
     * - documentation: This attribute may be used when there is a need to number all of the sub-sections of information that is to be presented.
     * - use: optional
     * @var string
     */
    public $SubSectionNumber;
    /**
     * Constructor method for FormattedTextSubSectionType
     * @uses FormattedTextSubSectionType::setParagraph()
     * @uses FormattedTextSubSectionType::setSubTitle()
     * @uses FormattedTextSubSectionType::setSubCode()
     * @uses FormattedTextSubSectionType::setSubSectionNumber()
     * @param mixed[] $paragraph
     * @param string $subTitle
     * @param string $subCode
     * @param string $subSectionNumber
     */
    public function __construct(array $paragraph = array(), $subTitle = null, $subCode = null, $subSectionNumber = null)
    {
        $this
            ->setParagraph($paragraph)
            ->setSubTitle($subTitle)
            ->setSubCode($subCode)
            ->setSubSectionNumber($subSectionNumber);
    }
    /**
     * Get Paragraph value
     * @return mixed[]|null
     */
    public function getParagraph()
    {
        return $this->Paragraph;
    }
    /**
     * Set Paragraph value
     * @throws \InvalidArgumentException
     * @param mixed[] $paragraph
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextSubSectionType
     */
    public function setParagraph(array $paragraph = array())
    {
        foreach ($paragraph as $formattedTextSubSectionTypeParagraphItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Paragraph property can only contain items of anyType, "%s" given', is_object($formattedTextSubSectionTypeParagraphItem) ? get_class($formattedTextSubSectionTypeParagraphItem) : gettype($formattedTextSubSectionTypeParagraphItem)), __LINE__);
            }
        }
        $this->Paragraph = $paragraph;
        return $this;
    }
    /**
     * Add item to Paragraph value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextSubSectionType
     */
    public function addToParagraph($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Paragraph property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Paragraph[] = $item;
        return $this;
    }
    /**
     * Get SubTitle value
     * @return string|null
     */
    public function getSubTitle()
    {
        return $this->SubTitle;
    }
    /**
     * Set SubTitle value
     * @param string $subTitle
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextSubSectionType
     */
    public function setSubTitle($subTitle = null)
    {
        // validation for constraint: string
        if (!is_null($subTitle) && !is_string($subTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subTitle)), __LINE__);
        }
        $this->SubTitle = $subTitle;
        return $this;
    }
    /**
     * Get SubCode value
     * @return string|null
     */
    public function getSubCode()
    {
        return $this->SubCode;
    }
    /**
     * Set SubCode value
     * @param string $subCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextSubSectionType
     */
    public function setSubCode($subCode = null)
    {
        // validation for constraint: string
        if (!is_null($subCode) && !is_string($subCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subCode)), __LINE__);
        }
        $this->SubCode = $subCode;
        return $this;
    }
    /**
     * Get SubSectionNumber value
     * @return string|null
     */
    public function getSubSectionNumber()
    {
        return $this->SubSectionNumber;
    }
    /**
     * Set SubSectionNumber value
     * @param string $subSectionNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextSubSectionType
     */
    public function setSubSectionNumber($subSectionNumber = null)
    {
        // validation for constraint: string
        if (!is_null($subSectionNumber) && !is_string($subSectionNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subSectionNumber)), __LINE__);
        }
        $this->SubSectionNumber = $subSectionNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FormattedTextSubSectionType
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

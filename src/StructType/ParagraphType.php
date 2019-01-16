<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParagraphType StructType
 * Meta informations extracted from the WSDL
 * - documentation: An indication of a new paragraph for a sub-section of a formatted text message. | Creation date time, Creator ID, last modification date time and last modifier ID for the paragraph. | The language for this paragraph.
 * @subpackage Structs
 */
class ParagraphType extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Formatted text content.
     * @var mixed
     */
    public $Text;
    /**
     * The Image
     * Meta informations extracted from the WSDL
     * - documentation: An image for this paragraph.
     * @var string
     */
    public $Image;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: A URL for this paragraph.
     * @var string
     */
    public $URL;
    /**
     * The ListItem
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ListItem
     */
    public $ListItem;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: In many cases the description repeats, this will allow you to define the information that is being sent, typically used when multiple occurrences of ParagraphType are being sent.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The ParagraphNumber
     * Meta informations extracted from the WSDL
     * - documentation: The sequence number for the paragraph.
     * - use: optional
     * @var int
     */
    public $ParagraphNumber;
    /**
     * Constructor method for ParagraphType
     * @uses ParagraphType::setText()
     * @uses ParagraphType::setImage()
     * @uses ParagraphType::setURL()
     * @uses ParagraphType::setListItem()
     * @uses ParagraphType::setName()
     * @uses ParagraphType::setParagraphNumber()
     * @param mixed $text
     * @param string $image
     * @param string $uRL
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ListItem $listItem
     * @param string $name
     * @param int $paragraphNumber
     */
    public function __construct($text = null, $image = null, $uRL = null, \Devlabs91\GenericOtaHotelApiService\StructType\ListItem $listItem = null, $name = null, $paragraphNumber = null)
    {
        $this
            ->setText($text)
            ->setImage($image)
            ->setURL($uRL)
            ->setListItem($listItem)
            ->setName($name)
            ->setParagraphNumber($paragraphNumber);
    }
    /**
     * Get Text value
     * @return mixed|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param mixed $text
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType
     */
    public function setText($text = null)
    {
        $this->Text = $text;
        return $this;
    }
    /**
     * Get Image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param string $image
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($image)), __LINE__);
        }
        $this->Image = $image;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType
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
     * Get ListItem value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ListItem|null
     */
    public function getListItem()
    {
        return $this->ListItem;
    }
    /**
     * Set ListItem value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ListItem $listItem
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType
     */
    public function setListItem(\Devlabs91\GenericOtaHotelApiService\StructType\ListItem $listItem = null)
    {
        $this->ListItem = $listItem;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ParagraphNumber value
     * @return int|null
     */
    public function getParagraphNumber()
    {
        return $this->ParagraphNumber;
    }
    /**
     * Set ParagraphNumber value
     * @param int $paragraphNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType
     */
    public function setParagraphNumber($paragraphNumber = null)
    {
        // validation for constraint: int
        if (!is_null($paragraphNumber) && !is_numeric($paragraphNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paragraphNumber)), __LINE__);
        }
        $this->ParagraphNumber = $paragraphNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ParagraphType
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

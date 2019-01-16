<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Description StructType
 * Meta informations extracted from the WSDL
 * - documentation: The description associated with the image in a specific language. | The text in a specific language.
 * - type: StringLength1to64
 * - use: optional
 * @subpackage Structs
 */
class Description extends FormattedTextTextType
{
    /**
     * The Caption
     * Meta informations extracted from the WSDL
     * - documentation: The caption associated to a specific image category which can be provided in different languages.
     * - use: optional
     * @var string
     */
    public $Caption;
    /**
     * The ListItem
     * Meta informations extracted from the WSDL
     * - documentation: Sequence number associated with this description.
     * - use: optional
     * @var int
     */
    public $ListItem;
    /**
     * Constructor method for Description
     * @uses Description::setCaption()
     * @uses Description::setListItem()
     * @param string $caption
     * @param int $listItem
     */
    public function __construct($caption = null, $listItem = null)
    {
        $this
            ->setCaption($caption)
            ->setListItem($listItem);
    }
    /**
     * Get Caption value
     * @return string|null
     */
    public function getCaption()
    {
        return $this->Caption;
    }
    /**
     * Set Caption value
     * @param string $caption
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Description
     */
    public function setCaption($caption = null)
    {
        // validation for constraint: string
        if (!is_null($caption) && !is_string($caption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($caption)), __LINE__);
        }
        $this->Caption = $caption;
        return $this;
    }
    /**
     * Get ListItem value
     * @return int|null
     */
    public function getListItem()
    {
        return $this->ListItem;
    }
    /**
     * Set ListItem value
     * @param int $listItem
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Description
     */
    public function setListItem($listItem = null)
    {
        // validation for constraint: int
        if (!is_null($listItem) && !is_numeric($listItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listItem)), __LINE__);
        }
        $this->ListItem = $listItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Description
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

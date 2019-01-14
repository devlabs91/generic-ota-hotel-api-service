<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListItem StructType
 * @subpackage Structs
 */
class ListItem extends FormattedTextTextType
{
    /**
     * The ListItem
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $ListItem;
    /**
     * Constructor method for ListItem
     * @uses ListItem::setListItem()
     * @param int $listItem
     */
    public function __construct($listItem = null)
    {
        $this
            ->setListItem($listItem);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ListItem
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ListItem
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

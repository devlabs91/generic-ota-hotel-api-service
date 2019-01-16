<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FolioIDsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of strings (recommended length - 20 characters) indicating the PMS folio identifiers associated with this revenue detail item.
 * @subpackage Structs
 */
class FolioIDsType extends AbstractStructBase
{
    /**
     * The FolioID
     * Meta informations extracted from the WSDL
     * - documentation: The PMS folio identifier associated with this revenue detail item.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $FolioID;
    /**
     * Constructor method for FolioIDsType
     * @uses FolioIDsType::setFolioID()
     * @param mixed[] $folioID
     */
    public function __construct(array $folioID = array())
    {
        $this
            ->setFolioID($folioID);
    }
    /**
     * Get FolioID value
     * @return mixed[]|null
     */
    public function getFolioID()
    {
        return $this->FolioID;
    }
    /**
     * Set FolioID value
     * @throws \InvalidArgumentException
     * @param mixed[] $folioID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FolioIDsType
     */
    public function setFolioID(array $folioID = array())
    {
        foreach ($folioID as $folioIDsTypeFolioIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The FolioID property can only contain items of anyType, "%s" given', is_object($folioIDsTypeFolioIDItem) ? get_class($folioIDsTypeFolioIDItem) : gettype($folioIDsTypeFolioIDItem)), __LINE__);
            }
        }
        $this->FolioID = $folioID;
        return $this;
    }
    /**
     * Add item to FolioID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FolioIDsType
     */
    public function addToFolioID($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The FolioID property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FolioID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FolioIDsType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeRoom StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the guest room type; in composite types there can be multiple occurrences.
 * @subpackage Structs
 */
class TypeRoom extends AbstractStructBase
{
    /**
     * The StandardNumBeds
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the usual number of beds for this room type.
     * - use: optional
     * @var int
     */
    public $StandardNumBeds;
    /**
     * The StandardOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the usual number of guests that occupy this room.
     * - use: optional
     * @var int
     */
    public $StandardOccupancy;
    /**
     * The MaxRollaways
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of rollaway beds allowed in a room type.
     * - use: optional
     * @var int
     */
    public $MaxRollaways;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - documentation: Number of square units (feet or meters) that defines the size of a room type.
     * - use: optional
     * @var int
     */
    public $Size;
    /**
     * The Configuration
     * Meta informations extracted from the WSDL
     * - documentation: Defines the bed type configuration of the room.
     * - use: optional
     * @var string
     */
    public $Configuration;
    /**
     * The TypeImplied
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TypeImplied;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - documentation: Number of rooms of this room type that makes up a larger unit (composite) such as a two bedroom suite could be comprised of two king rooms plus other room types.
     * - use: optional
     * @var int
     */
    public $Count;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Text name of the type of room such as "Two Bedroom Villas".
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * Constructor method for TypeRoom
     * @uses TypeRoom::setStandardNumBeds()
     * @uses TypeRoom::setStandardOccupancy()
     * @uses TypeRoom::setMaxRollaways()
     * @uses TypeRoom::setSize()
     * @uses TypeRoom::setConfiguration()
     * @uses TypeRoom::setTypeImplied()
     * @uses TypeRoom::setCount()
     * @uses TypeRoom::setName()
     * @param int $standardNumBeds
     * @param int $standardOccupancy
     * @param int $maxRollaways
     * @param int $size
     * @param string $configuration
     * @param string $typeImplied
     * @param int $count
     * @param string $name
     */
    public function __construct($standardNumBeds = null, $standardOccupancy = null, $maxRollaways = null, $size = null, $configuration = null, $typeImplied = null, $count = null, $name = null)
    {
        $this
            ->setStandardNumBeds($standardNumBeds)
            ->setStandardOccupancy($standardOccupancy)
            ->setMaxRollaways($maxRollaways)
            ->setSize($size)
            ->setConfiguration($configuration)
            ->setTypeImplied($typeImplied)
            ->setCount($count)
            ->setName($name);
    }
    /**
     * Get StandardNumBeds value
     * @return int|null
     */
    public function getStandardNumBeds()
    {
        return $this->StandardNumBeds;
    }
    /**
     * Set StandardNumBeds value
     * @param int $standardNumBeds
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom
     */
    public function setStandardNumBeds($standardNumBeds = null)
    {
        // validation for constraint: int
        if (!is_null($standardNumBeds) && !is_numeric($standardNumBeds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($standardNumBeds)), __LINE__);
        }
        $this->StandardNumBeds = $standardNumBeds;
        return $this;
    }
    /**
     * Get StandardOccupancy value
     * @return int|null
     */
    public function getStandardOccupancy()
    {
        return $this->StandardOccupancy;
    }
    /**
     * Set StandardOccupancy value
     * @param int $standardOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom
     */
    public function setStandardOccupancy($standardOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($standardOccupancy) && !is_numeric($standardOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($standardOccupancy)), __LINE__);
        }
        $this->StandardOccupancy = $standardOccupancy;
        return $this;
    }
    /**
     * Get MaxRollaways value
     * @return int|null
     */
    public function getMaxRollaways()
    {
        return $this->MaxRollaways;
    }
    /**
     * Set MaxRollaways value
     * @param int $maxRollaways
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom
     */
    public function setMaxRollaways($maxRollaways = null)
    {
        // validation for constraint: int
        if (!is_null($maxRollaways) && !is_numeric($maxRollaways)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxRollaways)), __LINE__);
        }
        $this->MaxRollaways = $maxRollaways;
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Get Configuration value
     * @return string|null
     */
    public function getConfiguration()
    {
        return $this->Configuration;
    }
    /**
     * Set Configuration value
     * @param string $configuration
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom
     */
    public function setConfiguration($configuration = null)
    {
        // validation for constraint: string
        if (!is_null($configuration) && !is_string($configuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($configuration)), __LINE__);
        }
        $this->Configuration = $configuration;
        return $this;
    }
    /**
     * Get TypeImplied value
     * @return string|null
     */
    public function getTypeImplied()
    {
        return $this->TypeImplied;
    }
    /**
     * Set TypeImplied value
     * @param string $typeImplied
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom
     */
    public function setTypeImplied($typeImplied = null)
    {
        // validation for constraint: string
        if (!is_null($typeImplied) && !is_string($typeImplied)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeImplied)), __LINE__);
        }
        $this->TypeImplied = $typeImplied;
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TypeRoom
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

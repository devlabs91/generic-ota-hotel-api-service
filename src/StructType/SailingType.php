<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SailingType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies sailing information.
 * @subpackage Structs
 */
class SailingType extends SailingInfoType
{
    /**
     * The Dining
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Dining[]
     */
    public $Dining;
    /**
     * The Transportation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the mode of the transportation from the guest location to the cruise port of departure.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Transportation;
    /**
     * The Information
     * Meta informations extracted from the WSDL
     * - documentation: Specifies cruise line registration procedures and other free text information. The name attribute is used to define the type of information. Registration procedures are messages that advise customers who are not registered with the
     * cruise line how to do so. Usually non registered customers cannot get access to the cruise line inventory.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Information;
    /**
     * The MaxCabinOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: Maximum cabin occupancy available on this specific sailing (ship).
     * - use: optional
     * @var string
     */
    public $MaxCabinOccupancy;
    /**
     * The CategoryLocation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the different category locations available on the ship.
     * - use: optional
     * @var string
     */
    public $CategoryLocation;
    /**
     * Constructor method for SailingType
     * @uses SailingType::setDining()
     * @uses SailingType::setTransportation()
     * @uses SailingType::setInformation()
     * @uses SailingType::setMaxCabinOccupancy()
     * @uses SailingType::setCategoryLocation()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Dining[] $dining
     * @param mixed[] $transportation
     * @param mixed[] $information
     * @param string $maxCabinOccupancy
     * @param string $categoryLocation
     */
    public function __construct(array $dining = array(), array $transportation = array(), array $information = array(), $maxCabinOccupancy = null, $categoryLocation = null)
    {
        $this
            ->setDining($dining)
            ->setTransportation($transportation)
            ->setInformation($information)
            ->setMaxCabinOccupancy($maxCabinOccupancy)
            ->setCategoryLocation($categoryLocation);
    }
    /**
     * Get Dining value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Dining[]|null
     */
    public function getDining()
    {
        return $this->Dining;
    }
    /**
     * Set Dining value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Dining[] $dining
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingType
     */
    public function setDining(array $dining = array())
    {
        foreach ($dining as $sailingTypeDiningItem) {
            // validation for constraint: itemType
            if (!$sailingTypeDiningItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Dining) {
                throw new \InvalidArgumentException(sprintf('The Dining property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Dining, "%s" given', is_object($sailingTypeDiningItem) ? get_class($sailingTypeDiningItem) : gettype($sailingTypeDiningItem)), __LINE__);
            }
        }
        $this->Dining = $dining;
        return $this;
    }
    /**
     * Add item to Dining value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Dining $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingType
     */
    public function addToDining(\Devlabs91\GenericOtaHotelApiService\StructType\Dining $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Dining) {
            throw new \InvalidArgumentException(sprintf('The Dining property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Dining, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Dining[] = $item;
        return $this;
    }
    /**
     * Get Transportation value
     * @return mixed[]|null
     */
    public function getTransportation()
    {
        return $this->Transportation;
    }
    /**
     * Set Transportation value
     * @throws \InvalidArgumentException
     * @param mixed[] $transportation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingType
     */
    public function setTransportation(array $transportation = array())
    {
        foreach ($transportation as $sailingTypeTransportationItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Transportation property can only contain items of anyType, "%s" given', is_object($sailingTypeTransportationItem) ? get_class($sailingTypeTransportationItem) : gettype($sailingTypeTransportationItem)), __LINE__);
            }
        }
        $this->Transportation = $transportation;
        return $this;
    }
    /**
     * Add item to Transportation value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingType
     */
    public function addToTransportation($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Transportation property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transportation[] = $item;
        return $this;
    }
    /**
     * Get Information value
     * @return mixed[]|null
     */
    public function getInformation()
    {
        return $this->Information;
    }
    /**
     * Set Information value
     * @throws \InvalidArgumentException
     * @param mixed[] $information
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingType
     */
    public function setInformation(array $information = array())
    {
        foreach ($information as $sailingTypeInformationItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Information property can only contain items of anyType, "%s" given', is_object($sailingTypeInformationItem) ? get_class($sailingTypeInformationItem) : gettype($sailingTypeInformationItem)), __LINE__);
            }
        }
        $this->Information = $information;
        return $this;
    }
    /**
     * Add item to Information value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingType
     */
    public function addToInformation($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Information property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Information[] = $item;
        return $this;
    }
    /**
     * Get MaxCabinOccupancy value
     * @return string|null
     */
    public function getMaxCabinOccupancy()
    {
        return $this->MaxCabinOccupancy;
    }
    /**
     * Set MaxCabinOccupancy value
     * @param string $maxCabinOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingType
     */
    public function setMaxCabinOccupancy($maxCabinOccupancy = null)
    {
        // validation for constraint: string
        if (!is_null($maxCabinOccupancy) && !is_string($maxCabinOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxCabinOccupancy)), __LINE__);
        }
        $this->MaxCabinOccupancy = $maxCabinOccupancy;
        return $this;
    }
    /**
     * Get CategoryLocation value
     * @return string|null
     */
    public function getCategoryLocation()
    {
        return $this->CategoryLocation;
    }
    /**
     * Set CategoryLocation value
     * @param string $categoryLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingType
     */
    public function setCategoryLocation($categoryLocation = null)
    {
        // validation for constraint: string
        if (!is_null($categoryLocation) && !is_string($categoryLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryLocation)), __LINE__);
        }
        $this->CategoryLocation = $categoryLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingType
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

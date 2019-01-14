<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryOptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies category option information. | Specifies the fare code and or group code associated with the category. | Specifies category code information.
 * @subpackage Structs
 */
class CategoryOptionType extends AbstractStructBase
{
    /**
     * The PriceInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos
     */
    public $PriceInfos;
    /**
     * The Dining
     * Meta informations extracted from the WSDL
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Dining[]
     */
    public $Dining;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Category availability status. Refer to OpenTravel Code table Status (STS).
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * The HeldIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, all cabins in this category are currently being held.
     * - use: optional
     * @var bool
     */
    public $HeldIndicator;
    /**
     * The CategoryLocation
     * Meta informations extracted from the WSDL
     * - documentation: Category location in the ship: (I) Inside or (O) Outside.
     * - use: optional
     * @var string
     */
    public $CategoryLocation;
    /**
     * The MaxOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of guest per cabin.
     * - use: optional
     * @var string
     */
    public $MaxOccupancy;
    /**
     * The ListOfCategoryQualifierCodes
     * Meta informations extracted from the WSDL
     * - documentation: Contains additional category information. Refer to OpenTravel Code List Cabin Filters (CBF).
     * - use: optional
     * @var string
     */
    public $ListOfCategoryQualifierCodes;
    /**
     * The AvailableGroupAllocationQty
     * Meta informations extracted from the WSDL
     * - documentation: Number of remaining cabins allocated to the group.
     * - use: optional
     * @var string
     */
    public $AvailableGroupAllocationQty;
    /**
     * Constructor method for CategoryOptionType
     * @uses CategoryOptionType::setPriceInfos()
     * @uses CategoryOptionType::setDining()
     * @uses CategoryOptionType::setStatus()
     * @uses CategoryOptionType::setHeldIndicator()
     * @uses CategoryOptionType::setCategoryLocation()
     * @uses CategoryOptionType::setMaxOccupancy()
     * @uses CategoryOptionType::setListOfCategoryQualifierCodes()
     * @uses CategoryOptionType::setAvailableGroupAllocationQty()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos $priceInfos
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Dining[] $dining
     * @param string $status
     * @param bool $heldIndicator
     * @param string $categoryLocation
     * @param string $maxOccupancy
     * @param string $listOfCategoryQualifierCodes
     * @param string $availableGroupAllocationQty
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos $priceInfos = null, array $dining = array(), $status = null, $heldIndicator = null, $categoryLocation = null, $maxOccupancy = null, $listOfCategoryQualifierCodes = null, $availableGroupAllocationQty = null)
    {
        $this
            ->setPriceInfos($priceInfos)
            ->setDining($dining)
            ->setStatus($status)
            ->setHeldIndicator($heldIndicator)
            ->setCategoryLocation($categoryLocation)
            ->setMaxOccupancy($maxOccupancy)
            ->setListOfCategoryQualifierCodes($listOfCategoryQualifierCodes)
            ->setAvailableGroupAllocationQty($availableGroupAllocationQty);
    }
    /**
     * Get PriceInfos value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos|null
     */
    public function getPriceInfos()
    {
        return $this->PriceInfos;
    }
    /**
     * Set PriceInfos value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos $priceInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryOptionType
     */
    public function setPriceInfos(\Devlabs91\GenericOtaHotelApiService\StructType\PriceInfos $priceInfos = null)
    {
        $this->PriceInfos = $priceInfos;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryOptionType
     */
    public function setDining(array $dining = array())
    {
        foreach ($dining as $categoryOptionTypeDiningItem) {
            // validation for constraint: itemType
            if (!$categoryOptionTypeDiningItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Dining) {
                throw new \InvalidArgumentException(sprintf('The Dining property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Dining, "%s" given', is_object($categoryOptionTypeDiningItem) ? get_class($categoryOptionTypeDiningItem) : gettype($categoryOptionTypeDiningItem)), __LINE__);
            }
        }
        $this->Dining = $dining;
        return $this;
    }
    /**
     * Add item to Dining value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Dining $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryOptionType
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryOptionType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get HeldIndicator value
     * @return bool|null
     */
    public function getHeldIndicator()
    {
        return $this->HeldIndicator;
    }
    /**
     * Set HeldIndicator value
     * @param bool $heldIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryOptionType
     */
    public function setHeldIndicator($heldIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($heldIndicator) && !is_bool($heldIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($heldIndicator)), __LINE__);
        }
        $this->HeldIndicator = $heldIndicator;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryOptionType
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
     * Get MaxOccupancy value
     * @return string|null
     */
    public function getMaxOccupancy()
    {
        return $this->MaxOccupancy;
    }
    /**
     * Set MaxOccupancy value
     * @param string $maxOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryOptionType
     */
    public function setMaxOccupancy($maxOccupancy = null)
    {
        // validation for constraint: string
        if (!is_null($maxOccupancy) && !is_string($maxOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxOccupancy)), __LINE__);
        }
        $this->MaxOccupancy = $maxOccupancy;
        return $this;
    }
    /**
     * Get ListOfCategoryQualifierCodes value
     * @return string|null
     */
    public function getListOfCategoryQualifierCodes()
    {
        return $this->ListOfCategoryQualifierCodes;
    }
    /**
     * Set ListOfCategoryQualifierCodes value
     * @param string $listOfCategoryQualifierCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryOptionType
     */
    public function setListOfCategoryQualifierCodes($listOfCategoryQualifierCodes = null)
    {
        // validation for constraint: string
        if (!is_null($listOfCategoryQualifierCodes) && !is_string($listOfCategoryQualifierCodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfCategoryQualifierCodes)), __LINE__);
        }
        $this->ListOfCategoryQualifierCodes = $listOfCategoryQualifierCodes;
        return $this;
    }
    /**
     * Get AvailableGroupAllocationQty value
     * @return string|null
     */
    public function getAvailableGroupAllocationQty()
    {
        return $this->AvailableGroupAllocationQty;
    }
    /**
     * Set AvailableGroupAllocationQty value
     * @param string $availableGroupAllocationQty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryOptionType
     */
    public function setAvailableGroupAllocationQty($availableGroupAllocationQty = null)
    {
        // validation for constraint: string
        if (!is_null($availableGroupAllocationQty) && !is_string($availableGroupAllocationQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availableGroupAllocationQty)), __LINE__);
        }
        $this->AvailableGroupAllocationQty = $availableGroupAllocationQty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryOptionType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemSearchCriterionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the criterion for a search.
 * @subpackage Structs
 */
class ItemSearchCriterionType extends AbstractStructBase
{
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Position
     */
    public $Position;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public $Address;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Telephone
     */
    public $Telephone;
    /**
     * The RefPoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint[]
     */
    public $RefPoint;
    /**
     * The CodeRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CodeRef
     */
    public $CodeRef;
    /**
     * The HotelRef
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef[]
     */
    public $HotelRef;
    /**
     * The Radius
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Radius
     */
    public $Radius;
    /**
     * The MapArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MapArea
     */
    public $MapArea;
    /**
     * The ExactMatch
     * Meta informations extracted from the WSDL
     * - documentation: Values of "true" or "false", indicating whether the string of the search value must be an exact match.
     * - use: optional
     * @var bool
     */
    public $ExactMatch;
    /**
     * The ImportanceType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ImportanceType;
    /**
     * The Ranking
     * Meta informations extracted from the WSDL
     * - documentation: Defines a ranking scale expressed as integers; meaning and scale are based on individual implementations.
     * - use: optional
     * @var int
     */
    public $Ranking;
    /**
     * Constructor method for ItemSearchCriterionType
     * @uses ItemSearchCriterionType::setPosition()
     * @uses ItemSearchCriterionType::setAddress()
     * @uses ItemSearchCriterionType::setTelephone()
     * @uses ItemSearchCriterionType::setRefPoint()
     * @uses ItemSearchCriterionType::setCodeRef()
     * @uses ItemSearchCriterionType::setHotelRef()
     * @uses ItemSearchCriterionType::setRadius()
     * @uses ItemSearchCriterionType::setMapArea()
     * @uses ItemSearchCriterionType::setExactMatch()
     * @uses ItemSearchCriterionType::setImportanceType()
     * @uses ItemSearchCriterionType::setRanking()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Position $position
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address $address
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint[] $refPoint
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CodeRef $codeRef
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef[] $hotelRef
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Radius $radius
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MapArea $mapArea
     * @param bool $exactMatch
     * @param string $importanceType
     * @param int $ranking
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Position $position = null, \Devlabs91\GenericOtaHotelApiService\StructType\Address $address = null, \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone = null, array $refPoint = array(), \Devlabs91\GenericOtaHotelApiService\StructType\CodeRef $codeRef = null, array $hotelRef = array(), \Devlabs91\GenericOtaHotelApiService\StructType\Radius $radius = null, \Devlabs91\GenericOtaHotelApiService\StructType\MapArea $mapArea = null, $exactMatch = null, $importanceType = null, $ranking = null)
    {
        $this
            ->setPosition($position)
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setRefPoint($refPoint)
            ->setCodeRef($codeRef)
            ->setHotelRef($hotelRef)
            ->setRadius($radius)
            ->setMapArea($mapArea)
            ->setExactMatch($exactMatch)
            ->setImportanceType($importanceType)
            ->setRanking($ranking);
    }
    /**
     * Get Position value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Position|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Position $position
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setPosition(\Devlabs91\GenericOtaHotelApiService\StructType\Position $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Address value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setAddress(\Devlabs91\GenericOtaHotelApiService\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setTelephone(\Devlabs91\GenericOtaHotelApiService\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get RefPoint value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint[]|null
     */
    public function getRefPoint()
    {
        return $this->RefPoint;
    }
    /**
     * Set RefPoint value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint[] $refPoint
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setRefPoint(array $refPoint = array())
    {
        foreach ($refPoint as $itemSearchCriterionTypeRefPointItem) {
            // validation for constraint: itemType
            if (!$itemSearchCriterionTypeRefPointItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint) {
                throw new \InvalidArgumentException(sprintf('The RefPoint property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint, "%s" given', is_object($itemSearchCriterionTypeRefPointItem) ? get_class($itemSearchCriterionTypeRefPointItem) : gettype($itemSearchCriterionTypeRefPointItem)), __LINE__);
            }
        }
        $this->RefPoint = $refPoint;
        return $this;
    }
    /**
     * Add item to RefPoint value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function addToRefPoint(\Devlabs91\GenericOtaHotelApiService\StructType\RefPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint) {
            throw new \InvalidArgumentException(sprintf('The RefPoint property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RefPoint[] = $item;
        return $this;
    }
    /**
     * Get CodeRef value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CodeRef|null
     */
    public function getCodeRef()
    {
        return $this->CodeRef;
    }
    /**
     * Set CodeRef value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CodeRef $codeRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setCodeRef(\Devlabs91\GenericOtaHotelApiService\StructType\CodeRef $codeRef = null)
    {
        $this->CodeRef = $codeRef;
        return $this;
    }
    /**
     * Get HotelRef value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef[]|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef[] $hotelRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setHotelRef(array $hotelRef = array())
    {
        foreach ($hotelRef as $itemSearchCriterionTypeHotelRefItem) {
            // validation for constraint: itemType
            if (!$itemSearchCriterionTypeHotelRefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef) {
                throw new \InvalidArgumentException(sprintf('The HotelRef property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef, "%s" given', is_object($itemSearchCriterionTypeHotelRefItem) ? get_class($itemSearchCriterionTypeHotelRefItem) : gettype($itemSearchCriterionTypeHotelRefItem)), __LINE__);
            }
        }
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Add item to HotelRef value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function addToHotelRef(\Devlabs91\GenericOtaHotelApiService\StructType\HotelRef $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef) {
            throw new \InvalidArgumentException(sprintf('The HotelRef property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelRef[] = $item;
        return $this;
    }
    /**
     * Get Radius value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Radius|null
     */
    public function getRadius()
    {
        return $this->Radius;
    }
    /**
     * Set Radius value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Radius $radius
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setRadius(\Devlabs91\GenericOtaHotelApiService\StructType\Radius $radius = null)
    {
        $this->Radius = $radius;
        return $this;
    }
    /**
     * Get MapArea value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapArea|null
     */
    public function getMapArea()
    {
        return $this->MapArea;
    }
    /**
     * Set MapArea value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MapArea $mapArea
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setMapArea(\Devlabs91\GenericOtaHotelApiService\StructType\MapArea $mapArea = null)
    {
        $this->MapArea = $mapArea;
        return $this;
    }
    /**
     * Get ExactMatch value
     * @return bool|null
     */
    public function getExactMatch()
    {
        return $this->ExactMatch;
    }
    /**
     * Set ExactMatch value
     * @param bool $exactMatch
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setExactMatch($exactMatch = null)
    {
        // validation for constraint: boolean
        if (!is_null($exactMatch) && !is_bool($exactMatch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exactMatch)), __LINE__);
        }
        $this->ExactMatch = $exactMatch;
        return $this;
    }
    /**
     * Get ImportanceType value
     * @return string|null
     */
    public function getImportanceType()
    {
        return $this->ImportanceType;
    }
    /**
     * Set ImportanceType value
     * @param string $importanceType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setImportanceType($importanceType = null)
    {
        // validation for constraint: string
        if (!is_null($importanceType) && !is_string($importanceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($importanceType)), __LINE__);
        }
        $this->ImportanceType = $importanceType;
        return $this;
    }
    /**
     * Get Ranking value
     * @return int|null
     */
    public function getRanking()
    {
        return $this->Ranking;
    }
    /**
     * Set Ranking value
     * @param int $ranking
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setRanking($ranking = null)
    {
        // validation for constraint: int
        if (!is_null($ranking) && !is_numeric($ranking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ranking)), __LINE__);
        }
        $this->Ranking = $ranking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
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

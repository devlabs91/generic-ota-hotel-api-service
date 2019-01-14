<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemSearchCriterionType StructType
 * @subpackage Structs
 */
class ItemSearchCriterionType extends AbstractStructBase
{
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - documentation: The Position element contains three attributes, Latitude, Longitude, and Altitude, used to indicate the geographic location(s) requested by the search, expressed in notation specified by ISO standard 6709. It is likely that only the
     * first two attributes, Latitude and Longitude, would be needed to define a geographic area.
     * - minOccurs: 0
     * @var mixed
     */
    public $Position;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Uses any part of address information, such as street name, postal code, or country code.
     * - minOccurs: 0
     * @var mixed
     */
    public $Address;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - documentation: Telephone number(s) used in the search.
     * - minOccurs: 0
     * @var mixed
     */
    public $Telephone;
    /**
     * The RefPoint
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Point element allows for a search by proximity to a designated reference point by name.
     * - minOccurs: 0
     * @var mixed
     */
    public $RefPoint;
    /**
     * The CodeRef
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the location of points of interest.
     * - minOccurs: 0
     * @var mixed
     */
    public $CodeRef;
    /**
     * The HotelRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef
     */
    public $HotelRef;
    /**
     * The Radius
     * Meta informations extracted from the WSDL
     * - documentation: The Radius element contains two attributes, Distance and DistanceMeasure, that indicate the distance from the center of the radius, combined with the unit of measure used to express the Distance. The center of the radius is specified
     * by which ever location element is also present in this item search criterion type (e.g. position, address, hotel reference, etc.).
     * - minOccurs: 0
     * @var mixed
     */
    public $Radius;
    /**
     * The ExactMatch
     * Meta informations extracted from the WSDL
     * - documentation: values of "true" or "false", indicating whether the string of the search value must be an exact match.
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
     * Constructor method for ItemSearchCriterionType
     * @uses ItemSearchCriterionType::setPosition()
     * @uses ItemSearchCriterionType::setAddress()
     * @uses ItemSearchCriterionType::setTelephone()
     * @uses ItemSearchCriterionType::setRefPoint()
     * @uses ItemSearchCriterionType::setCodeRef()
     * @uses ItemSearchCriterionType::setHotelRef()
     * @uses ItemSearchCriterionType::setRadius()
     * @uses ItemSearchCriterionType::setExactMatch()
     * @uses ItemSearchCriterionType::setImportanceType()
     * @param mixed $position
     * @param mixed $address
     * @param mixed $telephone
     * @param mixed $refPoint
     * @param mixed $codeRef
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef $hotelRef
     * @param mixed $radius
     * @param bool $exactMatch
     * @param string $importanceType
     */
    public function __construct($position = null, $address = null, $telephone = null, $refPoint = null, $codeRef = null, \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef $hotelRef = null, $radius = null, $exactMatch = null, $importanceType = null)
    {
        $this
            ->setPosition($position)
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setRefPoint($refPoint)
            ->setCodeRef($codeRef)
            ->setHotelRef($hotelRef)
            ->setRadius($radius)
            ->setExactMatch($exactMatch)
            ->setImportanceType($importanceType);
    }
    /**
     * Get Position value
     * @return mixed|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param mixed $position
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setPosition($position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Address value
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param mixed $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return mixed|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param mixed $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setTelephone($telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get RefPoint value
     * @return mixed|null
     */
    public function getRefPoint()
    {
        return $this->RefPoint;
    }
    /**
     * Set RefPoint value
     * @param mixed $refPoint
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setRefPoint($refPoint = null)
    {
        $this->RefPoint = $refPoint;
        return $this;
    }
    /**
     * Get CodeRef value
     * @return mixed|null
     */
    public function getCodeRef()
    {
        return $this->CodeRef;
    }
    /**
     * Set CodeRef value
     * @param mixed $codeRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setCodeRef($codeRef = null)
    {
        $this->CodeRef = $codeRef;
        return $this;
    }
    /**
     * Get HotelRef value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef $hotelRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setHotelRef(\Devlabs91\GenericOtaHotelApiService\StructType\HotelRef $hotelRef = null)
    {
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Get Radius value
     * @return mixed|null
     */
    public function getRadius()
    {
        return $this->Radius;
    }
    /**
     * Set Radius value
     * @param mixed $radius
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItemSearchCriterionType
     */
    public function setRadius($radius = null)
    {
        $this->Radius = $radius;
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

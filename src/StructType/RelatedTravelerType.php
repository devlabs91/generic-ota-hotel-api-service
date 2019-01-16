<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelatedTravelerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Other traveler profiles associated with an specific individual. | Allows for control of the sharing of related traveler data between parties. | Birth date of the related traveler.
 * @subpackage Structs
 */
class RelatedTravelerType extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the profile of the related traveler.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: Person associated with the traveler.
     * - minOccurs: 0
     * @var mixed
     */
    public $PersonName;
    /**
     * The Relation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of relationship with the person in the profile, such as Spouse, Child, Family, Business Associate, Interest Group, Medical, Security, Other, etc.
     * - use: optional
     * @var string
     */
    public $Relation;
    /**
     * Constructor method for RelatedTravelerType
     * @uses RelatedTravelerType::setUniqueID()
     * @uses RelatedTravelerType::setPersonName()
     * @uses RelatedTravelerType::setRelation()
     * @param mixed $uniqueID
     * @param mixed $personName
     * @param string $relation
     */
    public function __construct($uniqueID = null, $personName = null, $relation = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setPersonName($personName)
            ->setRelation($relation);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelatedTravelerType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelatedTravelerType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Relation value
     * @return string|null
     */
    public function getRelation()
    {
        return $this->Relation;
    }
    /**
     * Set Relation value
     * @param string $relation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelatedTravelerType
     */
    public function setRelation($relation = null)
    {
        // validation for constraint: string
        if (!is_null($relation) && !is_string($relation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relation)), __LINE__);
        }
        $this->Relation = $relation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RelatedTravelerType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRestrictPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Constrains a fare search to those with restrictions that satisfy user-imposed limitations.
 * @subpackage Structs
 */
class FareRestrictPref extends FareRestrictPrefType
{
    /**
     * The AdvResTicketing
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether advance reservation or ticketing restrictions are acceptable in the search results
     * - minOccurs: 0
     * @var mixed
     */
    public $AdvResTicketing;
    /**
     * The StayRestrictions
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether restrictions on minimum or maximum stays should be included in the search results
     * - minOccurs: 0
     * @var mixed
     */
    public $StayRestrictions;
    /**
     * The VoluntaryChanges
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether penalties associated with voluntary changes should be included in the search results
     * - minOccurs: 0
     * @var mixed
     */
    public $VoluntaryChanges;
    /**
     * Constructor method for FareRestrictPref
     * @uses FareRestrictPref::setAdvResTicketing()
     * @uses FareRestrictPref::setStayRestrictions()
     * @uses FareRestrictPref::setVoluntaryChanges()
     * @param mixed $advResTicketing
     * @param mixed $stayRestrictions
     * @param mixed $voluntaryChanges
     */
    public function __construct($advResTicketing = null, $stayRestrictions = null, $voluntaryChanges = null)
    {
        $this
            ->setAdvResTicketing($advResTicketing)
            ->setStayRestrictions($stayRestrictions)
            ->setVoluntaryChanges($voluntaryChanges);
    }
    /**
     * Get AdvResTicketing value
     * @return mixed|null
     */
    public function getAdvResTicketing()
    {
        return $this->AdvResTicketing;
    }
    /**
     * Set AdvResTicketing value
     * @param mixed $advResTicketing
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref
     */
    public function setAdvResTicketing($advResTicketing = null)
    {
        $this->AdvResTicketing = $advResTicketing;
        return $this;
    }
    /**
     * Get StayRestrictions value
     * @return mixed|null
     */
    public function getStayRestrictions()
    {
        return $this->StayRestrictions;
    }
    /**
     * Set StayRestrictions value
     * @param mixed $stayRestrictions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref
     */
    public function setStayRestrictions($stayRestrictions = null)
    {
        $this->StayRestrictions = $stayRestrictions;
        return $this;
    }
    /**
     * Get VoluntaryChanges value
     * @return mixed|null
     */
    public function getVoluntaryChanges()
    {
        return $this->VoluntaryChanges;
    }
    /**
     * Set VoluntaryChanges value
     * @param mixed $voluntaryChanges
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref
     */
    public function setVoluntaryChanges($voluntaryChanges = null)
    {
        $this->VoluntaryChanges = $voluntaryChanges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareRestrictPref
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

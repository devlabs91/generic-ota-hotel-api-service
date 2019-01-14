<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoluntaryChangesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies charges and/or penalties associated with making ticket changes after purchase.
 * @subpackage Structs
 */
class VoluntaryChangesType extends AbstractStructBase
{
    /**
     * The Penalty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Penalty
     */
    public $Penalty;
    /**
     * The VolChangeInd
     * Meta informations extracted from the WSDL
     * - documentation: Indicator used to specify whether voluntary change and other penalties are involved in the search or response.
     * - use: optional
     * @var bool
     */
    public $VolChangeInd;
    /**
     * Constructor method for VoluntaryChangesType
     * @uses VoluntaryChangesType::setPenalty()
     * @uses VoluntaryChangesType::setVolChangeInd()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Penalty $penalty
     * @param bool $volChangeInd
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Penalty $penalty = null, $volChangeInd = null)
    {
        $this
            ->setPenalty($penalty)
            ->setVolChangeInd($volChangeInd);
    }
    /**
     * Get Penalty value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Penalty|null
     */
    public function getPenalty()
    {
        return $this->Penalty;
    }
    /**
     * Set Penalty value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Penalty $penalty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VoluntaryChangesType
     */
    public function setPenalty(\Devlabs91\GenericOtaHotelApiService\StructType\Penalty $penalty = null)
    {
        $this->Penalty = $penalty;
        return $this;
    }
    /**
     * Get VolChangeInd value
     * @return bool|null
     */
    public function getVolChangeInd()
    {
        return $this->VolChangeInd;
    }
    /**
     * Set VolChangeInd value
     * @param bool $volChangeInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VoluntaryChangesType
     */
    public function setVolChangeInd($volChangeInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($volChangeInd) && !is_bool($volChangeInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($volChangeInd)), __LINE__);
        }
        $this->VolChangeInd = $volChangeInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VoluntaryChangesType
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

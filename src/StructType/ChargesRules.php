<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargesRules StructType
 * Meta informations extracted from the WSDL
 * - documentation: General container for rules specifying amounts for such things as: surcharges, deposits, change penalties, cancellation penalties, etc.
 * @subpackage Structs
 */
class ChargesRules extends AbstractStructBase
{
    /**
     * The VoluntaryChanges
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a voluntary change charge.
     * - minOccurs: 0
     * @var mixed
     */
    public $VoluntaryChanges;
    /**
     * The VoluntaryRefunds
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a Voluntary Refund (cancellation) charge.
     * - minOccurs: 0
     * @var mixed
     */
    public $VoluntaryRefunds;
    /**
     * Constructor method for ChargesRules
     * @uses ChargesRules::setVoluntaryChanges()
     * @uses ChargesRules::setVoluntaryRefunds()
     * @param mixed $voluntaryChanges
     * @param mixed $voluntaryRefunds
     */
    public function __construct($voluntaryChanges = null, $voluntaryRefunds = null)
    {
        $this
            ->setVoluntaryChanges($voluntaryChanges)
            ->setVoluntaryRefunds($voluntaryRefunds);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ChargesRules
     */
    public function setVoluntaryChanges($voluntaryChanges = null)
    {
        $this->VoluntaryChanges = $voluntaryChanges;
        return $this;
    }
    /**
     * Get VoluntaryRefunds value
     * @return mixed|null
     */
    public function getVoluntaryRefunds()
    {
        return $this->VoluntaryRefunds;
    }
    /**
     * Set VoluntaryRefunds value
     * @param mixed $voluntaryRefunds
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ChargesRules
     */
    public function setVoluntaryRefunds($voluntaryRefunds = null)
    {
        $this->VoluntaryRefunds = $voluntaryRefunds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ChargesRules
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

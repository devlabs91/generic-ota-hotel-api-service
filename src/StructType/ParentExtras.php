<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParentExtras StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the parent with which this Extra is available (e.g., an ice skating session with ice skates). | Selection type and rule code for an extra.
 * @subpackage Structs
 */
class ParentExtras extends AbstractStructBase
{
    /**
     * The ListOfParentRPH
     * Meta informations extracted from the WSDL
     * - documentation: Where an option is applicable only to certain passengers, this attribute will contain the ReferencePlaceHolders of the relevant passengers.
     * - use: optional
     * @var string
     */
    public $ListOfParentRPH;
    /**
     * Constructor method for ParentExtras
     * @uses ParentExtras::setListOfParentRPH()
     * @param string $listOfParentRPH
     */
    public function __construct($listOfParentRPH = null)
    {
        $this
            ->setListOfParentRPH($listOfParentRPH);
    }
    /**
     * Get ListOfParentRPH value
     * @return string|null
     */
    public function getListOfParentRPH()
    {
        return $this->ListOfParentRPH;
    }
    /**
     * Set ListOfParentRPH value
     * @param string $listOfParentRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ParentExtras
     */
    public function setListOfParentRPH($listOfParentRPH = null)
    {
        // validation for constraint: string
        if (!is_null($listOfParentRPH) && !is_string($listOfParentRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listOfParentRPH)), __LINE__);
        }
        $this->ListOfParentRPH = $listOfParentRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ParentExtras
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

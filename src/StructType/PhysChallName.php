<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhysChallName StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the customer's physical challenge. | Used for Character Strings, length 0 to 255.
 * - maxLength: 255
 * - minLength: 0
 * @subpackage Structs
 */
class PhysChallName extends AbstractStructBase
{
    /**
     * The PhysChallInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates the customer is physically challenged.
     * - use: optional
     * @var bool
     */
    public $PhysChallInd;
    /**
     * Constructor method for PhysChallName
     * @uses PhysChallName::setPhysChallInd()
     * @param bool $physChallInd
     */
    public function __construct($physChallInd = null)
    {
        $this
            ->setPhysChallInd($physChallInd);
    }
    /**
     * Get PhysChallInd value
     * @return bool|null
     */
    public function getPhysChallInd()
    {
        return $this->PhysChallInd;
    }
    /**
     * Set PhysChallInd value
     * @param bool $physChallInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName
     */
    public function setPhysChallInd($physChallInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($physChallInd) && !is_bool($physChallInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($physChallInd)), __LINE__);
        }
        $this->PhysChallInd = $physChallInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName
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

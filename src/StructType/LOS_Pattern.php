<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LOS_Pattern StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to define the LOS Pattern.
 * @subpackage Structs
 */
class LOS_Pattern extends AbstractStructBase
{
    /**
     * The FullPatternLOS
     * Meta informations extracted from the WSDL
     * - documentation: This may be used when MinMaxMessageType is FullPatternLOS to identify the open and closed status by LOS (e.g., if LengthsOfStay@FixedPatternLength="5" then FullPatternLOS="YYNYY" or FullPatternLOS="11011").
     * - use: optional
     * @var string
     */
    public $FullPatternLOS;
    /**
     * Constructor method for LOS_Pattern
     * @uses LOS_Pattern::setFullPatternLOS()
     * @param string $fullPatternLOS
     */
    public function __construct($fullPatternLOS = null)
    {
        $this
            ->setFullPatternLOS($fullPatternLOS);
    }
    /**
     * Get FullPatternLOS value
     * @return string|null
     */
    public function getFullPatternLOS()
    {
        return $this->FullPatternLOS;
    }
    /**
     * Set FullPatternLOS value
     * @param string $fullPatternLOS
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LOS_Pattern
     */
    public function setFullPatternLOS($fullPatternLOS = null)
    {
        // validation for constraint: string
        if (!is_null($fullPatternLOS) && !is_string($fullPatternLOS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fullPatternLOS)), __LINE__);
        }
        $this->FullPatternLOS = $fullPatternLOS;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LOS_Pattern
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

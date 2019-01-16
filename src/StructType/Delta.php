<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Delta StructType
 * Meta informations extracted from the WSDL
 * - documentation: Incremental amount added to the hurdle rate (e.g. Amount= 20 USD and Ceiling=5, the maximum Delta would be 100 USD).
 * @subpackage Structs
 */
class Delta extends AbstractStructBase
{
    /**
     * The Ceiling
     * Meta informations extracted from the WSDL
     * - documentation: Upper limit on the number of Deltas that should be added to the Rate Hurdle for each transient reservation.
     * - use: optional
     * @var int
     */
    public $Ceiling;
    /**
     * The MaxSold
     * Meta informations extracted from the WSDL
     * - documentation: Upper limit on the number of transient reservations that should be accepted.
     * - use: optional
     * @var int
     */
    public $MaxSold;
    /**
     * Constructor method for Delta
     * @uses Delta::setCeiling()
     * @uses Delta::setMaxSold()
     * @param int $ceiling
     * @param int $maxSold
     */
    public function __construct($ceiling = null, $maxSold = null)
    {
        $this
            ->setCeiling($ceiling)
            ->setMaxSold($maxSold);
    }
    /**
     * Get Ceiling value
     * @return int|null
     */
    public function getCeiling()
    {
        return $this->Ceiling;
    }
    /**
     * Set Ceiling value
     * @param int $ceiling
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Delta
     */
    public function setCeiling($ceiling = null)
    {
        // validation for constraint: int
        if (!is_null($ceiling) && !is_numeric($ceiling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ceiling)), __LINE__);
        }
        $this->Ceiling = $ceiling;
        return $this;
    }
    /**
     * Get MaxSold value
     * @return int|null
     */
    public function getMaxSold()
    {
        return $this->MaxSold;
    }
    /**
     * Set MaxSold value
     * @param int $maxSold
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Delta
     */
    public function setMaxSold($maxSold = null)
    {
        // validation for constraint: int
        if (!is_null($maxSold) && !is_numeric($maxSold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxSold)), __LINE__);
        }
        $this->MaxSold = $maxSold;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Delta
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

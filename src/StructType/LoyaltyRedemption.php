<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyRedemption StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is normally miles or points.
 * @subpackage Structs
 */
class LoyaltyRedemption extends LoyaltyCertificateNumberType
{
    /**
     * The RedemptionQuantity
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $RedemptionQuantity;
    /**
     * Constructor method for LoyaltyRedemption
     * @uses LoyaltyRedemption::setRedemptionQuantity()
     * @param int $redemptionQuantity
     */
    public function __construct($redemptionQuantity = null)
    {
        $this
            ->setRedemptionQuantity($redemptionQuantity);
    }
    /**
     * Get RedemptionQuantity value
     * @return int|null
     */
    public function getRedemptionQuantity()
    {
        return $this->RedemptionQuantity;
    }
    /**
     * Set RedemptionQuantity value
     * @param int $redemptionQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption
     */
    public function setRedemptionQuantity($redemptionQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($redemptionQuantity) && !is_numeric($redemptionQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($redemptionQuantity)), __LINE__);
        }
        $this->RedemptionQuantity = $redemptionQuantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption
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

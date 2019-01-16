<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyRedemption StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a loyalty redemption arrangement. This is normally miles or points. | Identifies the Loyalty scheme, programs and promotions within the scheme, membership reference, form factor used by the certificate, the number of
 * nights it can be used for and its current status. | Used to provide a promotion code of the loyalty redemption.
 * @subpackage Structs
 */
class LoyaltyRedemption extends AbstractStructBase
{
    /**
     * The LoyaltyCertificate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate[]
     */
    public $LoyaltyCertificate;
    /**
     * The RedemptionQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The quantity of loyalty units being redeemed.
     * - use: optional
     * @var int
     */
    public $RedemptionQuantity;
    /**
     * Constructor method for LoyaltyRedemption
     * @uses LoyaltyRedemption::setLoyaltyCertificate()
     * @uses LoyaltyRedemption::setRedemptionQuantity()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate[] $loyaltyCertificate
     * @param int $redemptionQuantity
     */
    public function __construct(array $loyaltyCertificate = array(), $redemptionQuantity = null)
    {
        $this
            ->setLoyaltyCertificate($loyaltyCertificate)
            ->setRedemptionQuantity($redemptionQuantity);
    }
    /**
     * Get LoyaltyCertificate value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate[]|null
     */
    public function getLoyaltyCertificate()
    {
        return $this->LoyaltyCertificate;
    }
    /**
     * Set LoyaltyCertificate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate[] $loyaltyCertificate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption
     */
    public function setLoyaltyCertificate(array $loyaltyCertificate = array())
    {
        foreach ($loyaltyCertificate as $loyaltyRedemptionLoyaltyCertificateItem) {
            // validation for constraint: itemType
            if (!$loyaltyRedemptionLoyaltyCertificateItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate) {
                throw new \InvalidArgumentException(sprintf('The LoyaltyCertificate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate, "%s" given', is_object($loyaltyRedemptionLoyaltyCertificateItem) ? get_class($loyaltyRedemptionLoyaltyCertificateItem) : gettype($loyaltyRedemptionLoyaltyCertificateItem)), __LINE__);
            }
        }
        $this->LoyaltyCertificate = $loyaltyCertificate;
        return $this;
    }
    /**
     * Add item to LoyaltyCertificate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption
     */
    public function addToLoyaltyCertificate(\Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate) {
            throw new \InvalidArgumentException(sprintf('The LoyaltyCertificate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LoyaltyCertificate[] = $item;
        return $this;
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

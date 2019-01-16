<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Endorsements StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for endorsements.
 * @subpackage Structs
 */
class Endorsements extends AbstractStructBase
{
    /**
     * The Endorsement
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement[]
     */
    public $Endorsement;
    /**
     * The NonRefundableIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the ticket is refundable. If true, the ticket is NOT refundable.
     * - use: optional
     * @var bool
     */
    public $NonRefundableIndicator;
    /**
     * The NonEndorsableIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the ticket is endorsable. If true, the ticket is NOT endorsable.
     * - use: optional
     * @var bool
     */
    public $NonEndorsableIndicator;
    /**
     * Constructor method for Endorsements
     * @uses Endorsements::setEndorsement()
     * @uses Endorsements::setNonRefundableIndicator()
     * @uses Endorsements::setNonEndorsableIndicator()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement[] $endorsement
     * @param bool $nonRefundableIndicator
     * @param bool $nonEndorsableIndicator
     */
    public function __construct(array $endorsement = array(), $nonRefundableIndicator = null, $nonEndorsableIndicator = null)
    {
        $this
            ->setEndorsement($endorsement)
            ->setNonRefundableIndicator($nonRefundableIndicator)
            ->setNonEndorsableIndicator($nonEndorsableIndicator);
    }
    /**
     * Get Endorsement value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement[]|null
     */
    public function getEndorsement()
    {
        return $this->Endorsement;
    }
    /**
     * Set Endorsement value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement[] $endorsement
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Endorsements
     */
    public function setEndorsement(array $endorsement = array())
    {
        foreach ($endorsement as $endorsementsEndorsementItem) {
            // validation for constraint: itemType
            if (!$endorsementsEndorsementItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement) {
                throw new \InvalidArgumentException(sprintf('The Endorsement property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement, "%s" given', is_object($endorsementsEndorsementItem) ? get_class($endorsementsEndorsementItem) : gettype($endorsementsEndorsementItem)), __LINE__);
            }
        }
        $this->Endorsement = $endorsement;
        return $this;
    }
    /**
     * Add item to Endorsement value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Endorsements
     */
    public function addToEndorsement(\Devlabs91\GenericOtaHotelApiService\StructType\Endorsement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement) {
            throw new \InvalidArgumentException(sprintf('The Endorsement property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Endorsement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Endorsement[] = $item;
        return $this;
    }
    /**
     * Get NonRefundableIndicator value
     * @return bool|null
     */
    public function getNonRefundableIndicator()
    {
        return $this->NonRefundableIndicator;
    }
    /**
     * Set NonRefundableIndicator value
     * @param bool $nonRefundableIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Endorsements
     */
    public function setNonRefundableIndicator($nonRefundableIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($nonRefundableIndicator) && !is_bool($nonRefundableIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nonRefundableIndicator)), __LINE__);
        }
        $this->NonRefundableIndicator = $nonRefundableIndicator;
        return $this;
    }
    /**
     * Get NonEndorsableIndicator value
     * @return bool|null
     */
    public function getNonEndorsableIndicator()
    {
        return $this->NonEndorsableIndicator;
    }
    /**
     * Set NonEndorsableIndicator value
     * @param bool $nonEndorsableIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Endorsements
     */
    public function setNonEndorsableIndicator($nonEndorsableIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($nonEndorsableIndicator) && !is_bool($nonEndorsableIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nonEndorsableIndicator)), __LINE__);
        }
        $this->NonEndorsableIndicator = $nonEndorsableIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Endorsements
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PetsPolicy StructType
 * Meta informations extracted from the WSDL
 * - documentation: Detailed policy information when Pets are Allowed. | This is used to designate the maximum pet weight and unit of weight measure (e.g., pounds or kilograms).
 * @subpackage Structs
 */
class PetsPolicy extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A description of the pet policy.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The PetsPolicyCode
     * Meta informations extracted from the WSDL
     * - documentation: Use OpenTravel Code Table Pet Policy Code list (PET).
     * - use: optional
     * @var string
     */
    public $PetsPolicyCode;
    /**
     * The MaxPetQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Maximum Number of Pets allowed in the accommodation provided.
     * - use: optional
     * @var string
     */
    public $MaxPetQuantity;
    /**
     * The RefundableDeposit
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RefundableDeposit;
    /**
     * The NonRefundableFee
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the charge associated with a pet staying in the room.
     * - use: optional
     * @var string
     */
    public $NonRefundableFee;
    /**
     * The ChargeCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide charge information for a pet. Refer to OpenTravel Code list Charge Type (CHG).
     * - use: optional
     * @var string
     */
    public $ChargeCode;
    /**
     * The RestrictionInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, there is a restriction associated with this pet policy. When false, there is not a restriction associated with this pet policy.
     * - use: optional
     * @var bool
     */
    public $RestrictionInd;
    /**
     * The MinUnitOfMeasureQuantity
     * Meta informations extracted from the WSDL
     * - documentation: This is used to designate the minimum pet weight allowed. The unit of measure code may indicate the associated unit of weight measure (e.g., pounds or kilograms).
     * - use: optional
     * @var float
     */
    public $MinUnitOfMeasureQuantity;
    /**
     * Constructor method for PetsPolicy
     * @uses PetsPolicy::setDescription()
     * @uses PetsPolicy::setPetsPolicyCode()
     * @uses PetsPolicy::setMaxPetQuantity()
     * @uses PetsPolicy::setRefundableDeposit()
     * @uses PetsPolicy::setNonRefundableFee()
     * @uses PetsPolicy::setChargeCode()
     * @uses PetsPolicy::setRestrictionInd()
     * @uses PetsPolicy::setMinUnitOfMeasureQuantity()
     * @param mixed[] $description
     * @param string $petsPolicyCode
     * @param string $maxPetQuantity
     * @param string $refundableDeposit
     * @param string $nonRefundableFee
     * @param string $chargeCode
     * @param bool $restrictionInd
     * @param float $minUnitOfMeasureQuantity
     */
    public function __construct(array $description = array(), $petsPolicyCode = null, $maxPetQuantity = null, $refundableDeposit = null, $nonRefundableFee = null, $chargeCode = null, $restrictionInd = null, $minUnitOfMeasureQuantity = null)
    {
        $this
            ->setDescription($description)
            ->setPetsPolicyCode($petsPolicyCode)
            ->setMaxPetQuantity($maxPetQuantity)
            ->setRefundableDeposit($refundableDeposit)
            ->setNonRefundableFee($nonRefundableFee)
            ->setChargeCode($chargeCode)
            ->setRestrictionInd($restrictionInd)
            ->setMinUnitOfMeasureQuantity($minUnitOfMeasureQuantity);
    }
    /**
     * Get Description value
     * @return mixed[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param mixed[] $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetsPolicy
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $petsPolicyDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($petsPolicyDescriptionItem) ? get_class($petsPolicyDescriptionItem) : gettype($petsPolicyDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetsPolicy
     */
    public function addToDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get PetsPolicyCode value
     * @return string|null
     */
    public function getPetsPolicyCode()
    {
        return $this->PetsPolicyCode;
    }
    /**
     * Set PetsPolicyCode value
     * @param string $petsPolicyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetsPolicy
     */
    public function setPetsPolicyCode($petsPolicyCode = null)
    {
        // validation for constraint: string
        if (!is_null($petsPolicyCode) && !is_string($petsPolicyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($petsPolicyCode)), __LINE__);
        }
        $this->PetsPolicyCode = $petsPolicyCode;
        return $this;
    }
    /**
     * Get MaxPetQuantity value
     * @return string|null
     */
    public function getMaxPetQuantity()
    {
        return $this->MaxPetQuantity;
    }
    /**
     * Set MaxPetQuantity value
     * @param string $maxPetQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetsPolicy
     */
    public function setMaxPetQuantity($maxPetQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($maxPetQuantity) && !is_string($maxPetQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxPetQuantity)), __LINE__);
        }
        $this->MaxPetQuantity = $maxPetQuantity;
        return $this;
    }
    /**
     * Get RefundableDeposit value
     * @return string|null
     */
    public function getRefundableDeposit()
    {
        return $this->RefundableDeposit;
    }
    /**
     * Set RefundableDeposit value
     * @param string $refundableDeposit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetsPolicy
     */
    public function setRefundableDeposit($refundableDeposit = null)
    {
        // validation for constraint: string
        if (!is_null($refundableDeposit) && !is_string($refundableDeposit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundableDeposit)), __LINE__);
        }
        $this->RefundableDeposit = $refundableDeposit;
        return $this;
    }
    /**
     * Get NonRefundableFee value
     * @return string|null
     */
    public function getNonRefundableFee()
    {
        return $this->NonRefundableFee;
    }
    /**
     * Set NonRefundableFee value
     * @param string $nonRefundableFee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetsPolicy
     */
    public function setNonRefundableFee($nonRefundableFee = null)
    {
        // validation for constraint: string
        if (!is_null($nonRefundableFee) && !is_string($nonRefundableFee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nonRefundableFee)), __LINE__);
        }
        $this->NonRefundableFee = $nonRefundableFee;
        return $this;
    }
    /**
     * Get ChargeCode value
     * @return string|null
     */
    public function getChargeCode()
    {
        return $this->ChargeCode;
    }
    /**
     * Set ChargeCode value
     * @param string $chargeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetsPolicy
     */
    public function setChargeCode($chargeCode = null)
    {
        // validation for constraint: string
        if (!is_null($chargeCode) && !is_string($chargeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeCode)), __LINE__);
        }
        $this->ChargeCode = $chargeCode;
        return $this;
    }
    /**
     * Get RestrictionInd value
     * @return bool|null
     */
    public function getRestrictionInd()
    {
        return $this->RestrictionInd;
    }
    /**
     * Set RestrictionInd value
     * @param bool $restrictionInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetsPolicy
     */
    public function setRestrictionInd($restrictionInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($restrictionInd) && !is_bool($restrictionInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($restrictionInd)), __LINE__);
        }
        $this->RestrictionInd = $restrictionInd;
        return $this;
    }
    /**
     * Get MinUnitOfMeasureQuantity value
     * @return float|null
     */
    public function getMinUnitOfMeasureQuantity()
    {
        return $this->MinUnitOfMeasureQuantity;
    }
    /**
     * Set MinUnitOfMeasureQuantity value
     * @param float $minUnitOfMeasureQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetsPolicy
     */
    public function setMinUnitOfMeasureQuantity($minUnitOfMeasureQuantity = null)
    {
        $this->MinUnitOfMeasureQuantity = $minUnitOfMeasureQuantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetsPolicy
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

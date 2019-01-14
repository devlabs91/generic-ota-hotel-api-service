<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanCandidatesType StructType
 * @subpackage Structs
 */
class RatePlanCandidatesType extends AbstractStructBase
{
    /**
     * The RatePlanCandidate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate[]
     */
    public $RatePlanCandidate;
    /**
     * Constructor method for RatePlanCandidatesType
     * @uses RatePlanCandidatesType::setRatePlanCandidate()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate[] $ratePlanCandidate
     */
    public function __construct(array $ratePlanCandidate = array())
    {
        $this
            ->setRatePlanCandidate($ratePlanCandidate);
    }
    /**
     * Get RatePlanCandidate value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate[]|null
     */
    public function getRatePlanCandidate()
    {
        return $this->RatePlanCandidate;
    }
    /**
     * Set RatePlanCandidate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate[] $ratePlanCandidate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidatesType
     */
    public function setRatePlanCandidate(array $ratePlanCandidate = array())
    {
        foreach ($ratePlanCandidate as $ratePlanCandidatesTypeRatePlanCandidateItem) {
            // validation for constraint: itemType
            if (!$ratePlanCandidatesTypeRatePlanCandidateItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate) {
                throw new \InvalidArgumentException(sprintf('The RatePlanCandidate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate, "%s" given', is_object($ratePlanCandidatesTypeRatePlanCandidateItem) ? get_class($ratePlanCandidatesTypeRatePlanCandidateItem) : gettype($ratePlanCandidatesTypeRatePlanCandidateItem)), __LINE__);
            }
        }
        $this->RatePlanCandidate = $ratePlanCandidate;
        return $this;
    }
    /**
     * Add item to RatePlanCandidate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidatesType
     */
    public function addToRatePlanCandidate(\Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate) {
            throw new \InvalidArgumentException(sprintf('The RatePlanCandidate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatePlanCandidate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidatesType
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

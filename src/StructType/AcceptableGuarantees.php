<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptableGuarantees StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of accepted guarantees.
 * @subpackage Structs
 */
class AcceptableGuarantees extends AbstractStructBase
{
    /**
     * The AcceptableGuarantee
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee[]
     */
    public $AcceptableGuarantee;
    /**
     * Constructor method for AcceptableGuarantees
     * @uses AcceptableGuarantees::setAcceptableGuarantee()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee[] $acceptableGuarantee
     */
    public function __construct(array $acceptableGuarantee = array())
    {
        $this
            ->setAcceptableGuarantee($acceptableGuarantee);
    }
    /**
     * Get AcceptableGuarantee value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee[]|null
     */
    public function getAcceptableGuarantee()
    {
        return $this->AcceptableGuarantee;
    }
    /**
     * Set AcceptableGuarantee value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee[] $acceptableGuarantee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantees
     */
    public function setAcceptableGuarantee(array $acceptableGuarantee = array())
    {
        foreach ($acceptableGuarantee as $acceptableGuaranteesAcceptableGuaranteeItem) {
            // validation for constraint: itemType
            if (!$acceptableGuaranteesAcceptableGuaranteeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee) {
                throw new \InvalidArgumentException(sprintf('The AcceptableGuarantee property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee, "%s" given', is_object($acceptableGuaranteesAcceptableGuaranteeItem) ? get_class($acceptableGuaranteesAcceptableGuaranteeItem) : gettype($acceptableGuaranteesAcceptableGuaranteeItem)), __LINE__);
            }
        }
        $this->AcceptableGuarantee = $acceptableGuarantee;
        return $this;
    }
    /**
     * Add item to AcceptableGuarantee value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantees
     */
    public function addToAcceptableGuarantee(\Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee) {
            throw new \InvalidArgumentException(sprintf('The AcceptableGuarantee property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AcceptableGuarantee[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantees
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

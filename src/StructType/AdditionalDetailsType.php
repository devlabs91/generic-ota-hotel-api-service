<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of AdditionalDetail.
 * @subpackage Structs
 */
class AdditionalDetailsType extends AbstractStructBase
{
    /**
     * The AdditionalDetail
     * Meta informations extracted from the WSDL
     * - documentation: Used to send additional information.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $AdditionalDetail;
    /**
     * Constructor method for AdditionalDetailsType
     * @uses AdditionalDetailsType::setAdditionalDetail()
     * @param mixed[] $additionalDetail
     */
    public function __construct(array $additionalDetail = array())
    {
        $this
            ->setAdditionalDetail($additionalDetail);
    }
    /**
     * Get AdditionalDetail value
     * @return mixed[]|null
     */
    public function getAdditionalDetail()
    {
        return $this->AdditionalDetail;
    }
    /**
     * Set AdditionalDetail value
     * @throws \InvalidArgumentException
     * @param mixed[] $additionalDetail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalDetailsType
     */
    public function setAdditionalDetail(array $additionalDetail = array())
    {
        foreach ($additionalDetail as $additionalDetailsTypeAdditionalDetailItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AdditionalDetail property can only contain items of anyType, "%s" given', is_object($additionalDetailsTypeAdditionalDetailItem) ? get_class($additionalDetailsTypeAdditionalDetailItem) : gettype($additionalDetailsTypeAdditionalDetailItem)), __LINE__);
            }
        }
        $this->AdditionalDetail = $additionalDetail;
        return $this;
    }
    /**
     * Add item to AdditionalDetail value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalDetailsType
     */
    public function addToAdditionalDetail($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AdditionalDetail property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalDetailsType
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

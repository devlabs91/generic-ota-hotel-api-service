<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecreationDetails StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of recreation details.
 * @subpackage Structs
 */
class RecreationDetails extends AbstractStructBase
{
    /**
     * The RecreationDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail[]
     */
    public $RecreationDetail;
    /**
     * Constructor method for RecreationDetails
     * @uses RecreationDetails::setRecreationDetail()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail[] $recreationDetail
     */
    public function __construct(array $recreationDetail = array())
    {
        $this
            ->setRecreationDetail($recreationDetail);
    }
    /**
     * Get RecreationDetail value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail[]|null
     */
    public function getRecreationDetail()
    {
        return $this->RecreationDetail;
    }
    /**
     * Set RecreationDetail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail[] $recreationDetail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails
     */
    public function setRecreationDetail(array $recreationDetail = array())
    {
        foreach ($recreationDetail as $recreationDetailsRecreationDetailItem) {
            // validation for constraint: itemType
            if (!$recreationDetailsRecreationDetailItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail) {
                throw new \InvalidArgumentException(sprintf('The RecreationDetail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail, "%s" given', is_object($recreationDetailsRecreationDetailItem) ? get_class($recreationDetailsRecreationDetailItem) : gettype($recreationDetailsRecreationDetailItem)), __LINE__);
            }
        }
        $this->RecreationDetail = $recreationDetail;
        return $this;
    }
    /**
     * Add item to RecreationDetail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails
     */
    public function addToRecreationDetail(\Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail) {
            throw new \InvalidArgumentException(sprintf('The RecreationDetail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RecreationDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetails
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

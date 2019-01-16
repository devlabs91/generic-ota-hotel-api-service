<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViewershipsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Viewerships determine the distribution channel(s) for a rate plan. As an optional element, the absence of Viewerships implies a generally available rate, while the presence of a Viewerships collection implies qualifications on the
 * rate. This may also be used to define a system that is able to view the hotel content.
 * @subpackage Structs
 */
class ViewershipsType extends AbstractStructBase
{
    /**
     * The Viewership
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Viewership[]
     */
    public $Viewership;
    /**
     * Constructor method for ViewershipsType
     * @uses ViewershipsType::setViewership()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Viewership[] $viewership
     */
    public function __construct(array $viewership = array())
    {
        $this
            ->setViewership($viewership);
    }
    /**
     * Get Viewership value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Viewership[]|null
     */
    public function getViewership()
    {
        return $this->Viewership;
    }
    /**
     * Set Viewership value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Viewership[] $viewership
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ViewershipsType
     */
    public function setViewership(array $viewership = array())
    {
        foreach ($viewership as $viewershipsTypeViewershipItem) {
            // validation for constraint: itemType
            if (!$viewershipsTypeViewershipItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Viewership) {
                throw new \InvalidArgumentException(sprintf('The Viewership property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Viewership, "%s" given', is_object($viewershipsTypeViewershipItem) ? get_class($viewershipsTypeViewershipItem) : gettype($viewershipsTypeViewershipItem)), __LINE__);
            }
        }
        $this->Viewership = $viewership;
        return $this;
    }
    /**
     * Add item to Viewership value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Viewership $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ViewershipsType
     */
    public function addToViewership(\Devlabs91\GenericOtaHotelApiService\StructType\Viewership $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Viewership) {
            throw new \InvalidArgumentException(sprintf('The Viewership property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Viewership, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Viewership[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ViewershipsType
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

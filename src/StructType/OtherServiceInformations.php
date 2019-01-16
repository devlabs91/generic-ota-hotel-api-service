<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherServiceInformations StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Other Service Information.
 * @subpackage Structs
 */
class OtherServiceInformations extends AbstractStructBase
{
    /**
     * The OtherServiceInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformation[]
     */
    public $OtherServiceInformation;
    /**
     * Constructor method for OtherServiceInformations
     * @uses OtherServiceInformations::setOtherServiceInformation()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformation[] $otherServiceInformation
     */
    public function __construct(array $otherServiceInformation = array())
    {
        $this
            ->setOtherServiceInformation($otherServiceInformation);
    }
    /**
     * Get OtherServiceInformation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformation[]|null
     */
    public function getOtherServiceInformation()
    {
        return $this->OtherServiceInformation;
    }
    /**
     * Set OtherServiceInformation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformation[] $otherServiceInformation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformations
     */
    public function setOtherServiceInformation(array $otherServiceInformation = array())
    {
        foreach ($otherServiceInformation as $otherServiceInformationsOtherServiceInformationItem) {
            // validation for constraint: itemType
            if (!$otherServiceInformationsOtherServiceInformationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformation) {
                throw new \InvalidArgumentException(sprintf('The OtherServiceInformation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformation, "%s" given', is_object($otherServiceInformationsOtherServiceInformationItem) ? get_class($otherServiceInformationsOtherServiceInformationItem) : gettype($otherServiceInformationsOtherServiceInformationItem)), __LINE__);
            }
        }
        $this->OtherServiceInformation = $otherServiceInformation;
        return $this;
    }
    /**
     * Add item to OtherServiceInformation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformation $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformations
     */
    public function addToOtherServiceInformation(\Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformation) {
            throw new \InvalidArgumentException(sprintf('The OtherServiceInformation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OtherServiceInformation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInformations
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

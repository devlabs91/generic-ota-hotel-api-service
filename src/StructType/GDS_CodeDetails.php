<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDS_CodeDetails StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of GDS_CodeDetails.
 * @subpackage Structs
 */
class GDS_CodeDetails extends AbstractStructBase
{
    /**
     * The GDS_CodeDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail[]
     */
    public $GDS_CodeDetail;
    /**
     * Constructor method for GDS_CodeDetails
     * @uses GDS_CodeDetails::setGDS_CodeDetail()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail[] $gDS_CodeDetail
     */
    public function __construct(array $gDS_CodeDetail = array())
    {
        $this
            ->setGDS_CodeDetail($gDS_CodeDetail);
    }
    /**
     * Get GDS_CodeDetail value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail[]|null
     */
    public function getGDS_CodeDetail()
    {
        return $this->GDS_CodeDetail;
    }
    /**
     * Set GDS_CodeDetail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail[] $gDS_CodeDetail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetails
     */
    public function setGDS_CodeDetail(array $gDS_CodeDetail = array())
    {
        foreach ($gDS_CodeDetail as $gDS_CodeDetailsGDS_CodeDetailItem) {
            // validation for constraint: itemType
            if (!$gDS_CodeDetailsGDS_CodeDetailItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail) {
                throw new \InvalidArgumentException(sprintf('The GDS_CodeDetail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail, "%s" given', is_object($gDS_CodeDetailsGDS_CodeDetailItem) ? get_class($gDS_CodeDetailsGDS_CodeDetailItem) : gettype($gDS_CodeDetailsGDS_CodeDetailItem)), __LINE__);
            }
        }
        $this->GDS_CodeDetail = $gDS_CodeDetail;
        return $this;
    }
    /**
     * Add item to GDS_CodeDetail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetails
     */
    public function addToGDS_CodeDetail(\Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail) {
            throw new \InvalidArgumentException(sprintf('The GDS_CodeDetail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GDS_CodeDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetails
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

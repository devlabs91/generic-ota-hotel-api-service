<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The line item detail of specific revenue transactions.
 * @subpackage Structs
 */
class RevenueDetailsType extends AbstractStructBase
{
    /**
     * The RevenueDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains line item details about specific revenue transactions.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $RevenueDetail;
    /**
     * Constructor method for RevenueDetailsType
     * @uses RevenueDetailsType::setRevenueDetail()
     * @param mixed[] $revenueDetail
     */
    public function __construct(array $revenueDetail = array())
    {
        $this
            ->setRevenueDetail($revenueDetail);
    }
    /**
     * Get RevenueDetail value
     * @return mixed[]|null
     */
    public function getRevenueDetail()
    {
        return $this->RevenueDetail;
    }
    /**
     * Set RevenueDetail value
     * @throws \InvalidArgumentException
     * @param mixed[] $revenueDetail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueDetailsType
     */
    public function setRevenueDetail(array $revenueDetail = array())
    {
        foreach ($revenueDetail as $revenueDetailsTypeRevenueDetailItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RevenueDetail property can only contain items of anyType, "%s" given', is_object($revenueDetailsTypeRevenueDetailItem) ? get_class($revenueDetailsTypeRevenueDetailItem) : gettype($revenueDetailsTypeRevenueDetailItem)), __LINE__);
            }
        }
        $this->RevenueDetail = $revenueDetail;
        return $this;
    }
    /**
     * Add item to RevenueDetail value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueDetailsType
     */
    public function addToRevenueDetail($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RevenueDetail property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RevenueDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueDetailsType
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

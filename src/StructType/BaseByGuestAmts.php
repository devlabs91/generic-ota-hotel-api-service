<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseByGuestAmts StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Base charges by number of guests.
 * @subpackage Structs
 */
class BaseByGuestAmts extends AbstractStructBase
{
    /**
     * The BaseByGuestAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt[]
     */
    public $BaseByGuestAmt;
    /**
     * Constructor method for BaseByGuestAmts
     * @uses BaseByGuestAmts::setBaseByGuestAmt()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt[] $baseByGuestAmt
     */
    public function __construct(array $baseByGuestAmt = array())
    {
        $this
            ->setBaseByGuestAmt($baseByGuestAmt);
    }
    /**
     * Get BaseByGuestAmt value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt[]|null
     */
    public function getBaseByGuestAmt()
    {
        return $this->BaseByGuestAmt;
    }
    /**
     * Set BaseByGuestAmt value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt[] $baseByGuestAmt
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmts
     */
    public function setBaseByGuestAmt(array $baseByGuestAmt = array())
    {
        foreach ($baseByGuestAmt as $baseByGuestAmtsBaseByGuestAmtItem) {
            // validation for constraint: itemType
            if (!$baseByGuestAmtsBaseByGuestAmtItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt) {
                throw new \InvalidArgumentException(sprintf('The BaseByGuestAmt property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt, "%s" given', is_object($baseByGuestAmtsBaseByGuestAmtItem) ? get_class($baseByGuestAmtsBaseByGuestAmtItem) : gettype($baseByGuestAmtsBaseByGuestAmtItem)), __LINE__);
            }
        }
        $this->BaseByGuestAmt = $baseByGuestAmt;
        return $this;
    }
    /**
     * Add item to BaseByGuestAmt value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmts
     */
    public function addToBaseByGuestAmt(\Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt) {
            throw new \InvalidArgumentException(sprintf('The BaseByGuestAmt property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmt, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BaseByGuestAmt[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseByGuestAmts
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

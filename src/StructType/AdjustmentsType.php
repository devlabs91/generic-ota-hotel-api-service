<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdjustmentsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: AdjustmentsType.
 * @subpackage Structs
 */
class AdjustmentsType extends AbstractStructBase
{
    /**
     * The Adjustment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment[]
     */
    public $Adjustment;
    /**
     * The RequestID
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RequestID;
    /**
     * Constructor method for AdjustmentsType
     * @uses AdjustmentsType::setAdjustment()
     * @uses AdjustmentsType::setRequestID()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment[] $adjustment
     * @param string $requestID
     */
    public function __construct(array $adjustment = array(), $requestID = null)
    {
        $this
            ->setAdjustment($adjustment)
            ->setRequestID($requestID);
    }
    /**
     * Get Adjustment value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment[]|null
     */
    public function getAdjustment()
    {
        return $this->Adjustment;
    }
    /**
     * Set Adjustment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment[] $adjustment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdjustmentsType
     */
    public function setAdjustment(array $adjustment = array())
    {
        foreach ($adjustment as $adjustmentsTypeAdjustmentItem) {
            // validation for constraint: itemType
            if (!$adjustmentsTypeAdjustmentItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment) {
                throw new \InvalidArgumentException(sprintf('The Adjustment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment, "%s" given', is_object($adjustmentsTypeAdjustmentItem) ? get_class($adjustmentsTypeAdjustmentItem) : gettype($adjustmentsTypeAdjustmentItem)), __LINE__);
            }
        }
        $this->Adjustment = $adjustment;
        return $this;
    }
    /**
     * Add item to Adjustment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdjustmentsType
     */
    public function addToAdjustment(\Devlabs91\GenericOtaHotelApiService\StructType\Adjustment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment) {
            throw new \InvalidArgumentException(sprintf('The Adjustment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Adjustment[] = $item;
        return $this;
    }
    /**
     * Get RequestID value
     * @return string|null
     */
    public function getRequestID()
    {
        return $this->RequestID;
    }
    /**
     * Set RequestID value
     * @param string $requestID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdjustmentsType
     */
    public function setRequestID($requestID = null)
    {
        // validation for constraint: string
        if (!is_null($requestID) && !is_string($requestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestID)), __LINE__);
        }
        $this->RequestID = $requestID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdjustmentsType
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

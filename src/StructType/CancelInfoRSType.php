<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelInfoRSType StructType
 * Meta informations extracted from the WSDL
 * - documentation: May contain rules associated with canceling a reservation as well as the supplier's cancellation number.
 * @subpackage Structs
 */
class CancelInfoRSType extends AbstractStructBase
{
    /**
     * The CancelRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CancelRules
     */
    public $CancelRules;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: Contains the supplier's cancellation number.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * Constructor method for CancelInfoRSType
     * @uses CancelInfoRSType::setCancelRules()
     * @uses CancelInfoRSType::setUniqueID()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CancelRules $cancelRules
     * @param mixed $uniqueID
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\CancelRules $cancelRules = null, $uniqueID = null)
    {
        $this
            ->setCancelRules($cancelRules)
            ->setUniqueID($uniqueID);
    }
    /**
     * Get CancelRules value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRules|null
     */
    public function getCancelRules()
    {
        return $this->CancelRules;
    }
    /**
     * Set CancelRules value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CancelRules $cancelRules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelInfoRSType
     */
    public function setCancelRules(\Devlabs91\GenericOtaHotelApiService\StructType\CancelRules $cancelRules = null)
    {
        $this->CancelRules = $cancelRules;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelInfoRSType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelInfoRSType
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

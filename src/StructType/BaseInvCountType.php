<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseInvCountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The set of changes in the number of units of base inventory for one inventory type (code) to be made on the server. The server must successfully update all messages. Failure to update any single status message will result in the
 * failure of all messages.
 * @subpackage Structs
 */
class BaseInvCountType extends AbstractStructBase
{
    /**
     * The StatusApplicationControl
     * Meta informations extracted from the WSDL
     * - documentation: Information on what the InvCountNotif Message applies to (i.e. the combination of inventory and/or rate codes) and the period of application.
     * - minOccurs: 0
     * @var mixed
     */
    public $StatusApplicationControl;
    /**
     * The InvCounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\InvCounts
     */
    public $InvCounts;
    /**
     * The OffSell
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OffSell
     */
    public $OffSell;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier element allows the trading partners to uniquely identify each InvCountNotifRQ, (i.e. the entire message) for transaction traceability.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * Constructor method for BaseInvCountType
     * @uses BaseInvCountType::setStatusApplicationControl()
     * @uses BaseInvCountType::setInvCounts()
     * @uses BaseInvCountType::setOffSell()
     * @uses BaseInvCountType::setUniqueID()
     * @param mixed $statusApplicationControl
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InvCounts $invCounts
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OffSell $offSell
     * @param mixed $uniqueID
     */
    public function __construct($statusApplicationControl = null, \Devlabs91\GenericOtaHotelApiService\StructType\InvCounts $invCounts = null, \Devlabs91\GenericOtaHotelApiService\StructType\OffSell $offSell = null, $uniqueID = null)
    {
        $this
            ->setStatusApplicationControl($statusApplicationControl)
            ->setInvCounts($invCounts)
            ->setOffSell($offSell)
            ->setUniqueID($uniqueID);
    }
    /**
     * Get StatusApplicationControl value
     * @return mixed|null
     */
    public function getStatusApplicationControl()
    {
        return $this->StatusApplicationControl;
    }
    /**
     * Set StatusApplicationControl value
     * @param mixed $statusApplicationControl
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseInvCountType
     */
    public function setStatusApplicationControl($statusApplicationControl = null)
    {
        $this->StatusApplicationControl = $statusApplicationControl;
        return $this;
    }
    /**
     * Get InvCounts value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCounts|null
     */
    public function getInvCounts()
    {
        return $this->InvCounts;
    }
    /**
     * Set InvCounts value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InvCounts $invCounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseInvCountType
     */
    public function setInvCounts(\Devlabs91\GenericOtaHotelApiService\StructType\InvCounts $invCounts = null)
    {
        $this->InvCounts = $invCounts;
        return $this;
    }
    /**
     * Get OffSell value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffSell|null
     */
    public function getOffSell()
    {
        return $this->OffSell;
    }
    /**
     * Set OffSell value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OffSell $offSell
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseInvCountType
     */
    public function setOffSell(\Devlabs91\GenericOtaHotelApiService\StructType\OffSell $offSell = null)
    {
        $this->OffSell = $offSell;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseInvCountType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseInvCountType
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

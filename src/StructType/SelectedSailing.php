<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectedSailing StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information related to the selected sailing.
 * @subpackage Structs
 */
class SelectedSailing extends SailingBaseType
{
    /**
     * The VoyageID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the cruise line unique identifier for a particular sailing.
     * - use: optional
     * @var string
     */
    public $VoyageID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the status of the voyage. Refer to OpenTravel Code table Status (STS).
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * The PortsOfCallQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Number of ports of call that the specific sailing has.
     * - use: optional
     * @var string
     */
    public $PortsOfCallQuantity;
    /**
     * Constructor method for SelectedSailing
     * @uses SelectedSailing::setVoyageID()
     * @uses SelectedSailing::setStatus()
     * @uses SelectedSailing::setPortsOfCallQuantity()
     * @param string $voyageID
     * @param string $status
     * @param string $portsOfCallQuantity
     */
    public function __construct($voyageID = null, $status = null, $portsOfCallQuantity = null)
    {
        $this
            ->setVoyageID($voyageID)
            ->setStatus($status)
            ->setPortsOfCallQuantity($portsOfCallQuantity);
    }
    /**
     * Get VoyageID value
     * @return string|null
     */
    public function getVoyageID()
    {
        return $this->VoyageID;
    }
    /**
     * Set VoyageID value
     * @param string $voyageID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSailing
     */
    public function setVoyageID($voyageID = null)
    {
        // validation for constraint: string
        if (!is_null($voyageID) && !is_string($voyageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voyageID)), __LINE__);
        }
        $this->VoyageID = $voyageID;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSailing
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get PortsOfCallQuantity value
     * @return string|null
     */
    public function getPortsOfCallQuantity()
    {
        return $this->PortsOfCallQuantity;
    }
    /**
     * Set PortsOfCallQuantity value
     * @param string $portsOfCallQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSailing
     */
    public function setPortsOfCallQuantity($portsOfCallQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($portsOfCallQuantity) && !is_string($portsOfCallQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($portsOfCallQuantity)), __LINE__);
        }
        $this->PortsOfCallQuantity = $portsOfCallQuantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSailing
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

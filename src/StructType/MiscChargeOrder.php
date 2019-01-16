<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MiscChargeOrder StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a miscellaneous charge order (MCO). | Provides information about the original document on which the reissue is based
 * @subpackage Structs
 */
class MiscChargeOrder extends AbstractStructBase
{
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - documentation: The ticket number of the miscellaneous charge order (MCO).
     * - use: optional
     * @var string
     */
    public $TicketNumber;
    /**
     * The PaperMCO_ExistInd
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if a paper or electronic MCO exists.
     * - use: optional
     * @var bool
     */
    public $PaperMCO_ExistInd;
    /**
     * Constructor method for MiscChargeOrder
     * @uses MiscChargeOrder::setTicketNumber()
     * @uses MiscChargeOrder::setPaperMCO_ExistInd()
     * @param string $ticketNumber
     * @param bool $paperMCO_ExistInd
     */
    public function __construct($ticketNumber = null, $paperMCO_ExistInd = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setPaperMCO_ExistInd($paperMCO_ExistInd);
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Get PaperMCO_ExistInd value
     * @return bool|null
     */
    public function getPaperMCO_ExistInd()
    {
        return $this->PaperMCO_ExistInd;
    }
    /**
     * Set PaperMCO_ExistInd value
     * @param bool $paperMCO_ExistInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder
     */
    public function setPaperMCO_ExistInd($paperMCO_ExistInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($paperMCO_ExistInd) && !is_bool($paperMCO_ExistInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($paperMCO_ExistInd)), __LINE__);
        }
        $this->PaperMCO_ExistInd = $paperMCO_ExistInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder
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

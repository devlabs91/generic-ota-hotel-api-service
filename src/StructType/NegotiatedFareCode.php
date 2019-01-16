<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NegotiatedFareCode StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains negotiated fare code information. | Contains code information for a negotiated fare.
 * - type: xs:string
 * - use: optional
 * @subpackage Structs
 */
class NegotiatedFareCode extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The TicketDesignatorCode
     * Meta informations extracted from the WSDL
     * - documentation: The ticket designator code for this negotiated fare code.
     * - use: optional
     * @var string
     */
    public $TicketDesignatorCode;
    /**
     * The OverrideRuleInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the rules for the negotiated fare should not be applied.
     * - use: optional
     * @var bool
     */
    public $OverrideRuleInd;
    /**
     * Constructor method for NegotiatedFareCode
     * @uses NegotiatedFareCode::set_()
     * @uses NegotiatedFareCode::setTicketDesignatorCode()
     * @uses NegotiatedFareCode::setOverrideRuleInd()
     * @param string $_
     * @param string $ticketDesignatorCode
     * @param bool $overrideRuleInd
     */
    public function __construct($_ = null, $ticketDesignatorCode = null, $overrideRuleInd = null)
    {
        $this
            ->set_($_)
            ->setTicketDesignatorCode($ticketDesignatorCode)
            ->setOverrideRuleInd($overrideRuleInd);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get TicketDesignatorCode value
     * @return string|null
     */
    public function getTicketDesignatorCode()
    {
        return $this->TicketDesignatorCode;
    }
    /**
     * Set TicketDesignatorCode value
     * @param string $ticketDesignatorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode
     */
    public function setTicketDesignatorCode($ticketDesignatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDesignatorCode) && !is_string($ticketDesignatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDesignatorCode)), __LINE__);
        }
        $this->TicketDesignatorCode = $ticketDesignatorCode;
        return $this;
    }
    /**
     * Get OverrideRuleInd value
     * @return bool|null
     */
    public function getOverrideRuleInd()
    {
        return $this->OverrideRuleInd;
    }
    /**
     * Set OverrideRuleInd value
     * @param bool $overrideRuleInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode
     */
    public function setOverrideRuleInd($overrideRuleInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($overrideRuleInd) && !is_bool($overrideRuleInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overrideRuleInd)), __LINE__);
        }
        $this->OverrideRuleInd = $overrideRuleInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode
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

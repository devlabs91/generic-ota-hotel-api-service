<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareReference StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to provide the fare basis code, the fare class code, and/or ticket designator. | Used for Character Strings, length 0 to 8.
 * - maxLength: 8
 * - minLength: 0
 * @subpackage Structs
 */
class FareReference extends AbstractStructBase
{
    /**
     * The ResBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the class of service for the specified fare basis code.
     * - use: optional
     * @var string
     */
    public $ResBookDesigCode;
    /**
     * The TicketDesignatorCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the discount code applicable to the fare that is associated with this fare basis code.
     * - use: optional
     * @var string
     */
    public $TicketDesignatorCode;
    /**
     * The AccountCode
     * Meta informations extracted from the WSDL
     * - documentation: A code to uniquely identify a fare account.
     * - use: optional
     * @var string
     */
    public $AccountCode;
    /**
     * Constructor method for FareReference
     * @uses FareReference::setResBookDesigCode()
     * @uses FareReference::setTicketDesignatorCode()
     * @uses FareReference::setAccountCode()
     * @param string $resBookDesigCode
     * @param string $ticketDesignatorCode
     * @param string $accountCode
     */
    public function __construct($resBookDesigCode = null, $ticketDesignatorCode = null, $accountCode = null)
    {
        $this
            ->setResBookDesigCode($resBookDesigCode)
            ->setTicketDesignatorCode($ticketDesignatorCode)
            ->setAccountCode($accountCode);
    }
    /**
     * Get ResBookDesigCode value
     * @return string|null
     */
    public function getResBookDesigCode()
    {
        return $this->ResBookDesigCode;
    }
    /**
     * Set ResBookDesigCode value
     * @param string $resBookDesigCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareReference
     */
    public function setResBookDesigCode($resBookDesigCode = null)
    {
        // validation for constraint: string
        if (!is_null($resBookDesigCode) && !is_string($resBookDesigCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resBookDesigCode)), __LINE__);
        }
        $this->ResBookDesigCode = $resBookDesigCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareReference
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
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareReference
     */
    public function setAccountCode($accountCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareReference
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckAuthorization StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies check information about the customer seeking authorization. | The amount of money for which the the requester is seeking authorization.
 * @subpackage Structs
 */
class CheckAuthorization extends AbstractStructBase
{
    /**
     * The BankAcct
     * Meta informations extracted from the WSDL
     * - documentation: Specifies bank account information about the customer seeking authorization.
     * @var mixed
     */
    public $BankAcct;
    /**
     * Constructor method for CheckAuthorization
     * @uses CheckAuthorization::setBankAcct()
     * @param mixed $bankAcct
     */
    public function __construct($bankAcct = null)
    {
        $this
            ->setBankAcct($bankAcct);
    }
    /**
     * Get BankAcct value
     * @return mixed|null
     */
    public function getBankAcct()
    {
        return $this->BankAcct;
    }
    /**
     * Set BankAcct value
     * @param mixed $bankAcct
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckAuthorization
     */
    public function setBankAcct($bankAcct = null)
    {
        $this->BankAcct = $bankAcct;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckAuthorization
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocationServicePricedType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The OffLocationServicePricedType complex type describes the data that is used to describe a priced off-location service, that is, an off-location service and the corresponding charge.
 * @subpackage Structs
 */
class OffLocationServicePricedType extends AbstractStructBase
{
    /**
     * The OffLocService
     * Meta informations extracted from the WSDL
     * - documentation: Information on a specific off-airport service, for example, vehicle delivery, customer pickup.
     * @var mixed
     */
    public $OffLocService;
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - documentation: Charge information associated with this specific off-airport service.
     * - minOccurs: 0
     * @var mixed
     */
    public $Charge;
    /**
     * Constructor method for OffLocationServicePricedType
     * @uses OffLocationServicePricedType::setOffLocService()
     * @uses OffLocationServicePricedType::setCharge()
     * @param mixed $offLocService
     * @param mixed $charge
     */
    public function __construct($offLocService = null, $charge = null)
    {
        $this
            ->setOffLocService($offLocService)
            ->setCharge($charge);
    }
    /**
     * Get OffLocService value
     * @return mixed|null
     */
    public function getOffLocService()
    {
        return $this->OffLocService;
    }
    /**
     * Set OffLocService value
     * @param mixed $offLocService
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServicePricedType
     */
    public function setOffLocService($offLocService = null)
    {
        $this->OffLocService = $offLocService;
        return $this;
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServicePricedType
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OffLocationServicePricedType
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

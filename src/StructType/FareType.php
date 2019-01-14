<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Holds a base fare, tax, total and currency information on a price
 * @subpackage Structs
 */
class FareType extends AbstractStructBase
{
    /**
     * The BaseFare
     * Meta informations extracted from the WSDL
     * - documentation: Price of the inventory excluding taxes and fees.
     * @var mixed
     */
    public $BaseFare;
    /**
     * The EquivFare
     * Meta informations extracted from the WSDL
     * - documentation: Price of the inventory excluding taxes and fees in the payable currency.
     * - minOccurs: 0
     * @var mixed
     */
    public $EquivFare;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Taxes
     */
    public $Taxes;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Fees
     */
    public $Fees;
    /**
     * The TotalFare
     * Meta informations extracted from the WSDL
     * - documentation: The total price that the passenger would pay (includes fare, taxes, fees)
     * @var mixed
     */
    public $TotalFare;
    /**
     * Constructor method for FareType
     * @uses FareType::setBaseFare()
     * @uses FareType::setEquivFare()
     * @uses FareType::setTaxes()
     * @uses FareType::setFees()
     * @uses FareType::setTotalFare()
     * @param mixed $baseFare
     * @param mixed $equivFare
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees
     * @param mixed $totalFare
     */
    public function __construct($baseFare = null, $equivFare = null, \Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes = null, \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null, $totalFare = null)
    {
        $this
            ->setBaseFare($baseFare)
            ->setEquivFare($equivFare)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setTotalFare($totalFare);
    }
    /**
     * Get BaseFare value
     * @return mixed|null
     */
    public function getBaseFare()
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param mixed $baseFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setBaseFare($baseFare = null)
    {
        $this->BaseFare = $baseFare;
        return $this;
    }
    /**
     * Get EquivFare value
     * @return mixed|null
     */
    public function getEquivFare()
    {
        return $this->EquivFare;
    }
    /**
     * Set EquivFare value
     * @param mixed $equivFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setEquivFare($equivFare = null)
    {
        $this->EquivFare = $equivFare;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setTaxes(\Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Fees value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setFees(\Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get TotalFare value
     * @return mixed|null
     */
    public function getTotalFare()
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param mixed $totalFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
     */
    public function setTotalFare($totalFare = null)
    {
        $this->TotalFare = $totalFare;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareType
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

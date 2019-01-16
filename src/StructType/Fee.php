<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fee StructType
 * Meta informations extracted from the WSDL
 * - documentation: The ticket fee code. | This element is used to describe one specific fee that may apply.
 * @subpackage Structs
 */
class Fee extends VehicleChargeType
{
    /**
     * The FeeCode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FeeCode;
    /**
     * The BaseFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BaseFee
     */
    public $BaseFee;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Taxes
     */
    public $Taxes;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Total
     */
    public $Total;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - documentation: Information on this one specific feeincluding a description, etc.
     * - minOccurs: 0
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for Fee
     * @uses Fee::setFeeCode()
     * @uses Fee::setBaseFee()
     * @uses Fee::setTaxes()
     * @uses Fee::setTotal()
     * @uses Fee::setDescription()
     * @uses Fee::setInfo()
     * @param string $feeCode
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BaseFee $baseFee
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Total $total
     * @param string $description
     * @param mixed $info
     */
    public function __construct($feeCode = null, \Devlabs91\GenericOtaHotelApiService\StructType\BaseFee $baseFee = null, \Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes = null, \Devlabs91\GenericOtaHotelApiService\StructType\Total $total = null, $description = null, $info = null)
    {
        $this
            ->setFeeCode($feeCode)
            ->setBaseFee($baseFee)
            ->setTaxes($taxes)
            ->setTotal($total)
            ->setDescription($description)
            ->setInfo($info);
    }
    /**
     * Get FeeCode value
     * @return string
     */
    public function getFeeCode()
    {
        return $this->FeeCode;
    }
    /**
     * Set FeeCode value
     * @param string $feeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fee
     */
    public function setFeeCode($feeCode = null)
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeCode)), __LINE__);
        }
        $this->FeeCode = $feeCode;
        return $this;
    }
    /**
     * Get BaseFee value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseFee|null
     */
    public function getBaseFee()
    {
        return $this->BaseFee;
    }
    /**
     * Set BaseFee value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BaseFee $baseFee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fee
     */
    public function setBaseFee(\Devlabs91\GenericOtaHotelApiService\StructType\BaseFee $baseFee = null)
    {
        $this->BaseFee = $baseFee;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fee
     */
    public function setTaxes(\Devlabs91\GenericOtaHotelApiService\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Total value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Total|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Total $total
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fee
     */
    public function setTotal(\Devlabs91\GenericOtaHotelApiService\StructType\Total $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fee
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fee
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fee
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

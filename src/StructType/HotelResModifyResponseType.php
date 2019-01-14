<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelResModifyResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the response message for a full overlay modification to a reservation. The response could be as simple as indicating the modification was made or as complex as echoing back all reservation information.
 * @subpackage Structs
 */
class HotelResModifyResponseType extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - documentation: Point of sale object.
     * - minOccurs: 0
     * @var mixed
     */
    public $POS;
    /**
     * The Success
     * @var mixed
     */
    public $Success;
    /**
     * The Warnings
     * Meta informations extracted from the WSDL
     * - documentation: This is a place to list any non-fatal errors.
     * - minOccurs: 0
     * @var mixed
     */
    public $Warnings;
    /**
     * The HotelResModifies
     * Meta informations extracted from the WSDL
     * - documentation: A collection of reservations which have been modified.
     * - minOccurs: 0
     * @var mixed
     */
    public $HotelResModifies;
    /**
     * The Errors
     * @var mixed
     */
    public $Errors;
    /**
     * The ResResponseType
     * @var string
     */
    public $ResResponseType;
    /**
     * Constructor method for HotelResModifyResponseType
     * @uses HotelResModifyResponseType::setPOS()
     * @uses HotelResModifyResponseType::setSuccess()
     * @uses HotelResModifyResponseType::setWarnings()
     * @uses HotelResModifyResponseType::setHotelResModifies()
     * @uses HotelResModifyResponseType::setErrors()
     * @uses HotelResModifyResponseType::setResResponseType()
     * @param mixed $pOS
     * @param mixed $success
     * @param mixed $warnings
     * @param mixed $hotelResModifies
     * @param mixed $errors
     * @param string $resResponseType
     */
    public function __construct($pOS = null, $success = null, $warnings = null, $hotelResModifies = null, $errors = null, $resResponseType = null)
    {
        $this
            ->setPOS($pOS)
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setHotelResModifies($hotelResModifies)
            ->setErrors($errors)
            ->setResResponseType($resResponseType);
    }
    /**
     * Get POS value
     * @return mixed|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param mixed $pOS
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyResponseType
     */
    public function setPOS($pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get Success value
     * @return mixed|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param mixed $success
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyResponseType
     */
    public function setSuccess($success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Warnings value
     * @return mixed|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }
    /**
     * Set Warnings value
     * @param mixed $warnings
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyResponseType
     */
    public function setWarnings($warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get HotelResModifies value
     * @return mixed|null
     */
    public function getHotelResModifies()
    {
        return $this->HotelResModifies;
    }
    /**
     * Set HotelResModifies value
     * @param mixed $hotelResModifies
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyResponseType
     */
    public function setHotelResModifies($hotelResModifies = null)
    {
        $this->HotelResModifies = $hotelResModifies;
        return $this;
    }
    /**
     * Get Errors value
     * @return mixed|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param mixed $errors
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyResponseType
     */
    public function setErrors($errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get ResResponseType value
     * @return string|null
     */
    public function getResResponseType()
    {
        return $this->ResResponseType;
    }
    /**
     * Set ResResponseType value
     * @param string $resResponseType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyResponseType
     */
    public function setResResponseType($resResponseType = null)
    {
        // validation for constraint: string
        if (!is_null($resResponseType) && !is_string($resResponseType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resResponseType)), __LINE__);
        }
        $this->ResResponseType = $resResponseType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelResModifyResponseType
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

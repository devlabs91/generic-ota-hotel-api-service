<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelArrangerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Companies or individuals responsible for making travel plans or transactions either for the customer or company. | Indicates that the receiving system should assume the default value if the user specifies no overriding value or
 * action. | Allows for control of the sharing of travel arranger data between parties.
 * @subpackage Structs
 */
class TravelArrangerType extends CompanyNameType
{
    /**
     * The TravelArrangerType
     * Meta informations extracted from the WSDL
     * - documentation: Type of service making travel plans or transactions (e.g., travel agency, etc.).
     * - use: optional
     * @var string
     */
    public $TravelArrangerType;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: A unique reference for a travel arranger within this message.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: A remark associated with the travel arranger.
     * - use: optional
     * @var string
     */
    public $Remark;
    /**
     * Constructor method for TravelArrangerType
     * @uses TravelArrangerType::setTravelArrangerType()
     * @uses TravelArrangerType::setRPH()
     * @uses TravelArrangerType::setRemark()
     * @param string $travelArrangerType
     * @param string $rPH
     * @param string $remark
     */
    public function __construct($travelArrangerType = null, $rPH = null, $remark = null)
    {
        $this
            ->setTravelArrangerType($travelArrangerType)
            ->setRPH($rPH)
            ->setRemark($remark);
    }
    /**
     * Get TravelArrangerType value
     * @return string|null
     */
    public function getTravelArrangerType()
    {
        return $this->TravelArrangerType;
    }
    /**
     * Set TravelArrangerType value
     * @param string $travelArrangerType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelArrangerType
     */
    public function setTravelArrangerType($travelArrangerType = null)
    {
        // validation for constraint: string
        if (!is_null($travelArrangerType) && !is_string($travelArrangerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelArrangerType)), __LINE__);
        }
        $this->TravelArrangerType = $travelArrangerType;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelArrangerType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get Remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param string $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelArrangerType
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remark)), __LINE__);
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelArrangerType
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

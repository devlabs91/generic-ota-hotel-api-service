<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelArrangerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Companies or individuals responsible for making travel plans or transactions either for the customer or company.
 * @subpackage Structs
 */
class TravelArrangerType extends CompanyNameType
{
    /**
     * The TravelArrangerType
     * Meta informations extracted from the WSDL
     * - documentation: Type of service making travel plans or transactions (e.g., travel agency, etc.).
     * @var string
     */
    public $TravelArrangerType;
    /**
     * The RPH
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for TravelArrangerType
     * @uses TravelArrangerType::setTravelArrangerType()
     * @uses TravelArrangerType::setRPH()
     * @param string $travelArrangerType
     * @param string $rPH
     */
    public function __construct($travelArrangerType = null, $rPH = null)
    {
        $this
            ->setTravelArrangerType($travelArrangerType)
            ->setRPH($rPH);
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Renovation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of the hotel renovation. | Indicates the anticipated renovation time span.
 * @subpackage Structs
 */
class Renovation extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * The ImmediatePlans
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that renovation is planned but dates are not finalized.
     * - use: optional
     * @var bool
     */
    public $ImmediatePlans;
    /**
     * The PercentOfRenovationCompleted
     * Meta informations extracted from the WSDL
     * - documentation: Allows for a percent completion to be sent with each area being renovated.
     * - use: optional
     * @var string
     */
    public $PercentOfRenovationCompleted;
    /**
     * The AreaText
     * Meta informations extracted from the WSDL
     * - documentation: Describes the specific area or areas of a hotel being renovated.
     * - use: optional
     * @var string
     */
    public $AreaText;
    /**
     * Constructor method for Renovation
     * @uses Renovation::setDescription()
     * @uses Renovation::setImmediatePlans()
     * @uses Renovation::setPercentOfRenovationCompleted()
     * @uses Renovation::setAreaText()
     * @param mixed $description
     * @param bool $immediatePlans
     * @param string $percentOfRenovationCompleted
     * @param string $areaText
     */
    public function __construct($description = null, $immediatePlans = null, $percentOfRenovationCompleted = null, $areaText = null)
    {
        $this
            ->setDescription($description)
            ->setImmediatePlans($immediatePlans)
            ->setPercentOfRenovationCompleted($percentOfRenovationCompleted)
            ->setAreaText($areaText);
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Renovation
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ImmediatePlans value
     * @return bool|null
     */
    public function getImmediatePlans()
    {
        return $this->ImmediatePlans;
    }
    /**
     * Set ImmediatePlans value
     * @param bool $immediatePlans
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Renovation
     */
    public function setImmediatePlans($immediatePlans = null)
    {
        // validation for constraint: boolean
        if (!is_null($immediatePlans) && !is_bool($immediatePlans)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($immediatePlans)), __LINE__);
        }
        $this->ImmediatePlans = $immediatePlans;
        return $this;
    }
    /**
     * Get PercentOfRenovationCompleted value
     * @return string|null
     */
    public function getPercentOfRenovationCompleted()
    {
        return $this->PercentOfRenovationCompleted;
    }
    /**
     * Set PercentOfRenovationCompleted value
     * @param string $percentOfRenovationCompleted
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Renovation
     */
    public function setPercentOfRenovationCompleted($percentOfRenovationCompleted = null)
    {
        // validation for constraint: string
        if (!is_null($percentOfRenovationCompleted) && !is_string($percentOfRenovationCompleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percentOfRenovationCompleted)), __LINE__);
        }
        $this->PercentOfRenovationCompleted = $percentOfRenovationCompleted;
        return $this;
    }
    /**
     * Get AreaText value
     * @return string|null
     */
    public function getAreaText()
    {
        return $this->AreaText;
    }
    /**
     * Set AreaText value
     * @param string $areaText
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Renovation
     */
    public function setAreaText($areaText = null)
    {
        // validation for constraint: string
        if (!is_null($areaText) && !is_string($areaText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($areaText)), __LINE__);
        }
        $this->AreaText = $areaText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Renovation
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

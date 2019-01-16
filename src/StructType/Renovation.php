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
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Multimedia information about the renovation.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The DescriptiveText
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive text that describes the renovation.
     * - minOccurs: 0
     * @var string
     */
    public $DescriptiveText;
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
     * The RenovationCompletionDate
     * Meta informations extracted from the WSDL
     * - documentation: The year or month and year the renovation was completed or is due to be completed.
     * - use: optional
     * @var string
     */
    public $RenovationCompletionDate;
    /**
     * Constructor method for Renovation
     * @uses Renovation::setMultimediaDescriptions()
     * @uses Renovation::setDescriptiveText()
     * @uses Renovation::setImmediatePlans()
     * @uses Renovation::setPercentOfRenovationCompleted()
     * @uses Renovation::setAreaText()
     * @uses Renovation::setRenovationCompletionDate()
     * @param mixed $multimediaDescriptions
     * @param string $descriptiveText
     * @param bool $immediatePlans
     * @param string $percentOfRenovationCompleted
     * @param string $areaText
     * @param string $renovationCompletionDate
     */
    public function __construct($multimediaDescriptions = null, $descriptiveText = null, $immediatePlans = null, $percentOfRenovationCompleted = null, $areaText = null, $renovationCompletionDate = null)
    {
        $this
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setDescriptiveText($descriptiveText)
            ->setImmediatePlans($immediatePlans)
            ->setPercentOfRenovationCompleted($percentOfRenovationCompleted)
            ->setAreaText($areaText)
            ->setRenovationCompletionDate($renovationCompletionDate);
    }
    /**
     * Get MultimediaDescriptions value
     * @return mixed|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param mixed $multimediaDescriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Renovation
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
        return $this;
    }
    /**
     * Get DescriptiveText value
     * @return string|null
     */
    public function getDescriptiveText()
    {
        return $this->DescriptiveText;
    }
    /**
     * Set DescriptiveText value
     * @param string $descriptiveText
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Renovation
     */
    public function setDescriptiveText($descriptiveText = null)
    {
        // validation for constraint: string
        if (!is_null($descriptiveText) && !is_string($descriptiveText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptiveText)), __LINE__);
        }
        $this->DescriptiveText = $descriptiveText;
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
     * Get RenovationCompletionDate value
     * @return string|null
     */
    public function getRenovationCompletionDate()
    {
        return $this->RenovationCompletionDate;
    }
    /**
     * Set RenovationCompletionDate value
     * @param string $renovationCompletionDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Renovation
     */
    public function setRenovationCompletionDate($renovationCompletionDate = null)
    {
        // validation for constraint: string
        if (!is_null($renovationCompletionDate) && !is_string($renovationCompletionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($renovationCompletionDate)), __LINE__);
        }
        $this->RenovationCompletionDate = $renovationCompletionDate;
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

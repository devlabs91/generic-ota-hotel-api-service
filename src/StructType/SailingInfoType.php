<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SailingInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information pertaining to the selected sailing.
 * @subpackage Structs
 */
class SailingInfoType extends AbstractStructBase
{
    /**
     * The SelectedSailing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSailing
     */
    public $SelectedSailing;
    /**
     * The InclusivePackageOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\InclusivePackageOption
     */
    public $InclusivePackageOption;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Currency
     */
    public $Currency;
    /**
     * Constructor method for SailingInfoType
     * @uses SailingInfoType::setSelectedSailing()
     * @uses SailingInfoType::setInclusivePackageOption()
     * @uses SailingInfoType::setCurrency()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSailing $selectedSailing
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InclusivePackageOption $inclusivePackageOption
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Currency $currency
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\SelectedSailing $selectedSailing = null, \Devlabs91\GenericOtaHotelApiService\StructType\InclusivePackageOption $inclusivePackageOption = null, \Devlabs91\GenericOtaHotelApiService\StructType\Currency $currency = null)
    {
        $this
            ->setSelectedSailing($selectedSailing)
            ->setInclusivePackageOption($inclusivePackageOption)
            ->setCurrency($currency);
    }
    /**
     * Get SelectedSailing value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSailing|null
     */
    public function getSelectedSailing()
    {
        return $this->SelectedSailing;
    }
    /**
     * Set SelectedSailing value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedSailing $selectedSailing
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingInfoType
     */
    public function setSelectedSailing(\Devlabs91\GenericOtaHotelApiService\StructType\SelectedSailing $selectedSailing = null)
    {
        $this->SelectedSailing = $selectedSailing;
        return $this;
    }
    /**
     * Get InclusivePackageOption value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InclusivePackageOption|null
     */
    public function getInclusivePackageOption()
    {
        return $this->InclusivePackageOption;
    }
    /**
     * Set InclusivePackageOption value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InclusivePackageOption $inclusivePackageOption
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingInfoType
     */
    public function setInclusivePackageOption(\Devlabs91\GenericOtaHotelApiService\StructType\InclusivePackageOption $inclusivePackageOption = null)
    {
        $this->InclusivePackageOption = $inclusivePackageOption;
        return $this;
    }
    /**
     * Get Currency value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Currency|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Currency $currency
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingInfoType
     */
    public function setCurrency(\Devlabs91\GenericOtaHotelApiService\StructType\Currency $currency = null)
    {
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingInfoType
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

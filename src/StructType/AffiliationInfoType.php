<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AffiliationInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The AffiliationInfo object is used to identify the brand or franchise affiliations of the hotel.
 * @subpackage Structs
 */
class AffiliationInfoType extends AbstractStructBase
{
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when the affiliation information for this hotel was last updated.
     * - use: required
     * @var string
     */
    public $LastUpdated;
    /**
     * The DistribSystems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DistribSystems
     */
    public $DistribSystems;
    /**
     * The Brands
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Brands
     */
    public $Brands;
    /**
     * The LoyalPrograms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LoyalPrograms
     */
    public $LoyalPrograms;
    /**
     * The Awards
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Awards
     */
    public $Awards;
    /**
     * Constructor method for AffiliationInfoType
     * @uses AffiliationInfoType::setLastUpdated()
     * @uses AffiliationInfoType::setDistribSystems()
     * @uses AffiliationInfoType::setBrands()
     * @uses AffiliationInfoType::setLoyalPrograms()
     * @uses AffiliationInfoType::setAwards()
     * @param string $lastUpdated
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DistribSystems $distribSystems
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Brands $brands
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyalPrograms $loyalPrograms
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Awards $awards
     */
    public function __construct($lastUpdated = null, \Devlabs91\GenericOtaHotelApiService\StructType\DistribSystems $distribSystems = null, \Devlabs91\GenericOtaHotelApiService\StructType\Brands $brands = null, \Devlabs91\GenericOtaHotelApiService\StructType\LoyalPrograms $loyalPrograms = null, \Devlabs91\GenericOtaHotelApiService\StructType\Awards $awards = null)
    {
        $this
            ->setLastUpdated($lastUpdated)
            ->setDistribSystems($distribSystems)
            ->setBrands($brands)
            ->setLoyalPrograms($loyalPrograms)
            ->setAwards($awards);
    }
    /**
     * Get LastUpdated value
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationInfoType
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Get DistribSystems value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DistribSystems|null
     */
    public function getDistribSystems()
    {
        return $this->DistribSystems;
    }
    /**
     * Set DistribSystems value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DistribSystems $distribSystems
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationInfoType
     */
    public function setDistribSystems(\Devlabs91\GenericOtaHotelApiService\StructType\DistribSystems $distribSystems = null)
    {
        $this->DistribSystems = $distribSystems;
        return $this;
    }
    /**
     * Get Brands value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brands|null
     */
    public function getBrands()
    {
        return $this->Brands;
    }
    /**
     * Set Brands value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Brands $brands
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationInfoType
     */
    public function setBrands(\Devlabs91\GenericOtaHotelApiService\StructType\Brands $brands = null)
    {
        $this->Brands = $brands;
        return $this;
    }
    /**
     * Get LoyalPrograms value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyalPrograms|null
     */
    public function getLoyalPrograms()
    {
        return $this->LoyalPrograms;
    }
    /**
     * Set LoyalPrograms value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyalPrograms $loyalPrograms
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationInfoType
     */
    public function setLoyalPrograms(\Devlabs91\GenericOtaHotelApiService\StructType\LoyalPrograms $loyalPrograms = null)
    {
        $this->LoyalPrograms = $loyalPrograms;
        return $this;
    }
    /**
     * Get Awards value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Awards|null
     */
    public function getAwards()
    {
        return $this->Awards;
    }
    /**
     * Set Awards value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Awards $awards
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationInfoType
     */
    public function setAwards(\Devlabs91\GenericOtaHotelApiService\StructType\Awards $awards = null)
    {
        $this->Awards = $awards;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationInfoType
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

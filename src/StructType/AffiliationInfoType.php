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
     * The PartnerInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfos
     */
    public $PartnerInfos;
    /**
     * The Descriptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions
     */
    public $Descriptions;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when the affiliation information for this hotel was last updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for AffiliationInfoType
     * @uses AffiliationInfoType::setDistribSystems()
     * @uses AffiliationInfoType::setBrands()
     * @uses AffiliationInfoType::setLoyalPrograms()
     * @uses AffiliationInfoType::setAwards()
     * @uses AffiliationInfoType::setPartnerInfos()
     * @uses AffiliationInfoType::setDescriptions()
     * @uses AffiliationInfoType::setLastUpdated()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DistribSystems $distribSystems
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Brands $brands
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyalPrograms $loyalPrograms
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Awards $awards
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfos $partnerInfos
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions $descriptions
     * @param string $lastUpdated
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\DistribSystems $distribSystems = null, \Devlabs91\GenericOtaHotelApiService\StructType\Brands $brands = null, \Devlabs91\GenericOtaHotelApiService\StructType\LoyalPrograms $loyalPrograms = null, \Devlabs91\GenericOtaHotelApiService\StructType\Awards $awards = null, \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfos $partnerInfos = null, \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions $descriptions = null, $lastUpdated = null)
    {
        $this
            ->setDistribSystems($distribSystems)
            ->setBrands($brands)
            ->setLoyalPrograms($loyalPrograms)
            ->setAwards($awards)
            ->setPartnerInfos($partnerInfos)
            ->setDescriptions($descriptions)
            ->setLastUpdated($lastUpdated);
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
     * Get PartnerInfos value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfos|null
     */
    public function getPartnerInfos()
    {
        return $this->PartnerInfos;
    }
    /**
     * Set PartnerInfos value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfos $partnerInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationInfoType
     */
    public function setPartnerInfos(\Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfos $partnerInfos = null)
    {
        $this->PartnerInfos = $partnerInfos;
        return $this;
    }
    /**
     * Get Descriptions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions|null
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }
    /**
     * Set Descriptions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Descriptions $descriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AffiliationInfoType
     */
    public function setDescriptions(\Devlabs91\GenericOtaHotelApiService\StructType\Descriptions $descriptions = null)
    {
        $this->Descriptions = $descriptions;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgreementsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Section of a business profile that contains information about trading partner agreements.
 * @subpackage Structs
 */
class AgreementsType extends AbstractStructBase
{
    /**
     * The Certification
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Certification;
    /**
     * The AllianceConsortium
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AllianceConsortium;
    /**
     * The CommissionInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CommissionInfo;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for AgreementsType
     * @uses AgreementsType::setCertification()
     * @uses AgreementsType::setAllianceConsortium()
     * @uses AgreementsType::setCommissionInfo()
     * @uses AgreementsType::setTPA_Extensions()
     * @param mixed[] $certification
     * @param mixed[] $allianceConsortium
     * @param mixed[] $commissionInfo
     * @param mixed $tPA_Extensions
     */
    public function __construct(array $certification = array(), array $allianceConsortium = array(), array $commissionInfo = array(), $tPA_Extensions = null)
    {
        $this
            ->setCertification($certification)
            ->setAllianceConsortium($allianceConsortium)
            ->setCommissionInfo($commissionInfo)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get Certification value
     * @return mixed[]|null
     */
    public function getCertification()
    {
        return $this->Certification;
    }
    /**
     * Set Certification value
     * @throws \InvalidArgumentException
     * @param mixed[] $certification
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgreementsType
     */
    public function setCertification(array $certification = array())
    {
        foreach ($certification as $agreementsTypeCertificationItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Certification property can only contain items of anyType, "%s" given', is_object($agreementsTypeCertificationItem) ? get_class($agreementsTypeCertificationItem) : gettype($agreementsTypeCertificationItem)), __LINE__);
            }
        }
        $this->Certification = $certification;
        return $this;
    }
    /**
     * Add item to Certification value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgreementsType
     */
    public function addToCertification($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Certification property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Certification[] = $item;
        return $this;
    }
    /**
     * Get AllianceConsortium value
     * @return mixed[]|null
     */
    public function getAllianceConsortium()
    {
        return $this->AllianceConsortium;
    }
    /**
     * Set AllianceConsortium value
     * @throws \InvalidArgumentException
     * @param mixed[] $allianceConsortium
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgreementsType
     */
    public function setAllianceConsortium(array $allianceConsortium = array())
    {
        foreach ($allianceConsortium as $agreementsTypeAllianceConsortiumItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AllianceConsortium property can only contain items of anyType, "%s" given', is_object($agreementsTypeAllianceConsortiumItem) ? get_class($agreementsTypeAllianceConsortiumItem) : gettype($agreementsTypeAllianceConsortiumItem)), __LINE__);
            }
        }
        $this->AllianceConsortium = $allianceConsortium;
        return $this;
    }
    /**
     * Add item to AllianceConsortium value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgreementsType
     */
    public function addToAllianceConsortium($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AllianceConsortium property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AllianceConsortium[] = $item;
        return $this;
    }
    /**
     * Get CommissionInfo value
     * @return mixed[]|null
     */
    public function getCommissionInfo()
    {
        return $this->CommissionInfo;
    }
    /**
     * Set CommissionInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $commissionInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgreementsType
     */
    public function setCommissionInfo(array $commissionInfo = array())
    {
        foreach ($commissionInfo as $agreementsTypeCommissionInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CommissionInfo property can only contain items of anyType, "%s" given', is_object($agreementsTypeCommissionInfoItem) ? get_class($agreementsTypeCommissionInfoItem) : gettype($agreementsTypeCommissionInfoItem)), __LINE__);
            }
        }
        $this->CommissionInfo = $commissionInfo;
        return $this;
    }
    /**
     * Add item to CommissionInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgreementsType
     */
    public function addToCommissionInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CommissionInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CommissionInfo[] = $item;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgreementsType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AgreementsType
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

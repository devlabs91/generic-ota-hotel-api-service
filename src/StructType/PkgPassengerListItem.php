<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgPassengerListItem StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a passenger.
 * @subpackage Structs
 */
class PkgPassengerListItem extends AbstractStructBase
{
    /**
     * The Name
     * @var mixed
     */
    public $Name;
    /**
     * The SpecialNeed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SpecialNeed[]
     */
    public $SpecialNeed;
    /**
     * The PassportInformation
     * Meta informations extracted from the WSDL
     * - documentation: Details of the passenger's passport.
     * - minOccurs: 0
     * @var mixed
     */
    public $PassportInformation;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The InsuranceRPH
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $InsuranceRPH;
    /**
     * The Nationality
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Nationality;
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Age;
    /**
     * Constructor method for PkgPassengerListItem
     * @uses PkgPassengerListItem::setName()
     * @uses PkgPassengerListItem::setSpecialNeed()
     * @uses PkgPassengerListItem::setPassportInformation()
     * @uses PkgPassengerListItem::setRPH()
     * @uses PkgPassengerListItem::setInsuranceRPH()
     * @uses PkgPassengerListItem::setNationality()
     * @uses PkgPassengerListItem::setAge()
     * @param mixed $name
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialNeed[] $specialNeed
     * @param mixed $passportInformation
     * @param string $rPH
     * @param string $insuranceRPH
     * @param string $nationality
     * @param string $age
     */
    public function __construct($name = null, array $specialNeed = array(), $passportInformation = null, $rPH = null, $insuranceRPH = null, $nationality = null, $age = null)
    {
        $this
            ->setName($name)
            ->setSpecialNeed($specialNeed)
            ->setPassportInformation($passportInformation)
            ->setRPH($rPH)
            ->setInsuranceRPH($insuranceRPH)
            ->setNationality($nationality)
            ->setAge($age);
    }
    /**
     * Get Name value
     * @return mixed|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param mixed $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPassengerListItem
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get SpecialNeed value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialNeed[]|null
     */
    public function getSpecialNeed()
    {
        return $this->SpecialNeed;
    }
    /**
     * Set SpecialNeed value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialNeed[] $specialNeed
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPassengerListItem
     */
    public function setSpecialNeed(array $specialNeed = array())
    {
        foreach ($specialNeed as $pkgPassengerListItemSpecialNeedItem) {
            // validation for constraint: itemType
            if (!$pkgPassengerListItemSpecialNeedItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SpecialNeed) {
                throw new \InvalidArgumentException(sprintf('The SpecialNeed property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SpecialNeed, "%s" given', is_object($pkgPassengerListItemSpecialNeedItem) ? get_class($pkgPassengerListItemSpecialNeedItem) : gettype($pkgPassengerListItemSpecialNeedItem)), __LINE__);
            }
        }
        $this->SpecialNeed = $specialNeed;
        return $this;
    }
    /**
     * Add item to SpecialNeed value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialNeed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPassengerListItem
     */
    public function addToSpecialNeed(\Devlabs91\GenericOtaHotelApiService\StructType\SpecialNeed $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SpecialNeed) {
            throw new \InvalidArgumentException(sprintf('The SpecialNeed property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SpecialNeed, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialNeed[] = $item;
        return $this;
    }
    /**
     * Get PassportInformation value
     * @return mixed|null
     */
    public function getPassportInformation()
    {
        return $this->PassportInformation;
    }
    /**
     * Set PassportInformation value
     * @param mixed $passportInformation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPassengerListItem
     */
    public function setPassportInformation($passportInformation = null)
    {
        $this->PassportInformation = $passportInformation;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPassengerListItem
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
     * Get InsuranceRPH value
     * @return string|null
     */
    public function getInsuranceRPH()
    {
        return $this->InsuranceRPH;
    }
    /**
     * Set InsuranceRPH value
     * @param string $insuranceRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPassengerListItem
     */
    public function setInsuranceRPH($insuranceRPH = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceRPH) && !is_string($insuranceRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceRPH)), __LINE__);
        }
        $this->InsuranceRPH = $insuranceRPH;
        return $this;
    }
    /**
     * Get Nationality value
     * @return string|null
     */
    public function getNationality()
    {
        return $this->Nationality;
    }
    /**
     * Set Nationality value
     * @param string $nationality
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPassengerListItem
     */
    public function setNationality($nationality = null)
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nationality)), __LINE__);
        }
        $this->Nationality = $nationality;
        return $this;
    }
    /**
     * Get Age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param string $age
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPassengerListItem
     */
    public function setAge($age = null)
    {
        // validation for constraint: string
        if (!is_null($age) && !is_string($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgPassengerListItem
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

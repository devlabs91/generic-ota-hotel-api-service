<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WrittenConfInstType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Method by which confirmations should be delivered.
 * @subpackage Structs
 */
class WrittenConfInstType extends AbstractStructBase
{
    /**
     * The SupplementalData
     * Meta informations extracted from the WSDL
     * - documentation: Additional data that will be sent with the confirmation. This could be used to include a map, pictures, or any other information that the reservation source wishes to include with the confirmation
     * @var mixed
     */
    public $SupplementalData;
    /**
     * The Email
     * @var mixed
     */
    public $Email;
    /**
     * The LanguageID
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $LanguageID;
    /**
     * The AddresseeName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AddresseeName;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Address;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Telephone;
    /**
     * Constructor method for WrittenConfInstType
     * @uses WrittenConfInstType::setSupplementalData()
     * @uses WrittenConfInstType::setEmail()
     * @uses WrittenConfInstType::setLanguageID()
     * @uses WrittenConfInstType::setAddresseeName()
     * @uses WrittenConfInstType::setAddress()
     * @uses WrittenConfInstType::setTelephone()
     * @param mixed $supplementalData
     * @param mixed $email
     * @param string $languageID
     * @param string $addresseeName
     * @param string $address
     * @param string $telephone
     */
    public function __construct($supplementalData = null, $email = null, $languageID = null, $addresseeName = null, $address = null, $telephone = null)
    {
        $this
            ->setSupplementalData($supplementalData)
            ->setEmail($email)
            ->setLanguageID($languageID)
            ->setAddresseeName($addresseeName)
            ->setAddress($address)
            ->setTelephone($telephone);
    }
    /**
     * Get SupplementalData value
     * @return mixed|null
     */
    public function getSupplementalData()
    {
        return $this->SupplementalData;
    }
    /**
     * Set SupplementalData value
     * @param mixed $supplementalData
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WrittenConfInstType
     */
    public function setSupplementalData($supplementalData = null)
    {
        $this->SupplementalData = $supplementalData;
        return $this;
    }
    /**
     * Get Email value
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param mixed $email
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WrittenConfInstType
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get LanguageID value
     * @return string|null
     */
    public function getLanguageID()
    {
        return $this->LanguageID;
    }
    /**
     * Set LanguageID value
     * @param string $languageID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WrittenConfInstType
     */
    public function setLanguageID($languageID = null)
    {
        // validation for constraint: string
        if (!is_null($languageID) && !is_string($languageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageID)), __LINE__);
        }
        $this->LanguageID = $languageID;
        return $this;
    }
    /**
     * Get AddresseeName value
     * @return string|null
     */
    public function getAddresseeName()
    {
        return $this->AddresseeName;
    }
    /**
     * Set AddresseeName value
     * @param string $addresseeName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WrittenConfInstType
     */
    public function setAddresseeName($addresseeName = null)
    {
        // validation for constraint: string
        if (!is_null($addresseeName) && !is_string($addresseeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addresseeName)), __LINE__);
        }
        $this->AddresseeName = $addresseeName;
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WrittenConfInstType
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param string $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WrittenConfInstType
     */
    public function setTelephone($telephone = null)
    {
        // validation for constraint: string
        if (!is_null($telephone) && !is_string($telephone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephone)), __LINE__);
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WrittenConfInstType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonNameType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This provides name information for a person. | Allows for control of the sharing of person name data between parties.
 * @subpackage Structs
 */
class PersonNameType extends AbstractStructBase
{
    /**
     * The NamePrefix
     * Meta informations extracted from the WSDL
     * - documentation: Salutation of honorific (e.g. Mr., Mrs., Ms., Miss, Dr.)
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $NamePrefix;
    /**
     * The GivenName
     * Meta informations extracted from the WSDL
     * - documentation: Given name, first name or names.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $GivenName;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - documentation: The middle name of the person name.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $MiddleName;
    /**
     * The SurnamePrefix
     * Meta informations extracted from the WSDL
     * - documentation: e.g "van der", "von", "de".
     * - minOccurs: 0
     * @var mixed
     */
    public $SurnamePrefix;
    /**
     * The Surname
     * Meta informations extracted from the WSDL
     * - documentation: Family name, last name. May also be used for full name if the sending system does not have the ability to separate a full name into its parts, e.g. the surname element may be used to pass the full name.
     * @var mixed
     */
    public $Surname;
    /**
     * The NameSuffix
     * Meta informations extracted from the WSDL
     * - documentation: Hold various name suffixes and letters (e.g. Jr., Sr., III, Ret., Esq.)
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $NameSuffix;
    /**
     * The NameTitle
     * Meta informations extracted from the WSDL
     * - documentation: Degree or honors (e.g., Ph.D., M.D.)
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $NameTitle;
    /**
     * The NameType
     * Meta informations extracted from the WSDL
     * - documentation: Type of name of the individual, such as former, nickname, alternate or alias name. Refer to OpenTravel Code List Name Type (NAM).
     * - use: optional
     * @var string
     */
    public $NameType;
    /**
     * Constructor method for PersonNameType
     * @uses PersonNameType::setNamePrefix()
     * @uses PersonNameType::setGivenName()
     * @uses PersonNameType::setMiddleName()
     * @uses PersonNameType::setSurnamePrefix()
     * @uses PersonNameType::setSurname()
     * @uses PersonNameType::setNameSuffix()
     * @uses PersonNameType::setNameTitle()
     * @uses PersonNameType::setNameType()
     * @param mixed[] $namePrefix
     * @param mixed[] $givenName
     * @param mixed[] $middleName
     * @param mixed $surnamePrefix
     * @param mixed $surname
     * @param mixed[] $nameSuffix
     * @param mixed[] $nameTitle
     * @param string $nameType
     */
    public function __construct(array $namePrefix = array(), array $givenName = array(), array $middleName = array(), $surnamePrefix = null, $surname = null, array $nameSuffix = array(), array $nameTitle = array(), $nameType = null)
    {
        $this
            ->setNamePrefix($namePrefix)
            ->setGivenName($givenName)
            ->setMiddleName($middleName)
            ->setSurnamePrefix($surnamePrefix)
            ->setSurname($surname)
            ->setNameSuffix($nameSuffix)
            ->setNameTitle($nameTitle)
            ->setNameType($nameType);
    }
    /**
     * Get NamePrefix value
     * @return mixed[]|null
     */
    public function getNamePrefix()
    {
        return $this->NamePrefix;
    }
    /**
     * Set NamePrefix value
     * @throws \InvalidArgumentException
     * @param mixed[] $namePrefix
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function setNamePrefix(array $namePrefix = array())
    {
        foreach ($namePrefix as $personNameTypeNamePrefixItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The NamePrefix property can only contain items of anyType, "%s" given', is_object($personNameTypeNamePrefixItem) ? get_class($personNameTypeNamePrefixItem) : gettype($personNameTypeNamePrefixItem)), __LINE__);
            }
        }
        $this->NamePrefix = $namePrefix;
        return $this;
    }
    /**
     * Add item to NamePrefix value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function addToNamePrefix($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The NamePrefix property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NamePrefix[] = $item;
        return $this;
    }
    /**
     * Get GivenName value
     * @return mixed[]|null
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }
    /**
     * Set GivenName value
     * @throws \InvalidArgumentException
     * @param mixed[] $givenName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function setGivenName(array $givenName = array())
    {
        foreach ($givenName as $personNameTypeGivenNameItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The GivenName property can only contain items of anyType, "%s" given', is_object($personNameTypeGivenNameItem) ? get_class($personNameTypeGivenNameItem) : gettype($personNameTypeGivenNameItem)), __LINE__);
            }
        }
        $this->GivenName = $givenName;
        return $this;
    }
    /**
     * Add item to GivenName value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function addToGivenName($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The GivenName property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GivenName[] = $item;
        return $this;
    }
    /**
     * Get MiddleName value
     * @return mixed[]|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @throws \InvalidArgumentException
     * @param mixed[] $middleName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function setMiddleName(array $middleName = array())
    {
        foreach ($middleName as $personNameTypeMiddleNameItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MiddleName property can only contain items of anyType, "%s" given', is_object($personNameTypeMiddleNameItem) ? get_class($personNameTypeMiddleNameItem) : gettype($personNameTypeMiddleNameItem)), __LINE__);
            }
        }
        $this->MiddleName = $middleName;
        return $this;
    }
    /**
     * Add item to MiddleName value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function addToMiddleName($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The MiddleName property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MiddleName[] = $item;
        return $this;
    }
    /**
     * Get SurnamePrefix value
     * @return mixed|null
     */
    public function getSurnamePrefix()
    {
        return $this->SurnamePrefix;
    }
    /**
     * Set SurnamePrefix value
     * @param mixed $surnamePrefix
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function setSurnamePrefix($surnamePrefix = null)
    {
        $this->SurnamePrefix = $surnamePrefix;
        return $this;
    }
    /**
     * Get Surname value
     * @return mixed|null
     */
    public function getSurname()
    {
        return $this->Surname;
    }
    /**
     * Set Surname value
     * @param mixed $surname
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function setSurname($surname = null)
    {
        $this->Surname = $surname;
        return $this;
    }
    /**
     * Get NameSuffix value
     * @return mixed[]|null
     */
    public function getNameSuffix()
    {
        return $this->NameSuffix;
    }
    /**
     * Set NameSuffix value
     * @throws \InvalidArgumentException
     * @param mixed[] $nameSuffix
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function setNameSuffix(array $nameSuffix = array())
    {
        foreach ($nameSuffix as $personNameTypeNameSuffixItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The NameSuffix property can only contain items of anyType, "%s" given', is_object($personNameTypeNameSuffixItem) ? get_class($personNameTypeNameSuffixItem) : gettype($personNameTypeNameSuffixItem)), __LINE__);
            }
        }
        $this->NameSuffix = $nameSuffix;
        return $this;
    }
    /**
     * Add item to NameSuffix value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function addToNameSuffix($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The NameSuffix property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameSuffix[] = $item;
        return $this;
    }
    /**
     * Get NameTitle value
     * @return mixed[]|null
     */
    public function getNameTitle()
    {
        return $this->NameTitle;
    }
    /**
     * Set NameTitle value
     * @throws \InvalidArgumentException
     * @param mixed[] $nameTitle
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function setNameTitle(array $nameTitle = array())
    {
        foreach ($nameTitle as $personNameTypeNameTitleItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The NameTitle property can only contain items of anyType, "%s" given', is_object($personNameTypeNameTitleItem) ? get_class($personNameTypeNameTitleItem) : gettype($personNameTypeNameTitleItem)), __LINE__);
            }
        }
        $this->NameTitle = $nameTitle;
        return $this;
    }
    /**
     * Add item to NameTitle value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function addToNameTitle($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The NameTitle property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameTitle[] = $item;
        return $this;
    }
    /**
     * Get NameType value
     * @return string|null
     */
    public function getNameType()
    {
        return $this->NameType;
    }
    /**
     * Set NameType value
     * @param string $nameType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
     */
    public function setNameType($nameType = null)
    {
        // validation for constraint: string
        if (!is_null($nameType) && !is_string($nameType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameType)), __LINE__);
        }
        $this->NameType = $nameType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonNameType
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

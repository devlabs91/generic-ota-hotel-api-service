<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirTravelerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about the person traveling. Gender - the gender of the customer, if needed. BirthDate - Date of Birth. Currency - the preferred currency in which monetary amounts should be returned.
 * @subpackage Structs
 */
class AirTravelerType extends AbstractStructBase
{
    /**
     * The ProfileRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRef
     */
    public $ProfileRef;
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: Name information of the person traveling.
     * - minOccurs: 0
     * @var mixed
     */
    public $PersonName;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[]
     */
    public $Telephone;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Email[]
     */
    public $Email;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Address[]
     */
    public $Address;
    /**
     * The CustLoyalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty[]
     */
    public $CustLoyalty;
    /**
     * The Document
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Document[]
     */
    public $Document;
    /**
     * The PassengerTypeQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of travelers of a given passenger type (e.g., Adult, Child)
     * - minOccurs: 0
     * @var mixed
     */
    public $PassengerTypeQuantity;
    /**
     * The TravelerRefNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber
     */
    public $TravelerRefNumber;
    /**
     * The FlightSegmentRPHs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentRPHs
     */
    public $FlightSegmentRPHs;
    /**
     * The BirthDate
     * Meta informations extracted from the WSDL
     * - documentation: Traveler's date of birth.
     * - use: optional
     * @var string
     */
    public $BirthDate;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the code for the currency units.
     * - use: optional
     * @var string
     */
    public $CurrencyCode;
    /**
     * The PassengerTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Code used to indicate the type of traveler that will be traveling (e.g., ADT, CHD, INF, GRP).
     * - use: optional
     * @var string
     */
    public $PassengerTypeCode;
    /**
     * The AccompaniedByInfant
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if an infant accompanying a traveler is with or without a seat.
     * - use: optional
     * @var bool
     */
    public $AccompaniedByInfant;
    /**
     * Constructor method for AirTravelerType
     * @uses AirTravelerType::setProfileRef()
     * @uses AirTravelerType::setPersonName()
     * @uses AirTravelerType::setTelephone()
     * @uses AirTravelerType::setEmail()
     * @uses AirTravelerType::setAddress()
     * @uses AirTravelerType::setCustLoyalty()
     * @uses AirTravelerType::setDocument()
     * @uses AirTravelerType::setPassengerTypeQuantity()
     * @uses AirTravelerType::setTravelerRefNumber()
     * @uses AirTravelerType::setFlightSegmentRPHs()
     * @uses AirTravelerType::setBirthDate()
     * @uses AirTravelerType::setCurrencyCode()
     * @uses AirTravelerType::setPassengerTypeCode()
     * @uses AirTravelerType::setAccompaniedByInfant()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRef $profileRef
     * @param mixed $personName
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[] $telephone
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Email[] $email
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address[] $address
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty[] $custLoyalty
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Document[] $document
     * @param mixed $passengerTypeQuantity
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber $travelerRefNumber
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentRPHs $flightSegmentRPHs
     * @param string $birthDate
     * @param string $currencyCode
     * @param string $passengerTypeCode
     * @param bool $accompaniedByInfant
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\ProfileRef $profileRef = null, $personName = null, array $telephone = array(), array $email = array(), array $address = array(), array $custLoyalty = array(), array $document = array(), $passengerTypeQuantity = null, \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber $travelerRefNumber = null, \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentRPHs $flightSegmentRPHs = null, $birthDate = null, $currencyCode = null, $passengerTypeCode = null, $accompaniedByInfant = null)
    {
        $this
            ->setProfileRef($profileRef)
            ->setPersonName($personName)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setAddress($address)
            ->setCustLoyalty($custLoyalty)
            ->setDocument($document)
            ->setPassengerTypeQuantity($passengerTypeQuantity)
            ->setTravelerRefNumber($travelerRefNumber)
            ->setFlightSegmentRPHs($flightSegmentRPHs)
            ->setBirthDate($birthDate)
            ->setCurrencyCode($currencyCode)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setAccompaniedByInfant($accompaniedByInfant);
    }
    /**
     * Get ProfileRef value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRef|null
     */
    public function getProfileRef()
    {
        return $this->ProfileRef;
    }
    /**
     * Set ProfileRef value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRef $profileRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setProfileRef(\Devlabs91\GenericOtaHotelApiService\StructType\ProfileRef $profileRef = null)
    {
        $this->ProfileRef = $profileRef;
        return $this;
    }
    /**
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[]|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[] $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $airTravelerTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!$airTravelerTypeTelephoneItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Telephone) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Telephone, "%s" given', is_object($airTravelerTypeTelephoneItem) ? get_class($airTravelerTypeTelephoneItem) : gettype($airTravelerTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function addToTelephone(\Devlabs91\GenericOtaHotelApiService\StructType\Telephone $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Telephone) {
            throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Telephone, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Telephone[] = $item;
        return $this;
    }
    /**
     * Get Email value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Email[]|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Email[] $email
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $airTravelerTypeEmailItem) {
            // validation for constraint: itemType
            if (!$airTravelerTypeEmailItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Email) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Email, "%s" given', is_object($airTravelerTypeEmailItem) ? get_class($airTravelerTypeEmailItem) : gettype($airTravelerTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Email $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function addToEmail(\Devlabs91\GenericOtaHotelApiService\StructType\Email $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Email) {
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Email, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Email[] = $item;
        return $this;
    }
    /**
     * Get Address value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address[] $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $airTravelerTypeAddressItem) {
            // validation for constraint: itemType
            if (!$airTravelerTypeAddressItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Address) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Address, "%s" given', is_object($airTravelerTypeAddressItem) ? get_class($airTravelerTypeAddressItem) : gettype($airTravelerTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function addToAddress(\Devlabs91\GenericOtaHotelApiService\StructType\Address $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Address) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Address, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty[]|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty[] $custLoyalty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setCustLoyalty(array $custLoyalty = array())
    {
        foreach ($custLoyalty as $airTravelerTypeCustLoyaltyItem) {
            // validation for constraint: itemType
            if (!$airTravelerTypeCustLoyaltyItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty) {
                throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty, "%s" given', is_object($airTravelerTypeCustLoyaltyItem) ? get_class($airTravelerTypeCustLoyaltyItem) : gettype($airTravelerTypeCustLoyaltyItem)), __LINE__);
            }
        }
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Add item to CustLoyalty value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function addToCustLoyalty(\Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty) {
            throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustLoyalty[] = $item;
        return $this;
    }
    /**
     * Get Document value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Document[]|null
     */
    public function getDocument()
    {
        return $this->Document;
    }
    /**
     * Set Document value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Document[] $document
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $airTravelerTypeDocumentItem) {
            // validation for constraint: itemType
            if (!$airTravelerTypeDocumentItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Document) {
                throw new \InvalidArgumentException(sprintf('The Document property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Document, "%s" given', is_object($airTravelerTypeDocumentItem) ? get_class($airTravelerTypeDocumentItem) : gettype($airTravelerTypeDocumentItem)), __LINE__);
            }
        }
        $this->Document = $document;
        return $this;
    }
    /**
     * Add item to Document value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Document $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function addToDocument(\Devlabs91\GenericOtaHotelApiService\StructType\Document $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Document) {
            throw new \InvalidArgumentException(sprintf('The Document property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Document, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Document[] = $item;
        return $this;
    }
    /**
     * Get PassengerTypeQuantity value
     * @return mixed|null
     */
    public function getPassengerTypeQuantity()
    {
        return $this->PassengerTypeQuantity;
    }
    /**
     * Set PassengerTypeQuantity value
     * @param mixed $passengerTypeQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setPassengerTypeQuantity($passengerTypeQuantity = null)
    {
        $this->PassengerTypeQuantity = $passengerTypeQuantity;
        return $this;
    }
    /**
     * Get TravelerRefNumber value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber|null
     */
    public function getTravelerRefNumber()
    {
        return $this->TravelerRefNumber;
    }
    /**
     * Set TravelerRefNumber value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber $travelerRefNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setTravelerRefNumber(\Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber $travelerRefNumber = null)
    {
        $this->TravelerRefNumber = $travelerRefNumber;
        return $this;
    }
    /**
     * Get FlightSegmentRPHs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentRPHs|null
     */
    public function getFlightSegmentRPHs()
    {
        return $this->FlightSegmentRPHs;
    }
    /**
     * Set FlightSegmentRPHs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentRPHs $flightSegmentRPHs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setFlightSegmentRPHs(\Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentRPHs $flightSegmentRPHs = null)
    {
        $this->FlightSegmentRPHs = $flightSegmentRPHs;
        return $this;
    }
    /**
     * Get BirthDate value
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }
    /**
     * Set BirthDate value
     * @param string $birthDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setBirthDate($birthDate = null)
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDate)), __LINE__);
        }
        $this->BirthDate = $birthDate;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode()
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setPassengerTypeCode($passengerTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerTypeCode)), __LINE__);
        }
        $this->PassengerTypeCode = $passengerTypeCode;
        return $this;
    }
    /**
     * Get AccompaniedByInfant value
     * @return bool|null
     */
    public function getAccompaniedByInfant()
    {
        return $this->AccompaniedByInfant;
    }
    /**
     * Set AccompaniedByInfant value
     * @param bool $accompaniedByInfant
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
     */
    public function setAccompaniedByInfant($accompaniedByInfant = null)
    {
        // validation for constraint: boolean
        if (!is_null($accompaniedByInfant) && !is_bool($accompaniedByInfant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($accompaniedByInfant)), __LINE__);
        }
        $this->AccompaniedByInfant = $accompaniedByInfant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTravelerType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentHandlingType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the document handling information.
 * @subpackage Structs
 */
class DocumentHandlingType extends AbstractStructBase
{
    /**
     * The VendorOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption[]
     */
    public $VendorOption;
    /**
     * The DocumentTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the content of the document being referred to. Refer to OpenTravel Code List Cruise Document Type (CRD).
     * - use: optional
     * @var string
     */
    public $DocumentTypeCode;
    /**
     * The DeliveryMethodCode
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of delivery method for the document defined in the DocumentTypeCode. Refer to OpenTravel Code List Distribution Type (DTB).
     * - use: optional
     * @var string
     */
    public $DeliveryMethodCode;
    /**
     * The DocumentDestination
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the mailing location (e.g , agent address or alternate address).
     * - use: optional
     * @var string
     */
    public $DocumentDestination;
    /**
     * The SelectedOptionIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true indicates the item is selected. When false, indicates an alternate item exists, but is not currently selected.
     * - use: optional
     * @var bool
     */
    public $SelectedOptionIndicator;
    /**
     * The DefaultIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, the DocumentDestination is the default. When false, the DocumentDestination is not the default.
     * - use: optional
     * @var bool
     */
    public $DefaultIndicator;
    /**
     * The AddressRequiredIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, this indicates the DocumentDestination address is required. When false, a DcoumentDestination address is not required.
     * - use: optional
     * @var bool
     */
    public $AddressRequiredIndicator;
    /**
     * The AddressRPH
     * Meta informations extracted from the WSDL
     * - documentation: Provides a reference pointer that links the document destination to the appropriate address in ContactInfo.
     * - use: optional
     * @var string
     */
    public $AddressRPH;
    /**
     * The EmailRPH
     * Meta informations extracted from the WSDL
     * - documentation: Provides a reference pointer that links the document destination to the appropriate email address in ContactInfo.
     * - use: optional
     * @var string
     */
    public $EmailRPH;
    /**
     * The TelephoneRPH
     * Meta informations extracted from the WSDL
     * - documentation: Provides a reference pointer that links the document destination to the appropriate telephone number in ContactInfo that designates the fax number.
     * - use: optional
     * @var string
     */
    public $TelephoneRPH;
    /**
     * The DocumentLanguage
     * Meta informations extracted from the WSDL
     * - documentation: The language of the travel document.
     * - use: optional
     * @var string
     */
    public $DocumentLanguage;
    /**
     * Constructor method for DocumentHandlingType
     * @uses DocumentHandlingType::setVendorOption()
     * @uses DocumentHandlingType::setDocumentTypeCode()
     * @uses DocumentHandlingType::setDeliveryMethodCode()
     * @uses DocumentHandlingType::setDocumentDestination()
     * @uses DocumentHandlingType::setSelectedOptionIndicator()
     * @uses DocumentHandlingType::setDefaultIndicator()
     * @uses DocumentHandlingType::setAddressRequiredIndicator()
     * @uses DocumentHandlingType::setAddressRPH()
     * @uses DocumentHandlingType::setEmailRPH()
     * @uses DocumentHandlingType::setTelephoneRPH()
     * @uses DocumentHandlingType::setDocumentLanguage()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption[] $vendorOption
     * @param string $documentTypeCode
     * @param string $deliveryMethodCode
     * @param string $documentDestination
     * @param bool $selectedOptionIndicator
     * @param bool $defaultIndicator
     * @param bool $addressRequiredIndicator
     * @param string $addressRPH
     * @param string $emailRPH
     * @param string $telephoneRPH
     * @param string $documentLanguage
     */
    public function __construct(array $vendorOption = array(), $documentTypeCode = null, $deliveryMethodCode = null, $documentDestination = null, $selectedOptionIndicator = null, $defaultIndicator = null, $addressRequiredIndicator = null, $addressRPH = null, $emailRPH = null, $telephoneRPH = null, $documentLanguage = null)
    {
        $this
            ->setVendorOption($vendorOption)
            ->setDocumentTypeCode($documentTypeCode)
            ->setDeliveryMethodCode($deliveryMethodCode)
            ->setDocumentDestination($documentDestination)
            ->setSelectedOptionIndicator($selectedOptionIndicator)
            ->setDefaultIndicator($defaultIndicator)
            ->setAddressRequiredIndicator($addressRequiredIndicator)
            ->setAddressRPH($addressRPH)
            ->setEmailRPH($emailRPH)
            ->setTelephoneRPH($telephoneRPH)
            ->setDocumentLanguage($documentLanguage);
    }
    /**
     * Get VendorOption value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption[]|null
     */
    public function getVendorOption()
    {
        return $this->VendorOption;
    }
    /**
     * Set VendorOption value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption[] $vendorOption
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setVendorOption(array $vendorOption = array())
    {
        foreach ($vendorOption as $documentHandlingTypeVendorOptionItem) {
            // validation for constraint: itemType
            if (!$documentHandlingTypeVendorOptionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption) {
                throw new \InvalidArgumentException(sprintf('The VendorOption property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption, "%s" given', is_object($documentHandlingTypeVendorOptionItem) ? get_class($documentHandlingTypeVendorOptionItem) : gettype($documentHandlingTypeVendorOptionItem)), __LINE__);
            }
        }
        $this->VendorOption = $vendorOption;
        return $this;
    }
    /**
     * Add item to VendorOption value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function addToVendorOption(\Devlabs91\GenericOtaHotelApiService\StructType\VendorOption $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption) {
            throw new \InvalidArgumentException(sprintf('The VendorOption property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VendorOption, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VendorOption[] = $item;
        return $this;
    }
    /**
     * Get DocumentTypeCode value
     * @return string|null
     */
    public function getDocumentTypeCode()
    {
        return $this->DocumentTypeCode;
    }
    /**
     * Set DocumentTypeCode value
     * @param string $documentTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setDocumentTypeCode($documentTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($documentTypeCode) && !is_string($documentTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentTypeCode)), __LINE__);
        }
        $this->DocumentTypeCode = $documentTypeCode;
        return $this;
    }
    /**
     * Get DeliveryMethodCode value
     * @return string|null
     */
    public function getDeliveryMethodCode()
    {
        return $this->DeliveryMethodCode;
    }
    /**
     * Set DeliveryMethodCode value
     * @param string $deliveryMethodCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setDeliveryMethodCode($deliveryMethodCode = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryMethodCode) && !is_string($deliveryMethodCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryMethodCode)), __LINE__);
        }
        $this->DeliveryMethodCode = $deliveryMethodCode;
        return $this;
    }
    /**
     * Get DocumentDestination value
     * @return string|null
     */
    public function getDocumentDestination()
    {
        return $this->DocumentDestination;
    }
    /**
     * Set DocumentDestination value
     * @param string $documentDestination
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setDocumentDestination($documentDestination = null)
    {
        // validation for constraint: string
        if (!is_null($documentDestination) && !is_string($documentDestination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentDestination)), __LINE__);
        }
        $this->DocumentDestination = $documentDestination;
        return $this;
    }
    /**
     * Get SelectedOptionIndicator value
     * @return bool|null
     */
    public function getSelectedOptionIndicator()
    {
        return $this->SelectedOptionIndicator;
    }
    /**
     * Set SelectedOptionIndicator value
     * @param bool $selectedOptionIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setSelectedOptionIndicator($selectedOptionIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($selectedOptionIndicator) && !is_bool($selectedOptionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($selectedOptionIndicator)), __LINE__);
        }
        $this->SelectedOptionIndicator = $selectedOptionIndicator;
        return $this;
    }
    /**
     * Get DefaultIndicator value
     * @return bool|null
     */
    public function getDefaultIndicator()
    {
        return $this->DefaultIndicator;
    }
    /**
     * Set DefaultIndicator value
     * @param bool $defaultIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setDefaultIndicator($defaultIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaultIndicator) && !is_bool($defaultIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($defaultIndicator)), __LINE__);
        }
        $this->DefaultIndicator = $defaultIndicator;
        return $this;
    }
    /**
     * Get AddressRequiredIndicator value
     * @return bool|null
     */
    public function getAddressRequiredIndicator()
    {
        return $this->AddressRequiredIndicator;
    }
    /**
     * Set AddressRequiredIndicator value
     * @param bool $addressRequiredIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setAddressRequiredIndicator($addressRequiredIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($addressRequiredIndicator) && !is_bool($addressRequiredIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($addressRequiredIndicator)), __LINE__);
        }
        $this->AddressRequiredIndicator = $addressRequiredIndicator;
        return $this;
    }
    /**
     * Get AddressRPH value
     * @return string|null
     */
    public function getAddressRPH()
    {
        return $this->AddressRPH;
    }
    /**
     * Set AddressRPH value
     * @param string $addressRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setAddressRPH($addressRPH = null)
    {
        // validation for constraint: string
        if (!is_null($addressRPH) && !is_string($addressRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressRPH)), __LINE__);
        }
        $this->AddressRPH = $addressRPH;
        return $this;
    }
    /**
     * Get EmailRPH value
     * @return string|null
     */
    public function getEmailRPH()
    {
        return $this->EmailRPH;
    }
    /**
     * Set EmailRPH value
     * @param string $emailRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setEmailRPH($emailRPH = null)
    {
        // validation for constraint: string
        if (!is_null($emailRPH) && !is_string($emailRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailRPH)), __LINE__);
        }
        $this->EmailRPH = $emailRPH;
        return $this;
    }
    /**
     * Get TelephoneRPH value
     * @return string|null
     */
    public function getTelephoneRPH()
    {
        return $this->TelephoneRPH;
    }
    /**
     * Set TelephoneRPH value
     * @param string $telephoneRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setTelephoneRPH($telephoneRPH = null)
    {
        // validation for constraint: string
        if (!is_null($telephoneRPH) && !is_string($telephoneRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephoneRPH)), __LINE__);
        }
        $this->TelephoneRPH = $telephoneRPH;
        return $this;
    }
    /**
     * Get DocumentLanguage value
     * @return string|null
     */
    public function getDocumentLanguage()
    {
        return $this->DocumentLanguage;
    }
    /**
     * Set DocumentLanguage value
     * @param string $documentLanguage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
     */
    public function setDocumentLanguage($documentLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($documentLanguage) && !is_string($documentLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentLanguage)), __LINE__);
        }
        $this->DocumentLanguage = $documentLanguage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DocumentHandlingType
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

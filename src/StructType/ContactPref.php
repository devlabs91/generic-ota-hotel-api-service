<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: The traveller's preferred means of being contacted.
 * @subpackage Structs
 */
class ContactPref extends AbstractStructBase
{
    /**
     * The PreferLevel
     * Meta informations extracted from the WSDL
     * - documentation: Level of preference for this method of being contacted.
     * - use: optional
     * @var string
     */
    public $PreferLevel;
    /**
     * The ContactMethodCode
     * Meta informations extracted from the WSDL
     * - documentation: Method of contact. Refer to OpenTravel Code List DistributionType (DTB).
     * - use: optional
     * @var string
     */
    public $ContactMethodCode;
    /**
     * Constructor method for ContactPref
     * @uses ContactPref::setPreferLevel()
     * @uses ContactPref::setContactMethodCode()
     * @param string $preferLevel
     * @param string $contactMethodCode
     */
    public function __construct($preferLevel = null, $contactMethodCode = null)
    {
        $this
            ->setPreferLevel($preferLevel)
            ->setContactMethodCode($contactMethodCode);
    }
    /**
     * Get PreferLevel value
     * @return string|null
     */
    public function getPreferLevel()
    {
        return $this->PreferLevel;
    }
    /**
     * Set PreferLevel value
     * @param string $preferLevel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPref
     */
    public function setPreferLevel($preferLevel = null)
    {
        // validation for constraint: string
        if (!is_null($preferLevel) && !is_string($preferLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferLevel)), __LINE__);
        }
        $this->PreferLevel = $preferLevel;
        return $this;
    }
    /**
     * Get ContactMethodCode value
     * @return string|null
     */
    public function getContactMethodCode()
    {
        return $this->ContactMethodCode;
    }
    /**
     * Set ContactMethodCode value
     * @param string $contactMethodCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPref
     */
    public function setContactMethodCode($contactMethodCode = null)
    {
        // validation for constraint: string
        if (!is_null($contactMethodCode) && !is_string($contactMethodCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactMethodCode)), __LINE__);
        }
        $this->ContactMethodCode = $contactMethodCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPref
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

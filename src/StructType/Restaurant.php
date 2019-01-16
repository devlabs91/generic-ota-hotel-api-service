<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Restaurant StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a specific restaurant such as type of restaurant, directions, schedules, etc. | When true, indicates a single restaurant is being removed.
 * @subpackage Structs
 */
class Restaurant extends RestaurantType
{
    /**
     * The Features
     * Meta informations extracted from the WSDL
     * - documentation: Collection of features offered by a hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $Features;
    /**
     * The ContactInfos
     * Meta informations extracted from the WSDL
     * - documentation: Collection of contact information (e.g., restaurant address, phone number).
     * - minOccurs: 0
     * @var mixed
     */
    public $ContactInfos;
    /**
     * The SrvcInfoCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes
     */
    public $SrvcInfoCodes;
    /**
     * Constructor method for Restaurant
     * @uses Restaurant::setFeatures()
     * @uses Restaurant::setContactInfos()
     * @uses Restaurant::setSrvcInfoCodes()
     * @param mixed $features
     * @param mixed $contactInfos
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes $srvcInfoCodes
     */
    public function __construct($features = null, $contactInfos = null, \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes $srvcInfoCodes = null)
    {
        $this
            ->setFeatures($features)
            ->setContactInfos($contactInfos)
            ->setSrvcInfoCodes($srvcInfoCodes);
    }
    /**
     * Get Features value
     * @return mixed|null
     */
    public function getFeatures()
    {
        return $this->Features;
    }
    /**
     * Set Features value
     * @param mixed $features
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setFeatures($features = null)
    {
        $this->Features = $features;
        return $this;
    }
    /**
     * Get ContactInfos value
     * @return mixed|null
     */
    public function getContactInfos()
    {
        return $this->ContactInfos;
    }
    /**
     * Set ContactInfos value
     * @param mixed $contactInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setContactInfos($contactInfos = null)
    {
        $this->ContactInfos = $contactInfos;
        return $this;
    }
    /**
     * Get SrvcInfoCodes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes|null
     */
    public function getSrvcInfoCodes()
    {
        return $this->SrvcInfoCodes;
    }
    /**
     * Set SrvcInfoCodes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes $srvcInfoCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
     */
    public function setSrvcInfoCodes(\Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes $srvcInfoCodes = null)
    {
        $this->SrvcInfoCodes = $srvcInfoCodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant
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

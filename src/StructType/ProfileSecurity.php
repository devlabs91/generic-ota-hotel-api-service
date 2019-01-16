<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileSecurity StructType
 * Meta informations extracted from the WSDL
 * - documentation: Grants access rights on a single booking to offices other than the creator and responsible offices.
 * @subpackage Structs
 */
class ProfileSecurity extends AbstractStructBase
{
    /**
     * The AccessingOrganizationType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AccessingOrganizationType;
    /**
     * The AccessingOrganizationID
     * Meta informations extracted from the WSDL
     * - documentation: The identifier of the organization for which access information is being provided.
     * - use: optional
     * @var string
     */
    public $AccessingOrganizationID;
    /**
     * The AccessType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AccessType;
    /**
     * The TransferAction
     * Meta informations extracted from the WSDL
     * - documentation: Indicates under what conditions the element will be transfered to the booking.
     * - use: optional
     * @var string
     */
    public $TransferAction;
    /**
     * Constructor method for ProfileSecurity
     * @uses ProfileSecurity::setAccessingOrganizationType()
     * @uses ProfileSecurity::setAccessingOrganizationID()
     * @uses ProfileSecurity::setAccessType()
     * @uses ProfileSecurity::setTransferAction()
     * @param string $accessingOrganizationType
     * @param string $accessingOrganizationID
     * @param string $accessType
     * @param string $transferAction
     */
    public function __construct($accessingOrganizationType = null, $accessingOrganizationID = null, $accessType = null, $transferAction = null)
    {
        $this
            ->setAccessingOrganizationType($accessingOrganizationType)
            ->setAccessingOrganizationID($accessingOrganizationID)
            ->setAccessType($accessType)
            ->setTransferAction($transferAction);
    }
    /**
     * Get AccessingOrganizationType value
     * @return string|null
     */
    public function getAccessingOrganizationType()
    {
        return $this->AccessingOrganizationType;
    }
    /**
     * Set AccessingOrganizationType value
     * @param string $accessingOrganizationType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileSecurity
     */
    public function setAccessingOrganizationType($accessingOrganizationType = null)
    {
        // validation for constraint: string
        if (!is_null($accessingOrganizationType) && !is_string($accessingOrganizationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessingOrganizationType)), __LINE__);
        }
        $this->AccessingOrganizationType = $accessingOrganizationType;
        return $this;
    }
    /**
     * Get AccessingOrganizationID value
     * @return string|null
     */
    public function getAccessingOrganizationID()
    {
        return $this->AccessingOrganizationID;
    }
    /**
     * Set AccessingOrganizationID value
     * @param string $accessingOrganizationID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileSecurity
     */
    public function setAccessingOrganizationID($accessingOrganizationID = null)
    {
        // validation for constraint: string
        if (!is_null($accessingOrganizationID) && !is_string($accessingOrganizationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessingOrganizationID)), __LINE__);
        }
        $this->AccessingOrganizationID = $accessingOrganizationID;
        return $this;
    }
    /**
     * Get AccessType value
     * @return string|null
     */
    public function getAccessType()
    {
        return $this->AccessType;
    }
    /**
     * Set AccessType value
     * @param string $accessType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileSecurity
     */
    public function setAccessType($accessType = null)
    {
        // validation for constraint: string
        if (!is_null($accessType) && !is_string($accessType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessType)), __LINE__);
        }
        $this->AccessType = $accessType;
        return $this;
    }
    /**
     * Get TransferAction value
     * @return string|null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param string $transferAction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileSecurity
     */
    public function setTransferAction($transferAction = null)
    {
        // validation for constraint: string
        if (!is_null($transferAction) && !is_string($transferAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferAction)), __LINE__);
        }
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileSecurity
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

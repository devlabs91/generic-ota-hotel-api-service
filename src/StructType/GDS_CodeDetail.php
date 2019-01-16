<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDS_CodeDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: This holds detailed information pertaining to the agencies authorized to book this rate.
 * @subpackage Structs
 */
class GDS_CodeDetail extends AbstractStructBase
{
    /**
     * The PseudoCityCode
     * Meta informations extracted from the WSDL
     * - documentation: This is used to pass the pseudo city code (i.e., the code that identifies a specific agency location) of the agency that has authority to book the negotiated rate(s)).
     * - use: optional
     * @var string
     */
    public $PseudoCityCode;
    /**
     * The AgencyName
     * Meta informations extracted from the WSDL
     * - documentation: This is the agency with authority to book the negotiated rate(s).
     * - use: optional
     * @var string
     */
    public $AgencyName;
    /**
     * Constructor method for GDS_CodeDetail
     * @uses GDS_CodeDetail::setPseudoCityCode()
     * @uses GDS_CodeDetail::setAgencyName()
     * @param string $pseudoCityCode
     * @param string $agencyName
     */
    public function __construct($pseudoCityCode = null, $agencyName = null)
    {
        $this
            ->setPseudoCityCode($pseudoCityCode)
            ->setAgencyName($agencyName);
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode()
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail
     */
    public function setPseudoCityCode($pseudoCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        return $this;
    }
    /**
     * Get AgencyName value
     * @return string|null
     */
    public function getAgencyName()
    {
        return $this->AgencyName;
    }
    /**
     * Set AgencyName value
     * @param string $agencyName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail
     */
    public function setAgencyName($agencyName = null)
    {
        // validation for constraint: string
        if (!is_null($agencyName) && !is_string($agencyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyName)), __LINE__);
        }
        $this->AgencyName = $agencyName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GDS_CodeDetail
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

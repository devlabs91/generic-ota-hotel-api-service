<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthorizedViewer StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies those authorized to view a confidential special remark. | Specifies those authorized to view a comment.
 * @subpackage Structs
 */
class AuthorizedViewer extends AbstractStructBase
{
    /**
     * The ViewerCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies an authorized viewer of a confidential remark. Can be a 3 character ATA/IATA airport/city code, an office ID, pseudo city code, etc. | Identifies an authorized viewer of a confidential remark. Can be a 3 character ATA/IATA
     * airport/city code, an office ID, pseudo city code, etc.
     * - use: optional
     * @var string
     */
    public $ViewerCode;
    /**
     * The ViewerCarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Carrier code that may be used in conjunction with the viewer code to identify those authorized to view the confidential special remark.
     * - use: optional
     * @var string
     */
    public $ViewerCarrierCode;
    /**
     * Constructor method for AuthorizedViewer
     * @uses AuthorizedViewer::setViewerCode()
     * @uses AuthorizedViewer::setViewerCarrierCode()
     * @param string $viewerCode
     * @param string $viewerCarrierCode
     */
    public function __construct($viewerCode = null, $viewerCarrierCode = null)
    {
        $this
            ->setViewerCode($viewerCode)
            ->setViewerCarrierCode($viewerCarrierCode);
    }
    /**
     * Get ViewerCode value
     * @return string|null
     */
    public function getViewerCode()
    {
        return $this->ViewerCode;
    }
    /**
     * Set ViewerCode value
     * @param string $viewerCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer
     */
    public function setViewerCode($viewerCode = null)
    {
        // validation for constraint: string
        if (!is_null($viewerCode) && !is_string($viewerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($viewerCode)), __LINE__);
        }
        $this->ViewerCode = $viewerCode;
        return $this;
    }
    /**
     * Get ViewerCarrierCode value
     * @return string|null
     */
    public function getViewerCarrierCode()
    {
        return $this->ViewerCarrierCode;
    }
    /**
     * Set ViewerCarrierCode value
     * @param string $viewerCarrierCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer
     */
    public function setViewerCarrierCode($viewerCarrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($viewerCarrierCode) && !is_string($viewerCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($viewerCarrierCode)), __LINE__);
        }
        $this->ViewerCarrierCode = $viewerCarrierCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewer
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

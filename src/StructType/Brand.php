<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Brand StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Brand class defines the brand affiliations of this hotel. | May be used to give further detail on the code or to remove an obsolete item.
 * @subpackage Structs
 */
class Brand extends AbstractStructBase
{
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: The universal resource locator (URL) for the marketing brand as found on the Internet.
     * - use: optional
     * @var string
     */
    public $URL;
    /**
     * The CategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: The code for the type of brand affiliated with the hotel facility. Refer to OpenTravel Code List Brand Category Code (BCC).
     * - use: optional
     * @var string
     */
    public $CategoryCode;
    /**
     * The Marketing
     * Meta informations extracted from the WSDL
     * - documentation: Name of brand, marketing chain, representation company or other affiliation(s).
     * - use: optional
     * @var string
     */
    public $Marketing;
    /**
     * Constructor method for Brand
     * @uses Brand::setURL()
     * @uses Brand::setCategoryCode()
     * @uses Brand::setMarketing()
     * @param string $uRL
     * @param string $categoryCode
     * @param string $marketing
     */
    public function __construct($uRL = null, $categoryCode = null, $marketing = null)
    {
        $this
            ->setURL($uRL)
            ->setCategoryCode($categoryCode)
            ->setMarketing($marketing);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brand
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get CategoryCode value
     * @return string|null
     */
    public function getCategoryCode()
    {
        return $this->CategoryCode;
    }
    /**
     * Set CategoryCode value
     * @param string $categoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brand
     */
    public function setCategoryCode($categoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($categoryCode) && !is_string($categoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryCode)), __LINE__);
        }
        $this->CategoryCode = $categoryCode;
        return $this;
    }
    /**
     * Get Marketing value
     * @return string|null
     */
    public function getMarketing()
    {
        return $this->Marketing;
    }
    /**
     * Set Marketing value
     * @param string $marketing
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brand
     */
    public function setMarketing($marketing = null)
    {
        // validation for constraint: string
        if (!is_null($marketing) && !is_string($marketing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketing)), __LINE__);
        }
        $this->Marketing = $marketing;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Brand
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

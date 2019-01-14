<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for X509DataType StructType
 * @subpackage Structs
 */
class X509DataType extends AbstractStructBase
{
    /**
     * The X509IssuerSerial
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\X509IssuerSerialType
     */
    public $X509IssuerSerial;
    /**
     * The X509SKI
     * @var string
     */
    public $X509SKI;
    /**
     * The X509SubjectName
     * @var string
     */
    public $X509SubjectName;
    /**
     * The X509Certificate
     * @var string
     */
    public $X509Certificate;
    /**
     * The X509CRL
     * @var string
     */
    public $X509CRL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for X509DataType
     * @uses X509DataType::setX509IssuerSerial()
     * @uses X509DataType::setX509SKI()
     * @uses X509DataType::setX509SubjectName()
     * @uses X509DataType::setX509Certificate()
     * @uses X509DataType::setX509CRL()
     * @uses X509DataType::setAny()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\X509IssuerSerialType $x509IssuerSerial
     * @param string $x509SKI
     * @param string $x509SubjectName
     * @param string $x509Certificate
     * @param string $x509CRL
     * @param \DOMDocument $any
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\X509IssuerSerialType $x509IssuerSerial = null, $x509SKI = null, $x509SubjectName = null, $x509Certificate = null, $x509CRL = null, \DOMDocument $any = null)
    {
        $this
            ->setX509IssuerSerial($x509IssuerSerial)
            ->setX509SKI($x509SKI)
            ->setX509SubjectName($x509SubjectName)
            ->setX509Certificate($x509Certificate)
            ->setX509CRL($x509CRL)
            ->setAny($any);
    }
    /**
     * Get X509IssuerSerial value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\X509IssuerSerialType|null
     */
    public function getX509IssuerSerial()
    {
        return $this->X509IssuerSerial;
    }
    /**
     * Set X509IssuerSerial value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\X509IssuerSerialType $x509IssuerSerial
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\X509DataType
     */
    public function setX509IssuerSerial(\Devlabs91\GenericOtaHotelApiService\StructType\X509IssuerSerialType $x509IssuerSerial = null)
    {
        $this->X509IssuerSerial = $x509IssuerSerial;
        return $this;
    }
    /**
     * Get X509SKI value
     * @return string|null
     */
    public function getX509SKI()
    {
        return $this->X509SKI;
    }
    /**
     * Set X509SKI value
     * @param string $x509SKI
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\X509DataType
     */
    public function setX509SKI($x509SKI = null)
    {
        // validation for constraint: string
        if (!is_null($x509SKI) && !is_string($x509SKI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($x509SKI)), __LINE__);
        }
        $this->X509SKI = $x509SKI;
        return $this;
    }
    /**
     * Get X509SubjectName value
     * @return string|null
     */
    public function getX509SubjectName()
    {
        return $this->X509SubjectName;
    }
    /**
     * Set X509SubjectName value
     * @param string $x509SubjectName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\X509DataType
     */
    public function setX509SubjectName($x509SubjectName = null)
    {
        // validation for constraint: string
        if (!is_null($x509SubjectName) && !is_string($x509SubjectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($x509SubjectName)), __LINE__);
        }
        $this->X509SubjectName = $x509SubjectName;
        return $this;
    }
    /**
     * Get X509Certificate value
     * @return string|null
     */
    public function getX509Certificate()
    {
        return $this->X509Certificate;
    }
    /**
     * Set X509Certificate value
     * @param string $x509Certificate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\X509DataType
     */
    public function setX509Certificate($x509Certificate = null)
    {
        // validation for constraint: string
        if (!is_null($x509Certificate) && !is_string($x509Certificate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($x509Certificate)), __LINE__);
        }
        $this->X509Certificate = $x509Certificate;
        return $this;
    }
    /**
     * Get X509CRL value
     * @return string|null
     */
    public function getX509CRL()
    {
        return $this->X509CRL;
    }
    /**
     * Set X509CRL value
     * @param string $x509CRL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\X509DataType
     */
    public function setX509CRL($x509CRL = null)
    {
        // validation for constraint: string
        if (!is_null($x509CRL) && !is_string($x509CRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($x509CRL)), __LINE__);
        }
        $this->X509CRL = $x509CRL;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Devlabs91\GenericOtaHotelApiService\StructType\X509DataType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\X509DataType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\X509DataType
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

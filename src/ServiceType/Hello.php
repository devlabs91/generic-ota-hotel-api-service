<?php

namespace Devlabs91\GenericOtaHotelApiService\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Hello ServiceType
 * @subpackage Services
 */
class Hello extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named hello
     * Meta informations extracted from the WSDL
     * - documentation: Hello World
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $name
     * @return string|bool
     */
    public function hello($name)
    {
        try {
            $this->setResult($this->getSoapClient()->hello($name));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return string
     */
    public function getResult()
    {
        return parent::getResult();
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

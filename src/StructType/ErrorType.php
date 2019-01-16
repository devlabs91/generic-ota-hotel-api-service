<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Standard way to indicate that an error occurred during the processing of an OpenTravel message. If the message successfully processes, but there are business errors, those errors should be passed in the warning element. | Details of
 * the error.
 * @subpackage Structs
 */
class ErrorType extends FreeTextType
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The Error element MUST contain the Type attribute that uses a recommended set of values to indicate the error type. The validating XSD can expect to accept values that it has NOT been explicitly coded for and process them by using
     * Type ="Unknown". Refer to OpenTravel Code List Error Warning Type (EWT).
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The NodeList
     * Meta informations extracted from the WSDL
     * - documentation: An XPath expression that selects all the nodes whose data caused this error. Further, this expression should have an additional contraint which contains the data of the node. This will provide the offending data back to systems that
     * cannot maintain the original message.
     * - use: optional
     * @var string
     */
    public $NodeList;
    /**
     * Constructor method for ErrorType
     * @uses ErrorType::setType()
     * @uses ErrorType::setNodeList()
     * @param string $type
     * @param string $nodeList
     */
    public function __construct($type = null, $nodeList = null)
    {
        $this
            ->setType($type)
            ->setNodeList($nodeList);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ErrorType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get NodeList value
     * @return string|null
     */
    public function getNodeList()
    {
        return $this->NodeList;
    }
    /**
     * Set NodeList value
     * @param string $nodeList
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ErrorType
     */
    public function setNodeList($nodeList = null)
    {
        // validation for constraint: string
        if (!is_null($nodeList) && !is_string($nodeList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nodeList)), __LINE__);
        }
        $this->NodeList = $nodeList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ErrorType
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

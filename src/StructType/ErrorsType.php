<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of errors that occurred during the processing of a message.
 * @subpackage Structs
 */
class ErrorsType extends AbstractStructBase
{
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - documentation: An error that occurred during the processing of a message.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $Error;
    /**
     * Constructor method for ErrorsType
     * @uses ErrorsType::setError()
     * @param mixed[] $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return mixed[]|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @throws \InvalidArgumentException
     * @param mixed[] $error
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ErrorsType
     */
    public function setError(array $error = array())
    {
        foreach ($error as $errorsTypeErrorItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Error property can only contain items of anyType, "%s" given', is_object($errorsTypeErrorItem) ? get_class($errorsTypeErrorItem) : gettype($errorsTypeErrorItem)), __LINE__);
            }
        }
        $this->Error = $error;
        return $this;
    }
    /**
     * Add item to Error value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ErrorsType
     */
    public function addToError($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Error property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Error[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ErrorsType
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

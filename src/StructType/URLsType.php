<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for URLsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The URLs class identifies URI information.
 * @subpackage Structs
 */
class URLsType extends AbstractStructBase
{
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: The universal resource locator (URL) for the attraction as found on the Internet.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $URL;
    /**
     * Constructor method for URLsType
     * @uses URLsType::setURL()
     * @param mixed[] $uRL
     */
    public function __construct(array $uRL = array())
    {
        $this
            ->setURL($uRL);
    }
    /**
     * Get URL value
     * @return mixed[]|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @throws \InvalidArgumentException
     * @param mixed[] $uRL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\URLsType
     */
    public function setURL(array $uRL = array())
    {
        foreach ($uRL as $uRLsTypeURLItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The URL property can only contain items of anyType, "%s" given', is_object($uRLsTypeURLItem) ? get_class($uRLsTypeURLItem) : gettype($uRLsTypeURLItem)), __LINE__);
            }
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Add item to URL value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\URLsType
     */
    public function addToURL($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The URL property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->URL[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\URLsType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecreationDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: RecreationDetail is used to give furher desciption regarding the recreation. These codes are passed in the code attribute and include details such as if a golf course has a driving range and what the total yardage for the course is.
 * | May be used to give further detail on the code or to remove an obsolete item. If the code being passed is for golf couse total yardage, code detail may be used to pass the actual yardage.
 * @subpackage Structs
 */
class RecreationDetail extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Used to pass further description regarding the info code.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Recreation Srvc Detail Code (REC).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether an amenity or service is offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Code.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * Constructor method for RecreationDetail
     * @uses RecreationDetail::setDescription()
     * @uses RecreationDetail::setCode()
     * @uses RecreationDetail::setExistsCode()
     * @param mixed[] $description
     * @param string $code
     * @param string $existsCode
     */
    public function __construct(array $description = array(), $code = null, $existsCode = null)
    {
        $this
            ->setDescription($description)
            ->setCode($code)
            ->setExistsCode($existsCode);
    }
    /**
     * Get Description value
     * @return mixed[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param mixed[] $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $recreationDetailDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($recreationDetailDescriptionItem) ? get_class($recreationDetailDescriptionItem) : gettype($recreationDetailDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail
     */
    public function addToDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get ExistsCode value
     * @return string|null
     */
    public function getExistsCode()
    {
        return $this->ExistsCode;
    }
    /**
     * Set ExistsCode value
     * @param string $existsCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail
     */
    public function setExistsCode($existsCode = null)
    {
        // validation for constraint: string
        if (!is_null($existsCode) && !is_string($existsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($existsCode)), __LINE__);
        }
        $this->ExistsCode = $existsCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationDetail
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

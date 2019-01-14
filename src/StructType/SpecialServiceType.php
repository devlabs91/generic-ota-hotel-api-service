<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialServiceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the special service requirements.
 * @subpackage Structs
 */
class SpecialServiceType extends AbstractStructBase
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Additional comments associated with the service or notes to be attached to the service.
     * - minOccurs: 0
     * @var mixed
     */
    public $Comment;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the special requirement type identification (e.g., occasion, special service, language).
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Special service code maintained by individual companies.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The CodeName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the special service.
     * - use: optional
     * @var string
     */
    public $CodeName;
    /**
     * The CodeDetail
     * Meta informations extracted from the WSDL
     * - documentation: May be used to give further detail on the code.
     * - use: optional
     * @var string
     */
    public $CodeDetail;
    /**
     * The AssociationType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AssociationType;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the date the service is to be rendered.
     * - use: optional
     * @var string
     */
    public $Date;
    /**
     * The NbrOfYears
     * Meta informations extracted from the WSDL
     * - documentation: The number of years associated with a special event such as a birthday, an anniversary, etc.
     * - use: optional
     * @var int
     */
    public $NbrOfYears;
    /**
     * Constructor method for SpecialServiceType
     * @uses SpecialServiceType::setComment()
     * @uses SpecialServiceType::setType()
     * @uses SpecialServiceType::setCode()
     * @uses SpecialServiceType::setCodeName()
     * @uses SpecialServiceType::setCodeDetail()
     * @uses SpecialServiceType::setAssociationType()
     * @uses SpecialServiceType::setDate()
     * @uses SpecialServiceType::setNbrOfYears()
     * @param mixed $comment
     * @param string $type
     * @param string $code
     * @param string $codeName
     * @param string $codeDetail
     * @param string $associationType
     * @param string $date
     * @param int $nbrOfYears
     */
    public function __construct($comment = null, $type = null, $code = null, $codeName = null, $codeDetail = null, $associationType = null, $date = null, $nbrOfYears = null)
    {
        $this
            ->setComment($comment)
            ->setType($type)
            ->setCode($code)
            ->setCodeName($codeName)
            ->setCodeDetail($codeDetail)
            ->setAssociationType($associationType)
            ->setDate($date)
            ->setNbrOfYears($nbrOfYears);
    }
    /**
     * Get Comment value
     * @return mixed|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param mixed $comment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceType
     */
    public function setComment($comment = null)
    {
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceType
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
     * Get CodeName value
     * @return string|null
     */
    public function getCodeName()
    {
        return $this->CodeName;
    }
    /**
     * Set CodeName value
     * @param string $codeName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceType
     */
    public function setCodeName($codeName = null)
    {
        // validation for constraint: string
        if (!is_null($codeName) && !is_string($codeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeName)), __LINE__);
        }
        $this->CodeName = $codeName;
        return $this;
    }
    /**
     * Get CodeDetail value
     * @return string|null
     */
    public function getCodeDetail()
    {
        return $this->CodeDetail;
    }
    /**
     * Set CodeDetail value
     * @param string $codeDetail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceType
     */
    public function setCodeDetail($codeDetail = null)
    {
        // validation for constraint: string
        if (!is_null($codeDetail) && !is_string($codeDetail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeDetail)), __LINE__);
        }
        $this->CodeDetail = $codeDetail;
        return $this;
    }
    /**
     * Get AssociationType value
     * @return string|null
     */
    public function getAssociationType()
    {
        return $this->AssociationType;
    }
    /**
     * Set AssociationType value
     * @param string $associationType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceType
     */
    public function setAssociationType($associationType = null)
    {
        // validation for constraint: string
        if (!is_null($associationType) && !is_string($associationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($associationType)), __LINE__);
        }
        $this->AssociationType = $associationType;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get NbrOfYears value
     * @return int|null
     */
    public function getNbrOfYears()
    {
        return $this->NbrOfYears;
    }
    /**
     * Set NbrOfYears value
     * @param int $nbrOfYears
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceType
     */
    public function setNbrOfYears($nbrOfYears = null)
    {
        // validation for constraint: int
        if (!is_null($nbrOfYears) && !is_numeric($nbrOfYears)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbrOfYears)), __LINE__);
        }
        $this->NbrOfYears = $nbrOfYears;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceType
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

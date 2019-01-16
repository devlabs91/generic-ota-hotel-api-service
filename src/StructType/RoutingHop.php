<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingHop StructType
 * Meta informations extracted from the WSDL
 * - documentation: A RoutingHop object conveys information about the path that this notification update took (e.g. how many and which systems it passed through).
 * @subpackage Structs
 */
class RoutingHop extends AbstractStructBase
{
    /**
     * The SystemCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SystemCode;
    /**
     * The LocalRefID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier within the System that refers to this specific document (reservation).
     * - use: optional
     * @var string
     */
    public $LocalRefID;
    /**
     * The TimeStamp
     * Meta informations extracted from the WSDL
     * - documentation: TimeStamp: TimeInstant - The date and time that the reservation passed through a routing hop.
     * - use: optional
     * @var string
     */
    public $TimeStamp;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Comment;
    /**
     * The SequenceNmbr
     * Meta informations extracted from the WSDL
     * - documentation: Sequential number assigned to hops, Base 0.
     * - use: optional
     * @var int
     */
    public $SequenceNmbr;
    /**
     * The Data
     * Meta informations extracted from the WSDL
     * - documentation: Data: String - This attribute is provided so that each system can put in whatever data it would like (e.g., auditing information).
     * - use: optional
     * @var string
     */
    public $Data;
    /**
     * Constructor method for RoutingHop
     * @uses RoutingHop::setSystemCode()
     * @uses RoutingHop::setLocalRefID()
     * @uses RoutingHop::setTimeStamp()
     * @uses RoutingHop::setComment()
     * @uses RoutingHop::setSequenceNmbr()
     * @uses RoutingHop::setData()
     * @param string $systemCode
     * @param string $localRefID
     * @param string $timeStamp
     * @param string $comment
     * @param int $sequenceNmbr
     * @param string $data
     */
    public function __construct($systemCode = null, $localRefID = null, $timeStamp = null, $comment = null, $sequenceNmbr = null, $data = null)
    {
        $this
            ->setSystemCode($systemCode)
            ->setLocalRefID($localRefID)
            ->setTimeStamp($timeStamp)
            ->setComment($comment)
            ->setSequenceNmbr($sequenceNmbr)
            ->setData($data);
    }
    /**
     * Get SystemCode value
     * @return string|null
     */
    public function getSystemCode()
    {
        return $this->SystemCode;
    }
    /**
     * Set SystemCode value
     * @param string $systemCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop
     */
    public function setSystemCode($systemCode = null)
    {
        // validation for constraint: string
        if (!is_null($systemCode) && !is_string($systemCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($systemCode)), __LINE__);
        }
        $this->SystemCode = $systemCode;
        return $this;
    }
    /**
     * Get LocalRefID value
     * @return string|null
     */
    public function getLocalRefID()
    {
        return $this->LocalRefID;
    }
    /**
     * Set LocalRefID value
     * @param string $localRefID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop
     */
    public function setLocalRefID($localRefID = null)
    {
        // validation for constraint: string
        if (!is_null($localRefID) && !is_string($localRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localRefID)), __LINE__);
        }
        $this->LocalRefID = $localRefID;
        return $this;
    }
    /**
     * Get TimeStamp value
     * @return string|null
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get SequenceNmbr value
     * @return int|null
     */
    public function getSequenceNmbr()
    {
        return $this->SequenceNmbr;
    }
    /**
     * Set SequenceNmbr value
     * @param int $sequenceNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop
     */
    public function setSequenceNmbr($sequenceNmbr = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNmbr) && !is_numeric($sequenceNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNmbr)), __LINE__);
        }
        $this->SequenceNmbr = $sequenceNmbr;
        return $this;
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($data)), __LINE__);
        }
        $this->Data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop
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

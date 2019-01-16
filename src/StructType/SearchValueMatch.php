<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchValueMatch StructType
 * Meta informations extracted from the WSDL
 * - documentation: The string value used to search for a property is returned. The SearchValueMatch element returns the input value and offers systems the ability to generate text in the Warnings that communicate the reason for failure to locate a
 * hotel. For example, a Reference Point search may return the following processing message; "No hotels found within 5 miles of Oswego Regional Airport". | Used for Character Strings, length 1 to 8.
 * - maxLength: 8
 * - minLength: 1
 * @subpackage Structs
 */
class SearchValueMatch extends AbstractStructBase
{
    /**
     * The Match
     * Meta informations extracted from the WSDL
     * - documentation: Indication of whether a match was found. The datatype is Boolean (true | false).
     * - use: required
     * @var bool
     */
    public $Match;
    /**
     * The Relevance
     * Meta informations extracted from the WSDL
     * - documentation: An optional attribute, expressed as a decimal value, representing a percentage of 100%, used to indicate the degree to which the property identified meets the search criteria.
     * @var string
     */
    public $Relevance;
    /**
     * Constructor method for SearchValueMatch
     * @uses SearchValueMatch::setMatch()
     * @uses SearchValueMatch::setRelevance()
     * @param bool $match
     * @param string $relevance
     */
    public function __construct($match = null, $relevance = null)
    {
        $this
            ->setMatch($match)
            ->setRelevance($relevance);
    }
    /**
     * Get Match value
     * @return bool
     */
    public function getMatch()
    {
        return $this->Match;
    }
    /**
     * Set Match value
     * @param bool $match
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch
     */
    public function setMatch($match = null)
    {
        // validation for constraint: boolean
        if (!is_null($match) && !is_bool($match)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($match)), __LINE__);
        }
        $this->Match = $match;
        return $this;
    }
    /**
     * Get Relevance value
     * @return string|null
     */
    public function getRelevance()
    {
        return $this->Relevance;
    }
    /**
     * Set Relevance value
     * @param string $relevance
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch
     */
    public function setRelevance($relevance = null)
    {
        // validation for constraint: string
        if (!is_null($relevance) && !is_string($relevance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relevance)), __LINE__);
        }
        $this->Relevance = $relevance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SearchValueMatch
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

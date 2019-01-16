<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MagneticStripe StructType
 * Meta informations extracted from the WSDL
 * - documentation: Card Magnetic Stripe Data as defined by ISO 7813 for banking cards.
 * @subpackage Structs
 */
class MagneticStripe extends AbstractStructBase
{
    /**
     * The Track1
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Track1;
    /**
     * The Track2
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Track2;
    /**
     * The Track3
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Track3;
    /**
     * Constructor method for MagneticStripe
     * @uses MagneticStripe::setTrack1()
     * @uses MagneticStripe::setTrack2()
     * @uses MagneticStripe::setTrack3()
     * @param string $track1
     * @param string $track2
     * @param string $track3
     */
    public function __construct($track1 = null, $track2 = null, $track3 = null)
    {
        $this
            ->setTrack1($track1)
            ->setTrack2($track2)
            ->setTrack3($track3);
    }
    /**
     * Get Track1 value
     * @return string|null
     */
    public function getTrack1()
    {
        return $this->Track1;
    }
    /**
     * Set Track1 value
     * @param string $track1
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MagneticStripe
     */
    public function setTrack1($track1 = null)
    {
        // validation for constraint: string
        if (!is_null($track1) && !is_string($track1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($track1)), __LINE__);
        }
        $this->Track1 = $track1;
        return $this;
    }
    /**
     * Get Track2 value
     * @return string|null
     */
    public function getTrack2()
    {
        return $this->Track2;
    }
    /**
     * Set Track2 value
     * @param string $track2
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MagneticStripe
     */
    public function setTrack2($track2 = null)
    {
        // validation for constraint: string
        if (!is_null($track2) && !is_string($track2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($track2)), __LINE__);
        }
        $this->Track2 = $track2;
        return $this;
    }
    /**
     * Get Track3 value
     * @return string|null
     */
    public function getTrack3()
    {
        return $this->Track3;
    }
    /**
     * Set Track3 value
     * @param string $track3
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MagneticStripe
     */
    public function setTrack3($track3 = null)
    {
        // validation for constraint: string
        if (!is_null($track3) && !is_string($track3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($track3)), __LINE__);
        }
        $this->Track3 = $track3;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MagneticStripe
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

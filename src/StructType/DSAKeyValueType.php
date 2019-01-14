<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DSAKeyValueType StructType
 * @subpackage Structs
 */
class DSAKeyValueType extends AbstractStructBase
{
    /**
     * The P
     * @var CryptoBinary
     */
    public $P;
    /**
     * The Q
     * @var CryptoBinary
     */
    public $Q;
    /**
     * The G
     * @var CryptoBinary
     */
    public $G;
    /**
     * The Y
     * @var CryptoBinary
     */
    public $Y;
    /**
     * The J
     * @var CryptoBinary
     */
    public $J;
    /**
     * The Seed
     * @var CryptoBinary
     */
    public $Seed;
    /**
     * The PgenCounter
     * @var CryptoBinary
     */
    public $PgenCounter;
    /**
     * Constructor method for DSAKeyValueType
     * @uses DSAKeyValueType::setP()
     * @uses DSAKeyValueType::setQ()
     * @uses DSAKeyValueType::setG()
     * @uses DSAKeyValueType::setY()
     * @uses DSAKeyValueType::setJ()
     * @uses DSAKeyValueType::setSeed()
     * @uses DSAKeyValueType::setPgenCounter()
     * @param CryptoBinary $p
     * @param CryptoBinary $q
     * @param CryptoBinary $g
     * @param CryptoBinary $y
     * @param CryptoBinary $j
     * @param CryptoBinary $seed
     * @param CryptoBinary $pgenCounter
     */
    public function __construct(CryptoBinary $p = null, CryptoBinary $q = null, CryptoBinary $g = null, CryptoBinary $y = null, CryptoBinary $j = null, CryptoBinary $seed = null, CryptoBinary $pgenCounter = null)
    {
        $this
            ->setP($p)
            ->setQ($q)
            ->setG($g)
            ->setY($y)
            ->setJ($j)
            ->setSeed($seed)
            ->setPgenCounter($pgenCounter);
    }
    /**
     * Get P value
     * @return CryptoBinary|null
     */
    public function getP()
    {
        return $this->P;
    }
    /**
     * Set P value
     * @param CryptoBinary $p
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DSAKeyValueType
     */
    public function setP(CryptoBinary $p = null)
    {
        $this->P = $p;
        return $this;
    }
    /**
     * Get Q value
     * @return CryptoBinary|null
     */
    public function getQ()
    {
        return $this->Q;
    }
    /**
     * Set Q value
     * @param CryptoBinary $q
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DSAKeyValueType
     */
    public function setQ(CryptoBinary $q = null)
    {
        $this->Q = $q;
        return $this;
    }
    /**
     * Get G value
     * @return CryptoBinary|null
     */
    public function getG()
    {
        return $this->G;
    }
    /**
     * Set G value
     * @param CryptoBinary $g
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DSAKeyValueType
     */
    public function setG(CryptoBinary $g = null)
    {
        $this->G = $g;
        return $this;
    }
    /**
     * Get Y value
     * @return CryptoBinary|null
     */
    public function getY()
    {
        return $this->Y;
    }
    /**
     * Set Y value
     * @param CryptoBinary $y
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DSAKeyValueType
     */
    public function setY(CryptoBinary $y = null)
    {
        $this->Y = $y;
        return $this;
    }
    /**
     * Get J value
     * @return CryptoBinary|null
     */
    public function getJ()
    {
        return $this->J;
    }
    /**
     * Set J value
     * @param CryptoBinary $j
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DSAKeyValueType
     */
    public function setJ(CryptoBinary $j = null)
    {
        $this->J = $j;
        return $this;
    }
    /**
     * Get Seed value
     * @return CryptoBinary|null
     */
    public function getSeed()
    {
        return $this->Seed;
    }
    /**
     * Set Seed value
     * @param CryptoBinary $seed
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DSAKeyValueType
     */
    public function setSeed(CryptoBinary $seed = null)
    {
        $this->Seed = $seed;
        return $this;
    }
    /**
     * Get PgenCounter value
     * @return CryptoBinary|null
     */
    public function getPgenCounter()
    {
        return $this->PgenCounter;
    }
    /**
     * Set PgenCounter value
     * @param CryptoBinary $pgenCounter
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DSAKeyValueType
     */
    public function setPgenCounter(CryptoBinary $pgenCounter = null)
    {
        $this->PgenCounter = $pgenCounter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DSAKeyValueType
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

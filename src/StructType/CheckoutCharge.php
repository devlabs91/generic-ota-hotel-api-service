<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckoutCharge StructType
 * Meta informations extracted from the WSDL
 * - documentation: The charges that may apply to an early or late checkout. | May be used to give further detail on the enumerated list or to remove an obsolete item. | May be used to give further detail on the enumerated list or to remove an obsolete
 * item.
 * @subpackage Structs
 */
class CheckoutCharge extends AbstractStructBase
{
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - documentation: The percentage of the room rate that applies to an early/late checkout.
     * - use: optional
     * @var string
     */
    public $Percent;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The NmbrOfNights
     * Meta informations extracted from the WSDL
     * - documentation: The number of nights used to calculate the fee amount. | The number of nights used to calculate the fee amount.
     * - use: optional
     * @var int
     */
    public $NmbrOfNights;
    /**
     * The ExistsCode
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is used to explicitly define whether the checkout charge applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Type. | This attribute is used to explicitly define whether the
     * checkout charge applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Type.
     * - use: optional
     * @var string
     */
    public $ExistsCode;
    /**
     * The BalanceOfStayInd
     * Meta informations extracted from the WSDL
     * - documentation: If true the charge for early checkout is the amount that would be charged for the remaining time of the original reservation. | If true the charge for early checkout is the amount that would be charged for the remaining time of the
     * original reservation.
     * - use: optional
     * @var bool
     */
    public $BalanceOfStayInd;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * Constructor method for CheckoutCharge
     * @uses CheckoutCharge::setPercent()
     * @uses CheckoutCharge::setType()
     * @uses CheckoutCharge::setNmbrOfNights()
     * @uses CheckoutCharge::setExistsCode()
     * @uses CheckoutCharge::setBalanceOfStayInd()
     * @uses CheckoutCharge::setDescription()
     * @param string $percent
     * @param string $type
     * @param int $nmbrOfNights
     * @param string $existsCode
     * @param bool $balanceOfStayInd
     * @param mixed[] $description
     */
    public function __construct($percent = null, $type = null, $nmbrOfNights = null, $existsCode = null, $balanceOfStayInd = null, array $description = array())
    {
        $this
            ->setPercent($percent)
            ->setType($type)
            ->setNmbrOfNights($nmbrOfNights)
            ->setExistsCode($existsCode)
            ->setBalanceOfStayInd($balanceOfStayInd)
            ->setDescription($description);
    }
    /**
     * Get Percent value
     * @return string|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percent)), __LINE__);
        }
        $this->Percent = $percent;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge
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
     * Get NmbrOfNights value
     * @return int|null
     */
    public function getNmbrOfNights()
    {
        return $this->NmbrOfNights;
    }
    /**
     * Set NmbrOfNights value
     * @param int $nmbrOfNights
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge
     */
    public function setNmbrOfNights($nmbrOfNights = null)
    {
        // validation for constraint: int
        if (!is_null($nmbrOfNights) && !is_numeric($nmbrOfNights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nmbrOfNights)), __LINE__);
        }
        $this->NmbrOfNights = $nmbrOfNights;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge
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
     * Get BalanceOfStayInd value
     * @return bool|null
     */
    public function getBalanceOfStayInd()
    {
        return $this->BalanceOfStayInd;
    }
    /**
     * Set BalanceOfStayInd value
     * @param bool $balanceOfStayInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge
     */
    public function setBalanceOfStayInd($balanceOfStayInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($balanceOfStayInd) && !is_bool($balanceOfStayInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($balanceOfStayInd)), __LINE__);
        }
        $this->BalanceOfStayInd = $balanceOfStayInd;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $checkoutChargeDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($checkoutChargeDescriptionItem) ? get_class($checkoutChargeDescriptionItem) : gettype($checkoutChargeDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge
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

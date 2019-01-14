<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleProfileRentalPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Vehicle rental preferences can be specified for customers or companies to indicate their preferences for types of vehicles to be rented in specific travel situations. Companies may wish to specify certain class or types of cars that
 * their employees are allowed to rent, or indicate special business needs for trucks for hauling goods, etc. Personal travelers may wish to indicate preferences for types of vehicles such as vans or SUVs for family vacations, or smaller, more sporty
 * models when travelling alone. A customer may prefer to have a convertible or sun roof in a warm destination, but request a ski rack when vacationing in the wintertime. The VehicleProfileRentalPrefType complex type has elements for specific features
 * on rental cars including vehicle type (major category such as car, truck, SUV) and vehicle class (more precise kind of vehicle), air conditioning, transmission, and special equipment. In addition, the specification captures preferences for vendors
 * and loyalty programs, insurance coverage, forms of payment for rental cars, and other special requirements.
 * @subpackage Structs
 */
class VehicleProfileRentalPrefType extends AbstractStructBase
{
    /**
     * The LoyaltyPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates a preference for the loyalty program to be used for vehicle rental. The RPH (Reference Place Holder) attribute designates a specific loyalty program from a collection stored in the profile.
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var mixed[]
     */
    public $LoyaltyPref;
    /**
     * The VendorPref
     * Meta informations extracted from the WSDL
     * - documentation: Vendor Preferences indicates a preference for a specific car rental agency when used in a travel collection. The VendorPref element uses the Company Name entity to identify the preferred company by name and by vendor code.
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var mixed[]
     */
    public $VendorPref;
    /**
     * The PaymentFormPref
     * Meta informations extracted from the WSDL
     * - documentation: A preference for a payment indicates a specific type of payment, such as a credit card or direct bill, to be assigned to the car rental preference collection. The RPH (Reference Place Holder) attribute designates a specific payment
     * form in a collection stored in the profile.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PaymentFormPref;
    /**
     * The CoveragePref
     * Meta informations extracted from the WSDL
     * - documentation: A preference for a specific type of vehicle coverage to be used when renting a car in a given travel situation.
     * - maxOccurs: 30
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CoveragePref;
    /**
     * The SpecialReqPref
     * Meta informations extracted from the WSDL
     * - documentation: The special request preference element allows the customer to designate a special request to be associated with the vehicle rental.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SpecialReqPref;
    /**
     * The VehTypePref
     * Meta informations extracted from the WSDL
     * - documentation: The vehicle type preference element allows the customer to designate a major category of vehicle preferred for rental.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var mixed[]
     */
    public $VehTypePref;
    /**
     * The SpecialEquipPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates a preference for special equipment in a rented car.
     * - maxOccurs: 15
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SpecialEquipPref;
    /**
     * The GasPrePay
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: The GasPrePay attribute defines a set of valid values for the choice of prepaying for gas at the time of the pick up of the rental vehicle. This information is useful in that it allows a customer's preference to be made known to the
     * vendor. It also allows the vendor to provide more detailed and accurate pricing up front.
     * - use: optional
     * @var bool
     */
    public $GasPrePay;
    /**
     * Constructor method for VehicleProfileRentalPrefType
     * @uses VehicleProfileRentalPrefType::setLoyaltyPref()
     * @uses VehicleProfileRentalPrefType::setVendorPref()
     * @uses VehicleProfileRentalPrefType::setPaymentFormPref()
     * @uses VehicleProfileRentalPrefType::setCoveragePref()
     * @uses VehicleProfileRentalPrefType::setSpecialReqPref()
     * @uses VehicleProfileRentalPrefType::setVehTypePref()
     * @uses VehicleProfileRentalPrefType::setSpecialEquipPref()
     * @uses VehicleProfileRentalPrefType::setGasPrePay()
     * @param mixed[] $loyaltyPref
     * @param mixed[] $vendorPref
     * @param mixed[] $paymentFormPref
     * @param mixed[] $coveragePref
     * @param mixed[] $specialReqPref
     * @param mixed[] $vehTypePref
     * @param mixed[] $specialEquipPref
     * @param bool $gasPrePay
     */
    public function __construct(array $loyaltyPref = array(), array $vendorPref = array(), array $paymentFormPref = array(), array $coveragePref = array(), array $specialReqPref = array(), array $vehTypePref = array(), array $specialEquipPref = array(), $gasPrePay = false)
    {
        $this
            ->setLoyaltyPref($loyaltyPref)
            ->setVendorPref($vendorPref)
            ->setPaymentFormPref($paymentFormPref)
            ->setCoveragePref($coveragePref)
            ->setSpecialReqPref($specialReqPref)
            ->setVehTypePref($vehTypePref)
            ->setSpecialEquipPref($specialEquipPref)
            ->setGasPrePay($gasPrePay);
    }
    /**
     * Get LoyaltyPref value
     * @return mixed[]|null
     */
    public function getLoyaltyPref()
    {
        return $this->LoyaltyPref;
    }
    /**
     * Set LoyaltyPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $loyaltyPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function setLoyaltyPref(array $loyaltyPref = array())
    {
        foreach ($loyaltyPref as $vehicleProfileRentalPrefTypeLoyaltyPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The LoyaltyPref property can only contain items of anyType, "%s" given', is_object($vehicleProfileRentalPrefTypeLoyaltyPrefItem) ? get_class($vehicleProfileRentalPrefTypeLoyaltyPrefItem) : gettype($vehicleProfileRentalPrefTypeLoyaltyPrefItem)), __LINE__);
            }
        }
        $this->LoyaltyPref = $loyaltyPref;
        return $this;
    }
    /**
     * Add item to LoyaltyPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function addToLoyaltyPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The LoyaltyPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LoyaltyPref[] = $item;
        return $this;
    }
    /**
     * Get VendorPref value
     * @return mixed[]|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $vendorPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function setVendorPref(array $vendorPref = array())
    {
        foreach ($vendorPref as $vehicleProfileRentalPrefTypeVendorPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of anyType, "%s" given', is_object($vehicleProfileRentalPrefTypeVendorPrefItem) ? get_class($vehicleProfileRentalPrefTypeVendorPrefItem) : gettype($vehicleProfileRentalPrefTypeVendorPrefItem)), __LINE__);
            }
        }
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Add item to VendorPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function addToVendorPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VendorPref[] = $item;
        return $this;
    }
    /**
     * Get PaymentFormPref value
     * @return mixed[]|null
     */
    public function getPaymentFormPref()
    {
        return $this->PaymentFormPref;
    }
    /**
     * Set PaymentFormPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $paymentFormPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function setPaymentFormPref(array $paymentFormPref = array())
    {
        foreach ($paymentFormPref as $vehicleProfileRentalPrefTypePaymentFormPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PaymentFormPref property can only contain items of anyType, "%s" given', is_object($vehicleProfileRentalPrefTypePaymentFormPrefItem) ? get_class($vehicleProfileRentalPrefTypePaymentFormPrefItem) : gettype($vehicleProfileRentalPrefTypePaymentFormPrefItem)), __LINE__);
            }
        }
        $this->PaymentFormPref = $paymentFormPref;
        return $this;
    }
    /**
     * Add item to PaymentFormPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function addToPaymentFormPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PaymentFormPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentFormPref[] = $item;
        return $this;
    }
    /**
     * Get CoveragePref value
     * @return mixed[]|null
     */
    public function getCoveragePref()
    {
        return $this->CoveragePref;
    }
    /**
     * Set CoveragePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $coveragePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function setCoveragePref(array $coveragePref = array())
    {
        foreach ($coveragePref as $vehicleProfileRentalPrefTypeCoveragePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CoveragePref property can only contain items of anyType, "%s" given', is_object($vehicleProfileRentalPrefTypeCoveragePrefItem) ? get_class($vehicleProfileRentalPrefTypeCoveragePrefItem) : gettype($vehicleProfileRentalPrefTypeCoveragePrefItem)), __LINE__);
            }
        }
        $this->CoveragePref = $coveragePref;
        return $this;
    }
    /**
     * Add item to CoveragePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function addToCoveragePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CoveragePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CoveragePref[] = $item;
        return $this;
    }
    /**
     * Get SpecialReqPref value
     * @return mixed[]|null
     */
    public function getSpecialReqPref()
    {
        return $this->SpecialReqPref;
    }
    /**
     * Set SpecialReqPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $specialReqPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function setSpecialReqPref(array $specialReqPref = array())
    {
        foreach ($specialReqPref as $vehicleProfileRentalPrefTypeSpecialReqPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecialReqPref property can only contain items of anyType, "%s" given', is_object($vehicleProfileRentalPrefTypeSpecialReqPrefItem) ? get_class($vehicleProfileRentalPrefTypeSpecialReqPrefItem) : gettype($vehicleProfileRentalPrefTypeSpecialReqPrefItem)), __LINE__);
            }
        }
        $this->SpecialReqPref = $specialReqPref;
        return $this;
    }
    /**
     * Add item to SpecialReqPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function addToSpecialReqPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SpecialReqPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialReqPref[] = $item;
        return $this;
    }
    /**
     * Get VehTypePref value
     * @return mixed[]|null
     */
    public function getVehTypePref()
    {
        return $this->VehTypePref;
    }
    /**
     * Set VehTypePref value
     * @throws \InvalidArgumentException
     * @param mixed[] $vehTypePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function setVehTypePref(array $vehTypePref = array())
    {
        foreach ($vehTypePref as $vehicleProfileRentalPrefTypeVehTypePrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VehTypePref property can only contain items of anyType, "%s" given', is_object($vehicleProfileRentalPrefTypeVehTypePrefItem) ? get_class($vehicleProfileRentalPrefTypeVehTypePrefItem) : gettype($vehicleProfileRentalPrefTypeVehTypePrefItem)), __LINE__);
            }
        }
        $this->VehTypePref = $vehTypePref;
        return $this;
    }
    /**
     * Add item to VehTypePref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function addToVehTypePref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VehTypePref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehTypePref[] = $item;
        return $this;
    }
    /**
     * Get SpecialEquipPref value
     * @return mixed[]|null
     */
    public function getSpecialEquipPref()
    {
        return $this->SpecialEquipPref;
    }
    /**
     * Set SpecialEquipPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $specialEquipPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function setSpecialEquipPref(array $specialEquipPref = array())
    {
        foreach ($specialEquipPref as $vehicleProfileRentalPrefTypeSpecialEquipPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecialEquipPref property can only contain items of anyType, "%s" given', is_object($vehicleProfileRentalPrefTypeSpecialEquipPrefItem) ? get_class($vehicleProfileRentalPrefTypeSpecialEquipPrefItem) : gettype($vehicleProfileRentalPrefTypeSpecialEquipPrefItem)), __LINE__);
            }
        }
        $this->SpecialEquipPref = $specialEquipPref;
        return $this;
    }
    /**
     * Add item to SpecialEquipPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function addToSpecialEquipPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SpecialEquipPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialEquipPref[] = $item;
        return $this;
    }
    /**
     * Get GasPrePay value
     * @return bool|null
     */
    public function getGasPrePay()
    {
        return $this->GasPrePay;
    }
    /**
     * Set GasPrePay value
     * @param bool $gasPrePay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
     */
    public function setGasPrePay($gasPrePay = false)
    {
        // validation for constraint: boolean
        if (!is_null($gasPrePay) && !is_bool($gasPrePay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gasPrePay)), __LINE__);
        }
        $this->GasPrePay = $gasPrePay;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleProfileRentalPrefType
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

<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalTransactionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This contains the information typically used in a rental transaction, such as charges, contract number or pickup date/time.
 * @subpackage Structs
 */
class VehicleRentalTransactionType extends AbstractStructBase
{
    /**
     * The PickUpReturnDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails[]
     */
    public $PickUpReturnDetails;
    /**
     * The Vehicle
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle
     */
    public $Vehicle;
    /**
     * The RentalRate
     * Meta informations extracted from the WSDL
     * - documentation: This describes time, mileage and other charges for a specific rental agreement.
     * - minOccurs: 0
     * @var mixed
     */
    public $RentalRate;
    /**
     * The PricedEquips
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips
     */
    public $PricedEquips;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Fees
     */
    public $Fees;
    /**
     * The TotalCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge
     */
    public $TotalCharge;
    /**
     * The ConfID
     * Meta informations extracted from the WSDL
     * - documentation: A confirmation number.
     * - minOccurs: 0
     * @var mixed
     */
    public $ConfID;
    /**
     * The ContractID
     * Meta informations extracted from the WSDL
     * - documentation: A contract number.
     * - minOccurs: 0
     * @var mixed
     */
    public $ContractID;
    /**
     * Constructor method for VehicleRentalTransactionType
     * @uses VehicleRentalTransactionType::setPickUpReturnDetails()
     * @uses VehicleRentalTransactionType::setVehicle()
     * @uses VehicleRentalTransactionType::setRentalRate()
     * @uses VehicleRentalTransactionType::setPricedEquips()
     * @uses VehicleRentalTransactionType::setFees()
     * @uses VehicleRentalTransactionType::setTotalCharge()
     * @uses VehicleRentalTransactionType::setConfID()
     * @uses VehicleRentalTransactionType::setContractID()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails[] $pickUpReturnDetails
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle $vehicle
     * @param mixed $rentalRate
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge $totalCharge
     * @param mixed $confID
     * @param mixed $contractID
     */
    public function __construct(array $pickUpReturnDetails = array(), \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle $vehicle = null, $rentalRate = null, \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips = null, \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null, \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge $totalCharge = null, $confID = null, $contractID = null)
    {
        $this
            ->setPickUpReturnDetails($pickUpReturnDetails)
            ->setVehicle($vehicle)
            ->setRentalRate($rentalRate)
            ->setPricedEquips($pricedEquips)
            ->setFees($fees)
            ->setTotalCharge($totalCharge)
            ->setConfID($confID)
            ->setContractID($contractID);
    }
    /**
     * Get PickUpReturnDetails value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails[]|null
     */
    public function getPickUpReturnDetails()
    {
        return $this->PickUpReturnDetails;
    }
    /**
     * Set PickUpReturnDetails value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails[] $pickUpReturnDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalTransactionType
     */
    public function setPickUpReturnDetails(array $pickUpReturnDetails = array())
    {
        foreach ($pickUpReturnDetails as $vehicleRentalTransactionTypePickUpReturnDetailsItem) {
            // validation for constraint: itemType
            if (!$vehicleRentalTransactionTypePickUpReturnDetailsItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails) {
                throw new \InvalidArgumentException(sprintf('The PickUpReturnDetails property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails, "%s" given', is_object($vehicleRentalTransactionTypePickUpReturnDetailsItem) ? get_class($vehicleRentalTransactionTypePickUpReturnDetailsItem) : gettype($vehicleRentalTransactionTypePickUpReturnDetailsItem)), __LINE__);
            }
        }
        $this->PickUpReturnDetails = $pickUpReturnDetails;
        return $this;
    }
    /**
     * Add item to PickUpReturnDetails value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalTransactionType
     */
    public function addToPickUpReturnDetails(\Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails) {
            throw new \InvalidArgumentException(sprintf('The PickUpReturnDetails property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PickUpReturnDetails[] = $item;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle $vehicle
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalTransactionType
     */
    public function setVehicle(\Devlabs91\GenericOtaHotelApiService\StructType\Vehicle $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get RentalRate value
     * @return mixed|null
     */
    public function getRentalRate()
    {
        return $this->RentalRate;
    }
    /**
     * Set RentalRate value
     * @param mixed $rentalRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalTransactionType
     */
    public function setRentalRate($rentalRate = null)
    {
        $this->RentalRate = $rentalRate;
        return $this;
    }
    /**
     * Get PricedEquips value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips|null
     */
    public function getPricedEquips()
    {
        return $this->PricedEquips;
    }
    /**
     * Set PricedEquips value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalTransactionType
     */
    public function setPricedEquips(\Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips = null)
    {
        $this->PricedEquips = $pricedEquips;
        return $this;
    }
    /**
     * Get Fees value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalTransactionType
     */
    public function setFees(\Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get TotalCharge value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge|null
     */
    public function getTotalCharge()
    {
        return $this->TotalCharge;
    }
    /**
     * Set TotalCharge value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge $totalCharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalTransactionType
     */
    public function setTotalCharge(\Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
        return $this;
    }
    /**
     * Get ConfID value
     * @return mixed|null
     */
    public function getConfID()
    {
        return $this->ConfID;
    }
    /**
     * Set ConfID value
     * @param mixed $confID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalTransactionType
     */
    public function setConfID($confID = null)
    {
        $this->ConfID = $confID;
        return $this;
    }
    /**
     * Get ContractID value
     * @return mixed|null
     */
    public function getContractID()
    {
        return $this->ContractID;
    }
    /**
     * Set ContractID value
     * @param mixed $contractID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalTransactionType
     */
    public function setContractID($contractID = null)
    {
        $this->ContractID = $contractID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalTransactionType
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

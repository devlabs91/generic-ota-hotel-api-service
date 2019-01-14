<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingRooms StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of meeting rooms that are comprised within the hotel.
 * @subpackage Structs
 */
class MeetingRooms extends MeetingRoomsType
{
    /**
     * The Codes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Codes
     */
    public $Codes;
    /**
     * Constructor method for MeetingRooms
     * @uses MeetingRooms::setCodes()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Codes $codes
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Codes $codes = null)
    {
        $this
            ->setCodes($codes);
    }
    /**
     * Get Codes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Codes|null
     */
    public function getCodes()
    {
        return $this->Codes;
    }
    /**
     * Set Codes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Codes $codes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRooms
     */
    public function setCodes(\Devlabs91\GenericOtaHotelApiService\StructType\Codes $codes = null)
    {
        $this->Codes = $codes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRooms
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
